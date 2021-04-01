<?php

namespace Bpn\MailMock\Core\Mail;

use Bpn\MailMock\Domain\Model\MailMock;
use Bpn\MailMock\Domain\Repository\MailMockRepository;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;

/**
 * Class MailMessage
 */
class MailMessage extends \TYPO3\CMS\Core\Mail\MailMessage
{

    /**
     * Log messages for development or testing for testing purposes
     */
    public function send() : bool
    {
        $applicationContext = Environment::getContext();
        if ($applicationContext->isDevelopment() || $applicationContext->isTesting()) {
            $this->storeMailAsMock();
        }

        // call original function
        return parent::send();
    }

    /**
     * Gets the original from e-mailaddress
     *
     * @return string
     */
    protected function getOriginalFrom()
    {
        return current($this->getFrom())->getAddress();
    }

    /**
     * Gets the original from e-mailaddress
     *
     * @return string
     */
    protected function getOriginalTo()
    {
        $to = $this->getTo();

        $result = [];
        foreach ($to as $item) {
            $result[] = $item->getAddress();
        }

        return implode(',', $result);
    }

    private function storeMailAsMock()
    {
        $mailMock = new MailMock();
        $mailMock
            ->setTstamp(time())
            ->setCrdate(time())
            ->setSubject($this->getSubject() ?? '')
            ->setHtml($this->getHtmlBody() ?? '')
            ->setText($this->getTextBody() ?? '')
            ->setSender($this->getOriginalFrom() ?? '')
            ->setRecipients($this->getOriginalTo() ?? '');

        /** @var MailMockRepository $mailMockRepository */
        $mailMockRepository = GeneralUtility::makeInstance(ObjectManager::class)
            ->get(MailMockRepository::class);

        $mailMockRepository->add($mailMock);

        GeneralUtility::getContainer()->get(PersistenceManager::class)->persistAll();
    }
}
