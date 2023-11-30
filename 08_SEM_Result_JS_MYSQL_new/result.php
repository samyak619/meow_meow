<?php
$insert = false;
if(isset($_POST['student_name'])){
// Connecting to the Database
$server = "localhost";
$username = "root";
$password = "sidn9190";

// Create a connection
$con = mysqli_connect($server, $username, $password);

// Die if connection was not successful
if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
// else{
//     echo "Connection was successful<br>";
// }

$student_name =$_POST['student_name'];
$student_id =$_POST['student_id'];
$mse_marks =$_POST['mse_marks'];
$ese_marks =$_POST['ese_marks'];
$sql = "INSERT INTO `lab7`.`store` (`student_name`, `student_id`, `mse_marks`,  `ese_marks`, `dt`) VALUES ('$student_name', '$student_id', '$mse_marks', '$ese_marks',  current_timestamp());";
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();
}
?>

<?php
        if($insert == true){
        // echo '<a href="/CWH/prac.html">prac</a>';
       
      echo "<p>Inserted successfuly</p>";
      
        }
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>