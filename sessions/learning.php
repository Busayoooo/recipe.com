<!-- sessions and cookies -->

<?php 
// sessions allow us to store user information on a server.
// cookies are used to store user information on your evice. They are stored on the browser cache data/files.

//  sessions
// super globals:
// $_GET;
// $_POST;
// $_SESSION

// initialising sessions
session_start();

$_SESSION['name']= 'Jhon Doe';

print_r($_SESSION);

session_unset(); // to destroy A SESSION

?>