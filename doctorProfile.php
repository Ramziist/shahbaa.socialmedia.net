<?php

include 'init.php';
include $head;
include $navbar;

if(isset($_REQUEST['u_id'])){
    global $con;

    $u_id = $_REQUEST['u_id'];
    $select = "SELECT * FROM doctor WHERE ID='$u_id'";
    $run = mysqli_query($con, $select);
    $rowProfile = mysqli_fetch_array($run);


    $Id = $rowProfile['Id'];
    $Fname = $rowProfile['firstName'];
    $Lname = $rowProfile['lastName'];
    $name = $rowProfile['username'];
    $Password = $rowProfile['password'];
    $Specialization = $rowProfile['specialization'];
    $Gender = $rowProfile['gender'];
    $Image = $rowProfile['Image'];
    $Cover = $rowProfile['cover'];
    $heIsDoctor = 1;
}
if($u_id == "" || $u_id < 0 || !$rowProfile){
    echo "<script>window.open('home.php', '_self')</script>";
}

?>

<div class="container">
    <img src="<?php echo " $Cover "; ?>" class="img-fluid cover" alt="Cover Picture">

    <div class="profileHeader">
        <div class="profilePic">
            <img src="<?php echo " $Image "; ?>" alt="avatar">
        </div>

        <div class="infoNav">
            <h3 class="username">
                <?php 
                if (!$heIsDoctor){
                echo "$Fname $MiddleName $Lname";}
                else {
                    echo "$Fname $Lname";
                } ?>
            </h3>
        </div>
    </div>
    



<div class="mainBody">

<div class="row">
    <div class="col-md-6">

        <div class="notification">
            <div class="notititle">Doctor information</div>
            <div class="notibody">
            <?php if (!$heIsDoctor){ echo'
                        <li class="list-group-item">
                            <p class="email">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                '.$Email.'
                            </p>
                        </li>';}
                        ?>
                        
                <?php 

                    echo'
                      <div>
                        <i class="fa fa-university" aria-hidden="true"></i> Specialization :'.$Specialization.'
                      </div>
                    
                    <div>';
                        if(!$heIsDoctor){ 
                           echo' <li class="list-group-item">
                                <p class="StudyYear">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    '.$StudyYear.' Year
                                </p>
                            </li>';}
                            echo'
                    </div>

                    <div>
                        ';if (!$heIsDoctor){ 
                            echo'<li class="list-group-item">
                                <p class="DateOfBirth">
                                    <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                    '.$DateOfBirth.'
                                </p>
                            </li>';}
                    echo'</div>

                    <div>
                        <i class="fa fa-<?php echo $Gender; ?>" aria-hidden="true"></i> Gender :'.$Gender.'
                    </div>'
                ?>
            </div>
        </div>

    </div>

    <div class="col-md-6">
        <div class="notification">
            <div class="notititle">Brief about me:</div>
                <div class="notibody">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit laboriosam nesciunt sint repudiandae obcaecati magni, porro maxime molestias soluta dolore corrupti facilis voluptates rem asperiores architecto ipsa quibusdam quo distinctio.
                </div> 
                <button class="chatBtn">
                        <i class="fa fa-comment" aria-hidden="true"></i> Chat
                </button>   
            </div>    
        </div>
    </div>

</div>
</div>

<?php
include $foot;
?>





