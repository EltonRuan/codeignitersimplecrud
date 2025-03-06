<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Post</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>

    <div class="container mt-5">

        <div class="bg-secondary text-white p-4 rounded mb-4 text-center">
            <h1><?php echo esc($post['title']); ?></h1>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <p class="card-text"><?php echo esc($post['content']); ?></p>
                <p class="card-text"><small class="text-muted">Published on: <?php echo esc($post['created_at']); ?></small></p>
            </div>
        </div>

        <div class="d-flex justify-content-start">
            <a href="/" class="btn btn-primary btn-lg">Back to Post List</a>
        </div>

    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>
