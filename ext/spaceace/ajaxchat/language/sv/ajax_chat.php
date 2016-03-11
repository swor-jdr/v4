<?php

/**
 *
 * Ajax Chat extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015 spaceace <http://www.livemembersonly.com>
 * Swedish translation be Holger (https://www.maskinisten.net)
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
// ’ « » “ ” …
//

$lang = array_merge(
	$lang, array(
		'CHAT_ARCHIVE'					=> 'Arkiv',
		'CHAT_ARCHIVE_EXPLAIN'			=> 'Chattarkiv',
		'CHAT_POPUP'					=> 'Popup',
		'CHAT_POPUP_EXPLAIN'			=> 'Chattpopup',
		'CHAT_RULE'						=> 'Chattregel: ',
		'CHAT_RULE_EXPLAIN'				=> 'Var vänliga, inga svordomar.',
		'CHAT_NEW_POST'					=> 'har svarat: %s',
		'CHAT_NEW_TOPIC'				=> 'har startat ett nytt ämne: %s',
		'CHAT_POST_EDIT'				=> 'har ändrat: %s',
		'CHAT_NEW_QUOTE'				=> 'has replied with a quote to: %s',
		'EMPTY'							=> 'Fel: du måste mata in ett meddelande.',
		'GUEST_MESSAGE'					=> '<strong>Du måste vara inloggad för att kunna använda chatten.</strong>',
		'MESSAGE'						=> 'Meddelande',
		'PAGE_TITLE'					=> 'Forumchatt',
		'RESPOND'						=> 'Svara till medlem',
		'UNIT'							=> 'Sekunder',
		'UPDATES'						=> 'Aktualisering var',
		'CHAT'							=> 'Chatt',
		'CHAT_EXPLAIN'					=> 'Chattcentral',
		'WHOIS_CHATTING'				=> 'Vem chattar',
		'CHAT_FONT_COLOR'				=> 'Chatt textfärg',
		'SELECT_COLOR'					=> 'Välj din textfärg',
		'CHAT_SUBMIT_MESSAGE'			=> 'Skicka meddelandet',
		'DELETE_CHAT_MESSAGE'			=> 'Radera meddelandet',
		'BBCODES'			 			=> 'BBCode',
		'IE_NO_AJAX'					=> 'Din version av Internet Explorer har ej stöd för AJAX.',
		'UPGRADE_BROWSER'				=> 'Status: kund eej skapa XmlHttpRequest Object.	Uppdatera din webbläsare.',
		'NO_POST_IN_CHAT'				=> 'Du har ej behörighet att skriva i chatten.',
		'DELETE_CHAT_COOKIE'			=> 'Radera cookie',
		'DELETE_CHAT_COOKIE_EXPLAIN'	=> 'This button deletes the font colour hold cookie.',
	)
);
