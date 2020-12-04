<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Přidat soubory',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Přidejte soubory do fronty nahrávání a klikněte na tlačítko „Nahrát soubory“.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s se již nachází ve frontě.',
	'PLUPLOAD_CLOSE'			=> 'Zavřít',
	'PLUPLOAD_DRAG'				=> 'Sem přetáhněte soubory.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Chyba duplicitního souboru.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Soubory můžete také připojit jejich přetažením do textového okna, ve kterém píšete příspěvky.',
	'PLUPLOAD_ERR_INPUT'		=> 'Nepodařilo se otevřít vstupní datový tok.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Nepodařilo se přesunout nahraný soubor.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Nepodařilo se otevřít výstupní datový tok.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Příliš velký soubor:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Chyba v počtu souborů.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Neplatná přípona souboru:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Modul runtime vyčerpal dostupnou paměť.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'URL adresa pro nahrávání může být chybná nebo neexistuje.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Chyba přípony souboru.',
	'PLUPLOAD_FILE'				=> 'Soubor: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Soubor: %s, velikost: %d, maximální velikost souboru: %d',
	'PLUPLOAD_FILENAME'			=> 'Název souboru',
	'PLUPLOAD_FILES_QUEUED'		=> '%d souborů ve frontě',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Obecná chyba.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP chyba.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Formát obrázku je buď špatný nebo není podporovaný.',
	'PLUPLOAD_INIT_ERROR'		=> 'Inicializační chyba.',
	'PLUPLOAD_IO_ERROR'			=> 'IO chyba.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'Nepoužívá se',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Bezpečnostní chyba.',
	'PLUPLOAD_SELECT_FILES'		=> 'Přílohy',
	'PLUPLOAD_SIZE'				=> 'Velikost',
	'PLUPLOAD_SIZE_ERROR'		=> 'Chyba velikosti souborů.',
	'PLUPLOAD_STATUS'			=> 'Stav',
	'PLUPLOAD_START_UPLOAD'		=> 'Nahrát soubory',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Začít nahrávat frontu souborů',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Zastavit nahrávání',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Ukončit nahrávání aktuálního souboru',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Nahráno %d/%d souborů',
));
