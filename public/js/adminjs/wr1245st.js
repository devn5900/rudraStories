
$('#da2022').click(function (e) {
    e.preventDefault();

    $.ajax({
        type: "get",
        url: "/dash",
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

        },
        error: function () {
            alert('devn');
        }
    });
}); 



$('#da2025').click(function (e) {
    e.preventDefault();

    $.ajax({
        type: "get",
        url: "/books",
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

        },
        error: function () {
            alert('devn');
        }
    });
});
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

        },
        error: function () {
            alert('devn');
        }
    });
});
$('#da2027').click(function (e) {
    e.preventDefault();

    $.ajax({
        type: "get",
        url: "/msg",
       
        success: function (response) {  
            // alert(response);
            $('#ch10ngcon').empty();
            $('#ch10ngcon').append(response);

        },
        error: function () {
            alert('devn');
        }
    });
});

$('#da2028').click(function (e) {
    e.preventDefault();

    $.ajax({
        type: "get",
        url: "/cmntget",
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

        },
        error: function () {
            alert('devn');
        }
    });
});


    $('#da2030').click(function (e) {
    e.preventDefault();

    $.ajax({
        type: "get",
        url: "/thgt",
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

            $('#hlpfr253').submit(function (e) {
                e.preventDefault();
                if($('#n12001').val().length==0){
                    $('#n12001').css('border','2px solid red');
                }
                else{
                    
                    $('#n12001').css('border-color','#1d3557');
                    $('#s55214').prop('disabled',true);
                    $('#s55214').val('Posting...');
                    $('#s55214').css('background-color','#8F9AA5');
                    const formData=new FormData(this);
                    $.ajax({
                        type: "post",
                        url: "/thgt",
                        data: formData,
                         cache: false,
                        contentType: false,
                        processData: false,
                        success: function (response) {  
                            if(response){
                                $('#s55214').prop('disabled',false);
                                $('#s55214').val('POST');
                                $('#s55214').css('background-color','#1d3557');
                                $('#erm').text('Posted Successfully !');
                                setTimeout(() => {
                                $('#erm').text(' ');
                                    
                                }, 2000);
                            }
                            
                
                        },
                        error: function () {
                            alert('devn');
                        }
                    });
                }
                
            })
        },
        error: function () {
            alert('devn');
        }
    });
}); 







