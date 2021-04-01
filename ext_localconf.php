<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(
    function () {
        // override default mailer to catch and store all e-mails int the database
        if (class_exists('Bpn\MailMock\Core\Mail\MailMessage')) {
            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\CMS\Core\Mail\MailMessage'] =
                ['className' => \Bpn\MailMock\Core\Mail\MailMessage::class];
        }
    }
);

