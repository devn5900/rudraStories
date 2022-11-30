
$('#sbs045').submit(function (e) {
    e.preventDefault();

    var formData = new FormData(this);
    $.ajax({
        type: 'POST',
        url: "/subscriber",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            if(data=='1'){
                $('#chksum').attr('value','Subscribe');
            }else if(data=='202'){
                
                $('#chksum').attr('value','UnSubscribe');
            }   

        },
        error: function (data) {
            alert(data);   

        }
    });
});

