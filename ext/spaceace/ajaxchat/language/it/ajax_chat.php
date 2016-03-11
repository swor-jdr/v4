<?php

/**
 *
 * Ajax Chat extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015 spaceace <http://www.livemembersonly.com>
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
		'CHAT_ARCHIVE'					=> 'Archivio',
		'CHAT_ARCHIVE_EXPLAIN'			=> 'Archivio Chat',
		'CHAT_POPUP'					=> 'Popup',
		'CHAT_POPUP_EXPLAIN'			=> 'Chat in Popup',
		'CHAT_RULE'						=> 'Regole Chat: ',
		'CHAT_RULE_EXPLAIN'				=> 'Tieni pulita la chat. Niente volgarita\', grazie.',
		'CHAT_NEW_POST'					=> 'ha replicato in %s',
		'CHAT_NEW_TOPIC'				=> 'ha creato una nuova discussione: %s',
		'CHAT_POST_EDIT'				=> 'ha editato: %s',
		'CHAT_NEW_QUOTE'				=> 'has replied with a quote to: %s',
		'EMPTY'							=> 'Errore: Devi inserire un messaggio.',
		'GUEST_MESSAGE'					=> '<strong>Devi essere un Utente Registrato per usare la chat.</strong>',
		'MESSAGE'						=> 'Messaggio',
		'PAGE_TITLE'					=> 'Chat del Forum',
		'RESPOND'						=> 'Rispondi all\'utente',
		'UNIT'							=> 'Secondi',
		'UPDATES'						=> 'Aggiornamento ogni',
		'CHAT'							=> 'Chat',
		'CHAT_EXPLAIN'					=> 'Centro Chat',
		'WHOIS_CHATTING'				=> 'Chi sta chattando',
		'CHAT_FONT_COLOR'				=> 'Colore carattere Chat',
		'SELECT_COLOR'					=> 'Scegli il colore del carattere della chat',
		'CHAT_SUBMIT_MESSAGE'			=> 'Invia Messaggio',
		'DELETE_CHAT_MESSAGE'			=> 'Cancella messaggio Chat',
		'BBCODES'			 			=> 'BBCodes',
		'IE_NO_AJAX'					=> 'La tua versione di Internet Explorer non supporta AJAX.',
		'UPGRADE_BROWSER'				=> 'Stato: Non posso creare XmlHttpRequest Object.	Considera di aggiornare il browser.',
		'NO_POST_IN_CHAT'				=> 'Non hai il permesso di postare in chat.',
		'DELETE_CHAT_COOKIE'			=> 'Delete cookie',
		'DELETE_CHAT_COOKIE_EXPLAIN'	=> 'This button deletes the font colour hold cookie.',
	)
);
