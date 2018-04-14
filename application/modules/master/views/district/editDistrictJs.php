<script>
    // Document ready
    $(function () {
        setKota();
        $('#kota_id').attr("readonly", true);
    })

    var kotaId = <?php echo $district->data->city->id; ?>;

    function show_notif(tipe, message) {
        if (tipe == 201 || tipe == 200) {
            $("#respon_server").attr('class', 'alert alert-success');
        } else {
            $("#respon_server").attr('class', 'alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }

    function setKota() {
        $.ajax({
            type: "GET",
            url: "/master/city/getCity",
            success: function (data) {
                var result = JSON.parse(data);

                //bersihkan dropdown
                $("#kota_id option").remove();

                // looping get city
                $.each(result.data.content, function (index, value) {
                    if (kotaId === result.data.content[index].id) {
                        $("#kota_id").append(
                            '<option value="' + result.data.content[index].id + '">' + result.data.content[index].name + '</option>'
                        )
                    } else {
                        $("#kota_id").append(
                            '<option value="' + result.data.content[index].id + '">' + result.data.content[index].name + '</option>'
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

        console.log("datasend: " + dataSend);

        $.ajax({
            type: "POST",
            url: "/master/district/editDistrict",
            dataType: "json",
            data: dataSend,
            success: function (data) {
                console.log(data);
                show_notif(200, data.message);
            }
        })
    }
</script>