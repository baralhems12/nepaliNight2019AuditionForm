<?php
     $fname = $_POST['fname'];
     $mname = $_POST['mname'];
     $lname = $_POST['lname'];
     $name = $fname . ' ' . $mname . ' ' . $lname;
     $email = $_POST['email'];
     $phone_number = $_POST['phoneNumber'];
     $performance_type = $_POST['performanceType'];
     $other_desc = $_POST['otherDesc'];
     $nature = $_POST['gridRadios'];
     $nature_text = "Single";
     if($nature == 'option2'){
        $nature_text = "Groups";
     }
     $performers = $_POST['performers'];
     $audition_date = $_POST['trip-start'];
     $timing = $_POST['timing'];
     $timing_time = "";
     if($timing==7){
         $timing_time = "9:00 PM";
     } if($timing==6){
        $timing_time = "8:30 PM";
    } if($timing==3){
        $timing_time = "7:00 PM";
    } if($timing==5){
        $timing_time = "8:00 PM";
    } if($timing==4){
        $timing_time = "7:30 PM";
    } if($timing==2){
        $timing_time = "6:30 PM";
    } if($timing==1){
        $timing_time = "6:00 PM";
    } 

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=nsa-audition", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "insert into audition (name, email, phone_number, performance_type, other_desc, nature_text, performers, audition_date, timing)
              values ('$name', '$email', '$phone_number', '$performance_type', '$other_desc', '$nature_text', '$performers', '$audition_date', '$timing_time')";
    $result = $conn->query($query);
    header("Location: http://www.nsaulm.com");
    
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 
?>