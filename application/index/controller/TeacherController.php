<?php
namespace app\index\controller;
use app\model\Teacher;  // 教师模型
/**
 * 教师管理
 */
class TeacherController
{
    public function index()
    {
        $Teacher = new Teacher;
        $teachers = $Teacher->select();
        var_dump($teachers);
    }
}