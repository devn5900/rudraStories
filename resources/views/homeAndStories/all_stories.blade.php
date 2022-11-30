@php
    $css=['demonav','footer','prplc','all_storie'];
    $nav=['commentcn','navbar']
    @endphp
<x-navbar  :nav="$nav" :css="$css" desc="Rudra Stories || रुद्र की कहानियां"
 key=" Rudra Stories || रुद्र की कहानियां || कहानियां || Story " />



<div class="container">
</div>

    <div class="abstry">
        <h1>कहानियां</h1>

    </div>
    <div class="fff">
<div class="allstryright">  
@foreach ($allst as $item)
    
<div class="allstryshow ">
    <div class="stry1">
                    <img src="{{ asset('storyImages/' .$item->images)}}" alt="">
                </div>
                <div class="stry1">
               <div class="stryno1">
                   <h2>{{$item->story_heading}}</h2>
                        
                        <p>{{Str::substr($item->story_desc, 0, 70)}}<small id="dot">...</small>
                            <div class="stbtn">
                                <a href="/stories/{{$item->story_id}}/{{$item->story_identy}}" id="morebtn">Read more</a>
                            </div>       
                        </p>
                    </div>  
                </div>
            </div>

            
            @endforeach


    </div>
    </div>

{{-- footer here  --}}
<x-footer/>

