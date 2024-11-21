<?php {
  function getData(object $link, string $query): array
  {
    $result = mysqli_query($link, $query);

    $current_student_id = null;
    $students = [];

    while ($row = mysqli_fetch_assoc($result)) {
      $student_id = $row['student_id'];

      // 新しい学生の場合、学生情報を初期化
      if ($student_id !== $current_student_id) {
        $current_student_id = $student_id;
        $students[$student_id] = [
          'student_id' => $row['student_id'],
          'student_name' => $row['name'],
          'name_kana' => $row['name_kana'],
          'gender' => $row['gender'],
          'tel' => $row['tel'] ??  '',
          'mail' => $row['mail'] ??  '',
          'address' => $row['address'] ??  '',
          'blood_type' => $row['bloodtype'] ??  '',
          'clubs' => []
        ];
      }

      // クラブ情報を追加
      $students[$student_id]['clubs'][] = [
        'club_name' => $row['club_name']
      ];
    }
    mysqli_close($link);
    return $students;
  }
}
