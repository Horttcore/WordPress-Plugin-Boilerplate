<?php
/**
 * Plugin Name:     WordPress Plugin Boilerplate
 * Plugin URI:      https://horttcore.de
 * Description:     A WordPress Plugin Boilerplate
 * Author:          Ralf Hortt
 * Author URI:      https://horttcore.de
 * Text Domain:     wordpress-plugin-boilerplate
 * Domain Path:     /languages
 * Version:         1.1
 *
 * @package         Horttcore/WordPressPluginBoilerplate
 */

namespace RalfHortt\WordPressPluginBoilerplate;

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
    ->addService(Translator::class, 'wordpress-plugin-boilerplate', dirname(plugin_basename(__FILE__)).'/languages/')
    ->boot();
