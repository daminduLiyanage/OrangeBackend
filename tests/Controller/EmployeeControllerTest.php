<?php

namespace App\Tests\Util;

use App\Entity\Employee;
use PHPUnit\Framework\TestCase;

class EmployeeControllerTest extends TestCase
{
    public function testAssertEmp(){
        $employee = new Employee;
        $employee->setEmpId(9)->setFname('Dave')->setLname('Black')->setAddress('123 upper lane');

        $this->assertEquals($employee->getEmpId(), 9);
        $this->assertEquals($employee->getFname(), 'Dave');
        $this->assertEquals($employee->getLname(), 'Black');
        $this->assertEquals($employee->getAddress(), '123 upper lane');
    }
}