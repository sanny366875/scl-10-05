<?php 
require_once ("function.php");

if (!empty($_POST)) {
    $user_name = $_POST["user_name"];
    $user_phone = $_POST["user_phone"];
    $user_email = $_POST["user_email"];
    $user_password = md5($_POST["user_password"]);
    $confirm_password = md5($_POST["confirm_password"]);
    $role = $_POST["role_id"];

    if (!($user_password == $confirm_password)) {
        die("password does not match");
    }

    $uploaded_image = $_FILES["uploaded_image"];
    $image_name = 'user_' . time() . '_' . rand(100000, 3000000) . '.' . pathinfo($uploaded_image['name'], PATHINFO_EXTENSION);

    if ($user_password == $confirm_password) {
        $insert = "INSERT INTO user(user_name, user_phone, user_email, user_password, confirm_password, role_id, user_image) VALUES('$user_name','$user_phone','$user_email','$user_password','$confirm_password','$role','$image_name')";

if ($user_password==$confirm_password) {
    if (mysqli_query($connection,$insert)) {
        move_uploaded_file($uploaded_image['tmp_name'],'uploaded-image-file/'.$image_name);
        header("location:all_users.php");
    } else {
        echo "";
    }
} else {
  echo "";
}
}}

get_header();


?>    

<section class="registration-section">
    <div class="container">
        <div class="registration-form">
            <form action="" method="POST" enctype="multipart/form-data">

                <label for="">User Name</label>
                <input type="text" name="user_name" placeholder="User Name" class="user_name" required>              

                <label for="">Phone</label>                
                <input type="text" name="user_phone" placeholder="Phone" required>

                <label for="">Email</label>
                <input type="email" name="user_email" placeholder="Email" required>

                <label for="">Password</label>                
                <input type="password" name="user_password" placeholder="Password" required>

                <label for="">Confirm Password</label>                
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>

                <label for="">Select Role</label>
                <br>
                <select name="role_id" required>
                    <option value="">-- Select Role --</option>
                    <?php 
                    $sel = "SELECT * FROM roles ORDER BY role_id ASC";
                    $QR = mysqli_query($connection, $sel);
                    while($urole = mysqli_fetch_array($QR)) { ?>
                        <option value="<?= $urole['role_id'] ?>"><?= $urole['role_name'] ?></option>
                    <?php } ?>
                </select>
                        <br>
                <label for="">Upload Image</label>                
                <input type="file" name="uploaded_image" required>

                <input type="submit" value="Create Account" name="submit">
            </form>
        </div>

        <div class="back-home">
            <a href="index.php" style="color:#fff;background:black; border: 2px solid red; font-size: 25px; font-weight: 300; padding: 10px; display:inline-block; margin-top:15px;">Back to Home</a>
            <p style="color: black; font-size:35px;">Already Have an Account?</p>
            <a href="login.php" style="color:#fff;background:black; border: 2px solid red; font-size: 25px; font-weight: 300; padding: 10px; display:inline-block; margin-top:15px;">Log In</a>
        </div>
    </div>
</section>

<?php 
    footer();
?>
