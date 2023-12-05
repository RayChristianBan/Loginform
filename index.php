<?php 
    include("connection.php");
    include("signin.php")
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  <body>
    <div>
      <nav class="nav navbar navbar-expand-lg">
      <i class="cap fa-solid fa-graduation-cap"></i>
  <div class="container">
    <a class="navbar-brand text-white fw-bold fs-4" href="#">Login Form</a>
    <div class="navbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bold " aria-current="page" href="#"><i class="icon-1 fa-solid fa-house"></i> Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-bold" href="about.php"><i class="icon-1 fa-solid fa-circle-info"></i> About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-bold" href="courses.php"><i class="icon-1 fa-solid fa-gears"></i> Courses</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-bold" href="#"><i class="icon-1 fa-solid fa-phone"></i> Contact</a>
        </li>
 
      </ul>
    </div>
  </div>
</nav></div>
    <form class="form" action="signin.php" method="POST">
      <h1 class="text-center">Student Login Form</h1>
      <div class="form-floating mb-3">
        <i class="icon fa-solid fa-user-graduate "></i>
        <input type="text" class="form-control" name="name" id="name" placeholder="Student Name" required>
        <label for="floatingName">Student Name</label>
      </div>

      <div class="form-floating mb-3">
        <i class="icon fa-solid fa-hashtag"></i>
        <input type="number" class="form-control" name="number" id="number" placeholder="Student Number" required>
        <label for="floatingName">Student Number</label>
      </div>

      <div class="form-floating mb-3">
        <i class="icon fa-solid fa-gears"></i>
        <input type="text" class="form-control" name="course" id="course" placeholder="Student Course" required>
        <label for="floatingName">Student Course</label>
      </div>


      <div class="form-floating mb-3">
        <i class="icon fa-solid fa-inbox"></i>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        <label for="floatingEmail">Email</label>
      </div>

      <div class="form-floating mb-3">
        <i class="icon fa-solid fa-key"></i>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-floating mb-3">
        <i class="icon fa-solid fa-key"></i>
        <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Retype Password" required>
        <label for="floatingRetypePassword">Retype Password</label>
      </div>
      <input class="btn btn-primary rounded-pill fw-bold fs-5" type="submit" id="btn" value="Sign In" name = "submit"/>
    </form>
    <div class="img">
    <img src="assets/hero.svg" class="img" alt="/">
    <h3>By: Raymond Christian Bancod</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>
