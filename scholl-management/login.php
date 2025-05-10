<?php 
    require_once ("function.php");
    get_header ();
?>
    <!-- login-section -->
     <section class="login-section">
        <div class="container">
            <div class="login-box">
                <form action="" method="post">
                    
                    <?php
                        if (!empty($_POST)) {
                            $username=$_POST['user-name'];
                            $pass_word=md5($_POST['password']);

                            if(!empty($username)) {
                                if(!empty($pass_word)) {
                            

                            $select= "SELECT * FROM user WHERE user_name='$username' AND user_password='$pass_word'";
                            $Qry=mysqli_query($connection,$select);
                            $data=mysqli_fetch_array($Qry);

                            if($data){
                                header("Location: index.php");
                            } else {
                                echo "user name or password did not match";
                                     }

                                } else {
                                    echo "enter your password";
                                }
                            } else {
                                    echo "please enter your username";
                                }
                        }
                    
                    ?>

                    <label for="">user ID</label>
                    <input type="text" name="user-name" placeholder="user-name">
                    <label for=""class="password"> password </label>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" name="login" value="log in">
                    <br>
                    <a href="forgot.php" id="forget">Forget Password?</a>
                    <p>Do not have Account? <span><a href="registration.php" id="register">Register</a></span></p>
                </form>
            </div>
        </div>
     </section>
    <!-- login-section end -->
    <?php 
         footer ();
    ?>