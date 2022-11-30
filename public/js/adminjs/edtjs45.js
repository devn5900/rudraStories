$(document).ready(function () {

    

    function dlt(id){
        
       
            alert(id); 
            if(confirm('Are you sure to delete this Story ?')){
                alert(id);
                $.ajax({
                    type: "post",
                    url: "/delistlo",
                    data: {'id':id,
                    '_token': $('input[name=_token]').val()
                           },
                    success: function (response) {
                        alert(response);
                      
                            
                        }
                });
            }
      

        
    }

    function dit(data){
        $('.edt').click(function (e) {
            e.preventDefault();
            alert('i m dit'+$(data).attr("data-identy"));
            $.ajax({
                type: "get",
                url: "/modist/" + $(this).attr("data-identy"),
                async: true,
                cache:false,
                 beforeSend: function(){
            $('#ch10ngcon').append("<div class='loader'></div>");
        },
        complete: function(){
            $('#ch10ngcon').remove("<div class='loader'></div>");
        },
                success: function (response) {
                    $('#clsedtk').hide();
                    console.log(response);
                    $('#ch10ngcon').append(response);
                    $('.pagin').hide();
    
                    $('#wr008915').submit(function (e) {
                        e.preventDefault();
                        if ($('#sthd4500').val().length == 0) {
                            er();
                            $('#sthd4500').css('border-color', 'red');
    
                        }
    
                        else if ($('#stty4500').val().length == 0 || $('#stty4500').val() == 0) {
                            er();
    
                            $('#stty4500').css('border-color', 'red');
                        }
                        else if ($('#stdesc4500').val().length == 0) {
                            er();
                            $('#stdesc4500').css('border-color', 'red');
    
                        }
                        else if ($('#stwr4500').val().length == 0) {
                            er();
    
                            $('#stwr4500').css('border-color', 'red');
                        }
                        // else if ($('#stfl4500').val().length == 0) {
                        //     er();
                        //     $('#stfl4500').css('border-color', 'red');
                        // }
                        else if ($('#stmn4500').val().length == 0) {
                            er();
                            $('#stmn4500').css('border-color', 'red');
                        }
                        else {
                            var formData = new FormData(this);
                            $.ajax({
                                type: 'POST',
                                url: "/updsted",
                                data: formData,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function (data) {
    
    
                                    alert(data);
                                    location.reload();
                                },
                                error: function (data) {
                                    alert("SOmething went Wrong ! Please Contact to your Developer");
                                }
                            });
                        }
                    });
    
    
                    $('#cls000').click(function (e) {
                        e.preventDefault();
                        $('#edtstrp').remove();
                        $('#clsedtk').show();
                    $('.pagin').show();

    
    
                    });
                },
                error: function () {
                    alert('devn');
                }
            });
        });
    }

    
    $('#da2024').on('click',function (e) {
        e.preventDefault();
        e.stopPropagation();
                    e.stopImmediatePropagation();
        $.ajax({
            type: "get",
            url: "/edst",
            beforeSend: function(){
                $('#ch10ngcon').append("<div class='loader'></div>");
            },
            complete: function(){
                $('#ch10ngcon').remove("<div class='loader'></div>");
            },
            success: function (response) {
                $('#ch10ngcon').empty();
                $('#ch10ngcon').append(response);
                $('.dltd').on('click',function (e) {
                    e.preventDefault();
                    alert($(this).attr("data-identy"));
                    dlt($(this).attr("data-identy"));
                });
                $('.edt').click(function (e) {
                    e.preventDefault();
                    alert('through edst');
                   //

                    alert('i m dit'+$(this).attr("data-identy"));
                    $.ajax({
                        type: "get",
                        url: "/modist/" + $(this).attr("data-identy"),
                        async: true,
                        cache:false,
                        success: function (response) {
                            $('#clsedtk').hide();
                            console.log(response);
                            $('#ch10ngcon').append(response);
                            $('.pagin').hide();
            
                            $('#wr008915').submit(function (e) {
                                e.preventDefault();
                                if ($('#sthd4500').val().length == 0) {
                                    er();
                                    $('#sthd4500').css('border-color', 'red');
            
                                }
            
                                else if ($('#stty4500').val().length == 0 || $('#stty4500').val() == 0) {
                                    er();
            
                                    $('#stty4500').css('border-color', 'red');
                                }
                                else if ($('#stdesc4500').val().length == 0) {
                                    er();
                                    $('#stdesc4500').css('border-color', 'red');
            
                                }
                                else if ($('#stwr4500').val().length == 0) {
                                    er();
            
                                    $('#stwr4500').css('border-color', 'red');
                                }
                                // else if ($('#stfl4500').val().length == 0) {
                                //     er();
                                //     $('#stfl4500').css('border-color', 'red');
                                // }
                                else if ($('#stmn4500').val().length == 0) {
                                    er();
                                    $('#stmn4500').css('border-color', 'red');
                                }
                                else {
                                    var formData = new FormData(this);
                                    $.ajax({
                                        type: 'POST',
                                        url: "/updsted",
                                        data: formData,
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        success: function (data) {
            
            
                                            alert(data);
                                            location.reload();
                                        },
                                        error: function (data) {
                                            alert("SOmething went Wrong ! Please Contact to your Developer");
                                        }
                                    });
                                }
                            });
            
            
                            $('#cls000').click(function (e) {
                                e.preventDefault();
                                $('#edtstrp').remove();
                                $('#clsedtk').show();
                            $('.pagin').show();
        
            
            
                            });
                        },
                        error: function () {
                            alert('devn');
                        }
                    });
            

                   //

                });
                
                //
                $(document).on('click', '.pagination a', function(event){
                    event.preventDefault(); 
                    var page = $(this).attr('href').split('page=')[1];
                    fetch_data(page);
                    // alert('click');
                });
                function fetch_data(page)
                {
                 $.ajax({
                  url:"/edst?page="+page,
                  success:function(data)
                  {
                    $('#clsedtk').empty();
                    $('.pagin').remove();
                   $('#ch10ngcon').html(data);
            
                   $('.dltd').click(function (e) {
                    e.preventDefault();
                    // alert('call dlt');
                    alert($(this).attr("data-identy"));
                    dlt($(this).attr("data-identy"));
                });
                $('.edt').unbind('click').click(function (e) {
                    e.preventDefault();
                    // alert('call dit');
                    alert('through edst with page');
                    //

   
                    alert('i m dit'+$(this).attr("data-identy"));
                    $.ajax({
                        type: "get",
                        url: "/modist/" + $(this).attr("data-identy"),
                        async: true,
                        cache:false,
                        success: function (response) {
                            $('#clsedtk').hide();
                            console.log(response);
                            $('#ch10ngcon').append(response);
                            $('.pagin').hide();
            
                            $('#wr008915').submit(function (e) {
                                e.preventDefault();
                                if ($('#sthd4500').val().length == 0) {
                                    er();
                                    $('#sthd4500').css('border-color', 'red');
            
                                }
            
                                else if ($('#stty4500').val().length == 0 || $('#stty4500').val() == 0) {
                                    er();
            
                                    $('#stty4500').css('border-color', 'red');
                                }
                                else if ($('#stdesc4500').val().length == 0) {
                                    er();
                                    $('#stdesc4500').css('border-color', 'red');
            
                                }
                                else if ($('#stwr4500').val().length == 0) {
                                    er();
            
                                    $('#stwr4500').css('border-color', 'red');
                                }
                                // else if ($('#stfl4500').val().length == 0) {
                                //     er();
                                //     $('#stfl4500').css('border-color', 'red');
                                // }
                                else if ($('#stmn4500').val().length == 0) {
                                    er();
                                    $('#stmn4500').css('border-color', 'red');
                                }
                                else {
                                    var formData = new FormData(this);
                                    $.ajax({
                                        type: 'POST',
                                        url: "/updsted",
                                        data: formData,
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        success: function (data) {
            
            
                                            alert(data);
                                            location.reload();
                                        },
                                        error: function (data) {
                                            alert("SOmething went Wrong ! Please Contact to your Developer");
                                        }
                                    });
                                }
                            });
            
            
                            $('#cls000').click(function (e) {
                                e.preventDefault();
                                $('#edtstrp').remove();
                                $('#clsedtk').show();
                            $('.pagin').show();
        
            
            
                            });
                        },
                        error: function () {
                            alert('devn');
                        }
                    });
            
                     

                    //
                });
                  }
                 });
                }
                // 
        
            },
            error: function () {
                alert('devn');
            }
        });
    });


    
});