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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Oblíbená',
	'ANNOUNCEMENTS'			=> 'Oznámení',

	'FORUM_PERMISSIONS'		=> 'Oprávnění fóra',

	'ICON_ANNOUNCEMENT'		=> 'Oznámení',
	'ICON_STICKY'			=> 'Důležité',

	'LOGIN_NOTIFY_FORUM'	=> 'Fórum je pouze pro registrované, prosím přihlaste se.',

	'MARK_TOPICS_READ'		=> 'Označit všechna témata jako přečtená',

	'NEW_POSTS_HOT'			=> 'Nové příspěvky [ Oblíbené ]',
	'NEW_POSTS_LOCKED'		=> 'Nové příspěvky [ Zamknuté ]',
	'NO_NEW_POSTS_HOT'		=> 'Žádné nové příspěvky [ Oblíbené ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Žádné nové příspěvky [ Zamknuté ]',
	'NO_READ_ACCESS'		=> 'Nemáte potřebná oprávnění pro čtení nebo zobrazení témat v&nbsp;tomto fóru.',
	'NO_FORUMS_IN_CATEGORY'	=> 'Tato kategorie nemá žádná fóra.',
	'NO_UNREAD_POSTS_HOT'		=> 'Bez nových příspěvků [ Oblíbené ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Bez nových příspěvků [ Zamknuté ]',

	'POST_FORUM_LOCKED'		=> 'Toto fórum je zamknuto',

	'TOPICS_MARKED'			=> 'Všechna témata ve fóru byla označena jako přečtená',

	'UNREAD_POSTS_HOT'		=> 'Nové příspěvky [ Oblíbené ]',
	'UNREAD_POSTS_LOCKED'	=> 'Nové příspěvky [ Zamknuté ]',

	'VIEW_FORUM'			=> 'Zobrazit fórum',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d téma',
		2	=> '%d témata',
		3	=> '%d témat',
	),
));
