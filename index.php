<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/functions.php';

use App\Student;
use App\Group;

echo "=== Пример использования системы учёта студентов ===\n\n";

$student1 = new Student("Иван", "Иванов");
$student2 = new Student("Петр", "Петров");
$student3 = new Student("Анна", "Сидорова");

$student1->addGrade(85);
$student1->addGrade(90);
$student1->addGrade(95);

$student2->addGrade(70);
$student2->addGrade(75);
$student2->addGrade(80);

$student3->addGrade(92);
$student3->addGrade(94);
$student3->addGrade(96);

$group = new Group("Группа A");
$group->addStudent($student1);
$group->addStudent($student2);
$group->addStudent($student3);

echo "=== Информация о студентах ===\n";
printStudentInfo($student1);
printStudentInfo($student2);
printStudentInfo($student3);

echo "\n=== Информация о группе ===\n";
printGroupInfo($group);

echo "\n=== Лучший студент ===\n";
$best = $group->getBestStudent();
if ($best) {
    printStudentInfo($best);
} else {
    echo "Нет студентов в группе.\n";
}
