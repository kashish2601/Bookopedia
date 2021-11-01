<?php 

$conn = mysqli_connect("localhost", "root", "", "bookopedia");
$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['em'])) {
        $email = $_POST["em"];
        $password = $_POST["pwd"];
       
    
      $sql = "INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$password');";
       
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $insert = true;

        } else {
            echo "record does not insert" . mysqli_error($conn);
        }
    }
}


?>