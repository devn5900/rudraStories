@php
    $css=['demonav','footer','prplc','userprf'];
    $nav=['commentcn','navbar']
    @endphp
<x-navbar  :nav="$nav" :css="$css" desc="Rudra Stories || रुद्र की कहानियां"
 key=" Rudra Stories || रुद्र की कहानियां " />

<meta name="csrf_token" content="{{ csrf_token() }}">
<div class="" id="page-content">
    <div class="padding">
        <div class="">
            <div class="">
                <div class="">
                    <div class="">
                        <div class=" bg-c-lite-green user-profile">
                            <div class="card-block cntr">
                                <div class="content">
                                    <div class="close-btn clos">
                                        ×
                                    </div>

                                    <form action="" method="post" id="frmim00" enctype="multipart/form-data">
                                        <div class="pckpup">
                                            <h1>Upload Profile</h1>
                                            <input type="file" id="file" name="usor4fg" />
                                            <label for="file">choose a file</label>

                                            @csrf
                                            <input type="submit" class="uplnd" value="Upload Image"
                                                name="submit">
                                         </div>
                                        <div>

                                            <div class="alert alert-danger">
                                                <h3 id="cerr"></h3>
                                            </div>
                                            {{-- @error('usor4fg')
                                            
                                        <h3 id="errorp">{{$usor4fg}}</h3>
                                        @enderror --}}
                                        </div>
                                    </form>

                                </div>
                                <div class="m-b-25">
                                    @foreach ($data as $item)
                                        @if ($item->images != null)
                                            <img src="{{ asset('userProfile/' . $item->images) }}" class="img-radius"
                                                alt="User-Profile-Image">
                                        @else
                                            <img src="{{ asset('images/usericon.png') }}" class="img-radius"
                                                alt="User-Profile-Image">
                                        @endif
                                    @endforeach

                                    <i class="fa fa-edit h0v clos" id="upc45758" style="font-size:25px;color:#fff"></i>

                                </div>
                                @foreach ($data as $item)
                                    <h6 class="f-w-600 f-w-600-white">{{ $item->UserName }}</h6>
                                @endforeach
                            </div>
                        </div>
                        <div class="">
                            @foreach ($data as $item)

                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600 f-w-600-blck">Information</h6>
                                    <div class="row">
                                        <div class="b-b-default cn-pf">
                                            <p class="m-b-10 f-w-601">Name :-</p>
                                            <h6 class="text-muted f-w-400">{{ $item->UserName }}</h6>
                                            <i class="fa fa-edit h0v" style="font-size:25px;color:red"></i>
                                        </div>
                                        <div class="b-b-default cn-pf">
                                            <p class="m-b-10 f-w-601">User Name :-</p>
                                            <h6 class="text-muted f-w-400">{{ $item->UserName }}</h6>
                                            <i class="fa fa-edit h0v" style="font-size:25px;color:red"></i>
                                        </div>
                                        <div class="b-b-default cn-pf">
                                            <p class="m-b-10 f-w-601">Email :-</p>
                                            <h6 class="text-muted f-w-400" id="e4s">{{ $item->Email }}</h6>
                                            <i class="fa fa-edit h0v" style="font-size:25px;color:red"></i>
                                        </div>
                                        <div class="b-b-default cn-pf">
                                            <p class="m-b-10 f-w-601">Phone :-</p>
                                            <h6 class="text-muted f-w-400">{{ $item->UserMobile }}</h6>
                                            <i class="fa fa-edit h0v" style="font-size:25px;color:red"></i>
                                        </div>

                                        <div class="b-b-default ">
                                            <p class="m-b-10 f-w-601">Get Notified :-</p>
                                            <p class="f-w-602">Click Here to get all Notifications related to the
                                                latest news and Stories on Email 
                                                    <form action="" method="post" id="sbs045">
                                                        <input type="hidden" name="susuid" value="{{$item->Email}}">
                                                        @csrf
                                                        <input type="submit" class="anc-mut" id="chksum" value="{{$subs}}"/>
                                                    </form>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600 f-w-600-blck">Latest Stories</h6>
                                <div class="topstry ">
                                    @foreach ($latest as $item)

                                        <div class="allstryshow " data-aos="fade-up"
                                            data-aos-anchor-placement="center-bottom">
                                            <div class="stry1">
                                            <img src="{{ asset('storyImages/' .$item->images)}}" alt="">
                    
                                            </div>
                                            <div class="stry1">
                                                <div class="stryno1">
                                                    <h2>{{ $item->story_heading }}</h2>

                                                    <p>{{ Str::substr($item->story_desc, 0, 70) }}</p>
                                                    <div class="stbtn">
                                                        <a href="/stories/{{ $item->story_id }}/{{ $item->story_identy }} "
                                                            id="morebtn" target="_blank">Read more</a>
                                                    </div>
                                                    <div class="stinf">
                                                        <i
                                                            class="fa fa-thumbs-o-up">&nbsp;<span>{{ $item->stry_likes }}</span></i>
                                                        <i class="fa fa-eye">
                                                            &nbsp;<span>{{ $item->view }}</span></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<x-footer />
