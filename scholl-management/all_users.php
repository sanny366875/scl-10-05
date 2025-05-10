<?php
    require_once ("function.php");
    get_header ();
?>
<section class="all_users_section">
    <div class="container">
    <div class="table-responsive">
    <table class="table table-hover table-bordered text-center">
    <thead>
      <tr>
        <th>user_name</th>
        <th>user_phone</th>
        <th>user_email</th>
        <th>uploaded_image</th>
        <th>role</th>
        <th>Edit Data</th>

      </tr>
    </thead>
    <tbody>
      <?php
        $select="SELECT * FROM user NATURAL JOIN roles ORDER BY user_id DESC";
        $QRY=mysqli_query($connection,$select);

        while ($data=mysqli_fetch_array($QRY)) {

      ?>
      <tr>
        <td> <?php echo $data['user_name'] ?></td>
        <td> <?php echo $data['user_phone'] ?></td>
        <td> <?php echo $data['user_email'] ?></td>
        <td> <?php echo $data['user_image'] ?></td>
        <td> <?php echo $data['role_name'] ?></td>
        <td>
        <div class="btn-group btn_group_manage" role="group">
        <a class="view" href="view.php?view=<?php echo $data['user_id']?>">View</a>
        <a class="Edit" href="edit.php?edit=<?php echo $data['user_id']?>">Edit</a>
        <a class="Delete" href="delete.php?delete=<?php echo $data['user_id']?>">Delete</a>
        </div>
        </td>
      </tr>

      <?php
         }
      ?>

    </tbody>
  </table> 
    </div>
    </div>
</section>

<?php
    footer ()
?>