<?php

include 'init.php';
include $head;
include $navbar;
include $uploadFile;
include $getPosts;


?>

<div class="container ">
<?php
    if (isset($isDoctor) && $isDoctor) {

        echo '
        <div class="col-md-6 post-aria">
            <h2>Post Course</h2>
                <form action="home.php" method="post" enctype="multipart/form-data">
                    <textarea name="content" id="content" rows="4" placeholder="What\'s in your mind"></textarea><br>
                        
                    <div class="d-flex selectpdf justify-content-center">
                        <label class="btn" id="upload_pdf_button">
                            Select PDF
                            <input type="file" name="upload_PDF" size="30" accept="application/pdf">
                        </label>
                        
                        <div class="form-group">
                            <select class="form-control" id="Specialization" name="Specialization">
                                <option value= "'.$first.'">'.$first.'</option>
                                <option value= "'.$second.'">'.$second.'</option>
                                <option value= "'.$third.'">'.$third.'</option>
                            </select>
                        </div>
                    </div>

                    <button id="newPost" class="btn " name="newPost">Post</button>
                </form>
            </div><hr class="hr-post">';
    }
?>
            <h1 class='courses-title mt-5 text-center'>Courses</h1>
     <div class="postsArea row d-flex align-items-center justify-content-center">
         <?php echo getPost(); ?> 
     </div>
</div>

<?php
include $foot;
?>