<?php
include 'database.php';
if (isset($_POST['Submit'])) {
    $name = $_POST['username']; //Retrieving data from form
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $sql = "insert into class_info(Username,Gender,Phone)values('$name','$gender','$phone')";
    // class_info is table name change it according to your table name 
    // username, gender , phone are table columns change them according to your column
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New info added ')</script>";
    } else {
        echo "Error : " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
echo "arundada";
