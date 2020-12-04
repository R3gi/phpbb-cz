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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
  'CLI_APCU_CACHE_NOTICE'				=> 'APCu cache musí být pročištěna skrze Administrátorský panel.',

	'CLI_CONFIG_CANNOT_CACHED'			=> 'Nastavte tuto možnost, pokud se konfigurace mění příliš často na to, aby se vyplatilo ji cachovat.',
	'CLI_CONFIG_CURRENT'				=> 'Aktuální hodnota konfigurace, použijte jednu ze dvou možností (0 nebo 1)',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Konfigurace %s úspěšně smazána.',
	'CLI_CONFIG_NEW'					=> 'Nová hodnota konfigurace, použijte 0 a 1 pro určení booleovských hodnot',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfigurace %s neexistuje',
	'CLI_CONFIG_OPTION_NAME'			=> 'Název konfigurační možnosti',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Nastavte tuto možnost, pokud má být hodnota vytisknuta bez nového řádku na konci.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Zvýšit hodnotu o',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Konfigurace %s úspěšně zvýšena',
	'CLI_CONFIG_SET_FAILURE'			=> 'Nelze nastavit konfiguraci %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Úspěšně nastavená konfigurace %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Vytiskne seznam připravených a nepřipravených úkolů pro cron.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Spustí všechny připravené úkoly pro cron.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Název úkolu, který má být spuštěn',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Vypíše všechny nainstalované a dostupné migrace.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Aktualizuje databázi aplikováním migrací.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Vrátí migraci.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Smaže konfigurační možnost',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Zakáže určené rozšíření.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Povolí určené rozšíření.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Najde migrace, na kterých nic nezávisí.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Opraví stromovou strukturu fór a modulů.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Získá hodnotu konfigurační možnosti',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Zvýší číselnou hodnotu konfigurační možnosti',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Vypíše všechna rozšíření v databázi a v souborech.',
	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Název prostředí.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Spustit v bezpečném režimu (bez rozšíření).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Spustí shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Pročistí (smaže data) určené rozšíření.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Vypíše typy textů, které lze reparsovat.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Dostupné reparsovače:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Reparsuje uložený text pomocí aktuálních text_formatter služeb.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Typ textu, který chcete reparsovat. Nechte prázdné, pokud chcete reparsovat vše.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Neukládat žádné změny, ale jen vytisknout to, co by se stalo',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Nejnižší ID záznam ke zpracování',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Nejvyšší ID záznam ke zpracování',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Přibližný počet záznamů, které chcete najednou zpracovat',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Začít reparsovat tam, kde jste naposledy skončili',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Nastaví hodnotu konfigurační možnosti jen v případě, že stará hodnota odpovídá aktuální hodnotě',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Nastaví hodnotu konfigurační možnosti',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Smazat všechny existující náhledy.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Vygenerovat všechny chybějící náhledy.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Znovu vytvořit všechny náhledy.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Zkontrolovat, jestli je fórum aktuální.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Název rozšíření ke kontrole (hodnota „all“ zkontroluje všechna rozšíření)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Spustit kontrolní příkaz s použitím cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Spustit příkaz pro kontrolu pouze stabilních nebo pouze nestabilních verzí.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Updates outdated password hashes to be hashed with bcrypt.',
	'CLI_ERROR_INVALID_STABILITY' => '"%s" musí být nastavena na „stabilní” nebo „nestabilní”.',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Aktivovat (nebo deaktivovat) účet uživatele.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Uživatelské jméno účtu k aktivaci.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Deaktivovat účet uživatele',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Uživatel je již aktivní.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Uživatel je již neaktivní.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Přidat nového uživatele.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Uživatelské jméno nového uživatele',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Heslo nového uživatele',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Emailová adresa nového uživatele',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Odeslat novému uživateli aktivační email k účtu (neposílá se ve výchozím nastavení)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Smazat účet uživatele.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Uživatelské jméno uživatele ke smazání',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Smazat všechny příspěvky uživatele. Bez této možnosti zůstanou příspěvky uživatele zachovány.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Znovu pročistit uživatelská jména.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Rozšíření %s nelze zakázat',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Rozšíření %s úspěšně zakázáno',
	'CLI_EXTENSION_DISABLED'					=> 'Rozšíření %s není povolené',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Nelze povolit rozšíření %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Rozšíření %s úspěšně povoleno',
	'CLI_EXTENSION_ENABLED'				=> 'Rozšíření %s už bylo povoleno',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Rozšíření %s neexistuje',
	'CLI_EXTENSION_NAME'				=> 'Jméno rozšíření',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Nelze pročistit rozšíření %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Rozšíření %s úspěšně pročištěno',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Nelze aktualizovat rozšíření %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Rozšíření %s bylo úspěšně aktualizováno',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Nebylo nalezeno žádné rozšíření.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Rozšíření %s není možné povolit.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Dostupné',
	'CLI_EXTENSIONS_DISABLED'			=> 'Zakázané',
	'CLI_EXTENSIONS_ENABLED'			=> 'Povolené',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Úspěšně opraven strom struktury fór a modulů.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Úspěšně aktualizovány zastaralé hesla použitím bcryptu.',

	'CLI_MIGRATION_NAME'					=> 'Název migrace včetně jmenného prostoru (abyste předešli problémům, použijte normální lomítka místo zpětných lomítek).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Dostupné migrace',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Nainstalované migrace',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Zobrazit pouze dostupné migrace',
	'CLI_MIGRATIONS_EMPTY'                  => 'Žádné migrace.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Reparsuji %1$s (řádek %2$d - %3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reparsuji %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Reparsování bylo úspěšně dokončeno',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> 'Smazán náhled %1$s (%2$s).',
	'CLI_THUMBNAIL_DELETING'	=> 'Mazání náhledů',
	'CLI_THUMBNAIL_SKIPPED'		=> 'Přeskočen náhled %1$s (%2$s).',
	'CLI_THUMBNAIL_GENERATED'	=> 'Vygenerován náhled %1$s (%2$s).',
	'CLI_THUMBNAIL_GENERATING'	=> 'Generování náhledů',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Všechny náhledy byly znovu vygenerovány.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Všechny náhledy byly smazány.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Žádné náhledy k vygenerování.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Žádné náhledy ke smazání.',

	'CLI_USER_ADD_SUCCESS'		=> 'Uživatel %s byl úspěšně přidán.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Opravdu chcete smazat „%s“? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Pročišťování uživatelských jmen',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Pročišťování dokončeno. Žádné uživatelské jméno nebylo třeba pročistit.',
		1	=> 'Pročišťování dokončeno. %d uživatelské jméno bylo pročištěno.',
		2	=> 'Pročišťování dokončeno. %d uživatelská jména byla pročištěna.',
		3	=> 'Pročišťování dokončeno. %d uživatelských jmen bylo pročištěno.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Můžete také určit název úlohy pro cron pro spuštění pouze určité úlohy pro cron.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Aktivujte účet uživatele. Můžete ho také deaktivovat použitím možnosti <info>--deactivate</info>.
Použitím možnosti <info>--send-email</info> můžete volitelně odeslat uživateli aktivační email.',
	'CLI_HELP_USER_ADD'			=> 'Příkaz <info>%command.name%</info> přidá nového uživatele:
Pokud je tento příkaz spuštěn bez dalších možností, budete požádáni o jejich vložení.
Použitím možnosti <info>--send-email</info> můžete volitelně odeslat novému uživateli email.',
	'CLI_HELP_USER_RECLEAN'		=> 'Znovu pročištění uživatelských jmen zkontroluje všechna uložená uživatelská jména a zajistí, aby byly uložené i verze uživ. jmen v základním tvaru. U uživatelských jmen v základním tvaru nezáleží na velikosti písmen, jsou NFC normalizovaná a transformovaná do ASCII.',
));
