<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @author Trevor Parscal
 * @author Roan Kattouw
 */

/**
 * Module for site customizations.
 *
 * @ingroup ResourceLoader
 * @internal
 */
class ResourceLoaderSiteModule extends ResourceLoaderWikiModule {
	/** @var string[] What client platforms the module targets (e.g. desktop, mobile) */
	protected $targets = [ 'desktop', 'mobile' ];

	/**
	 * Get list of pages used by this module
	 *
	 * @param ResourceLoaderContext $context
	 * @return array List of pages
	 */
	protected function getPages( ResourceLoaderContext $context ) {
		$pages = [];
		if ( $this->getConfig()->get( 'UseSiteJs' ) ) {
			$skin = $context->getSkin();
			$pages['MediaWiki:Common.js'] = [ 'type' => 'script' ];
			$pages['MediaWiki:' . ucfirst( $skin ) . '.js'] = [ 'type' => 'script' ];
			$this->getHookRunner()->onResourceLoaderSiteModulePages( $skin, $pages );
		}
		return $pages;
	}

	/**
	 * @param ResourceLoaderContext|null $context
	 * @return array
	 */
	public function getDependencies( ResourceLoaderContext $context = null ) {
		return [ 'site.styles' ];
	}
}
