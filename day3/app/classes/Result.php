<?php

namespace App\classes;

class Result {
    public $result = [];

    public function __construct()
    {
        $this->result = [
            0 => [
                'course' => 'WEB PROGRAMING',
                'course_code' => 'CSE0613101',
                'grade' => "4.00",
            ],
            1 => [
                'course' => 'WEB PROGRAMING 2',
                'course_code' => 'CSE0613102',
                'grade' => "4.00",
            ],
            2 => [
                'course' => 'WEB PROGRAMING 3',
                'course_code' => 'CSE0613103',
                'grade' => "4.00",
            ]
        ];
    }

    public function getAllCoursesResults()
    {
        return $this->result;
    }

    function index()
    {
        header('Location: action.php?page=result');
    }
}