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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Instalační panel',
	'SELECT_LANG'	=> 'Vyberte jazyk',

	'STAGE_INSTALL'	=> 'Instalace phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Úvod',
	'INTRODUCTION_BODY'		=> 'Vítejte v phpBB3!<br /><br />phpBB® je nejrozšířenější open sourceové řešení fóra na světě. phpBB3 je poslední verzí programu, který vznikl v roce 2000. Stejně jako předchozí verze i phpBB3 nabízí již v základní instalaci mnoho funkcí, uživatelsky přívětivé rozhraní a plnou podporu od phpBB týmu. phpBB3 fórum zlepšuje to, co dělalo phpBB2 tak populárním a přidává další požadované funkce, které nebyly součástí předchozích verzí. Doufáme, že splníme vaše očekávání.<br /><br />Tento instalační systém vás provede instalací phpBB3 fóra, aktualizací ze starších verzí phpBB na poslední verzi phpBB3 a také konverzi z jiných systémů diskuzních fór na phpBB3 (včetně phpBB2). Pro více informací si přečtěte <a href="../docs/INSTALL.html">průvodce instalací</a>.<br /><br />Pro přečtení licence nebo informací o získání podpory, použijte, prosím, příslušnou možnost v nabídce napravo. Pro pokračování vyberte, prosím, příslušnou možnost nahoře.',

	// Support page
	'SUPPORT_TITLE'		=> 'Podpora',
	'SUPPORT_BODY'		=> 'Plná podpora se poskytuje zdarma pro aktuální stabilní verzi phpBB3. Tato podpora zahrnuje pomoc s:</p><ul><li>instalací</li><li>nastavením</li><li>technickými otázkami</li><li>problémy, které se týkají potencionálních chyb v programu</li><li>aktualizací z RC (Release Candidate) verze na poslední stabilní verzi</li><li>konverzí z phpBB 2.0.x na phpBB3</li><li>konverzí z jiných programů diskuzních fór na phpBB3 (více informací najdete na phpBB.com ve fóru <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>Doporučujeme všem uživatelů, kteří stále používají beta verzi phpBB3, aby aktualizovali jejich instalaci na nejnovější verzí.</p><h2>Rozšíření a vzhledy</h2><p>Pro problémy týkající se rozšíření použijte, prosím, příslušné <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a> (Fórum o modifikacích).<br />Pro problémy týkající se vzhledů, šablon a motivů použijte, prosím, příslušné <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a> (Fórum o vzhledech).<br /><br />Jestliže se vaše otázka týká konkrétního balíčku, napište, prosím, přímo do tématu věnovanému tomu balíčku.</p><h2>Další informace</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&t=571070">The phpBB Welcome Package</a> (téma (ang.) s odkazy na informace o phpBB)<br /><a href="https://www.phpbb.com/support/">Stránka podpory (ang.)</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Quick Start Guide</a> (Rychlý průvodce (ang.))<br /><br />Abyste vždy věděli o posledních novinkách a nových verzích, můžete se <a href="https://www.phpbb.com/support/">přihlásit k odběru informací emailem</a>?<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Vítejte v instalaci',
	'INSTALL_INTRO_BODY'	=> 'Pomocí této možnosti můžete na váš server nainstalovat phpBB3.</p><p>Abyste mohli pokračovat, budete muset znát údaje pro připojení k vaší databázi. Pokud neznáte nastavení vaší databáze, kontaktujte, prosím, vašeho poskytovatele hostingu a zeptejte se ho na tyto údaje. Bez těchto údajů nebudete moci pokračovat dál. Potřebujete znát:</p>

	<ul>
		<li>Typ databáze - databáze, kterou budete používat.</li>
		<li>Název hostitele databázového serveru nebo DSN - adresa databázového serveru.</li>
		<li>Port databázového serveru - port databázového serveru (většinou není potřeba).</li>
		<li>Název databáze - název databáze na serveru.</li>
		<li>Uživatelské jméno databáze a heslo databáze - přihlašovací údaje pro přístup k databázi.</li>
	</ul>

	<p><strong>Poznámka:</strong> pokud používáte pro instalaci SQLite databázi, měli byste do pole DNS vložit kompletní cestu k vaší databázi a nechat pole pro uživatelské jméno a heslo prázdné. Z bezpečnostních důvodu byste se měli ujistit, že vaše databáze není uložená na místě přístupném z webu.</p>

	<p>phpBB3 podporuje následující databáze:</p>
	<ul>
		<li>MySQL 4.3.1 nebo vyšší (MySQLi je vyžadována)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 nebo vyšší (přímo nebo přes ODBC)</li>
		<li>MS SQL Server 2005 nebo vyšší (nativní)</li>
		<li>Oracle</li>
	</ul>

	<p>Budou zobrazeny jen databáze podporované vaším serverem.',

	'ACP_LINK'	=> 'Přejít do <a href="%1$s">administrace</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB je již nainstalováno.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB ještě není nainstalováno.'
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'			=> 'Soubor neexistuje',
	'FILE_NOT_EXISTS_EXPLAIN'	=> 'Aby bylo možné nainstalovat phpBB, soubor %1$s musí existovat.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Pro lepší uživatelský zážitek je doporučeno, aby soubor %1$s existoval.',
	'FILE_NOT_WRITABLE'						=> 'Soubor není zapisovatelný',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Aby bylo možné nainstalovat phpBB, soubor %1$s musí být zapisovatelný.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Pro lepší uživatelskou přívětivost je doporučené, aby do souboru %1$s šlo zapisovat.',

	'DIRECTORY_NOT_EXISTS'						=> 'Adresář neexistuje',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Aby bylo možné nainstalovat phpBB, adresář %1$s musí existovat.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Pro lepší uživatelský zážitek je doporučeno, aby adresář %1$s existoval.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Adresář není zapisovatelný',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Aby bylo možné nainstalovat phpBB, adresář %1$s musí být zapisovatelný.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Pro lepší uživatelský zážitek je doporučeno, aby byl adresář %1$s zapisovatelný.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Verze PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB vyžaduje PHP verze 7.1.3 nebo vyšší.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Povolená funkce PHP getimagesize()',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Pro správnou funkčnost phpBB musí být k dispozici funkce getimagesize.',
	'PCRE_UTF_SUPPORT'					=> 'Podpora PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB nepoběží, pokud vaše PHP instalace není kompilovaná s podporou UTF-8 v rozšíření PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Podpora PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Pro správnou funkčnost phpBB musí být dostupné rozšíření PHP JSON.',
  'PHP_MBSTRING_SUPPORT'				=> 'Podpora PHP mbstring',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'Pro správnou funkčnost phpBB musí být dostupné rozšíření PHP mbstring.',
	'PHP_XML_SUPPORT'					=> 'Podpora PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Pro správnou funkčnost phpBB musí být dostupné rozšíření PHP XML/DOM.',
	'PHP_SUPPORTED_DB'					=> 'Podporované databáze',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Musíte mít podporu pro nejméně jednu databázi kompatibilní s PHP. Pokud nejsou zobrazeny žádné dostupné databázové moduly, měli byste kontaktovat vašeho poskytovatele hostingu, nebo projít příslušnou dokumentaci k instalaci PHP pro získání rady.',

	'RETEST_REQUIREMENTS'	=> 'Znovu otestovat požadavky',

	'STAGE_REQUIREMENTS'	=> 'Kontrola požadavků'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'V tomto bloku musíte vyplnit všechna pole.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Instalátor detekoval časový limit',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Instalátor detekoval časový limit (timeout). Můžete se pokusit se aktualizovat stránku, což může vést k poškození poškození dat. Doporučujeme vám buď zvýšit hodnotu ve vašem nastavení timeoutu, nebo můžete zkusit použít CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Nastavení dat pro instalaci',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Informace o administrátorovi',

	// Form labels
	'ADMIN_CONFIG'				=> 'Nastavení administrátora',
	'ADMIN_PASSWORD'			=> 'Heslo administrátora',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Potvrdit heslo administrátora',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Prosím, vložte heslo o délce mezi 6 a 30 znaky.',
	'ADMIN_USERNAME'			=> 'Uživatelské jméno administrátora',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Prosím, vložte uživatelské jméno o délce mezi 3 a 20 znaky.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Vámi vložená emailová adresa není platná.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Vámi vložené heslo se neshoduje.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Vámi vložené heslo je příliš dlouhé. Maximální délka hesla je 30 znaků.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Vámi vložené heslo je příliš krátké. Minimální délka hesla je 6 znaků.',
	'INST_ERR_USER_TOO_LONG'		=> 'Vámi vložené uživatelské jméno je příliš dlouhé. Maximální délka uživatelského jména je 20 znaků.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Vámi vložené uživatelské jméno je příliš krátké. Minimální délka uživatelského jména jsou 3 znaky.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Nastavení fóra',
	'DEFAULT_LANGUAGE'	=> 'Výchozí jazyk',
	'BOARD_NAME'		=> 'Název fóra',
	'BOARD_DESCRIPTION'	=> 'Krátký popis fóra',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Nastavení databáze',

	// Form labels
	'DB_CONFIG'				=> 'Nastavení databáze',
	'DBMS'					=> 'Typ databáze',
	'DB_HOST'				=> 'Název hostitele databázového serveru nebo DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN je zkratka pro „Data Source Name“ a je relevantní pouze pro ODBC instalace. V případě PostgreSQL použijte localhost pro připojení k lokálnímu serveru přes UNIX domain socket a 127.0.0.1 pro připojení přes TCP. Pro SQLite vložte úplnou cestu k databázovému souboru.',
	'DB_PORT'				=> 'Port serveru databáze',
	'DB_PORT_EXPLAIN'		=> 'Vyplňte jen pokud víte, že je server provozován na nestandardním portu.',
	'DB_PASSWORD'			=> 'Heslo databáze',
	'DB_NAME'				=> 'Název databáze',
	'DB_USERNAME'			=> 'Uživatelské jméno databáze',
	'DATABASE_VERSION'		=> 'Verze databáze',
	'TABLE_PREFIX'			=> 'Předpona pro tabulky v databázi',
	'TABLE_PREFIX_EXPLAIN'	=> 'Předpona musí začít písmenem a může obsahovat pouze písmena, čísla a podtržítka.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ přes ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Nativní ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL s MySQLi rozšířením',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Chyba při instalaci databáze',
	'INST_ERR_NO_DB'				=> 'Pro vybraný typ databáze nelze načíst PHP modul.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Vámi vložená předpona je neplatná. Předpona musí začínat písmenem a může obsahovat pouze písmena, čísla a podtržítka.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Vámi určená předpona tabulek je příliš dlouhá. Maximální délka je %d znaků.',
	'INST_ERR_DB_NO_NAME'			=> 'Nebyl určen název databáze.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Určený databázový soubor se nachází ve stromu adresářů vašeho fóra. Měli byste uložit tento soubor na místo, které není přístupné z webu.',
	'INST_ERR_DB_CONNECT'			=> 'Nelze se připojit k databázi. Podívejte se na chybové hlášení dole.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Databáze a adresář musí být zapisovatelný.',
	'INST_ERR_DB_NO_ERROR'			=> 'Žádné chybové hlášení.',
	'INST_ERR_PREFIX'				=> 'Tabulka s určenou předponou již existuje. Zvolte, prosím, jinou předponu.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Nainstalovaná verze MySQL je nekompatibilní s vámi vybranou možností „MySQL s MySQLi rozšířením“. Prosím, zkuste použít možnost „MySQL“.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Nainstalovaná verze SQLite rozšíření je příliš stará. Musíte ji aktualizovat přinejmenším na verzi 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Instalovaná verze Oracle vyžaduje nastavení parametru <var>NLS_CHARACTERSET</var> na hodnotu <var>UTF8</var>. Buď aktualizujte vaši instalaci na verzi 9.2+ nebo změňte parametr.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Vámi vybraná databáze nebyla vytvořena v kódování <var>UNICODE</var> nebo <var>UTF8</var>. Zkuste instalaci s databází, které má kódování <var>UNICODE</var> nebo <var>UTF8</var>.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Do souboru schema nelze zapisovat',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Nastavení emailu',

	// Package info
	'PACKAGE_VERSION'					=> 'Verze nainstalovaného balíčku',
	'UPDATE_INCOMPLETE'				=> 'Vaše phpBB instalace nebyla správně aktualizována.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Informace o tom, jak opravit tuto chybu si přečtěte, prosím, níže.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Neúplná aktualizace</h1>

		<p>Všimli jsme si, že poslední aktualizace vaší phpBB instalace nebyla úplně dokončena. Přejděte na <a href="%1$s" title="%1$s">aktualizaci databáze</a>, ujistěte se, že máte vybranou možnost <em>Aktualizovat pouze databázi</em> a klikněte na tlačítko <strong>Odeslat</strong>. Po úspěšné aktualizaci databáze nezapomeňte smazat adresář „install“.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Nová aktualizace <strong>%1$s</strong> je k dispozici. Prosím čtěte <a href="%2$s" title="%2$s"><strong>oznámení o vydání</strong></a> co obsahuje a jak aktualizovat.',
	'SERVER_CONFIG'				=> 'Nastavení serveru',
	'SCRIPT_PATH'				=> 'Cesta ke skriptům',
	'SCRIPT_PATH_EXPLAIN'		=> 'Cesta ke složce, ve které je umístěno phpBB, relativní ke jménu domény, např. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Děkuji, správce fóra',
	'CONFIG_SITE_DESC'				=> 'Krátký text popisující vaše fórum',
	'CONFIG_SITENAME'				=> 'vasedomena.cz',

	'DEFAULT_INSTALL_POST'			=> '<t>Toto je příklad příspěvku ve vašem phpBB3 fóru. Zdá se, že všechno funguje jak má. Pokud chcete, můžete tento příspěvek smazat a pokračovat v nastavování vašeho fóra. <br />Během instalace byla k první kategorii a k prvnímu fóru připojena oprávnění pro následující předdefinované uživatelské skupiny - administrátory, boty, globální moderátory, hosty, registrované uživatele a registrované COPPA uživatele. Pokud se rozhodnete smazat vaši první kategorii a vaše první fórum, nezapomeňte přiřadit oprávnění pro všechny tyto uživatelské skupiny ke všem kategoriím a fórům, které vytvoříte. Je doporučeno přejmenovat vaší první kategorii a vaše první fórum a zkopírovat jejich oprávnění do dalších, vámi vytvořených kategorií a fór. <br />Užijte si to!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Vaše první kategorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Popis vašeho prvního fóra.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Vaše první fórum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrátor fóra',
	'REPORT_WAREZ'					=> 'Příspěvek obsahuje odkazy na ilegální nebo pirátský software.',
	'REPORT_SPAM'					=> 'Nahlášený příspěvek slouží pouze k reklamě pro webovou stránku nebo jiný produkt.',
	'REPORT_OFF_TOPIC'				=> 'Nahlášený příspěvek se nedrží tématu.',
	'REPORT_OTHER'					=> 'Nahlášený příspěvek nelze zařadit do žádné kategorie. Použijte, prosím, další informační pole.',

	'SMILIES_ARROW'					=> 'Šipka',
	'SMILIES_CONFUSED'				=> 'Zmatený',
	'SMILIES_COOL'					=> 'Skvělý',
	'SMILIES_CRYING'				=> 'Pláč nebo velký smutek',
	'SMILIES_EMARRASSED'			=> 'Rozpačitý',
	'SMILIES_EVIL'					=> 'Ďábelský nebo velmi šílený',
	'SMILIES_EXCLAMATION'			=> 'Vykřičník',
	'SMILIES_GEEK'					=> 'Šprt',
	'SMILIES_IDEA'					=> 'Nápad',
	'SMILIES_LAUGHING'				=> 'Smích',
	'SMILIES_MAD'					=> 'Šílený',
	'SMILIES_MR_GREEN'				=> 'Pan Zelený',
	'SMILIES_NEUTRAL'				=> 'Neutrální',
	'SMILIES_QUESTION'				=> 'Otázka',
	'SMILIES_RAZZ'					=> 'Posměch',
	'SMILIES_ROLLING_EYES'			=> 'Vykulený',
	'SMILIES_SAD'					=> 'Smutný',
	'SMILIES_SHOCKED'				=> 'Šokovaný',
	'SMILIES_SMILE'					=> 'Úsměv',
	'SMILIES_SURPRISED'				=> 'Překvapený',
	'SMILIES_TWISTED_EVIL'			=> 'Šíleně ďábelský',
	'SMILIES_UBER_GEEK'				=> 'Super šprt',
	'SMILIES_VERY_HAPPY'			=> 'Velká radost',
	'SMILIES_WINK'					=> 'Mrknutí',

	'TOPICS_TOPIC_TITLE'			=> 'Vítejte v phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Přehled',
	'MENU_INTRO'		=> 'Úvod',
	'MENU_LICENSE'		=> 'Licence',
	'MENU_SUPPORT'		=> 'Podpora',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Vytváření konfiguračního souboru',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Přidávání konfiguračního nastavení',
	'TASK_ADD_DEFAULT_DATA'				=> 'Přidávání výchozího nastavení do databáze',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Vytváření souboru se schématem databáze',
	'TASK_SETUP_DATABASE'				=> 'Nastavování databáze',
	'TASK_CREATE_TABLES'				=> 'Vytváření tabulek',

	// Install data
	'TASK_ADD_BOTS'			=> 'Registrování botů',
	'TASK_ADD_LANGUAGES'	=> 'Instalace dostupných jazyků',
	'TASK_ADD_MODULES'		=> 'Instalace modulů',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Vytvářím vyhledávací index',

	// Install finish
	'TASK_INSTALL_EXTENSIONS'	=> 'Instalace přibalených rozšíření',
	'TASK_NOTIFY_USER'			=> 'Odesílání upozorňovacího emailu',
	'TASK_POPULATE_MIGRATIONS'	=> 'Zaplňování migrací',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Instalace byla úspěšně dokončena',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Modul nenalezen',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Modul nelze nalézt, protože služba %s není definovaná.',

	'TASK_NOT_FOUND'				=> 'Úloha nenalezena',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Úlohu nelze nalézt, protože služba %s není definovaná.',

	'SKIP_MODULE'	=> 'Přeskočení modulu „%s“',
	'SKIP_TASK'		=> 'Přeskočení úlohy „%s“',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Všechny služby pro úkoly instalátoru by měly začínat na „installer“',
	'TASK_CLASS_NOT_FOUND'				=> 'Definice služby pro úkol instalátoru je neplatná. Službě byl dán název „%1$s“, ale očekávaný jmenný prostor třídy je „%2$s“. Pro více informací se podívejte na dokumentaci pro „task_interface“.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Konfigurační soubor instalátoru není zapisovatelný.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Instalovat phpBB',
	'CLI_UPDATE_BOARD'				=> 'Aktualizovat phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Zobrazit konfiguraci, která bude použitá',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Ověřit konfigurační soubor',
	'CLI_CONFIG_FILE'				=> 'Konfigurační soubor, který chcete použít',
	'MISSING_FILE'					=> 'Nelze získat přístup k souboru %1$s',
	'MISSING_DATA'					=> 'V souboru config chybí data, nebo může obsahovat neplatné nastavení.',
	'INVALID_YAML_FILE'				=> 'Nelze analyzovat YAML soubor %1$s',
	'CONFIGURATION_VALID'			=> 'Konfigurační soubor je platný',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Aktualizace instalace phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Pomocí této možnosti můžete aktualizovat na poslední verzi vaši instalaci phpBB.<br />Během tohoto procesu bude zkontrolována integrita všech vašich souborů. Před samotnou aktualizací si budete moci prohlédnout všechny soubory a rozdíly v nich.<br /><br />Aktualizaci souborů lze provést dvěma různými způsoby.</p><h2>Manuální aktualizace</h2><p>Při aktualizaci tímto způsobem stáhnete archiv s vašimi změněnými soubory, takže nepřijdete o úpravy, které jste ve vašich souborech provedli. Po stažení tohoto balíčku budete muset soubory manuálně nahrát do jejich správných umístění v kořenovém adresáři vašeho phpBB. Potom budete moci znovu zkontrolovat soubory, abyste se ujistili, že jste je přesunuli do jejich správných umístění.</p><h2>Automatická aktualizace s FTP formulářem</h2><p>Tento způsob je podobný tomu prvnímu, ale s tím rozdílem, že změněné soubory nebudete muset stáhnout do vašeho počítače a manuálně je nahrát na FTP. phpBB to udělá za vás. Abyste mohli tento způsob použít, musíte znát přihlašovací údaje k vašemu FTP, protože je budete muset zadat do formuláře. Jakmile budou soubory nahrány na server, budete znovu přesměrováni na kontrolu souborů, abyste se ujistili, že všechno bylo správně aktualizováno.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Oznámení o vydání</h1>

		<p>Před tím, než budete pokračovat v aktualizaci si, prosím, přečtěte oznámení o vydání poslední verze, ve kterém můžete najít užitečné informace. Také tam najdete odkazy na stažení a seznam změn.</p>

		<br />

		<h1>Jak aktualizovat vaši instalaci pomocí „Automatického aktualizačního balíčku“</h1>

		<p>Doporučený způsob aktualizace instalace vašeho fóra, který je tu popsán, lze použít jen s automatickým aktualizačním balíčkem („Automatic Update Package“). Vaše fórum můžete také aktualizovat pomocí způsobů, které jsou uvedeny v dokumentu „INSTALL.html“. Postup pro automatickou aktualizaci phpBB3:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Přejděte na <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">stránku se soubory ke stažení na webu phpBB.com</a> a stáhněte soubor „Automatic Update Package“ („Automatický aktualizační balíček“).<br /><br /></li>
			<li>Rozbalte archiv.<br /><br /></li>
			<li>Nahrajte kompletní rozbalené složky „install“ a „vendor“ do kořenového adresáře vašeho phpBB fóra (tam, kde je soubor „config.php“).<br /><br /></li>
		</ul>

		<p>Po nahrání souborů bude vaše fórum pro normální uživatele vypnuto, protože se mezi soubory fóra nachází nahraný adresář „install“.<br /><br />
		<strong><a href="%1$s" title="%1$s">Pak přejděte ve vašem prohlížeči na adresář „install“, čímž spustíte aktualizaci</a>.</strong><br />
		<br />
		Potom budete provedeni procesem aktualizace. Na konec aktualizace budete upozorněni.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Způsob aktualizace',

	'UPDATE_TYPE_ALL'		=> 'Aktualizovat soubory a databázi',
	'UPDATE_TYPE_DB_ONLY'	=> 'Aktualizovat pouze databázi',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Způsoby aktualizace souborů',

	'UPDATE_FILE_METHOD'			=> 'Způsob aktualizace souborů',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Stáhnout archiv s upravenými soubory',
	'UPDATE_FILE_METHOD_FTP'		=> 'Aktualizovat soubory přes FTP (Automaticky)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Aktualizovat soubory přes přímý přístup k souborům (Automaticky)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Vyberte formát archivu',

	// FTP settings
	'FTP_SETTINGS'			=> 'Nastavení FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Nebyl nalezen platný aktualizační adresář. Ujistěte se, prosím, že jste nahráli příslušné soubory.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Vaše verze je aktuální. Není potřeba spouštět aktualizátor. Pokud chcete zkontrolovat integritu vašich souborů, ujistěte se, že jste nahráli správné aktualizační soubory.',
	'OLD_UPDATE_FILES'				=> 'Aktualizační soubory jsou zastaralé. Nalezené aktualizační soubory jsou pro aktualizaci z phpBB %1$s na phpBB %2$s, ale poslední verze phpBB je %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Nalezené soubory nejsou kompatibilní s vaší nainstalovanou verzí. Vaše nainstalovaná verze je %1$s a aktualizační soubor je pro aktualizaci z phpBB %2$s na %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Aktualizace souborů',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Kontrola souborů k aktualizaci',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Porovnávači souborů se nepodařilo otevřít %s.',

	'UPDATE_FILE_DIFF'		=> 'Porovnávání změněných souborů',
	'ALL_FILES_DIFFED'		=> 'Všechny upravené soubory byly porovnány.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Aktualizovat soubory',

	'DOWNLOAD'							=> 'Stáhnout',
	'DOWNLOAD_CONFLICTS'				=> 'Stažení archivu se sloučenými konflikty',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Pro nalezení konfliktů hledejte v souboru &lt;&lt;&lt;',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Stáhnout archiv s upravenými soubory',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Po stažení souboru rozbalte archiv, ve kterém naleznete upravené soubory, které musíte nahrát do kořenového adresáře vašeho fóra. Pak nahrajte soubory do jejich příslušných umístění. Po nahrání všech souborů můžete pokračovat v aktualizaci.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Soubor je již aktuální.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Soubor neumožňuje, aby byl porovnán.',
	'FILE_USED'						=> 'Informace použité z',			// Single file
	'FILES_CONFLICT'				=> 'Konfliktní soubory',
	'FILES_CONFLICT_EXPLAIN'		=> 'Následující soubory jsou upraveny a nepředstavují originální soubory ze starší verze phpBB. phpBB zjistilo, že v těchto souborech dojde ke konfliktům, pokud budou sloučeny. Prozkoumejte, prosím, tyto konflikty a zkuste je vyřešit manuálně, nebo pokračujte v aktualizaci výběrem preferovaného způsobu sloučení. Pokud vyřešíte konflikty manuálně, zkontrolujte znovu soubory (potom co je upravíte). Pro každý soubor můžete také vybrat jiný preferovaný způsob sloučení. Výsledkem prvního bude soubor, ve kterém budou konfliktní řádky z vašeho starého souboru ztraceny. Výsledkem dalšího bude soubor, ve kterém budou ztraceny změny z novějšího souboru.',
	'FILES_DELETED'					=> 'Smazané soubory',
	'FILES_DELETED_EXPLAIN'			=> 'Následující soubory v nové verzi neexistují. Tyto soubory musíte z vaší instalace (serveru) manuálně smazat.',
	'FILES_MODIFIED'				=> 'Upravené soubory',
	'FILES_MODIFIED_EXPLAIN'		=> 'Následující soubory jsou upraveny a nepředstavují originální soubory ze starší verze phpBB. V aktualizovaném souboru budou sloučeny vaše úpravy s novým souborem.',
	'FILES_NEW'						=> 'Nové soubory',
	'FILES_NEW_EXPLAIN'				=> 'Následující soubory ve vaší instalaci neexistují. Tyto soubory budou do vaší instalace přidány.',
	'FILES_NEW_CONFLICT'			=> 'Nové konfliktní soubory',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Následující soubory jsou nové v poslední verzi, ale bylo zjištěno, že máte ve vaší instalaci na stejném místě soubor se stejným jménem. Tento soubor bude přepsán novým souborem.',
	'FILES_NOT_MODIFIED'			=> 'Neupravené soubory',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Následující soubory nejsou upravené a představují originální soubory z verze phpBB, ze které chcete aktualizovat.',
	'FILES_UP_TO_DATE'				=> 'Již aktualizované soubory',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Následující soubory jsou již aktuální, a proto je není nutné aktualizovat.',
	'FILES_VERSION'					=> 'Verze souborů',
	'TOGGLE_DISPLAY'				=> 'Zobrazit/Skrýt seznam souborů',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Aktualizace souborů',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Aktualizace pomocí aktualizátoru souboru „%1$s“ se nezdařila. Instalátor zkusí další možnost aktualizace „%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Aktualizace souborů se nezdařila. Žádná další možnost aktualizace není k dispozici.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Pokračovat v aktualizaci',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Znovu zkontrolovat soubory',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Aktualizace databáze',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Aktualizace databáze byla úspěšná.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Aktualizace rozšíření',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Určený konvertor neexistuje.',
	'DEV_NO_TEST_FILE'			=> 'V konvertoru nebyla určená hodnota pro proměnnou test_file. Pokud jste uživatel tohoto konvertoru, neměli byste tuto chybu vidět. Nahlaste, prosím, tuto zprávu autorovi konvertoru. Pokud jste autor konvertoru, musíte specifikovat název souboru, který existuje ve zdrojovém fóru, aby mohla být k němu ověřena cesta.',
	'COULD_NOT_FIND_PATH'		=> 'Nelze najít cestu k vašemu původnímu fóru. Zkontrolujte, prosím, vaše nastavení a zkuste akci zopakovat.<br />» %s bylo určeno jako zdrojová cesta.',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3 konfigurační proměnná „%s“ je prázdná.',

	'MAKE_FOLDER_WRITABLE'		=> 'Ujistěte se, prosím, že tato složka existuje, že do ní webový server může zapisovat a pak akci zopakujte:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Ujistěte se, prosím, že tyto složky existují, že do nich webový server může zapisovat a pak akci zopakujte:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Znovu otestovat',

	'NO_TABLES_FOUND'			=> 'Nebyly nalezeny tabulky.',
	'TABLES_MISSING'			=> 'Nelze najít tyto tabulky<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Zkontrolujte, prosím, předponu tabulky a akci zopakujte.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Pokračovat v konverzi',
	'CONTINUE_CONVERT_BODY'		=> 'Byl rozpoznán dřívější pokus o konverzi. Můžete si vybrat, jestli chcete začít novou konverzi, nebo pokračovat v předchozí konverzi.',
	'CONVERT_NEW_CONVERSION'	=> 'Nová konverze',
	'CONTINUE_OLD_CONVERSION'	=> 'Pokračovat v dříve započaté konverzi',

	// Start conversion
	'SUB_INTRO'					=> 'Úvod',
	'CONVERT_INTRO'				=> 'Vítejte v phpBB konvertoru',
	'CONVERT_INTRO_BODY'		=> 'Pomocí konvertoru můžete importovat data z jiných (nainstalovaných) systémů fór do phpBB. Na seznamu dole můžete vidět všechny aktuálně dostupné konverzní moduly. Pokud v seznamu nevidíte konvertor pro program fóra, ze které chcete konvertovat, navštivte, prosím, naši webovou stránku, kde mohou být dostupné ke stažení další konverzní moduly.',
	'AVAILABLE_CONVERTORS'		=> 'Dostupné konvertory',
	'NO_CONVERTORS'				=> 'Žádné konvertory nejsou k dispozici.',
	'CONVERT_OPTIONS'			=> 'Možnosti',
	'SOFTWARE'					=> 'Software fóra',
	'VERSION'					=> 'Verze',
	'CONVERT'					=> 'Konvertovat',

	// Settings
	'STAGE_SETTINGS'			=> 'Nastavení',
	'TABLE_PREFIX_SAME'			=> 'Předpona tabulek musí být stejná jako je použita v softwaru, ze kterého konvertujete.<br />» Určená předpona tabulek byla %s.',
	'DEFAULT_PREFIX_IS'			=> 'Konvertoru se nepodařilo najít tabulky s určenou předponou. Ujistěte se, prosím, že jste vložili přesné informace o fóru, ze kterého chcete konvertovat. Výchozí předpona tabulek pro %1$s je <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Určete možnosti konverze',
	'FORUM_PATH'				=> 'Cesta k fóru',
	'FORUM_PATH_EXPLAIN'		=> 'Tohle je <strong>relativní</strong> cesta na disku k vašemu původnímu fóru od <strong>kořenového adresáře této phpBB3 instalace</strong>.',
	'REFRESH_PAGE'				=> 'Obnovit stránku pro pokračování v konverzi',
	'REFRESH_PAGE_EXPLAIN'		=> 'Pokud vyberete „Ano“, konvertor obnoví stránku, aby mohl po dokončení kroku pokračovat v konverzi. Pokud se jedná o vaši první konverzi pro testovací účely a zjištění možných chyb, doporučujeme vybrat možnost „Ne“.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Probíhá konverze',

	'AUTHOR_NOTES'				=> 'Poznámky autora<br />» %s',
	'STARTING_CONVERT'			=> 'Začátek konverze',
	'CONFIG_CONVERT'			=> 'Konverze konfigurace',
	'DONE'						=> 'Hotovo',
	'PREPROCESS_STEP'			=> 'Provádění předběžného zpracování funkcí/požadavků',
	'FILLING_TABLE'				=> 'Zaplňování tabulky <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Zaplňování tabulek',
	'DB_ERR_INSERT'				=> 'Během zpracování dotazu <code>INSERT</code> se vyskytla chyba.',
	'DB_ERR_LAST'				=> 'Během zpracování <var>query_last</var> se vyskytla chyba.',
	'DB_ERR_QUERY_FIRST'		=> 'Během provádění <var>query_first</var> došlo k chybě.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Chyba během provádění <var>query_first</var>, %s („%s“).',
	'DB_ERR_SELECT'				=> 'Během zpracování dotazu <code>SELECT</code> došlo k chybě.',
	'STEP_PERCENT_COMPLETED'	=> 'Krok <strong>%d</strong> z <strong>%d</strong>',
	'FINAL_STEP'				=> 'Poslední krok procesu',
	'SYNC_FORUMS'				=> 'Začátek synchronizace fór',
	'SYNC_POST_COUNT'			=> 'Synchronizace počtu příspěvků',
	'SYNC_POST_COUNT_ID'		=> 'Synchronizace počtu příspěvků od <var>položky</var> %1$s do %2$s.',
	'SYNC_TOPICS'				=> 'Začátek synchronizace témat',
	'SYNC_TOPIC_ID'				=> 'Synchronizace témat od <var>topic_id</var> %1$s do %2$s.',
	'PROCESS_LAST'					=> 'Zpracování posledních příkazů',
	'UPDATE_TOPICS_POSTED'		=> 'Generování informací o odeslaných tématech',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Během generování informací o odeslaných tématech došlo k chybě. Tento krok můžete zopakovat v administraci po dokončení konverze.',
	'CONTINUE_LAST'				=> 'Pokračovat posledním příkazem',
	'CLEAN_VERIFY'				=> 'Pročišťování a ověřování konečné struktury',
	'NOT_UNDERSTAND'			=> 'Nerozumím %s #%d, tabulka %s („%s“)',
	'NAMING_CONFLICT'			=> 'Konflikt jmen: %s a %s jsou aliasy<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Konverze byla dokončena',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Podařilo se vám úspěšně zkonvertovat vaše fórum na phpBB 3.3. Nyní se můžete přihlásit a <a href="..">přejít do vašeho fóra</a>. Předtím, než zapnete vaše fórum smazáním adresáře „install“, se ujistěte, že všechna nastavení byla správně přenesena. Pamatujte, že pomoc pro používání phpBB je dostupná online v <a href="https://www.phpbb.com/support/docs/en/3.2/ug/">Dokumentaci</a> a ve <a href="https://www.phpbb.com/community/viewforum.php?f=466">fórech podpory na phpBB.com</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Ve vašem starém fóru je povoleno nahrávání příloh přes FTP. Zakažte, prosím, možnost nahrávání přes FTP a ujistěte se, že máte určen platný adresář pro nahrávání a potom zkopírujte všechny soubory příloh do toho nového z webu dostupného adresáře. Jakmile to uděláte, restartujte konvertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nejsou k dispozici informace o konfiguraci potřebné pro konverzi.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nepodařilo se získat informace pro přístup na fórum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nepodařilo se získat kategorie.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nelze získat konfiguraci vašeho fóra.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nelze získat přístup/číst „%s“.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nepodařilo se získat autentizační informace skupiny.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Rozpoznána inkonzistence v tabulce groups v add_bots() - musíte přidat všechny speciální skupiny, pokud to uděláte, manuálně.',
	'CONV_ERROR_INSERT_BOT'				=> 'Nepodařilo se vložit bota do tabulky users.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nepodařilo se vložit bota do tabulky bots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nepodařilo se vložit uživatele do tabulky user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Syntaktická (parsovací) chyba zprávy',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Poznámka pro vývojáře: pro použití %s musíte určit $convertor[\'avatar_path\'].',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Nebyla určena relativní cesta ke zdrojovému fóru.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Poznámka pro vývojáře: pro použití %s musíte určit $convertor[\'avatar_gallery_path\'].',
	'CONV_ERROR_NO_GROUP'				=> 'Skupinu „%1$s“ nelze najít v %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Poznámka pro vývojáře: pro použití %s musíte určit $convertor[\'ranks_path\'].',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Poznámka pro vývojáře: pro použití %s musíte určit $convertor[\'smilies_path\'].',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Poznámka pro vývojáře: pro použití %s musíte určit $convertor[\'upload_path\'].',
	'CONV_ERROR_PERM_SETTING'			=> 'Nepodařilo se vložit/aktualizovat nastavení oprávnění.',
	'CONV_ERROR_PM_COUNT'				=> 'Nepodařilo se vybrat počet SZ ve složce.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nepodařilo se vložit nové fórum nahrazující starou kategorii.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nepodařilo se vložit nové fórum nahrazující staré fórum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nepodařilo se získat uživatelovi autentizační informace.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Nesprávná skupina „%1$s“ definovaná v %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Tato stránka shromažďuje data potřebná k přístupu ke zdrojovému (původnímu) fóru. Vložte informace o databázi vašeho původního fóra; konvertor v dané databázi neprovede žádné změny. Aby byla konverze úplná, zdrojové fórum by mělo být vypnuto.',
	'CONV_SAVED_MESSAGES'				=> 'Uložené zprávy',

	'PRE_CONVERT_COMPLETE'			=> 'Všechny předběžné kroky pro konverzi byly úspěšně dokončeny. Nyní můžete začít se samotnou konverzí. Vezměte prosím na vědomí, že možná budete muset manuálně upravit nastavení a provést několik věcí. Po konverzi pozorně zkontrolujte přiřazená oprávnění, znovu vytvořte vyhledávací index, který nebude zkonvertován a ujistěte se, že soubory - např. avatary a smajlíci - byly správně zkopírovány.',
));
