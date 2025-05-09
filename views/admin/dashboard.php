<div class="container mt-5">
    <h2>Admin Dashboard</h2>
    <div class="row mt-4">
        <div class="col-md-6">
            <canvas id="skillsChart"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="educationChart"></canvas>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <canvas id="experienceChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const skillsCtx = document.getElementById('skillsChart').getContext('2d');
    new Chart(skillsCtx, {
        type: 'bar',
        data: {
            labels: ['Web Design', 'Graphic Design', 'Print Design', 'HTML', 'CSS', 'jQuery', 'WordPress', 'PHP'],
            datasets: [{
                label: 'Skill Proficiency (%)',
                data: [
                    <?= $skills['design_web'] ?? 0 ?>,
                    <?= $skills['design_graphic'] ?? 0 ?>,
                    <?= $skills['design_print'] ?? 0 ?>,
                    <?= $skills['coding_html'] ?? 0 ?>,
                    <?= $skills['coding_css'] ?? 0 ?>,
                    <?= $skills['coding_jquery'] ?? 0 ?>,
                    <?= $skills['coding_wordpress'] ?? 0 ?>,
                    <?= $skills['coding_php'] ?? 0 ?>
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.6)'
            }]
        }
    });

    const educationCtx = document.getElementById('educationChart').getContext('2d');
    new Chart(educationCtx, {
        type: 'pie',
        data: {
            labels: <?= json_encode(array_column($education, 'education_course')) ?>,
            datasets: [{
                label: 'Education History',
                data: <?= json_encode(array_column($education, 'education_year')) ?>,
                backgroundColor: ['red', 'blue', 'green', 'yellow', 'purple']
            }]
        }
    });

    const experienceCtx = document.getElementById('experienceChart').getContext('2d');
    new Chart(experienceCtx, {
        type: 'doughnut',
        data: {
            labels: <?= json_encode(array_column($experience, 'experience_company')) ?>,
            datasets: [{
                label: 'Experience',
                data: <?= json_encode(array_fill(0, count($experience), 1)) ?>,
                backgroundColor: ['orange', 'cyan', 'pink', 'brown']
            }]
        }
    });
</script>
