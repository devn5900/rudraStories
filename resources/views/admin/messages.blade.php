<div class="ulstlnnm">

 
    <table>
        <thead>
            <tr>
                <th>S. No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
       
            
        @foreach ($data as $item)
        <tr>
                
            <td>{{$item->S_no}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->msg}}</td>
            
        </tr>
        @endforeach
        
       

    </table>
<div class="pagin">pagi</div>
<div class="pagin">{{$item->links("pagination::bootstrap-4")}}</div>
    
</div>
</div>