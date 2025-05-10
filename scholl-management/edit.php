<?php
    require_once ("function.php");
    $id=$_GET["edit"];
    $edit="SELECT * FROM user WHERE user_id='$id'";
    $QR=mysqli_query($connection,$edit);
    $info=mysqli_fetch_array($QR);

    if(!empty($_POST)) {
        $name= $_POST['edit_name'];
        $phone=$_POST['edit_phone'];
        $email=$_POST['edit_email'];

        $update = "UPDATE user SET  user_name='$name', user_phone='$phone', user_email='$email' WHERE user_id='$id'";

        if (mysqli_query($connection,$update)){
            header ("Location:all_users.php");
        } else {
            echo "Data Update Fail";
        }
    }
    
    
    get_header ();
?>

<div class="container">
        <div class="registration-form">
            <form action="" method="POST" enctype="multipart/form-data">

                <label for="">user_name</label>
                <input type="text" name="edit_name" placeholder="user_name" class="user_name" value="<?php   echo $info['user_name']?>">              
             
                <label for="">user_phone</label>                
                <input type="text" name="edit_phone" value="<?php   echo $info['user_phone']?>" placeholder="user_phone">

                <label for="">user_email</label>
                <input type="email" name="edit_email" value="<?php   echo $info['user_email']?>" placeholder="user_email">

                 <label for="">Select Role</label>
                <br>
                <select name="role_id" required>
                    <option>-- Select Role --</option>
                    <?php 
                    $sel = "SELECT * FROM roles ORDER BY role_id ASC";
                    $QR = mysqli_query($connection, $sel);
                    while($urole = mysqli_fetch_array($QR)) { ?>
                         <option value="<?= $urole['role_id']; ?>" <?php if ($urole['role_id']==$info['role_id']){echo 'selected';}?>><?=$urole['role_name'];?>
                        </option>
                    <?php 
                } 
                ?>
                </select>
                        <br>

                <label for="">upload image</label>                
                <input type="file" name="uploaded_image"  placeholder="file">
                
                <input type="submit" value="Update Profile" name="submit">
            </form>
        </div>
        <div class="back-home">
            <a href="index.php" style="color:#fff;background:black; border: 2px solid red; font-size: 25px; font-weight: 300; padding: 10px; display:inline-block; margin-top:15px;">Back to home</a>
            <p style="color: White; font-size:35px">Already Have an account?</p>
            <a href="login.php" style="color:#fff;background:black; border: 2px solid red; font-size: 25px; font-weight: 300; padding: 10px; display:inline-block; margin-top:15px;">Log In</a>
        </div>
    </div>

<?php
    footer ();
?>