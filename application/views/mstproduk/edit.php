<div class="contentpanel">

      <div class="row">
	   <form id="basicForm" method="POST" action="<?php echo base_url(); ?>Mstproduk/update" class="form-horizontal">
        <div class="col-md-6">
          <div class="panel">
              <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Edit Data Produk</h4>
              </div>
              <div class="panel-body">
                <hr>
              
				<input type="hidden" name="id" value="<?php echo $edit['id']; ?>" class="form-control"  />

                  <div class="form-group">
                    <label class="col-sm-3 control-label">code<span class="text-danger">*</span></label>
                    <div class="col-sm-4">
                      <input type="text" name="code" value="<?php echo $edit['code']; ?>" class="form-control" placeholder="code" required />
                    </div>
                  </div>
				  
				   <div class="form-group">
                    <label class="col-sm-3 control-label">description<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="description" value="<?php echo $edit['description']; ?>" class="form-control" placeholder="description" required />
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">MOQ<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="moq" value="<?php echo $edit['moq']; ?>" class="form-control" placeholder="Jurusan" title="Jurusan Harus Diisi" required />
                    </div>
                  </div>
				  
				   <div class="form-group">
                    <label class="col-sm-3 control-label">Category PID<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="categorypid" class="form-control" value="<?php echo $edit['categorypid']; ?>" placeholder="Category PID" title="Category PID Harus Diisi" required />
                    </div>
                  </div>

				   <div class="form-group">
                    <label class="col-sm-3 control-label">Hierarchy<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="hierarchy" value="<?php echo $edit['hierarchy']; ?>" class="form-control" placeholder="0" title="Hierarchy Harus Diisi" required />
                    </div>
                   </div>
				   
				    <div class="form-group">
                    <label class="col-sm-3 control-label">Material Group<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="materialgroup" value="<?php echo $edit['materialgroup']; ?>" class="form-control" placeholder="0" title="Material Group"  required />
                    </div>
                   </div>
				   
				    <div class="row mb20">
                    <label class="col-sm-3 control-label">DIV<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                    <input type="text" value="<?php echo $edit['datadiv']; ?>" name="datadiv" class="form-control" placeholder="0" title="DIV" required />
                    </div>
                   </div>
			
					<div class="row mb20">
                    <label class="col-sm-3 control-label">Type PID<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" value="<?php echo $edit['typepid']; ?>" name="typepid" class="form-control" placeholder="0" title="Type PID" required />
                    </div>
                   </div>

          <div class="row mb20">
                    <label class="col-sm-3 control-label">Last Price (sales) Before PPN<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                    <input type="text" name="lastpricebfppn" value="<?php echo $edit['lastpricebfppn']; ?>" class="form-control" placeholder="0" title="Last Price (sales) Before PPN" required />
                    </div>
                   </div>

          <div class="row mb20">
                    <label class="col-sm-3 control-label">New Price (sales) Before PPN<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                    <input type="text" name="newpricebfppn" value="<?php echo $edit['newpricebfppn']; ?>" class="form-control" placeholder="0" title="New Price (sales) Before PPN" required />
                    </div>
                   </div>

          <div class="row mb20">
                    <label class="col-sm-3 control-label">Last Discount (%)<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="lastdiscount" value="<?php echo $edit['lastdiscount']; ?>" class="form-control" placeholder="0" title="Last Discount" required />
                    </div>
                   </div>

          <div class="row mb20">
                    <label class="col-sm-3 control-label">New Discount (%)<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="newdiscount" value="<?php echo $edit['newdiscount']; ?>" class="form-control" placeholder="0" title="New Discount" required />
                    </div>
                   </div>
				   
                  <hr>
				  
				    <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                      <button type="submit" name="simpan" class="btn btn-success btn-quirk btn-wide mr5"><i class="fa fa-save"></i> Simpan</button>
                      <a href="<?php echo base_url() ?>Mstproduk" class="btn btn-quirk btn-wide btn-danger"><i class="fa fa-close"></i> Kembali</a>
                    </div>
                  </div>
			 	  
              </div><!-- panel-body -->
          </div><!-- panel -->
      </div><!-- col-md-6 -->
		
		  <div class="col-sm-6">
          <div class="panel">
            <div class="panel-body">
			
					<div class="row mb20">
                    <label class="col-sm-3 control-label">PPN<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="ppn" class="form-control" value="<?php echo $edit['ppn']; ?>" placeholder="0" title="PPN" required />
                    </div>
                   </div>
			
              <div class="row mb20">
			  <label class="col-sm-3 control-label">Buy Price Before PPN<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="buypricebfppn" value="<?php echo $edit['buypricebfppn']; ?>" placeholder="0"  title="Buy Price Before PPN" required>
                </div>     
			  </div>
			  
			   <div class="row mb20">
			  <label class="col-sm-3 control-label">Buy Price After PPN<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="buypriceafppn" value="<?php echo $edit['buypriceafppn']; ?>" placeholder="0" title="Buy Price After PPN" required>
                </div>
              </div>
			  
			   <div class="row mb20">
			  <label class="col-sm-3 control-label">Sale Price After PPN<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="salepriceafppn" value="<?php echo $edit['salepriceafppn']; ?>" placeholder="0" title="Sale Price After PPN" required>
                </div>
              </div>
			  
			  <div class="row mb20">
			  <label class="col-sm-3 control-label">Kode Sub Kategori<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="<?php echo $edit['subkat']; ?>" name="subkat" placeholder="0" title="Kode Sub Kategori" required>
                </div>
              </div>
			  
			   <div class="row mb20">
			  <label class="col-sm-3 control-label">Nama Sub Kategori<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="<?php echo $edit['namasubkat']; ?>" name="namasubkat" placeholder="0" title="Nama Sub Kategori" required>
                </div>
              </div>
			  
			    <div class="row mb20">
			  <label class="col-sm-3 control-label">Kode Kategori<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="kat" value="<?php echo $edit['kat']; ?>" placeholder="0" title="Kode Kategori" required>
                </div>
              </div>
			  
			  <div class="row mb20">
			  <label class="col-sm-3 control-label">Nama Kategori<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="namakat" value="<?php echo $edit['namakat']; ?>" placeholder="0" title="Nama Kategori" required>
                </div>
              </div>
			  
			   <div class="row mb20">
			  <label class="col-sm-3 control-label">Kode Departement<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="dept" value="<?php echo $edit['dept']; ?>" placeholder="0" title="Kode Departement"required>
                </div>
              </div>

          <div class="row mb20">
			  <label class="col-sm-3 control-label">Nama Departement<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="namadept" value="<?php echo $edit['namadept']; ?>" placeholder="0" title="Nama Departement"required>
                </div>
              </div>

          <div class="row mb20">
			  <label class="col-sm-3 control-label">Kode Divisi<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="divisi" value="<?php echo $edit['divisi']; ?>" placeholder="0" title="Kode Divisi"required>
                </div>
              </div>

          <div class="row mb20">
			  <label class="col-sm-3 control-label">Nama Divisi<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="namadivisi" value="<?php echo $edit['namadivisi']; ?>" placeholder="0" title="Nama Divisi"required>
                </div>
              </div>
			  
			   <div class="row mb20">
			  <label class="col-sm-3 control-label">Tax<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <select class="form-control" name="tax" required>
                    <option disabled selected style="display: none;" value="">Pilih</option>
                    <option selected>Y</option>
                    <option>N</option>
                  </select>
                </div>
              </div>
			</div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->
	</div><!--row -->
	</form>
  </div><!-- contentpanel -->
