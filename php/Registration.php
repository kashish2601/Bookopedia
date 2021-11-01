<?php 

$conn = mysqli_connect("localhost", "root", "", "bookopedia");
$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['firstname'])) {
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["confirm"];
       
    
      $sql = "INSERT INTO `registration` (`fname`, `lname`, `email`, `password`, `confirm`) VALUES ('$fname', '$lname', '$email', '$password', '$cpassword');";
       

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $insert = true;

        } else {
            echo "record does not insert" . mysqli_error($conn);
        }
    }
}


?>