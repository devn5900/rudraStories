$('#da2026').click(function (e) {
    e.preventDefault();

    $.ajax({
        type: "get",
        url: "/ussr",
        beforeSend: function(){
            $('#ch10ngcon').append("<div class='loader'></div>");
        },
        complete: function(){
            $('#ch10ngcon').remove("<div class='loader'></div>");
        },
        success: function (response) {  
            // alert(response);
            $('#ch10ngcon').empty();
            $('#ch10ngcon').append(response);
            $(document).on('click', '.pagination a', function(event){
                event.preventDefault(); 
                var user = $(this).attr('href').split('page=')[1];
                fetch_data(user);
                // alert('click');
            });
            function fetch_data(page){
                $.ajax({
                    url:"/ussr?page="+page,
                    success:function(data)
                    {
                      $('#clsedtk').empty();
                      $('.pagin').remove();
                     $('#ch10ngcon').html(data);
              
                }
            });
            }
        },
        error: function () {
            alert('devn');
        }
    });
});