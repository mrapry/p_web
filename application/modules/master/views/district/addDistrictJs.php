<script>
    // Document ready
    $(function(){
        setKota();
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
    
    function setKota()
    {
        $.ajax({
            type: "GET",
            url: "/master/city/getCity",
            success: function (data) {
                var result  = JSON.parse(data);

                //bersihkan dropdown
                $("#kota_id option").remove();
                $("#kota_id").append('<option>Pilih Kab / Kota</option>')

                // looping get city
                $.each(result.data.content, function (index, value){
                    $("#kota_id").append(
                        '<option value="'+result.data.content[index].id+'">'+result.data.content[index].name+'</option>'
                    )
                })
            }
        })
    }

    $("#form-add-district").validator().on('submit', function (e) {
        if (e.isDefaultPrevented()){
            console.log("DATA BELUM LENGKAP")
        }else {
            var code = $("#code").val();
            var name = $("#name").val();

            var data = {
                code : code,
                name : name,
                city : {
                    id : $("#kota_id").val()
                }
            }

            var dataSend = {
                data : JSON.stringify(data)
            }

            console.log("simpan kecamatan:" +dataSend);

            $.ajax({
                type: "POST",
                url: "/master/district/saveDistrict",
                dataType: "json",
                data:dataSend,
                success: function (data) {
                    show_notif(data.code, data.message);
                    if (data.code==200 || data.code==201){
                        $("#code").val("");
                        $("#name").val("");
                    }
                }
            });
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
    //         city : {
    //             id : $("#kota_id").val()
    //         }
    //     }
    //
    //     var dataSend = {
    //         data : JSON.stringify(data)
    //     }
    //
    //     $.ajax({
    //         type: "POST",
    //         url: "/master/district/saveDistrict",
    //         dataType: "json",
    //         data:dataSend,
    //         success: function (data) {
    //             console.log(data);
    //             show_notif(200, data.message);
    //             $("#code").val("");
    //             $("#name").val("");
    //         }
    //     })
    // }
</script>