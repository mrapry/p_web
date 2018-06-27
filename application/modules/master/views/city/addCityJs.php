<script>
    // Document ready
    $(function () {
        setProvinsi();
    })

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
                $("#provinsi_id").append('<option>Pilih Provinsi</option>')

                // looping get provinsi
                $.each(result.data.content, function (index, value) {
                    $("#provinsi_id").append(
                        '<option value="' + result.data.content[index].id + '">' + result.data.content[index].name + '</option>'
                    )
                })
            }
        })
    }
    $("#form-add-city").validator().on('submit', function(e) {
        if (e.isDefaultPrevented()) {
            console.log("DATA BELUM LENGKAP");
        } else {
            var code = $("#code").val();
            var name = $("#name").val();

            var data = {
                code: code,
                name: name,
                province: {
                    id: $("#provinsi_id").val()
                }
            }

            var dataSend = {
                data: JSON.stringify(data)
            }

            console.log("simpan kota: " + dataSend);

            $.ajax({
                type: "POST",
                url: "/master/city/saveCity",
                dataType: "json",
                data: dataSend,
                success: function (data) {
                    show_notif(data.code, data.message);
                    if(data.code==200, data.code==201);{
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
    //         code: code,
    //         name: name,
    //         province: {
    //             id: $("#provinsi_id").val()
    //         }
    //     }
    //
    //     var dataSend = {
    //         data: JSON.stringify(data)
    //     }
    //
    //     console.log("simpan kota: " + dataSend);
    //
    //     $.ajax({
    //         type: "POST",
    //         url: "/master/city/saveCity",
    //         dataType: "json",
    //         data: dataSend,
    //         success: function (data) {
    //             show_notif(200, data.message);
    //             $("#code").val("");
    //             $("#name").val("");
    //         }
    //     })
    // }
</script>