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

/**
 * Traits System Plugin
 */
class PlgSystemTraitsAbstract extends JPlugin
{
	/**
	 * @var JApplication
	 */
	protected $app;

	/**
	 * @var JDatabase
	 */
	protected $db;

	/**
	 * Constructor
	 *
	 * @param object $subject
	 * @param array  $config
	 */
	public function __construct(&$subject, $config = array())
	{
		return parent::__construct($subject, $config);
	}
}
