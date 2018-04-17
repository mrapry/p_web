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
                    <a href="/master/areas/addMappingUnitWorking">
                        <button class="btn btn-primary" type="button">
                            <span class="fa fa-plus"></span> Tambah Data
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row np-lr">
         <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#sectionA">Unit Pelaksana Teknis</a></li>
            <li><a data-toggle="tab" href="#sectionB">Satuan Pengawasan</a></li>
         </ul>
         <div class="tab-content">
            <div id="sectionA" class="tab-pane fade in active">
               <table id="unitKerja" class="table table-striped table-hover">
                  <thead>
                     <tr>
                        <th>Unit Pelaksana Teknis</th>
                        <th>Satuan Pengawasan</th>
                     </tr>
                  </thead>
               </table>
            </div>  <!--sectionA-->
            <div id="sectionB" class="tab-pane fade">
               <table id="satuanPengawas" class="table table-striped table-hover">
                  <thead>
                     <tr>
                        <th>Satuan Pengawasan</th>
                        <th>Wilayah Kerja</th>
                     </tr>
                  </thead>
               </table>
            </div>  <!--sectionB-->
         </div> <!-- <div class="tab-content"> -->
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var table = $('#unitKerja').DataTable();
        var table = $('#satuanPengawas').DataTable();
    }
</script>

