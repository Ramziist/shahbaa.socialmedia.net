<?php

  include 'init.php';
  include $head;
  include $navbar;

?>

    <div class="text-center searchdoctor-form">
         <h1>Find People</h1><br>
        
               <form action="">
               <input type="text" placeholder="Search friends" name="searchUser"/>
                 <button type="submit" class="btn btn-info" name="SearchUserBtn">
                   <i class="fa fa-search" aria-hidden="true"></i>
                   search
                   </button>
               </form>
       </div>

    <div class="container doctors-cards">
        <?php SearchUsers();?>
      </div>

<?php
include $foot;
?>