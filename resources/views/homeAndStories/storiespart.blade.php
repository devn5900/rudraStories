@php
    $css=['demonav','footer','prplc','spstories'];
    $nav=['commentcn','navbar']
    @endphp
    @foreach ($mainst as $readstr)

    @endforeach
<x-navbar  :nav="$nav" :css="$css" desc="Rudra Stories || रुद्र की कहानियां"
 key=" {{$readstr->story_heading}} " />


    <div class="all" id="top">
         <div class="leftpanel">

            @foreach ($mainst as $item)
                
            <div class="card" oncopy="return false" data-aos="fade-up">
                <div class="strhd">
                    <h2> {{$item->story_heading}}
                   - भाग {{$item->part_no}}
                    </h2>
                </div>

                <address>
                    <div class="writer">
                        <div class="wrin">
                            <img src="{{asset('Images/usericon.png')}}" alt="">
                            <div class="time">
                                <p>
                                    By {{$item->written_by}} </p>
                                <p> {{date('d/M/Y', strtotime($item->post_time));}}</p>
                                <p>{{$item->Story_type}}</p>
                            </div>

                        </div>
                        <div class="sttyyp">
                            Share This
                            
                            <div class="right" id="rightlink">
                                <a rel="nofollow" title="Facebook" href="https://www.facebook.com/sharer.php?u=localhost/stories?catid=' . $_GET['catid'] . '&id34=' . $storyIden . '" target="_blank"
                                    class="fb"><i class="fa fa-facebook "></i></a>
                                <a href="https://instagram.com/manish_pandey_rudra?igshid=7r4njv1mcssz" target="_blank"
                                    class="insta"><i class="fa fa-instagram "></i></a>
                                    <a href="https://www.twitter.com/" target="_blank" class="tweet"><i
                                    class="fa fa-twitter "></i></a>
                                      <a href="https://www.flydreamspublications.com/" target="_blank" class="whhtap"><i
                                    class="fa fa-whatsapp "></i></a>
                            </div>
                        </div>
                    </div>
                </address>
                <div class="stryimg">
                    <img src="{{asset('Images/4.jpeg')}}" alt="द इल्युजन">
                </div>
                <div class="stryp">
                    <p>

                      {{$item->main_story}}
                    <span id="end">The End</span>
                    </p>
                    <div class="slidetop" id="slidetop">
                        <a href="#top"><img src="{{asset('webicons/gototop0.png')}}" alt="Back to Top"></a>
                    </div>


                    <div class="info">
                        <div class="like" id="likebtncnt">
                            <form action="" method="post" id="lk451d">
                                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="st_i124" value=" {{ base64_encode($item->story_id) }}">
                               <button id="bt45lk" name="submit"><i class="fa fa-thumbs-o-up" id="likesy"></i></button>
                            </form>
                        <p id="getid" style="display:none">{{$item->sno}}</p>
                        <small id="likeount">{{$item->stry_likes}}</small></div>
                        <div class="cmnt"><i class="fa fa-comments-o" id="cmntbtn"
                                onclick="comment()"></i><small>{{$cmntsum}}</small></div>
                    </div>
                    <p></p>
                </div>
            </div>
@endforeach

    <div id="cmntsec">
        
        @if (session()->has(['usnm','loginstat']))
             
            
        <div class="commentsection" data-aos="fade-up">
                <div class="cmntimg">

                    @if (empty($logup))
                    <img src="{{ asset('Images/usericon.png') }}" 
                    alt="User-Profile-Image">
                    @else
                    <img src="{{ asset('userProfile/'.$logup)}}" alt="">
                @endif
                </div>
                <div class="cmntdata">
                    <div class="username">
                        <h2>{{session('usnm')}}</h2>
                    </div>
                    <div class="userinput">
                        <form action="/spcpmt/{{ $item->story_identy }}" method="POST" name="myform" id="45ddf5d4">
                            <textarea type="text" name="usercomment" id="usercomment" placeholder="Enter Your Comment Here"></textarea>
                            <input type="hidden"  name="cmntcnt" value="{{base64_encode(session('usnm'))}}" />
                            @csrf
                            <input type="submit" id="morebtn" name="cmntsubmit" value="Comment" />
                        </form>
                        @if (!empty($erp))    
                        <div class="altr" style="background-color:#f4acb7;text-align:center;margin-top:10px; ">
                            <small>{{$erp}}</small>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        @else
            
            <div class="commentsection" data-aos="fade-up">
                    <div class="cmntimg">
                        <img src="{{asset('Images/usericon.png')}}" alt="">
                    </div>
                    <div class="cmntdata">
                        <div class="username">
                            <h2>Dear User</h2>
                        </div>
                        <div class="userinput">
                            <small> Please Login for Comment </small>
                        </div>
                    </div>
                </div>
        @endif
                
                @foreach ($cmnt as $c)
                    
              
                <div class="commentsection" data-aos="fade-up">
                    <div class="cmntimg">
                        @if (empty($c->images))
                        <img src="{{ asset('Images/usericon.png') }}" 
                        alt="User-Profile-Image">
                        @else
                        <img src="{{ asset('userProfile/' .$c->images)}}" alt="">   
                    @endif

                    </div>
                    <div class="cmntdata">
                        <div class="username">
                            <h2>{{$c->comment_by}}</h2>
                        </div>
                        <div class="userinput">
                            <small>{{$c->comment}} 
                            </small>
                        </div>
                    </div>
                </div>
                @endforeach

    </div>
    </div>

    <div class="rightpanel">
        
        
        <div class="stryshow " data-aos="fade-in">
            <div class="cattag">
                <h1>{{$item->story_heading}}-भाग</h1>
            </div>
            {{-- if story parts exits --}}
                @if ($part->isNotEmpty())
                    
            @foreach ($part as $p)
                
                 <div class="bck">
                 <div class="catstry ">
                     <div class=" catstrsh ">
                         <div class="stryct">
        
                     <a href="/storiespart/{{$p->part_no}}/{{$p->story_identy}}/{{$p->mainstry_id}}">
                                 <div class="catehd">
                                     <img src="{{asset('Images/1.jpeg')}}" alt="">
                                     <div class="catcont">
                                         <h2>{{$p->story_heading}} भाग-{{$p->part_no}}</h2>
                                         <small>{{Str::substr($p->story_desc, 0, 70)}}</small>
                                     </div>
                                 </div>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             @endforeach
                 
             @else
                 
            {{-- if story parts does`nt exits --}}
 
                 <div class="bck">
                 <div class="catstry ">
                     <div class=" catstrsh ">
                         <div class="stryct">
                             <a href="/stories/ZD==">
                                 <div class="catehd">
                                     <div class="catcont">
                                         <h2 class="imp">There is no Results</h2>
                                         <small></small>
                                     </div>
                                 </div>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
 
             @endif
             </div>
 


            <div class="stryshow" data-aos="fade-up">
                <div class="newstr">
                    <h1>
                        Related Stories
                    </h1>
                </div>
                
                
                @foreach ($relstry as $rsty)
                    
                <div class="bck" data-aos="fade-down">
                    <div class="catstry ">
                    <div class=" catstrsh ">
                        <div class="stryct">
                        <a  href="/stories/{{$rsty->story_id}}/{{$rsty->story_identy}}">
                            <div class="catehd">
                      <img src="{{ asset('storyImages/' .$rsty->images)}}" alt="">
                                    <div class="catcont">
                                        <h2>{{$rsty->story_heading}}<span>(none)</span></h2>
                                        <small>{{Str::substr($rsty->story_desc, 0, 70)}} </small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach






            </div>
    </div>



    </div>

    </div>


    <x-footer/>

