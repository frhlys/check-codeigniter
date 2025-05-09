<?php
include("php/config.php");
include("style/header.php");
include("style/sidebar.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_name = $con->real_escape_string($_POST["project_name"]);
    $category = $con->real_escape_string($_POST["category"]);
    $description = $con->real_escape_string($_POST["description"]);

    // Image Upload Handling
    $target_dir = "uploads/";
    $image_name = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image_name;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate file type (only allow JPG, JPEG, PNG, GIF)
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowed_types)) {
        echo "<script>alert('Invalid file type. Only JPG, JPEG, PNG & GIF files are allowed.');</script>";
    } elseif ($_FILES["image"]["size"] > 2 * 1024 * 1024) { // Limit file size to 2MB
        echo "<script>alert('File is too large. Maximum size allowed is 2MB.');</script>";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Insert into database using prepared statements
            $sql = "INSERT INTO portfolio (project_name, category, description) VALUES (?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("sss", $project_name, $category, $description);


            

            if ($stmt->execute()) {
                echo "<script>alert('Portfolio item added successfully!'); window.location.href='portfolio.php';</script>";
            } else {
                echo "<script>alert('Database error: " . $con->error . "');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Error uploading image.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Add Portfolio Item</h2>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Project Name</label>
                        <input type="text" name="project_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-select" required>
                            <option value="Media">Media</option>
                            <option value="Illustration">Illustration</option>
                            <option value="Video">Video</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Add Portfolio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
