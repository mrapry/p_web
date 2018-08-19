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

    function edit() {
        var id = <?php echo $province->data->id;?>;
        var code = $("#code").val();
        var name = $("#name").val();

        var data = {
            id:id,
            code : code,
            name : name
        }

        var dataSend = {
            data : JSON.stringify(data)
        }

        console.log(dataSend);
        $.ajax({
            type: "POST",
            url: "<?PHP echo base_url()?>area/province/editProvince",
            data:dataSend,
            success: function (data) {
                var data = JSON.parse(data);
                show_notif(data.code, data.message);
            }
        })
    }
</script>