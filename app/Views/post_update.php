<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>

    <div class="container mt-5">

        <div class="bg-secondary text-white p-4 rounded mb-4 text-center">
            <h1>Edit Post</h1>
        </div>

        <?php if (session()->has('success')): ?>
            <div class="alert alert-success">
                <?php echo session('success'); ?>
            </div>
        <?php endif; ?>

        <?php if (session()->has('error')): ?>
            <div class="alert alert-danger">
                <?php echo session('error'); ?>
            </div>
        <?php endif; ?>

        <form action="/posts/update/<?php echo esc($post['id']); ?>" method="post">
            <?= csrf_field(); ?>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="<?php echo esc($post['title']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5" required><?php echo esc($post['content']); ?></textarea>
            </div>

            <button type="submit" class="btn btn-warning btn-lg">Save Changes</button>
        </form>

        <br>

        <a href="/" class="btn btn-primary btn-lg">Back to Posts List</a>

    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>
