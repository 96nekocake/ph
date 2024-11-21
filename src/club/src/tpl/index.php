<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <h1>学生名簿</h1>
  <div class="button-container">
    <a href="registration.php">情報を登録画面する</a>
  </div>
  <table>
    <tr>
      <th>氏名</th>
      <th>性別</th>
      <th>クラブ</th>
      <th>変更</th>
      <th>削除</th>
      <th>クラブ追加</th>
    </tr>
    <tr>
      <?php foreach ($students as $student): ?>
        <td><a href="detail.php?id=<?php echo $student["student_id"]; ?>"><?php echo $student["student_name"] ?>(<?php echo $student['name_kana']; ?>)</a></td>
        <td><?php echo $student['gender'] ?></td>
        <td>
          <?php foreach ($student['clubs'] as $club): ?>
            <?php echo $club["club_name"] ?>部<br>
          <?php endforeach; ?>
        </td>
        <td>変更</td>
        <td>削除</td>
        <td>クラブ追加</td>
    </tr>
  <?php endforeach; ?>
  </table>
</body>

</html>
