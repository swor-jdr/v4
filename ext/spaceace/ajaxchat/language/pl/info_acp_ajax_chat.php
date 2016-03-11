<?php

/**
 *
 * Ajax Chat extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015 spaceace <http://www.livemembersonly.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 * @polish translation by HPK
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
		'ADMIN_AJAXCHAT_SETTINGS'		=> 'Ustawienia',
		'ACP_AJAX_CHAT_TITLE'						=> 'Ajax Chat',
		'ACP_AJAX_CHAT'								=> 'Ajax Chat',
		'AJAX_CHAT_SETTINGS'			=> 'Ustawienia Ajax Chat',
		'ACP_AJAX_CHAT_TITLE_EXPLAIN'	=> 'Możesz tutaj zmieniać ustawienia Ajax Chat.',
		'DISPLAY_AJAX_CHAT'				=> 'Włącz Ajax Chat',
		'INDEX_DISPLAY_AJAX_CHAT'					=> 'Enable Ajax Chat on index page',
		'INDEX_DISPLAY_AJAX_CHAT_EXPLAIN'			=> 'Setting this to "Disabled" will only turn off Ajax Chat on "Board Index".',
		'WHOIS_CHATTING'				=> 'Włącz wyświetlanie "Kto czatuje"',
		'WHOIS_CHATTING_EXPLAIN'		=> 'Wyłączenie tej opcji spowoduje nie wyświetlanie się okienka "Kto czatuje", bez względu na ustawienia indywidualne użytkowników.',
		'AJAX_CHAT_POSTS'							=> 'Forum post settings',
		'FORUM_POSTS_AJAX_CHAT'						=> 'Enable forum to post in chat',
		'FORUM_POSTS_AJAX_CHAT_TOPIC'				=> 'Enable new topics to display in chat',
		'FORUM_POSTS_AJAX_CHAT_REPLY'				=> 'Enable topic replies to display in chat',
		'FORUM_POSTS_AJAX_CHAT_EDIT'				=> 'Enable edited posts to display in chat',
		'FORUM_POSTS_AJAX_CHAT_QUOTE'				=> 'Enable quoted posts to display in chat',
		'ARCHIVE_AMOUNT_AJAX_CHAT'					=> 'Archive messages',
		'ARCHIVE_AMOUNT_AJAX_CHAT_EXPLAIN'			=> 'Amount of archive messages to display. Between 5 and 500. Default is 200.',
		'POPUP_AMOUNT_AJAX_CHAT'					=> 'Popup messages',
		'POPUP_AMOUNT_AJAX_CHAT_EXPLAIN'			=> 'Amount of popup messages to display. Between 5 and 150. Default is 60.',
		'INDEX_AMOUNT_AJAX_CHAT'					=> 'Index chat messages',
		'INDEX_AMOUNT_AJAX_CHAT_EXPLAIN'			=> 'Amount of chat messages to display on index. Between 5 and 150. Default is 60.',
		'CHAT_AMOUNT_AJAX_CHAT'						=> 'Chat messages',
		'CHAT_AMOUNT_AJAX_CHAT_EXPLAIN'				=> 'Amount of chat messages to display. Between 5 and 150. Default is 60.',
		'RULE_AJAX_CHAT'				=> 'Wstaw zadadę użytkowania czatu',
		'RULE_AJAX_CHAT_EXPLAIN'		=> 'Przykład: Nie używaj wulgaryzmów!!!',
		'AJAX_CHAT_LOCATION'						=> 'Chat location',
		'LOCATION_AJAX_CHAT_OVERRIDE'				=> 'Override user’s chat position',
		'LOCATION_AJAX_CHAT_OVERRIDE_EXPLAIN'		=> 'Enabling this setting will override the chat position setting in the UCP as well as remove the UCP option.',
		'LOCATION_AJAX_CHAT'						=> 'Chat position at the top of index page',
		'LOCATION_AJAX_CHAT_EXPLAIN'				=> 'Setting this to "No" will move the chat to the bottom of the index page.',
		'TIME_SETTING_AJAX_CHAT'					=> 'Time Setting',
		'TIME_SETTING_AJAX_CHAT_EXPLAIN'			=> 'This setting will override user setting on date format. Leave Blank to use User Settings.',
		'ACL_U_AJAXCHAT_BBCODE'			=> 'Można używać BBCode na czacie',
		'ACL_U_AJAXCHAT_POST'			=> 'Można pisać na czacie',
		'ACL_U_AJAXCHAT_VIEW'			=> 'Można widzieć czat',
		'ACL_M_AJAXCHAT_DELETE'			=> 'Można usuwać wiadomości na czacie',
		'STATUS_ONLINE_CHAT'						=> 'Online status',
		'STATUS_ONLINE_CHAT_EXPLAIN'				=> 'Sets users online status time in seconds. Default is 0.',
		'STATUS_IDLE_CHAT'							=> 'Idle status',
		'STATUS_IDLE_CHAT_EXPLAIN'					=> 'Sets users idle status time in seconds. Default is 300.',
		'STATUS_OFFLINE_CHAT'						=> 'Offline status',
		'STATUS_OFFLINE_CHAT_EXPLAIN'				=> 'Sets users offline status time in seconds. Default is 1800.',
		'REFRESH_ONLINE_CHAT'						=> 'Online refresh rate',
		'REFRESH_ONLINE_CHAT_EXPLAIN'				=> 'Sets users online refresh rate in seconds. Default is 5.',
		'REFRESH_IDLE_CHAT'							=> 'Idle refresh rate',
		'REFRESH_IDLE_CHAT_EXPLAIN'					=> 'Sets users idle refresh rate in seconds. Default is 60.',
		'REFRESH_OFFLINE_CHAT'						=> 'Offline refresh rate',
		'REFRESH_OFFLINE_CHAT_EXPLAIN'				=> 'Sets users offline refresh rate in seconds. Default is 300.',
		'AJAX_CHAT_PRUNE'							=> 'Prune Settings',
		'PRUNE_AJAX_CHAT'							=> 'Auto prune messages',
		'PRUNE_AJAX_CHAT_EXPLAIN'					=> 'Disabling will set this to manual mode.',
		'PRUNE_KEEP_AJAX_CHAT'						=> 'Number of messages to keep',
		'PRUNE_NOW'									=> 'Prune Now',
		'PRUNE_LOG_AJAXCHAT'						=> 'Pruned chat table',
		'PRUNE_LOG_AJAXCHAT_AUTO'					=> 'Automatic chat table pruning',
		'PRUNE_CHAT_SUCESS'							=> 'Chat table purged sucessfully!',
		'CONFIRM_PRUNE_AJAXCHAT'					=> 'Confirm that you really want to prune the chat database.',
		'TRUNCATE_NOW'								=> 'Truncate Now',
		'CONFIRM_TRUNCATE_AJAXCHAT'					=> 'Confirm that you really want to truncate the chat database.',
		'TRUNCATE_LOG_AJAXCHAT'						=> 'Truncated chat table',
		'TRUNCATE_CHAT_SUCESS'						=> 'Chat table truncated',
		'CHAT_COUNTER'								=> 'Number of chat messages in database',
		'ROLE_MOD_CHAT'								=> 'Ajax Chat moderator',
		'ROLE_MOD_CHAT_EXPLAIN'						=> 'Ajax Chat role for moderators.',
	)
);
