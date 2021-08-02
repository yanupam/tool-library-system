<?php
$connection = mysqli_connect('localhost', 'root');



mysqli_select_db($connection, 'project');

$u_email=$_POST['email'];
    $pass=$_POST['password'];
    $u_type=$_POST['usertype'];

if(isset($_POST['login']))
{
   
    $query="SELECT * FROM credentials WHERE EMAIL ='".$u_email."' AND PASSWD ='".$pass."' and USERTYPE='".$u_type."' limit 1";
    $result=mysqli_query($connection, $query);
    $num=mysqli_num_rows($result);
    if($num==1)
    {  
        if($u_type=="admin"){
        
            header("location:admin_tml.php");
        }
        else
        {
            header("location:user_tml.php");
        }
         

    }
    else{
        echo "invalid credentials";
    }
   
    


}





?>