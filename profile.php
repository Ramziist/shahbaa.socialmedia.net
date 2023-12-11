<?php

include 'init.php';
include $head;
include $navbar;
include $UpdateProf;


?>
<div class="container">
    <img src="<?php echo " $userCover "; ?>" class="img-fluid cover" alt="Cover Picture">

    <div class="profileHeader">
        <div class="profilePic">
            <img src="<?php echo " $userImage "; ?>" alt="avatar">

            <form action="profile.php?u_id=<?php echo $userId; ?>" method="post" enctype="multipart/form-data">
                <label class='btn confirmUpload'>
                <input type='file' name='usernewImage' size='50' accept="image/*">
                <i class='fas fa-camera fa-lg'></i>
            </label>
                <button name="update" class="btn btn-info">Update Profile</button>


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
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <?php if (!$isDoctor){ echo'
                        <li class="list-group-item">
                            <p class="email">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                '.$userEmail.'
                            </p>
                        </li>';}
                        ?>

                        <li class="list-group-item">
                            <p class="Specialization">
                                <i class="fa fa-university" aria-hidden="true"></i>
                                <?php echo " $userSpecialization"; ?>
                            </p>
                        </li>
                        <?php if (!$isDoctor){ echo'
                        <li class="list-group-item">
                            <p class="StudyYear">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                '.$userStudyYear.' Year
                            </p>
                        </li>';}
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <ul class="list-group list-group-flush">
                    <?php if (!$isDoctor){ echo'
                        <li class="list-group-item">
                            <p class="DateOfBirth">
                                <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                '.$userDateOfBirth.'
                            </p>
                        </li>';}
                        ?>
                        <li class="list-group-item">
                            <p class="Gender">
                                <i class="fa fa-<?php echo "$userGender "; ?>" aria-hidden="true"></i>
                                <?php echo " $userGender"; ?>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <div class="profileBtn">
                                <button class="chatBtn">
                                    <i class="fa fa-comment" aria-hidden="true"></i> Chat
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
            <div class="bio">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit laboriosam nesciunt sint repudiandae obcaecati magni, porro maxime molestias soluta dolore corrupti facilis voluptates rem asperiores architecto ipsa quibusdam quo distinctio.
            </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>

    </div>
</div>
<?php

include $foot;
?>