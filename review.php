<?php include('server.php');
  $user = $_SESSION['username'];
  $query = mysqli_query($db, "select username,nama,email,no_hp,user_image from users where username='$user'");
  $user = mysqli_fetch_assoc($query);

  $res_img = "user_images/".$user['user_image'];
  $username = $user['username'];
  $email = $user['email'];
  $nama = $user['nama'];
  $no_hp = $user['no_hp'];

  $resto_id = $_GET['resto_id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Review</title>
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
      <?php ?>
        <h2>Riwayat Pesanan</h2>
        <div class="card-pesanan">
          <div class="flex-row">
            <img src="admin/images/resto1.jpeg" alt="foto-resto" width="50px" height="50px" />
            <p style="margin-left: 10px">Nama Resto</p>
          </div>
          <button style="width: 100%; margin-top: 10px; cursor: pointer">Rate Order</button>
        </div>
        <div class="card-pesanan">
          <div class="flex-row">
            <img src="admin/images/resto1.jpeg" alt="foto-resto" width="50px" height="50px" />
            <p style="margin-left: 10px">Nama Resto</p>
          </div>
          <button style="width: 100%; margin-top: 10px; cursor: pointer">Rate Order</button>
        </div>
      </div>
    </div>
  </body>
  <div class="modal-bg">
    <div class="modal-container">
      <form method="post" action="review.php?resto_id=<?php $resto_id;?>">
      <?php $query=mysqli_query($db,"select * from restoran where resto_id='$resto_id'");
      $name = mysqli_fetch_assoc($query);
      ?>
        <div class="flex-column" style="text-align: center">
          <img src="admin/images/resto1.jpeg" alt="img-resto" />
          <strong><p style="font-size: 1.5em"><?php echo $name['resto_name'];?></p></strong>
          <p style="margin-top: 20px; margin-bottom: 10px">Bagaimana pesananmu?</p>
          <span style="font-size: 0.15 em">Silahkan Rate Restoran ini 1-5</span>
          <div class="flex-row" style="justify-content: center; margin-bottom: 10px">
        <span style="font-size: 0.15 em">1</span>
            <input type="radio" name="rating" value="1" checked>
        <span style="font-size: 0.15 em">2</span>
            <input type="radio" name="rating" value="2">
        <span style="font-size: 0.15 em">3</span>
            <input type="radio" name="rating" value="3">
        <span style="font-size: 0.15 em">4</span>
            <input type="radio" name="rating" value="4">
        <span style="font-size: 0.15 em">5</span>
            <input type="radio" name="rating" value="5">
            <input type="hidden" name="restoran_id" value="<?php echo $_GET['resto_id'];?>">
          </div>
          <textarea name="review" id="review" cols="30" rows="10" placeholder="Tulis ulasanmu..."></textarea>
          <input class="button" type="submit" name='rate' value="Submit" style="margin-left: auto" />
        </div>
      </form>
    </div>
  </div>
</html>