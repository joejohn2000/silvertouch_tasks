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
<title>signup</title>
</head>

<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      class="form-control" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      class="form-control" 
                      placeholder="Name">
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
              
               <input type="text" class="mt-1" 
                      name="uname" 
                      class="form-control" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      class="form-control" 
                      placeholder="User Name">
          <?php }?>
          
          <label>Email</label>
     	<input type="email" 
                 name="email" 
                 class="form-control" 
                 placeholder="email">

     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 class="form-control" 
                 placeholder="Password">

          <label>Re Password</label>
          <input type="password" class="form-control" 
                 name="re_password" 
                 placeholder="Re_Password">
                 <br>

               <div class="d-grid gap-2">     
               <button type="submit" class="btn btn-secondary ">Sign Up</button>
                <a href="index.php" class="link-dark">Already have an account?</a>
               </div> 
         
                
     	
     </form>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>