<style>table tr td{border:none!important}</style>
<div id="page-wrapper">
 <h3 class="page-header">Add Accesories</h3>
       
        <form action="<?php echo base_url();?>product/accesories/save" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            
            <div class="row">
            
            <div class="col-lg-5">
            <div class="form-group">
                <label class="col-lg-2 control-label">SKU</label>
                <div class="col-lg-8">
                  <input name="sku" class="form-control" required>
                </div>
              </div>
              
             
              <div class="form-group">
                <label class="col-lg-2 control-label">Stock</label>
                <div class="col-lg-8">
                  <input name="stock" class="form-control" type="number" step="any" required> 
                </div>
              </div>
               <div class="form-group">
                <label class="col-lg-2 control-label">Harga</label>
                <div class="col-lg-8">
                  <input name="harga" class="form-control" type="text" pattern="[0-9]*" required> 
                </div>($US)
              </div>
               <div class="form-group">
                <label class="col-lg-2" style="padding-left:5px">Keterangan</label>
                <div class="col-lg-8">
                  <textarea class="form-control" name="keterangan"></textarea>
                </div>
              </div>
           
            
           </div> 
           
           <div class="col-lg-6">
             
             <div class="form-group">
                <label class="col-lg-2 control-label">Description</label>
                <div class="col-lg-8">
                  <input name="deskripsi" class="form-control" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-lg-2 control-label">Unit</label>
                <div class="col-lg-8">
                 <select name="unit" class="form-control">
                    <option value="PCS">PCS</option>
                    <option value="METER">METER</option>
                    <option value="MODUL">MODUL</option>
                  </select>
                </div>
              </div>
               <div class="form-group">
                <label class="col-lg-2 control-label">Status</label>
                <div class="col-lg-8">
                 <select name="status" class="form-control">
                    <?php foreach($status as $st=>$val){?>
                        <option value="<?php echo $st;?>"><?php echo $val;?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-lg-2 control-label">Warranty</label>
                <div class="col-lg-8">
                 <select name="garansi" class="form-control">
                    <?php foreach($warranty as $wr){?>
                        <option value="<?php echo $wr;?>"><?php echo $wr;?></option>
                    <?php } ?>
                  </select>
                </div>(Years)
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Brand</label>
                <div class="col-lg-8">
                  <select name="brand" class="form-control">
                    <option value="GE">GE</option>
                    <option value="LOKAL">LOKAL</option>
                  </select>
                </div>
              </div>
             
            </div><!--end row-->
            <div class="row">
                <div class="col-lg-6">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td width="40"><b>Gambar</b></td>
                                <td>1.<input name="pic[]" type="file"></td>
                                <td>2.<input name="pic[]" type="file"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3.<input name="pic[]" type="file"></td>
                                <td>4.<input name="pic[]" type="file"></td>
                            </tr>
                        </table>
                    </div>
                </div>
               <div class="col-lg-6 col-lg-offset-2">
                   <br/><br/>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    <a href="<?php echo base_url();?>product/fixture" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</a>
         
               </div>
            </div>
        </form>
</div>
<!-- /#page-wrapper -->
