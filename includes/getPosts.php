<?php

include 'connection.php';

function getPost(){
    global $con;
    $perPage = 10;
    
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }   
    
    $startFrom = ($page-1) * $perPage;

    $getPosts = "SELECT * FROM post ORDER BY 1 DESC LIMIT $startFrom, $perPage";

    $run = mysqli_query($con, $getPosts);
        
    while ($rowPosts = mysqli_fetch_array($run)) {
        $postId = $rowPosts['postId'];
        $Publisher = $rowPosts['publisher'];
        $content = substr($rowPosts['content'], 0 ,255);
        $PDF = $rowPosts['PDF'];
        $postDate = $rowPosts['date'];
        $postCourse = $rowPosts['course'];

        $userPublisher = "SELECT * FROM doctor WHERE ID='$Publisher'";
        $runKnowUser = mysqli_query($con, $userPublisher);
        $rowUser = mysqli_fetch_array($runKnowUser);

        $userNamePublisher = 'Dr. ' . $rowUser['firstName'] . ' ' . $rowUser['lastName'];
        $userImgPublisher = $rowUser['Image'];

        if ($content == '' && strlen($PDF) >= 1) {
            echo '
            <div class="row">
            <div class="col">
            </div>
            <div id="posts" class="col-6 post">
                <div class="row">
                    <div class="col-auto">
                        <p>        
                            <img src="' . $userImgPublisher . '" alt="profile" class="PostPublisher">    
                        </p>
                    </div>
                    <div class="col">
                        <div class="col">
                            <h3><a href="doctorProfile.php?u_id=' . $Publisher . '">' . $userNamePublisher . '</a></h3>
                            <h4><small>updated on: <strong>' . $postDate . '</strong></small></h4>
                        </div>
                        <!-- 
                        <div class="col">
                            <p>' . $content . '</p>
                        </div> 
                        -->
                        
                        <div class="col">
                        <p>'.$postCourse.'</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col">
                    <a name="download" id="download" class="btn btn-primary" href="' . $PDF . '" role="button"><i class="fa fa-download" aria-hidden="true"></i> download</a>
                </div>
            </div>    
            <div class="col">
            </div>
            </div>
            ';
        }elseif ($content != '' && strlen($PDF) >= 1) {
            echo '
            <div class="row">
            <div class="col">
            </div>
            <div id="posts" class="col-6 post">
                <div class="row">
                    <div class="col-auto">
                        <p>        
                            <img src="' . $userImgPublisher . '" alt="profile" class="PostPublisher">    
                        </p>
                    </div>
                    <div class="col">
                        <div class="col">
                            <h3><a href="doctorProfile.php?u_id=' . $Publisher . '">' . $userNamePublisher . '</a></h3>
                            <h4><small>updated on: <strong>' . $postDate . '</strong></small></h4>
                        </div>
                        
                        <div class="col">
                            <p>' . $content . '</p>
                        </div> 
                        
                        <div class="col">
                        <p>'.$postCourse.'</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col">
                    <a name="download" id="download" class="btn btn-primary" href="' . $PDF . '" role="button"><i class="fa fa-download" aria-hidden="true"></i> download</a>
                </div>
            </div>    
            <div class="col">
            </div>
            </div>
            ';
        }else {
            echo '
            <div class="row">
            <div class="col">
            </div>
            <div id="posts" class="col-6 post">
                <div class="row">
                    <div class="col-auto">
                        <p>        
                            <img src="' . $userImgPublisher .'" alt="profile" class="PostPublisher">    
                        </p>
                    </div>
                    <div class="col">
                        <div class="col">
                            <h3><a href="doctorProfile.php?u_id='.$Publisher.'">'.$userNamePublisher.'</a></h3>
                            <h4><small>updated on: <strong>'.$postDate.'</strong></small></h4>
                        </div>
                         
                        <div class="col">
                            <p>'.$content.'</p>
                        </div>
                        <div class="col">
                        <p>'.$postCourse.'</p>
                        </div>
                        
                    </div>
                </div>
                
                <!-- 
                <div class="col">
                    <a name="download" id="download" class="btn btn-primary" href="'.$PDF.'" role="button"><i class="fa fa-download" aria-hidden="true"></i> download</a>
                </div> 
                -->

            </div>    
            <div class="col">
            </div>
            </div>
            ';
        }
    }
}
?>