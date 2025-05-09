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
        echo "<script>alert('Your skills added successfully!'); window.location.href='resume_form.php';</script>";
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
    <title>Skills Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .progress { height: 10px; }
        .skill-label { font-weight: bold; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Skills Form</h2>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <h4>Design Skills</h4>
                    <?php
                    function skillSlider($label, $name, $value) {
                        echo "
                        <div class='mb-3'>
                            <label class='skill-label'>$label</label>
                            <input type='range' class='form-range' name='$name' min='0' max='100' value='$value' oninput='updateProgress(this)'>
                            <div class='progress mt-2'>
                                <div class='progress-bar bg-danger' role='progressbar' style='width: {$value}%;'></div>
                            </div>
                        </div>";
                    }
                    
                    skillSlider("Web Design", "design_web", $design_web);
                    skillSlider("Graphic Design", "design_graphic", $design_graphic);
                    skillSlider("Print Design", "design_print", $design_print);
                    ?>

                    <h4>Coding Skills</h4>
                    <?php
                    skillSlider("HTML5", "coding_html", $coding_html);
                    skillSlider("CSS3", "coding_css", $coding_css);
                    skillSlider("jQuery", "coding_jquery", $coding_jquery);
                    skillSlider("WordPress", "coding_wordpress", $coding_wordpress);
                    skillSlider("PHP", "coding_php", $coding_php);
                    ?>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="skill_form.php" class="btn btn-warning">Edit Skills</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function updateProgress(slider) {
            let progressBar = slider.nextElementSibling.querySelector('.progress-bar');
            progressBar.style.width = slider.value + '%';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
