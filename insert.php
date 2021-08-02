<?php
error_reporting(0);
$connection = mysqli_connect('localhost', 'root','');
$xy=false;
if ($connection) {
  //  echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}




   $database=$_POST['lineselect'];
   $tablename=$_POST['stationselect'];
   mysqli_select_db($connection, $database);

   if (isset($_POST['toolid']) || isset($_POST['toolname']) || isset($_POST['tooldesc']) || isset($_POST['tooluse']))
   { 
     $t_id=$_POST['toolid'];
    $t_name=$_POST['toolname'];
    $t_desc=$_POST['tooldesc'];
   
    $t_use=$_POST['tooluse'];
  }
 

 $t_brand=$_POST['toolbrand'];
 $t_d_of_manufac=$_POST['tooldom'];
 $t_dimen=$_POST['tooldimen'];
 $t_key_spec=$_POST['toolkeyspecs'];
 $t_owner_dept=$_POST['toolownerdept'];
 $t_owner_name=$_POST['toolownername'];
 $t_cal_freq=$_POST['toolcalfreq'];
 $t_pre_maint_freq=$_POST['toolpremainfreq'];
 $t_mttf=$_POST['toolmttf'];
 $t_mttr=$_POST['toolmttr'];
 $t_delete_flag=$_POST['tooldelflag'];
// $t_img=$_POST['imgfile[]'];

 $data_insertion="INSERT INTO '".$tablename."' (t_name, t_desc, t_use, t_brand, t_d_of_manufac, t_dimen, t_key_spec, t_owner_dept, t_owner_name, t_cal_freq, t_pre_maint_freq, t_mttf, t_mttr, t_delete_flag, t_id,) VALUES ('$t_name','$t_desc','$t_use','$t_brand','$t_d_of_manufac','$t_dimen','$t_key_spec','$t_owner_dept','$t_owner_name','$t_cal_freq','$t_pre_maint_freq','$t_mttf','$t_mttr','$t_delete_flag','$t_id')";
 $result_insertion=mysqli_query($connection,$data_insertion);
 if($result_insertion){
   $xy=true;
   header("location:datab.php");

 }
 else{
     echo "no action performed";  
 }




?>