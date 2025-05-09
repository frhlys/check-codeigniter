<?php
include("php/config.php");
include("style/header.php");
include("style/sidebar.php");

// Initialize variables
$education_year = $education_course = $education_university = $education_description = "";
$experience_start = $experience_end = $experience_position = $experience_company = $experience_description = "";
$design_web = $design_graphic = $design_print = "";
$coding_html = $coding_css = $coding_jquery = $coding_wordpress = $coding_php = "";

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $education_year = mysqli_real_escape_string($con, $_POST['education_year']);
    $education_course = mysqli_real_escape_string($con, $_POST['education_course']);
    $education_university = mysqli_real_escape_string($con, $_POST['education_university']);
    $education_description = mysqli_real_escape_string($con, $_POST['education_description']);

    $experience_start = mysqli_real_escape_string($con, $_POST['experience_start']);
    $experience_end = !empty($_POST['experience_end']) ? mysqli_real_escape_string($con, $_POST['experience_end']) : NULL;
    $experience_position = mysqli_real_escape_string($con, $_POST['experience_position']);
    $experience_company = mysqli_real_escape_string($con, $_POST['experience_company']);
    $experience_description = mysqli_real_escape_string($con, $_POST['experience_description']);

    $design_web = intval($_POST['design_web']);
    $design_graphic = intval($_POST['design_graphic']);
    $design_print = intval($_POST['design_print']);

    $coding_html = intval($_POST['coding_html']);
    $coding_css = intval($_POST['coding_css']);
    $coding_jquery = intval($_POST['coding_jquery']);
    $coding_wordpress = intval($_POST['coding_wordpress']);
    $coding_php = intval($_POST['coding_php']);

    // Insert Query
    $sql = "INSERT INTO resume 
        (education_year, education_course, education_university, education_description, 
         experience_start, experience_end, experience_position, experience_company, experience_description,
         design_web, design_graphic, design_print,
         coding_html, coding_css, coding_jquery, coding_wordpress, coding_php) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("issssssssiiiiiii", 
        $education_year, $education_course, $education_university, $education_description,
        $experience_start, $experience_end, $experience_position, $experience_company, $experience_description,
        $design_web, $design_graphic, $design_print,
        $coding_html, $coding_css, $coding_jquery, $coding_wordpress, $coding_php
    );

    if ($stmt->execute()) {
        echo "<script>alert('Resume added successfully!'); window.location.href='resume_form.php';</script>";
        exit;
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Resume Form</h2>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <h4>Education</h4>
                    <div class="mb-3">
                        <label for="education_year">Year</label>
                        <input type="number" class="form-control" name="education_year" required>
                    </div>
                    <div class="mb-3">
                        <label for="education_course">Course</label>
                        <input type="text" class="form-control" name="education_course" required>
                    </div>
                    <div class="mb-3">
                        <label for="education_university">University</label>
                        <input type="text" class="form-control" name="education_university" required>
                    </div>
                    <div class="mb-3">
                        <label for="education_description">Description</label>
                        <textarea class="form-control" name="education_description"></textarea>
                    </div>

                    <h4>Experience</h4>
                    <div class="mb-3">
                        <label for="experience_start">Start Date</label>
                        <input type="date" class="form-control" name="experience_start" required>
                    </div>
                    <div class="mb-3">
                        <label for="experience_end">End Date (Leave blank if current)</label>
                        <input type="date" class="form-control" name="experience_end">
                    </div>
                    <div class="mb-3">
                        <label for="experience_position">Position</label>
                        <input type="text" class="form-control" name="experience_position" required>
                    </div>
                    <div class="mb-3">
                        <label for="experience_company">Company</label>
                        <input type="text" class="form-control" name="experience_company" required>
                    </div>
                    <div class="mb-3">
                        <label for="experience_description">Description</label>
                        <textarea class="form-control" name="experience_description"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="resume_edit.php" class="btn btn-warning">Edit Resume</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
