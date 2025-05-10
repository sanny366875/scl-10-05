<?php
    require_once ("function.php");
    get_header ();

    $id=$_GET["delete"];
    $delete="DELETE FROM user WHERE user_id='$id'";

    if(mysqli_query($connection,$delete)){
       header("Location:all_users.php");
    } else {
        echo "";
    };
?>

<?php
    footer ();
?>