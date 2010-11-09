<?php

require_once "Command.interface.php";

/**
 * The duplicate VM command encapsulates of the logic for the
 * duplicate Virtual Machine (vMoodle_I3) use case.
 */
class duplicateVM_cmd implements Command
{
	/**
	 * Executes duplicate Virtual Machine use case logic.
	 */
	public function execute() {
		echo "duplicate vm";
	}
}
