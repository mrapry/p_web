<script>
    // Document ready
    $(function(){
        setProvince()
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
    function setProvince()
    {
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>area/province/getData",
            success: function (data) {
                var result  = JSON.parse(data);

                //bersihkan dropdown
                $("#province_id option").remove();
                $("#province_id").append('<option value="">Pilih Provinsi</option>')

                // looping get city
                $.each(result.data.content, function (index, value){
                    $("#province_id").append(
                        '<option value="'+result.data.content[index].id+'">'+result.data.content[index].name+'</option>'
                    )
                })
            }
        })
    }

    $( "#province_id" ).change(function() {
        var provinceId = $("#province_id").val();
        if (provinceId != ""){
            $("#kecamatan_id option").remove();
            setKota(provinceId);
        } else {
            $("#kota_id option").remove();
            $("#kecamatan_id option").remove();
        }
    });

    function setKota(id)
    {
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>area/city/getCityByProvinceId/"+id,
            success: function (data) {
                console.log(data)
                var result  = JSON.parse(data);

                //bersihkan dropdown
                $("#kota_id option").remove();
                $("#kota_id").append('<option value="">Pilih Kab / Kota</option>')

                // looping get city
                $.each(result.data, function (index, value){
                    $("#kota_id").append(
                        '<option value="'+result.data[index].id+'">'+result.data[index].name+'</option>'
                    )
                })
            }
        })
    }

    $( "#kota_id" ).change(function() {
        var cityId = $("#kota_id").val();
        if (cityId != ""){
            setKecamatan(cityId);
        } else {
            $("#kecamatan_id option").remove();
        }
    });
    
    function setKecamatan(id){
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>area/district/getDistrictByCityId/"+id,
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

            if (kecamatan_id == ""){
                show_notif(400, "belum dipilih")
            } else {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url()?>area/subdistrict/saveSubdistrict",
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
</script>