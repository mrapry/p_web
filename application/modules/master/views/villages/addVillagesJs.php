<script>
    // Document ready
    $(function () {
        setKecamatan();
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
    
    function setKecamatan() {
        $.ajax({
            type: "GET",
            url: "/master/district/getDistrict",
            success: function (data) {
                var result  = JSON.parse(data);

                console.log(result);

                //bersihkan dropdown
                $("#kecamatan_id option").remove();
                $("#kecamatan_id").append('<option>Pilih Kecamatan</option>')

                // looping get District
                $.each(result.content, function (index, value) {
                    // console.log(result.content[index].name);
                    $("#kecamatan_id").append(
                        '<option value="'+result.content[index].id+'">'+result.content[index].name+'</option>'
                    )
                })
            }
        })
    }
    
    function save() {
        var code = $("#code").val();
        var name = $("#name").val();

        var data = {
            code : code,
            name : name,
            district : {
                id : $("#kecamatan_id").val()
            }
        }

        var dataSend = {
            data : JSON.stringify(data)
        }

        console.log(dataSend);

        $.ajax({
            type: "POST",
            url: "/master/villages/saveVillages",
            dataType: "json",
            data:dataSend,
            success: function (data) {
                console.log(data);
                show_notif(200, data.message);
                $("#code").val("");
                $("#name").val("");
            }
        })
    }
</script>