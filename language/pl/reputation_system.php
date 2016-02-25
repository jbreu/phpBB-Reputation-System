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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'RS_TITLE'			=> 'Szstem Reputacji',

	'RS_ACTION'					=> 'Czynność',
	'RS_DATE'					=> 'Data',
	'RS_DETAILS'				=> 'Szczegóły reputacji użytkownika',
	'RS_FROM'					=> 'Od',
	'RS_LIST'					=> 'Lista punktów reputacji użytkownika',
	'RS_POST_COUNT'				=> 'Punktów za post',
	'RS_POST_REPUTATION'		=> 'Reputacji za post',
	'RS_USER_COUNT'				=> 'Punktów od użytkownika',
	'RS_POSITIVE_COUNT'			=> 'Pytywne',
	'RS_NEGATIVE_COUNT'			=> 'Negatywne',
	'RS_STATS'					=> 'Statystyki',
	'RS_WEEK'					=> 'Ostatni tydzień',
	'RS_MONTH'					=> 'Ostatni miesiąc',
	'RS_6MONTHS'				=> 'Ostatnie 6 miesięcy',
	'RS_POINT'					=> 'Punkt',
	'RS_POINTS_TITLE'			=> array(
		1	=> 'Punkt: %d',
		2	=> 'Punkty: %d',
	),
	'RS_POST_DELETE'			=> 'Post usunięty',
	'RS_POWER'					=> 'Siła reputacji',
	'RS_TIME'					=> 'Czas',
	'RS_TO'						=> 'do',
	'RS_TO_USER'				=> 'Do',
	'RS_VOTING_POWER'			=> 'Pozostałe punkty',

	'RS_EMPTY_DATA'				=> 'Brak punktów reputacji.',
	'RS_NA'						=> 'Brak',
	'RS_NO_ID'					=> 'Brak ID',
	'RS_NO_REPUTATION'			=> 'Brak punktu reputacji',

	'NO_REPUTATION_SELECTED'	=> 'Nie wybrano punktu reputacji',

	'RS_REPUTATION_DELETE_CONFIRM'	=> 'Czy na pewno chcesz usunąć tą reputację?',
	'RS_REPUTATIONS_DELETE_CONFIRM'	=> 'Czy na pewno chcesz usunąć te reputacje?',
	'RS_POINTS_DELETED'			=> array(
		1	=> 'Reputacja została usunięta',
		2	=> 'Reputacje zostały usunięte.',
	),

	'RS_CLEAR_POST'				=> 'Wyczyść reputację postu',
	'RS_CLEAR_POST_CONFIRM'		=> 'Czy na pewno chcesz usunąć punkty przyznane za ten post?',
	'RS_CLEARED_POST'			=> 'Reputacja psotu została usunięta.',
	'RS_CLEAR_USER'				=> 'Wyczyść reputację użytkownika',
	'RS_CLEAR_USER_CONFIRM'		=> 'Czy na pewno chcesz usunąć punkty przyznane temu uzytkownikowi?',
	'RS_CLEARED_USER'			=> 'Reputacja użutkownika została usunięta.',

	'RS_LATEST_REPUTATIONS'			=> 'Najnowsza reputacja',
	'LIST_REPUTATIONS'				=> array(
		1	=> '%d reputacji',
		2	=> '%d reputacji',
	),
	'ALL_REPUTATIONS'				=> 'Wszystkie wpisy reputacji',

	'RS_NEW_REPUTATIONS'			=> 'Nowe punkty reputacji',
	'RS_NEW_REP'					=> 'Masz <strong>1 nowy</strong> punkt reputacji',
	'RS_NEW_REPS'					=> 'Masz <strong>%s nowe/ych</strong> punktów reputacji',
	'RS_CLICK_TO_VIEW'				=> 'Idź do listy otrzymanych punktów',

	'RS_MORE_DETAILS'				=> '» więcej szczegółów',

	'RS_USER_REPUTATION'			=> 'Reputacja %s',

	'RS_VOTE_POWER_LEFT'			=> '%1$d z %2$d',

	'RS_POWER_DETAILS'				=> 'Sposób obliczania siły reputacji',
	'RS_POWER_DETAIL_AGE'			=> 'Według daty rejestracji',
	'RS_POWER_DETAIL_POSTS'			=> 'Według liczby postów',
	'RS_POWER_DETAIL_REPUTAION'		=> 'Według reputacji',
	'RS_POWER_DETAIL_WARNINGS'		=> 'Według ostrzeżeń',
	'RS_POWER_DETAIL_BANS'			=> 'Według liczby banów w ciągu ostatniego roku',
	'RS_POWER_DETAIL_MIN'			=> 'Minimalna siła reputacji dla wszystkich użytkowników',
	'RS_POWER_DETAIL_MAX'			=> 'Siła reputacji została ograniczona do maksymalnej wartości',
	'RS_GROUP_POWER'				=> 'Siła reputacji oparta na grupie użytkownika',
));
