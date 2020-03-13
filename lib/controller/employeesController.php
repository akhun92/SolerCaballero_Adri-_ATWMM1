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

	public function sortedEmployeesByName($employeesArrayCompare) {
		usort($employeesArrayCompare, function($a, $b){
			return strcmp($a->getName(), $b->getName());
		});
		return $employeesArrayCompare;
	}

	public function sortedEmployeesByDate($employeesArrayCompare) {
		usort($employeesArrayCompare, function($b, $a){
			return strcmp($a->getDate(), $b->getDate());
		});
		return $employeesArrayCompare;
	}

	public function sortedEmployeesByPosition($employeesArrayCompare) {
		usort($employeesArrayCompare, function($a, $b){
			return strcmp($a->getPosition(), $b->getPosition());
		});
		return $employeesArrayCompare;
	}
}
