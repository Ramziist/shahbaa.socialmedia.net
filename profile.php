<?php

include 'init.php';
include $head;
include $navbar;
include $UpdateProf;


?>


<div class="container ">
    <img src="<?php echo " $userCover "; ?>" class="img-fluid cover" alt="Cover Picture">

        <div class="profileHeader">
            <div class="profilePic">
                <img src="<?php echo " $userImage "; ?>" alt="avatar">

                <form action="profile.php?u_id=<?php echo $userId; ?>" method="post"  enctype="multipart/form-data">
                    <label class='btn confirmUpload'>
                        <input type='file' name='usernewImage' size='50' accept="image/*">
                        <i class='fas fa-camera fa-lg'></i>
                    </label>
                    <button name="update" class="btn btn-updateprof">Update Profile</button>
                </form>
        </div>

        <div class="infoNav">
            <h3 class="username">
                <?php 
                if (!$isDoctor){
                echo "$userFname $userMiddleName $userLname";}
                else {
                    echo "$userFname $userLname";
                } ?>
            </h3>
        </div>
    </div>

    <div class="mainBody">

        <div class="row">
            <div class="col-md-6">

                <div class="notification">
                    <div class="notititle">Your information</div>
                    <div class="notibody">
                        <?php 
 if (!$isDoctor){
                            echo'
                              <div>
                                <i class="fa fa-birthday-cake" aria-hidden="true"></i>'.$userDateOfBirth.'
                                <br>
                              </div>
                            
                            <div>
                                <i class="fa fa-star" aria-hidden="true"></i> Study year:'.$userStudyYear.' Year
                                <br>
                            </div>

                            <div>
                                <i class="fa fa-envelope" aria-hidden="true"></i> Email :'.$userEmail.'
                                <br>
                            </div>

                            <div>
                                <i class="fa fa-university" aria-hidden="true"></i> Specialization: '.$userSpecialization.'
                                <br>
                            </div>

                            <div>
                                <i class="fa fa- echo "$userGender " aria-hidden="true"></i>Gender:'.$userGender.'
                                <br>
                            </div>
                            
                           ';}
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
</div>


<?php

include $foot;
?>