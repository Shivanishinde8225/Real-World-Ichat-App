<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>ichat real time chat app</title>

    <script defer src="http://localhost:8000/socket.io/socket.io.js"></script>
    <script defer src="js/clint.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <div class="card" style="width: 20rem;">
        <!-- Just an image -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="ichat.jpg" class="rounded-circle" width="40" height="40" alt="">
            </a>
        </nav>
        <div class="alert alert-primary" role="alert">
            This is a primary 
          </div>
    </div>
    <div class="card" style="width: 50rem;">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="ichat.jpg"  width="40" height="40" alt="">
                
            </a>
        </nav>
        <div class="card-body">
            <!-- <div class="alert alert-success message right" role="alert">
                harry : Hey ,How are you?
              </div>
            <div class="alert alert-success message left" role="alert">
                Ron : Hey ,I am fine. Lorem ipsum dolor sit amet adipisicing elit. </div>
              -->
            
            
        </div>
        <nav class="navbar navbar-light bg-light">

            <!-- <div class="custom-file">
                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div> -->
              <!-- <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div> -->
              <div class="send" style="width: 50rem;"  >
                <form class="form-inline" id="send-container">   
                  <input class="form-control mr-sm-2 "id="messageInp" type="text" placeholder="Type a message" aria-label="Search" >
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Send</button>
                </form>
            </div>

          </nav>
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    
</body>
</html>