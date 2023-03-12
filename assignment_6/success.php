<?php include ("includes/header.php"); ?>
<?php

// Check if the user's name is set in the session
if (!isset($_COOKIE['user'])) {
    header('Location: index.php');
    exit();
}

// Read the users from the CSV file
$users = array();
$file = fopen('users.csv', 'r');

if ($file === false) {
    die('Failed to open the users file');
}

while (($row = fgetcsv($file)) !== false) {
    $users[] = $row;
}

fclose($file);
?>
    <section id="header-part">

        <div class="container">
            <div class="logo-here">
                <h2>মডিউল ৬ এর এসাইনমেন্ট </h2>
            </div>
        </div>

    </section>

    <section id="main-part">
    <div class="container">

    <div class="main-content-start p-5">
        <div class="text-content">

            <div class="button-group">
                <a href="index.php"><button type="button" class="btn btn-outline-primary">HTML Forms </button></a>
                <a href="success.php"><button type="button" class="btn btn-outline-secondary"> View Data</button></a>
            </div>
        </div>

        <div class="dynamic-content-wrapper">

            <h1>User Registration Successful</h1>
            <p>Welcome, <?php echo $_COOKIE['user']; ?>!</p>

            <h2>Registered Users</h2>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Profile Picture</th>
                    <th>Registration Date</th>
                </tr>

                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user[0]; ?></td>
                        <td><?php echo $user[1]; ?></td>
                        <td><img src="uploads/<?php echo $user[2]; ?>" width="100"></td>
                        <td><?php echo $user[3]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
    </div>
    </section>

<?php include ("includes/footer.php"); ?>