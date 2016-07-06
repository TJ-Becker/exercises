<?php
    function prompt($message) {
        fwrite(STDOUT, $message . PHP_EOL);
        return trim(fgets(STDIN));
    }
    function average($array) {
        $total = 0;
        $count = 0;
        foreach ($array as $number) {
            $total += $number;
            $count++;
        }
        return ($total / $count);
    }

    do {
        $student = prompt("Please enter the student's name.  Press x if finished finished entering students.");
        if ($student == "x") {
            break;
        }
        do {
            $subject = prompt("Please enter subject.  Press x if finished entering subjects.");
            if ($subject == "x") {
                break;
            }
            do {
                $grade = prompt("Please enter student grade.  Press x if finished entering grades.");
                if ($grade == "x") {
                    break;
                }
                $grades[] = $grade;
            } while ($grade != "x");
            $subjects[$subject] = $grades;
            $grades = [];
            $students[$student] = $subjects;
        } while ($subject != "x");
        $subjects = [];
    } while ($student != "x");

    print_r($students);

    foreach ($students as $name => $student) {
        echo "{$name}: \n";
        foreach ($student as $subject => $grades) {
            $gradeAverage = average($grades);
            echo "Average in {$subject} is " . $gradeAverage . "." . PHP_EOL;
        }
        echo PHP_EOL;
    }

