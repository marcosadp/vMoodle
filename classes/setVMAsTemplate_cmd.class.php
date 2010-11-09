<?php

require_once "Command.interface.php";

/**
 * The set VM as template command encapsulates of the logic for the
 * flag Virtual Machine template (vMoodle02) use case.
 */
class setVMAsTemplate_cmd implements Command
{
	/**
	 * Executes flag Virtual Machine template use case logic.
	 */
	public function execute() {
		echo "set as template";
	}
}
