<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p class="message"></p>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $title ?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group pull-right">
                    <a href="/master/vessel/addVesselData">
                        <button class="btn btn-primary" type="button">
                            <span class="fa fa-plus"></span> Tambah Data
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row np-lr">
            <table id="vessel" class="display responsive nowrap table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Nama Kapal</th>
                    <th>Nama Kapal Sebelumnya</th>
                    <th>Tempat dan Tanda Selar</th>
                    <th>Nomor IMO</th>
                    <th>No Gross Akte</th>
                    <th>GT</th>
                    <th>No. SIPI/SIKPI</th>
                    <th>Masa Berlaku SIPI/SIKPI</th>
                    <th>Bendera Kapal</th>
                    <th>Bendera Kapal Sebelumnya</th>
                    <th>Jenis Kapal</th>
                    <th>Alat Tangkap</th>
                    <th>Dimensi Kapal (m)</th>
                    <th>LoA (m)</th>
                    <th>Daya Mesin Utama</th>
                    <th>Tempat Pembuatan Kapal</th>
                    <th>Tahun Pembuatan Kapal</th>
                    <th>Bahan Kapal</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div> 

<script>
    $(document).ready(function () {
        var table = $('#vessel').DataTable({
            dom:'Bfrtip',
            ajax: {
                url: '/assets/json/vessel.json',
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
                        return '<a href="<?php echo base_url()?>master/vesselData/editVessel/'+full.id+'" class=" editor_edit">Edit</a> / <a href="#" class=" editor_remove" onclick="showModalRemove(\''+full.name+'\',\''+full.id+'\')">Delete</a>';
                    }
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });

</script> 