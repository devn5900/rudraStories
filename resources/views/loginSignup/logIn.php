<?php

function sts($name)
{
    require '_dbconnect.php';
    $qu = "update `usersignupinfo` set `status` ='active' where UserName=?";
    $stt = $conn->prepare($qu);
    if ($stt) {
        $stt->bind_param('s', $ssss);
        $ssss = $name;

        if ($stt->execute()) {

            if(session($name)){

                return true;
            }else{

                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}
function logoutstat($name)
{
    require '_dbconnect.php';
    $qu = "update `usersignupinfo` set `status` ='inactive' where UserName=?";
    $stt = $conn->prepare($qu);
    if ($stt) {
        $stt->bind_param('s', $ssss);
        $ssss = $name;

        if ($stt->execute()) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function session($name)
{
    session_name('devn');
    if (!empty($name)) { 
        session_start();
        $_SESSION['loggin'] = true;
        $_SESSION['ssn'] = $name;
        return true;
    }else{
        return false;
    }
}
