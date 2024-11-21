<?php
require_once('./src/db.php');
$studentId = $_GET["id"];
require_once('./src/db.php');
$link = mysqli_connect('db', 'root', '', 'ph31_db');

$query = "SELECT
    student.id AS student_id,
    student.name AS name,
    student.name_kana,
    student.gender,
    student.tel,
    student.mail,
    student.address,
    student.bloodtype,
    club.name AS club_name
FROM
    student
INNER JOIN
    affiliation ON student.id = affiliation.student_id
INNER JOIN
    club ON affiliation.club_id = club.id
WHERE
    student.id = $studentId";

$student = getData($link, $query);
