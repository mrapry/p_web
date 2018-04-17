<script>
// Document ready
$(function () {
        setType();
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

    function edit()
    {
        var id = <?php echo $unitWorking->data->id;?>;
        var code = $("#code").val();
        var name = $("#name").val();
        var address = $("#address").val();
        var phone = $("#phone").val();
        var faxmail = $("#faxmail").val();
        var email = $("#email").val();
        var langitude = $("#langitude").val();
        var longitude = $("#longitude").val();
        var serviceLocation = $("#serviceLocation").val();
       
        var data = {
            id:id,
            code : code,
            name : name,
            address: address,
            phone : phone,
            faxmail : faxmail,
            email : email,
            langitude : langitude,
            longitude : longitude,
            serviceLocation : serviceLocation,
            typeUnit : {
                id : $("#type_id").val()
            }
        }

        var dataSend = {
            data : JSON.stringify(data)
        }

        console.log("datasend: " + dataSend);

        $.ajax({
            type: "POST",
            url: "/master/unitWorking/editUnit",
            data:dataSend,
            success: function (data) {
                var data = JSON.parse(data);
                show_notif(data.code, data.message);
            }
        })
    }
</script>