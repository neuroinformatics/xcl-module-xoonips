<?php

// $Revision: 1.19.2.1.2.20 $
// ------------------------------------------------------------------------- //
//  XooNIps - Neuroinformatics Base Platform System                          //
//  Copyright (C) 2005-2014 RIKEN, Japan All rights reserved.                //
//  http://xoonips.sourceforge.jp/                                           //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //

//  XooNIps Book item type module

if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}

$modversion['name'] = _MI_XNPBOOK_NAME;
$modversion['version'] = 3.48;
$modversion['description'] = _MI_XNPBOOK_DESC;
$modversion['credits'] =
  'RIKEN, Japan (http://www.riken.jp/)';
$modversion['author'] =
  'The XooNIps Project (http://sourceforge.jp/projects/xoonips/)';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/xnpbook_slogo.png';
$modversion['dirname'] = 'xnpbook';

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
$modversion['tables'][0] = 'xnpbook_item_detail';
$modversion['tables'][1] = 'xnpbook_author';

// Administrator menu
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 0;

// Templates
$modversion['templates'][1]['file'] = 'xnpbook_list_block.html';
$modversion['templates'][1]['description'] = 'list block';
$modversion['templates'][2]['file'] = 'xnpbook_register_block.html';
$modversion['templates'][2]['description'] = 'register block';
$modversion['templates'][3]['file'] = 'xnpbook_detail_block.html';
$modversion['templates'][3]['description'] = 'detail block';
$modversion['templates'][4]['file'] = 'xnpbook_confirm_block.html';
$modversion['templates'][4]['description'] = 'confirm block';
$modversion['templates'][5]['file'] = 'xnpbook_search_block.html';
$modversion['templates'][5]['description'] = 'search block';
$modversion['templates'][6]['file'] = 'xnpbook_transfer_item_detail.html';
$modversion['templates'][6]['description'] = '';
$modversion['templates'][7]['file'] = 'xnpbook_transfer_item_list.html';
$modversion['templates'][7]['description'] = '';
$modversion['templates'][8]['file'] = 'xnpbook_oaipmh_oai_dc.xml';
$modversion['templates'][8]['description'] = 'OAI-PMH oai_dc';
$modversion['templates'][9]['file'] = 'xnpbook_oaipmh_junii2.xml';
$modversion['templates'][9]['description'] = 'OAI-PMH junii2';

// Blocks

// config
$modversion['config'][1]['name'] = 'enable_dl_limit';
$modversion['config'][1]['title'] = '_MI_XNPBOOK_CFG_DL_LIMIT';
$modversion['config'][1]['description'] = '_MI_XNPBOOK_CFG_DL_LIMIT_DESC';
$modversion['config'][1]['formtype'] = 'yesno';
$modversion['config'][1]['valuetype'] = 'int';
$modversion['config'][1]['default'] = 1;
// - AccessKey for Amazon API
$modversion['config'][2]['name'] = 'AccessKey';
$modversion['config'][2]['title'] = '_MI_XNPBOOK_CFG_ACCESSKEY';
$modversion['config'][2]['description'] = '_MI_XNPBOOK_CFG_ACCESSKEY_DESC';
$modversion['config'][2]['formtype'] = 'textbox';
$modversion['config'][2]['valuetype'] = 'text';
$modversion['config'][2]['default'] = '';
// - SecretAccessKey for Amazon API
$modversion['config'][3]['name'] = 'SecretAccessKey';
$modversion['config'][3]['title'] = '_MI_XNPBOOK_CFG_SAKEY';
$modversion['config'][3]['description'] = '_MI_XNPBOOK_CFG_SAKEY_DESC';
$modversion['config'][3]['formtype'] = 'password';
$modversion['config'][3]['valuetype'] = 'text';
$modversion['config'][3]['default'] = '';
// - AssociateTag for Amazon API
$modversion['config'][4]['name'] = 'AssociateTag';
$modversion['config'][4]['title'] = '_MI_XNPBOOK_CFG_ASSOCIATE';
$modversion['config'][4]['description'] = '_MI_XNPBOOK_CFG_SAKEY_DESC';
$modversion['config'][4]['formtype'] = 'textbox';
$modversion['config'][4]['valuetype'] = 'text';
$modversion['config'][4]['default'] = '';

//Install script
$modversion['onInstall'] = 'include/oninstall.inc.php';
$modversion['onUpdate'] = 'include/onupdate.inc.php';
$modversion['onUninstall'] = 'include/onuninstall.inc.php';
