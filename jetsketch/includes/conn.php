<?php
$con=mysqli_connect("localhost","root","","art");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
