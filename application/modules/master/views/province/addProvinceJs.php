<script>
    function show_notif(tipe, message){
        if(tipe == 201 || tipe == 200){
            $("#respon_server").attr('class','alert alert-success');
        } else {
            $("#respon_server").attr('class','alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }

    function save() 
    {
        var code = $("#code").val();
        var name = $("#name").val();

        var data = {
            code : code,
            name : name
        }

        var dataSend = {
            data : JSON.stringify(data)
        }

        $.ajax({
            type: "POST",
            url: "/master/province/saveProvince",
            dataType: "json",
            data:dataSend,
            success: function (data) {
                show_notif(200, data.message);
                $("#code").val("");
                $("#name").val("");
            }
        })
    }
</script>