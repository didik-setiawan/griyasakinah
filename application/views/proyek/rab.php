<?php
if(HakAkses(7)->create == 1){
    $statusC = NULL;
}else{
    $statusC = 'disabled';
}
if(HakAkses(7)->update == 1){
    $statusU = NULL;
}else{
    $statusU = 'disabled';
}
if(HakAkses(7)->delete == 1){
    $statusD = NULL;
}else{
    $statusD = 'disabled';
}

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="card-title">RAB</h3>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="card-title float-right text-yellow">Periode : <span class="text-bold" id="periode_laporan"></span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body style="display: block;">
                        <div class="row">
                            <div class="form-group col-sm-9">
                                
                            </div>
     
                            <div class="form-group col-sm-3">
                                
                            </div>
                            <div class="form-group col-sm-4">
                            </div>

                            <div class="col-sm-12 table-responsive">
                                <table class="table table-bordered table-striped table-hover text-nowrap" id="table_list">
                                    <thead>
                                        <tr class="bg-dark text-light">
                                            <th>#</th>
                                            <th class="text-center">Tgl Pengajuan</th>
                                            <th class="text-center">Nama Proyek</th>
                                            <th class="text-center">Kavling</th>
                                            <th class="text-center">status</th>
                                            <th class="text-center">
                                                <i class="fa fa-cogs" data-toggle="tooltip" data-placement="left" title="Action"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<div class="modal fade" id="detailKavling" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailKavlingLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        <h5 class="modal-title text-light" id="detailKavlingLabel">Detail Kavling</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detail-kavling">
          <input type="text" id="id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-light" id="staticBackdropLabel">Rekap Detail RAB</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detail-rabView">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        <div class="modal fade" id="approve-item">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-info">
                        <h4 class="modal-title"><i class="fa fa-times"></i> Approve RAB</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Mengapprove Data?</p>
                    <input type="hidden" name="id" id="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info float-right" id="approve_save"><i class="fa fa-times"></i> Approve</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tolak-item">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-warning">
                        <h4 class="modal-title"> Tolak Pengajuan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Menolak Pengajuan?</p>
                    <input type="hidden" name="id" id="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-warning float-right" id="tolak_save"><i class="fa fa-save"></i> Tolak</button>
                    </div>
                </div>
            </div>
        </div>