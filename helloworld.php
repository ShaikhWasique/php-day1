<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
 echo "Types of comments";
 echo "this is a comments example ";
 $name = "wasique";
  $age=18;
  $time=2.48;
  $class = true;
  $students_arr = array("Wasique,Ismail,Kashif");
  class student{public $marks;
  }
  $stud = new student();
  $stud->marks= 90;
  $null_var =null;
  echo "<br> string ;" ,$name;
  echo "<br> integer;" ,$age;
  echo "<br> float;" ,$time;
  echo "<br> boolean;" ,$class;
  echo "<br> array;" ,$students_arr[0];
  echo "<br> null;" ,$null_var;
  ?>   
</body>
</html> 