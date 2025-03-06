<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Confirm Deletion</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/views-css/delete.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>

    <div class="container centered-container">
        <div class="text-center">
            <h1>Are you sure?</h1>
            <p>Are you sure you want to delete the Post "<?php echo esc($post['title']); ?>"?</p>

            <form action="/posts/delete/<?php echo esc($post['id']); ?>" method="post">
                <button type="submit" class="btn btn-danger btn-lg">Yes, delete</button>
            </form>

            <a href="/" class="btn btn-secondary btn-lg mt-3">Cancel</a>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>
