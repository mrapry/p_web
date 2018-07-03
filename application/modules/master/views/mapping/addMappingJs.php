<script>
    $(function () {
        $.ajax({
            type: "GET",
            url: "/master/unitWorking/getByTypeUnitId/1",
            success: function (data) {
                var result = JSON.parse(data);
                $("#parrentOption option").remove();
                $.each(result.data.content, function (index, value) {
                    $("#parrentOption").append("<option value='" + result.data.content[index].id + "'>" + result.data.content[index].name + "</option>")
                })

            }
        });

        $.ajax({
            type: "GET",
            url: "/master/unitWorking/getByTypeUnitId/2",
            success: function (data) {
                var result = JSON.parse(data);
                $("#childOption option").remove();
                $.each(result.data.content, function (index, value) {
                    $("#childOption").append("<option value='" + result.data.content[index].id + "'>" + result.data.content[index].name + "</option>")
                })

            }
        });
    });


    function getTipe() {
        var tipe = $("#tipe").val();
        var child = (parseInt(tipe) + 1);
        console.log(child);
        if (tipe == 1) {
            $("#parrent").html("Data UPT");
            $("#child").html("Data SATWAS");
        } else {
            $("#parrent").html("Data SATWAS");
            $("#child").html("Dats WILKER");
        }
        $.ajax({
            type: "GET",
            url: "/master/unitWorking/getByTypeUnitId/" + tipe,
            success: function (data) {
                var result = JSON.parse(data);
                $("#parrentOption option").remove();
                $.each(result.data.content, function (index, value) {
                    $("#parrentOption").append("<option value='" + result.data.content[index].id + "'>" + result.data.content[index].name + "</option>")
                })

            }
        });

        $.ajax({
            type: "GET",
            url: "/master/unitWorking/getByTypeUnitId/" + child,
            success: function (data) {
                var result = JSON.parse(data);
                $("#childOption option").remove();
                $.each(result.data.content, function (index, value) {
                    $("#childOption").append("<option value='" + result.data.content[index].id + "'>" + result.data.content[index].name + "</option>")
                })

            }
        });
    }

    $("#form-add-mapping").validator().on('submit',function(e) {
        if (e.isDefaultPrevented()) {
            console.log("DATA BELUM LENGKAP");
        } else {
            var parrent = $("#parrentOption option:selected").val();
            var child = $("#childOption option:selected").val();
            var upt = $('#parrentOption option:selected').val();
            var data = {
                upt: {
                    id: upt
                },
                parrent: {
                    id: parrent
                },
                child: {
                    id: child
                }
            }

            var dataSend = {
                data: JSON.stringify(data)
            }

            $.ajax({
                type: "POST",
                url: "/master/mapping/saveMapping",
                dataType: "json",
                data: dataSend,
                success: function (data) {
                    show_notif(data.code, data.message);
                    if (data.code == 200 || data.code == 201) {
                        $("#upt").val("");
                        $("#parrent").val("");
                        $("#child").val();
                    }
                }
            })
            return false;
        }
    })

    // function save() {
    //     var parrent = $("#parrentOption option:selected").val();
    //     var child = $("#childOption option:selected").val();
    //     var upt = $('#parrentOption option:selected').val();
    //
    //     var data = {
    //         upt: {
    //             id: upt
    //         },
    //         parrent: {
    //             id: parrent
    //         }, child: {
    //             id: child
    //         }
    //     }
    //
    //     var dataSend = {
    //         data: JSON.stringify(data)
    //     }
    //
    //     console.log(data);
    //     $.ajax({
    //         type: "POST",
    //         url: "/master/mapping/saveMappingUnit",
    //         dataType: "json",
    //         data: dataSend,
    //         success: function (data) {
    //             show_notif(data.code, data.message);
    //             if (data.code == 200 || data.code == 201) {
    //                 $("#code").val("");
    //                 $("#name").val("");
    //             }
    //         }
    //     })
    // }

    function show_notif(tipe, message){
        if(tipe == 201 || tipe == 200){
            $("#respon_server").attr('class','alert alert-success');
        } else {
            $("#respon_server").attr('class','alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }
</script>