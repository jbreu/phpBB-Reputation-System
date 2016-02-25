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
	'ACL_CAT_REPUTATION'	=> 'Reputacja',

	'ACL_A_REPUTATION'	=> 'Może zmieniać ustawienia reputacji',

	'ACL_M_RS_MODERATE'	=> 'Może moderować reputację',
	'ACL_M_RS_RATE'		=> 'Moze dawać dodatkowe punkty reputacji',

	'ACL_U_RS_DELETE'			=> 'Może usuwać własne punkty',
	'ACL_U_RS_RATE'				=> 'Może oceniać użytkowników',
	'ACL_U_RS_RATE_NEGATIVE'	=> 'Może negatywnie oceniać użytkowników<br /><em>Użytkownik musi mieć możliwość oceny innych użytkowników, zanim on / ona będzie mógł negatywnie oceniać innych użytkowników.</em>',
	'ACL_U_RS_RATE_POST'		=> 'Może oceniać posty',
	'ACL_U_RS_VIEW'				=> 'Może wyświetlać reputację',

	'ACL_F_RS_RATE'				=> 'Może oceniać posty napisane przez innych',
	'ACL_F_RS_RATE_NEGATIVE'	=> 'Może negatywnie oceniać użytkowników<br /><em>Użytkownik musi mieć możliwość oceny innych użytkowników, zanim on / ona będzie mógł negatywnie oceniać innych użytkowników.</em>',
));
