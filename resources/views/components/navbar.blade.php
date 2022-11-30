<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $desc }}">
    <meta name="keywords" content="{{ $key }}">
    <meta name="author" content="Manish Pandey 'Rudra'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="{{ asset('/webicons/weblogo.png') }}" type="image/gif" sizes="25x25">

    @foreach ($css as $item)
        <link rel="stylesheet" href="{{ asset('css/' . $item . '.css') }}">
    @endforeach

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @foreach ($nav as $ite)
        <script src="{{ asset('js/' . $ite . '.js') }}"></script>
    @endforeach
    <title>Rudra Stories</title>
    <script>
        function loader() {
            if (document.readyState == "complete") {
                document.querySelector("body").style.visibility = "visible";
                document.getElementById("loader").style.visibility = "hidden";
            } else {
                document.getElementById("loader").style.display = "visible";
                document.querySelector("body").style.visibility = "hidden";
            }
        };
    </script>
    <script>
        window.setInterval(function() {

            var time = document.getElementById('time');
            const d = new Date();
            let hour = d.getHours();
            let min = d.getMinutes();
            let sec = d.getSeconds();
            let fr = "AM";
            if (hour > 12) {
                fr = "PM";
                hour = hour - 12;
                hour = '0' + hour;

            }
            if (min < 10) {

                min = '0' + min;

            }
            if (sec < 10) {

                sec = '0' + sec;

            }
            time.innerHTML = hour + ":" + min + ":" + sec+" "+fr;
            //   console.log(t);

        }, 1000);
    </script>
    <style>
        .loader {

            position: absolute;
            width: 100%;
            height: 100vh;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #dddd;
        }

    </style>
</head>

<body onload="loader()">

    <div class="loader" id="loader">
        <div class="ldr">
            <i class="fa fa-spinner fa-spin" style="font-size:80px;color:red"></i>
        </div>
    </div>
    <div class="mainnav">
        <div class="slideimg">
            <div class="left">
                <img src="{{ asset('webicons/weblogo.png') }}" alt="" srcset="">
                <a href="/"> <span>Rudra Stories</span></a>
            </div>
            <div class="logsign">

                @if (session()->has(['usnm', 'loginstat']))
                    <a class="proflu" href="/profile">
                        {{-- @foreach ($data as $item)
            <img src="{{asset('userProfile/'.$item->images)}}"  class="img-radius"
            alt="User-Profile-Image"> --}}
                        @if ($data != null)
                            <img src="{{ asset('userProfile/' . $data) }}" class="img-radius"
                                alt="User-Profile-Image">

                        @else
                            <img src="{{ asset('webicons/signupuser.png') }}" class="img-radius"
                                alt="User-Profile-Image">
                            {{-- @endforeach --}}
                        @endif
                    </a>
                    <a class="logout" href="/Log_Out">Logout</a>
                @else
                    <a class="logout" href="/Sign_Up">Signup</a><a href="/Log_In"
                        class="logout">Login</a>

                @endif
            </div>

        </div>
        <div class="opbar">
            <i class="fa fa-bars" id="open" onclick="slidefun()" aria-hidden="true" style="display: block;"></i>
            <i class="fa fa-close" id="close" onclick="closeslide()" aria-hidden="true" style="display: none;"></i>

        </div>
        <div class="mid" id="midlink">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/all_stories" target="_blank">Stories</a></li>
                <li><a href="/category" target="_blank">Categories</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="/about_me">About Us</a></li>
            </ul>

            <div class="right" id="rightlink">
                <p id="time" style="font-family: 'Poppins'; color: #e28743 "></p>
                <a href="https://www.facebook.com/styleshrudra.kumarpandey" target="_blank" class="fb"><i
                        class="fa fa-facebook "></i></a>
                <a href="https://instagram.com/manish_pandey_rudra?igshid=7r4njv1mcssz" target="_blank"
                    class="insta"><i class="fa fa-instagram "></i></a>
                <a href="https://www.flydreamspublications.com/" target="_blank" class="tweet"><i
                        class="fa fa-twitter "></i></a>

            </div>
        </div>
    </div>
