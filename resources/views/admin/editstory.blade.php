<div class="edisty" id="clsedtk">

    @csrf
    @foreach ($edstr as $item)
        
    <div class="stry1">
        <div class="stryno1">
            <h5>{{$item->story_heading}}</h5>        
            <div class="stinf">
                <button class="edt" data-identy="{{$item->story_identy}}">EDIT</button>
                <button class="dltd" data-identy="{{$item->story_identy}}">DELETE</button>
            </div>
        </div>
    </div>
    
    @endforeach 
</div>
<div class="pagin">{{$edstr->links("pagination::bootstrap-4")}}</div>