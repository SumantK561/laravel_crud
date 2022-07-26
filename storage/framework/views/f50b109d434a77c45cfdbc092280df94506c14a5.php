<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="pt-4">
    <div class="container " style="background-color: aqua ; border:2px green solid; border-radius:2%">

                <h1 class="text-center">Laravel Crud App</h1>
                <h3 class="text-center"><u>Show Data</u></h3>
                <br/>
        <table class="table table-bordered ashadow text-center table-striped">
            <tr>
                <th>
                    <b>Post id</b>
                </th>
                <th>
                    <b>Post Title</b>
                </th>
                <th>
                    <b>Post Author</b>
                </th>
                <th>
                    <b>Post Delete</b>
                </th>
                <th>
                    <b>Post Edit</b>
                </th>
            </tr>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($post->id); ?></td>
                <td><?php echo e($post->post_title); ?></td>
                <td><?php echo e($post->post_author); ?></td>
                <td><a href="/delete/<?php echo e($post->id); ?>" class="btn btn-danger">Delete</a></td>
                <td><a href="/edit/<?php echo e($post->id); ?>" class="btn btn-success">Edit</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        </div>
    </div>
</body>

</html><?php /**PATH /home/nte-596-vm/Desktop/laravel_crud/crud/resources/views/show.blade.php ENDPATH**/ ?>