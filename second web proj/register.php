<?php
include("inc/header.php");
include("inc/nav.php");

?>
<div class="continer">
    <div class="row">
        <div class="col-8 mx-auto my-5">
            <h2 class="border">register</h2>
            <?php
            if(isset($_SESSION["errors"])):
            foreach($_SESSION["errors"] as $error):
            ?>

            <div class="alert alert-danger text_center">
                <?php
                echo $error;
                ?>
            </div>

            <?php 
            endforeach;
            unset($_SESSION["errors"]);
            endif;
            ?>

            <form class="border p-3" action="handelers/handleRegister.php" method="POST">
                <div class="border p-3">
                    <lable for="name">Name</lable>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="border p-3">
                    <lable for="email">email</lable>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="border p-3">
                    <lable for="password">password</lable>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="border p-3">
                    <input type="submit" value="register" class="form-control" >
                </div>
            </form>
        </div>
    </div>
</div>





















<?php
###################################
include  'inc/footer.php';
?>