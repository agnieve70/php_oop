<?php
defined('BASEPATH') OR exit('No direct script access allowed');

interface Student {

	public function addStudent();
	public function updateStudent($student_id);
	public function deleteStudent($student_id);
	public function studentInfo($student_id);
}
