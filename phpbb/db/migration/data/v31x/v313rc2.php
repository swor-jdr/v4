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

namespace phpbb\db\migration\data\v31x;

class v313rc2 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\phpbb\db\migration\data\v30x\release_3_0_13_pl1',
			'\phpbb\db\migration\data\v31x\v313rc1',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.1.3-RC2')),
		);
	}
}
