<script>

    $(function () {
        setProvinsi();
        $('#provinsi_id').attr("readonly", true);
    })

    var idProvinsi = <?php echo $city->data->province->id; ?>;

    function show_notif(tipe, message) {
        if (tipe == 201 || tipe == 200) {
            $("#respon_server").attr('class', 'alert alert-success');
        } else {
            $("#respon_server").attr('class', 'alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }

    function setProvinsi() {
        $.ajax({
            type: "GET",
            url: "/master/province/getProvince",
            success: function (data) {
                var result = JSON.parse(data);

                //bersihkan dropdown
                $("#provinsi_id option").remove();

                // looping get provinsi
                $.each(result.data.content, function (index, value) {
                    if (idProvinsi === result.data.content[index].id) {
                        $("#provinsi_id").append(
                            '<option value="' + result.data.content[index].id + '" selected>' + result.data.content[index].name + '</option>'
                        )
                    } else {
                        $("#provinsi_id").append(
                            '<option value="' + result.data.content[index].id + '">' + result.data.content[index].name + '</option>'
                        )
                    }

                })
            }
        })
    }

    function edit() {
        var id = <?php echo $city->data->id;?>;
        var code = $("#code").val();
        var name = $("#name").val();

        var data = {
            id: id,
            code: code,
            name: name,
            province: {
                id: $("#provinsi_id").val()
            }

        }

        var dataSend = {
            data: JSON.stringify(data)
        }

        console.log(dataSend);
        $.ajax({
            type: "POST",
            url: "/master/city/editCity",
            data: dataSend,
            success: function (data) {
                var data = JSON.parse(data);
                show_notif(data.code, data.message);
            }
        })
    }
</script>