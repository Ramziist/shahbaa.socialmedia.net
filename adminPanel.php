<?php

include 'init.php';
include $head;
include 'includes/adminnavbar.php';


    if (!isset($_POST['login'])) {
        header("location: index.php");
    }
    elseif ($_POST['username'] == 'admin' && $_POST['password']  == 'admin') {

    $_SESSION['username'] = $_POST['username'];
    }
    else{        
        header("location: admin.php");
    }


    
    
?>

<div class="container ">

            <h1 class='courses-title mt-5 text-center'>Courses</h1>
     <div class="postsArea row d-flex align-items-center justify-content-center">
     </div>
</div>

<?php
include $foot;
?>