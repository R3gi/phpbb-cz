<?php
/**
*
* viewtopic [Čeština]
*
* @package language
* @version $Id: viewtopic.php 496 2009-11-17 18:09:16Z ameeck $
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
	'APPROVE'								=> 'Schválit',
	'ATTACHMENT'						=> 'Příloha',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Přílohy jsou vypnuty.',

	'BOOKMARK_ADDED'		=> 'Téma bylo přidáno do záložek.',
	'BOOKMARK_ERR'         => 'Přidání tématu do záložek selhalo. Zkuste to znovu.',
	'BOOKMARK_REMOVED'		=> 'Záložka byla odstraněna.',
	'BOOKMARK_TOPIC'		=> 'Přidat do záložek',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Odstranit ze záložek',
	'BUMPED_BY'				=> 'Naposledy oživil %1$s v&nbsp;%2$s',
	'BUMP_TOPIC'			=> 'Oživit téma',

	'DELETE_TOPIC'			=> 'Odstranit téma',
	'DELETED_INFORMATION'	=> 'Smazal %1$s dne %2$s',
	'DISAPPROVE'					=> 'Zamítnout',
	'DOWNLOAD_NOTICE'		=> 'Nemáte oprávnění prohlížet přiložené soubory.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Naposledy upravil(a) %2$s dne %3$s, celkem upraveno %1$d x.',
		2	=> 'Naposledy upravil(a) %2$s dne %3$s, celkem upraveno %1$d x.',
		3	=> 'Naposledy upravil(a) %2$s dne %3$s, celkem upraveno %1$d x.',
	),
	'EMAIL_TOPIC'			=> 'Napsat e-mail',
	'ERROR_NO_ATTACHMENT'	=> 'Vybraná příloha už neexistuje',

	'FILE_NOT_FOUND_404'	=> 'Soubor <strong>%s</strong> nebyl nalezen nebo je porušen.',
	'FORK_TOPIC'			=> 'Zkopírovat téma',

	'FULL_EDITOR' => 'Upravit v editoru & Náhled',

	'LINKAGE_FORBIDDEN'		=> 'Nejste autorizovaný pro prohlížení a stahování z tohoto webu.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Byli jste upozorněni na toto téma, přihlaste se pro jeho zobrazení.',
	'LOGIN_VIEWTOPIC'		=> 'Pro zobrazení tohoto tématu je vyžadována registrace.',

	'MAKE_ANNOUNCE'				=> 'Změnit na oznámení',
	'MAKE_GLOBAL'				=> 'Změnit na globální',
	'MAKE_NORMAL'				=> 'Změnit na normální',
	'MAKE_STICKY'				=> 'Změnit na důležité',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Můžete vybrat <strong>%d</strong> možnost',
		2	=> 'Můžete vybrat až <strong>%d</strong> možnosti',
		3	=> 'Můžete vybrat až <strong>%d</strong> možností',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Příloha <strong>%s</strong> je dlouhodobě nedostupná.',
	'MOVE_TOPIC'				=> 'Přesunout téma',

	'NO_ATTACHMENT_SELECTED'=> 'Nevybral jste přílohu ke stažení nebo zobrazení.',
	'NO_NEWER_TOPICS'		=> 'V tomto fóru nejsou žádná novější témata.',
	'NO_OLDER_TOPICS'		=> 'V tomto fóru nejsou žádná starší témata.',
	'NO_UNREAD_POSTS'		=> 'V tomto fóru nejsou další nepřečtená témata.',
	'NO_VOTE_OPTION'		=> 'Musíte vybrat možnost.',
	'NO_VOTES'				=> 'Žádná hlasování',
  'NO_AUTH_PRINT_TOPIC'	=> 'Nemáte oprávnění tisknout témata.',

	'POLL_ENDED_AT'			=> 'Anketa končí za %s',
	'POLL_RUN_TILL'			=> 'Anketa do %s',
	'POLL_VOTED_OPTION'		=> 'Hlasovali jste pro tuto možnost',
	'POST_DELETED_RESTORE'	=> 'Tento příspěvek byl smazán, ale může být obnoven.',
	'PRINT_TOPIC'			=> 'Verze pro tisk',

	'QUICKREPLY'			=> 'Rychlá odpověď',

	'QUICK_MOD'				=> 'Rychlé úpravy',

	'REPLY_TO_TOPIC'		=> 'Odpovědět na téma',
	'RESTORE'				=> 'Obnovit',
	'RESTORE_TOPIC'			=> 'Obnovit téma',
	'RETURN_POST'			=> '%sVrátit se na příspěvek%s',

	'SUBMIT_VOTE'			=> 'Potvrdit volbu',

	'TOPIC_TOOLS'			=> 'Nástroje tématu',
	'TOTAL_VOTES'			=> 'Celkem hlasů',

	'UNLOCK_TOPIC'			=> 'Odemknout téma',

	'VIEW_INFO'				=> 'Podrobnosti příspěvku',
	'VIEW_NEXT_TOPIC'		=> 'Následující téma',
	'VIEW_PREVIOUS_TOPIC'	=> 'Předchozí téma',
	'VIEW_RESULTS'			=> 'Zobrazit výsledky',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d příspěvek',
		2	=> '%d příspěvky',
		3	=> '%d příspěvků',
	),
	'VIEW_UNREAD_POST'		=> 'Přejít na nepřečtené příspěvky',
	'VOTE_SUBMITTED'		=> 'Váš hlas byl přijat.',
	'VOTE_CONVERTED'		=> 'Nelze změnit hlas u&nbsp;převedených hlasování.',
));
