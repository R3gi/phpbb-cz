<?php
/**
*
* acp_posting [Čeština]
*
* @package language
* @version $Id: posting.php 501 2010-02-28 07:46:24Z ameeck $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode je zvláštní implementace jazyka HTML, která umožňuje vetší kontrolu nad tím, jak vypadají vaše příspěvky. Z této stránky můžete přidávat, odstraňovat nebo upravovat vlastní BBCode značky.',
	'ADD_BBCODE'				=> 'Přidat nový BBCode',

	'BBCODE_DANGER'				=> 'BBCode, který se snažíte vytvořit může být nebezpečný. Nestačilo by vám použít přísnější typy {SIMPLETEXT} nebo {INTTEXT}? Pokračujte pouze tehdy, pokud jste si jisti tím, co děláte, a pokud je {TEXT} jedinou možností, kterou máte.',
 	'BBCODE_DANGER_PROCEED'		=> 'Rozumím a chci pokračovat', //'I understand the risk',

	'BBCODE_ADDED'				=> 'Nový BBCode byl přidán.',
	'BBCODE_EDITED'				=> 'BBCode byl upraven.',
	'BBCODE_DELETED'			=> 'BBKód byl odstraněn.',
	'BBCODE_NOT_EXIST'			=> 'Vybraný BBCode neexistuje.',
	'BBCODE_HELPLINE'			=> 'Nápověda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Text, který se zobrazí při přejetí tlačítka BBCode myší.',
	'BBCODE_HELPLINE_TEXT'		=> 'Text nápovědy',
	'BBCODE_HELPLINE_TOO_LONG'   => 'Text nápovědy, který jste zadali, je příliš dlouhý.',

	'BBCODE_INVALID_TAG_NAME'	=> 'BBCode s&nbsp;tímto názvem již existuje.',
	'BBCODE_INVALID'			=> 'Zadali jste nesprávný BBCode, jeho konstrukce obsahuje chyby.',
	'BBCODE_INVALID_TEMPLATE'	=> 'Vaše BBcode šablona je neplatná.',
	'BBCODE_TAG'				=> 'Značka',
	'BBCODE_TAG_TOO_LONG'		=> 'Vybraný název značky je příliš dlouhý.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Definice vašeho BBCode je příliš dlouhá, zkraťte ji prosím.',
	'BBCODE_USAGE'				=> 'Použití BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Zde definujete jak používat BBCode. Nahraďte proměnné za ty, které odpovídají budoucímu obsahu BBCode značky(%sviz níže%s).',

	'EXAMPLE'						=> 'Příklad:',
	'EXAMPLES'						=> 'Příklady:',

	'HTML_REPLACEMENT'				=> 'HTML náhrada',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Zde definujete jakým HTML kódem bude BBCode nahrazen (každý styl může mít své zobrazení). Nezapomeňte vložit stejné proměnné, které jste použili výše!',

	'TOKEN'					=> 'Proměnná',
	'TOKENS'				=> 'Proměnné',
	'TOKENS_EXPLAIN'		=> 'Proměnné drží místo pro budoucí uživatelský vstup, na jejich místo budou uživatelé vyplňovat data. Značka bude zpracována, pouze pokud je na daném místě text odpovídající definice proměnné. Pokud potřebujete, můžete je číslovat, přidáním čísla před uzavírající závorku, např. {USERNAME1}, {USERNAME2}.<br /><br />Vedle těchto proměnných lze použít jakýkoliv jazykový řetězec, který je přítomný v&nbsp;překladech. Vložte ho v&nbsp;tomto formátu {L_<em>&lt;název řetězce&gt;</em>},kde <em>&lt;název řetězce&gt;</em> je název přeloženého řetězce, který chcete zobrazit. Například, {L_WROTE} bude anglicky zobrazeno jako „wrote“, a pokud má uživatel aktivovanou češtinu, tak jako „napsal“.',
	'TOKEN_DEFINITION'		=> 'Použitelné znaky',
	'TOO_MANY_BBCODES'		=> 'Nelze vytvořit další BBCode značky. Odstraňte jednu nebo více značek a zkuste znovu.',

	'tokens'	=>	array(
		'TEXT'			=> 'Běžný text, vč. diakritiky, zvláštních znaků, čísel, atd.',
		'INTTEXT'		=> 'Běžný text vč. diakritiky, čísla, mezery, čárky, tečky, minus, plus, pomlčka a podtržítko. Nedovoluje speciální znaky jako TEXT',
		'SIMPLETEXT'   => 'Znaky latinské abecedy (A–Z), čísla, mezery, čárky, tečky, mínus, plus, spojovník a podtržítko',
		'IDENTIFIER'   => 'Znaky latinské abecedy (A–Z), čísla, spojovník a podtržítko',
		'NUMBER'		=> 'Jakákoliv řada číslic',
		'EMAIL'			=> 'Platná e-mailová adresa',
		'URL'			=> 'Platná URL, používající volitelný protokol (http, ftp, atd., nelze zneužít pro JavaScriptové útoky). Pokud není zvolený žádný, „http://“ je připojeno na začátek řetězce.',
		'LOCAL_URL'		=> 'Lokální URL adresa. Zadaná URL musí být relativní k&nbsp;stránce s&nbsp;tématem a nesmí obsahovat definici protokolu nebo název serveru, jako odkazy jsou s předponou „%s”',
    'RELATIVE_URL'	=> 'Relativní URL adresa. Můžete použít tohle pro ověření části URL adresy, ale buďte opatrní: celá URL adresa je platná jako relativní URL. Pokud byste chtěli použít relativní URL adresy na vašem fóru, použijte LOCAL_URL token.',
		'COLOR'			=> 'HTML barva, buď v&nbsp;hexadecimálním formátu <samp>#FF1234</samp> nebo jako <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS barva</a> jako <samp>fuchsia</samp> nebo <samp>InactiveBorder</samp>',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Odsud můžete přidávat a upravovat ikony, které uživatelé mohou použít v&nbsp;záhlaví zpráv. Tyto ikony jsou nejčastěji zobrazené vedle názvu tématu v&nbsp;seznamu témat nebo vedle předmětu v&nbsp;přehledu tématu. Můžete také instalovat nebo vytvořit celé kolekce ikon.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smajlící nebo emotikony jsou často malé, někdy animované obrázky, které umožňují vyjádřit emoce nebo náladu. Z této stránky můžete přidávat a upravovat smajlíky, které uživatelé mohou používat v&nbsp;jejich příspěvcích a zprávách. Můžete také instalovat nebo vytvořit celou kolekci smajlíků.',
	'ADD_SMILIES'			=> 'Přidat další smajlíky',
	'ADD_ICONS'				=> 'Přidat další ikony',
	'ADD_SMILEY_CODE'		=> 'Přidat další kód smajlíku',
	'AFTER_ICONS'			=> 'Za %s',
	'AFTER_SMILIES'			=> 'Za %s',

	'CODE'						=> 'Kód',
	'CURRENT_ICONS'				=> 'Současné ikony',
	'CURRENT_ICONS_EXPLAIN'		=> 'Zde můžete pracovat s&nbsp;instalovanými ikonami.',
	'CURRENT_SMILIES'			=> 'Současné smajlíky',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Zde můžete pracovat s&nbsp;instalovanými smajlíky.',

	'DISPLAY_ON_POSTING'	=> 'Zobrazit při odesílání příspěvku',
	'DISPLAY_POSTING'			=> 'Zobrazit',
	'DISPLAY_POSTING_NO'		=> 'Nezobrazit',

	'EDIT_ICONS'				=> 'Upravit ikony',
	'EDIT_SMILIES'				=> 'Upravit smajlíky',
	'EMOTION'					=> 'Emoce',
	'EXPORT_ICONS'				=> 'Exportovat a stáhnout icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sKliknutím na tento odkaz bude konfigurační soubor pro instalované ikony zabalen do souboru <samp>icons.pak</samp>, které lze po stažení použít pro vytvoření <samp>.zip</samp> nebo <samp>.tgz</samp> archivu, obsahujícího všechny vaše ikony a tento <samp>icons.pak</samp> konfiguračním souborem%s.',
	'EXPORT_SMILIES'			=> 'Exportovat a stáhnout smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sKliknutím na tento odkaz bude konfigurační soubor pro instalované smajlíky zabalen do souboru <samp>smilies.pak</samp>, které lze po stažení použít pro vytvoření <samp>.zip</samp> nebo <samp>.tgz</samp> archivu, obsahujícího všechny vaše smajlíky a tento <samp>smilies.pak</samp> konfiguračním souborem%s.',

	'FIRST'			=> 'První',

	'ICONS_ADD'					=> 'Přidat novou ikonu',
	'ICONS_ADDED'			=> array(
		0	=> 'Nebyla přidaná žádná ikona.',
		1	=> 'Ikona byla úspěšně přidána.',
		2	=> 'Ikony byly úspěšně přidány.',
	),
	'ICONS_CONFIG'			=> 'Nastavení ikon',
	'ICONS_DELETED'			=> 'Ikona byla odstraněna.',
	'ICONS_EDIT'				=> 'Upravit ikonu',
	'ICONS_EDITED'			=> array(
		0	=> 'Nebyla aktualizovaná žádná ikona.',
		1	=> 'Ikona byla úspěšně aktualizována.',
		2	=> 'Ikony byly úspěšně aktualizovány.',
		3	=> 'Ikony byly úspěšně aktualizovány.',
	),
	'ICONS_HEIGHT'			=> 'Výška ikony',
	'ICONS_IMAGE'				=> 'Obrázek ikony',
	'ICONS_IMPORTED'		=> 'Sada ikon byla nainstalována.',
	'ICONS_IMPORT_SUCCESS'	=> 'Sada ikon byla importována.',
	'ICONS_LOCATION'				=> 'Umístění ikony',
	'ICONS_NOT_DISPLAYED'		=> 'Následující ikony nejsou zobrazeny na stránce pro psaní příspěvků',
	'ICONS_ORDER'				=> 'Pořadí ikon',
	'ICONS_URL'					=> 'Soubor obrázku ikony',
	'ICONS_WIDTH'				=> 'Šířka ikony',
	'IMPORT_ICONS'			=> 'Instalovat sadu ikon',
	'IMPORT_SMILIES'		=> 'Instalovat sadu smajlíků',

	'KEEP_ALL'			=> 'Ponechat vše',

	'MASS_ADD_SMILIES'	=> 'Přidat více smajlíků',

	'NO_ICONS_ADD'		=> 'Nejsou dostupné žádné ikony pro přidání.',
	'NO_ICONS_EDIT'		=> 'Nejsou dostupné žádné ikony pro úpravu.',
	'NO_ICONS_EXPORT'	=> 'Nemáte žádné ikony na vytvoření smajlíku.',
	'NO_ICONS_PAK'		=> 'Nebyl nalezen žádný balík ikon.',
	'NO_SMILIES_ADD'	=> 'Nejsou dostupné žádné smajlíky pro přidání.',
	'NO_SMILIES_EDIT'	=> 'Nejsou dostupné žádné smajlíky pro úpravu.',
	'NO_SMILIES_EXPORT'	=> 'Nemáte žádné smajlíky na vytvoření balíku.',
	'NO_SMILIES_PAK'	=> 'Nebyl nalezen žádný balík smajlíků.',

	'PAK_FILE_NOT_READABLE'		=> 'Nelze přečíst <samp>.pak</samp> soubor.',

	'REPLACE_MATCHES'	=> 'Nahradit odpovídající hodnoty',

	'SELECT_PACKAGE'			=> 'Vybrat sadu',
	'SMILIES_ADD'					=> 'Přidat nový smajlík',
	'SMILIES_ADDED'				=> array(
		0	=> 'Nebyl přidán žádný smajlík.',
		1	=> 'Smajlík byl úspěšně přidán.',
		2	=> 'Smajlíci byli úspěšně přidáni.',
		3	=> 'Smajlíci byli úspěšně přidáni.',
	),
	'SMILIES_CODE'				=> 'Kód smajlíku',
	'SMILIES_CONFIG'			=> 'Nastavení smajlíků',
	'SMILIES_DELETED'			=> 'Smajlík byl odstraněn.',
	'SMILIES_EDIT'				=> 'Upravit smajlík',
	'SMILIE_NO_CODE'			=> 'Smajlík „%s“ byl ignorován, protože nebyl zadán žádný kód.',
	'SMILIE_NO_EMOTION'		=> 'Smajlík „%s“ byl ignorován, protože nebyl zadána žádná emoce.',
  'SMILIE_NO_FILE'			=> 'Smajlík „%s“ byl ignorován, protože nebyl nalezen soubor.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Žádný smajlík nebyl upraven.',
		1	=> 'Smajlík byl úspěšně upraven.',
		2	=> 'Smajlíci byli úspěšně upraveni.',
		3	=> 'Smajlíci byli úspěšně upraveni.',
	),
	'SMILIES_EMOTION'			=> 'Emoce',
	'SMILIES_HEIGHT'			=> 'Výška smajlíku',
	'SMILIES_IMAGE'				=> 'Obrázek smajlíku',
	'SMILIES_IMPORTED'		=> 'Sada smajlíků byla nainstalována.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Sada smajlíků byla naimportována.',
	'SMILIES_LOCATION'		=> 'Umístění smajlíku',
	'SMILIES_NOT_DISPLAYED'		=> 'Následující smajlíky nejsou zobrazeny na stránce k&nbsp;odeslání zprávy.',
	'SMILIES_ORDER'				=> 'Pořadí',
	'SMILIES_URL'					=> 'Obrázek smajlíku',
	'SMILIES_WIDTH'				=> 'Šířka smajlíku',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Bylo dosaženo maximálního počtu %d smajlíku.',
		2	=> 'Bylo dosaženo maximálního počtu %d smajlíků.',
		3	=> 'Bylo dosaženo maximálního počtu %d smajlíků.',
	),

	'WRONG_PAK_TYPE'	=> 'Zvolený balík neobsahuje potřebná data.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Z tohoto panelu můžete přidávat, upravovat nebo odstraňovat slova, která budou automaticky cenzurována při odesílání příspěvku. Uživatelé si ale budou moci vybrat tyto slova jako uživatelské jméno při registrace. Zástupný znak (*) je možné použít pro nalezení shody, např. *ekonom* odpovídá neekonomické, ekonom* bude odpovídat ekonomie, atd.',
	'ADD_WORD'				=> 'Přidat nové slovo',

	'EDIT_WORD'		=> 'Upravit cenzurované slovo',
	'ENTER_WORD'	=> 'Musíte vložit slovo a jeho náhradu.',

	'NO_WORD'	=> 'Nebyla zvolena žádná slova pro úpravu.',

	'REPLACEMENT'	=> 'Náhrada',

	'UPDATE_WORD'	=> 'Upravit cenzurované slovo',

	'WORD'				=> 'Slovo',
	'WORD_ADDED'		=> 'Cenzurovaný výraz byl přidán.',
	'WORD_REMOVED'		=> 'Cenzurovaný výraz byl odstraněn.',
	'WORD_UPDATED'		=> 'Cenzurovaný výraz byl upraven.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Na této stránce můžete spravovat hodnosti. Můžete také vytvořit zvláštní hodnosti, které uživatelům budou přirazeny přes uživatelskou administraci.',
	'ADD_RANK'				=> 'Přidat novou hodnost',

	'MUST_SELECT_RANK'		=> 'Musíte vybrat hodnost.',

	'NO_ASSIGNED_RANK'		=> 'Nebyla přidělená zvláštní hodnost.',
	'NO_RANK_TITLE'			=> 'Nezvolili jste název hodnosti.',
	'NO_UPDATE_RANKS'		=> 'Hodnost byla odstraněna. Neaktualizovaly se ale účty s&nbsp;touto hodností, budete muset ručně upravit tuto hodnost na jejich účtech.',

	'RANK_ADDED'			=> 'Byla přidána nová hodnost.',
	'RANK_IMAGE'			=> 'Obrázek hodnosti',
	'RANK_IMAGE_EXPLAIN'	=> 'Zde můžete definovat malý obrázek, který bude zobrazen u&nbsp;hodnosti. Cesta je relativní k&nbsp;základní složce phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(používána)',
	'RANK_MINIMUM'			=> 'Minimální počet příspěvků',
	'RANK_REMOVED'			=> 'Hodnost byla odstraněna.',
	'RANK_SPECIAL'			=> 'Nastavit jako zvláštní hodnost',
	'RANK_TITLE'			=> 'Název hodnosti',
	'RANK_UPDATED'			=> 'Hodnost byla upravena.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Zde můžete upravovat uživatelská jména, která nelze používat. Nepovolená jména lze definovat pomocí zástupného znaku *.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Můžete zakázat uživatelské jméno pomocí zástupného symbolu * pro shodu s&nbsp;jakýmkoliv znakem.',
	'ADD_DISALLOW_TITLE'	=> 'Přidat nepovolené jméno',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Odstranit nepovolené jméno můžete kliknutím na jméno v&nbsp;seznamu a odesláním.',
	'DELETE_DISALLOW_TITLE'		=> 'Odstranit nepovolené jméno',
	'DISALLOWED_ALREADY'		=> 'Zvolené jméno je již zakázané.',
	'DISALLOWED_DELETED'		=> 'Nepovolené jméno bylo odstraněno.',
	'DISALLOW_SUCCESSFUL'		=> 'Nepovolené jméno bylo přidáno.',

	'NO_DISALLOWED'				=> 'Žádná jména',
	'NO_USERNAME_SPECIFIED'		=> 'Nezvolili jste žádná uživatelská jména.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Zde můžete spravovat odůvodnění, která jsou použita v&nbsp;hlášeních vadných příspěvků nebo při schvalování. Vždy je nastaveno výchozí odůvodnění (označené symbolem *), které nelze odstranit. Toto odůvodnění použijte tehdy, pokud žádná vámi vytvořená odůvodnění nejsou dostatečně vhodná.',
	'ADD_NEW_REASON'		=> 'Přidat nový důvod',
	'AVAILABLE_TITLES'		=> 'Dostupné přeložené odůvodnění',

	'IS_NOT_TRANSLATED'			=> 'Odůvodnění <strong>nebylo</strong> přeloženo.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Odůvodnění <strong>nebylo</strong> přeloženo. Pokud chcete poskytnout přeložené znění, vytvořte odpovídající položku v&nbsp;části jazykových souborů pro odůvodnění o&nbsp;schválení/zamítnutí.',
	'IS_TRANSLATED'				=> 'Odůvodnění bylo přeloženo.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Odůvodnění bylo přeloženo. Pokud je název, který je zde zvolený, obsažen v&nbsp;jazykových souborech, bude použita přeložená verze.',

	'NO_REASON'					=> 'Odůvodnění nebylo nalezeno.',
	'NO_REASON_INFO'			=> 'Musíte zvolit název a popis odůvodnění.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Nelze odstranit výchozí odůvodnění „Other“.',

	'REASON_ADD'				=> 'Přidat odůvodnění',
	'REASON_ADDED'				=> 'Odůvodnění schválení/zamítnutí bylo přidáno.',
	'REASON_ALREADY_EXIST'		=> 'Odůvodnění s&nbsp;tímto názvem již existuje, zvolte jiný.',
	'REASON_DESCRIPTION'		=> 'Popis odůvodnění',
	'REASON_DESC_TRANSLATED'	=> 'Zobrazený popis odůvodnění',
	'REASON_EDIT'				=> 'Upravit odůvodnění',
	'REASON_EDIT_EXPLAIN'		=> 'Zde můžete přidat nebo upravit odůvodnění. Pokud je odůvodnění přeloženo, přeložená verze bude použita místo popisu, který zde zadáte.',
	'REASON_REMOVED'			=> 'Odůvodnění schválení/zamítnutí bylo odstraněno.',
	'REASON_TITLE'				=> 'Název odůvodnění',
	'REASON_TITLE_TRANSLATED'	=> 'Zobrazený název odůvodnění',
	'REASON_UPDATED'			=> 'Odůvodnění schválení/zamítnutí bylo aktualizováno.',

	'USED_IN_REPORTS'		=> 'Použito v&nbsp;hlášeních',
));
