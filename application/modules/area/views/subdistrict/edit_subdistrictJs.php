<script>
    // Document ready
    $(function () {
        setKecamatan();
    })
    var idKecamatan = <?php echo $kelurahan->data->district->id; ?>;
    var kotaId = <?php echo $kelurahan->data->district->city->id; ?>;
    var provinceId= <?php echo $kelurahan->data->district->city->province->id; ?>;
    setProvince(provinceId);
    setKota(kotaId);

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
                $("#kota_id").append('<option value="">Pilih Kab / Kota</option>')

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

    $("#province_id").change(function () {
        var provinceId = $("#province_id").val();
        if (provinceId != "") {
            $("#kota_id option").remove();
            $("#kecamatan_id option").remove();
            setKota(provinceId);
        } else {
            $("#kota_id option").remove();
            $("#kecamatan_id option").remove();
        }
    });

    function setKota(id) {
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>area/city/getCityByProvinceId/" + id,
            success: function (data) {
                var result = JSON.parse(data);

                //bersihkan dropdown
                $("#kota_id option").remove();
                $("#kota_id").append('<option value="">Pilih Kab / Kota</option>')

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

    $("#kota_id").change(function () {
        var cityId = $("#kota_id").val();
        if (cityId != "") {
            setKecamatan(provinceId);
        } else {
            $("#kecamatan_id option").remove();
        }
    });

    function setKecamatan(id) {
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>area/district/getDistrictByCityId/"+id,
            success: function (data) {
                var result = JSON.parse(data);

                //bersihkan dropdown
                $("#kecamatan_id option").remove();
                $("#kecamatan_id").append('<option>Pilih Kecamatan</option>')

                // looping get District
                $.each(result.data.content, function (index, value) {

                    if (idKecamatan == result.data.content[index].id) {
                        $("#kecamatan_id").append('<option value="' + result.data.content[index].id + '" selected>' + result.data.content[index].name + '</option>');
                    } else {
                        $("#kecamatan_id").append('<option value="' + result.data.content[index].id + '">' + result.data.content[index].name + '</option>');
                    }
                })
            }
        })
    }

    function edit() {
        var id = <?php echo $kelurahan->data->id;?>;
        var code = $("#code").val();
        var name = $("#name").val();

        var data = {
            id: id,
            code: code,
            name: name,
            district: {
                id: $("#kecamatan_id").val()
            }
        }

        var dataSend = {
            data: JSON.stringify(data)
        }

        $.ajax({
            type: "POST",
            url: "<?php echo base_url()?>area/subdistrict/editSubdistrict",
            data: dataSend,
            success: function (data) {
                var data = JSON.parse(data);
                show_notif(data.code, data.message);
            }
        })
    }
</script>