@php
    $css=['demonav','footer','prplc','catedisp','category','all_storie'];
    $nav=['commentcn','navbar']
     @endphp
<x-navbar  :nav="$nav" :css="$css" desc="Rudra Stories || रुद्र की कहानियां"
 key=" भूतिया कहानी साइंस फिक्शन बाल साहित्य सामाजिक " />




<div class="container">
</div>

<div class="abstry">
  @foreach ($stty as $typ)
      
  <h1>{{$typ->Story_type}}</h1>
  @endforeach

</div>
<div class="fff">
    <div class="allstryright">

      @foreach ($stry as $item) 
          
      <div class="allstryshow ">
        <div class="stry1">
          <img src="{{ asset('storyImages/' .$item->images)}}" alt="">
            </div>
            <div class="stry1">
              <div class="stryno1">
                <h2>{{$item->story_heading}}</h2>
                
                    <p>{{Str::substr($item->story_desc, 0, 70)}}<small id="dot">...</small>
                      <div class="stbtn">
                        <a href="/stories/{{$item->story_id}}/{{$item->story_identy}} " id="morebtn" target="_blank">Read more</a>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
              @endforeach



    </div>
</div>
<!-- categories -->
<div class="categi" data-aos="fade-up">

    <div class="topstrsec">
        <div class="tophds">
            <h1>Other Categories</h1>
        </div>
        <div class="catstry ">

             @foreach ($cate as $item)
          
          <div class=" catstrshs " >
                <div class="stry12" data-aos="flip-down">
                    <a href="/catedisp/{{$item->sno}}/{{$item->type_iden}}">
                        <div class="catehdf">
                            <div class="catcont">
                                <h2>{{$item->Story_type}}</h2>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>
                                  <span> {{ date('d M', strtotime($item->created_at)) }}</span>
                                
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

<x-footer/>

