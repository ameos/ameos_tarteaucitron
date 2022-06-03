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

$EM_CONF[$_EXTKEY] = array (
  'title' => 'AMEOS - TarteAuCitron (GDPR cookie banner and tracking management / French RGPD compatible)',
  'description' => 'Integrates tarteaucitron.js in TYPO3 (see : https://tarteaucitron.io )',
  'category' => 'frontend',
  'version' => '1.2.22',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'author' => 'Ameos Team',
  'author_email' => 'typo3dev@ameos.com',
  'author_company' => 'Ameos',
  'constraints' => 
  array (
    'conflicts' => 
    array (
    ),
    'suggests' => array(
      'ameos_dailymotion' => '1.0.0-1.0.99',
    ),
    array (
    ),
    'depends' => array (
      'typo3' => '8.6.0-11.99.99',
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'Ameos\\AmeosTarteaucitron\\' => 'Classes',
    ),
  ),
  'clearcacheonload' => true,
);

