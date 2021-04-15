<?php

return [
    'ctrl'    => [
        'title'    => 'LLL:EXT:mailmock/Resources/Private/Language/locallang_tca.xlf:tx_mailmock_domain_model_mailmock',
        'label'    => 'name',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/content/content-form.svg'
    ],
    'columns' => [
        'tstamp'     => [
            'label'  => 'LLL:EXT:mailmock/Resources/Private/Language/locallang_tca.xlf:tx_mailmock_domain_model_mailmock.tstamp',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim,datetime'
            ],
        ],
        'crdate'     => [
            'label'  => 'LLL:EXT:mailmock/Resources/Private/Language/locallang_tca.xlf:tx_mailmock_domain_model_mailmock.crdate',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim,datetime',
            ],
        ],
        'subject'    => [
            'label'  => 'LLL:EXT:mailmock/Resources/Private/Language/locallang_tca.xlf:tx_mailmock_domain_model_mailmock.subject',
            'config' => [
                'type' => 'input',
            ],
        ],
        'sender'     => [
            'label'  => 'LLL:EXT:mailmock/Resources/Private/Language/locallang_tca.xlf:tx_mailmock_domain_model_mailmock.sender',
            'config' => [
                'type' => 'input',
            ],
        ],
        'recipients' => [
            'label'  => 'LLL:EXT:mailmock/Resources/Private/Language/locallang_tca.xlf:tx_mailmock_domain_model_mailmock.recipients',
            'config' => [
                'type' => 'input',
            ],
        ],
        'html'       => [
            'label'  => 'LLL:EXT:mailmock/Resources/Private/Language/locallang_tca.xlf:tx_mailmock_domain_model_mailmock.html',
            'config' => [
                'type' => 'text',
            ],
        ],
        'text'       => [
            'label'  => 'LLL:EXT:mailmock/Resources/Private/Language/locallang_tca.xlf:tx_mailmock_domain_model_mailmock.text',
            'config' => [
                'type' => 'text',
            ],
        ],
    ],
    'types'   => [
        '0' => ['showitem' => 'subject, sender, recipients', 'html', 'text'],
    ],
];
