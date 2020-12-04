<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_STYLES_EXPLAIN'	=> 'Zde můžete spravovat vzhledy dostupné na vašem fóru.<br>Prosím vezměte na vědomí, že nemůžete odinstalovat „<strong>prosilver</strong>” styl, protože se jedná o primární a rodičovský styl phpBB.',

	'CANNOT_BE_INSTALLED'			=> 'Nelze instalovat',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Opravdu chcete odinstalovat vybrané vzhledy?',
	'COPYRIGHT'						=> 'Copyright',

	'DEACTIVATE_DEFAULT'		=> 'Výchozí vzhled nemůžete deaktivovat.',
	'DELETE_FROM_FS'			=> 'Smazat soubory',
	'DELETE_STYLE_FILES_FAILED'	=> 'Během mazání souborů ze vzhledu „%s“ došlo k chybě.',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Soubory ze vzhledu „%s“ byly smazány.',
	'DETAILS'					=> 'Informace',

	'INHERITING_FROM'			=> 'Dědí vlastnosti z',
	'INSTALL_STYLE'				=> 'Instalovat vzhled',
	'INSTALL_STYLES'			=> 'Nainstalovat vzhledy',
	'INSTALL_STYLES_EXPLAIN'	=> 'Na této stránce můžete nainstalovat nové vzhledy.<br />Pokud nemůžete najít určitý vzhled na seznamu dole, zkontrolujte jestli už není vzhled nainstalován. Pokud není nainstalován, zkontrolujte, jestli byl správně nahrán na server.',
	'INVALID_STYLE_ID'			=> 'Neplatné ID vzhledu.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Žádné vzhledy neodpovídají vašemu požadavku.',
	'NO_UNINSTALLED_STYLE'		=> 'Nebyly nalezeny žádné nenainstalované vzhledy.',

	'PURGED_CACHE'				=> 'Mezipaměť byla pročištěna.',

	'REQUIRES_STYLE'			=> 'Tento vzhled vyžaduje, aby byl nainstalován vzhled „%s“.',

	'STYLE_ACTIVATE'			=> 'Aktivovat',
	'STYLE_ACTIVE'				=> 'Aktivní',
	'STYLE_DEACTIVATE'			=> 'Deaktivovat',
	'STYLE_DEFAULT'				=> 'Použít jako výchozí vzhled',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Nejdřív musíte vzhled aktivovat a teprve potom z něj můžete udělat výchozí vzhled.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Neplatný nadřazený vzhled.',
	'STYLE_ERR_NAME_EXIST'		=> 'Vzhled se stejným názvem již existuje.',
	'STYLE_ERR_STYLE_NAME'		=> 'Musíte vložit název vzhledu.',
	'STYLE_INSTALLED'			=> 'Vzhled „%s“ byl nainstalován.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Zpět na seznam nainstalovaných vzhledů.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Instalovat další vzhledy.',
	'STYLE_NAME'				=> 'Název vzhledu',
	'STYLE_NAME_RESERVED'		=> 'Vzhled „%s“ nemůže být nainstalován, protože je jeho název rezervován.',
	'STYLE_NOT_INSTALLED'		=> 'Vzhled „%s“ nebyl nainstalován.',
	'STYLE_PATH'				=> 'Cesta ke vzhledu',
	'STYLE_UNINSTALL'			=> 'Odinstalovat',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Vzhled „%s“ nelze odinstalovat, protože jeden nebo více podřazených vzhledů, které od něho dědí vlastnosti.',
	'STYLE_UNINSTALLED'			=> 'Vzhled „%s“ byl úspěšně odinstalován.',
	'STYLE_PHPBB_VERSION'		=> 'phpBB verze',
	'STYLE_USED_BY'				=> 'Používá (včetně robotů)',
	'STYLE_VERSION'				=> 'Verze stylu',

	'UNINSTALL_DEFAULT'		=> 'Výchozí vzhled nemůžete odinstalovat.',
	'UNINSTALL_PROSILVER'	=> 'Nemůžete odinstalovat styl „prosilver”.',
  'BROWSE_STYLES_DATABASE'	=> 'Procházet databázi vzhledů',
]);
