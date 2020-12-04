<?php
/**
*
* acp_search [Čeština]
*
* @package language
* @version $Id: search.php 505 2010-11-21 10:32:21Z ameeck $
* @copyright (c) 2010 phpBB.cz
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Zde lze spravovat všechny indexy vyhledávacího backendu. Vzhledem k&nbsp;tomu, že bežně používáte pouze jeden index najednou, je doporučeno druhý odstranit pro úsporu místa s&nbsp;tím, že lze kdykoliv znovu vytvořit. Po změně některých nastavení (např. minimální/maximální počet znaků) bude možná stát za to vytvořit nový index, aby se projevily nové změny.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Zde můžete nastavit jaký backend bude použit pro indexování příspěvků a vyhledávání. Můžete nastavit různé možnosti, které mají vliv na to, jak bude vyhledávání náročné na server. Některá z těchto nastavení jsou stejná pro všechny backendy.',

	'COMMON_WORD_THRESHOLD'						=> 'Hranice často používaného slova',
	'COMMON_WORD_THRESHOLD_EXPLAIN'		=> 'Slova, která se objevují v&nbsp;příspěvcích ve větší míře jsou označená jako častá. Častá slova jsou ignorována při vyhledávání. Nastavením na 0 toto chování vypnete. Tuto funkce lze použít jen při více než 100 příspěvcích. Pokud chcete, aby se projevily změny v nastavení častých slov, musíte znovu vytvořit vyhledávací rejstřík/index.',
	'CONFIRM_SEARCH_BACKEND'					=> 'Přejete si přepnout na jiný vyhledávací backend? Po změně vyhledávacího backendu budete muset vytvořit index pro nový vyhledávací backend. Pokud neplánujete přepnout zpět na předchozí vyhledávací backend můžete smazat staré backendové indexy a uvolnit tak systémové prostředky.',
	'CONTINUE_DELETING_INDEX'					=> 'Pokračovat v&nbsp;předchozím odstraňování indexu',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'Byl zahájen proces smazaní vyhledávacího indexu. Pro znovuzpřístupnění vyhledávání musíte tuto operaci dokončit.',
	'CONTINUE_INDEXING'								=> 'Pokračovat v&nbsp;předchozím indexačním procesu',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Byl zahájen proces vytvoření vyhledávacího indexu. Pro znovuzpřístupnění vyhledávání musíte tuto operaci dokončit.',
	'CREATE_INDEX'										=> 'Vytvořit index',
  
	'DEFAULT_SEARCH_RETURN_CHARS'			=> 'Výchozí délka výsledků',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> 'Kolik znaků mají být dlouhé vrácené výsledky. Hodnota 0 vrátí celý příspěvek.',
	'DELETE_INDEX'												=> 'Smazat index',
	'DELETING_INDEX_IN_PROGRESS'					=> 'Mazání indexu v&nbsp;průběhu',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Vyhledávací backend právě pročišťuje svůj index, toto může trvat několik minut.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL fulltext může být použit pouze od MySQL4 a vyšší.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltextové indexy můžou být použity pouze s MyISAM nebo InnoDB tabulkami. Pro fulltextové indexy na InnoDB tabulkách je požadováno MySQL 5.6.8 nebo novější.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'					=> 'Celkový počet indexovaných příspěvků',

	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => 'Pouze slova s touto minimální délkou budou brány v úvahu při hledání. Pokud byste chtěli změnit toto nastavení, je potřeb tak učinit přímo v nastavení MySQL, pravděpodobně to bude muset udělat poskytovatel vašeho hostingu.',
  'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Pouze slova kratší než toto číslo budou brány v úvahu při hledání. Pokud byste chtěli změnit toto nastavení, je potřeb tak učinit přímo v nastavení MySQL, pravděpodobně to bude muset udělat poskytovatel vašeho hostingu.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL fulltextový backend lze použít jen s PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Celkový počet indexovaných příspěvků',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'Verze PostgreSQL',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Konfigurační profil textového vyhledávání:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minimální délka vyhledávacích slov',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Maximální délka vyhledávacích slov',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Tento vyhledávací backend vyžaduje PostgreSQL verze 8.3 a vyšší.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Konfigurační profil textového vyhledávání použitý ke stanovení syntaktického analyzátoru a slovníku.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Slova, která nemají méně znaků než je zde nastaveno budou zahrnuta v dotazu na databázi.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Slova, která nemají více znaků než je zde nastaveno budou zahrnuta v dotazu na databázi.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Pro vygenerování konfiguračního souboru sphinxu nastavte následující možnosti',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Cesta k adresáři s daty',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Adresář bude použit pro uložení souborů indexů a záznamů. Měli byste vytvořit tento adresář mimo adresáře, ke kterým je přístup z webu. (cesta by měla mít koncové lomítko)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Počet příspěvků v často aktualizovaném delta indexu',
	'FULLTEXT_SPHINX_HOST'					=> 'Hostitel vyhledávacího démonu sphinxu',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Hostitel, na kterém vyhledávací démon (searchd) sphinxu naslouchá. Nechte prázdné pro použití výchozího localhostu',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Dostupná velikost paměti pro indexování',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Tato hodnota by měla být vždy nižší než dostupná velikost paměti vašeho serveru. Pokud máte pravidelné problémy s výkonem, může to být z důvodu, že indexování spotřebovává příliš mnoho zdrojů. Mohlo by pomoci snížit dostupnou velikost paměti pro indexování.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Počet příspěvků v hlavním indexu',
	'FULLTEXT_SPHINX_PORT'					=> 'Port vyhledávacího démonu sphinxu',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Port, na kterém vyhledávací démon (searchd) sphinxu naslouchá. Nechte prázdné pro použití výchozího sphinx API portu 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Sphinx vyhledávání pro phpBB podporuje pouze MySQL a PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Konfigurační soubor pro Sphinx',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Vygenerovaný obsah konfiguračního souboru pro sphinx. Tato data musí být vložena do souboru sphinx.conf, který používá vyhledávací démon sphinxu. Nahraďte zástupné výrazy [dbuser] a [dbpassword] přihlašovacími údaji k vaší databázi.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Nejsou určeny cesty k adresáři dat a konfiguračního souboru sphinxu. Určete je, prosím, aby mohl být vygenerován konfigurační soubor.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Obecné nastavení hledání',
	'GO_TO_SEARCH_INDEX'						=> 'Přejít na stránku vyhledávání',

	'INDEX_STATS'										=> 'Statistiky indexu',
	'INDEXING_IN_PROGRESS'					=> 'Indexace probíhá',
	'INDEXING_IN_PROGRESS_EXPLAIN'	=> 'Vyhledávací backend právě indexuje všechny příspěvky na vašem fóru. Toto může trvat několik minut až hodin, podle velikosti vašeho fóra.',

	'LIMIT_SEARCH_LOAD'						=> 'Omezení vyhledávání při zatížení serveru',
	'LIMIT_SEARCH_LOAD_EXPLAIN'		=> 'Pokud průměr vytížení serveru za 1 minutu dosáhne této hodnoty, stránka vyhledávání se automaticky vypne, 1.0 se rovná ~100% využití procesoru. Toto funguje pouze na UNIXových serverech.',

	'MAX_SEARCH_CHARS'								=> 'Maximální počet znaků pro indexaci',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Pouze slova, která se skládají z méně znaků, než je nastaveno, budou zaindexována.',
	'MAX_NUM_SEARCH_KEYWORDS'					=> 'Limit vyhledaných klíčových slov',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'	=> 'Maximální počet slov, které může uživatel vyhledat. Pokud je zde nastavena 0, není kladeno žádné omezení co do počtu slov.',

	'MIN_SEARCH_CHARS'								=> 'Minimální počet znaků pro indexaci',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Pouze slova, která se skládají z více znaků, než je nastaveno, budou zaindexována.',
	'MIN_SEARCH_AUTHOR_CHARS'					=> 'Minimální počet znaků ve jméně autora',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> 'Uživatelé musí vložit alespoň tento počet znaků při vyhledávání uživatelského jména s&nbsp;použitím zástupných znaků. Pokud je uživatelovo jméno kratší, než je zde nastaven počet znaků, stále jde vyhledat jeho příspěvky zadaním celého uživatelského jména.',

	'PROGRESS_BAR'							=> 'Postup',

	'SEARCH_GUEST_INTERVAL'					=> 'Ochranný interval pro anonymní',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> 'Počet sekund, který musí anonymní návštěvník vyčkat mezi jednotlivými hledáními. Pokud jeden návštěvník vyhledává, ostatní musejí vyčkat uplynutí této lhůty.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Všechny příspěvky až do příspěvku s id %2$d byly zatím indexovány, z toho %1$d příspěvky během tohoto kroku.<br />',
		3	=> 'Všechny příspěvky až do příspěvku s id %2$d byly zatím indexovány, z toho %1$d příspěvků během tohoto kroku.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Indexování aktuálně probíhá průměrnou rychlostí %1$.1f příspěvky za sekundu.<br />Probíhá indexování…',
		3	=> 'Indexování aktuálně probíhá průměrnou rychlostí %1$.1f příspěvků za sekundu.<br />Probíhá indexování…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Všechny příspěvky až do příspěvku s id %2$d byly odstraněny z vyhledávacího indexu. Z toho %1$d příspěvků v tomto kroku.<br />',
		3	=> 'Všechny příspěvky až do příspěvku s id %2$d byly odstraněny z vyhledávacího indexu. Z toho %1$d příspěvků v tomto kroku.<br />',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		2	=> 'Aktuální míra mazání je přibližně %1$.1f příspěvků za sekundu.<br />Probíhá mazání…',
		3	=> 'Aktuální míra mazání je přibližně %1$.1f příspěvků za sekundu.<br />Probíhá mazání…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Všechny příspěvky v&nbsp;databázi fóra byly úspěšně zaindexovány.',
	'SEARCH_INDEX_REMOVED'					=> 'Vyhledávácí index byl odstraněn z databáze.',
	'SEARCH_INTERVAL'								=> 'Ochranný interval pro uživatele',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Počet sekund, po kterém je možno znovu hledat. Interval platí zvlášť pro každého uživatele.',
	'SEARCH_STORE_RESULTS'					=> 'Mezipaměť výsledků vyhledávání',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'Cachované výsledky vyhledávání se automaticky odstraní po uplynutí této doby. Pokud je nastaveno na 0, cache výsledků je vypnuta.',
	'SEARCH_TYPE'										=> 'Vyhledávací backend',
	'SEARCH_TYPE_EXPLAIN'						=> 'phpBB vám umožňuje vybrat backend, který bude použit pro vyhledávání na fóru. Ve výchozím stavu phpBB použije vlastní fulltextové řešení.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Změnili jste vyhledávácí backend. Abyste mohli využívat nového backendu pro vyhledávání, musíte se ujistit, že je vytvořen index pro vyhledávání.',

	'TOTAL_WORDS'				=> 'Celkový počet indexovaných slov',
	'TOTAL_MATCHES'			=> 'Celkový počet spojení mezi slovy a příspěvky',

	'YES_SEARCH'									=> 'Povolit vyhledávání',
	'YES_SEARCH_EXPLAIN'					=> 'Umožnit uživatelům využívat vyhledávání na fóru včetně vyhledávání uživatelů.',
	'YES_SEARCH_UPDATE'						=> 'Povolit aktualizaci indexu při přispívání',
	'YES_SEARCH_UPDATE_EXPLAIN'		=> 'Aktualizuje index po přidání příspěvku, ignorováno pokud je vyhledávání vypnuto.',
));
