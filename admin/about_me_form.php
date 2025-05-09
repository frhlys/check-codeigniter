<?php
// Include database configuration
include("php/config.php");
include("style/header.php");
include("style/sidebar.php");


// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $con->real_escape_string($_POST['first_name']);
    $last_name = $con->real_escape_string($_POST['last_name']);
    $role = $con->real_escape_string($_POST['role']);
    $job = $con->real_escape_string($_POST['job']);
    $about_desc = $con->real_escape_string($_POST['about_desc']);
    $age = (int) $_POST['age'];
    $residence = $con->real_escape_string($_POST['residence']);
    $email = $con->real_escape_string($_POST['email']);
    $phone = $con->real_escape_string($_POST['phone']);
    $social_media = $con->real_escape_string($_POST['social_media']);
    $availability = $con->real_escape_string($_POST['availability']);
	
	  // Handle Photo Upload
    $photo_name = '';
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/profile_photos';
        $originalName = basename($_FILES['photo']['name']);
        $photo_name = time() . '_' . $originalName; // unique filename
        $targetPath = $uploadDir . $photo_name;

        move_uploaded_file($_FILES['photo']['tmp_name'], $targetPath);
    }

    // Insert Query
$sql = "INSERT INTO about_me (first_name, last_name, role, job, about_desc, age, residence, email, phone, social_media, availability, profile_image) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $con->prepare($sql);
$stmt->bind_param("sssssiisssss", $first_name, $last_name, $role, $job, $about_desc, $age, $residence, $email, $phone, $social_media, $availability, $profile_image);

    if ($stmt->execute()) {
        echo "<script>alert('Record added successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $con->error . "');</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">About Me</h2>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="role">Role</label>
                        <input type="text" class="form-control" name="role" required>
                    </div>

                    <div class="mb-3">
                        <label for="job">Job</label>
                        <input type="text" class="form-control" name="job" required>
                    </div>

                    <div class="mb-3">
                        <label for="about_desc">About Description</label>
                        <textarea class="form-control" name="about_desc" rows="4" required></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" name="age" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="residence">Residence</label>
                            <input type="text" class="form-control" name="residence" required>
                        </div>
                         <div class="mb-4 mb-3">
						<label>Availability</label>
						<input type="radio" name="availability" value="Yes" required> Yes
						<input type="radio" name="availability" value="No" required> No
						</div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>

                    <div class="mb-3">
                        <label for="social_media">Social Media</label>
                        <input type="text" class="form-control" name="social_media" required>
                    </div>
					
					    <div class="mb-3">
                        <label for="photo">Profile Photo</label>
                        <input type="file" class="form-control" name="photo" accept="image/*" required>
                    </div>

                    

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
