 <?php 
    if (isset($_SESSION['farmer_email'])) {
     require 'config.php';
    $select = $conn->query("SELECT * FROM drivers");
    $email = $_SESSION['farmer_email'];
     $farmer_location = $conn->query("SELECT * FROM farmers WHERE email='$email'");
        while ($row=$farmer_location->fetch_assoc()) {
          $pickup = $row['pickup'];
        }

    if ($select->num_rows>0) {
      while ($row=$select->fetch_assoc()) {
       
          echo " <div class='col-lg-4 col-md-6'><div class='icon-box'>
                <div class='icon'><i class='bi bi-truck'></i></div>
                <h4 class='title'><a href=''>".$row['tractor_name']." - ".$row['tractor_reg_no']."</a></h4>
                <p class='description'>Driver Name: ".$row['name']."</p>
                 <p  class='description'><button value='?location=".$row['coordinates'].":".$pickup."' class='btn btn-primary openModal' type='button' class='text-light' href='' ><span class='fa fa-map-marker'></span> View Location</button></p>
              </div></div>";

      }
    }
   }

    
?>
