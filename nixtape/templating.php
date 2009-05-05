<?php

/* Libre.fm -- a free network service for sharing your music listening habits

   Copyright (C) 2009 Free Software Foundation, Inc

   This program is free software: you can redistribute it and/or modify
   it under the terms of the GNU Affero General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU Affero General Public License for more details.

   You should have received a copy of the GNU Affero General Public License
   along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

require_once('config.php');
require_once('auth.php');
require_once('smarty/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = $install_path . '/themes/'. $default_theme . '/templates/';
$smarty->compile_dir = $install_path. '/themes/' . $default_theme . '/templates_c/';
$smarty->cache_dir = $install_path. '/cache/';

$smarty->assign('base_url', $base_url);
$smarty->assign('this_page', $_SERVER['REQUEST_URI']);
$smarty->assign('this_page_absolute',
	 (empty($_SERVER['HTTPS']) ? 'http://' : 'http://') 
	.(empty($_SERVER['HOST']) ? $_SERVER['SERVER_NAME'] : $_SERVER['HOST'])
	.(($_SERVER['SERVER_PORT']==80) ? '' : (':'.$_SERVER['SERVER_PORT']))
	. $_SERVER['REQUEST_URI']);

if(isset($logged_in)) {
	$smarty->assign('logged_in', true);
	// Pre-fix this user's details with 'this_' to avoid confusion with other users
	$smarty->assign('this_user', $this_user);
}

header("Content-Type: text/html; charset=utf-8");

function insert_getMenu($lidsid, $smrt) {
	$smrt->display('menu.tpl');
}

?>
