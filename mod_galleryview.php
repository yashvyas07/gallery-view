<?php
/**
 * Gallery View Module
 * 
 * @package    Joomla
 * @subpackage Modules
 * @link http://www.yashvyas.in
 * @license        GNU/GPL
 * mod_galleryview is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
if(!defined('DS')){
define('DS',DIRECTORY_SEPARATOR);
}

// Include the syndicate functions only once
require_once( dirname(__FILE__).DS.'helper.php' );

$layout = $params->get('layout', 'default');
$path = JModuleHelper::getLayoutPath('mod_galleryview', $layout);
if (file_exists($path)) {
	require($path);
}