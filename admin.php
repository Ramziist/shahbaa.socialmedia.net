<?php

include 'init.php';
include $head;

?>

<div class="jumbotron text-center">
    <h1>Al-Shahbaa Social Media</h1>
    <p>A platform to share Knowledge</p>
    <img src="img/headerlogo.png" alt="Main" class="img-login" />
</div>

<div class='container'>
    <div class="row">

        <div class="col-md-12 col-sm-12">
            <div class="login-container mt-5">
                <div class="heading">Login</div>

                <form action="adminPanel.php" method="post" class="form">

                    <input type="text" class="input" name="username" placeholder="User Name" />
                    <input type="password" class="input" name="password" placeholder="Password" />

                    <div class="form-group text-center mt-4">



                        <input name="login" class="login-button" type="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include $foot;
?>