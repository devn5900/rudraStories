
@php
$css=['demonav','footer','prplc','userSignup'];
$nav=['commentcn','navbar']
@endphp
<x-navbar  :nav="$nav" :css="$css" desc="Rudra Stories || रुद्र की कहानियां"
key=" Rudra Stories || रुद्र की कहानियां " />



<div class="signup"> 

    <div class="formsection">
        <div class="formimg">
            <img src="{{asset('Images/3236267.jpg')}}" alt="img">
        </div>
        <div class="mainfrm">

            <h3>Sign Up</h3>
            <form action="/Sign_Up" method="POST">
                @csrf
                <div class="devin">
                    <img src="{{asset('webicons/signupuser.png')}}" alt="password">
                    <input type="text" name="Uname" value="{{old('Uname')}}" id="Uname" class="insig" placeholder="User Name">
                    @error('Uname')
                    <style>
                        #Uname{
                            border-color: red;
                        }
                    </style>
                    @enderror
                </div>
                <div class="devin">
                    <img src="{{asset('webicons/mail.png')}}" alt="email">
                    <input type="email" name="email" value="{{old('email')}}" id="email" class="insig" placeholder="Email Id">
                    @error('email')
                    <style>
                        #email{
                            border-color: red;
                        }
                    </style>
                    @enderror
                </div>
                <div class="devin">
                    <img src="{{asset('webicons/phone.png')}}" alt="phone">
                    <input type="phone" minlength="10" maxlength="10" class="insig" value="{{old('phone')}}" name="phone" id="phone" placeholder="Phone">
                    @error('phone')
                    <style>
                        #phone{
                            border-color: red;
                        }
                    </style>
                        {{-- <span style="background-color:#f4acb7;text-align:center;margin-top:10px">{{$message}}</span> --}}
                    @enderror
                </div>
                <div class="devin">
                    <img src="{{asset('webicons/password.png')}}" alt="password">
                    <input type="password" name="pass" class="insig" id="pass" placeholder="Password">
                    @error('pass')
                    <style>
                        #pass{
                            border-color: red;
                        }
                    </style>
                        {{-- <span style="background-color:#f4acb7;text-align:center;margin-top:10px">{{$message}}</span> --}}
                    @enderror 
                </div>
                <div class="devin">
                    <img src="{{asset('webicons/password.png')}}" alt="Cpassword">
                    <input type="password" name="cpass" class="insig" id="cpass" placeholder="Confirm Password">
                    @error('cpass')
                    <style>
                        #cpass{
                            border-color: red;
                        }
                        
                    </style>
                        {{-- <span style="background-color:#f4acb7;text-align:center;margin-top:10px">{{$message}}</span> --}}
                    @enderror
                </div>
                <input type="submit" name="submit" class="btnblue" value="submit">
            </form>
            @if ($errors->any())
                
            <div class="altr"style="background-color:#f4acb7;text-align:center;margin-top:10px">
                <b>{{$errors->first()}}</b>
            </div>
            @endif
            @if (session()->has('exists'))
            <div class="altr"style="background-color:#f4acb7;text-align:center;margin-top:10px">
             <b>{{session('exists')}}</b>
         </div>
            @endif
            @if (session()->has('reg'))
            <div class="altr"style="background-color:lightgreen;text-align:center;margin-top:10px">
             <b>{{session('reg')}}</b>
             <script>
                 setTimeout(() => {
                     window.location='/Log_In';
                 }, 3000);
             </script>
         </div>
            @endif
            
            {{--     <div class="altr"style="background-color:#f4acb7;text-align:center;margin-top:10px">
                    <b>'.$showError.'&nbsp;</b><small></small>
                </div>
                
                <div class="altr"style="background-color:#f4acb7;text-align:center;margin-top:10px">
                    <b>Username or Email&nbsp;</b><small>Already Exists</small>
                </div> --}}
              
                {{-- <div class="altr"style="background-color:#f4acb7;text-align:center;margin-top:10px">
                    <small>{{session('empty')}}</small>
                </div> --}}
            
            <div class="altr"style=";text-align:center;margin-top:10px; ">
                    <small>Click here for <a href="/Log_In">Login</a></small>
                </div>
            <!-- <div>

            </div> -->
        </div>
    </div>
</div>


<x-footer/>

