<?php
require_once('../db.php');
require_once('./db.php');

$link = mysqli_connect('localhost', 'root', '', 'ph31_db');
$query = "SELECT
    student.id AS student_id,
    student.name AS name,
    student.name_kana,
    student.gender,
    club.name AS club_name
    FROM 
      student 
    INNER JOIN 
      affiliation ON student.id = affiliation.student_id
    INNER JOIN 
      club ON affiliation.club_id = club.id";

$students = getData($link, $query);
require_once('./tpl/index.php');
