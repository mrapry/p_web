<script>
    function show_notif(tipe, message){
        if(tipe == 201 || tipe == 200){
            $("#respon_server").attr('class','alert alert-success');
        } else {
            $("#respon_server").attr('class','alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }

    function edit()
    {
        var id = <?php echo $unitType->data->id;?>;
        var type = $("#type").val();

        var data = {
            id : id,
            type : type
        }

        var dataSend = {
            data : JSON.stringify(data)
        }

        $.ajax({
            type: "POST",
            url: "/master/unitType/editType",
            data:dataSend,
            success: function (data) {
                var data = JSON.parse(data);
                show_notif(data.code, data.message);
            }
        })
    }
</script>