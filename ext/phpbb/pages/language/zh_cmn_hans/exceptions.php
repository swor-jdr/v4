<?php
/**
*
* Pages extension for the phpBB Forum Software package.
* @简体中文语言　David Yin <http://www.g2soft.net/>
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

/*
* These are errors which can be triggered by sending invalid data to the
* pages extension API.
*
* These errors will never show to a user unless they are either modifying
* the core pages extension code OR unless they are writing an extension
* which makes calls to this extension.
*
* Translators: Feel free to not translate these language strings
*/
$lang = array_merge($lang, array(
	'EXCEPTION_FIELD_MISSING'		=> '必填项缺失',
	'EXCEPTION_INVALID_ARGUMENT'	=> '`%1$s` 参数无效。 原因： %2$s',
	'EXCEPTION_OUT_OF_BOUNDS'		=> '`%1$s` 字段获取的数据超出范围',
	'EXCEPTION_TOO_LONG'			=> '输入值过长。',
	'EXCEPTION_NOT_UNIQUE'			=> '输入值不是唯一。',
	'EXCEPTION_UNEXPECTED_VALUE'	=> '`%1$s` 字段获取的未预期的数据。原因： %2$s',
	'EXCEPTION_ILLEGAL_CHARACTERS'	=> '输入值包含非法字符。',
));
