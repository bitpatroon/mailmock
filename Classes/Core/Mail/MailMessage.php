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
        /** @var string|array $from */
        $from = $this->getFrom();

        return implode(',', array_keys($from));
    }

    /**
     * Gets the original from e-mailaddress
     *
     * @return string
     */
    protected function getOriginalTo()
    {
        /** @var string|array $from */
        $to = $this->getTo();

        return implode(',', array_keys($to));
    }

    private function storeMailAsMock()
    {
        $mailMock = new MailMock();
        $mailMock
            ->setTstamp(time())
            ->setCrdate(time())
            ->setSubject($this->getSubject())
            ->setMessage($this->getBody())
            ->setSender($this->getOriginalFrom())
            ->setRecipients($this->getOriginalTo());

        /** @var MailMockRepository $mailMockRepository */
        $mailMockRepository = GeneralUtility::makeInstance(ObjectManager::class)
            ->get(MailMockRepository::class);

        $mailMockRepository->add($mailMock);

        /** @var PersistenceManager $persistenceManager */
        $persistenceManager = GeneralUtility::makeInstance(ObjectManager::class)
            ->get(PersistenceManager::class);

        $persistenceManager->persistAll();
    }
}
