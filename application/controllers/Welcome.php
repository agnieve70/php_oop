<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "traits/actions.php";
require ("interface/student.php");

class Welcome extends CI_Controller implements Student{

	use actions;
	private $student = array("name" => "", "age" => 0, "address" => "");


	public function __construct()
	{
		parent::__construct();
	}

	public function getStudent()
	{
		$this->student["name"] = "gabriel";
		$this->student["age"] = 23;
		$this->student["address"] = "Digos City";

		return $this->student;
	}

	public function addStudent()
	{
		return $this->save("table_name", $this->student);
	}

	public function updateStudent($student_id)
	{

	}

	public function deleteStudent($student_id)
	{

	}

	public function studentInfo($student_id)
	{
		return $this->student;
	}

	public function index()
	{
	}

	private function callMe()
	{
		$this->getStudent();
		$ifTrue = $this->addStudent();
		$arr = $this->studentInfo("gabriel");
		return ($ifTrue)? $arr : array("status" => "500", "result" => "oh no");
	}

	public function output()
	{
		print_r($this->callMe());
	}
}
