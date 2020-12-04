<?php
/**
*
* posting [Čeština]
*
* @package language
* @version $Id: posting.php 499 2009-11-19 11:28:51Z ameeck $
* @copyright (c)  2007 phpBB.cz
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
	'ADD_ATTACHMENT'			=> 'Příloha',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Pokud si přejete přidat jednu nebo více příloh, použijte následující tlačítko.',
	'ADD_FILE'					=> 'Přiložit soubor',
	'ADD_POLL'					=> 'Anketa',
	'ADD_POLL_EXPLAIN'			=> 'Pokud nechcete vytvořit anketu, nechte pole prázdná',
	'ALREADY_DELETED'			=> 'Omlouváme se, ale tato zpráva byla již smazána.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> 'Komentář přílohy obsahuje nepovolené znaky (Emoji).',
  'ATTACH_DISK_FULL'			=> 'Na disku není dostatek místa pro uložení této přílohy.',
	'ATTACH_QUOTA_REACHED'		=> 'Omlouváme se, ale bylo dosaženo maximální velikosti příloh.',
	'ATTACH_SIG'				=> 'Přiložit podpis (podpisy mohou být nastaveny v&nbsp;uživatelském panelu)',

	'BBCODE_A_HELP'				=> 'Příloha: [attachment=]název souboru.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Tučné: [b]text[/b]  (alt+b)',
	'BBCODE_C_HELP'				=> 'Zobrazení kódu: [code]code[/code]  (alt+c)',
	'BBCODE_D_HELP'				=> 'Flash: [flash=šířka,výška]http://url[/flash]  (alt+d)',
	'BBCODE_F_HELP'				=> 'Velikost písma: [size=85]drobný text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s je <em>vypnutý</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s je <em>zapnutý</em>',
	'BBCODE_I_HELP'				=> 'Kurzíva: [i]text[/i]  (alt+i)',
	'BBCODE_L_HELP'				=> 'Seznam: [list]text[/list]  (alt+l)',
	'BBCODE_LISTITEM_HELP'		=> 'Položka seznamu: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Uspořádaný seznam: [list=]text[/list]  (alt+o)',
	'BBCODE_P_HELP'				=> 'Vložit obrázek: [img]http://image_url[/img]  (alt+p)',
	'BBCODE_Q_HELP'				=> 'Citace: [quote]text[/quote]  (alt+q)',
	'BBCODE_S_HELP'				=> 'Barva písma: [color=red]text[/color] nebo [color=#FF0000]text[/color]',
	'BBCODE_U_HELP'				=> 'Podtržené: [u]text[/u]  (alt+u)',
	'BBCODE_W_HELP'				=> 'Vložit URL: [url]http://url[/url] nebo [url=http://url]text URL[/url]  (alt+w)',
	'BBCODE_Y_HELP'				=> 'Seznam: Přidá další položku seznamu',
	'BUMP_ERROR'				=> 'Nemůžete oživit téma tak brzy po odeslání předchozího příspěvku.',

	'CANNOT_DELETE_REPLIED'		=> 'Omlouváme se, ale můžete mazat jen příspěvky, na které ještě nebylo odpovězeno.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Tento příspěvek byl zamknutý. Nemůžete tento příspěvek upravit.',
	'CANNOT_EDIT_TIME'			=> 'Nemůžete tento příspěvek upravit nebo smazat',
	'CANNOT_POST_ANNOUNCE'		=> 'Omlouváme se, ale nemůžete posílat Oznámení.',
	'CANNOT_POST_STICKY'		=> 'Omlouváme se, ale nemůžete odesílat Důležitá témata.',
	'CHANGE_TOPIC_TO'			=> 'Změnit typ tématu na',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Vaše zpráva obsahuje %1$d znak.',
		2	=> 'Vaše zpráva obsahuje %1$d znaky.',
		3	=> 'Vaše zpráva obsahuje %1$d znaků.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Váš podpis obsahuje %1$d znak.',
		2	=> 'Váš podpis obsahuje %1$d znaky.',
		3	=> 'Váš podpis obsahuje %1$d znaků.',
	),
	'CLOSE_TAGS'				=> 'Zavřít značky',
	'CURRENT_TOPIC'				=> 'Aktuální téma',

	'DELETE_FILE'				=> 'Smazat soubor',
	'DELETE_MESSAGE'			=> 'Smazat zprávu',
	'DELETE_MESSAGE_CONFIRM'	=> 'Opravdu chcete smazat tuto zprávu?',
	'DELETE_OWN_POSTS'			=> 'Omlouváme se, ale můžete mazat jen vaše příspěvky.',
	'DELETE_PERMANENTLY'		=> 'Smazat natrvalo',
	'DELETE_POST_CONFIRM'		=> 'Opravdu chcete smazat tento příspěvek?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Opravdu chcete <strong>natrvalo</strong> smazat tento příspěvek?',
 	'DELETE_POST_PERMANENTLY'	=> array(
 		1	=> 'Smazat trvale tento příspěvek bez možnosti jeho obnovení',
    2 => 'Smazat trvale tyto %1$d příspěvky bez možnosti jejich obnovení',
    3 => 'Smazat trvale těchto %1$d příspěvků bez možnosti jejich obnovení',
 	),
	'DELETE_POSTS_CONFIRM'		=> 'Opravdu chcete smazat tyto příspěvky?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Opravdu chcete <strong>natrvalo</strong> smazat tyto příspěvky?',
	'DELETE_REASON'				=> 'Důvod smazání',
	'DELETE_REASON_EXPLAIN'		=> 'Zadaný důvod smazání bude viditelný pro moderátory.',
	'DELETE_POST_WARN'			=> 'Smazat tento příspěvek',
	'DELETE_TOPIC_CONFIRM'		=> 'Opravdu chcete smazat toto téma?',
	'DELETE_TOPIC_PERMANENTLY'	=> 'Téma bude trvale smazáno a nepůjde ho obnovit',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Téma bude trvale smazáno a nepůjde ho obnovit',
		2	=> 'Tyto 1$d témata budou trvale smazány a nepůjdou obnovit',
		3	=> 'Těchto 1$d témat bude trvale smazáno a nepůjde obnovit',
 	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Opravdu chcete <strong>natrvalo</strong> smazat toto téma?',
	'DELETE_TOPICS_CONFIRM'		=> 'Opravdu chcete smazat tato témata?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Opravdu chcete <strong>natrvalo</strong> smazat tato témata?',
	'DISABLE_BBCODE'			=> 'Zakázat BBCode',
	'DISABLE_MAGIC_URL'			=> 'Zakázat URL adresy v&nbsp;tomto příspěvku',
	'DISABLE_SMILIES'			=> 'Zakázat smajlíky',
	'DISALLOWED_CONTENT'      => 'Nahraný soubor byl odmínut protože byl identifikován jako možný útok.',
	'DISALLOWED_EXTENSION'		=> 'Přípona %s není povolena',
	'DRAFT_LOADED'				=> 'Koncept byl načten, nyní můžete dopsat váš příspěvek.<br />Váš koncept bude po odeslání příspěvku smazán.',
	'DRAFT_LOADED_PM'			=> 'Koncept byl načten, nyní můžete dopsat váši soukromou zprávu.<br />Váš koncept bude po odeslání soukromé zprávy smazán.',
	'DRAFT_SAVED'				=> 'Koncept byl uložen.',
	'DRAFT_TITLE'				=> 'Název konceptu',

	'EDIT_REASON'				=> 'Důvod úpravy příspěveku',
	'EMPTY_FILEUPLOAD'			=> 'Přiložený soubor je prázdný',
	'EMPTY_MESSAGE'				=> 'Musíte vložit zprávu.',
	'EMPTY_REMOTE_DATA'			=> 'Soubor nemohl být přiložen. Prosím, zkuste soubor přiložit ručně.',

	'FLASH_IS_OFF'				=> '[flash] je <em>vypnutý</em>',
	'FLASH_IS_ON'				=> '[flash] je <em>zapnutý</em>',
	'FLOOD_ERROR'				=> 'Nemůžete vytvořit příspěvek tak brzo po předešlém.',
	'FONT_COLOR'				=> 'Barva písma',
	'FONT_COLOR_HIDE'			=> 'Skrýt barvu písma',
	'FONT_HUGE'					=> 'Obrovské',
	'FONT_LARGE'				=> 'Velké',
	'FONT_NORMAL'				=> 'Výchozí',
	'FONT_SIZE'					=> 'Velikost písma',
	'FONT_SMALL'				=> 'Malé',
	'FONT_TINY'					=> 'Drobné',

	'GENERAL_UPLOAD_ERROR'		=> 'Nemohu odeslat soubor na %s',

	'IMAGES_ARE_OFF'			=> '[img] je <em>vypnutý</em>',
	'IMAGES_ARE_ON'				=> '[img] je <em>zapnutý</em>',
	'INVALID_FILENAME'			=> '%s je neplatný název',

	'LOAD'						=> 'Načíst',
	'LOAD_DRAFT'				=> 'Načíst koncept',
	'LOAD_DRAFT_EXPLAIN'		=> 'Zde můžete zvolit koncept, ve&nbsp;kterém chcete pokračovat. Vaše nynější zpráva bude smazána. Koncepty si můžete prohlédnout, upravit a mazat ve vašem uživatelském panelu.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Musíte se přihlásit, pokud chcete obnovovat témata v&nbsp;tomto fóru.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Musíte se přihlásit, pokud chcete mazat příspěvky v&nbsp;tomto fóru.',
  'LOGIN_EXPLAIN_SOFT_DELETE'	=> 'Musíte se přihlásit, pokud chcete skrývat příspěvky v&nbsp;tomto fóru.',
	'LOGIN_EXPLAIN_POST'		=> 'Musíte se přihlásit, pokud chcete posílat příspěvky do tohoto fóra.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Musíte se přihlásit, pokud chcete citovat příspěvky v&nbsp;tomto fóru.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Musíte se přihlásit, pokud chcete odpovědět na toto téma.',

  'MAX_ATTACHMENT_FILESIZE'	=> 'Maximální velikost na přílohu: %s.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Můžete použít jen to písmo, které nepřekračuje velikost %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Vaše flashové soubory můžou být vysoké maximálně %d pixel.',
		2	=> 'Vaše flashové soubory můžou být vysoké maximálně %d pixely.',
		3	=> 'Vaše flashové soubory můžou být vysoké maximálně %d pixelů.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Vaše flashové soubory můžou být široké maximálně %d pixel.',
		2	=> 'Vaše flashové soubory můžou být široké maximálně %d pixely.',
		3	=> 'Vaše flashové soubory můžou být široké maximálně %d pixelů.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Vaše obrázky můžou být vysoké maximálně %1$d pixel.',
		2	=> 'Vaše obrázky můžou být vysoké maximálně %1$d pixely.',
		3	=> 'Vaše obrázky můžou být vysoké maximálně %1$d pixelů.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Vaše obrázky můžou být široké maximálně %d pixel.',
		2	=> 'Vaše obrázky můžou být široké maximálně %d pixely.',
		3	=> 'Vaše obrázky můžou být široké maximálně %d pixelů.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Sem vložte vaši zprávu. Neměla by být delší než <strong>%d</strong> znak.',
		2	=> 'Sem vložte vaši zprávu. Neměla by být delší než <strong>%d</strong> znaky.',
		3	=> 'Sem vložte vaši zprávu. Neměla by být delší než <strong>%d</strong> znaků.',
	),
	'MESSAGE_DELETED'			=> 'Vaše zpráva byla odstraněna.',
	'MORE_SMILIES'				=> 'Zobrazit další smajlíky',

	'NOTIFY_REPLY'				=> 'Upozornit mě, přijde-li odpověď',
	'NOT_UPLOADED'				=> 'Soubor nemohl být přiložen.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Nemůžete odstranit možnosti hlasování',
	'NO_PM_ICON'				=> 'Žádná',
	'NO_POLL_TITLE'				=> 'Nevložili jste anketní otázku.',
	'NO_POST'					=> 'Požadovaný příspěvek neexistuje.',
	'NO_POST_MODE'				=> 'Nebyl zvolen typ odeslání',
  'NO_TEMP_DIR'				=> 'Dočasná složka nebyla nalezena nebo do ní nelze zapisovat.',

	'PARTIAL_UPLOAD'			=> 'Byla nahrána jen část přiloženého souboru.',
	'PHP_SIZE_NA'				=> 'Velikost přílohy je příliš velká.<br />Nemohu zjistit maximální velikost souboru v&nbsp;php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Velikost přílohy je příliš velká. Maximální velikost je %1$d %2$s.<br />Toto je nastaveno v&nbsp;php.ini a nemůže být změněno.',
  'PHP_UPLOAD_STOPPED'		=> 'PHP rozšíření zastavilo nahrávání souboru.',
	'PLACE_INLINE'				=> 'Umístit do příspěvku',
	'POLL_DELETE'				=> 'Smazat anketu',
	'POLL_FOR'					=> 'Délka trvání',
	'POLL_FOR_EXPLAIN'			=> '(zadejte 0 pro neomezenou dobu hlasování)',
	'POLL_MAX_OPTIONS'			=> 'Maximum možností na uživatele',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Číslo označuje počet možností v&nbsp;hlasování.',
	'POLL_OPTIONS'				=> 'Nastavení hlasování',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Každou možnost vložte na nový řádek. Můžete vložit <strong>%d</strong> možnost.',
		2	=> 'Každou možnost vložte na nový řádek. Můžete vložit až <strong>%d</strong> možnosti.',
		3	=> 'Každou možnost vložte na nový řádek. Můžete vložit až <strong>%d</strong> možností.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Každou možnost vložte na nový řádek. Můžete vložit <strong>%d</strong> možnost. Pokud odeberete nebo přidáte možnosti, všechny dříve vložené hlasy budou resetovány.',
		2	=> 'Každou možnost vložte na nový řádek. Můžete vložit až <strong>%d</strong> možnosti. Pokud odeberete nebo přidáte možnosti, všechny dříve vložené hlasy budou resetovány.',
		3	=> 'Každou možnost vložte na nový řádek. Můžete vložit až <strong>%d</strong> možností. Pokud odeberete nebo přidáte možnosti, všechny dříve vložené hlasy budou resetovány.',
	),
	'POLL_QUESTION'				=> 'Anketní otázka',
	'POLL_TITLE_TOO_LONG'       => 'Název hlasování musí být kratší než 100 znaků.',
	'POLL_TITLE_COMP_TOO_LONG'  => 'Zpracovaný název hlasování je příliš dlouhý, zkuste odstranit HTML nebo BBCode.',
	'POLL_VOTE_CHANGE'			=> 'Povolit změnu hlasu',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Pokud je povoleno, uživatelé mohou změnit svůj hlas.',
	'POSTED_ATTACHMENTS'		=> 'Odeslané přílohy',
	'POST_APPROVAL_NOTIFY'  	=> 'Budete informováni, jakmile váš příspěvek bude schválen.',
	'POST_CONFIRMATION'			=> 'Potvrzení příspěvku',
	'POST_CONFIRM_EXPLAIN'		=> 'Pro ochranu před spamem administrátor vyžaduje potvrzení odpovědi. Kód je zobrazen v&nbsp;obrázku pod touto zprávou. Pokud obrázek nevidíte, kontaktuje %s Administrátory%s.',
	'POST_DELETED'				=> 'Váš příspěvek byl odstraněn.',
	'POST_EDITED'				=> 'Váš příspěvek byl upraven.',
	'POST_EDITED_MOD'			=> 'Váš příspěvek byl upraven, ale vyžaduje schválení.',
	'POST_GLOBAL'				=> 'Globální',
	'POST_ICON'					=> 'Ikonka',
	'POST_NORMAL'				=> 'Výchozí',
	'POST_REVIEW'				=> 'Přehodnocení příspěvku',
	'POST_REVIEW_EXPLAIN'		=> 'Během doby, kdy jste psal příspěvek do tématu, přibyl další. Chcete odeslat příspěvek tak, jak je nyní?',
	'POST_REVIEW_EDIT'			=> 'Přehodnocení příspěvku',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Během doby, kdy jste upravoval příspěvek, ho upravil ještě nekdo jiný. Chcete odeslat příspěvek tak, jak je nyní?.',
	'POST_STORED'				=> 'Vaše zpráva byla odeslána.',
	'POST_STORED_MOD'			=> 'Vaše zpráva byla odeslána, ale než bude veřejně zobrazena, musí být schválena moderátorem.',
	'POST_TOPIC_AS'				=> 'Přidat téma jako',
	'PROGRESS_BAR'				=> 'Průběhová lišta',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Můžete použít jen %d úroveň citací. Tzn., že v citaci nesmí být obsažena žádná jiná citace.',
		2	=> 'Můžete použít jen %d úrovně citací.',
		3	=> 'Můžete použít jen %d úrovní citací.',
	),
	'QUOTE_NO_NESTING'			=> 'Nemůžete vkládat citace do dalších citací.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Vypršel časový limit, proto soubor nemohl být nahrán.',
	'SAVE'						=> 'Uložit',
	'SAVE_DATE'					=> 'Uložit jako',
	'SAVE_DRAFT'				=> 'Uložit koncept',
	'SAVE_DRAFT_CONFIRM'		=> 'Do konceptů se ukládá pouze předmět a text příspěvku. Ostatní prvky budou odstraněny. Přejete si uložit koncept nyní?',
	'SMILIES'					=> 'Smajlíci',
	'SMILIES_ARE_OFF'			=> 'Smajlíci jsou <em>vypnutí</em>',
	'SMILIES_ARE_ON'			=> 'Smajlíci jsou <em>zapnutí</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Časový limit Důležité/Oznámení/Globální',
	'STICK_TOPIC_FOR'			=> 'Zvolit jako důležité pro',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Zadejte 0 pro nekončící důležité/oznámení/globální. Počet dní se počítá od odeslání příspěvku.',
	'STYLES_TIP'				=> 'Tip: Styly mohou být rychle změněny pokud označíte text',

	'TOO_FEW_CHARS'				=> 'Vaše zpráva obsahuje málo znaků.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Musíte napsat alespoň %1$d znak.',
		2	=> 'Musíte napsat alespoň %1$d znaky.',
		3	=> 'Musíte napsat alespoň %1$d znaků.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Musíte vložit nejméně dvě hlasovací možnosti',
	'TOO_MANY_ATTACHMENTS'		=> 'Nemůže vložit další soubor, %d je maximum.',
	'TOO_MANY_CHARS'			=> 'Vaše zpráva obsahuje příliš mnoho znaků.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Maximum povolených znaků je %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Snažíte se vložit příliš mnoho hlasovacích možností',
	'TOO_MANY_SMILIES'			=> 'Vaše zpráva obsahuje příliš mnoho smajlíků. Je povoleno maximálně %d smajlíků.',
	'TOO_MANY_URLS'				=> 'Vaše zpráva obsahuje příliš mnoho URL adres. Je povoleno maximálně %d URL adres.',
	'TOO_MANY_USER_OPTIONS'		=> 'Zadali jste příliš mnoho možností v hlasování.',
	'TOPIC_BUMPED'				=> 'Téma bylo posunuto na první místo v seznamu témat.',

	'UNAUTHORISED_BBCODE'		=> 'Nemůžete použít určité BBCody: %s.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Vaše zpráva obsahuje následující nepodporované znaky:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Váš předmět (zprávy) obsahuje následující nepodporované znaky:<br />%s',
	'UPDATE_COMMENT'			=> 'Aktualizovat komentář',
	'URL_INVALID'				=> 'URL není platnou adresou.',
	'URL_NOT_FOUND'				=> 'Soubor nemohl být nalezen.',
	'URL_IS_OFF'				=> '[url] je <em>vypnuté</em>',
	'URL_IS_ON'					=> '[url] je <em>zapnuté</em>',
	'USER_CANNOT_BUMP'			=> 'Nemůžete oživovat témata v&nbsp;tomto fóru',
	'USER_CANNOT_DELETE'		=> 'Nemůžete odstraňovat příspěvky v&nbsp;tomto fóru',
	'USER_CANNOT_EDIT'			=> 'Nemůžete upravovat příspěvky v&nbsp;tomto fóru',
	'USER_CANNOT_REPLY'			=> 'Nemůžete odpovídat na příspěvky v&nbsp;tomto fóru',
	'USER_CANNOT_FORUM_POST'	=> 'Nemůžete odesílat příspěvky do tohoto fóra, protože toto fórum to nepodporuje.',

	'VIEW_MESSAGE'				=> '%sZobrazit vaši odeslanou zprávu%s',
	'VIEW_PRIVATE_MESSAGE'      => '%sZobrazit vaši odeslanou soukromou zprávu%s',

	'WRONG_FILESIZE'			=> 'Soubor je příliš velký. Maximální velikost je %1$d %2$s',
	'WRONG_SIZE'				=> 'Obrázek musí mít šířku alespoň %1$s pixelů, výšku %2$s pixelů a šířku nejvíce %3$s pixelů a výšku %4$s pixelů. Váš obrázek má šířku %5$s pixelů a výšku %6$s pixelů.',
));
