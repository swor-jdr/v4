<?php
/**
*
* This file is part of the french language pack for the phpBB Forum Software package.
* This file is translated by phpBB-fr.com <http://www.phpbb-fr.com>
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'fr',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Afin d’utiliser reCAPTCHA, vous devez créer un compte sur <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCAPTCHA',
	'RECAPTCHA_INCORRECT'			=> 'Le code de confirmation visuelle soumis était incorrect',

	'RECAPTCHA_PUBLIC'				=> 'Clé publique reCAPTCHA',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Votre clé publique reCAPTCHA. Des clés peuvent être obtenues sur <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Clé privée reCAPTCHA',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Votre clé privée reCAPTCHA. Des clés peuvent être obtenues sur <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Afin d’empêcher la création automatisée de comptes, veuillez saisir les caractères affichés dans le champ ci-contre.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Problème de connexion au service reCAPTCHA : impossible d’ouvrir le socket. Réessayez plus tard.',
));
