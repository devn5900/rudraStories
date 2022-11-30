
$('.clos').click(function (e) {
    e.preventDefault();
    $(".content").toggle();

});

$('#frmim00').submit(function (e) {
    e.preventDefault();

    var formData = new FormData(this);
    $.ajax({
        type: 'POST',
        url: "/uploadusrpic",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $('#cerr').html(data);
            location.reload();
        },
        error: function (data) {
            var errors = data.responseJSON;
            $.each(errors.errors, function (key, value) {
                $('#cerr').html(value);
            });
        }
    }); 
});
