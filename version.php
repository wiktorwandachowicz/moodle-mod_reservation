<?php
/**
 * @package mod
 * @subpackage reservation
 * @author Roberto Pinna (bobo@di.unipmn.it)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of reservation
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$plugin->version  = 2015051302;  // The current plugin version
$plugin->release  = '2.7';       // The current plugin release
$plugin->maturity = MATURITY_STABLE;
$plugin->requires = 2014051200;  // Requires this Moodle version (2.7)
$plugin->cron     = 60;         // Period for cron to check this plugin (secs)

?>
