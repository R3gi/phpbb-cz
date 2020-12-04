<?php
/**
*
* captcha_qa [Čeština]
*
* @package language
* @version $Id$
* @copyright (c)  2015 phpBB.cz
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2009 phpBB Group
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

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'Otázky &amp; Odpovědi',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Odpoveď na tuto otázku je nutná pro rozlišení automatizovaných pokusů o registraci.',
	'CONFIRM_QUESTION_WRONG'	=> 'Neodpověděli jste správně na potvrzovací otázku.',
	'CONFIRM_QUESTION_MISSING'	=> 'Otázky pro captchu nelze načíst. Prosím kontaktujte administrátora fóra.',

	'QUESTION_ANSWERS'			=> 'Odpovědi',
	'ANSWERS_EXPLAIN'			=> 'Zadejte platné odpovědi na otázku, jednu na každou řádku.',
	'CONFIRM_QUESTION'			=> 'Otázka',

	'ANSWER'					=> 'Odpověď',
	'EDIT_QUESTION'				=> 'Upravit otázku',
	'QUESTIONS'					=> 'Otázky',
	'QUESTIONS_EXPLAIN'			=> 'Během registrace bude uživateli položena jedna z uložených otázek. Pro použití plug-inu musí být uložena alespoň jedna otázka pro jazyk, který je nastavený jako výchozí. Otázky by měly být jednoduché k zodpovězení, ale neměly by jít vyhledat odpověď přes Google™ nebo Seznam. Pokud začnete dostávat SPAM, otázku změňte. Použijte kontrolu přesné shody, pokud u otázek záleží na velikosti písmen nebo interpunkci.',
	'QUESTION_DELETED'			=> 'Otázka odstraněna',
	'QUESTION_LANG'				=> 'Jazyk',
	'QUESTION_LANG_EXPLAIN'		=> 'Jazyk, ve kterém je otázka a odpověď.',
	'QUESTION_STRICT'			=> 'Přesná shoda',
	'QUESTION_STRICT_EXPLAIN'	=> 'Pokud povolíte kontrolu přesné shody, bude brán ohled na velikost písmen a mezery.',

	'QUESTION_TEXT'				=> 'Otázka',
	'QUESTION_TEXT_EXPLAIN'		=> 'Otázka, která bude položena pri registraci.',

	'QA_ERROR_MSG'				=> 'Zadejte všechna pole včetně otázky a alespoň jedné odpovědi.',
	'QA_LAST_QUESTION'			=> 'Nemůžete odstranit všechny otázky dokud je plug-in ještě aktivní.',
));
