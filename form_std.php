<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Student Registration</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f4f4f4;
}

.container{
    width: 500px;
    margin: 40px auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
}

h2{
    text-align:center;
}

label{
    display:block;
    margin-top:10px;
}

input, select{
    width:100%;
    padding:8px;
    margin-top:5px;
}

.subjects input{
    width:auto;
}

.submit{
    margin-top:15px;
    background:#007bff;
    color:white;
    border:none;
    padding:10px;
    width:100%;
    border-radius:5px;
    cursor:pointer;
}

.submit:hover{
    background-color:red;
    color:white;
}
</style>
</head>

<body>
<div class="container">
<h2>ข้อมูลนักศึกษา</h2>

<form action="data_std.php" method="post">

<label>ชื่อ-นามสกุล</label>
<input type="text" name="std_name" required>

<label>รหัสนักศึกษา</label>
<input type="number" name="std_id" required>

<label>วันเกิด</label>
<input type="date" name="std_bd" required>

<label>อายุ</label>
<input type="number" name="std_age" required>

<label>วิชา</label>
<div class="subjects">
<input type="checkbox" name="std_subject[]" value="ไทย"> ภาษาไทย
<input type="checkbox" name="std_subject[]" value="คณิตศาสตร์"> คณิตศาสตร์
<input type="checkbox" name="std_subject[]" value="วิทยาศาสตร์"> วิทยาศาสตร์
<input type="checkbox" name="std_subject[]" value="อังกฤษ"> ภาษาอังกฤษ
</div>

<label>Email</label>
<input type="email" name="std_email" required>

<label>Password</label>
<input type="password" name="std_pass" required>

<label>แผนก</label>
<select name="std_depart" required>
<option value="">-- เลือกแผนก --</option>
<option value="DT">DT</option>
<option value="IT">IT</option>
</select>

<input type="submit" value="บันทึกข้อมูล" class="submit">

</form>
</div>
</body>
</html>

