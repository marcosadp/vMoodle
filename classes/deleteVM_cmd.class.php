<?php

require_once "Command.interface.php";

/**
 * The delete VM command encapsulates of the logic for the
 * delete Virtual Machine (vMoodle_I4) use case.
 */
class deleteVM_cmd implements Command
{
	/**
	 * Executes delete Virtual Machine use case logic.
	 */
	public function execute() {
		echo "delete vm";
	}
}
