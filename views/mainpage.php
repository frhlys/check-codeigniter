<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
</head>
<body>
    <h1>Welcome, <?= $this->session->userdata('username'); ?>!</h1>
    <p>Email: <?= $this->session->userdata('email'); ?></p>
    <p>Age: <?= $this->session->userdata('age'); ?></p>
    <a href="<?= site_url('login/logout'); ?>">Logout</a>
</body>
</html>
