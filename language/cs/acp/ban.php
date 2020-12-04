<?php
/** 
*
* acp_ban [Čeština]
*
* @package language
* @version $Id: ban.php 491 2009-09-12 09:46:40Z ameeck $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 hodina',
	'30_MINS'		=> '30 minut',
	'6_HOURS'		=> '6 hodin',

	'ACP_BAN_EXPLAIN'	=> 'Zde můžete ovládat banování jmen, IP adres nebo e-mailů. Tyto postupy zabraňují uživateli přistoupit k&nbsp;jakékoliv části fóra. Chcete-li, můžete připojit krátký (nejvýše 3000 znaků) důvod pro ban, který se zobrazí v&nbsp;administrátorském logu. Rovněž může být určena délka trvání banu. Chcete-li, aby platnost banu uplynula k&nbsp;určitému datu, nastavte raději <u>Datum vypršení</u> u&nbsp;délky banu a zadejte datum ve formátu <kbd>RRRR-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Vyřadit z banů',
	'BAN_LENGTH'			=> 'Délka banu',
	'BAN_REASON'			=> 'Důvod banu',
	'BAN_GIVE_REASON'		=> 'Důvod zobrazený zabanovanému uživateli',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Seznam banů byl aktualizován.',
	
	'BANNED_UNTIL_DATE'		=> 'až do %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (do %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Zabanovat jednu nebo více e-mailových adres',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Povolte možnost pro vyřazení vložené adresy z aktivních banů.',
	'EMAIL_BAN_EXPLAIN'			=> 'V případě většího množství adres vložte každou jednotlivě na nový řádek. Pro částečnou shodu použijte zástupný symbol * , např. <samp>*@seznam.cz</samp>, <samp>*@*.domena.cz</samp>, atd.',
	'EMAIL_NO_BANNED'			=> 'Žádné zabanované e-mailové adresy',
	'EMAIL_UNBAN'				=> 'Zrušit ban či vyřazení e-mailových adres',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Odebrat více e-mailových adres naráz lze kombinací myši a klávesnice odpovídající vašemu počítači a prohlížeči. Vyřazené e-mailové adresy budou zvýrazněny.',

	'IP_BAN'					=> 'Zabanovat jednu nebo více IP adres',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Povolte možnost pro vyřazení vložené IP adresy z aktivních banů.',
	'IP_BAN_EXPLAIN'			=> 'V případě většího množství IP adres vložte každou jednotlivě na nový řádek. Pro zadání rozsahu IP oddělte hraniční adresy spojovníkem (-), jako zástupný symbol použijte *.',
	'IP_HOSTNAME'				=> 'IP adresy nebo názvy hostitelů',
	'IP_NO_BANNED'				=> 'Žádné zabanované IP adresy',
	'IP_UNBAN'					=> 'Zrušit ban či vyřazení IP adres',
	'IP_UNBAN_EXPLAIN'			=> 'Odebrat více IP adres naráz lze kombinací myši a klávesnice odpovídající vašemu počítači a prohlížeči. Vyřazené IP adresy budou zvýrazněny.',

	'LENGTH_BAN_INVALID'		=> 'Datum musí mít formát <kbd>RRRR-MM-DD</kbd>.',
  
  'OPTIONS_BANNED'			=> 'Zabanovaní',
	'OPTIONS_EXCLUDED'			=> 'Vyloučení',

	'PERMANENT'		=> 'Trvalý',
	
	'UNTIL'						=> 'Datum vypršení',
	'USER_BAN'					=> 'Zabanovat jedno nebo více uživatelských jmen',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Povolte možnost pro vyřazení zadaných uživatelů z aktivních banů.',
	'USER_BAN_EXPLAIN'			=> 'V případě většího množství uživatelských jmen vložte každé jednotlivě na nový řádek. Použijte funkci <u>Najít člena</u> pro vyhledání a automatické přidání jednoho nebo více uživatelů.',
	'USER_NO_BANNED'			=> 'Žádná zabanovaná uživatelská jména',
	'USER_UNBAN'				=> 'Zrušit ban či vyřazení uživatelských jmen',
	'USER_UNBAN_EXPLAIN'		=> 'Odebrat více uživatelských jmen naráz lze kombinací myši a klávesnice odpovídající vašemu počítači a prohlížeči. Vyřazená uživatelská jména budou zvýrazněna.',

));
