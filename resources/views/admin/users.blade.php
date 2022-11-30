<div class="us10pr">
    <div class="cstpn">
            <div class="csnm">
                <h2>Users</h2>
            </div>

        </div>
        <div class="ulstlnnm">

 
            <table>
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Status</th>
                    </tr>
                </thead>
                @foreach ($usrd as $item)
                    
                <tr>
                    <td>{{$item->S_No}}</td>
                    <td>{{$item->UserName}}</td>
                    <td>{{$item->Email}}</td>
                    <td>{{$item->UserMobile}}</td>
                    <td>{{$item->status}}</td>
                </tr>
                
                @endforeach

            </table>
        <div class="pagin">{{$usrd->links("pagination::bootstrap-4")}}</div>
            
        </div>
    </div>

</div>