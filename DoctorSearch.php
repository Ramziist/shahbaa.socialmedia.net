<?php

include 'init.php';
include $head;
include $navbar;

if (!isset($_SESSION['username'])) {
  header("location: index.php");
}

?>

    <div class="row">
      <div class="col-sm-12">
        <br/>
        <center><h4>Find Professor</h4></center>
        <br />
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4 d-flex justify-content-center">
            <form action="">
              <input
                type="text"
                placeholder="Search your Professor"
                name="searchDoctor"
              />
              <button type="submit" class="btn btn-info" name="SearchDoctorBtn">
                <i class="fa fa-search" aria-hidden="true"></i>
                search
              </button>
            </form>
          </div>
          <div class="col-sm-4"></div>
        </div>
        <br /><br />
        <?php SearchDoctors(); ?>
      </div>
    </div>

<?php
include $foot;
?>