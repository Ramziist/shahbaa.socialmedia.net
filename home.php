<?php

include 'init.php';
include $head;
include $navbar;
include $uploadFile;
include $getPosts;


?>

<div class="container">
<?php
    if ($isDoctor) {

        echo '
            <center>
                <form action="home.php" method="post" enctype="multipart/form-data">
                    <textarea name="content" id="content" rows="4" placeholder="What\'s in your mind"></textarea><br>
                    <label class="btn btn-warning" id="upload_pdf_button">Select PDF
                        <input type="file" name="upload_PDF" size="30" accept="application/pdf">
                    </label>
                    
                    <div class="form-group">
                        <select class="form-control" id="Specialization" name="Specialization">
                        <option value= "'.$first.'">'.$first.'</option>
                        <option value= "'.$second.'">'.$second.'</option>
                        <option value= "'.$third.'">'.$third.'</option>
                        </select>
                    </div>
                    <button id="newPost" class="btn btn-success" name="newPost">Post</button>
                </form>
            </center>';
    }
?>
    <div class="postsArea">
            <?php echo getPost(); ?> 
      
</div>


<?php
include $foot;
?>