<?php

namespace Ameos\AmeosTarteaucitron\Xclasses\TYPO3\CMS\Core\Resource\Rendering;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Resource\FileInterface;
use TYPO3\CMS\Core\Resource\FileReference;
use TYPO3\CMS\Core\Resource\OnlineMedia\Helpers\OnlineMediaHelperInterface;
use TYPO3\CMS\Core\Resource\OnlineMedia\Helpers\OnlineMediaHelperRegistry;

/**
 * Vimeo renderer class
 */
class VimeoRenderer extends \TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer
{
    /**
     * Render for given File(Reference) html output
     *
     * @param  FileInterface $file
     * @param  int|string    $width                            TYPO3 known format; examples: 220, 200m or 200c
     * @param  int|string    $height                           TYPO3 known format; examples: 220, 200m or 200c
     * @param  array         $options
     * @param  bool          $usedPathsRelativeToCurrentScript See $file->getPublicUrl()
     * @return string
     */
    public function render(FileInterface $file, $width, $height, array $options = null, $usedPathsRelativeToCurrentScript = false)
    {
        $options = $this->collectOptions($options, $file);
        $attributes = $this->collectIframeAttributes($width, $height, $options);

        if ($file instanceof FileReference) {
            $orgFile = $file->getOriginalFile();
        } else {
            $orgFile = $file;
        }

        $videoId = $this->getOnlineMediaHelper($file)->getOnlineMediaId($orgFile);
        return sprintf(
            '<div class="vimeo_player" data-videoID="%s"%s></div>',
            $videoId,
            empty($attributes) ? '' : ' ' . $this->implodeAttributes($attributes)
        );
    }
}
