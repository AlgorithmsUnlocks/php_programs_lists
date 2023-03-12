<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profilePicture = $_FILES['profile_picture'];

    if (empty($name) || empty($email) || empty($password) || empty($profilePicture)) {
        die('Please fill out all the fields');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Please enter a valid email address');
    }

    // Save the profile picture to the server
    $uploadsDirectory = 'uploads/';
    $uniqueFilename = uniqid() . '_' . $profilePicture['name'];
    $destination = $uploadsDirectory . $uniqueFilename;

    if (!move_uploaded_file($profilePicture['tmp_name'], $destination)) {
        die('Failed to upload the profile picture');
    }

    // Save the user's name, email, and profile picture filename to a CSV file
    $user = array($name, $email, $uniqueFilename, date('Y-m-d H:i:s'));
    $file = fopen('users.csv', 'a');

    if ($file === false) {
        die('Failed to open the users file');
    }

    fputcsv($file, $user);
    fclose($file);

    // Set the user's name as a cookie
    setcookie('user', $name);

    // Redirect to the success page
    header('Location: success.php');
    exit();
}
?>
