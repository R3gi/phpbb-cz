<?php
/** 
*
* acp_language.php [Čeština]
*
* @package language
* @version $Id: language.php 492 2009-09-14 13:28:16Z ameeck $
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
	'ACP_FILES'	=> 'Jazykové soubory administrace',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Zde můžete instalovat/odinstalovat jazykové balíky k&nbsp;fóru. Jazyk nastavený jako výchozí je označen hvězdičkou.',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Opravdu chcete smazat „%s“?',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Instalované jazykové balíky',

	'LANGUAGE_DETAILS_UPDATED'	=> 'Informace o jazyku byly aktualizovány',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Tento balík je již nainstalován.',
	'LANGUAGE_PACK_DELETED'	=> 'Jazykový balík <strong>%s</strong> byl odstraněn. Uživatele používající tento jazyk mají nyní nastavený výchozí jazyk fóra.',
	'LANGUAGE_PACK_DETAILS' => 'Podrobnosti jazykového balíku',
	'LANGUAGE_PACK_INSTALLED'	=> 'Jazykový balík <strong>%s</strong> byl úspěšně nainstalován',
  'LANGUAGE_PACK_CPF_UPDATE' => 'Jazykové řetězce, vlastního pole v profilu, byla zkopírována ze základního jazyka. V případě potřeby proveďte jejich úpravu.',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'	=> 'Místní název',
	'LANGUAGE_PACK_NAME'	=> 'Název',
	'LANGUAGE_PACK_NOT_EXIST'	=> 'Vybraný balík neexistuje',
	'LANGUAGE_PACK_USED_BY'	=> 'Používán(včetně robotů)',
	'LANGUAGE_VARIABLE'	=> 'Jazyková proměnná',
	'LANG_AUTHOR'	=> 'Autor balíku',
	'LANG_ENGLISH_NAME'	=> 'Anglický název',
	'LANG_ISO_CODE'	=> 'Kód ISO',
	'LANG_LOCAL_NAME'	=> 'Místní název',

	'MISSING_LANG_FILES'		=> 'Chybějící jazykové soubory',

	'MISSING_LANG_VARIABLES'	=> 'Chybějící jazykové proměnné',

	'NO_FILE_SELECTED'	=> 'Nezvolili jste jazykový soubor.',
	'NO_LANG_ID'	=> 'Nezvolili jste jazykový balík.',
	'NO_REMOVE_DEFAULT_LANG'	=> 'Nelze odstranit výchozí jazyk.<br />Pokud chcete tento jazyk odstranit, musíte nejdříve změnit výchozí jazyk fóra.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Žádné odinstalované balíky',

	'THOSE_MISSING_LANG_FILES'	=> 'Následující soubory chybí v&nbsp;adresáři jazyku %s.',
	'THOSE_MISSING_LANG_VARIABLES'	=> 'Následující proměnné chybějí v&nbsp;jazykovém balíku <strong>%s</strong>.',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Nenainstalované jazykové balíky',
  'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Procházet databázi jazykových balíčků',
));
