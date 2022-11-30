@php
    $css=['demonav','footer','prplc','aboutme'];
    $nav=['commentcn','navbar']
    @endphp
<x-navbar  :nav="$nav" :css="$css" desc="Rudra Stories || रुद्र की कहानियां"
 key=" Rudra Stories || रुद्र की कहानियां Manish Pandey RUDRA" />



 <div class="mainabout">
     <div class="leftab">

         <div class="about">
             <div class="aboutimg">
                 <img src="{{asset('Images/aboutimg.jpeg')}}" alt="writer image">
             </div>
             <div class="name">
                 <h2>Manish Pandey 'Rudra'</h2>
                 <h3>writer</h3>
                 <h4>Since 2012</h4>
             </div>
         </div>
     </div>
     <div class="rightab">
         <div class="info">
             <div class="conlink">
                 <div class="contacinfo">
                     <h2>Contact Info</h2>
                     <h4><span style="color: #e28743">Gmail:</span><span class="min"> manishpandeylava@gmail.com</span></h4>
                     <h4> <span style="color: #e28743">Mobile No:</span> <span>8887652489</span></h4>

                 </div>
                 <div class="links">
                     <a href="#">Twitter</a>
                     <a href="https://www.facebook.com/styleshrudra.kumarpandey" target="_blank">facebook</a>
                     <a href="https://instagram.com/manish_pandey_rudra?igshid=7r4njv1mcssz" target="_blank">Instagram</a>
                     <a href="https://www.flydreamspublications.com/" target="_blank">FlyDreams</a>
                     <a href="https://hindi.pratilipi.com/user/3l3s0s99sk?utm_source=android&utm_campaign=myprofile_share" target="_blank">Pratilipi</a>
                 </div>
             </div>
             <div class="bio">
                 <h2>About Me</h2>
                 <p>Born in Balrampur district of Uttar Pradesh, Manish Pandey 'Rudra' has been very fond of story books and comics since childhood. 
                     From the very beginning his inclination was more towards writing. He has written for many blogs, Facebook pages, fan made comics
                      websites and podcast channels. Also Manish has spread the magic of his writing on the copy for a long time. Able to engage readers 
                      with his writing skills,
                      Manish has recently completed his graduation and is working hard to become a writer and teacher in the future.</p>
             </div>
         </div>
     </div>
 </div>
 
 {{-- include footer here  --}}
 <x-footer/>

