<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admincss/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <div class="dash">
        <div class="left">
            <div class="head">
                <h2>RUDRA</h2>
            </div>
            <div class="slide">
                <ul>
                    <li id="da2022" class="das das12"><i class="fa fa-tasks"></i>Dashboard</li>
                    <li id="da2023" class="das"><i class="fa fa-pencil-square"></i>Write New</li>
                    <li id="da2024" class="das"><i class="fa fa-edit"></i>Edit </li>
                    <li id="da2030" class="das"><i class="fa fa-edit"></i>Thoughts </li>
                    <li id="da2025" class="das"><i class="fa fa-book"></i>Books</li>
                    <li id="da2026" class="das"><i class="fa fa-user"></i>Users</li>
                    <li id="da2027" class="das"><i class="fa fa-commenting-o"></i>Messages</li>
                    <li id="da2028" class="das"><i class="fa fa-comments"></i>Comments</li>
                    <li id="da2029" class="das"><i class="fa fa-sign-out"></i><a href="">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="mainhe">
                <div class="msgim"><h2>If you have made any change and it is
                     not displaying properly then refresh the page it is done </h2></div>
                <div class="imgf">
                    <img src="images/aboutimg.jpeg" alt="">
                </div>
                
            </div>


            <div class="bdy" id="ch10ngcon">

                 
                @include('admin.dashboard')
                @include('admin.navFooter.footer')
