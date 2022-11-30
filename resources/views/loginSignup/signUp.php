<?php


function userexists(){

    
   
    include '_dbconnect.php';
    $sql="select * from usersignupinfo where UserName=?";
    $stmt=$conn->prepare($sql);
    if($stmt){
        $stmt->bind_param("s",$username);
        $username=mysqli_real_escape_string($conn, $_POST['Uname']);
       
        // try to execute
        if($stmt->execute()){
            $stmt->store_result();
            // var_dump($stmt->num_rows());
            if($stmt->num_rows()){
               // echo 'execute';
               return true;
            }else{
               // echo 'return false';
                return false;
            }
        }else{
            echo 'not exe';
        }
    }
}

function emailExits(){

    
   
    include '_dbconnect.php';
    $sql="select * from usersignupinfo where email=?";
    $stmt=$conn->prepare($sql);
    if($stmt){
        $stmt->bind_param("s",$username);
        $username=mysqli_escape_string($conn, $_POST['email']);
       
        // try to execute
        if($stmt->execute()){
            $stmt->store_result();
            // var_dump($stmt->num_rows());
            if($stmt->num_rows()){
               // echo 'execute';
               return true;
            }else{
               // echo 'return false';
                return false;
            }
        }else{
            echo 'not exe';
        }
    }
}
function passveri(){
    // include '_dbconnect.php';
    $userPass=trim($_POST['pass']);
   $userCpass=trim($_POST['cpass']);
    if($userPass==$userCpass){
        return true;      
    }else{
        return false;
    }
}

function register($usrnm,$usrEm,$usrMb,$usrPs){
  
    require '_dbconnect.php';
    $sql="INSERT INTO `usersignupinfo` ( `UserName`, `Password`, `Email`, `UserMobile`, `DateAndTime`, `status`,`uidenkk`) VALUES (?,?, ?, ?, current_timestamp(), 'inactive',?)";
                    $stmt=mysqli_prepare($conn,$sql);
                    if($stmt){
                        
                        mysqli_stmt_bind_param($stmt,"sssis",$username,$userPass,$userEmail,$userMob,$hash);
                        $username=$usrnm;
                        $userEmail=$usrEm;
                        $userMob=$usrMb;
                        $userPass=$usrPs; 
                        $random_hex = bin2hex(random_bytes(32));
                        $hash= strtoupper($random_hex);
                    // try to execute
                    if(mysqli_stmt_execute($stmt)){
                        return true;
                    }
                    else{
                       return false;
                    }}
}
?>