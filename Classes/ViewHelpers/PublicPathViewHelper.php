<?php
namespace TYPO3\CMS\InfiniteScrollGallery\ViewHelpers;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Fabien Udriot
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * ************************************************************* */

/**
 * View helper which return the public path of a resource.
 */
class PublicPathViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @var string
	 */
	protected $extensionKey = 'infinite_scroll_gallery';

	/**
	 * Return the public path of a resource
	 *
	 * @param string $resource
	 * @return string
	 */
	public function render($resource) {
		return sprintf('%sResources/Public/%s',
			str_replace(PATH_site, '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($this->extensionKey)),
			$resource
		);
	}
}
?>
