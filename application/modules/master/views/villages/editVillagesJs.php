<script>
// Document ready
    $(function(){
        setKecamatan();
    })
    var idKecamatan = <?php echo $kelurahan->data->district->id; ?>;

    function show_notif(tipe, message){
        if(tipe == 201 || tipe == 200){
            $("#respon_server").attr('class','alert alert-success');
        } else {
            $("#respon_server").attr('class','alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }
    
    function setKecamatan(){
        $.ajax({
            type: "GET",
            url: "/master/district/getDistrict",
            success: function (data) {
                var result  = JSON.parse(data);

                //bersihkan dropdown
                $("#kecamatan_id option").remove();
                $("#kecamatan_id").append('<option>Pilih Kecamatan</option>')

                // looping get District
                $.each(result.data.content, function (index, value){
                    
                        if(idKecamatan == result.data.content[index].id){
                            $("#kecamatan_id").append('<option value="'+result.data.content[index].id+'" selected>'+result.data.content[index].name+'</option>');
                        } else{
                            $("#kecamatan_id").append('<option value="'+result.data.content[index].id+'">'+result.data.content[index].name+'</option>');
                        }
                })
            }
        })
    }

    function edit()
    {
        var id = <?php echo $kelurahan->data->id;?>;
        var code = $("#code").val();
        var name = $("#name").val();

        var data = {
            id:id,
            code : code,
            name : name,
            district : {
                id : $("#kecamatan_id").val()
            }
        }

        var dataSend = {
            data : JSON.stringify(data)
        }

        $.ajax({
            type: "POST",
            url: "/master/villages/editVillages",
            data:dataSend,
            success: function (data) {
                var data = JSON.parse(data);
                show_notif(data.code, data.message);
            }
        })
    }
</script>