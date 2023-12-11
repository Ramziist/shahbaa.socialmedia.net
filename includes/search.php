<?php
    include 'connection.php';

    function  SearchUsers(){
        global $con;

        if(isset($_GET['SearchUserBtn'])){
            $searchQuery = $_GET['searchUser'];
            $getUser = "SELECT * FROM users WHERE firstName LIKE '%$searchQuery%' OR lastName LIKE '%$searchQuery%' OR username LIKE '%$searchQuery%'";
        }
        else{
            $getUser = "SELECT * FROM users";
        }
        
        $run = mysqli_query($con, $getUser);

        while ($row = mysqli_fetch_array($run)) {
            
            $userID = $row['ID'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $username = $row['username'];
            $userImage = $row['Image'];

            echo'  
                    <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-cm-6 d-flex justify-content-center">
                    <div class="row" id="findPeople">
                        <div class="col-sm-auto  d-flex justify-content-center">
                        <a href="userProfile.php?u_id='.$userID.'">
                            <img src="'.$userImage.'" alt="user" width="100px" height="100px"  title="'.$username.'"
                        /></a>
                        </div>
                        <div class="col-sm-auto  d-flex justify-content-center">
                        <a href="userProfile.php?u_id='.$userID.'" class="username">
                            <strong><h2>'.$firstName .'<br>'. $lastName.'</h2></strong>
                        </a>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <br />
            ';
        }

    }

    function  SearchDoctors(){
        global $con;

        if(isset($_GET['SearchDoctorBtn'])){
            $searchQuery = $_GET['searchDoctor'];
            $getUser = "SELECT * FROM doctors WHERE firstName LIKE '%$searchQuery%' OR lastName LIKE '%$searchQuery%' OR username LIKE '%$searchQuery%'";
        }
        else{
            $getUser = "SELECT * FROM doctors";
        }
        
        $run = mysqli_query($con, $getUser);

        while ($row = mysqli_fetch_array($run)) {
            
            $userID = $row['Id'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $username = $row['username'];
            $userImage = $row['Image'];

            echo'  
                    <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-cm-6  d-flex justify-content-center">
                    <div class="row" id="findPeople">
                        <div class="col-sm-auto d-flex justify-content-center">
                        <a href="doctorProfile.php?u_id='.$userID.'">
                            <img src="'.$userImage.'" alt="user" width="100px" height="100px"  title="'.$username.'"
                        /></a>
                        </div>
                        <div class="col-sm-auto  d-flex justify-content-center">
                        <a href="doctorProfile.php?u_id='.$userID.'" class="username">
                            <strong><h2>'.$firstName .'<br>'. $lastName.'</h2></strong>
                        </a>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <br />
            ';
        }

    }

?>