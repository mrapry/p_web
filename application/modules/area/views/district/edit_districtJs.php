<script>
    // Document ready
    $(function () {
        setProvince()
    })

    var kotaId = <?php echo $district->data->city->id; ?>;
    var  provinceId= <?php echo $district->data->city->province->id; ?>;
    setKota(provinceId);

    function show_notif(tipe, message) {
        if (tipe == 201 || tipe == 200) {
            $("#respon_server").attr('class', 'alert alert-success');
        } else {
            $("#respon_server").attr('class', 'alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }
    
    function setProvince() {
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>area/province/getData",
            success: function (data) {
                var result = JSON.parse(data);

                //bersihkan dropdown
                $("#province_id option").remove();

                // looping get city
                $.each(result.data.content, function (index, value) {
                    if (provinceId === result.data.content[index].id) {
                        $("#province_id").append(
                            '<option value="' + result.data.content[index].id + '" selected>' + result.data.content[index].name + '</option>'
                        )
                    } else {
                        $("#province_id").append(
                            '<option value="' + result.data.content[index].id + '">' + result.data.content[index].name + '</option>'
                        )
                    }
                })
            }
        })
    }

    $( "#province_id" ).change(function() {
        var provinceId = $("#province_id").val();
        if (provinceId != ""){
            setKota(provinceId);
        } else {
            $("#kota_id option").remove();
        }
    });

    function setKota(id) {
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>area/city/getCityByProvinceId/"+id,
            success: function (data) {
                var result = JSON.parse(data);

                //bersihkan dropdown
                $("#kota_id option").remove();

                // looping get city
                $.each(result.data, function (index, value) {
                    if (kotaId === result.data[index].id) {
                        $("#kota_id").append(
                            '<option value="' + result.data[index].id + '" selected>' + result.data[index].name + '</option>'
                        )
                    } else {
                        $("#kota_id").append(
                            '<option value="' + result.data[index].id + '">' + result.data[index].name + '</option>'
                        )
                    }
                })
            }
        })
    }

    function edit() {
        var id = <?php echo $district->data->id; ?>;
        var code = $("#code").val();
        var name = $("#name").val();

        var data = {
            id: id,
            code: code,
            name: name,
            city: {
                id: $("#kota_id").val()
            }
        }

        var dataSend = {
            data: JSON.stringify(data)
        }

        console.log(dataSend);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url()?>area/district/editDistrict",
            data: dataSend,
            success: function (data) {
               var data = JSON.parse(data);
                show_notif(data.code, data.message);
            }
        })
    }
</script>