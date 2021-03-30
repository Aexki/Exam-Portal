<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "exam_portal";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
// $name = 'name';
// $id = '1234556';
// $age = '20';
// $password = 'hellothere';
// $gender = 'Male';
// $collegeaddress = 'Silicon';
// $email = 'amanjena1234@gmail.com';
// $branch = 'CSE';
// $resume = 'not there';
// $techskill = '{ "lang" : "python" }';
// $sql = "INSERT INTO student VALUES ('$name','$id','$password','$age','$email','$gender','$collegeaddress','$branch','$techskill','$resume')";
// if (mysqli_query($conn, $sql)) {
// echo "New record created successfully !";
// } else {
// echo "Error: " . $sql . "" . mysqli_error($conn);
// }
// mysqli_close($conn);
?>