 <?php
    
    if (isset($_SESSION['farmer_email'])) {

     require 'config.php';
    $email = $_SESSION['farmer_email'];
    $select = $conn->query("SELECT * FROM farmers WHERE email='$email'");
    if ($select->num_rows>0) {
      while ($row=$select->fetch_assoc()) {
      	if (isset($_POST['save_changes_btn'])) {
		  require 'login/php/config.php';
		      $name = mysqli_real_escape_string($conn,$_POST['name']);
		      $form_pass = mysqli_real_escape_string($conn,$_POST['password']);
		      $db_pass = $row['password'];
		      $password = ifPassEmpty($form_pass, $db_pass);
		      $pickup = mysqli_real_escape_string($conn,$_POST['pickup']);
		      $update = $conn->query("UPDATE farmers SET name='$name',password='$password',pickup='$pickup' WHERE email='$email'");
		      if ($update) {
		        echo "<script>alert('Updated Successfully');window.location.assign('#account')</script>";
		      }else{
		        echo "<script>alert('server error')</script>";
		      }

		      } 
       
          echo "  <div class='col-md-6 '>
                 <img width='150' height='150' src='login/images/img-01.png'>
                 <h4>".$row['name']."</h4>
                 <p>".$row['email']."</p>
               </div> <div class='col-md-6'>
                <form class='form-group' method='POST'>
                <input required value='".$row['pickup']."' type='text' class='form-control' name='pickup' placeholder='Change your pickup'><br>
                  <input value=''  type='password' class='form-control' name='password' placeholder='Change your Password'><br>
                   <input required value='".$row['name']."' type='paasword' class='form-control' name='name' placeholder='Change your Name'><br>
                   <button name='save_changes_btn' class='btn btn-primary'>Save Changes</button></form></div>";

      }
    }
   }

   if (isset($_SESSION['driver_email'])) {

     require 'config.php';
    $email = $_SESSION['driver_email'];
    $select = $conn->query("SELECT * FROM drivers WHERE email='$email'");
    if ($select->num_rows>0) {
      while ($row=$select->fetch_assoc()) {
      	if (isset($_POST['save_changes_btn'])) {
		  require 'login/php/config.php';
		      $name = mysqli_real_escape_string($conn,$_POST['name']);
		      $form_pass = mysqli_real_escape_string($conn,$_POST['password']);
		      $db_pass = $row['password'];
		      $password = ifPassEmpty($form_pass, $db_pass);
		      $pickup = mysqli_real_escape_string($conn,$_POST['pickup']);
		      $update = $conn->query("UPDATE drivers SET name='$name',password='$password',tractor_name='$pickup' WHERE email='$email'");
		      if ($update) {
		        echo "<script>alert('Updated Successfully');window.location.assign('#account')</script>";
		      }else{
		        echo "<script>alert('server error')</script>";
		      }

		      } 
       
          echo "  <div class='col-md-6 '>
                 <img width='150' height='150' src='login/images/img-01.png'>
                 <h4>".$row['name']."</h4>
                 <p>".$row['email']."</p>
               </div> <div class='col-md-6'>
                <form class='form-group' method='POST'>
                <input required value='".$row['tractor_name']."' type='text' class='form-control' name='pickup' placeholder='Change truck Name'><br>
                  <input value=''  type='password' class='form-control' name='password' placeholder='Change your Password'><br>
                   <input required value='".$row['name']."' type='paasword' class='form-control' name='name' placeholder='Change your Name'><br>
                   <button name='save_changes_btn' class='btn btn-primary'>Save Changes</button></form></div>";

      }
    }
   }
function ifPassEmpty($password, $db_pass){
	if (empty($password)) {
		return $db_pass;
	}else{
		return md5($password);
	}
}
    
?>
