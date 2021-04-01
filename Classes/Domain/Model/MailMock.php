<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2021 Sjoerd Zonneveld  <code@bitpatroon.nl>
 *  Date: 1-4-2021 11:57
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

namespace Bpn\MailMock\Domain\Model;

class MailMock extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * @var int
     */
    protected $tstamp = 0;
    /**
     * @var int
     */
    protected $crdate = 0;
    /**
     * @var string
     */
    protected $subject = '';
    /**
     * @var string
     */
    protected $html = '';
    /**
     * @var string
     */
    protected $text = '';
    /**
     * @var string
     */
    protected $sender = '';
    /**
     * @var string
     */
    protected $recipients = '';

    /**
     * MailMock constructor.
     */
    public function __construct()
    {
        $this->setTstamp(time());
        $this->setCrdate(time());
    }

    public function getTstamp(): int
    {
        return $this->tstamp;
    }

    public function setTstamp(int $tstamp): MailMock
    {
        $this->tstamp = $tstamp;

        return $this;
    }

    public function getCrdate(): int
    {
        return $this->crdate;
    }

    public function setCrdate(int $crdate): MailMock
    {
        $this->crdate = $crdate;

        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): MailMock
    {
        $this->subject = $subject;

        return $this;
    }

    public function getHtml(): string
    {
        return $this->html;
    }

    public function setHtml(string $html): MailMock
    {
        $this->html = $html;

        return $this;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): MailMock
    {
        $this->text = $text;

        return $this;
    }

    public function getSender(): string
    {
        return $this->sender;
    }

    public function setSender(string $sender): MailMock
    {
        $this->sender = $sender;

        return $this;
    }

    public function getRecipients(): string
    {
        return $this->recipients;
    }

    public function setRecipients(string $recipients): MailMock
    {
        $this->recipients = $recipients;

        return $this;
    }
}
