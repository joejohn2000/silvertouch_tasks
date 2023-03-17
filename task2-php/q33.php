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
<title>p33</title>
</head>
<body>
<table  width="500px"height="500px"  >
 
      <?php
      for($row=1;$row<=8;$row++)
      {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
          {
          $total=$row+$col;
          if($total%2==0)
          {
          echo "<td bgcolor=white></td>";
          }
          else
          {
          echo "<td  bgcolor=black></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>