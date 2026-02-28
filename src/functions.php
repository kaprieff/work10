<?php

function printStudentInfo(App\Student $student): void
{
    echo "Студент: {$student->getFirstName()} {$student->getLastName()} | Средний балл: " . number_format($student->getAverage(), 2) . "\n";
}

function printGroupInfo(App\Group $group): void
{
    $count = count($group->getStudents());
    $avg = $group->getGroupAverage();
    echo "Группа: {$group->getGroupName()} | Студентов: {$count} | Общий средний балл: " . number_format($avg, 2) . "\n";
}
