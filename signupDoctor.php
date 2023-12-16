<?php
include 'init.php';
include $head;


?>

<div class="jumbotron jumbotron-signup text-center">
    <h1>Al-Shahbaa Social Media</h1>
    <p>A platform to share lessons on it</p>
</div>



<div class="signup-form">
    <form action="includes\insertDoctor.php" method="post">

        <h2>New Professor</h2>

        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="firstName" placeholder="First Name" required="required"></div>
                <div class="col"><input type="text" class="form-control" name="lastName" placeholder="Last Name" required="required"></div>
            </div>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        
        <div class="form-group">
            <select class="form-control" id="Specialization" name='Specialization'>
                <option value= 'Engineering'>Software Engineering</option>
                <option value= 'Dintest'>Dintest</option>
                <option value= 'Bussiness'>Bussiness Management</option>
            </select>
        </div>

        <div class="form-group text-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="maleRadio" value="male">
                <label class="form-check-label" for="maleRadio"><i class="fas fa-male fa-2x fa-fw"></i></label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="femaleRadio" value="female">
                <label class="form-check-label" for="femaleRadio"><i class="fas fa-female fa-2x fa-fw"></i></label>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" name="signup" class="btn btn-lg btn-block">Register</button>
        </div>

    </form>
</div>
<?php


include $foot;
?>