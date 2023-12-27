<?php

include 'init.php';
include $head;

?>

<div class="jumbotron text-center">
  <h1>Al-Shahbaa Social Media</h1>
  <p>A platform to share Knowledge</p>
  <img src="img/headerlogo.png" alt="Main" class="img-login" />
</div>

<div class='container'>
  <div class="row">

    <div class="col-md-6 col-sm-12 text-login">
      <span>
        A website for managing student and doctoral data
      </span>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat,
        nemo aperiam veritatis distinctio assumenda dolor cum aspernatur perspiciatis? Enim,
        eaque. Veritatis unde a nulla velit deserunt nostrum quae architecto ab!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat.
      </p>
    </div>


    <div class="col-md-6 col-sm-12">
      <div class="login-container mt-5">
        <div class="heading">Login</div>

        <form action="includes/login.php" method="post" class="form">

          <input type="text" class="input" name="username" placeholder="User Name" />
          <input type="password" class="input" name="password" placeholder="Password" />

          <div class="form-group text-center mt-4">

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="userType" id="StudentRadio" value="user" checked />
              <label class="form-check-label" for="StudentRadio">
                <i class="fas fa-user-tie fa-sm  "></i>
                Student
              </label>
            </div>

            <div class="form-check form-check-inline ">
              <input class="form-check-input" type="radio" name="userType" id="DoctorRadio" value="doctor" />
              <label class="form-check-label" for="DoctorRadio">
                <i class="fas fa-chalkboard-teacher fa-sm "></i>
                Teacher
              </label>
            </div>
          </div>

          <input name="login" class="login-button" type="submit" value="Login">
          <a href="admin.php" style='text-decoration:none;'>you are the admin?</a>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
include $foot;
?>