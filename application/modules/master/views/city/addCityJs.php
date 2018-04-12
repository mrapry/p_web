<script>
    // Document ready
    $(function(){
        setProvinsi();
    })

    function show_notif(tipe, message)
    {
        if(tipe == 201 || tipe == 200){
            $("#respon_server").attr('class','alert alert-success');
        } else {
            $("#respon_server").attr('class','alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }
    
    function setProvinsi()
    {
        $.ajax({
            type: "GET",
            url: "/master/province/getProvince",
            success: function (data){
                var result  = JSON.parse(data);

                //bersihkan dropdown
                $("#provinsi_id option").remove();
                $("#provinsi_id").append('<option>Pilih Provinsi</option>')

                // looping get provinsi
                $.each(result.content, function (index, value){
                    $("#provinsi_id").append(
                        '<option value="'+result.content[index].id+'">'+result.content[index].name+'</option>'
                    )
                })
            }
        })
    }
    
    function save()
    {
        var code = $("#code").val();
        var name = $("#name").val();

        var data = {
            code : code,
            name : name,
            province : {
                id : $("#provinsi_id").val()
            }
        }

        var dataSend = {
            data : JSON.stringify(data)
        }

        $.ajax({
            type: "POST",
            url: "/master/city/saveCity",
            dataType: "json",
            data:dataSend,
            success: function (data){
                show_notif(200, data.message);
                $("#code").val("");
                $("#name").val("");
            }
        })
    }
</script>