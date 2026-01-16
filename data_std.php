<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Student Data</title>

<style>
table{
    border-collapse: collapse;
    width:60%;
    margin:40px auto;
}
th, td{
    border:1px solid #333;
    padding:10px;
    text-align:left;
}
th{
    background:#007bff;
    color:white;
}
</style>
</head>

<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['std_name'];
    $id = $_POST['std_id'];
    $bd = $_POST['std_bd'];
    $age = $_POST['std_age'];
    $email = $_POST['std_email'];
    $depart = $_POST['std_depart'];

    $subject = isset($_POST['std_subject']) 
        ? implode(", ", $_POST['std_subject']) 
        : "ไม่ได้เลือก";

    echo "<table>";
    echo "<tr><th>หัวข้อ</th><th>ข้อมูล</th></tr>";
    echo "<tr><td>ชื่อ</td><td>$name</td></tr>";
    echo "<tr><td>รหัส</td><td>$id</td></tr>";
    echo "<tr><td>วันเกิด</td><td>$bd</td></tr>";
    echo "<tr><td>อายุ</td><td>$age</td></tr>";
    echo "<tr><td>วิชา</td><td>$subject</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>แผนก</td><td>$depart</td></tr>";
    echo "</table>";
}
?>

</body>
</html>
