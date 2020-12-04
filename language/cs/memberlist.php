<?php
/** 
*
* memberlist [Čeština]
*
* @package language
* @version $Id: memberlist.php 498 2009-11-17 20:45:14Z ameeck $
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Nejvíce aktivní fórum',
	'ACTIVE_IN_TOPIC'		=> 'Nejvíce aktivní téma',
	'ADD_FOE'				=> 'Přidat nepřítele',
	'ADD_FRIEND'			=> 'Přidat přítele',
	'AFTER'					=> 'Po',

	'ALL'					=> 'Vše',

	'BEFORE'				=> 'Před',

	'CC_SENDER'				=> 'Poslat kopii mailu sám sobě',
	'CONTACT_ADMIN'			=> 'Kontaktovat administrátora fóra',

	'DEST_LANG'				=> 'Jazyk',
	'DEST_LANG_EXPLAIN'		=> 'Vyberte odpovídající jazyk (je-li dostupný) pro příjemce zprávy.',

	'EDIT_PROFILE'			=> 'Upravit profil',

	'EMAIL_BODY_EXPLAIN'	=> 'Tento e-mail bude odeslán jako prostý text, nevkládejte žádné HTML nebo BBCode. Adresa pro odpověď na tento e-mail bude nastavena na vaši.',
	'EMAIL_DISABLED'		=> 'Omlouváme se, ale všechny e-mailové služby na tomto fóru byly vypnuty.',
	'EMAIL_SENT'			=> 'E-mail byl odeslán.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Tento e-mail bude odeslán jako prostý text, nevkládejte žádné HTML nebo BBCode. Informace o&nbsp;tématu jsou již obsažené v&nbsp;e-mailu. Adresa na odpověď pro tento e-mail bude nastavena na vaši.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Musíte vložit platnou e-mailovou adresu.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Musíte vložit zprávu.',
	'EMPTY_MESSAGE_IM'    	=> 'Musíte vložit zprávu, která má být odeslána.',
	'EMPTY_NAME_EMAIL'		=> 'Musíte vložit vlastní jméno příjemce.',
	'EMPTY_SENDER_EMAIL'	=> 'Musíte vložit platnou e-mailovou adresu.',
	'EMPTY_SENDER_NAME'		=> 'Musíte vložit jméno.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Musíte zvolit předmět pro tuto zprávu.',
	'EQUAL_TO'				=> 'Se rovná',

	'FIND_USERNAME_EXPLAIN'	=> 'Použijte tento formulář pro vyhledání konkrétních uživatelů. Nemusíte vyplňovat všechna pole. Jako zástupný znak použijte *. Pro data použijte formát rrrr-mm-dd, např. 2002-01-01. Použijte zaškrtávací políčka pro vybrání jednoho nebo více uživatelů.',
	'FLOOD_EMAIL_LIMIT'		=> 'Nemůžete odeslat další e-mail tak brzy po předchozím, zkuste to prosím znovu později.',

	'GROUP_LEADER'			=> 'Moderátor skupiny',

	'HIDE_MEMBER_SEARCH'	=> 'Skrýt hledání členů',

	'IM_ADD_CONTACT'		=> 'Přidat kontakt',
	'IM_DOWNLOAD_APP'		=> 'Stáhnout aplikaci',
	'IM_JABBER'				=> 'Berte na vědomí, že uživatelé mohou mít zvoleno nepřijímat nevyžádané instatní zprávy.',
	'IM_JABBER_SUBJECT'		=> 'Toto je automatizovaná zpráva, Neodpovídejte na ni! Zpráva od uživatele %1$s z %2$s',
	'IM_MESSAGE'			=> 'Vaše zpráva',
	'IM_NAME'				=> 'Vaše jméno',
	'IM_NO_DATA'         	=> 'Neexistují žádné vyhovující kontakty na tohoto uživatele.',
	'IM_NO_JABBER'			=> 'Omlouváme se, přímé zprávy pro uživatele Jabberu nejsou na tomto fóru podporovány. Budete si muset stáhnout Jabber klienta pro zkontaktování uživatele na Jabber účtu uvedeném výše.',
	'IM_RECIPIENT'			=> 'Příjemce',
	'IM_SEND'				=> 'Odeslat zprávu',
	'IM_SEND_MESSAGE'		=> 'Odeslat zprávu',
	'IM_SENT_JABBER'		=> 'Vaše zpráva uživateli %1$s byla odeslána.',
	'IM_USER'			=> 'Poslat instantní zprávu',

	'LAST_ACTIVE'				=> 'Naposledy aktivní',
	'LESS_THAN'					=> 'Méně než',
	'LIST_USERS'				=> array(
		1	=> '%d uživatel',
		2	=> '%d uživatelé',
		3	=> '%d uživatelů',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Pro zobrazení týmu musíte být zaregistrováni a přihlášeni.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Pro přístup k&nbsp;seznamu uživatelů musíte být zaregistrováni a přihlášeni.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Pro hledání uživatelů musíte být zaregistrováni a přihlášeni.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Pro zobrazení profilů musíte být zaregistrováni a přihlášeni.',

  'MANAGE_GROUP'			=> 'Spravovat skupinu',
	'MORE_THAN'				=> 'Více než',

	'NO_CONTACT_FORM'		=> 'Formulář pro kontaktování administrátora není k dispozici.',
	'NO_CONTACT_PAGE'		=> 'Stránka pro kontaktování administrátora není k dispozici.',
	'NO_EMAIL'				=> 'Nejste oprávněni posílat e-maily tomuto uživateli.',
	'NO_VIEW_USERS'			=> 'Nejste oprávněni vidět seznam členů nebo profily.',

	'ORDER'					=> 'Pořadí',
	'OTHER'					=> 'Další',

	'POST_IP'				=> 'Zasláno z IP/domény',

	'REAL_NAME'				=> 'Jméno příjemce',
	'RECIPIENT'				=> 'Příjemce',
	'REMOVE_FOE'			=> 'Odstranit nepřítele',
	'REMOVE_FRIEND'			=> 'Odstranit přítele',
		
	'SELECT_MARKED'			=> 'Vybrat označené',
	'SELECT_SORT_METHOD'	=> 'Vyberte způsob řazení',
	'SENDER_EMAIL_ADDRESS'	=> 'Vaše e-mailová adresa',
	'SENDER_NAME'			=> 'Vaše jméno',
	'SEND_ICQ_MESSAGE'		=> 'Poslat ICQ zprávu',
	'SEND_IM'				=> 'Instant Messaging',
	'SEND_JABBER_MESSAGE'	=> 'Poslat Jabber zprávu',
	'SEND_MESSAGE'			=> 'Zpráva',
	'SEND_YIM_MESSAGE'		=> 'Poslat YIM zprávu',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Naposledy aktivní',
	'SORT_POST_COUNT'		=> 'Počet příspěvků',

	'USERNAME_BEGINS_WITH'	=> 'Uživatelské jméno začíná na',
	'USER_ADMIN'			=> 'Spravovat uživatele',
	'USER_BAN'            => 'Banování',
	'USER_FORUM'			=> 'Uživatelské statistiky',	
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Zatím nebylo odesláno žádné připomenutí',
		1		=> 'Odesláno %1$d připomenutí<br />» %2$s',
		2		=> 'Odeslána %1$d připomenutí<br />» %2$s',
		3		=> 'Odesláno %1$d připomenutí<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Přítomnost na fóru',
	'USERS_PER_PAGE'		=> 'Uživatelů na stránku',

	'VIEWING_PROFILE'		=> 'Prohlížení profilu – %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Zobrazit profil na Facebooku',
	'VIEW_SKYPE_PROFILE'	=> 'Zobrazit Skype profil',
	'VIEW_TWITTER_PROFILE'	=> 'Zobrazit profil na Twitteru',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Zobrazit YouTube kanál',
));
