<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Post List</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>

    <div class="container mt-5">

        <div class="bg-secondary text-white p-4 rounded mb-4 text-center">
            <h1>Post List</h1>
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

        <div class="d-flex justify-content-end mb-4">
            <a href="posts/create" class="btn btn-primary btn-lg">Create New Post</a>
        </div>

        <?php if (!empty($posts) && is_array($posts)): ?>
            <div class="row">
                <?php foreach ($posts as $post): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo esc($post['title']); ?></h5>
                                <p class="card-text"><small class="text-muted">Published on: <?php echo esc($post['created_at']); ?></small></p>
                                <div class="d-flex justify-content-between">
                                    <a href="posts/view/<?php echo esc($post['id']); ?>" class="btn btn-info btn-sm">View</a>
                                    <a href="posts/update/<?php echo esc($post['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="posts/delete/<?php echo esc($post['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="d-flex justify-content-center">
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
            </div>

        <?php else: ?>
            <div class="alert alert-info">
                No posts found.
            </div>
        <?php endif; ?>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>