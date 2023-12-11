<?php

include 'init.php';
include $head;
include $navbar;


?>

    <div class="row">
      <div class="col-sm-12">
        <center>Find People</center>
        <br />
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4  d-flex justify-content-center">
            <form action="">
              <input
                type="text"
                placeholder="Search friends"
                name="searchUser"
              />
              <button type="submit" class="btn btn-info" name="SearchUserBtn">
                <i class="fa fa-search" aria-hidden="true"></i>
                search
              </button>
            </form>
          </div>
          <div class="col-sm-4"></div>
        </div>
        <br /><br />
        <?php SearchUsers(); ?>
      </div>
    </div>

<?php
include $foot;
?>