<?php
  #include 'config.php';
  if(isset($_POST['submit'])){
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    $select = "Select * from user_form where uname = '$uname' && password = '$password'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        header('location:index.php');
    }else{
        $error[] = 'incorrect username or password!';
    }
  };
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ichat real time chat app</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
    <script defer src="js/clint.js"></script>
</head>
    <body> 
        <div class="container">

            <div class="card w-50">
                <div class="card-body">
                  <h5 class="card-title">ICHAT</h5>
                  <form>

                    <?php
                      if(isset($error)){
                        foreach($error as $error){
                          echo '<span class = "error-msg">'.$error.'</span>';
                        };
                      };
                    ?>
                    <div class="mb-3">
                        <label for="exampleInputUsername" class="form-label Username">Username</label>
                        <input type="text" name="uname" class="form-control" required placeholder="Enter your Username" >
                      </div>
                    
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1"required placeholder="Enter your password">
                    </div>
                    
                    <div class="d-grid gap-2">                     
                        <button type="submit" name="submit" class="btn btn-primary">Login Now</button>
                      </div>
                    
                    <p>don't have an account? <a href="Register.php" class="btn"> register now</a></p>
                    <!-- #a180e1 -->
                  </form> 
                </div>
              </div>
        </div>

                 
    </body>

</html>