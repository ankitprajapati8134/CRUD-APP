<?php
// DEFNITION => What is session?  => Used to manage information across different pages

// HERE I SET THE SESSION

//Verify the User login information
session_start(); 
$_SESSION['username'] = 'Ankit';
$_SESSION['favCat'] = 'Books';
echo'We have saved your Session'; 


?>