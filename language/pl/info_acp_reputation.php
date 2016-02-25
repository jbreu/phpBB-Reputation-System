<?php
/**
*
* Reputation System
*
* @copyright (c) 2014 Lukasz Kaczynski
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_REPUTATION_SYSTEM'				=> 'System Reputacji',
	'ACP_REPUTATION_OVERVIEW'			=> 'Informacje',
	'ACP_REPUTATION_SETTINGS'			=> 'Ustawienia reputacji',
	'ACP_REPUTATION_RATE'				=> 'Oceń',
	'ACP_REPUTATION_SYNC'				=> 'Synchronizuj',

	'RS_FORUM_REPUTATION'			=> 'Włącz ocenianie postów (reputację)',
	'RS_FORUM_REPUTATION_EXPLAIN'	=> 'Zezwól użytkownikom na ocenę postów. Możesz wybrać, czy ocenianie postu ma wpływać na reputację użytkownika.',

	'RS_GROUP_POWER'				=> 'Siła reputacji grupy',
	'RS_GROUP_POWER_EXPLAIN'		=> 'Jeśli to pole jest wypełnione, siła reputacji członków zostaną zastąpione i nie będą oparte na postach itp.',

	'LOG_REPUTATION_DELETED'		=> '<strong>Usunięto reputację</strong><br />Od użytkownika: %1$s<br />Dla użytkownika: %2$s<br />Punkty: %3$s<br/>Typ: %4$s<br/>Item ID: %5$s',
	'LOG_POST_REPUTATION_CLEARED'	=> '<strong>Usunięto reputacje postu</strong><br />Autro posta: %1$s<br />Temat posta: %2$s',
	'LOG_USER_REPUTATION_CLEARED'	=> '<strong>Usunięto reputację użytkownika:</strong><br />User: %1$s',
	'LOG_REPUTATION_SYNC'			=> '<strong>System reputacji zsynchronizowany</strong>',
	'LOG_REPUTATION_TRUNCATE'		=> '<strong>Reputacja wyczyszczona</strong>',
));
