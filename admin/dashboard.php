<?php
include("php/config.php");
include("style/header.php");
include("style/sidebar.php");

// Fetch all records from about_me
$query = "SELECT * FROM about_me";
$result = $con->query($query);
?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">User Dashboard</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Availability</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><img src="uploads/profile_photos/<?php echo $row['profile_image']; ?>" width="60" height="60" style="object-fit:cover;"></td>
                <td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
                <td><?php echo $row['role']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['availability']; ?></td>
                <td>
                    <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>


