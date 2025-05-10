<?php
    require_once ('function.php');
    get_header();
?>
<section class="forget_section">
<div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="forgot_body text-center">
                   <form action="">
                        <input type="email" placeholder="enter your Email" name="name" required>
                        <input type="submit" value="send recovery code">
                   </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</section>

<?php
    footer();
?>