<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PhoSTO.StowebPhoto',
            'Front1',
            [
                'Photo' => 'list, show, search',
                'Comment' => 'list, new, create'
            ],
            // non-cacheable actions
            [
                'Photo' => 'search',
                'Comment' => 'create'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PhoSTO.StowebPhoto',
            'Front2',
            [
                'Album' => 'list, show, search'
            ],
            // non-cacheable actions
            [
                'Album' => 'search'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PhoSTO.StowebPhoto',
            'Front3',
            [
                'Tag' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Photo' => '',
                'Comment' => 'create',
                'Album' => '',
                'Tag' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        front1 {
                            iconIdentifier = stoweb_photo-plugin-front1
                            title = LLL:EXT:stoweb_photo/Resources/Private/Language/locallang_db.xlf:tx_stoweb_photo_front1.name
                            description = LLL:EXT:stoweb_photo/Resources/Private/Language/locallang_db.xlf:tx_stoweb_photo_front1.description
                            tt_content_defValues {
                                CType = list
                                list_type = stowebphoto_front1
                            }
                        }
                        front2 {
                            iconIdentifier = stoweb_photo-plugin-front2
                            title = LLL:EXT:stoweb_photo/Resources/Private/Language/locallang_db.xlf:tx_stoweb_photo_front2.name
                            description = LLL:EXT:stoweb_photo/Resources/Private/Language/locallang_db.xlf:tx_stoweb_photo_front2.description
                            tt_content_defValues {
                                CType = list
                                list_type = stowebphoto_front2
                            }
                        }
                        front3 {
                            iconIdentifier = stoweb_photo-plugin-front3
                            title = LLL:EXT:stoweb_photo/Resources/Private/Language/locallang_db.xlf:tx_stoweb_photo_front3.name
                            description = LLL:EXT:stoweb_photo/Resources/Private/Language/locallang_db.xlf:tx_stoweb_photo_front3.description
                            tt_content_defValues {
                                CType = list
                                list_type = stowebphoto_front3
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'stoweb_photo-plugin-front1',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:stoweb_photo/Resources/Public/Icons/user_plugin_front1.svg']
			);
		
			$iconRegistry->registerIcon(
				'stoweb_photo-plugin-front2',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:stoweb_photo/Resources/Public/Icons/user_plugin_front2.svg']
			);
		
			$iconRegistry->registerIcon(
				'stoweb_photo-plugin-front3',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:stoweb_photo/Resources/Public/Icons/user_plugin_front3.svg']
			);
		
    }
);
