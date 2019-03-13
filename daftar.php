<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00b101;}
</style>
<form action="prosesdaftar.php" method="post">
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>

<?php
$nameErr = $emailErr = $genderErr = $websiteErr = $usiaErr = $nimErr = $biografiErr = $jurusanErr = "";
$username = $password = $passErr = $email = $gender = $biografi = $website = $nim = $jurusan = $usia = "";

date_default_timezone_set('Asia/Jakarta');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["nim"])) {
    $nimErr = "NIM is required";
  } else {
    $nim = test_input($_POST["nim"]);
    if (!preg_match("/^[0-9 ]*$/",$nim)) {
      $nimErr = "Only Numbers allowed"; 
    }
  } 
  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $nim = test_input($_POST["password"]);
    if (!preg_match("/^[0-9 ]*$/",$password)) {
      $nimErr = "Only Numbers allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["jurusan"])) {
    $jurusanErr = "Please Select One";
  } else {
    $jurusan = test_input($_POST["jurusan"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["usia"])) {
    $usiaErr = "Age is required";
  } else {
    $usia = test_input($_POST["usia"]);
    if (!preg_match("/^[0-9 ]*$/",$usia)) {
      $usiaErr = "Only Numbers allowed"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $websiteErr = "Website is required";
  } else {
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["biografi"])) {
    $biografiErr = "Biografi is required";
  } else {
    $biografi = test_input($_POST["biografi"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 <div class="loginbox">
 
    <img src="avatar.png" class="avatar">
        <h1>Register Here</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <p>Username</p>
            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username;?>"> 
            <p>Password</p>
            <input type="password" class="form-control" name="password" placeholder="Password" required=""> <span class="error"> <?php echo $passErr;?> </span>
            <p>NIM</p>
			<input type="text" name="nim" value="<?php echo $nim;?>">
			<span class="error"> <?php echo $nimErr;?></span>
			<p>E-mail</p>
			<input type="text" name="email" value="<?php echo $email;?>">
			<span class="error"><?php echo $emailErr;?></span>
			<p>Jurusan</p>
			<select name="jurusan">
			<option value="">-Pilih Jurusan-</option>  <br>
			<option value="Sistem Informasi">Sistem Informasi</option>
			<option value="Sistem Komputer">Sistem Komputer</option>
			<option value="Teknik Informatika">Teknik Informatika</option>
			</select><br>
			<span class="error"> <?php echo $jurusanErr;?></span>
			<p>Gender</p>
			<input checked="checked" type="radio" name="gender" value="Male">Laki-Laki
			<input type="radio" name="gender" value="Female">Perempuan
			<span class="error"> <?php echo $genderErr;?></span>
			<p>Usia</p>
			<input type="text" name="usia" value="<?php echo $usia;?>">
			<span class="error"> <?php echo $usiaErr;?></span>
			<p>Website</p>
			<input type="text" name="website" value="<?php echo $website;?>">
			<span class="error"> <?php echo $websiteErr;?></span>
			<p>Biografi</p>
			<textarea name="biografi"><?php echo $biografi;?></textarea><span class="error"> <?php echo $biografiErr;?></span>
			
			<p>Login As </p> <br>
			<select name="level">
            <option value="">-Pilih Jabatan-</option>
            <option value="admin">admin</option>
            <option value="manager">manager</option>
            </select> <p> <br>
	<img src="capcay.php"/> </p>
			<input type="text" placeholder="Captcha" name="kode"/><span class="error"></span>
			<input type="submit" name="" value="DAFTAR">
			<input type="reset" name="" value="RESET">
            </form>   
            
	



</form>

</body>
</html>