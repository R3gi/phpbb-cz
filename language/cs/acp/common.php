<?php
/**
*
* acp_common [Čeština]
*
* @package language
* @version $Id: common.php 505 2010-11-21 10:32:21Z ameeck $
* @copyright (c)  2010 phpBB.cz
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administrátoři',
	'ACP_ADMIN_LOGS'			=> 'Administrační log',
	'ACP_ADMIN_ROLES'			=> 'Administrátorské role',
	'ACP_ATTACHMENTS'			=> 'Přílohy',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Přílohy',
	'ACP_AUTH_SETTINGS'			=> 'Autentifikace',
	'ACP_AUTOMATION'			=> 'Automatizace',
	'ACP_AVATAR_SETTINGS'		=> 'Avatary',

	'ACP_BACKUP'				=> 'Záloha',
	'ACP_BAN'					=> 'Banování',
	'ACP_BAN_EMAILS'			=> 'Ban e-mailových adres',
	'ACP_BAN_IPS'				=> 'Ban IP adres',
	'ACP_BAN_USERNAMES'			=> 'Ban uživatelských jmen',
	'ACP_BBCODES'				=> 'Tagy BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfigurace fóra',
	'ACP_BOARD_FEATURES'		=> 'Funkce fóra',
	'ACP_BOARD_MANAGEMENT'		=> 'Správa fóra',
	'ACP_BOARD_SETTINGS'		=> 'Nastavení fóra',
	'ACP_BOTS'					=> 'Boti/vyhledávače',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Přizpůsobení',
	'ACP_CAT_DATABASE'			=> 'Databáze',
	'ACP_CAT_DOT_MODS'			=> 'Rozšíření',
	'ACP_CAT_FORUMS'			=> 'Fóra',
	'ACP_CAT_GENERAL'			=> 'Obecné',
	'ACP_CAT_MAINTENANCE'		=> 'Údržba',
	'ACP_CAT_PERMISSIONS'		=> 'Oprávnění',
	'ACP_CAT_POSTING'			=> 'Přispívání',
	'ACP_CAT_STYLES'			=> 'Vzhledy',
	'ACP_CAT_SYSTEM'			=> 'Systém',
	'ACP_CAT_USERGROUP'			=> 'Uživatelé a skupiny',
	'ACP_CAT_USERS'				=> 'Uživatelé',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komunikace mezi klienty',
	'ACP_CONTACT'				=> 'Kontaktní stránka',
	'ACP_CONTACT_SETTINGS'		=> 'Nastavení kontaktní stránky',
	'ACP_COOKIE_SETTINGS'		=> 'Cookies',
	'ACP_CRITICAL_LOGS'			=> 'Log chyb',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Vlastní pole v&nbsp;profilu',

	'ACP_DATABASE'				=> 'Správa databáze',
	'ACP_DISALLOW'				=> 'Zakázat',
	'ACP_DISALLOW_USERNAMES'	=> 'Zakázat uživatelská jména',

	'ACP_EMAIL_SETTINGS'		=> 'E-maily',
	'ACP_EXTENSION_GROUPS'		=> 'Nastavení příloh podle druhu',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Správa rozšíření',
	'ACP_EXTENSIONS'			=> 'Správce rozšíření',

	'ACP_FEED'					=> 'Exporty ATOM',
	'ACP_FEED_SETTINGS'			=> 'Nastavení exportů',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Oprávnění založená na fórech',
	'ACP_FORUM_LOGS'				=> 'Log fór',
	'ACP_FORUM_MANAGEMENT'			=> 'Správa fór',
	'ACP_FORUM_MODERATORS'			=> 'Moderátoři fór',
	'ACP_FORUM_PERMISSIONS'			=> 'Oprávnění fór',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopírovat oprávnění fóra',
	'ACP_FORUM_ROLES'				=> 'Role fór',

	'ACP_GENERAL_CONFIGURATION'		=> 'Obecná konfigurace',
	'ACP_GENERAL_TASKS'				=> 'Běžné úkoly',
	'ACP_GLOBAL_MODERATORS'			=> 'Globální moderátoři',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globální oprávnění',
	'ACP_GROUPS'					=> 'Skupiny',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Skupinové oprávnění fóra',
	'ACP_GROUPS_MANAGE'				=> 'Správa uživ. skupin',
	'ACP_GROUPS_MANAGEMENT'			=> 'Správa skupiny',
	'ACP_GROUPS_PERMISSIONS'		=> 'Oprávnění skupiny',
	'ACP_GROUPS_POSITION'			=> 'Umístění skupiny',
  'ACP_HELP_PHPBB'			=> 'Pomozte podpořit phpBB',

	'ACP_ICONS'					=> 'Ikony témat',
	'ACP_ICONS_SMILIES'			=> 'Ikony témat/smajlíci',
	'ACP_INACTIVE_USERS'		=> 'Neaktivní uživatelé',
	'ACP_INDEX'					=> 'Obsah administrace',

	'ACP_JABBER_SETTINGS'		=> 'Jabber',

	'ACP_LANGUAGE'				=> 'Správa jazyků',
	'ACP_LANGUAGE_PACKS'		=> 'Jazykové balíky',
	'ACP_LOAD_SETTINGS'			=> 'Zatížení',
	'ACP_LOGGING'				=> 'Zaznamenávání',

	'ACP_MAIN'					=> 'Obsah administrace',
	'ACP_MANAGE_ATTACHMENTS'			=> 'Správa příloh',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Zde můžete zobrazit a mazat soubory připojené k příspěvkům a soukromým zprávám.',
	'ACP_MANAGE_EXTENSIONS'		=> 'Druhy souborů',
	'ACP_MANAGE_FORUMS'			=> 'Správa fór',
	'ACP_MANAGE_RANKS'			=> 'Hodnosti',
	'ACP_MANAGE_REASONS'		=> 'Správa důvodů hlášení/zamítnutí',
	'ACP_MANAGE_USERS'			=> 'Správa uživatelů',
	'ACP_MASS_EMAIL'			=> 'Hromadný e-mail',
	'ACP_MESSAGES'				=> 'Zprávy',
	'ACP_MESSAGE_SETTINGS'		=> 'Soukromé zprávy',
	'ACP_MODULE_MANAGEMENT'		=> 'Moduly',
	'ACP_MOD_LOGS'				=> 'Moderátorský log',
	'ACP_MOD_ROLES'				=> 'Moderátorské role',

	'ACP_NO_ITEMS'            => 'Nejsou zde zatím žádné položky.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Nepřiřazené přílohy',

	'ACP_PERMISSIONS'			=> 'Oprávnění',
	'ACP_PERMISSION_MASKS'		=> 'Masky oprávnění',
	'ACP_PERMISSION_ROLES'		=> 'Role oprávnění',
	'ACP_PERMISSION_TRACE'		=> 'Sledování oprávnění',
	'ACP_PHP_INFO'				=> 'Informace o&nbsp;PHP',
	'ACP_POST_SETTINGS'			=> 'Příspěvky',
	'ACP_PRUNE_FORUMS'			=> 'Pročistit fóra',
	'ACP_PRUNE_USERS'			=> 'Pročistit uživatele',
	'ACP_PRUNING'				=> 'Pročišťování',

	'ACP_QUICK_ACCESS'			=> 'Rychlý přístup',

	'ACP_RANKS'					=> 'Hodnosti',
	'ACP_REASONS'				=> 'Důvody schválení/zamítnutí',
	'ACP_REGISTER_SETTINGS'		=> 'Registrace uživatelů',

	'ACP_RESTORE'				=> 'Obnovit',

	'ACP_SEARCH'				=> 'Nastavení hledání',
	'ACP_SEARCH_INDEX'			=> 'Vyhledávač',
	'ACP_SEARCH_SETTINGS'		=> 'Vyhledávání',

	'ACP_SECURITY_SETTINGS'		=> 'Zabezpečení',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfigurace serveru',
	'ACP_SERVER_SETTINGS'		=> 'Server',
	'ACP_SIGNATURE_SETTINGS'	=> 'Podpisy',
	'ACP_SMILIES'				=> 'Smajlíci',
	'ACP_STYLE_MANAGEMENT'		=> 'Správa vzhledů',
	'ACP_STYLES'				=> 'Vzhledy',
	'ACP_STYLES_CACHE'			=> 'Pročistit mezipaměť',
	'ACP_STYLES_INSTALL'		=> 'Nainstalovat vzhled',

	'ACP_SUBMIT_CHANGES'		=> 'Odeslat změny',

	'ACP_TEMPLATES'				=> 'Šablony',
	'ACP_THEMES'				=> 'Vzhledy',

	'ACP_UPDATE'					=> 'Aktualizace',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Uživatelské oprávnění fóra',
	'ACP_USERS_LOGS'				=> 'Uživatelský log',
	'ACP_USERS_PERMISSIONS'			=> 'Oprávnění uživatele',
	'ACP_USER_ATTACH'				=> 'Přílohy',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Záznamy',
	'ACP_USER_GROUPS'				=> 'Skupiny',
	'ACP_USER_MANAGEMENT'			=> 'Správa uživatelů',
	'ACP_USER_OVERVIEW'				=> 'Přehled',
	'ACP_USER_PERM'					=> 'Oprávnění',
	'ACP_USER_PREFS'				=> 'Nastavení',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Hodnost',
	'ACP_USER_ROLES'				=> 'Uživatelské role',
	'ACP_USER_SECURITY'				=> 'Bezpečnost uživatele',
	'ACP_USER_SIG'					=> 'Podpis',
	'ACP_USER_WARNINGS' => 'Varování',

	'ACP_VC_SETTINGS'					=> 'Obrana proti spamu',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Náhled obrázku CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Zkontrolovat aktualizace',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Zobrazit administrační oprávnění',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Zobrazit oprávnění moderování fór',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Zobrazit oprávnění založená na fórech',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Zobrazit globální moderátorská oprávnění',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Zobrazit oprávnění založená na uživatelích',

	'ACP_WORDS'					=> 'Cenzura slov',

	'ACTION'					=> 'Akce',
	'ACTIONS'						=> 'Akce',
	'ACTIVATE'				=> 'Aktivovat',
	'ADD'							=> 'Přidat',
	'ADMIN'						=> 'Administrace',
	'ADMIN_INDEX'			=> 'Obsah administrace',
	'ADMIN_PANEL'			=> 'Administrace fóra',

	'ADM_LOGOUT'       	  => 'Odhlásit&nbsp;z&nbsp;administrace',
	'ADM_LOGGED_OUT'      => 'Byli jste úspěšně odhlášeni z administrace fóra.',

	'BACK'					=> 'Zpět',

  'CONTAINER_EXCEPTION' => 'Kvůli nainstalovanému rozšíření došlo v phpBB k chybě při vytváření kontejneru. Z tohoto důvodu byla všechna rozšíření dočasně zakázána. Prosím, zkuste pročistit cache fóra. Jakmile bude chyba s kontejnerem vyřešena, budou všechna rozšíření znovu povolena. Pokud tato chyba bude přetrvávat, navštivte, prosím, <a href="https://www.phpbb.com/support">podpůrné fórum na phpBB.com</a>.',
  'EXCEPTION' => 'Výjimka',

	'COLOUR_SWATCH'			=> 'Vzorník bezpečných barev',
	'CONFIG_UPDATED'		=> 'Nastavení bylo aktualizováno.',

	'CRON_LOCK_ERROR'		=> 'Nelze získat cron lock.',
	'CRON_NO_SUCH_TASK'		=> 'Nelze nalézt úkol pro cron „%s“.',
	'CRON_NO_TASK'			=> 'Nyní není potřeba spouštět žádný úkol pro cron.',
	'CRON_NO_TASKS'			=> 'Nelze nalézt žádný úkol pro cron.',
  'CSV_INVALID'			=> 'Zadané nastavení oddělené čárkou “%1$s” je neplatné. Hodnoty by měly být oddělené pouze čárkou, neměly by obsahovat žádné přední nebo koncové oddělovače.',
  'CURRENT_VERSION'		=> 'Aktuální verze',

	'DEACTIVATE'								=> 'Deaktivovat',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Zadaná cesta „%s“ neexistuje.',
	'DIRECTORY_NOT_DIR'					=> 'Zadaná cesta „%s“ není adresář.',
	'DIRECTORY_NOT_WRITABLE'		=> 'Do zadané cesty „%s“ nelze zapisovat.',
	'DISABLE'										=> 'Zakázat',
	'DOWNLOAD'									=> 'Stáhnout',
	'DOWNLOAD_AS'								=> 'Stáhnout jako',
	'DOWNLOAD_STORE'						=> 'Stáhnout nebo uložit soubor',
	'DOWNLOAD_STORE_EXPLAIN'		=> 'Soubor můžete přímo stáhnout, nebo ho uložit ve svém adresáři <samp>store/</samp>.',
	'DOWNLOADS'					=> 'Stažení',

	'EDIT'							=> 'Upravit',
	'ENABLE'						=> 'Povolit',
	'EXPORT_DOWNLOAD'		=> 'Stáhnout',
	'EXPORT_STORE'			=> 'Uložit',

	'GENERAL_OPTIONS'			=> 'Obecné možnosti',
	'GENERAL_SETTINGS'		=> 'Obecná nastavení',
	'GLOBAL_MASK'					=> 'Globální maska oprávnění',

	'INSTALL'					=> 'Instalovat',
	'IP'							=> 'IP adresa',
	'IP_HOSTNAME'			=> 'IP adresy nebo názvy hostitelů',

  'LATEST_VERSION'		=> 'Poslední verze',
	'LOAD_NOTIFICATIONS'			=> 'Zobrazit upozornění',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Zobrazí seznam s upozorněními na každé stránce (obvykle v hlavičce fóra).',
	'LOGGED_IN_AS'					=> 'Jste přihlášen jako:',
	'LOGIN_ADMIN'						=> 'Pro správu fóra musíte mít příslušná uživatelská oprávnění.',
	'LOGIN_ADMIN_CONFIRM'		=> 'Pro administraci fóra se musíte znovu přihlásit.',
	'LOGIN_ADMIN_SUCCESS'		=> 'Úspěšně jste se přihlásili. Nyní budete přesměrováni do Administračního panelu fóra.',
	'LOOK_UP_FORUM'					=> 'Zvolte fórum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Můžete zvolit více než jedno fórum.',

	'MANAGE'				=> 'Spravovat',
	'MENU_TOGGLE'			=> 'Zobrazit nebo skrýt postranní menu',

	'MORE'					=> 'Více',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Více informací »',

	'MOVE_DOWN'				=> 'Posunout dolů',
	'MOVE_UP'				=> 'Posunout nahoru',

	'NOTIFY'				=> 'Upozornění',
	'NO_ADMIN'				=> 'Nemáte oprávnění spravovat toto fórum.',
	'NO_EMAILS_DEFINED'		=> 'Nebyla nalezena žádná platná e-mailová adresa',
	'NO_FILES_TO_DELETE'	=> 'Přílohy, které jste vybrali pro smazání, neexistují.',
	'NO_PASSWORD_SUPPLIED'	=> 'Pro vstup do administrace musíte zadat heslo.',

	'OFF'					=> 'Vypnuto',
	'ON'					=> 'Zapnuto',

	'PARSE_BBCODE'						=> 'Zpracovávat BBCode',
	'PARSE_SMILIES'						=> 'Zpracovávat smajlíky',
	'PARSE_URLS'						=> 'Zpracovávat odkazy',
	'PERMISSIONS_TRANSFERRED'			=> 'Oprávnění byla přenesena',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Nyní máte oprávnění %1$s. Můžete procházet fórum s&nbsp;uživatelským oprávněním, ale nelze vstoupit do Administrace fóra, protože administrátorská oprávnění nebyla přenesena. K <a href="%2$s"><strong>vlastním oprávněním</strong></a> se můžete kdykoliv vrátit.',
	'PROCEED_TO_ACP'					=> '%sPokračovat na Administrační panel fóra%s',

  'RELEASE_ANNOUNCEMENT'		=> 'Oznámení',
	'REMIND'							=> 'Připomenout',
  'REPARSE_LOCK_ERROR'				=> 'Reparsování již bylo spuštěno jiným procesem.',
	'RESYNC'							=> 'Synchronizovat',
	'RUNNING_TASK'			=> 'Spuštěný úkol: %s.',

	'SELECT_ANONYMOUS'		=> 'Vybrat anonymního uživatele',
	'SELECT_OPTION'			=> 'Vybrat možnost',

	'SETTING_TOO_LOW'			=> 'Zadaná hodnota pro nastavení „%1$s“ je příliš malá. Nejmenší povolená hodnota je %2$d.',
	'SETTING_TOO_BIG'			=> 'Zadaná hodnota pro nastavení „%1$s“ je příliš vysoká. Největší povolená hodnota je %2$d.',
	'SETTING_TOO_LONG'		=> 'Zadaná hodnota pro nastavení „%1$s“ je příliš dlouhá. Největší povolená délka je %2$d.',
	'SETTING_TOO_SHORT'		=> 'Zadaná hodnota pro nastavení „%1$s“ jnení dost dlouhá. Nejmenší povolená délka je %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Ukazát všechny operace',

	'TASKS_NOT_READY'			=> 'Nepřipravené úkoly:',
	'TASKS_READY'			=> 'Připravené úkoly:',
	'TOTAL_SIZE'			=> 'Celková velikost',

	'UCP'									=> 'Uživatelský ovládací panel',
  'URL_INVALID'			    => 'Zadaná URL pro nastavení “%1$s” je neplatná.',
  'URL_SCHEME_INVALID'	=> 'Poskytnuté schéma “%2$s” v nastavení odděleném čárkou “%1$s” je neplatné. Schéma by mělo začínat latinkou, následovně alfanumerickými znaky, pomlčkami nebo tečkami.',
	'USERNAMES_EXPLAIN'		=> 'Uživatelská jména vkládejte odděleně na jednotlivé řádky.',
	'USER_CONTROL_PANEL'	=> 'Uživatelský ovládací panel',

  'UPDATE_NEEDED'			=> 'Fórum není aktuální.',
  'UPDATE_NOT_NEEDED'		=> 'Fórum je aktuální.',
  'UPDATES_AVAILABLE'		=> 'Dostupné aktualizace:',

	'WARNING'				=> 'Upozornění',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Tato stránka vypisuje informace o&nbsp;verzi PHP instalované na tomto serveru. Obsahuje detaily o&nbsp;načtených modulech, dostupných proměnných a výchozích nastavení. Tyto informace mohou být užitečné při řešení potíží. Upozorňujeme, že někteří hostitelé mohou z bezpečnostních důvodů omezovat informace zde poskytované. Doporučuje se nezveřejňovat zde zobrazené podrobnosti, jen jste-li na ně dotázáni od <a href="http://www.phpbb.com/about/team/">týmových členů</a> na oficiálních fórech podpory.',

	'NO_PHPINFO_AVAILABLE'	=> 'Informace o&nbsp;vaší konfiguraci PHP nelze určit. Funkce phpinfo() byla z bezpečnostních důvodů vypnuta.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Tento log vypisuje všechny činnosti administrátorů. Můžete je seřadit podle jména, data, IP adresy nebo akce. Pokud máte příslušná oprávnění, můžete smazat jednotlivé záznamy nebo celý log.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Zde jsou zobrazeny všechny činnosti, které provedlo fórum samo. Tento log vám poskytuje informace, které můžete použít pro řešení specifických potíží, např. nedoručování e-mailů. Můžete je seřadit podle jména, data, IP adresy nebo akce. Pokud máte příslušná oprávnění, můžete smazat jednotlivé záznamy nebo celý log.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Tento log vypisuje všechny činnosti moderátorů. Zvolte konkrétní fórum z rozbalovacího menu. Můžete je seřadit podle jména, data, IP adresy nebo akce. Pokud máte příslušná oprávnění, můžete smazat jednotlivé záznamy nebo celý log.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Toto vypisuje všechny činnosti provedené uživateli nebo na uživatelích (upozornění, varování, uživatelské záznamy).',
	'ALL_ENTRIES'				=> 'Všechny záznamy',

	'DISPLAY_LOG'	=> 'Zobrazit záznamy za posledních',

	'NO_ENTRIES'	=> 'Žádné záznamy pro toto období',

	'SORT_IP'		=> 'IP adresa',
	'SORT_DATE'		=> 'Datum',
	'SORT_ACTION'	=> 'Záznam',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Děkujeme, že jste si zvolili phpBB jako řešení pro vaše fórum. Tato obrazovka vám poskytne rychlý přehled o&nbsp;různých statistikách fóra. Odkazy v&nbsp;levé části obrazovky vám dovolují spravovat všechny části vašeho fóra. Každá stránka obsahuje pokyny k&nbsp;použití.',
	'ADMIN_LOG'					=> 'Záznam administrátorských činností',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Zde je přehled posledních pěti akcí vykonaných administrátory. Ucelený záznam můžete zobrazit zvolením odpovídající položky v&nbsp;menu nebo kliknutím na níže uvedený odkaz.',
	'AVATAR_DIR_SIZE'			=> 'Velikost adresáře s&nbsp;avatary',

	'BOARD_STARTED'		=> 'Datum spuštění',
	'BOARD_VERSION'     => 'Verze fóra',

	'DATABASE_SERVER_INFO'	=> 'Databázový server',
	'DATABASE_SIZE'			=> 'Velikost databáze',

	// Environment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Funkce zatížení není správně nastavena.',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> musí být nastaveno na 0 nebo 4. Aktuální hodnoty můžete zkontrolovat na stránce s <samp>PHP informacemi</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Transpantní kódování znaků není správně nastaveno.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> musí být nastaveno na 0. Aktuální hodnoty můžete zkontrolovat na stránce s <samp>PHP informacemi</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'Konverze vstupní HTTP znaků není správně nastavena.',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> musí být nastaven na <samp>pass</samp>. Aktuální hodnoty můžete zkontrolovat na stránce s <samp>PHP informacemi</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'Konverze výstupních HTTP znaků není správně nastavena.',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> musí být nastaven na <samp>pass</samp>. Aktuální hodnoty můžete zkontrolovat na stránce s <samp>PHP informacemi</samp>.',

	'FILES_PER_DAY'		=> 'Příloh za den',
	'FORUM_STATS'		=> 'Statistiky fóra',

	'GZIP_COMPRESSION'	=> 'GZip komprese',

	'NO_SEARCH_INDEX'	=> 'Vybraný vyhledávací backend nemá vyhledávací index.<br />Prosím, vytvořte index pro „%1$s“ backend v sekci %2$sVyhledávací index%3$s.',
	'NOT_AVAILABLE'		=> 'Nedostupné',
	'NUMBER_FILES'		=> 'Počet příloh',
	'NUMBER_POSTS'		=> 'Počet příspěvků',
	'NUMBER_TOPICS'		=> 'Počet témat',
	'NUMBER_USERS'		=> 'Počet uživatelů',
	'NUMBER_ORPHAN'		=> 'Nepřipojených příloh',

  'PHP_VERSION'		=> 'PHP verze',
	'PHP_VERSION_OLD'	=> 'Verze PHP na vašem serveru (%1$s) brzy nebude stačit pro běh phpBB. Minimální požadavek na verzi PHP bude %2$s. %sPřečtěte si více informací%s.',

	'POSTS_PER_DAY'		=> 'Příspěvků za den',

	'PURGE_CACHE'			=> 'Pročistit mezipaměť',
	'PURGE_CACHE_CONFIRM'	=> 'Opravdu chcete zcela pročistit mezipaměť?',
	'PURGE_CACHE_EXPLAIN'	=> 'Pročistí všechny soubory vzhledů a SQL dotazy v mezipaměti.',
  'PURGE_CACHE_SUCCESS'	=> 'Mezipaměť byla úspěšně pročištěna.',

	'PURGE_SESSIONS'			=> 'Pročistit všechny sessions',
	'PURGE_SESSIONS_CONFIRM'	=> 'Opravdu chcete smazat všechny sessions? Smazaním odhlásíte všechny uživatele.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Odstraní veškeré sessions a odhlásí všechny uživatele pročištěním jejich databázové tabulky. Toto se hodí při nekontrolovaném nárůstu počtu sessions.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Sessions byly úspěšně pročištěny.',

	'RESET_DATE'					=> 'Vynulovat datum spuštění',
	'RESET_DATE_CONFIRM'			=> 'Opravdu chcete vynulovat datum založení fóra?',
	'RESET_DATE_SUCCESS'				=> 'Datum spuštění fóra bylo úspěšně resetováno',
	'RESET_ONLINE'					=> 'Vynulovat rekord uživatelů online',
	'RESET_ONLINE_CONFIRM'			=> 'Opravdu chcete vynulovat rekord přítomých uživatelů?',
	'RESET_ONLINE_SUCCESS'				=> 'Maximální počet uživatelů najednou přítomných ve fóru byl úspěšně resetován',
	'RESYNC_POSTCOUNTS'				=> 'Resynchronizovat počítadla příspěvků',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Brány v&nbsp;úvahu budou pouze existující příspěvky. Pročištěné příspěvky nebudou počítány.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Opravdu chcete synchronizovat počítadla příspěvků?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Počet příspěvků byl úspěšně resynchronizován',
	'RESYNC_POST_MARKING'			=> 'Resynchronizovat označená témata',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Opravdu chcete resynchronizovat označená témata?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Nejprve odznačí všechna témata a poté správně označí ta, v&nbsp;nichž uživatel vykázal aktivitu v&nbsp;posledních šesti měsících.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Označená témata byla úspěšně resynchronizována',
	'RESYNC_STATS'					=> 'Resynchronizovat statistiky',
	'RESYNC_STATS_CONFIRM'			=> 'Opravdu chcete resynchronizovat statistiky?',
	'RESYNC_STATS_EXPLAIN'			=> 'Přepočítá celkový počet uživatelů, příspěvků, témat a příloh.',
	'RESYNC_STATS_SUCCESS'			=> 'Statistiky byly resynchronizovány',
	'RUN'							=> 'Spustit nyní',

	'STATISTIC'			=> 'Statistika',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resynchronizovat nebo vynulovat statistiky',

	'TIMEZONE_INVALID'	=> 'Vámi vybraná časová zóna je neplatná.',
	'TIMEZONE_SELECTED'	=> '(aktuálně vybrané)',
	'TOPICS_PER_DAY'	=> 'Témat za den',

	'UPLOAD_DIR_SIZE'	=> 'Velikost všech příloh',
	'USERS_PER_DAY'		=> 'Uživatelů za den',

	'VALUE'					=> 'Hodnota',
	'VERSIONCHECK_FAIL'			=> 'Informace o poslední verzi se nepodařilo zjistit.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Znovu zkontrolovat verzi',
  'VERSION_CHECK'				=> 'Kontrola verze',
	'VERSION_CHECK_EXPLAIN'		=> 'Zde můžete zkontrolovat, jestli je vaše phpBB aktuální.',
  'VERSIONCHECK_INVALID_ENTRY'	=> 'Poslední verze informace obsahuje nepovolený znak.',
  'VERSIONCHECK_INVALID_URL'		=> 'Poslední verze informace obsahuje nevalidní URL.',
  'VERSIONCHECK_INVALID_VERSION'	=> 'Poslední verze informace obsahuje chybnou verzi.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Vaše instalace phpBB není aktuální.<br />Dole je odkaz na oznámení o vydání nové verze, ve kterém najdete více informací a instrukce pro aktualizaci.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Vaše instalace phpBB není aktuální.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Vaše instalace phpBB je aktuální. V současné době nejsou dostupné žádné aktualizace.',
	'VIEW_ADMIN_LOG'		=> 'Zobrazit administrátorský log',
	'VIEW_INACTIVE_USERS'	=> 'Zobrazit neaktivní uživatele',

	'WELCOME_PHPBB'			=> 'Vítejte v&nbsp;phpBB',
	'WRITABLE_CONFIG'      => 'Soubor s nastavením (config.php) je world-writable, může jej upravit kdokoliv. Silně vám doporučujeme změnit oprávnění na 640 nebo alespoň na 644 (např.: <a href="http://cs.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Datum neaktivity',
	'INACTIVE_REASON'				=> 'Důvod',
	'INACTIVE_REASON_MANUAL'		=> 'Účet deaktivován administrátorem',
	'INACTIVE_REASON_PROFILE'		=> 'Změněny detaily v&nbsp;profilu',
	'INACTIVE_REASON_REGISTER'		=> 'Nově registrovaný uživatel',
	'INACTIVE_REASON_REMIND'		=> 'Vyžádána reaktivace účtu',
	'INACTIVE_REASON_UNKNOWN'		=> 'Neznámý',
	'INACTIVE_USERS'				=> 'Neaktivní uživatelé',
	'INACTIVE_USERS_EXPLAIN'		=> 'Toto je seznam uživatelů, kteří se registrovali, ale jejich účty nejsou aktivní. Tyto uživatele můžete aktivovat, smazat nebo upozornit (odesláním e-mailu).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Toto je seznam posledních 10 registrovaných uživatelů, kteří mají neaktivní účty. Účty nejsou aktivní, protože byla povolena aktivace účtu v nastavení „Registrace uživatelů“ a účty ještě nebyly aktivovány, nebo protože byly tyto účty deaktivovány. Úplný seznam je dostupný z odpovídající položky v menu nebo z odkazu pod místem, kde můžete aktivovat, smazat, nebo upozornit (odesláním e-mailu) tyto uživatele.',

	'NO_INACTIVE_USERS'	=> 'Žádní neaktivní uživatelé',

	'SORT_INACTIVE'		=> 'Datum neaktivity',
	'SORT_LAST_VISIT'	=> 'Poslední návštěva',
	'SORT_REASON'		=> 'Důvod',
	'SORT_REG_DATE'		=> 'Datum registrace',
	'SORT_LAST_REMINDER'=> 'Naposledy upozorněni',
	'SORT_REMINDER'		=> 'Připomenutí odesláno',


	'USER_IS_INACTIVE'		=> 'Uživatel je neaktivní',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Budeme rádi, když na servery phpBB odešlete statistické informace o nastavení vašeho serveru a fóra. Veškerá data, která by mohla identifikovat vaše fórum nebo stránky byly odstraněny, informace jsou naprosto <strong>anonymní</strong>. Na základě zaslaných podrobností můžeme lépe rozhodovat o budoucnosti a vývoji phpBB. Statistiky budou zobrazeny veřejně a budou také sdíleny s vývojáři PHP, programovacím jazykem, ve kterém je phpBB napsáno.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Klikněte na následující tlačítko pro zobrazení náhledu odeslaných informací.',
	'DONT_SEND_STATISTICS'		=> 'Vraťte se do administrace, pokud nechcete zaslat žádné informace.',
	'GO_ACP_MAIN'							=> 'Přejít na hlavní stránku administrace',
	'HIDE_STATISTICS'					=> 'Skrýt podrobnosti',
  'SEND_STATISTICS'			=> 'Odeslat statistiky',
	'SEND_STATISTICS_LONG'		=> 'Odeslat statistickou informaci',
	'SHOW_STATISTICS'					=> 'Zobrazit podrobnosti',
	'THANKS_SEND_STATISTICS'	=> 'Děkujeme za odeslání informací, budou využity k lepšímu vývoji phpBB.',
  'FAIL_SEND_STATISTICS'		=> 'phpBB se nepodařilo odeslat statistiky',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Přidána nebo upravena uživatelská oprávnění uživatele</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Přidána nebo upravena uživatelská oprávnění skupiny</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Přidána nebo upravena globální moderátorská oprávnění uživatele</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Přidána nebo upravena globální moderátorská oprávnění skupiny</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Přidána nebo upravena administrátorská oprávnění uživatele</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Přidána nebo upravena administrátorská oprávnění skupiny</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Přidáni nebo upraveni Administrátoři</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Přidáni nebo upraveni Globální Moderátoři</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Přidán nebo upraven přístup uživatele k&nbsp;fóru</strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Přidán nebo upraven přístup uživatele k&nbsp;moderování fóra</strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Přidán nebo upraven přístup skupiny k&nbsp;fóru</strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Přidán nebo upraven přístup skupiny k&nbsp;moderování fóra</strong> %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Přidáni nebo upraveni Moderátoři</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Přidána nebo upravena oprávnění k&nbsp;fóru</strong> %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Odstraněni Administrátoři</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Odstraněni Globální Moderátoři</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Odstraněni Moderátoři</strong> z %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Odstraněni uživatelská/skupinová oprávnění k&nbsp;fóru</strong> %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'	=> '<strong>Oprávnění přenesena od</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Vlastní oprávnění obnovena po používání oprávnění od</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'			=> '<strong>Neúspěšný pokus o&nbsp;přihlášení administrátora</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Úspěšné přihlášení do administrace</strong>',

	'LOG_ATTACHMENTS_DELETED'   => '<strong>Smazání příloh uživatelů</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'			=> '<strong>Přidání nebo upravení přípony příloh</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'			=> '<strong>Odebrání přípony příloh</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'			=> '<strong>Aktualizace přípon příloh</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'		=> '<strong>Přidání skupiny druhů souborů</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'		=> '<strong>Upravení skupiny druhů souborů</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'		=> '<strong>Odstranění skupiny druhů souborů</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'			=> '<strong>Přiřazení nepřiřazené přílohy k&nbsp;příspěvku</strong><br />» ID %1$d – %2$s',
	'LOG_ATTACH_ORPHAN_DEL'			=> '<strong>Odstranění nepřiřazené přílohy</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'		=> '<strong>Vyjmutí uživatele z banu</strong> z důvodu „<em>%1$s</em>“<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'		=> '<strong>Vyjmutí IP adresy z banu</strong> z důvodu „<em>%1$s</em>“<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL'		=> '<strong>Vyjmutí e-mail z banu</strong> z důvodu „<em>%1$s</em>“<br />» %2$s ',
	'LOG_BAN_USER'				=> '<strong>Zabanování uživatele</strong> z důvodu „<em>%1$s</em>“<br />» %2$s ',
	'LOG_BAN_IP'				=> '<strong>Zabanování IP adresy</strong> z důvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_BAN_EMAIL'				=> '<strong>Zabanování e-mailu</strong> z důvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_UNBAN_USER'			=> '<strong>Odbanování uživatele</strong><br />» %s',
	'LOG_UNBAN_IP'				=> '<strong>Odbanování IP adresy</strong><br />» %s',
	'LOG_UNBAN_EMAIL'			=> '<strong>Odbanování e-mail</strong><br />» %s',

	'LOG_BBCODE_ADD'			=> '<strong>Přidání nového BBCode tagu</strong><br />» %s',
	'LOG_BBCODE_EDIT'			=> '<strong>Upravení BBCode tagu</strong><br />» %s',
	'LOG_BBCODE_DELETE'			=> '<strong>Odstranění BBCode tagu</strong><br />» %s',
  'LOG_BBCODE_CONFIGURATION_ERROR'	=> '<strong>Chyba během konfigurování BBCode</strong>: %1$s<br />» %2$s',

	'LOG_BOT_ADDED'				=> '<strong>Přidání nového bota</strong><br />» %s',
	'LOG_BOT_DELETE'			=> '<strong>Odstranění bota</strong><br />» %s',
	'LOG_BOT_UPDATED'			=> '<strong>Aktualizace existujícího bota</strong><br />» %s',

	'LOG_CLEAR_ADMIN'			=> '<strong>Promazání administrátorského logu</strong>',
	'LOG_CLEAR_CRITICAL'		=> '<strong>Promazání logu chyb</strong>',
	'LOG_CLEAR_MOD'				=> '<strong>Promazání moderátorského logu</strong>',
	'LOG_CLEAR_USER'			=> '<strong>Promazání uživatelského logu</strong><br />» %s',
	'LOG_CLEAR_USERS'			=> '<strong>Promazání uživatelských logů</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Změna nastavení příloh</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Změna nastavení autentifikace</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Změna nastavení avatarů</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Změna nastavení cookies</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Změna nastavení e-mailů</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Změna nastavení vlastností fóra</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Změna nastavení exportů ATOM</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Změna nastavení zatížení serveru</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Změna nastavení soukromých zpráv</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Změna nastavení příspěvků</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Změna nastavení registrace</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Změna nastavení vyhledávání</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Změna nastavení zabezpečení</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Změna nastavení serveru</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Změna nastavení fóra</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Změna nastavení podpisů</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Změna nastavení obrany proti spamu</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Schválení tématu</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Oživení tématu uživatelem</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Odstranění příspěveku „%1$s“ napsaného uživatelem „%2$s“ z důvodu</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'   => '<strong>Odstranění stínového tématu</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Smazání tématu „%1$s“ napsaného uživatelem „%2$s“ z důvodu</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Zkopírování tématu</strong><br />» z %s',
	'LOG_LOCK'					=> '<strong>Zamknutí tématu</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Zamknutí příspěvku</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Sloučení příspěvků</strong> do tématu<br />» %s',
	'LOG_MOVE'					=> '<strong>Přesunutí tématu</strong><br />» z %1$s do %2$s',
  'LOG_MOVED_TOPIC'				=> '<strong>Přesunutí tématu</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Uzavření hlášení SZ</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Odstranění hlášení SZ</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Schválení příspěvku</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Zamítnutí příspěveku „%1$s“ od „%3$s“ z důvodu</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Úprava příspěvku „%1$s“ od „%2$s“ z důvodu</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Obnovení příspěvku</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Uzavření hlášení</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Odstranění hlášení</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Obnovení tématu „%1$s“ od</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Dočasné smazání příspěvku „%1$s“ napsaného uživatelem „%2$s“ z důvodu</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Dočasné smazání tématu „%1$s“ napsaného uživatelem „%2$s“ z důvodu</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Přesunutí rozdělených příspěvků</strong><br />» do %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Rozdělení příspěvků</strong><br />» z %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Schválení tématu</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Obnovení tématu</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Odmítnutí tématu „%1$s“ napsané uživatelem „%3$s“ z následujícího důvodu</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronizace počítadel témat</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Změna druhu tématu</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Odemknutí tématu</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Odemknutí příspěvku</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Přidání zakázaného uživatelského jména</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Odstranění zakázaného uživatelského jména</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Vytvoření zálohy databáze</strong>',
	'LOG_DB_DELETE'			=> '<strong>Odstranění zálohy databáze</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Obnovení zálohy databáze</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Vyjmutí IP/hostitele ze seznamu stahování</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Přidání IP/hostitele do seznamu stahování</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Odstranění IP/hostitele ze seznamu stahování</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Chyba Jabberu</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Chyba v&nbsp; odesílání e-mailu</strong><br />» %s',
  'LOG_ERROR_CAPTCHA'		=> '<strong>Chyba CAPTCHA</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Vytvoření nového fóra</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Zkopírování oprávnění fóra</strong> z %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Odstranění fóra</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Odstranění fóra a jeho subfóra</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Odstranění fóra a přesunutí jeho subfóra</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Odstranění fóra a přesunutí jeho příspěvků</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Odstranění fóra a jeho subfóra, přesunutí příspěvků</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Odstranění fóra, přesunutí příspěvků</strong> do %1$s <strong> a subfóra</strong> do %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Odstranění fóra a jeho příspěvků</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Odstranění fóra, jeho subfóra a příspěvků v něm</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Odstranění fóra s příspevky, přesunutí jeho subfór do</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Upravení detailů fóra</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Přesunutí fóra</strong> %1$s <strong>pod</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Přesunutí fóra</strong> %1$s <strong>nad</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Resynchronizace fóra</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Fórum vyhodilo obecnou chybu</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Vytvoření nové uživatelské skupiny</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Nastavení skupiny „%1$s“ jako výchozí pro uživatele</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Odstranění skupiny</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Degradování moderátorů skupiny</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Povýšení uživatelů na moderátory skupiny </strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Odstranění uživatelů ze skupiny</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Upravení podrobností skupiny</strong><br />» %s',
	'LOG_MODS_ADDED'			=> '<strong>Přidání nových moderátorů skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Přijetí nových uživatelů do skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'			=> '<strong>Přidání nových uživatelů do skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Zažádání uživatelů o vstup do skupiny „%1$s“ vyžadující schváleni</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Chyba při generování obrázku</strong><br />» Chyba v %1$s na řádku %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktivace neaktivních uživatelů</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Odstranění neaktivních uživatelů</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Odeslána připomenutí pro neaktivní uživatele</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Přechod z %1$s na phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Instalace phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>IP přihlášení/prohlížeč/hlavička X_FORWARDED_FOR nebyly při kontrole shodné</strong><br />»IP uživatele „<em>%1$s</em>“ porovnána oproti poslední IP „<em>%2$s</em>“, user-agent „<em>%3$s</em>“ porovnán oproti poslednímu označení prohlížeče „<em>%4$s</em>“ a hlavička X_FORWARDED_FOR „<em>%5$s</em>“ porovnána oproti poslední - „<em>%6$s</em>“.',

	'LOG_JAB_CHANGED'			=> '<strong>Změna účtu Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Změna hesla Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Registrace účtu Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Změna nastavení Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Odstraněn jazykový balík</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Instalace jazykového balíku</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Aktualizace detailů jazykového balíku</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Nahrazení jazykového souboru</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Odeslání jazykového souboru a nahrání do úložného adresáře</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Odeslání hromadného e-mailu</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Změna odesílatele v&nbsp;tématu „%1$s“</strong><br />» z %2$s na %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Vypnutí modulu</strong>» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Zapnutí modulu</strong>» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Posunutí modulu dolů</strong><br />» %1$s níže %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Posunutí modulu nahoru</strong><br />» %1$s výše %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Vyjmutí modulu</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Přidání modulu</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Upravení modulu</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Přidání administrátorské role</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Upravení administrátorské role</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Odstranění administrátorské role</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Přidání role fóra</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Upravení role fóra</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Odstranění role fóra</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Přidání moderátorské role</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Upravení moderátorské role</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Odstranění moderátorské role</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Přidání uživatelské role</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Upravení uživatelské role</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Odstranění uživatelské role</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Nepodařilo se otevřít %1$s pro údržbu, zkontrolujte oprávnění.</strong><br />Výjimka: %2$s<br />Cesta: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Aktivování pole v&nbsp;profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Přidání pole v&nbsp;profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Deaktivování pole v&nbsp;profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Změna pole v&nbsp;profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Odstranění pole v&nbsp;profilu</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Pročištění fór</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Automatické pročištění fór</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Auto pročištění stínových témat</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Uživatelé deaktivováni</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Uživatelé a příspěvky pročištěny</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Uživatelé pročištěni, příspěvky zachovány</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Pročištění mezipaměti</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Pročištění sessions</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Přidání nové hodnosti</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Odstranění hodnosti</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Upravení hodnosti</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Přidání důvodu hlášení/zamítnutí</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Odstranění důvodu hlášení/zamítnutí</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Aktualizace důvodu hlášení/zamítnutí</strong><br />» %s',

	'LOG_REFERER_INVALID'      => '<strong>Selhalo ověření refereru</strong><br />»Referer byl „<em>%1$s</em>“. Požadavek byl odmítnut a session zrušena.',
	'LOG_RESET_DATE'			=> '<strong>Vynulován čas spuštění fóra</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Vynulován rekord online uživatelů</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Resynchronizovány statistiky souborů</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Resynchonizace počtu příspěvků</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Označená témata synchronizována</strong>',
  'LOG_RESYNC_STATS'			=> '<strong>Příspěvky, témata a statistiky resynchronizovány</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Vytvořen vyhledávací index pro</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Odstraněn vyhledávací index pro</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Chyba Sphinxu</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Přidán nový vzhled</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Odstraněn vzhled</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Upraven vzhled</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exportován vzhled</strong><br />» %s',

  // @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Přidána nová šablona do databáze</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Přidána nová šablona do systému souborů</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Odstranění cachované verze souborů šablon <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Odstraněn soubor šablon</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Upraven soubor šablon <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Upraveny detaily souboru šablon</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Export souboru šablon</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Obnovení souboru šablon</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Přidán nový skin do databáze</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Přidán nový skin do systému souborů</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Skin smazán</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Detaily editovaného skinu</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Upraven skin <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Upraven skin <em>%1$s</em></strong><br />» Pozměněn soubor <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exportovaný skin</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Obnovení skinu</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Aktualizace databáze z verze %1$s na verzi %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Aktualizace phpBB z verze %1$s na verzi %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Aktivace uživatele</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Zabanování uživatele přes správu uživatelů</strong> z důvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Zabanování IP adresy přes správu uživatelů</strong> z důvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Zabanování e-mailu přes správu uživatelů</strong> z důvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Smazání uživatele</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Odstranění všech příloh uživatele</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Odstranění uživatelského avataru</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Vyprázdnění složky zpráv k odeslání uživatele</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Odstranění všech příspěvků uživatele</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Odstranění podpisu uživatele</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Deaktivace uživatele</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Přesunutí příspěvků uživatele</strong><br />» příspěvky od „%1$s“ do fóra „%2$s“',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Změněna hesla uživatele</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Vyžádání reaktivace účtu</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Odstranění označení „Nový člen“ u</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Změna e-mailu uživatele „%1$s“</strong><br />» z „%2$s“ na „%3$s“',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Změněna uživatelského jména</strong><br />» z „%1$s“ na „%2$s“',
	'LOG_USER_USER_UPDATE'	=> '<strong>Aktualizace uživatele</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Aktivace uživatelského účtu</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Odstranění avataru uživatele</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Odstranění podpisu uživatele</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Přidání komentáře k&nbsp;uživateli</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Přidání záznamu:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Deaktivace uživatelského účtu</strong>',
	'LOG_USER_LOCK'				=> '<strong>Uživatel zamknul své téma</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Přesunutí všech příspěvků do fóra „%s“</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Vyžádání reaktivace účtu</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Uživatel odemknul své téma</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Přidání varování uživateli</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Uživateli bylo uděleno následující varování</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Uživatel změnil výchozí skupinu</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Uživatel degradován z moderování skupiny</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Uživatel vstoupil do skupiny</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Uživatel vstoupil do skupiny a čeká na schválení</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Uživatel vystoupil ze skupiny</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Odstranění varování uživatele</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Smazání varování uživatele</strong><br />» %1$s',
		2 => '<strong>Smazání %2$d varování uživatelů</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
		3 => '<strong>Smazání %2$d varování uživatelů</strong><br />» %1$s', // Example: '<strong>Deleted 5 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Odstranění všech varování uživatele</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Přidání cenzurovaného slova</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Odstranění cenzurovaného slova</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Upravení cenzurovaného slova</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Povolení rozšíření</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Zakázání rozšíření</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Smazání dat rozšíření</strong><br />» %s',
  'LOG_EXT_UPDATE'	=> '<strong>Aktualizace rozšíření</strong><br />» %s',
));
