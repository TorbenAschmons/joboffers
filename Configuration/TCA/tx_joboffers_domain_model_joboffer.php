<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:joboffers/Resources/Private/Language/locallang_db.xlf:tx_joboffers_domain_model_joboffer',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'title,deactivated,date,description,tasks,profile,downloads,location,department',
        'iconfile' => 'EXT:joboffers/Resources/Public/Icons/tx_joboffers_domain_model_joboffer.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, deactivated, date, description, tasks, profile, downloads, location, department',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, deactivated, date, description, tasks, profile, downloads, location, department, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_joboffers_domain_model_joboffer',
                'foreign_table_where' => 'AND tx_joboffers_domain_model_joboffer.pid=###CURRENT_PID### AND tx_joboffers_domain_model_joboffer.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'title' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:joboffers/Resources/Private/Language/locallang_db.xlf:tx_joboffers_domain_model_joboffer.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'date' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:joboffers/Resources/Private/Language/locallang_db.xlf:tx_joboffers_domain_model_joboffer.date',
	        'config' => [
			    'dbType' => 'date',
			    'type' => 'input',
			    'size' => 7,
			    'eval' => 'date',
			    'default' => '0000-00-00'
			],
	    ],
	    'description' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:joboffers/Resources/Private/Language/locallang_db.xlf:tx_joboffers_domain_model_joboffer.description',
	        'config' => [
			    'type' => 'text',
			    'cols' => 20,
			    'rows' => 15,
				'enableRichtext' => true
			],
			'defaultExtras' => 'richtext[]',
	    ],
	    'tasks' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:joboffers/Resources/Private/Language/locallang_db.xlf:tx_joboffers_domain_model_joboffer.tasks',
	        'config' => [
			    'type' => 'text',
			    'cols' => 20,
			    'rows' => 15,
				'enableRichtext' => true
			],
			'defaultExtras' => 'richtext[]',
	    ],
	    'profile' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:joboffers/Resources/Private/Language/locallang_db.xlf:tx_joboffers_domain_model_joboffer.profile',
	        'config' => [
			    'type' => 'text',
			    'cols' => 20,
			    'rows' => 15,
				'enableRichtext' => true
			],
			'defaultExtras' => 'richtext[]',
	    ],
	    'downloads' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:joboffers/Resources/Private/Language/locallang_db.xlf:tx_joboffers_domain_model_joboffer.downloads',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'downloads',
				[
					'appearance' => [
						'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference'
					],
					'foreign_types' => [
						'0' => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						]
					],
					'maxitems' => 1
				],
				'jpg,pdf'
			),
	    ],
	    'location' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:joboffers/Resources/Private/Language/locallang_db.xlf:tx_joboffers_domain_model_joboffer.location',
	        'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_joboffers_domain_model_location',
                'foreign_table_where' => 'AND 1=1 Order by title ASC',
			    'minitems' => 1,
			    'maxitems' => 1,
			],
	    ],
	    'department' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:joboffers/Resources/Private/Language/locallang_db.xlf:tx_joboffers_domain_model_joboffer.department',
	        'config' => [
                'type' => 'select',
			    'foreign_table' => 'tx_joboffers_domain_model_department',
                'foreign_table_where' => 'AND 1=1 Order by title ASC',
                'minitems' => 1,
                'maxitems' => 1,
			],
	    ],
    ],
];
