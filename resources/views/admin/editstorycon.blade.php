
<div class="wrstry" id="edtstrp">
<div class="btncls"><span id="cls000"><i class="fa fa-close"></i>
</span></div>
    <div class="wrhead">
        <h2>Edit Story</h2>
    </div>

    <form action="" id="wr008915" enctype="multipart/form-data">
    @foreach ($storyed as $item)    
    <div class="frmst">
        <div class="onsi">
        <div class="lblhead">
            <p>Story Heading</p>
        </div>
        <div class="inpu">
            <input type="text" name="sthd4500" value="{{$item->story_heading}}" id="sthd4500">
        </div>
        
        <div class="lblhead">
            <p>Story Type</p>
        </div> 
        @csrf
        <div class="inpu">
            <select name="stty4500" id="stty4500">
                <option value="0">Select </option>
                <option value="{{ $item->sno }}" selected>{{ $item->Story_type }}</option>
                @foreach ($sty as $st)
                    @if ($item->sno==$st->sno)
                        
                    @else
                    <option value="{{$st->sno}}">{{$st->Story_type}}</option>
                        
                    @endif
                
                @endforeach
            </select>
        </div>

        <div class="lblhead">
            <p>Story Description</p>
        </div>
        <div class="inpu">
            <input type="text" name="stdesc4500" value="{{$item->story_desc}}" id="stdesc4500">
        </div>

        <div class="lblhead">
            <p>Written By</p>
        </div>
        <div class="inpu">
            <input type="text" name="stwr4500" value="{{$item->written_by}}" id="stwr4500">
        </div>
        <div class="lblhead">
            <p>Images</p>
        </div>
        <div class="inpu">
            <input type="file" name="stfl4500" id="stfl4500">
        </div>
    </div>
    <div class="twosi">
        <div class="lblhead">
            <p>Main Story</p>
        </div>
        <div class="inpu">
            <textarea name="stmn4500" id="stmn4500"  cols="30" rows="10">{{$item->main_story}}</textarea>
        </div>
        <input type="hidden" name="stide4500" id="stide4500" value="{{$item->story_identy}}">
        <div class="btsb">
            <input type="submit" value="Update" >
        </div>
    </div>
    </div>
    @endforeach
</form>
</div>