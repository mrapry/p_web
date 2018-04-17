<script>

    // Document ready
    $(function(){
        setType();
    })
    function show_notif(tipe, message){
        if(tipe == 201 || tipe == 200){
            $("#respon_server").attr('class','alert alert-success');
        } else {
            $("#respon_server").attr('class','alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }

    function setType(){
        $.ajax({
            type: "GET",
            url: "/master/typeUnit/getType",
            success: function (data) {
                var result  = JSON.parse(data);

                //bersihkan dropdown
                $("#tipe_id option").remove();
                $("#tipe_id").append('<option>Pilih Tipe</option>')

                // looping get Type Unit Kerja
                $.each(result.data.content, function (index, value){
                    $("#tipe_id").append(
                        '<option value="'+result.data.content[index].id+'">'+result.data.content[index].type+'</option>'
                    )
                })
            }
        })
    }

    function save()
    {
        var code = $("#code").val();
        var name = $("#name").val();
        var address = $("#address").val();
        var phone = $("#phone").val();
        var faxmail = $("#faxmail").val();
        var email = $("#email").val();
        var langitude = $("#langitude").val();
        var longitude = $("#longitude").val();
        var serviceLocation = $("#serviceLocation").val();

        var data = {
            code : code,
            name : name,
            address : address,
            phone : phone,
            faxmail : faxmail,
            email : email,
            langitude : langitude,
            longitude : longitude,
            serviceLocation :serviceLocation,
            typeUnit: {
                id : $("#tipe_id").val()
            }
        }

        var dataSend = {
            data : JSON.stringify(data)
        }

        $.ajax({
            type: "POST",
            url: "/master/unitWorking/saveUnit",
            dataType: "json",
            data:dataSend,
            success: function (data) {
                show_notif(data.code, data.message);
                $("#code").val("");
                $("#name").val("");
                $("#address").val("");
                $("#phone").val("");
                $("#faxmail").val("");
                $("#email").val("");
                $("#langitude").val("");
                $("#longitude").val("");
                $("#serviceLocation").val("");
                $("#tipe_id").val("");
            }
        })
    }
</script>