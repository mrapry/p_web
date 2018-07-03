<script>
// Document ready
    $(function () {
        setType();
        setKota();
        setInfrastructure2();
        setFacilities2();

    });

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
                $("#tipe_id option").remove();
                $("#tipe_id").append('<option>Pilih Tipe</option>')

                // looping get Type Unit Kerja
                $.each(result.data.content, function (index, value) {
                    $("#tipe_id").append(
                        '<option value="' + result.data.content[index].id + '">' + result.data.content[index].type + '</option>'
                    )
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

    function setInfrastructure() {
        $.ajax({
            type: "GET",
            url: "/master/infrastructure/getInfrastructure",
            success: function (data) {
                var result = JSON.parse(data);

                //bersihkan dropdown
                $("#infrastructure_id option").remove();
                $("#infrastructure_id").append('<option>Pilih Prasarana</option>')

                // looping get infrastructure
                $.each(result.data.content, function (index, value) {
                    $("#infrastructure_id").append(
                        '<option value="' + result.data.content[index].id + '">' + result.data.content[index].name + '</option>'
                    )
                })
            }
        })
    }

    function setInfrastructure2() {
        $.ajax({
            type: "GET",
            url: "/master/infrastructure/getInfrastructure",
            success: function (data) {
                var result = JSON.parse(data);

                // looping get infrastructure
                $.each(result.data.content, function (index, value) {
                    $("#prasarana").append(
                        '<div class="checkbox-inline"><label><input type="checkbox" name="infrastructure" value="' + result.data.content[index].id +'"> ' + result.data.content[index].name +'</label></div>'
                    )
                })
            }
        })
    }

    function setFacilities() {
        $.ajax({
            type: "GET",
            url: "/master/facilities/getFacilities",
            success: function (data) {
                var result = JSON.parse(data);

                //bersihkan dropdown
                $(".selectpicker").remove();
                $(".selectpicker").append('<option>Pilih Sarana</option>');

                // looping get city
                $.each(result.data.content, function (index, value) {
                    $("#facilities_id .selectpicker").append(
                        '<option value="' + result.data.content[index].id + '">' + result.data.content[index].name + '</option>'
                    )
                })
            }
        })
    }

    function setFacilities2() {
        $.ajax({
            type: "GET",
            url: "/master/facilities/getFacilities",
            success: function (data) {
                var result = JSON.parse(data);

                // looping get city
                $.each(result.data.content, function (index, value) {
                    $("#sarana").append(
                        '<div class="checkbox-inline"><label><input type="checkbox" name="facilities" value="' + result.data.content[index].id +'"> ' + result.data.content[index].name +'</label></div>'
                    )
                })
            }
        })
    }

    $("#form-add-unitWorking").validator().on('submit', function (e) {
        if(e.isDefaultPrevented()){
            console.log("DATA BELUM LENGKAP")
        }else{
            var code = $("#code").val();
            var name = $("#name").val();
            var address = $("#address").val();
            var phone = $("#phone").val();
            var faxmail = $("#faxmail").val();
            var email = $("#email").val();
            var latitude = $("#latitude").val();
            var longitude = $("#longitude").val();
            var facilities = $('input[name="facilities"]').serializeArray();
            var infrastructure = $('input[name="infrastructure"]').serializeArray();

            var tempFacilities=[];
            var tempInfrastructures=[];

            var resultPhone = phoneNumber(phone);
            console.log(resultPhone);

            var resultEmail = validateEmail(email);
            console.log(resultEmail);

            if (resultPhone){
                for (i = 0; i < facilities.length; i++) {
                    var data = {
                        id:facilities[i].value
                    }
                    if (facilities[i].value != ""){
                        tempFacilities.push(data)
                    }
                }

                for (i = 0; i < infrastructure.length; i++) {
                    var data = {
                        id:infrastructure[i].value
                    }
                    if (infrastructure[i].value !=""){
                        tempInfrastructures.push(data)
                    }
                }

                console.log(tempFacilities);

                var setData = {
                    "code": code,
                    "name": name,
                    "latitude": latitude,
                    "longitude": longitude,
                    "address": address,
                    "phone": phone,
                    "facsimile": faxmail,
                    "email": email,
                    "facilities": tempFacilities,
                    "infrastructures": tempInfrastructures,
                    "cityId": $("#kota_id").val(),
                    "typeUnit": {
                        "id": $("#tipe_id").val()
                    }
                };

                console.log(setData);


                var dataSend = {
                    data :JSON.stringify(setData)
                };

                console.log(dataSend);
                $.ajax({
                    type: "POST",
                    url: "/master/unitWorking/saveUnit",
                    dataType: "json",
                    data: dataSend,
                    success: function (data) {
                        show_notif(data.code, data.message);
                    }
                })
            } else {
                console.log("salah");
                show_notif(400, 'Format Nomor Telpon Anda Salah!');
                return false;
            }

        }
    });

    function phoneNumber(inputText) {
        var phoneno = /(\()?(\+62|62|0)(\d{2,3})?\)?[ .-]?\d{2,4}[ .-]?\d{2,4}[ .-]?\d{2,4}/g;
        if(inputText.match(phoneno)) {
            return true;
        }
        else {
            return false;
        }
    };

    function validateEmail(email){
        var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        var valid = emailReg.test(email);

        if(!valid) {
            show_notif(400, 'Format email Anda Salah!');
            return false;
        } else {
            return true;
        }
    }
</script>