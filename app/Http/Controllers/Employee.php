<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Employee extends Controller
{
    private $employees;

    public function __construct()
    {
        $this->employees = [
            1 => [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            2 => [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            3 => [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            4 => [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            5 => [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];
    }

    public function showOne($num)
    {
        return $this->employees[$num];
    }
    public function showField($num, $param){
        return $this->employees[$num][$param];
    }
    public function show()
    {
        return view('employee.show', ['name' => $this->employees[1]['name'], 'surname' => $this->employees[1]['surname'], 'salary' => $this->employees[1]['salary']]);
    }
}
