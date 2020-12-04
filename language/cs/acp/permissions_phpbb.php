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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Akce',
	'ACL_CAT_CONTENT'		=> 'Obsah',
	'ACL_CAT_FORUMS'		=> 'Fóra',
	'ACL_CAT_MISC'			=> 'Různé',
	'ACL_CAT_PERMISSIONS'	=> 'Oprávnění',
	'ACL_CAT_PM'			=> 'Soukromé zprávy',
	'ACL_CAT_POLLS'			=> 'Hlasování',
	'ACL_CAT_POST'			=> 'Příspěvky',
	'ACL_CAT_POST_ACTIONS'	=> 'Akce příspěvků',
	'ACL_CAT_POSTING'		=> 'Přispívání',
	'ACL_CAT_PROFILE'		=> 'Profil',
	'ACL_CAT_SETTINGS'		=> 'Nastavení',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Akce témat',
	'ACL_CAT_USER_GROUP'	=> 'Uživatelé &amp; Skupiny',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Může zobrazit profily, seznam členů a seznam uživatelů online',
	'ACL_U_CHGNAME'		=> 'Může změnit uživatelské jméno',
	'ACL_U_CHGPASSWD'	=> 'Může změnit heslo',
	'ACL_U_CHGEMAIL'	=> 'Může změnit e-mailovou adresu',
	'ACL_U_CHGAVATAR'	=> 'Může změnit avatar',
	'ACL_U_CHGGRP'		=> 'Může změnit výchozí uživatelskou skupinu',
	'ACL_U_CHGPROFILEINFO'	=> 'Může měnit informace v profilových polích',

	'ACL_U_ATTACH'		=> 'Může připojovat soubory',
	'ACL_U_DOWNLOAD'	=> 'Může stahovat soubory',
	'ACL_U_SAVEDRAFTS'	=> 'Může ukládat rozepsané zprávy',
	'ACL_U_CHGCENSORS'	=> 'Může vypnout cenzuru slov',
	'ACL_U_SIG'			=> 'Může používat podpisy',
	'ACL_U_EMOJI'		=> 'Může použít emoji v předmětu tématu',

	'ACL_U_SENDPM'		=> 'Může posílat soukromé zprávy',
	'ACL_U_MASSPM'		=> 'Může odesílat soukromé zprávy více uživatelům',
	'ACL_U_MASSPM_GROUP'=> 'Může posílat soukromé zprávy skupinám',
	'ACL_U_READPM'		=> 'Může číst soukromé zprávy',
	'ACL_U_PM_EDIT'		=> 'Může upravovat vlastní soukromé zprávy',
	'ACL_U_PM_DELETE'	=> 'Může odstranit soukromé zprávy z vlastní složky',
	'ACL_U_PM_FORWARD'	=> 'Může přeposílat soukromé zprávy',
	'ACL_U_PM_EMAILPM'	=> 'Může e-mailovat soukromé zprávy',
	'ACL_U_PM_PRINTPM'	=> 'Může tisknout soukromé zprávy',
	'ACL_U_PM_ATTACH'	=> 'Může k soukromým zprávám připojovat soubory',
	'ACL_U_PM_DOWNLOAD'	=> 'Může stahovat soubory v soukromých zprávách',
	'ACL_U_PM_BBCODE'	=> 'Může používat BBKódy v soukromých zprávách',
	'ACL_U_PM_SMILIES'	=> 'Může používat smajlíky v soukromých zprávách',
	'ACL_U_PM_IMG'		=> 'Může používat BBKód [img] v soukromých zprávách',
	'ACL_U_PM_FLASH'	=> 'Může používat BBKód [flash] v soukromých zprávách',

	'ACL_U_SENDEMAIL'	=> 'Může posílat e-maily',
	'ACL_U_SENDIM'		=> 'Může posílat chatovací zprávy',
	'ACL_U_IGNOREFLOOD'	=> 'Může ignorovat dobu mezi odesíláním zpráv',
	'ACL_U_HIDEONLINE'	=> 'Může skrýt svůj online stav',
	'ACL_U_VIEWONLINE'	=> 'Může vidět skryté uživatele, kteří jsou online',
	'ACL_U_SEARCH'		=> 'Může používat na fóru vyhledávání',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Může vidět fórum',
	'ACL_F_LIST_TOPICS' => 'Může vidět témata',
	'ACL_F_READ'		=> 'Může číst fórum',
	'ACL_F_SEARCH'		=> 'Může ve fóru hledat',
	'ACL_F_SUBSCRIBE'	=> 'Může sledovat fórum',
	'ACL_F_PRINT'		=> 'Může tisknout témata',
	'ACL_F_EMAIL'		=> 'Může e-mailovat témata',
	'ACL_F_BUMP'		=> 'Může oživovat témata',
	'ACL_F_USER_LOCK'	=> 'Může zamykat vlastní témata',
	'ACL_F_DOWNLOAD'	=> 'Může stahovat soubory',
	'ACL_F_REPORT'		=> 'Může nahlašovat příspěvky',

	'ACL_F_POST'		=> 'Může vytvářet nová témata',
	'ACL_F_STICKY'		=> 'Může posílat důležité zprávy',
	'ACL_F_ANNOUNCE'	=> 'Může posílat oznámení',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'Může posílat globální oznámení',
	'ACL_F_REPLY'		=> 'Může posílat odpovědi do témat',
	'ACL_F_EDIT'		=> 'Může upravovat vlastní příspěvky',
	'ACL_F_DELETE'		=> 'Může natrvalo mazat vlastní příspěvky',
	'ACL_F_SOFTDELETE'	=> 'Může dočasně mazat vlastní příspěvky<br /><em>Moderátoři, kteří mají oprávnění ke schvalování příspěvků, můžou obnovovat dočasně smazané příspěvky.</em>',
	'ACL_F_IGNOREFLOOD' => 'Může ignorovat dobu mezi odesíláním příspěvků',
	'ACL_F_POSTCOUNT'	=> 'Připočítávat uživatelům příspěvky odeslané v tomto fóru<br /><em>Toto nastavení má vliv jen na nové příspěvky.</em>',
	'ACL_F_NOAPPROVE'	=> 'Může přispívat bez schválení',

	'ACL_F_ATTACH'		=> 'Může připojovat soubory',
	'ACL_F_ICONS'		=> 'Může používat ikony témat/příspěvků',
	'ACL_F_BBCODE'		=> 'Může používat BBKódy',
	'ACL_F_FLASH'		=> 'Může používat BBKód [flash]',
	'ACL_F_IMG'			=> 'Může používat BBKód [img]',
	'ACL_F_SIGS'		=> 'Může používat podpisy',
	'ACL_F_SMILIES'		=> 'Může používat smajlíky',

	'ACL_F_POLL'		=> 'Může vytvářet hlasování',
	'ACL_F_VOTE'		=> 'Může hlasovat v hlasováních',
	'ACL_F_VOTECHG'		=> 'Může změnit existující hlas',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Může upravovat příspěvky',
	'ACL_M_DELETE'		=> 'Může natrvalo mazat příspěvky',
	'ACL_M_SOFTDELETE'	=> 'Může dočasně smazat příspěvky<br /><em>Moderátoři, kteří mají oprávnění ke schvalování příspěvků, můžou obnovovat dočasně smazané příspěvky.</em>',
	'ACL_M_APPROVE'		=> 'Může schvalovat a obnovovat příspěvky',
	'ACL_M_REPORT'		=> 'Může uzavírat a mazat hlášení',
	'ACL_M_CHGPOSTER'	=> 'Může změnit autora příspěvku',

	'ACL_M_MOVE'	=> 'Může přesunovat témata',
	'ACL_M_LOCK'	=> 'Může zamykat témata',
	'ACL_M_SPLIT'	=> 'Může rozdělovat témata',
	'ACL_M_MERGE'	=> 'Může spojovat témata',

	'ACL_M_INFO'	=> 'Může zobrazit informace o příspěvku',
	'ACL_M_WARN'	=> 'Může udělovat varování<br /><em>Toto nastavení je pouze globální a není založeno na fórech.</em>', // This moderator setting is only global (and not local)
  'ACL_M_PM_REPORT'	=> 'Může uzavírat a mazat hlášení soukromých zpráv<br /><em>Tohle nastavení je pouze globální a není založeno na fórech.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Může spravovat bany<br /><em>Toto nastavení je pouze globální a není založeno na fórech.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Může měnit nastavení fóra a kontrolovat aktualizace',
	'ACL_A_SERVER'		=> 'Může měnit nastavení serveru/komunikace',
	'ACL_A_JABBER'		=> 'Může měnit nastavení Jabberu',
	'ACL_A_PHPINFO'		=> 'Může zobrazit nastavení php',

	'ACL_A_FORUM'		=> 'Může spravovat fóra',
	'ACL_A_FORUMADD'	=> 'Může přidávat nová fóra',
	'ACL_A_FORUMDEL'	=> 'Může mazat fóra',
	'ACL_A_PRUNE'		=> 'Může pročišťovat fóra',

	'ACL_A_ICONS'		=> 'Může upravovat ikony témat a příspěvků a smajlíky',
	'ACL_A_WORDS'		=> 'Může upravovat cenzurovaná slova',
	'ACL_A_BBCODE'		=> 'Může definovat BBKódy',
	'ACL_A_ATTACH'		=> 'Může měnit nastavení související s přílohami',

	'ACL_A_USER'		=> 'Může spravovat uživatele<br /><em>Zahrnuje i zobrazení browser agentu uživatele na stránce Kdo je online.</em>',
	'ACL_A_USERDEL'		=> 'Může mazat/pročišťovat uživatele',
	'ACL_A_GROUP'		=> 'Může spravovat skupiny',
	'ACL_A_GROUPADD'	=> 'Může přidávat nové skupiny',
	'ACL_A_GROUPDEL'	=> 'Může mazat skupiny',
	'ACL_A_RANKS'		=> 'Může spravovat hodnosti',
	'ACL_A_PROFILE'		=> 'Může spravovat vlastní profilová pole',
	'ACL_A_NAMES'		=> 'Může spravovat nepovolená jména',
	'ACL_A_BAN'			=> 'Může spravovat bany',

	'ACL_A_VIEWAUTH'	=> 'Může zobrazit masky oprávnění',
	'ACL_A_AUTHGROUPS'	=> 'Může měnit oprávnění pro jednotlivé skupiny',
	'ACL_A_AUTHUSERS'	=> 'Může měnit oprávnění pro jednotlivé uživatele',
	'ACL_A_FAUTH'		=> 'Může upravovat oprávnění fóra',
	'ACL_A_MAUTH'		=> 'Může upravovat moderátorská oprávnění',
	'ACL_A_AAUTH'		=> 'Může upravovat administrátorská oprávnění',
	'ACL_A_UAUTH'		=> 'Může upravovat uživatelská oprávnění',
	'ACL_A_ROLES'		=> 'Může spravovat role',
	'ACL_A_SWITCHPERM'	=> 'Může používat oprávnění ostatních',

	'ACL_A_STYLES'		=> 'Může spravovat vzhledy',
	'ACL_A_EXTENSIONS'	=> 'Může spravovat rozšíření',
	'ACL_A_VIEWLOGS'	=> 'Může zobrazit záznamy',
	'ACL_A_CLEARLOGS'	=> 'Může pročišťovat záznamy (logy)',
	'ACL_A_MODULES'		=> 'Může spravovat moduly',
	'ACL_A_LANGUAGE'	=> 'Může spravovat jazykové balíčky',
	'ACL_A_EMAIL'		=> 'Může posílat hromadné e-maily',
	'ACL_A_BOTS'		=> 'Může spravovat boty',
	'ACL_A_REASONS'		=> 'Může spravovat důvody pro hlášení a zamítnutí',
	'ACL_A_BACKUP'		=> 'Může zálohovat/obnovovat databázi',
	'ACL_A_SEARCH'		=> 'Může spravovat vyhledávací backendy a nastavení',
));
