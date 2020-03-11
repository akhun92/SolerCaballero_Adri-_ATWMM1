<?php

require_once(__DIR__.'/../model/employeeModel.php');

class employeesController{

	public function indexAction(){
		$employees = array();
		$file = file_get_contents(__DIR__."/../../data/employeesData.json");
		$data = json_decode($file);

		foreach ($data->employees as $emp) {
			$employee = new employee($emp->name, $emp->date, $emp->position, $emp->photo, $emp->salary, $emp->cv);
			array_push($employees, $employee);
		}

		return ($employees);
	}
}

