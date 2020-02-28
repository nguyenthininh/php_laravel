<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student listing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1>Danh sach sinh vien</h1>
<table class="table">
    <thread>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mark</th>
    </thread>
    <tbody>

    <?php foreach ($student as $s): ?>
    <tr>
        <td>#<?php echo $s['id'];?></td>
        <td>#<?php echo $s['name'];?></td>
        <td>#<?php echo $s['email'];?></td>
        <td>#<?php echo $s['mark'];?></td>
    </tr>





<?php endforeach;?>
    </tbody>


</table>

</body>
</html>
