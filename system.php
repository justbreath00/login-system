<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "inventorydb";
    $conn = "";

    try {
         $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
    }
    catch(mysqli_sql_exception ) {
        echo "Connection failed: ";

    }

  $email = $_POST['user_email'];
  $name = $_POST['student_name'];
  $course = $_POST['student_course'];
  $year = $_POST['student_year'];

  $sql = "INSERT INTO students (student_id, student_name, student_course,student_year)
  		VALUES ('$id', '$name', '$course', '$year')";

  if ($conn->query($sql) === TRUE){
  	echo "New record created successfully <br>";
  }
  else {
  	echo "error: " . $sql . "<br> . $connect_error";
  }


   
?>