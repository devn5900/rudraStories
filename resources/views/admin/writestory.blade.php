
<div class="wrstry">
    <div class="wrhead">
        <h2>Write Story</h2>
    </div>
    <div class="erhead" id="erhead">
        
    </div>
    <form action="" id="wr008914" enctype="multipart/form-data">
    <div class="frmst">
        <div class="onsi">
        <div class="lblhead">
            <p>Story Heading</p>
        </div>
        <div class="inpu">
            <input type="text" name="stehad" id="stehad">
        </div>

        <div class="lblhead">
            <p>Story Type</p>
        </div>
        <div class="inpu">
            <select name="stypm" id="stypm">
                <option value="0">Select </option>
                @foreach ($tp as $item)
                   <option value="{{$item->sno}}">{{$item->Story_type}}</option>
               @endforeach
            </select>
        </div>

        <div class="lblhead">
            <p>Story Description</p>
        </div>
        <div class="inpu">
            <input type="text" name="stdesck" id="stdesck">
        </div>

        <div class="lblhead">
            <p>Written By</p>
        </div>
        <div class="inpu">
            <input type="text" name="wrbynm" id="wrbynm">
        </div>
@csrf
        <div class="lblhead">
            <p>Images</p>
        </div>
        <div class="inpu">
            <input type="file" name="stpcim" id="stpcim">
        </div>
        <div class="inf">
            <span >Images must be in JPG,JPEG,PNG  100kb-500kb</span>
        </div>
    </div>
    <div class="twosi">
        <div class="lblhead">
            <p>Main Story</p>
        </div>
        <div class="inpu">
            <textarea name="mnstcom" id="mnstcom" cols="30" rows="10"></textarea>
        </div>
        <div class="btsb">
            <input type="submit" value="Post" id="sb5900">
        </div>
    </div>
</div>
</form>
</div>