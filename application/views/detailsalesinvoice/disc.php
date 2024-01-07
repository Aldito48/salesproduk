<div class="contentpanel">

      <div class="row">
	   <form id="basicForm" method="POST" action="<?php echo base_url(); ?>Detailsalesinvoice/cut" class="form-horizontal">

        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Discount</h4>
                </div>

                <div class="panel-body">
                <input type="hidden" name="id" value="<?php echo $edit['id']; ?>" class="form-control"   />
                <hr>

            <div class="form-group">
                    <label class="col-sm-3 control-label">Item <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="item" value="<?php echo $edit['item']; ?>" class="form-control"  placeholder="Item" title="Item Harus Diisi" readonly/>
                    </div>
                    </div>

            <div class="form-group">
                    <label class="col-sm-3 control-label">Item Description<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="item_description" value="<?php echo $edit['item_description']; ?>" class="form-control"  placeholder="Item Descripotion" title="Item Descripotion Harus Diisi" readonly/>
                    </div>
                    </div>
            
            <div class="form-group">
                    <label class="col-sm-3 control-label">Qty<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <input type="number" name="qty" value="<?php echo $edit['qty']; ?>" class="form-control"  placeholder="Qty" title="Qty Harus Diisi" readonly/>
                    </div>
                    </div>
            
            <div class="form-group">
                    <label class="col-sm-3 control-label">Item Unit<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="item_unit" value="<?php echo $edit['item_unit']; ?>" class="form-control"  placeholder="Item Unit" title="Item Unit Harus Diisi" readonly/>
                    </div>
                    </div>    
            
                    <hr>
            
            <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="simpan" class="btn btn-success btn-quirk btn-wide mr5"><i class="fa fa-save"></i> Simpan</button>
                        <a href="<?php echo base_url() ?>Detailsalesinvoice" class="btn btn-quirk btn-wide btn-danger"><i class="fa fa-close"></i> Kembali</a>
                    </div>
                    </div>
            
                </div><!-- panel-body -->
            </div><!-- panel -->
        </div>
		
        <div class="col-sm-6">
              <div class="panel">
                <div class="panel-body">
          
              <div class="form-group">
                        <label class="col-sm-3 control-label">Unit Price<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                        <input type="number" name="unit_price" value="<?php echo $edit['unit_price']; ?>" class="form-control"  placeholder="Unit Price" title="Unit Price Harus Diisi" readonly />
                        </div>
                      </div>
          
              <div class="form-group">
                        <label class="col-sm-3 control-label">Amount<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                        <input type="number" name="amount" value="<?php echo $edit['amount']; ?>" class="form-control" id="amount"  placeholder="Amount" title="Amount Harus Diisi" readonly />
                        </div>
                      </div>
          
              <div class="form-group">
                        <label class="col-sm-3 control-label">Discount (%)<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                        <input type="number" id="disc_persentage" name="disc_persentage" value="<?php echo $edit['disc_persentage']; ?>" class="form-control"  placeholder="Discount" required />
                        </div>
                      </div>
            
              <div class="form-group">
                        <label class="col-sm-3 control-label">Disc Price<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                        <input type="number" id="disc_price" name="disc_price" value="<?php echo $edit['disc_price']; ?>" class="form-control"  placeholder="Disc Price" readonly />
                        </div>
                      </div>
            
              <div class="form-group">
                        <label class="col-sm-3 control-label">Net Price<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                        <input type="number" id="net_price" name="net_price" value="<?php echo $edit['net_price']; ?>" class="form-control"  placeholder="Net Price" readonly />
                        </div>
                      </div>
            
                </div>
              </div>
        </div>

	</div><!--row -->
	</form>
    <script>
        var amount = document.getElementById('amount');
        var disc_persentage = document.getElementById('disc_persentage');
        var disc_price = document.getElementById('disc_price');
        var net_price = document.getElementById('net_price');

        function calculate() {
            var amountValue = parseFloat(amount.value);
            var discPercentageValue = parseFloat(disc_persentage.value);

            var discount = (amountValue * discPercentageValue) / 100;
            var discountPrice = amountValue - discount;

            disc_price.value = discount;
            net_price.value = discountPrice;
        }
        amount.addEventListener('input', calculate);
        disc_persentage.addEventListener('input', calculate);
    </script>
  </div><!-- contentpanel -->
