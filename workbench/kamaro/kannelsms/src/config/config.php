<?php 
/**
 * Part of the Kamaro Kannel SMS package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the MIT License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    2.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

date_default_timezone_set("Africa/Khartoum");
define( 'CONFIG_KANNEL_USER_NAME', 'dms');
define( 'CONFIG_KANNEL_PASSWORD', 'dms');
define( 'CONFIG_KANNEL_HOST', '127.0.0.1');
define( 'CONFIG_KANNEL_PATH', '/cgi-bin/sendsms');
define( 'CONFIG_KANNEL_PORT', '13013');
define( 'CONFIG_KANNEL_DLR_URL', 'http://localhost/kannel/web/delivery.php?from=%p&to=%P&timestamp=%t&smscid=%I&status=%d&id=');
define( 'CONFIG_KANNEL_DLR_MASK', '31');
