<script>
    $(function () {
        $.ajax({
            type: "GET",
            url: "/master/mapping/getUnitWorkingById/1",
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
            url: "/master/mapping/getUnitWorkingById/2",
            success: function (data) {
                var result = JSON.parse(data);
                $("#childOption option").remove();
                $.each(result.data.content, function (index, value) {
                    $("#childOption").append("<option value='" + result.data.content[index].id + "'>" + result.data.content[index].name + "</option>")
                })

            }
        });
    })


    function getTipe() {
        var tipe = $("#tipe").val();
        var child = (parseInt(tipe) + 1);
        console.log(child);
        if (tipe == 1) {
            $("#parrent").html("Data UPT");
            $("#child").html("Data SATWAS");
        } else {
            $("#parrent").html("Data SATWAS");
            $("#child").html("WILKER");
        }
        $.ajax({
            type: "GET",
            url: "/master/mapping/getUnitWorkingById/" + tipe,
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
            url: "/master/mapping/getUnitWorkingById/" + child,
            success: function (data) {
                var result = JSON.parse(data);
                $("#childOption option").remove();
                $.each(result.data.content, function (index, value) {
                    $("#childOption").append("<option value='" + result.data.content[index].id + "'>" + result.data.content[index].name + "</option>")
                })

            }
        });
    }

    function save() {
        var parrent = $("#parrentOption option:selected").val();
        var child = $("#childOption option:selected").val();

        var data = {
            parrent: {
                id: parrent
            }, child: {
                id: child
            }
        }

        var dataSend = {
            data: JSON.stringify(data)
        }

        console.log(data);
        $.ajax({
            type: "POST",
            url: "/master/mapping/saveMapping",
            dataType: "json",
            data: dataSend,
            success: function (data) {
                show_notif(data.code, data.message);
                if (data.code == 200 || data.code == 201) {
                    $("#code").val("");
                    $("#name").val("");
                }
            }
        })
    }

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