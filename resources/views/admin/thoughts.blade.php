<div class="help">  
    <div class="helpque blkinv" id="helpque10">
      
      <form action="" method="post" id="hlpfr253">
          <div id="erm"></div>
        <label for="">Your Thought</label>
        <input type="text" name="nm45226" id="n12001">
        @csrf
         <input type="submit" name="sub120" value="POST" id="s55214" class="ms45snd">
      </form>

    </div>
    <div class="hd">
        <h4> Uploaded Thoughts</h4>
      </div>
      <div class="thgtlist">
        <ul>
          @foreach ($thgt as $item)
              
          <li>
            {{$item->Mainthought}}
          </li>
          @endforeach
        </ul>
      </div>
  </div>