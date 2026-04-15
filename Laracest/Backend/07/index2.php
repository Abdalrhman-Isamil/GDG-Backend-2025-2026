<?php
require('connect.php');
$query ="SELECT * FROM `myemplyeee`";
$result= mysqli_query($connection,$query);
$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
// echo "<pre>";
// print_r($customers);
// die();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">index</th>
            <th scope="col">first_name</th>
            <th scope="col">last_name</th>
            <th scope="col">email</th>
            <th scope="col">gender</th>
            <th scope="col">money</th>
            <th scope="col">city</th>
            <th scope="col">country</th>
            <th scope="col">country_code</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach($customers as $customer){
        ?>
        <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td><?php echo $customer['first_name']; ?></td>
            <td><?php echo $customer['last_name']; ?></td>
            <td><?php echo $customer['email']; ?></td>
            <td><?php echo $customer['gender']; ?></td>
            <td><?php echo $customer['money']; ?></td>
            <td><?php echo $customer['city']; ?></td>
            <td><?php echo $customer['country']; ?></td>
            <td><?php echo $customer['country_code']; ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</body>
</html>