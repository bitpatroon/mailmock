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

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class MailMock extends AbstractEntity
{
    /** @var int */
    protected $tstamp;
    /** @var int */
    protected $crdate;
    /** @var string */
    protected $subject;
    /** @var string */
    protected $message;
    /** @var string */
    protected $sender;
    /** @var string */
    protected $recipients;

    /**
     * @return int
     */
    public function getTstamp() : int
    {
        return $this->tstamp;
    }

    /**
     * @param int $tstamp
     *
     * @return MailMock
     */
    public function setTstamp(int $tstamp) : MailMock
    {
        $this->tstamp = $tstamp;

        return $this;
    }

    /**
     * @return int
     */
    public function getCrdate() : int
    {
        return $this->crdate;
    }

    /**
     * @param int $crdate
     *
     * @return MailMock
     */
    public function setCrdate(int $crdate) : MailMock
    {
        $this->crdate = $crdate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject() : string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return MailMock
     */
    public function setSubject(string $subject) : MailMock
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return MailMock
     */
    public function setMessage(string $message) : MailMock
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getSender() : string
    {
        return $this->sender;
    }

    /**
     * @param string $sender
     *
     * @return MailMock
     */
    public function setSender(string $sender) : MailMock
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipients() : string
    {
        return $this->recipients;
    }

    /**
     * @param string $recipients
     *
     * @return MailMock
     */
    public function setRecipients(string $recipients) : MailMock
    {
        $this->recipients = $recipients;

        return $this;
    }

    
}
