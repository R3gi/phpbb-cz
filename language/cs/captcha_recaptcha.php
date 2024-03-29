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
	$lang = [];
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

$lang = array_merge($lang, [
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'cs',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Zadaný ověřovací kód byl nesprávný',
	'RECAPTCHA_NOSCRIPT'				=> 'Pro načtení úkolu musíte ve vašem prohlížeči povolit JavaScript.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'Pro použití reCaptcha, musíte se registrovat na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'				=> 'Tato CAPTCHA je aktuálně neviditelná. K ověření, zda funguje, by se měla objevit ikona v pravém dolním rohu této stránky.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Dosáhli jste maximálního počtu pokusů o přihlášení.<br>Kromě uživatelského jména a hesla bude pro vaše ověření použita neviditelná reCAPTCHA v3.',

	'RECAPTCHA_PUBLIC'				=> 'Veřejný klíč',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Váš veřejný klíč k službě reCAPTCHA, získáte ho na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosíme, použijte reCAPTCHA v2 &gt; Neviditelná reCAPTCHA.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Váš veřejný klíč k službě reCAPTCHA, získáte ho na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosíme, použijte reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Soukromý klíč',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Váš soukromý klíč ke službě reCAPTCHA, získáte ho na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosíme, použijte reCAPTCHA v2 &gt; Neviditelná reCAPTCHA.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Váš soukromý klíč ke službě reCAPTCHA, získáte ho na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosíme, použijte reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Požadavek na doménu',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Doména, které se dotáže skript, když ověřuje požadavek.<br>Použijte <samp>recaptcha.net</samp>, pokud je <samp>google.com</samp> nedostupný.',

	'RECAPTCHA_V3_METHOD'				=> 'Typ požadavku',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Metoda, která je použita, když ověřujete požadavek.<br>Zakázané možnosti nejsou dostupné v nastavení.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Výchozí prahová hodnota',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Použije se, pokud žádná z dalšího akcí není nastavena.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'U přihlášení',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'U příspěvku',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'U registrace',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'U nahlášení',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Prahová hodnota',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 vrací skóre (<samp>1.0</samp> je velmi dobrá interakce, <samp>0.0</samp> je pravděpodobně bot). Zde můžete nastavit minimální skóre.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 potřebuje vědět, kterou z dostupných metod chcete použít pro ověření požadavku.',
]);
