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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Here you can backup all your phpBB related data. You may store the resulting archive in your <samp>store/</samp> folder or download it directly. Depending on your server configuration you may be able to compress the file in a number of formats.',
	'ACP_RESTORE_EXPLAIN'	=> 'This will perform a full restore of all phpBB tables from a saved file. If your server supports it you may use a gzip or bzip2 compressed text file and it will automatically be decompressed. <strong>WARNING</strong> This will overwrite any existing data. The restore may take a long time to process please do not move from this page till it is complete. Backups are stored in the <samp>store/</samp> folder and are assumed to be generated by phpBB’s backup functionality. Restoring backups that were not created by the built in system may or may not work.',

	'BACKUP_DELETE'		=> 'The backup file has been deleted successfully.',
	'BACKUP_INVALID'	=> 'The selected file to backup is invalid.',
	'BACKUP_OPTIONS'	=> 'Backup options',
	'BACKUP_SUCCESS'	=> 'The backup file has been created successfully.',
	'BACKUP_TYPE'		=> 'Backup type',

	'DATABASE'			=> 'Database utilities',
	'DATA_ONLY'			=> 'Data only',
	'DELETE_BACKUP'		=> 'Delete backup',
	'DELETE_SELECTED_BACKUP'	=> 'Are you sure you want to delete the selected backup?',
	'DESELECT_ALL'		=> 'Deselect all',
	'DOWNLOAD_BACKUP'	=> 'Download backup',

	'FILE_TYPE'			=> 'File type',
	'FILE_WRITE_FAIL'	=> 'Unable to write file to storage folder.',
	'FULL_BACKUP'		=> 'Full',

	'RESTORE_FAILURE'		=> 'The backup file may be corrupt.',
	'RESTORE_OPTIONS'		=> 'Restore options',
	'RESTORE_SELECTED_BACKUP'	=> 'Are you sure you want to restore the selected backup?',
	'RESTORE_SUCCESS'		=> 'The database has been successfully restored.<br /><br />Your board should be back to the state it was when the backup was made.',

	'SELECT_ALL'			=> 'Select all',
	'SELECT_FILE'			=> 'Select a file',
	'START_BACKUP'			=> 'Start backup',
	'START_RESTORE'			=> 'Start restore',
	'STORE_AND_DOWNLOAD'	=> 'Store and download',
	'STORE_LOCAL'			=> 'Store file locally',
	'STRUCTURE_ONLY'		=> 'Structure only',

	'TABLE_SELECT'		=> 'Table select',
	'TABLE_SELECT_ERROR'=> 'You must select at least one table.',
));
