<?php

require_once(__DIR__.'/../model/EmployeeModel.php');

class EmployeesController{

	public function indexAction(){
		$employeesArray = array();
		$file = file_get_contents(__DIR__."/../../data/EmployeesData.json");
		$data = json_decode($file);

		foreach ($data->employees as $emp) {
			$employee = new EmployeeModel($emp->name, $emp->date, $emp->position, $emp->photo, $emp->salary, $emp->cv);
			array_push($employeesArray, $employee);
		}

		return ($employeesArray);
	}
}

