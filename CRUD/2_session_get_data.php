<?php

//Start the session and get the data
session_start();
if (isset($_SESSION["username"])) {

    echo "Welcome" . $_SESSION['username'];
    echo "<br> Your favourite Category is " . $_SESSION['favCat'];

    echo '<br>';
} else {
    echo "Please login to Continue ";
}
