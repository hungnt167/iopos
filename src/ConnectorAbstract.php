<?php


namespace Iopos;

use Medoo\Medoo as Medoo;
use Iopos\ConnectorInterface;

abstract class ConnectorAbstract implements ConnectorInterface
{
	protected $_database;

	function __construct()
	{
		// Initialize
		$this->_database = new Medoo([
			'database_type' => 'mysql',
			'database_name' => 'sample_data_m1910',
			'server' => 'localhost',
			'username' => 'root',
			'password' => ''
			]);

	}

	public function run() {
		
		
	}

	public function getDatabase()
	{
		return $this->_database;
	}
}