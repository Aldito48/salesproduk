<div class="contentpanel">
      <div class="row">	  <form id="basicForm" method="POST" action="<?php echo base_url(); ?>Mstproduk/simpan" class="form-horizontal">	  
         <div class="col-sm-6">
          <div class="panel">
              <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Tambah Data Produk</h4>
              </div>
              <div class="panel-body">
                <hr>
                
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Code <span class="text-danger">*</span></label>
                    <div class="col-sm-4">
                      <input type="text" name="code" class="form-control" placeholder="Code" title="Code Harus Diisi" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Description<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="description" class="form-control" placeholder="description" title="Description Harus Diisi"required />
                    </div>
                  </div>				  				  <div class="form-group">                    <label class="col-sm-3 control-label">Jurusan<span class="text-danger">*</span></label>                    <div class="col-sm-8">                      <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" title="Jurusan Harus Diisi" required />                    </div>                  </div>				  				   <div class="form-group">                    <label class="col-sm-3 control-label">Prodi<span class="text-danger">*</span></label>                    <div class="col-sm-8">                      <input type="text" name="prodi" class="form-control" placeholder="Prodi" title="Prodi Harus Diisi" required />                    </div>                  </div>
				   <div class="form-group">                    <label class="col-sm-3 control-label">Professor PNS<span class="text-danger">*</span></label>                    <div class="col-sm-4">                      <input type="number" name="professor_pns" class="form-control" placeholder="0" title="Professor PNS Harus Diisi" required />                    </div>                   </div>				   				    <div class="form-group">                    <label class="col-sm-3 control-label">Professor Non PNS<span class="text-danger">*</span></label>                    <div class="col-sm-4">                      <input type="number" name="professor_non_pns" class="form-control" placeholder="0" title="Professor Non PNS"  required />                    </div>                   </div>				   				    <div class="row mb20">                    <label class="col-sm-3 control-label">Lektor Kepala PNS<span class="text-danger">*</span></label>                    <div class="col-sm-4">                    <input type="number" name="lektor_kepala_pns" class="form-control" placeholder="0" title="Lektor Kepala PNS" required />                    </div>                   </div>								<div class="row mb20">                    <label class="col-sm-3 control-label">Lektor Kepala Non PNS<span class="text-danger">*</span></label>                    <div class="col-sm-4">                     <input type="number" name="lektor_kepala_non_pns" class="form-control" placeholder="0" title="Lektor Kepala Non PNS" required />                    </div>                   </div>				   
                  <hr>				  				    <div class="row">                    <div class="col-sm-9 col-sm-offset-3">                      <button type="submit" name="simpan" class="btn btn-success btn-quirk btn-wide mr5"><i class="fa fa-save"></i> Simpan</button>                      <a href="<?php echo base_url() ?>Mstproduk" class="btn btn-quirk btn-wide btn-danger"><i class="fa fa-close"></i> Kembali</a>                    </div>                  </div>			 	  
              </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->				<div class="col-sm-6">          <div class="panel">            <div class="panel-body">							  <div class="row mb20">                    <label class="col-sm-3 control-label">Lektor PNS<span class="text-danger">*</span></label>                    <div class="col-sm-4">                    <input type="number" name="lektor_pns" class="form-control" placeholder="0" title="Lektor PNS" required />                    </div>                   </div>								<div class="row mb20">                    <label class="col-sm-3 control-label">Lektor Non PNS<span class="text-danger">*</span></label>                    <div class="col-sm-4">                     <input type="number" name="lektor_non_pns" class="form-control" placeholder="0" title="Lektor Non PNS" required />                    </div>                   </div>			              <div class="row mb20">			  <label class="col-sm-3 control-label">Asisten Ahli PNS<span class="text-danger">*</span></label>                <div class="col-sm-4">                  <input type="number" class="form-control" name="asisten_ahli_pns" placeholder="0"  title="Asisten Ahli PNS" required>                </div>     			  </div>			  			   <div class="row mb20">			  <label class="col-sm-3 control-label">Asisten Ahli Non PNS<span class="text-danger">*</span></label>                <div class="col-sm-4">                  <input type="number" class="form-control" name="asisten_ahli_non_pns" placeholder="0" title="Asisten Ahli Non PNS" required>                </div>              </div>			  			   <div class="row mb20">			  <label class="col-sm-3 control-label">Tenaga Pengajar PNS<span class="text-danger">*</span></label>                <div class="col-sm-4">                  <input type="number" class="form-control" name="tenaga_pengajar_pns" placeholder="0" title="Tenaga Pengajar PNS" required>                </div>              </div>			  			  <div class="row mb20">			  <label class="col-sm-3 control-label">Tenaga Pengajar Non PNS<span class="text-danger">*</span></label>                <div class="col-sm-4">                  <input type="number" class="form-control" name="tenaga_pengajar_non_pns" placeholder="0" title="Tenaga Pengajar Non PNS" required>                </div>              </div>			  			   <div class="row mb20">			  <label class="col-sm-3 control-label">Kualifikasi S3<span class="text-danger">*</span></label>                <div class="col-sm-4">                  <input type="number" class="form-control" name="terkualifikasi_s3" placeholder="0" title="Kualifikasi S3" required>                </div>              </div>			  			    <div class="row mb20">			  <label class="col-sm-3 control-label">Kualifikasi Kompetensi Profesi<span class="text-danger">*</span></label>                <div class="col-sm-4">                  <input type="number" class="form-control" name="terkualifikasi_kompetensi_profesi" placeholder="0" title="Kualifikasi Kompetensi Profesi" required>                </div>              </div>			  			  <div class="row mb20">			  <label class="col-sm-3 control-label">Kualifikasi Praktisi<span class="text-danger">*</span></label>                <div class="col-sm-4">                  <input type="number" class="form-control" name="terkualifikasi_praktisi" placeholder="0" title="Kualifikasi Praktisi" required>                </div>              </div>			  			   <div class="row mb20">			  <label class="col-sm-3 control-label">Pegawai PPPK<span class="text-danger">*</span></label>                <div class="col-sm-4">                  <input type="number" class="form-control" name="pegawai_pppk" placeholder="0" title="Pegawai PPPK"required>                </div>              </div>			  			   <div class="row mb20">			  <label class="col-sm-3 control-label">Tenaga Pengajar Punya NIDN<span class="text-danger">*</span></label>                <div class="col-sm-4">                  <input type="number" class="form-control" name="nidn" placeholder="0" title="Tenaga Pengajar Punya NIDN" required>                </div>              </div>			              </div>          </div>		</div>		
      </div><!--row -->	 </form>
    </div><!-- contentpanel -->		 

	
	
