<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD App</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="pt-4">
        <div class="container" style="background-color: aqua ; border:2px green solid; border-radius:2%">
            <form method="POST" action="/update/<?php echo e($posts->id); ?>">
                <?php echo csrf_field(); ?>
                <h1 class="text-center">Laravel Crud App</h1>
                <h3 class="text-center"><u>Update Data</u></h3>
                <br />
                <div class="mb-3">
                    <label>
                        <b>
                            Post Title :
                        </b>
                    </label>
                    <input type="text" name="title" class="form-control" value=<?php echo e($posts->post_title); ?>>
                </div>

                <div class="mb-3">
                    <label>
                        <b>
                            Post Author :
                        </b>
                    </label>
                    <input type="text" name="author" class="form-control" value=<?php echo e($posts->post_author); ?>>
                </div>
                <center>
                    <button type="submit" name="update" class="btn btn-success">UPDATE</button>
                </center>
            </form>
        </div>
    </div>
</body>

</html><?php /**PATH /home/nte-596-vm/Desktop/laravel_crud/crud/resources/views/edit.blade.php ENDPATH**/ ?>