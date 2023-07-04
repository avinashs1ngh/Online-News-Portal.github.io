<section id="content">
  <div class="page page-forms-common"> 
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-green"> <strong>Edit</strong>Category</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>/Categoryc/catgupdate/<?php echo $edit->cid; ?>">
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">category</label>
                <div class="col-sm-4">
                  <input type="text" name="cname"  class="form-control" 
                  placeholder="Edit category name" value="<?php echo $edit->catgname ;?> "required>
                  
                </div>
              </div>
             
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
           <input type="submit"  name="submit" value="Update" class="btn btn-raised btn-primary">
           
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
    
  </div>
</section>
</div>
<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script> 
<script >
        $(window).load(function(){
            $('#ex1').slider({
                formatter: function(value) {
                    return 'Current value: ' + value;
                }
            });
            $("#ex1").on("slide", function(slideEvt) {
                $("#ex1SliderVal").text(slideEvt.value);
            });

            $("#ex2, #ex3, #ex4, #ex5").slider();
        });
    </script> 
</body>