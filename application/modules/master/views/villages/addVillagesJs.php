<script>
    // Document ready
    $(function(){
        setKecamatan();
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
    
    function setKecamatan(){
        $.ajax({
            type: "GET",
            url: "/master/district/getDistrict",
            success: function (data) {
                var result  = JSON.parse(data);

                //bersihkan dropdown
                $("#kecamatan_id option").remove();
                $("#kecamatan_id").append('<option value="">Pilih Kecamatan</option>')

                // looping get District
                $.each(result.data.content, function (index, value){
                    $("#kecamatan_id").append(
                        '<option value="'+ result.data.content[index].id+'">'+result.data.content[index].name+'</option>'
                    )
                })
            }
        })
    }


    $("#form-add-villages").validator().on('submit', function (e) {
        if (e.isDefaultPrevented()){
            console.log("DATA BELUM LENGKAP")
        } else {
            var code = $("#code").val();
            var name = $("#name").val();
            var kecamatan_id = $("#kecamatan_id").val();

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

            console.log("simpan kelurahan:" +dataSend);

            if (kecamatan_id == ""){
                show_notif(400, "belum dipilih")
            } else {
                $.ajax({
                    type: "POST",
                    url: "/master/villages/saveVillages",
                    dataType: "json",
                    data:dataSend,
                    success: function (data){
                        show_notif(data.code, data.message);
                        if(data.code==200 || data.code==201){
                            $("#code").val("");
                            $("#name").val("");
                        }
                    }
                });
            }

            return false;

        }
    });
    
    // function save() {
    //     var code = $("#code").val();
    //     var name = $("#name").val();
    //
    //     var data = {
    //         code : code,
    //         name : name,
    //         district : {
    //             id : $("#kecamatan_id").val()
    //         }
    //     }
    //
    //     var dataSend = {
    //         data : JSON.stringify(data)
    //     }
    //
    //     $.ajax({
    //         type: "POST",
    //         url: "/master/villages/saveVillages",
    //         dataType: "json",
    //         data:dataSend,
    //         success: function (data){
    //             show_notif(200, data.message);
    //             $("#code").val("");
    //             $("#name").val("");
    //         }
    //     })
    // }
</script>