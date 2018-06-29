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

    $("#form-add-typeUnit").validator().on('submit', function(e){
        if (e.isDefaultPrevented()) {
            console.log("DATA BELUM LENGKAP")
        }else {
            var type = $("#type").val();

            var data = {
                type : type,
            }

            var dataSend = {
                data : JSON.stringify(data)
            }

            $.ajax({
                type: "POST",
                url: "/master/typeUnit/saveType",
                dataType: "json",
                data:dataSend,
                success: function (data) {
                    show_notif(data.code, data.message);
                    if (data.code==200 || data.code==201) {
                        $("#type").val("");
                    }
                }
            });
            return false;
        }
    })

    // function save()
    // {
    //     var type = $("#type").val();
    //
    //     var data = {
    //         type : type,
    //     }
    //
    //     var dataSend = {
    //         data : JSON.stringify(data)
    //     }
    //
    //     $.ajax({
    //         type: "POST",
    //         url: "/master/typeUnit/saveType",
    //         dataType: "json",
    //         data:dataSend,
    //         success: function (data) {
    //             show_notif(data.code, data.message);
    //             if (data.code==200 || data.code==201) {
    //                 $("#type").val("");
    //             }
    //         }
    //     })
    // }
</script>