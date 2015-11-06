<?php
/**
 * Joomla! System plugin - Traits
 *
 * @author     Yireo <info@yireo.com>
 * @copyright  Copyright 2015 Yireo.com. All rights reserved
 * @license    GNU Public License
 * @link       http://www.yireo.com
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

// Require the parent
require_once __DIR__ . '/traits/abstract.php';

// Require the traits
require_once __DIR__ . '/traits/actions/tag.php';
require_once __DIR__ . '/traits/checks/ajax.php';
require_once __DIR__ . '/traits/checks/frontend.php';

/**
 * Traits System Plugin
 */
class PlgSystemTraits extends PlgSystemTraitsAbstract
{
	/**
	 * Include traits
	 */
    use \Yireo\Actions\Tag;
    use \Yireo\Checks\Ajax;
    use \Yireo\Checks\Frontend;

	/**
	 * Catch the event onAfterInitialise
	 *
	 * @return bool
	 */
	public function onAfterRender()
	{
		if ($this->isAjaxRequest() && $this->isHtmlFrontend() == false)
		{
			return false;
		}

		// {foobar some example}
		if ($tags = $this->parseBodyTags('foobar'))
		{
			foreach ($tags as $tag)
			{
				// var_dump($tag);
				$tagHtml = '<h1>Tag: ' . var_export($tag['arguments'], true) . ' --></h1>';

				$this->replaceBodyTags($tag['original'], $tagHtml);
			}
		}

		return true;
	}
}
