<?php

// $Revision: 1.70.2.1.2.24 $
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

$modversion['name'] = _MI_XOONIPS_NAME;
$modversion['version'] = 3.49;
$modversion['description'] = _MI_XOONIPS_DESC;
$modversion['credits'] = 'RIKEN, Japan (http://www.riken.jp/)';
$modversion['author'] = 'The XooNIps Project (http://sourceforge.jp/projects/xoonips/)';
$modversion['help'] = 'help.html';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/xoonips_slogo.png';
$modversion['dirname'] = 'xoonips';

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
$modversion['tables'][0] = 'xoonips_item_basic';
$modversion['tables'][1] = 'xoonips_index_item_link';
$modversion['tables'][2] = 'xoonips_index';
$modversion['tables'][3] = 'xoonips_changelog';
$modversion['tables'][4] = 'xoonips_item_type';
$modversion['tables'][5] = 'xoonips_file';
$modversion['tables'][6] = 'xoonips_file_type';
$modversion['tables'][7] = 'xoonips_users';
$modversion['tables'][8] = 'xoonips_config';
$modversion['tables'][9] = 'xoonips_groups';
$modversion['tables'][10] = 'xoonips_groups_users_link';
$modversion['tables'][11] = 'xoonips_event_log';
$modversion['tables'][12] = 'xoonips_item_status';
$modversion['tables'][13] = 'xoonips_oaipmh_resumption_token';
$modversion['tables'][14] = 'xoonips_oaipmh_repositories';
$modversion['tables'][15] = 'xoonips_oaipmh_metadata';
$modversion['tables'][16] = 'xoonips_oaipmh_metadata_field';
$modversion['tables'][17] = 'xoonips_related_to';
$modversion['tables'][18] = 'xoonips_search_cache';
$modversion['tables'][19] = 'xoonips_search_cache_item';
$modversion['tables'][20] = 'xoonips_search_cache_metadata';
$modversion['tables'][21] = 'xoonips_search_cache_file';
$modversion['tables'][22] = 'xoonips_item_show';
$modversion['tables'][23] = 'xoonips_positions';
$modversion['tables'][24] = 'xoonips_cvitaes';
$modversion['tables'][25] = 'xoonips_search_text';
$modversion['tables'][26] = 'xoonips_item_title';
$modversion['tables'][27] = 'xoonips_item_keyword';
$modversion['tables'][28] = 'xoonips_ranking_viewed_item';
$modversion['tables'][29] = 'xoonips_ranking_downloaded_item';
$modversion['tables'][30] = 'xoonips_ranking_contributing_user';
$modversion['tables'][31] = 'xoonips_ranking_searched_keyword';
$modversion['tables'][32] = 'xoonips_ranking_active_group';
$modversion['tables'][33] = 'xoonips_ranking_new_item';
$modversion['tables'][34] = 'xoonips_ranking_new_group';
$modversion['tables'][35] = 'xoonips_ranking_sum_viewed_item';
$modversion['tables'][36] = 'xoonips_ranking_sum_downloaded_item';
$modversion['tables'][37] = 'xoonips_ranking_sum_contributing_user';
$modversion['tables'][38] = 'xoonips_ranking_sum_searched_keyword';
$modversion['tables'][39] = 'xoonips_ranking_sum_active_group';
$modversion['tables'][40] = 'xoonips_ranking_sum_new_item';
$modversion['tables'][41] = 'xoonips_ranking_sum_new_group';
$modversion['tables'][42] = 'xoonips_session';
$modversion['tables'][43] = 'xoonips_item_lock';
$modversion['tables'][44] = 'xoonips_transfer_request';
$modversion['tables'][45] = 'xoonips_index_group_index_link';

//Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'xoonips_breadcrumbs.inc.html';
$modversion['templates'][1]['description'] = 'breadcrumbs navigation for each pages';
$modversion['templates'][2]['file'] = 'xoonips_extra_param.html';
$modversion['templates'][2]['description'] = 'hidden elements of extra parameters';
$modversion['templates'][3]['file'] = 'xoonips_register.html';
$modversion['templates'][3]['description'] = 'register item';
$modversion['templates'][4]['file'] = 'xoonips_confirm_register.html';
$modversion['templates'][4]['description'] = 'confirmation before register';
$modversion['templates'][5]['file'] = 'xoonips_certify.html';
$modversion['templates'][5]['description'] = 'certify items';
$modversion['templates'][6]['file'] = 'xoonips_edit.html';
$modversion['templates'][6]['description'] = 'edit item';
$modversion['templates'][7]['file'] = 'xoonips_confirm_edit.html';
$modversion['templates'][7]['description'] = 'confirm edit item';
$modversion['templates'][8]['file'] = 'xoonips_detail.html';
$modversion['templates'][8]['description'] = 'detail item';
$modversion['templates'][9]['file'] = 'xoonips_item_list_header.html';
$modversion['templates'][9]['description'] = 'a header of item list';
$modversion['templates'][10]['file'] = 'xoonips_pagenavi.html';
$modversion['templates'][10]['description'] = 'a page navigation';
$modversion['templates'][11]['file'] = 'xoonips_publication_date.html';
$modversion['templates'][11]['description'] = 'publication_date form';
$modversion['templates'][12]['file'] = 'xoonips_publication_year.html';
$modversion['templates'][12]['description'] = 'publication_year form';
$modversion['templates'][13]['file'] = 'xoonips_publication_month.html';
$modversion['templates'][13]['description'] = 'publication_month form';
$modversion['templates'][14]['file'] = 'xoonips_publication_mday.html';
$modversion['templates'][14]['description'] = 'publication_mday form';
$modversion['templates'][15]['file'] = 'xoonips_search_date.html';
$modversion['templates'][15]['description'] = 'search_date form';
$modversion['templates'][16]['file'] = 'xoonips_search_year.html';
$modversion['templates'][16]['description'] = 'search_year form';
$modversion['templates'][17]['file'] = 'xoonips_search_month.html';
$modversion['templates'][17]['description'] = 'search_month form';
$modversion['templates'][18]['file'] = 'xoonips_search_mday.html';
$modversion['templates'][18]['description'] = 'search_mday form';

$modversion['templates'][19]['file'] = 'xoonips_advanced_search_inc.html';
$modversion['templates'][19]['description'] = 'part of form of advanced search';

$modversion['templates'][20]['file'] = 'xoonips_editgroups.html';
$modversion['templates'][20]['description'] = 'edit groups';
$modversion['templates'][21]['file'] = 'xoonips_certifyuser.html';
$modversion['templates'][21]['description'] = 'certify user';
$modversion['templates'][22]['file'] = 'xoonips_editindex.html';
$modversion['templates'][22]['description'] = 'edit index page';
$modversion['templates'][23]['file'] = 'xoonips_groupadmin.html';
$modversion['templates'][23]['description'] = 'edit group';
$modversion['templates'][24]['file'] = 'xoonips_userform.html';
$modversion['templates'][24]['description'] = 'lost password';
$modversion['templates'][25]['file'] = 'xoonips_userinfo.html';
$modversion['templates'][25]['description'] = 'account info';
$modversion['templates'][26]['file'] = 'xoonips_index.html';
$modversion['templates'][26]['description'] = 'xoonips module top page';
$modversion['templates'][27]['file'] = 'xoonips_export_license.html';
$modversion['templates'][27]['description'] = 'xoonips license agreement ( export )';
$modversion['templates'][28]['file'] = 'xoonips_event_log.html';
$modversion['templates'][28]['description'] = 'xoonips event log page';
$modversion['templates'][29]['file'] = 'xoonips_advanced_search_itemselect.html';
$modversion['templates'][29]['description'] = 'advance search for select items';
$modversion['templates'][30]['file'] = 'xoonips_group_list.html';
$modversion['templates'][30]['description'] = 'xoonips group list';
$modversion['templates'][31]['file'] = 'xoonips_detail_print.html';
$modversion['templates'][31]['description'] = 'xoonips detail page ( printer friendly )';
$modversion['templates'][32]['file'] = 'xoonips_itemselect_print.html';
$modversion['templates'][32]['description'] = 'xoonips search page ( printer friendly )';
$modversion['templates'][33]['file'] = 'xoonips_top_itemtype_block.html';
$modversion['templates'][33]['description'] = 'xoonips top page itemtype block';
$modversion['templates'][34]['file'] = 'xoonips_lang.html';
$modversion['templates'][34]['description'] = 'xoonips select item language';
$modversion['templates'][35]['file'] = 'xoonips_metadata_search.html';
$modversion['templates'][35]['description'] = 'xoonips metadata search page';
$modversion['templates'][36]['file'] = 'xoonips_detail_related_to.html';
$modversion['templates'][36]['description'] = 'related to form for detail';
$modversion['templates'][37]['file'] = 'xoonips_edit_related_to.html';
$modversion['templates'][37]['description'] = 'related to form for edit';
$modversion['templates'][38]['file'] = 'xoonips_confirm_related_to.html';
$modversion['templates'][38]['description'] = 'related to form for confirm';
$modversion['templates'][39]['file'] = 'xoonips_register_related_to.html';
$modversion['templates'][39]['description'] = 'related to form for register';
$modversion['templates'][40]['file'] = 'xoonips_related_to_itemselect.html';
$modversion['templates'][40]['description'] = 'itemselect for related to sub window';
$modversion['templates'][41]['file'] = 'xoonips_showusers.html';
$modversion['templates'][41]['description'] = 'selfintroduction for researchers';
$modversion['templates'][42]['file'] = 'xoonips_userlist.html';
$modversion['templates'][42]['description'] = 'view userlist';
$modversion['templates'][43]['file'] = 'xoonips_editshowitem.html';
$modversion['templates'][43]['description'] = 'edit show items';
$modversion['templates'][44]['file'] = 'xoonips_import_finish.html';
$modversion['templates'][44]['description'] = 'output result of import.';
$modversion['templates'][45]['file'] = 'xoonips_editcvitae.html';
$modversion['templates'][45]['description'] = 'edit curriclum vitae';
$modversion['templates'][46]['file'] = 'xoonips_su.html';
$modversion['templates'][46]['description'] = 'su';
$modversion['templates'][47]['file'] = 'xoonips_import_conflict.html';
$modversion['templates'][47]['description'] = 'list conflict items';
$modversion['templates'][48]['file'] = 'xoonips_event_graph.html';
$modversion['templates'][48]['description'] = 'show log graphs';
$modversion['templates'][49]['file'] = 'xoonips_event_view.html';
$modversion['templates'][49]['description'] = 'show userlist and itemlist';
$modversion['templates'][50]['file'] = 'xoonips_detail_download_confirmation.html';
$modversion['templates'][50]['description'] = 'download confirmation';
$modversion['templates'][51]['file'] = 'xoonips_index_list_block.html';
$modversion['templates'][51]['description'] = 'index list block';
$modversion['templates'][52]['file'] = 'xoonips_notifications.html';
$modversion['templates'][52]['description'] = 'xoonips notifications';
$modversion['templates'][53]['file'] = 'xoonips_select_item_menu.html';
$modversion['templates'][53]['description'] = 'item select menu';
$modversion['templates'][54]['file'] = 'xoonips_tree.html';
$modversion['templates'][54]['description'] = 'index tree';
$modversion['templates'][55]['file'] = 'xoonips_itemlist.html';
$modversion['templates'][55]['description'] = 'item listing';
$modversion['templates'][56]['file'] = 'xoonips_itemselect_listitem.html';
$modversion['templates'][56]['description'] = 'item list of itemtypesearch';
$modversion['templates'][57]['file'] = 'xoonips_itemselect_tabbed.html';
$modversion['templates'][57]['description'] = 'item list with search tab';
$modversion['templates'][58]['file'] = 'xoonips_itemselect_metadata.html';
$modversion['templates'][58]['description'] = 'metadata list';
$modversion['templates'][59]['file'] = 'xoonips_advanced_search_add_to_index.html';
$modversion['templates'][59]['description'] = 'advanced search for add to index';
$modversion['templates'][60]['file'] = 'xoonips_itemselect_add_to_index.html';
$modversion['templates'][60]['description'] = 'show items with checkbox and execute add_selected_item';

$modversion['templates'][61]['file'] = 'xoonips_advanced_search.html';
$modversion['templates'][61]['description'] = 'advanced search form';

$modversion['templates'][62]['file'] = 'xoonips_itemselect_select_item.html';
$modversion['templates'][62]['description'] = 'form that show items and post selected item to next page.';
$modversion['templates'][63]['file'] = 'xoonips_import_default.html';
$modversion['templates'][63]['description'] = 'import file upload form.';
$modversion['templates'][64]['file'] = 'xoonips_import_confirm.html';
$modversion['templates'][64]['description'] = 'confirmation of import items.';
$modversion['templates'][65]['file'] = 'xoonips_import_log.html';
$modversion['templates'][65]['description'] = 'output import log.';
$modversion['templates'][66]['file'] = 'xoonips_activate_user.html';
$modversion['templates'][66]['description'] = 'xoonips activate user';
$modversion['templates'][67]['file'] = 'xoonips_transfer_admin_item_select.html';
$modversion['templates'][67]['description'] = '';
$modversion['templates'][68]['file'] = 'xoonips_transfer_admin_item_list.html';
$modversion['templates'][68]['description'] = '';
$modversion['templates'][69]['file'] = 'xoonips_select_item_menu_transfer.html';
$modversion['templates'][69]['description'] = '';
$modversion['templates'][70]['file'] = 'xoonips_transfer_user_item_confirm.html';
$modversion['templates'][70]['description'] = '';
$modversion['templates'][71]['file'] = 'xoonips_transfer_user_requested_item_confirm.html';
$modversion['templates'][71]['description'] = '';
$modversion['templates'][72]['file'] = 'xoonips_transfer_user_requested_item_detail.html';
$modversion['templates'][72]['description'] = '';
$modversion['templates'][73]['file'] = 'xoonips_transfer_detail_previews.html';
$modversion['templates'][73]['description'] = '';
$modversion['templates'][74]['file'] = 'xoonips_transfer_detail_item_type.html';
$modversion['templates'][74]['description'] = '';
$modversion['templates'][75]['file'] = 'xoonips_transfer_detail_contributor.html';
$modversion['templates'][75]['description'] = '';
$modversion['templates'][76]['file'] = 'xoonips_transfer_detail_description.html';
$modversion['templates'][76]['description'] = '';
$modversion['templates'][77]['file'] = 'xoonips_transfer_detail_doi.html';
$modversion['templates'][77]['description'] = '';
$modversion['templates'][78]['file'] = 'xoonips_transfer_detail_creation_date.html';
$modversion['templates'][78]['description'] = '';
$modversion['templates'][79]['file'] = 'xoonips_transfer_detail_update_date.html';
$modversion['templates'][79]['description'] = '';
$modversion['templates'][80]['file'] = 'xoonips_transfer_detail_publication_y.html';
$modversion['templates'][80]['description'] = '';
$modversion['templates'][81]['file'] = 'xoonips_transfer_detail_publication_ym.html';
$modversion['templates'][81]['description'] = '';
$modversion['templates'][82]['file'] = 'xoonips_transfer_detail_publication_ymd.html';
$modversion['templates'][82]['description'] = '';
$modversion['templates'][83]['file'] = 'xoonips_transfer_detail_lang.html';
$modversion['templates'][83]['description'] = '';
$modversion['templates'][84]['file'] = 'xoonips_transfer_detail_titles.html';
$modversion['templates'][84]['description'] = '';
$modversion['templates'][85]['file'] = 'xoonips_transfer_detail_keywords.html';
$modversion['templates'][85]['description'] = '';
$modversion['templates'][86]['file'] = 'xoonips_transfer_detail_changelogs.html';
$modversion['templates'][86]['description'] = '';
$modversion['templates'][87]['file'] = 'xoonips_transfer_detail_indexes.html';
$modversion['templates'][87]['description'] = '';
$modversion['templates'][88]['file'] = 'xoonips_transfer_detail_related_tos.html';
$modversion['templates'][88]['description'] = '';
$modversion['templates'][89]['file'] = 'xoonips_transfer_detail_file.html';
$modversion['templates'][89]['description'] = '';
$modversion['templates'][90]['file'] = 'xoonips_transfer_item_detail.html';
$modversion['templates'][90]['description'] = '';
$modversion['templates'][91]['file'] = 'xoonips_advanced_search_itemselect_transfer.html';
$modversion['templates'][91]['description'] = '';
$modversion['templates'][92]['file'] = 'xoonips_transfer_user_item_list.html';
$modversion['templates'][92]['description'] = '';
$modversion['templates'][93]['file'] = 'xoonips_oaipmh_search_default.html';
$modversion['templates'][93]['description'] = '';
$modversion['templates'][94]['file'] = 'xoonips_oaipmh_search_result.html';
$modversion['templates'][94]['description'] = '';
$modversion['templates'][95]['file'] = 'xoonips_oaipmh_metadata_detail.html';
$modversion['templates'][95]['description'] = '';
$modversion['templates'][96]['file'] = 'xoonips_certifyuser_uncertify_confirm.html';
$modversion['templates'][96]['description'] = 'certify confirm';
$modversion['templates'][97]['file'] = 'xoonips_groupcertify.html';
$modversion['templates'][97]['description'] = 'xoonips group certyfy';
$modversion['templates'][98]['file'] = 'xoonips_user_delete.html';
$modversion['templates'][98]['description'] = 'xoonips user delete confirm';
$modversion['templates'][99]['file'] = 'xoonips_confirm_multiple_field.html';
$modversion['templates'][99]['description'] = 'multiple field for confirmation and detail of item';
$modversion['templates'][100]['file'] = 'xoonips_register_multiple_field.html';
$modversion['templates'][100]['description'] = 'multiple field for registration item';

// Blocks
$modversion['blocks'][1]['file'] = 'xoonips_blocks.php';
$modversion['blocks'][1]['name'] = _MI_XOONIPS_ITEM_BNAME1;
$modversion['blocks'][1]['description'] = 'Shows xoonips quick search block';
$modversion['blocks'][1]['show_func'] = 'b_xoonips_quick_search_show';
$modversion['blocks'][1]['edit_func'] = '';
$modversion['blocks'][1]['template'] = 'xoonips_block_quick_search.html';
$modversion['blocks'][1]['options'] = '';

$modversion['blocks'][2]['file'] = 'xoonips_blocks.php';
$modversion['blocks'][2]['name'] = _MI_XOONIPS_ACCOUNT_BNAME4;
$modversion['blocks'][2]['description'] = 'Shows moderator menu';
$modversion['blocks'][2]['show_func'] = 'b_xoonips_moderator_show';
$modversion['blocks'][2]['template'] = 'xoonips_block_moderator.html';

$modversion['blocks'][3]['file'] = 'xoonips_blocks.php';
$modversion['blocks'][3]['name'] = _MI_XOONIPS_INDEX_BNAME1;
$modversion['blocks'][3]['description'] = 'browse block';
$modversion['blocks'][3]['show_func'] = 'b_xoonips_tree_show';
$modversion['blocks'][3]['edit_func'] = '';
$modversion['blocks'][3]['template'] = 'xoonips_block_tree.html';
$modversion['blocks'][3]['options'] = '';

$modversion['blocks'][4]['file'] = 'xoonips_blocks.php';
$modversion['blocks'][4]['name'] = _MI_XOONIPS_ACCOUNT_BNAME1;
$modversion['blocks'][4]['description'] = 'Shows xoonips login block';
$modversion['blocks'][4]['show_func'] = 'b_xoonips_login_show';
$modversion['blocks'][4]['edit_func'] = '';
$modversion['blocks'][4]['template'] = 'xoonips_block_login.html';
$modversion['blocks'][4]['options'] = '';

$modversion['blocks'][5]['file'] = 'xoonips_blocks.php';
$modversion['blocks'][5]['name'] = _MI_XOONIPS_ACCOUNT_BNAME2;
$modversion['blocks'][5]['description'] = 'Shows user menu';
$modversion['blocks'][5]['show_func'] = 'b_xoonips_user_show';
$modversion['blocks'][5]['template'] = 'xoonips_block_user.html';

$modversion['blocks'][6]['file'] = 'xoonips_blocks.php';
$modversion['blocks'][6]['name'] = _MI_XOONIPS_ACCOUNT_BNAME3;
$modversion['blocks'][6]['description'] = 'Shows group menu';
$modversion['blocks'][6]['show_func'] = 'b_xoonips_group_show';
$modversion['blocks'][6]['template'] = 'xoonips_block_group.html';

$modversion['blocks'][7]['file'] = 'xoonips_blocks.php';
$modversion['blocks'][7]['name'] = _MI_XOONIPS_ITEMTYPE_BNAME1;
$modversion['blocks'][7]['description'] = 'Shows itemtypes';
$modversion['blocks'][7]['show_func'] = 'b_xoonips_itemtypes_show';
$modversion['blocks'][7]['template'] = 'xoonips_block_itemtype.html';

$modversion['blocks'][8]['file'] = 'xoonips_blocks.php';
$modversion['blocks'][8]['name'] = _MI_XOONIPS_RANKING_NEW;
$modversion['blocks'][8]['description'] = 'Ranking(new)';
$modversion['blocks'][8]['show_func'] = 'b_xoonips_ranking_new_show';
$modversion['blocks'][8]['template'] = 'xoonips_block_ranking_new.html';

$modversion['blocks'][9]['file'] = 'xoonips_blocks.php';
$modversion['blocks'][9]['name'] = _MI_XOONIPS_RANKING;
$modversion['blocks'][9]['description'] = 'Ranking';
$modversion['blocks'][9]['show_func'] = 'b_xoonips_ranking_show';
$modversion['blocks'][9]['template'] = 'xoonips_block_ranking.html';

$modversion['blocks'][10]['file'] = 'xoonips_blocks.php';
$modversion['blocks'][10]['name'] = _MI_XOONIPS_USERLIST;
$modversion['blocks'][10]['description'] = 'User List';
$modversion['blocks'][10]['show_func'] = 'b_xoonips_userlist_show';
$modversion['blocks'][10]['template'] = 'xoonips_block_userlist.html';

$modversion['onInstall'] = 'include/oninstall.inc.php';
$modversion['onUpdate'] = 'include/onupdate.inc.php';
$modversion['onUninstall'] = 'include/onuninstall.inc.php';

$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'xoonips_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'administrator';
$modversion['notification']['category'][1]['title'] = _MI_XOONIPS_ADMINISTRATOR_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_XOONIPS_ADMINISTRATOR_NOTIFYDSC;
$modversion['notification']['category'][1]['subscribe_from'] = array('notifications.php');
$modversion['notification']['category'][1]['allow_bookmark'] = 0;

$modversion['notification']['category'][2]['name'] = 'user';
$modversion['notification']['category'][2]['title'] = _MI_XOONIPS_USER_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_XOONIPS_USER_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = array('notifications.php');

$modversion['notification']['event'][1]['name'] = 'item_transfer';
$modversion['notification']['event'][1]['category'] = 'administrator';
$modversion['notification']['event'][1]['title'] = _MI_XOONIPS_ITEM_TRANSFER_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_XOONIPS_ITEM_TRANSFER_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_XOONIPS_ITEM_TRANSFER_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = '';
$modversion['notification']['event'][1]['mail_subject'] = '';

$modversion['notification']['event'][2]['name'] = 'account_certify';
$modversion['notification']['event'][2]['category'] = 'administrator';
$modversion['notification']['event'][2]['title'] = _MI_XOONIPS_ACCOUNT_CERTIFY_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_XOONIPS_ACCOUNT_CERTIFY_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_XOONIPS_ACCOUNT_CERTIFY_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = '';
$modversion['notification']['event'][2]['mail_subject'] = '';

$modversion['notification']['event'][3]['name'] = 'item_certify';
$modversion['notification']['event'][3]['category'] = 'administrator';
$modversion['notification']['event'][3]['title'] = _MI_XOONIPS_ITEM_CERTIFY_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_XOONIPS_ITEM_CERTIFY_NOTIFYCAP;
$modversion['notification']['event'][3]['description'] = _MI_XOONIPS_ITEM_CERTIFY_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = '';
$modversion['notification']['event'][3]['mail_subject'] = '';

$modversion['notification']['event'][4]['name'] = 'item_transfer';
$modversion['notification']['event'][4]['category'] = 'user';
$modversion['notification']['event'][4]['title'] = _MI_XOONIPS_USER_ITEM_TRANSFER_NOTIFY;
$modversion['notification']['event'][4]['caption'] = _MI_XOONIPS_USER_ITEM_TRANSFER_NOTIFYCAP;
$modversion['notification']['event'][4]['description'] = _MI_XOONIPS_USER_ITEM_TRANSFER_NOTIFYDSC;
$modversion['notification']['event'][4]['mail_template'] = '';
$modversion['notification']['event'][4]['mail_subject'] = '';

$modversion['notification']['event'][5]['name'] = 'item_updated';
$modversion['notification']['event'][5]['category'] = 'user';
$modversion['notification']['event'][5]['title'] = _MI_XOONIPS_USER_ITEM_UPDATED_NOTIFY;
$modversion['notification']['event'][5]['caption'] = _MI_XOONIPS_USER_ITEM_UPDATED_NOTIFYCAP;
$modversion['notification']['event'][5]['description'] = _MI_XOONIPS_USER_ITEM_UPDATED_NOTIFYDSC;
$modversion['notification']['event'][5]['mail_template'] = '';
$modversion['notification']['event'][5]['mail_subject'] = '';

$modversion['notification']['event'][6]['name'] = 'item_certified';
$modversion['notification']['event'][6]['category'] = 'user';
$modversion['notification']['event'][6]['title'] = _MI_XOONIPS_USER_ITEM_CERTIFIED_NOTIFY;
$modversion['notification']['event'][6]['caption'] = _MI_XOONIPS_USER_ITEM_CERTIFIED_NOTIFYCAP;
$modversion['notification']['event'][6]['description'] = _MI_XOONIPS_USER_ITEM_CERTIFIED_NOTIFYDSC;
$modversion['notification']['event'][6]['mail_template'] = '';
$modversion['notification']['event'][6]['mail_subject'] = '';

$modversion['notification']['event'][7]['name'] = 'item_rejected';
$modversion['notification']['event'][7]['category'] = 'user';
$modversion['notification']['event'][7]['title'] = _MI_XOONIPS_USER_ITEM_REJECTED_NOTIFY;
$modversion['notification']['event'][7]['caption'] = _MI_XOONIPS_USER_ITEM_REJECTED_NOTIFYCAP;
$modversion['notification']['event'][7]['description'] = _MI_XOONIPS_USER_ITEM_REJECTED_NOTIFYDSC;
$modversion['notification']['event'][7]['mail_template'] = '';
$modversion['notification']['event'][7]['mail_subject'] = '';

$modversion['notification']['event'][8]['name'] = 'file_downloaded';
$modversion['notification']['event'][8]['category'] = 'user';
$modversion['notification']['event'][8]['title'] = _MI_XOONIPS_USER_FILE_DOWNLOADED_NOTIFY;
$modversion['notification']['event'][8]['caption'] = _MI_XOONIPS_USER_FILE_DOWNLOADED_NOTIFYCAP;
$modversion['notification']['event'][8]['description'] = _MI_XOONIPS_USER_FILE_DOWNLOADED_NOTIFYDSC;
$modversion['notification']['event'][8]['mail_template'] = '';
$modversion['notification']['event'][8]['mail_subject'] = '';

$modversion['notification']['event'][9]['name'] = 'group_item_certified';
$modversion['notification']['event'][9]['category'] = 'user';
$modversion['notification']['event'][9]['title'] = _MI_XOONIPS_USER_GROUP_ITEM_CERTIFIED_NOTIFY;
$modversion['notification']['event'][9]['caption'] = _MI_XOONIPS_USER_GROUP_ITEM_CERTIFIED_NOTIFYCAP;
$modversion['notification']['event'][9]['description'] = _MI_XOONIPS_USER_GROUP_ITEM_CERTIFIED_NOTIFYDSC;
$modversion['notification']['event'][9]['mail_template'] = 'user_group_item_certified_notify';
$modversion['notification']['event'][9]['mail_subject'] = _MI_XOONIPS_USER_GROUP_ITEM_CERTIFIED_NOTIFYSBJ;

$modversion['notification']['event'][10]['name'] = 'group_item_rejected';
$modversion['notification']['event'][10]['category'] = 'user';
$modversion['notification']['event'][10]['title'] = _MI_XOONIPS_USER_GROUP_ITEM_REJECTED_NOTIFY;
$modversion['notification']['event'][10]['caption'] = _MI_XOONIPS_USER_GROUP_ITEM_REJECTED_NOTIFYCAP;
$modversion['notification']['event'][10]['description'] = _MI_XOONIPS_USER_GROUP_ITEM_REJECTED_NOTIFYDSC;
$modversion['notification']['event'][10]['mail_template'] = 'user_group_item_rejected_notify';
$modversion['notification']['event'][10]['mail_subject'] = _MI_XOONIPS_USER_GROUP_ITEM_REJECTED_NOTIFYSBJ;

$modversion['notification']['event'][11]['name'] = 'group_item_certify_request';
$modversion['notification']['event'][11]['category'] = 'administrator';
$modversion['notification']['event'][11]['title'] = _MI_XOONIPS_USER_GROUP_ITEM_CERTIFY_REQUEST_NOTIFY;
$modversion['notification']['event'][11]['caption'] = _MI_XOONIPS_USER_GROUP_ITEM_CERTIFY_REQUEST_NOTIFYCAP;
$modversion['notification']['event'][11]['description'] = _MI_XOONIPS_USER_GROUP_ITEM_CERTIFY_REQUEST_NOTIFYDSC;
$modversion['notification']['event'][11]['mail_template'] = 'administrator_group_item_certify_request_notify';
$modversion['notification']['event'][11]['mail_subject'] = _MI_XOONIPS_USER_GROUP_ITEM_CERTIFY_REQUEST_NOTIFYSBJ;
