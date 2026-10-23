<?php
$connection = mysqli_connect("localhost", "root", "", "clients");

if(!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}