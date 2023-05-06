<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <div class="container" >
  <?php include('message.php');?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Create Admin
                        <a href="AdminSettings.php" class="btn btn-danger float-end ">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="code.php" method = "POST">
                   <div class="mb-3">
                    <label> Full Name</label>
                    <input type="text" name="name"class="form-control">
                   </div>
                   <div class="mb-3">
                    <label> Username</label>
                    <input type="text" name="user"class="form-control">
                   </div>
                   <div class="mb-3">
                    <label> Password</label>
                    <input type="text" name="pass"class="form-control">
                   </div>
                    <div class="mb-3">
                        <button type= "submit"  name= "save_adn"class= "btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>