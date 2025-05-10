<?php
    require_once ("function.php");
    get_header ();

    $id=$_GET["view"];
    $view="SELECT * FROM user NATURAL JOIN roles WHERE user_id='$id'";
    $QR=mysqli_query($connection,$view);
    $info=mysqli_fetch_array($QR);
   
?>


<div class="view_section">
  <div class="container">
    <h2 class="text-center fs-50">View Student Profile</h2>
      <div class="row">
        <div class="col-md-2"></div>    
        <div class="col-md-8 table-responsive">
        <table class="table table-dark text-center">
      
    <tbody>
      <tr>
        <td style="font-size: 20px">Name</td>
        <td>    <?php echo $info['user_name']?>    </td>
      </tr>
      <tr>
        <td style="font-size: 20px">Phone</td>
        <td>    <?php echo $info['user_phone']?>    </td>
      </tr>
      <tr>
        <td style="font-size: 20px">Email</td>
        <td>    <?php echo $info['user_email']?>    </td>
      </tr>

      <tr>
        <td style="font-size: 20px">role</td>
        <td>    <?php echo $info['role_name']?>    </td>
      </tr>

      <tr>
        <td style="font-size: 20px">img</td>
        <td>    <?php echo $info['user_image']?>    </td>
      </tr>
    </tbody>
  </table>
        </div>    
        <div class="col-md-2 py-25"></div>    
    </div>
</div>
</div>

<?php
    footer ();
?>
