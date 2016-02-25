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
	'RS_ANTISPAM_INFO'			=> 'Nie możesz przyznać punktów reputacji tak szybko. Wróć później.',
	'RS_COMMENT_TOO_LONG'		=> 'Za długi komentarz.<br />Maksymalna ilość znaków: %s. Twój komentarz:',
	'RS_NEGATIVE'				=> 'Negatywny',
	'RS_NO_COMMENT'				=> 'Musisz uzupełnić pole z komentarzem!',
	'RS_NO_POST'				=> 'Wybrany post nie istnieje',
	'RS_NO_POWER'				=> 'Twoja siła reputacji jest za niska.',
	'RS_NO_POWER_LEFT'			=> 'Nie posiadasz żadnych punktów do rozdysponowania.<br/>Poczekaj, aż zostaną uzupełnione.<br/>Twoja siła reputacji: %s',
	'RS_NO_USER_ID'				=> 'Nie ma takiego użytkownika.',
	'RS_POSITIVE'				=> 'Pozytywny',
	'RS_POST_RATING'			=> 'Ocenianie postu',
	'RS_RATE_BUTTON'			=> 'Oceń',
	'RS_SAME_POST'				=> 'Dodałeś już punkt reputacji za ten post.',
	'RS_SAME_USER'				=> 'Dodałeś już punkt reputacji temu użytkownikowi.',
	'RS_SELF'					=> 'Nie możesz sam sobie przyznać punktów reputacji.',
	'RS_USER_ANONYMOUS'			=> 'Nie możesz przyznać punktów reputacji Gościowi.',
	'RS_USER_BANNED'			=> 'Nie możesz przyznać punktów reputacji zbanowanemu użytkownikowi.',
	'RS_USER_CANNOT_DELETE'		=> 'Nie masz uprawnień do usunięcia punktu.',
	'RS_USER_DISABLED'			=> 'Nie możesz dodawać punktów reputacji.',
	'RS_USER_GAP'				=> 'Nie możesz ponownie ocenić tego samego użytkownika. Spróbuj ponownie za %s.',
	'RS_USER_NEGATIVE'			=> 'Nie możesz dodawać negatywnych punktów reputacji.<br />Twoja reputacja musi wynosić co najmniej %s.',
	'RS_USER_RATING'			=> 'Ocenianie użytkownika',
	'RS_VIEW_DISALLOWED'		=> 'Nie możesz przeglądać punktów reputacji.',
	'RS_VOTE_POWER_LEFT_OF_MAX'	=> 'Pozostało %1$d punktów do wykorzystania z %2$d. Maksimum na głos: %3$d',
	'RS_VOTE_SAVED'				=> 'Głos zapisany',
	'RS_WARNING_RATING'			=> 'Uwaga',
));
