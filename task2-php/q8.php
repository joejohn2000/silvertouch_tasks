<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>p8</title>
</head>
<body>
<?php
$name1 = 'joe';
$name2 = 'aljo';
$name3 = 'avinash';
?>
<table class="table table-hover">
    <thead >
        <tr class="table-info">
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">job</th>
        </tr>
        <tbody>
    <tr class="table-light">
      <th class="table-secondary" scope="row">1</th>
      <td class="table-secondary" class="table-secondary"> <?php echo $name1; ?></td>
      <td class="table-secondary">john</td>
      <td class="table-secondary">software developer</td>
    </tr>
    <tr class="table-light">
      <th class="table-secondary" scope="row">2</th>
      <td class="table-secondary"> <?php echo $name2; ?></td>
      <td class="table-secondary">jose</td>
      <td class="table-secondary">networking engineering</td>
    </tr>
    <tr class="table-light" class="table-light">
      <th class="table-secondary" scope="row">3</th>
      <td class="table-secondary"> <?php echo $name3; ?></td>
      <td class="table-secondary">shijin</td>
      <td class="table-secondary">manager</td>
    </tr>
  </tbody>
    </thead>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>