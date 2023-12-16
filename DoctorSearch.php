<?php

include 'init.php';
include $head;
include $navbar;

if (!isset($_SESSION['username'])) {
  header("location: index.php");
}

?>
       <div class="text-center searchdoctor-form">
         <h1>Find Professor</h1><br>
        
               <form action="">
                 <input type="text" placeholder="Search your Professor" name="searchDoctor"/>
                   <button type="submit" class="btn" name="SearchDoctorBtn">
                   <i class="fa fa-search" aria-hidden="true"></i>
                   search
                   </button>
               </form>
       </div>

    <div class="container doctors-cards">
        <?php
            SearchDoctors();
            ;?>
      </div>

<?php
include $foot;
?>