<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Nastavení VigLinku',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink je služba třetí strany, pomocí které lze diskrétně zpeněžit existující odkazy poslané uživateli vašeho fóra, aniž by to uživatele jakkoliv obtěžovalo. Když uživatel klikne na některý z těchto odkazů vedoucí k produktu nebo službě a něco koupí, obchodník zaplatí VigLinku provizi, jejíž část bude věnovaná phpBB projektu. Tím, že povolíte VigLink a provizi přenecháte phpBB projektu, podporujete naši open sourceovou organizaci a pomáháte zajistit naše trvalé finanční zabezpečení.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Tato nastavení můžete kdykoliv změnit v nastavení „<a href="%1$s">nastavení VigLinku</a>“.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Jakmile uložíte vaše předvolby níže pomocí tlačítka Odeslat, nebudete už vícekrát přesměrováni na tuto stránku.',
	'ACP_VIGLINK_ENABLE'			=> 'Povolit VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Povolte nebo zakažte použití služby VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Uplatnit nárok na svůj výdělek (volitelné)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'Po registraci „VigLink Convert“ účtu můžete uplatnit nárok na svůj výdělek.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'phpBB zakázalo službu VigLink.',
	'ACP_VIGLINK_CLAIM'				=> 'Uplatnit nárok na svůj výdělek',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Pokud nechcete darovat výdělek z VigLink odkazů na podporu phpBB projektu, můžete na něho uplatnit nárok sami. Chcete-li spravovat nastavení vašeho účtu, přihlaste se do „VigLink Convert“ účtu kliknutím na možnost „Zkonvertovat účet“.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Zkonvertovat účet',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Nepodařilo se získat odkaz pro zkonvertování VigLink účtu.',
));
