<?php
$link = mysqli_connect("localhost", "digitala_notes", "U11nvr93T!T", "digitala_nerdoeNotes");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>