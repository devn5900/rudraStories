@php
    $css=['demonav','footer','prplc','category'];
    $nav=['commentcn','navbar']
    
    @endphp
<x-navbar  :nav="$nav" :css="$css" desc="Rudra Stories || रुद्र की कहानियां"
 key=" Rudra Stories || रुद्र की कहानियां " />


@if (session()->has(['usnm','loginstat']))
            

<div class="welcome" id="welsc" style="background-color: #ff477e;text-align:center;">
    <small style=" color: #fff;font-size:1.2rem;font-weight:bold;font-family: Poppins,monospace;">Welcome {{session('usnm')}} !</small>
</div>
 
@endif

    <div>
        <div class="maincontent">
            <div class="item" data-aos="fade-up">


                <h2>Lot's of stories by <span>Rudra</span></h2>
                 <a href="/all_stories" target="_blank">Read Stories</a>
            </div>
            <div class="imgback" data-aos="fade-down">
                {{-- <img src="{{asset('Images/background.png')}}" alt=""> --}}
                
                {{-- <section class="main">   --}}
                    <div class="mb-wrap mb-style-2">  
                      <blockquote >  
                        <p>{{$thght->Mainthought}}</p>
                       
                    </blockquote>
                    </div><!--#mb-wrap-->
                {{-- </section> --}}


            </div>
 
        </div>

        <div class="topstrsec" data-aos="fade-up">
            <div class="tophd">
                <h1>Latest Stories</h1>
                <a href="/all_stories" target="_blank">View All</a>
            </div>
            <div class="topstry ">
@foreach ($latest as $item)
        
    <div class="allstryshow " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="stry1">
                <img src="{{ asset('storyImages/' .$item->images)}}" alt="">
                </div>
                <div class="stry1">
                    <div class="stryno1">
                        <h2>{{$item->story_heading}}</h2>
                
                        <p>{{Str::substr($item->story_desc, 0, 70)}}</p>
                        <div class="stbtn">
                            <a href="/stories/{{$item->story_id}}/{{$item->story_identy}} " id="morebtn" target="_blank">Read more</a>
                        </div>
                        <div class="stinf">
                            <i class="fa fa-thumbs-o-up">&nbsp;<span >{{$item->stry_likes}}</span></i>
                            <i class="fa fa-eye"> &nbsp;<span >{{$item->view}}</span></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        </div>

        <div class="topstrsec" data-aos="fade-up">
            <div class="tophd">
                <h1>Top Stories</h1>
                <a href="/all_stories" target="_blank">View All</a>
            </div>
            <div class="topstry ">
                @foreach ($top as $tp)
                    
                <div class="allstryshow " data-aos="fade-down">
                    <div class="stry1">
                    <img src="{{ asset('storyImages/' .$tp->images)}}" alt="">
                </div>
                <div class="stry1">
                    <div class="stryno1">
                        <h2>{{$tp->story_heading}}</h2>

                        <p>{{Str::substr($tp->story_desc, 0, 70)}}</p>
                        <div class="stbtn">
                            <a href="/stories/{{$tp->story_id}}/{{$tp->story_identy}} " id="morebtn" target="_blank">Read more</a>
                        </div>
                        <div class="stinf">
                            <i class="fa fa-thumbs-o-up">&nbsp;<span >{{$tp->stry_likes}}</span></i>
                            <i class="fa fa-eye"> &nbsp;<span >{{$tp->view}}</span></i>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        </div>

        <!-- categories -->
        <div class="categ" data-aos="fade-up">
            
            <div class="topstrsec">
                <div class="tophd">
                    <h1>Top Categories</h1>
                    <a href="/category" target="_blank">View All</a>
                </div>
                <div class="catstry ">
         @foreach ($cat as $ct)
                    <div class=" catstrsh " data-aos="flip-down">
                            
          <div class="stry1">
            <a href="/catedisp/{{$ct->sno}}/{{$ct->type_iden}}">
             <div class="catehd">
                  {{-- <img src="{{asset('Images/9.jpeg')}}" alt=""> --}}
                <div class="catcont">
                      <h2>{{$ct->Story_type}}</h2>
                    <span><i class="fa fa-clock-o" aria-hidden="true"></i>
                         <span> {{ date('d M', strtotime($ct->created_at)) }}</span>
                       
                        </span>
                </div>
                <p></p>
            </div>
        </a>
    </div>
</div>
    @endforeach


                </div>
            </div>
        </div>
    </div>
    <div class="noti">

    </div>
    

    {{-- includde footer here --}}
    <x-footer/>
