<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>
</head>
<body>
    <h1><?php echo $title ?></h1>

    <ul>
        <?php foreach($users as $user): ?>
        <li><?php echo e($user) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>