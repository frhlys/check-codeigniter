<?php
include("php/config.php");
include("style/header.php");
include("style/sidebar.php");

// Fetch all records from about_me
$query = "SELECT * FROM about_me";
$result = $con->query($query);
?>

<h2>Edit User Profile</h2>

<form action="<?php echo site_url('admin/dashboard/update'); ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $user->id; ?>">

    <label>First Name:</label>
    <input type="text" name="first_name" value="<?php echo $user->first_name; ?>"><br>

    <label>Last Name:</label>
    <input type="text" name="last_name" value="<?php echo $user->last_name; ?>"><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $user->email; ?>"><br>

    <label>Phone:</label>
    <input type="text" name="phone" value="<?php echo $user->phone; ?>"><br>

    <button type="submit">Save Changes</button>
</form>
