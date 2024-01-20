<?php

include 'init.php';
include $head;
include $navbar;

if(isset($_REQUEST['u_id'])){
    global $con;

    $u_id = $_REQUEST['u_id'];
    $select = "SELECT * FROM user WHERE ID='$u_id'";
    $run = mysqli_query($con, $select);
    $rowProfile = mysqli_fetch_array($run);


    $Fname = $rowProfile['firstName'];
    $Lname = $rowProfile['lastName'];
    $name = $rowProfile['username'];
    $Email = $rowProfile['email'];
    $Password = $rowProfile['password'];
    $Specialization = $rowProfile['specialization'];
    $StudyYear = $rowProfile['studyYear'];
    $DateOfBirth = $rowProfile['dateOfBirth'];
    $Gender = $rowProfile['gender'];
    $MiddleName = $rowProfile['middleName'];
    $MotherName = $rowProfile['motherName'];
}
if($u_id == "" || $u_id < 0 || !$rowProfile){
    echo "<script>window.open('home.php', '_self')</script>";
}

?>


<div class="jumbotron jumbotron-signup text-center">
    <h1>Al-Shahbaa Social Media</h1>
    <p>A platform to share lessons on it</p>
</div>



<div class="container signup-page">
    <div class="row d-flex justify-content-center signup-form">

                <form action="includes\insertUser.php" method="post">
                    <h2>New Student</h2>

                    <div class="form-group">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control" name="firstName" value="<?=  $Fname; ?>" placeholder="First Name" required="required"></div>
                            <div class="col"><input type="text" class="form-control" name="lastName" value="<?=  $Lname; ?>" placeholder="Last Name" required="required"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control" name="middleName" value="<?=  $MiddleName; ?>" placeholder="Middle Name" required="required"></div>
                            <div class="col"><input type="text" class="form-control" name="motherName" value="<?=  $MotherName; ?>" placeholder="Mother Name" required="required"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="username" value="<?=  $name; ?>" placeholder="Username" required="required">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="<?=  $Email; ?>" placeholder="Email" required="required">
                    </div>


                    
                    <div class="form-group">
                        <select class="form-control" id="Specialization" name='Specialization'>
                            <option value= 'Engineering' <?= $Specialization == 1? "selected":"" ?>>Software Engineering</option>
                            <option value= 'Dintest' <?= $Specialization == 2? "selected":"" ?>>Dintest</option>
                            <option value= 'Bussiness'<?= $Specialization == 3? "selected":"" ?>>Bussiness Management</option>
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="maleRadio" value="male" <?= $Gender == 0? "checked":"" ?>>
                            <label class="form-check-label" for="maleRadio"><i class="fas fa-male fa-2x fa-fw"></i></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="femaleRadio" value="female" <?= $Gender == 1? "checked":"" ?>>
                            <label class="form-check-label" for="femaleRadio"><i class="fas fa-female fa-2x fa-fw"></i></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="studyYear" value="<?=  $StudyYear; ?>" placeholder="Study Year" required="required">
                    </div>

                    <div class="form-group">
                        Date of birth : 
                        <input type="Date" class="form-control" name="DateOfBirth"  value="<?=  $DateOfBirth; ?>"  placeholder="Date of Birth" required="required">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="signup" class="btn mt-5 btn-block">Register</button>
                    </div>

                </form>
    </div>
</div>
<?php
include $foot;
?>


