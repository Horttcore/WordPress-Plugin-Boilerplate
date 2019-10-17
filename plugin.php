<?php
/**
 * Plugin Name:     WordPress Plugin Boilerplate
 * Plugin URI:      https://horttcore.de
 * Description:     A WordPress Plugin Boilerplate
 * Author:          Ralf Hortt
 * Author URI:      https://horttcore.de
 * Text Domain:     wordpress-plugin-boilerplate
 * Domain Path:     /languages
 * Version:         1.0
 *
 * @package         Horttcore/WordPressPluginBoilerplate
 */

namespace RalfHortt\WordPressPluginBoilerplate;

use RalfHortt\WordPressPluginBoilerplate\Service;
use Horttcore\Plugin\PluginFactory;

// ------------------------------------------------------------------------------
// Prevent direct file access
// ------------------------------------------------------------------------------
if (!defined('WPINC')) :
    die;
endif;

// ------------------------------------------------------------------------------
// Autoloader
// ------------------------------------------------------------------------------
$autoloader = dirname(__FILE__).'/vendor/autoload.php';

if (is_readable($autoloader)) :
    require_once $autoloader;
endif;

// ------------------------------------------------------------------------------
// Bootstrap
// ------------------------------------------------------------------------------
PluginFactory::create()
    ->addTranslation('wordpress-plugin-boilerplate', dirname(plugin_basename(__FILE__)).'/languages/')
    ->addService(Service::class)
    ->boot();