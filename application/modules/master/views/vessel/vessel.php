<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <p class="message"></p>
</div>
<div class="block">
    <div class="header">
        <h2><?php echo $title ?></h2>
        <div class="side pull-right">
            <ul class="buttons">
                <li><a href="/master/fishingVessel/addVessel"><span class="icon-plus"></span> Tambah Data</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <table id="vessel" class="display responsive nowrap table" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Nama Kapal</th>
                <th>Tempat Tanda Selat</th>
                <th>Kode Tanda Selar</th>
                <th>GT</th>
                <th>Bendera Kapal</th>
                <th>Jenis Kapal</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>
    </div>
</div> 

<script>
    $(document).ready(function () {
        var table = $('#vessel').DataTable({
            dom:'Bfrtip',
            ajax: {
                url: '<?php echo base_url()?>/master/vessel/getVessel',
                dataSrc: 'data.vessel',
                processing: true
            },
            columns: [
                {
                    "data": "vesselName"
                },
                {
                    "data": "vesselPrevious",
                    "visible": false
                },
                {
                    "data": "vesselRegistration"
                },
                {
                    "data": "vesselImo",
                    "visible": false
                },
                {
                    "data": "vesselAkte",
                    "visible": false
                },
                {
                    "data": "vesselTonnage"
                },
                {
                    "data": "vesselNationality",
                    "visible": false
                },
                {
                    "data": "vesselLicency",
                    "visible": false
                },
                {
                    "data": "vesselFlag",
                    "visible": false
                },
                {
                    "data": "vesselPreviousFlag",
                    "visible": false
                },
                {
                    "data": "vesselType"
                },
                {
                    "data": "vesselGear",
                    "visible": false
                },
                {
                    "data": "vesselDimention",
                    "visible": false
                },
                {
                    "data": "vesselLoa",
                    "visible": false
                },
                {
                    "data": "vesselHorsePower",
                    "visible": false
                },
                {
                    "data": "vesselBuilt",
                    "visible": false
                },
                {
                    "data": "vesselYear",
                    "visible": false
                },
                {
                    "data": "vesselMaterial",
                    "visible": false
                },
                {
                    data: "",
                    className: "center",
                    render: function (data, type, full) {
                        return '<a href="<?php echo base_url()?>master/fishingVessel/editVessel/'+full.id+'" class=" editor_edit">Edit</a> / <a href="#" class=" editor_remove" onclick="showModalRemove(\''+full.name+'\',\''+full.id+'\')">Delete</a>';
                    }
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });

</script> 