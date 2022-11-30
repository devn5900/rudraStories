// $(document).ready(function () {
    
    $('#da2023').click(function (e) {
        e.preventDefault();

    $.ajax({
        type: "get",
        url: "/wrst",
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

            $('#wr008914').submit(function (e) {
                e.preventDefault();
                // alert('sub');
                if ($('#stehad').val().length == 0) {
                    er();
                    $('#stehad').css('border-color', 'red');
                    
                }

                else if ($('#stypm').val().length == 0 || $('#stypm').val() == 0) {
                    er();

                    $('#stypm').css('border-color', 'red');
                }
                else if ($('#stdesck').val().length == 0) {
                    er();
                    $('#stdesck').css('border-color', 'red');
                    
                }
                else if ($('#mnstcom').val().length == 0) {
                    er();

                    $('#mnstcom').css('border-color', 'red');
                }
                else if ($('#wrbynm').val().length == 0) {
                    er();
                    $('#wrbynm').css('border-color', 'red');
                }
                else if ($('#stpcim').val().length == 0) {
                    er();
                    $('#stpcim').css('border-color', 'red');
                }
                else {
                    var formData = new FormData(this);
                    $.ajax({
                        type: 'POST',
                        url: "/strupnw",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data) {

                            if (data == true) {
                                $('#erhead').append(" <h2 id='erp12'></h2>"); 
                                $('#erhead h2').css('color', '#49C144');
                                $('#erhead h2').css('display', 'block');
                                $('#erp12').html('Posted Successfully');
                                $('.frmst input').css('border-color','#8F9AA5');
                                $('#wr008914')[0].reset();
                                var tp=setTimeout(() => {
                                    $('#erhead').css('transition', 'all 0.5s ease-in');
                                    $('#erhead h2').remove();
                                }, 4000);
                            } else {
                                er();
                            }
                            // location.reload();
                        },
                        error: function (data) {
                            alert("SOmething went Wrong ! Please Contact to your Developer");
                        }
                    });
                }
            });

        },
        error: function () {
            alert('devn');
        }
    });
});

function er(){
    
    $('#erhead h2').css('color', '#E3383F');
    $('#erhead h2').css('display', 'block');
    $('#erp12').html('All Fields are Required');
}
var ti=setTimeout(() => {
    $('#erhead').hide();
}, 5000);
clearTimeout(ti);
clearTimeout(tp);
// });