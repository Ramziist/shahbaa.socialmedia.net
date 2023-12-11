<?php
include 'init.php';
include $head;




?>
    <div class="jumbotron text-center">
      <h1>Al-Shahbaa Social Media</h1>
      <p>A platform to share Knowledge</p>
    </div>

    <div class="row">
      <div class="col-sm-6 mainphoto">
        <img src="img/headerlogo.png" alt="Main" />
      </div>

      <div class="mainbla">
        <p><i class="fab fa-digital-ocean fa-6x fa-fw"></i></p>
        <h2>University of Care and <br> Academic Excellence</h2>

        <form action="includes/login.php" method="post">
          <div class="form-group">
            <label>User Name</label>
            <input
              type="text"
              class="form-control"
              name="username"
              placeholder="User Name"
            />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input
              type="password"
              class="form-control"
              name="password"
              placeholder="Password"
            />
          </div>
          <div class="form-group">
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="userType"
                id="StudentRadio"
                value="users"
                checked
              />
              <label class="form-check-label" for="StudentRadio">
                  <i class="fas fa-user-tie fa-sm  "></i>
                  Student
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="userType"
                id="DoctorRadio"
                value="doctors"
              />
              <label class="form-check-label" for="DoctorRadio">
                  <i class="fas fa-chalkboard-teacher fa-sm  "></i>
                    Teacher
                </label>
            </div>
          </div>
          <button class="btn btn-info btn-lg login" id="login" name="login">
            login
          </button>
        </form>
      </div>
    </div>
<?php
include $foot;
?>