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
	'CONFIG_NOT_EXIST'					=> 'Konfigurační nastavení „%s“, které mělo existovat, neexistuje.',

	'GROUP_NOT_EXIST'					=> 'Skupina „%s“, která měla existovat, neexistuje.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Aplikace závislostí z %s.',
	'MIGRATION_DATA_DONE'				=> 'Instalovaná data: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Instalace dat: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_DATA_RUNNING'			=> 'Instalace dat: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migrace je již nainstalována (přeskočeno): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Během požadavku došlo k chybě a byla vyvolána výjimka. Změny provedené před tím, než došlo k chybě, byly podle našich nejlepších schopností vráceny zpět, ale měli byste zkontrolovat vaše fórum a ujistit se, že se na něm nevyskytují chyby.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Migraci „%1$s“ nelze provést, chybí migrace „%2$s“.',
	'MIGRATION_NOT_INSTALLED'			=> 'Migrace "%s" není nainstalována.',
	'MIGRATION_NOT_VALID'				=> '%s není platná migrace.',
	'MIGRATION_SCHEMA_DONE'				=> 'Nainstalované schema: %1$s; Čas: %2$.2f sekund',
  'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Instaluji schema: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Instalace schema: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Vrácená data: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Vrácení dat: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Vracím data: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Vrácené schéma: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Vrácení schéma: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Vracím schéma: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Migrace je neplatná. V příkazu if chybí podmínka.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Migrace je neplatná. V příkazu if chybí platné volání kroku migrace.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Migrace je neplatná. Vlastní volatelnou funkci nelze volat.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Migrace je neplatná. Byl zjištěn neznámý typ migračního nástroe.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Migrace je neplatná. Byl zjištěn nedefinovaný migrační nástroj.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Migrace je neplatná. Byla zjištěna nedefinovaná metoda migračního nástroje.',

	'MODULE_ERROR'						=> 'Během tvorby modulu došlo k chybě: %s',
	'MODULE_EXISTS'						=> 'Modul již existuje: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Několik modulů s daným jazykovým jménem nadřazeného modulu již existuje: %s. Zkuste použít tlačítka před/po pro určení umístění modulu.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Požadovaný info soubor modulu chybí: %2$s',
	'MODULE_NOT_EXIST'					=> 'Požadovaný modul neexistuje: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Nepodařilo se určit identifikátor nadřazeného modulu: %s',
	'PERMISSION_NOT_EXIST'				=> 'Nastavení oprávnění „%s“, které mělo existovat, neexistuje.',

	'ROLE_NOT_EXIST'					=> 'Role oprávnění „%s“, která měla existovat, neexistuje.',
));
