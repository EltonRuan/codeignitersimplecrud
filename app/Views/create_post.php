<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a New Post</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>

    <div class="container mt-5">

        <div class="bg-secondary text-white p-4 rounded mb-4 text-center">
            <h1>Create a New Post</h1>
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

        <div class="d-flex justify-content-start mb-4">
            <a href="/" class="btn btn-primary">Back to Post List</a>
        </div>

        <form action="/posts/create" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg">Create Post</button>
        </form>

    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>
