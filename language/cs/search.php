<?php
/** 
*
* search [Čeština]
*
* @package language
* @version $Id: search.php 505 2010-11-21 10:32:21Z ameeck $
* @copyright (c)  2009 phpBB.cz
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* Original copyright: (c) 2005 phpBB Group
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
	'ALL_AVAILABLE'			=> 'Všechna dostupná',
	'ALL_RESULTS'			=> 'Všechny výsledky',

	'DISPLAY_RESULTS'		=> 'Zobrazit výsledek jako',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Nalezen %d výsledek hledání',
		2	=> 'Nalezeny %d výsledky hledání',
		3	=> 'Nalezeno %d výsledků hledání',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Vyhledávání nalezlo více než %d shodu',
		2	=> 'Vyhledávání nalezlo více než %d shody',
		3	=> 'Vyhledávání nalezlo více než %d shod',
	),

	'GLOBAL'				=> 'Hlavní téma',

	'IGNORED_TERMS'			=> 'vynecháno',
	'IGNORED_TERMS_EXPLAIN'	=> 'Následující zadaná slova byla při vyhledávání vynechána, protože jsou příliš obecná: <strong>%s</strong>',

	'JUMP_TO_POST'			=> 'Přejít na příspěvek',

	'LOGIN_EXPLAIN_EGOSEARCH'       => 'Pokud si chcete prohlédnout vlastní příspěvky, musíte se přihlásit.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Pro zobrazení seznamu nepřečtených příspěvků se musíte přihlásit.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Pro zobrazení nových příspěvků od své poslední návštěvy se musíte přihlásit.',  
	
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Pokoušíte se vyhledat příliš mnoho slov. Můžete vložit maximálně %1$d slovo.',
		2	=> 'Pokoušíte se vyhledat příliš mnoho slov. Můžete vložit maximálně %1$d slova.',
		3	=> 'Pokoušíte se vyhledat příliš mnoho slov. Můžete vložit maximálně %1$d slov.',
	),
	
	'NO_KEYWORDS'			=> 'Musíte zadat minimálně jedno slovo, které chcete vyhledat. Každé slovo musí obsahovat nejméně %s a maximálně %s znaků (kromě *).',
	'NO_RECENT_SEARCHES'	=> 'Nebyla nalezena žádná předchozí vyhledávání',
	'NO_SEARCH'				=> 'Je nám líto, ale nemáte oprávnění vyhledávat na tomto fóru.',
	'NO_SEARCH_LOAD'		=> 'Je nám líto, ale nemůžete teď použít vyhledávání. Aktuálně má server vysoké zatížení, prosím zkuste to později.',
	'NO_SEARCH_RESULTS'		=> 'Nebyly nalezeny žádné vhodné výsledky.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Omlouváme se, ale nyní nemůžete použít vyhledávání. Zkuste to, prosím, znovu za %d sekundu.',
		2	=> 'Omlouváme se, ale nyní nemůžete použít vyhledávání. Zkuste to, prosím, znovu za %d sekundy.',
		3	=> 'Omlouváme se, ale nyní nemůžete použít vyhledávání. Zkuste to, prosím, znovu za %d sekund.',
	),
	'NO_SEARCH_UNREADS'      => 'Vyhledávání nepřečtených příspěvků je na tomto fóru vypnuto.',
	'WORD_IN_NO_POST'		=> 'Nebyl nalezen žádný příspěvek, protože slovo %s není obsaženo v&nbsp;žádném z příspěvků.',
	'WORDS_IN_NO_POST'		=> 'Nebyl nalezen žádný příspěvek, protože slova %s nejsou obsažena v&nbsp;žádném z příspěvků.',

	'POST_CHARACTERS'		=> 'znaků příspěvku',
	'PHRASE_SEARCH_DISABLED'	=> 'Vyhledávání podle přesné fráze není na tomto fóru podporováno.',

	'RECENT_SEARCHES'		=> 'Poslední vyhledávání',
	'RESULT_DAYS'			=> 'Omezit výsledky na předchozí',
	'RESULT_SORT'			=> 'Seřadit výsledky podle',
	'RETURN_FIRST'			=> 'Zobrazit prvních',
  'RETURN_FIRST_EXPLAIN'	=> 'Nastavte 0 pro zobrazení celého příspěvku.',
	'GO_TO_SEARCH_ADV'	=> 'Přejít na rozšířené vyhledávání',

	'SEARCHED_FOR'				=> 'Text vyhledávání',
	'SEARCHED_TOPIC'			=> 'Prohledávané téma',
	'SEARCHED_QUERY'			=> 'Hledaný dotaz',
	'SEARCH_ALL_TERMS'			=> 'Hledat všechny výrazy nebo přesnou shodu s&nbsp;dotazem',
	'SEARCH_ANY_TERMS'			=> 'Hledat kterýkoliv z výrazů',
	'SEARCH_AUTHOR'				=> 'Vyhledat autora',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Zadáním * nahradíte část slova',
	'SEARCH_FIRST_POST'			=> 'Pouze první příspěvek v&nbsp;tématu',
	'SEARCH_FORUMS'				=> 'Prohledávat fóra',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Zvolte fórum nebo fóra, ve kterých chcete vyhledávat. Subfóra jsou prohledávána automaticky, pokud nezvolíte jinak.',
	'SEARCH_IN_RESULTS'			=> 'Prohledat tyto výsledky',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Umístění <strong>+</strong> před slovem znamená, že slovo musí být ve výsledku přítomno, a <strong>-</strong> znamená, že slovo nemá být ve výsledku přítomno. Pokud chcete, aby stačila shoda pouze s&nbsp;jedním z více slov, umístěte je do závorek oddělené znakem <strong>|</strong>. Použitím * nahradíte část slova',
	'SEARCH_MSG_ONLY'			=> 'Pouze text příspěvku',
	'SEARCH_OPTIONS'			=> 'Nastavení vyhledávání',
	'SEARCH_QUERY'				=> 'Vyhledávaný text',
	'SEARCH_SUBFORUMS'			=> 'Prohledávat subfóra',
	'SEARCH_TITLE_MSG'			=> 'Názvy příspěvků a jejich texty',
	'SEARCH_TITLE_ONLY'			=> 'Pouze názvy příspěvků',
	'SEARCH_WITHIN'				=> 'Hledat uvnitř',
	'SORT_ASCENDING'			=> 'Vzestupně',
	'SORT_AUTHOR'				=> 'Autor',
	'SORT_DESCENDING'			=> 'Sestupně',
	'SORT_FORUM'				=> 'Fórum',
	'SORT_POST_SUBJECT'			=> 'Předmět příspěvku',
	'SORT_TIME'					=> 'Čas odeslání',
	'SPHINX_SEARCH_FAILED'		=> 'Vyhledávání se nezdařilo: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Omlouváme se, ale vyhledávání nemohlo být provedeno. Více informací o tomto selhání najdete v chybovém záznamu.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Musíte vložit nejméně %d znak z autorova jména.',
		2	=> 'Musíte vložit nejméně %d znaky z autorova jména.',
		3	=> 'Musíte vložit nejméně %d znaků z autorova jména.',
	),
));
