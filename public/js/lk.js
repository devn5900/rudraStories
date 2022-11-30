$('#lk4511d').submit(function (e) { 
    e.preventDefault();
        $.ajax({
           type:'POST',
           url:'/like',
           data:$('#lk4511d').serialize(),
           success:function(data) {
              $('#likeount').html(data);
              $('#bt45lk').attr('disabled','true');
              $('#likesy').css('color','#0988a8');
           },
           error:function (response) {
                alert('Somthing went Wrong');
                }
        });
       
    });
    $('#lk451d').submit(function (e) { 
        e.preventDefault();
            $.ajax({
               type:'POST',
               url:'/likes',
               data:$('#lk451d').serialize(),
               success:function(data) {
                // alert('sucess');

                  $('#likeount').html(data);
                  $('#bt45lk').attr('disabled','true');
              $('#likesy').css('color','#0988a8');

               },
               error:function (response) {
                    alert('Somthing went Wrong');
                    }
            });
    });