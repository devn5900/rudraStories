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
                <h3>Login</h3>
                <form action="/Log_In" method="POST">
                    @csrf
                    <div class="devin">
                        <img src="{{asset('webicons/signupuser.png')}}" alt="password">
                        <input type="text" name="Logid" value="{{old('Logid')}}" id="Uname" class="insig" placeholder="User Name">
                        @error('Logid')
                        <style>
                            #Uname{
                                border-color: red;
                            }
                        </style>
                        @enderror
                    </div>
                    <div class="devin">
                        <img src="{{asset('webicons/password.png')}}" alt="password">
                        <input type="password" name="Logps" id="pass" class="insig" placeholder="Password">
                        @error('Logps')
                        <style>
                            #pass{
                                border-color: red;
                            }
                         </style>
                        @enderror
                    </div>

                    <input type="submit" class="btnblue" name="submit" value="submit">
                </form>
                 
                {{-- <div class="altr"style="background-color:#52b788;text-align:center;margin-top:10px">
                    <small>Sucess&nbsp;</small><small>Your sign up complete</small>
                </div>--}}
                @if ($errors->any())
                    
                <div class="altr"style="background-color:#f4acb7;text-align:center;margin-top:10px; ">
                    <small>{{$errors->first()}}</small>
                </div>
                @endif
                @if (session()->has('notmatch'))
                    
                <div class="altr"style="background-color:#f4acb7;text-align:center;margin-top:10px">
                     <small>{{session('notmatch')}}</small>
                 </div>
                @endif
                <div class="altr"style=";text-align:center;margin-top:10px; ">
                    <small>Click here for <a href="/Sign_Up">SignUp</a></small>
                </div>
            </div>
        </div>
    </div>

    <x-footer/>

