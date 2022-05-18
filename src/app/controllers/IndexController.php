<?php

declare(strict_types=1);

use Phalcon\Mvc\Controller;
use  MyApp\Models\Student;
use  MyApp\Models\Teacher;

class IndexController extends Controller
{
    public function createStudentAction()
    {
        $str = "null,hello,okay";
        $user = new Student($str);

    }
    public function loadStudentAction()
    {
        $value = 7;
        $column = 'roll_no';
        $user = new Student('student');
        $user = $user->load($column, $value);
        foreach ($user as $u) {
            echo $u->roll_no . " " . $u->name . " " . $u->address;
        }
    }
    public function deleteStudentAction()
    {
        $user = new Student('student');
        $column = 'roll_no';
        $value = 6;
        $user->deleted($column, $value);
    }
    public function updateStudentNameAction()
    {
        $find = new Student();
        $new = $find->setName = 'nayajjjjjjjjjjjj naaam';
        $phql = "UPDATE `student` SET `name` = '$new' WHERE `roll_no` = :roll_no";
        $this->db->execute($phql, ['roll_no' => 5]);
    }
    public function updateStudentRoll_noAction()
    {
        $find = new Student();
        $new = $find->setRollNo = 7;
        $phql = "UPDATE `student` SET `roll_no` = '$new' WHERE `roll_no` = :roll_no";
        $this->db->execute($phql, ['roll_no' => 5]);
    }
    public function updateStudentAddressAction()
    {
        $find = new Student();
        $new = $find->setAddress = 'new address';
        $phql = "UPDATE `student` SET `address` = '$new' WHERE `roll_no` = :roll_no";
        $this->db->execute($phql, ['roll_no' => 5]);
    }
    public function updateTeacheridAction()
    {
        $find = new Teacher();
        $new = $find->setId = 4;
        $phql = "UPDATE `teacher` SET `id` = '$new' WHERE `id` = :id";
        $this->db->execute($phql, ['id' => 2]);
    }
    public function updateTeacherNameAction()
    {
        $find = new Teacher();
        $new = $find->setName = 'new name';
        $phql = "UPDATE `teacher` SET `name` = '$new' WHERE `id` = :id";
        $this->db->execute($phql, ['id' => 2]);
    }
    public function updateTeacherAddressAction()
    {
        $find = new Teacher();
        $new = $find->setAddress = 'new address';
        $phql = "UPDATE `teacher` SET `address` = '$new' WHERE `id` = :id";
        $this->db->execute($phql, ['id' => 2]);
    }
    public function updateTeacherSubjectAction()
    {
        $find = new Teacher();
        $new = $find->setSubject = 'new subject';
        $phql = "UPDATE `teacher` SET `subject` = '$new' WHERE `id` = :id";
        $this->db->execute($phql, ['id' => 2]);
    }
    public function loadTeacherAction()
    {
        $value = 2;
        $column = 'id';
        $user = new Teacher('teacher');
        $user = $user->load($column, $value);
        foreach ($user as $u) {
            echo $u->id . " " . $u->name . " " . $u->address . " " . $u->subject;
        }
    }
    public function deleteTeacherAction()
    {
        $column = 'id';
        $value = 1;
        $user = new Teacher('teacher');
        $user->deleted($column, $value);
    }
    public function updateTeacherAction()
    {
    }
}
