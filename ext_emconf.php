<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "Ameos.AmeosTarteaucitron".
 *
  *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
	'title'              => 'AMEOS - TarteAuCitron (GDPR cookie banner and tracking management / French RGPD compatible)',
	'description'        => 'Integrates tarteaucitron.js in TYPO3 (see : https://tarteaucitron.io )',
	'category'           => 'frontend',
	'shy'                => 0,
	'version'            => '1.2.15',
	'conflicts'          => '',
	'priority'           => '',
	'loadOrder'          => '',
	'module'             => '',
	'state'              => 'stable',
	'uploadfolder'       => 0,
	'createDirs'         => '',
	'modify_tables'      => '',
	'clearCacheOnLoad'   => 1,
	'lockType'           => '',
	'author'             => 'Ameos Team',
	'author_email'       => 'typo3dev@ameos.com',
	'author_company'     => 'Ameos',
	'CGLcompliance'      => '',
	'CGLcompliance_note' => '',
	'constraints' => [
		'conflicts' => [],
		'suggests'  => [],
		'depends'   => [
			'typo3'            => '8.6.0-11.99.99',
		],
	],
    'autoload' => ['psr-4' => ['Ameos\\AmeosTarteaucitron\\' => 'Classes']],	
];
