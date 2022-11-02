<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newpost</title>
</head>

<body>
    <h1 align="center">Webboard JUKJIK</h1>
    <hr>
    <table>
        <tr><td>
        <?php 
        echo "&nbsp;ผู้ใช้ &nbsp; $_SESSION[username]"; 
        ?>
        </td></tr>
    <tr>
            <td>หมวดหมู่ : </td>
            <td><select name="category">
                    <option value="general">เรื่องทั่วไป</option>
                    <option value="study">เรื่องเรียน</option>
                </select> </td>
        </tr>
        <tr>
            <td>หัวข้อ : </td>
            <td><input type="text" name="h" size="50"></td>
        </tr>
        <tr><td>เนื้อหา : </td>
        <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td ><input type="submit" value="บันทึกข้อความ"></td></tr>
    </table>
    

        

</body>

</html>