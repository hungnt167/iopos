<?php

namespace Iopos;

use Iopos\ConnectorAbstract;

class StandardConnector extends ConnectorAbstract
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function run() {
		
		$data = $this->_database->select('core_config_data',"*",[]);
 
		echo json_encode($data);
	}
}
