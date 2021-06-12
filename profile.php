<?php include('server.php');
  $user = $_SESSION['username'];
  $query = mysqli_query($db, "select username,nama,email,no_hp,user_image from users where username='$user'");
  $user = mysqli_fetch_assoc($query);

  $res_img = "user_images/".$user['user_image'];
  $username = $user['username'];
  $email = $user['email'];
  $nama = $user['nama'];
  $no_hp = $user['no_hp'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Profil</title>
  </head>
  <body>
    <header class="header" style="background-image: url(./admin/images/cover-resto.jpeg)">
      <a href="./homepage.php">
        <img style="position: absolute; top: 0px; left: 0px" src="./admin/images/logo.png" alt="logo" />
      </a>
      <div class="center">
        <span class="judul">NoQ!</span>
        <br />
        <span class="motto">Makan enak tanpa antre</span>
      </div>
    </header>
    <div class="profile-container">
      <div class="image-biodata-container">
        <div class="edit-profile">
          <div class="profile-image" style="background-image: url('<?php echo $res_img;?>')"></div>
          <a href="./image_profile_edit.php">Edit Profile Picture</a>
          <a href="./profile_edit.php">Edit profile</a>
          <a href="./pass_edit.php">Edit Password </a>
          <a href="./homepage.php">Kembali</a>
        </div>
        <div class="biodata">
          <h2><?php echo $nama; ?></h2>
          <p><?php echo $username; ?></p>
          <p><?php echo $email; ?></p>
          <p><?php echo $no_hp; ?></p>
        </div>
      </div>
      <div class="riwayat-pemesanan">
        <h2>Riwayat Pesanan</h2>
        <?php
        $user = $_SESSION['username'];
        $query = mysqli_query($db,"select * from order_resto where order_user='$user' order by order_id desc limit 0,3");
        while($list = mysqli_fetch_array($query))
        {
          $r_id = $list['res_id'];
          $q = mysqli_query($db,"select * from restoran where resto_id ='$r_id'");
          $resto = mysqli_fetch_assoc($q);
          ?>
          <div class="card-pesanan">
          <div class="flex-row">
            <img src="admin/images/resto1.jpeg" alt="foto-resto" width="50px" height="50px" />
            <p style="margin-left: 10px"><?php echo $resto['resto_name'];?></p>
          </div>
          <a style="margin-left: 10px">Order Status :<?php echo $list['order_status'];?></a>
          <?php if($list['order_status']=='valid')
          {
            ?>
          <a href="./review.php?resto_id=<?php echo $r_id;?>"> <button style="width: 100%; margin-top: 10px; cursor: pointer">Rate Order</button></a>
        </div>
        <?php }
        }
        ?>
      </div>
    </div>
  </body>
</html>