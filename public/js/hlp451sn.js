$('#ophl22').click(function (e) {
    e.preventDefault();
    // alert('devn');
    $('.helpque').toggleClass('blkinv');
});

$('#hlpfr252').submit(function (e) {
    e.preventDefault();
    if ($.trim($("#n12001").val()) === "" || $.trim($("#n12001").val()) === "") {
        $('body').append(
            $('<div>').prop({
                id: 'innerdiv',
                innerHTML: 'All Fields are Required ',
                className: 'msger'
            })
        );
        $('.msger').css({
            'display': 'block',
            'transition': 'all 1s ease-in-out',
            'top': '100px',
            'right': '100px',
            'box-shadow': '0px 4px 15px 5px #EA665C',
            'background': '#EA665C'
        });
        setTimeout(function () {
            $('.msger').css({
                'display': 'block',
                'right': '-200px',
                'transition': 'all 1s ease-in-out',
                'opacity': '0'
            });
        }, 2500);
        setTimeout(function () {

            $('.msger').remove();
        }, 3000);
    }
    var formData = new FormData(this);
    $.ajax({
        type: 'POST',
        url: "/help",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            alert(data);
            if (data) {
                $('body').append(
                    $('<div>').prop({
                        id: 'innerdiv',
                        innerHTML: data,
                        className: 'msger'
                    })
                );


                $('.helpque').toggleClass('blkinv');
                $('.msger').css({
                    'display': 'block',
                    'transition': 'all 1s ease-in-out',
                    'top': '100px',
                    'right': '100px',
                    'box-shadow': '0px 4px 15px 5px #49C144',
                    'background': '#49C144'
                });
                setTimeout(function () {
                    $('.msger').css({
                        'display': 'block',
                        'right': '-200px',
                        'transition': 'all 1s ease-in-out',
                        'opacity': '0'
                    });
                }, 2000);
                $('#hlpfr252')[0].reset();
                setTimeout(function () {

                    $('.msger').remove();
                }, 2500);
            }

        },
        error: function (data) {


            // $('input[type=text]').
            var errors = data.responseJSON;
            $.each(errors.errors, function (key, value) {
                $('body').append(
                    $('<div>').prop({
                        id: 'innerdiv',
                        innerHTML: 'All Fields are Required ',
                        className: 'msger'
                    })
                );
            });

            $('#erpsc').html('error');
            $('.msger').css({
                'display': 'block',
                'transition': 'all 1s ease-in-out',
                'top': '100px',
                'right': '100px',
                'box-shadow': '0px 4px 15px 5px #EA665C',
                'background': '#EA665C'
            });
            setTimeout(function () {
                $('.msger').css({
                    'display': 'block',
                    'right': '-200px',
                    'transition': 'all 1s ease-in-out',
                    'opacity': '0'
                });
            }, 2500);
            setTimeout(function () {

                $('.msger').remove();
            }, 3000);


        }
    });
});
