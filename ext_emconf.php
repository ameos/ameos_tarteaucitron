<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ameos_tarteaucitron".
 *
 * Auto generated 06-04-2022 09:33
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF['ameos_tarteaucitron'] = array (
    'title' => 'AMEOS - TarteAuCitron (GDPR cookie banner and tracking management / French RGPD compatible)',
    'description' => 'Integrates tarteaucitron.js in TYPO3 (see : https://tarteaucitron.io )',
    'category' => 'frontend',
    'version' => '3.3.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Luc Muller',
    'author_email' => 'typo3dev@ameos.com',
    'author_company' => 'Ameos',
    'constraints' => [
      'conflicts' => [],
      'suggests' => ['ameos_dailymotion' => '1.0.0-2.9.99'],
      'depends' => ['typo3' => '9.5.0-13.99.99'],
    ],
    'clearcacheonload' => true,
);
