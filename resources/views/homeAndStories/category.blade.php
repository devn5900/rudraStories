@php
    $css=['demonav','footer','prplc','category'];
    $nav=['commentcn','navbar']
    @endphp
<x-navbar  :nav="$nav" :css="$css" desc="Rudra Stories || रुद्र की कहानियां"
 key=" Rudra Stories || रुद्र की कहानियां Categories " />


<!-- categories -->
<div class="categi" data-aos="fade-up">

    <div class="topstrsec">
        <div class="tophds">
            <h1>Categories</h1>
            <!-- <input type="search" name="search" id="search" placeholder="Search Categories"> -->
        </div>
        <div class="catstry ">

          
          @foreach ( $cate as $item)
          
          <div class=" catstrshs " >
                <div class="stry12" data-aos="flip-down">
                    <a href="/catedisp/{{$item->sno}}/{{$item->type_iden}}">
                        <div class="catehdf">
                            {{-- <img src="{{ asset('Images/4.jpeg') }}" alt=""> --}}
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

