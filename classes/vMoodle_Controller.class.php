<?php

/**
 * The vMoodle Controller is a very simple class whose job is to re-route
 * a user's request to the appropriate command. From then on, the command is 
 * responsible for handling the logic. The vMoodle Controller is a singleton
 * meaning that only one instance of the vMoodle Controller might exist at
 * any given time.
 */
class vMoodle_Controller
{

	/** 
	 * Unique instance of the vMoodle Controller
	 */
	private static $instance;

	/** 
	 * Private constructor so that the system might not create
	 * many instances of the vMoodle Controller 
	 */
	private function __construct() {
	}
	
	/**
	 * Gets the instance of the vMoodle Controller. If no instance
	 * of the vMoodle Controller exists, then it creates one and
	 * returns it.
	 */
	public static function getInstance() {
		if(!isset(self::$instance))
		{
			$c = __CLASS__;
			self::$instance = new $c;
		}
		
		return self::$instance;
	}
	
	/**
	 * Dispatches the request to the appropriate command.
	 */
	public function dispatch() {
	
		$cmd = NULL;
		
		if(isset($_GET['a']))
		{
			switch($_GET['a'])
			{
				/**
				 * One case per use case
				 */
				case 'startVM':
					require_once('startVM_cmd.class.php');
					$cmd = new startVM_cmd();
					break;
				
				case 'stopVM':
					require_once('stopVM_cmd.class.php');
					$cmd = new stopVM_cmd();
					break;
				
				case 'viewVM':
					require_once('viewVM_cmd.class.php');
					$cmd = new viewVM_cmd();
					break;
				
				case 'listVM':
					require_once('listVM_cmd.class.php');
					$cmd = new listVM_cmd();
					break;
					
				case 'createVM':
					require_once('createVM_cmd.class.php');
					$cmd = new createVM_cmd();
					break;
					
				case 'deleteVM':
					require_once('deleteVM_cmd.class.php');
					$cmd = new deleteVM_cmd();
					break;
					
				case 'duplicateVM':
					require_once('duplicateVM_cmd.class.php');
					$cmd = new duplicateVM_cmd();
					break;
					
				case 'setVMAsTemplate':
					require_once('setVMAsTemplate_cmd.class.php');
					$cmd = new setVMAsTemplate_cmd();
					break;
					
					
				default:
					// default to something
			}
		}
		else
		{
			// default to something
		}

		if($cmd != NULL)
			$cmd->execute();
	}
}
