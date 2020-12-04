<?php
/** 
*
* acp_email [Čeština]
*
* @package language
* @version $Id: email.php 406 2008-02-27 17:17:46Z ameeck $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Zde můžete odeslat e-mail buď všem uživatelům fóra nebo určité skupině. E-mail bude odeslán z e-mailové adresy nastavené v&nbsp;administraci, se slepou kopií všem příjemcům. Pokud odesíláte zprávu velké skupině lidí, buďte trpěliví a nepřerušujte proces. Je běžné, že trvá dlouho odeslat hromadnou zprávu při velkém počtu příjemců. O ukončení odesílání budete informováni.',
	'ALL_USERS'						=> 'Všichni uživatelé',

	'COMPOSE'				=> 'Napsat novou',

	'EMAIL_SEND_ERROR'		=> 'Objevila se jedna nebo více chyb při odesílání e-mailu. Zkontrolujte %sLog chyb%s pro detailní výpisy.',
	'EMAIL_SENT'			=> 'Zpráva byla odeslána.',
	'EMAIL_SENT_QUEUE'		=> 'Tato zpráva byla zařazena do fronty pro odeslání.',

	'LOG_SESSION'			=> 'Zaznamenat odesílání do kritického logu',

	'SEND_IMMEDIATELY'		=> 'Odeslat ihned',
	'SEND_TO_GROUP'			=> 'Odeslat skupině',
	'SEND_TO_USERS'			=> 'Odeslat uživatelům',
	'SEND_TO_USERS_EXPLAIN'	=> 'Vložení libovolného jména zruší platnost jakékoliv výše vybrané skupiny. Uživatelská jména vkládejte jednotlivě na řádky pod sebe.',

  'MAIL_BANNED'			=> 'Odeslat e-mail zabanovaným uživatelům',
  'MAIL_BANNED_EXPLAIN'	=> 'Pokud posíláte hromadný e-mail skupině, zde si můžete také zvolit, kteří zabanovaní uživatelé také obdrží e-mail.',
	'MAIL_HIGH_PRIORITY'	=> 'Vysoká',
	'MAIL_LOW_PRIORITY'		=> 'Nízká',
	'MAIL_NORMAL_PRIORITY'	=> 'Normální',
	'MAIL_PRIORITY'			=> 'Priorita',
	'MASS_MESSAGE'			=> 'Vaše zpráva',
	'MASS_MESSAGE_EXPLAIN'	=> 'Berte na vědomí, že můžete vložit jen prostý text. Všechny značky budou před odesláním odstraněny.',

	'NO_EMAIL_MESSAGE'		=> 'Musíte vložit zprávu.',
	'NO_EMAIL_SUBJECT'		=> 'Musíte zvolit předmět zprávy.',
));
