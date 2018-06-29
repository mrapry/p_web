<script>
    // Document ready
    $(function () {
        setType();
        setKota();
        $('#type_id').attr("readonly", true);
    })

    var typeId = <?php echo $unitWorking->data->typeUnit->id; ?>;

    function show_notif(tipe, message) {
        if (tipe == 201 || tipe == 200) {
            $("#respon_server").attr('class', 'alert alert-success');
        } else {
            $("#respon_server").attr('class', 'alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }

    function setType() {
        $.ajax({
            type: "GET",
            url: "/master/typeUnit/getType",
            success: function (data) {
                var result = JSON.parse(data);

                //bersihkan dropdown
                $("#type_id option").remove();
                $("#tipe_id").append('<option>Pilih Tipe</option>')

                // looping get Unit Working
                $.each(result.data.content, function (index, value) {
                    if (typeId === result.data.content[index].id) {
                        $("#type_id").append(
                            '<option value="' + result.data.content[index].id + '">' + result.data.content[index].type + '</option>'
                        )
                    } else {
                        $("#type_id").append(
                            '<option value="' + result.data.content[index].id + '">' + result.data.content[index].type + '</option>'
                        )
                    }
                })
            }
        })
    }

    function setKota() {
        $.ajax({
            type: "GET",
            url: "/master/city/getCity",
            success: function (data) {
                var result = JSON.parse(data);

                //bersihkan dropdown
                $("#kota_id option").remove();
                $("#kota_id").append('<option>Pilih Kab / Kota</option>')

                // looping get city
                $.each(result.data.content, function (index, value) {
                    $("#kota_id").append(
                        '<option value="' + result.data.content[index].id + '">' + result.data.content[index].name + '</option>'
                    )
                })
            }
        })
    }

    function edit() {
        var id = <?php echo $unitWorking->data->id;?>;
        var code = $("#code").val();
        var name = $("#name").val();
        var address = $("#address").val();
        var phone = $("#phone").val();
        var faxmail = $("#faxmail").val();
        var email = $("#email").val();
        var latitude = $("#latitude").val();
        var longitude = $("#longitude").val();
        var cityId = $("#kota_id").val();


        var data = {
            id: id,
            code: code,
            name: name,
            address: address,
            phone: phone,
            faxmail: faxmail,
            email: email,
            latitude: latitude,
            longitude: longitude,
            cityId: $("#kota_id").val(),
            typeUnit: {
                id: $("#type_id").val()
            }
        }

        var dataSend = {
            data: JSON.stringify(data)
        }

        console.log(dataSend);
        $.ajax({
            type: "POST",
            url: "/master/unitWorking/editUnit",
            data: dataSend,
            success: function (data) {
                var data = JSON.parse(data);
                show_notif(data.code, data.message);
            }
        })
    }
</script>