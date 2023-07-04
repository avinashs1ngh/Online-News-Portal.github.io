<head>
<link rel="stylesheet"href="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/footable/css/footable.core.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">

</head>
<section id="content">
	<div class="page page-tables-footable">
		<div class="b-b mb-10">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<h1 class="h3 m-0">State</h1>
					
                            
				</div>
			</div>
		</div>
        <!-- row -->
		<div class="row">
			<div class="col-md-12">
				<section class="boxs ">
				
			<div class="boxs-body">
			 <div class="form-group">
             <a href="<?php echo site_url(); ?>/Statec/stateins" class="btn btn-raised btn-info"><i class="glyphicon glyphicon-plus"></i>Add State</a>
             
   <form method="post" action="<?php echo site_url()?>/Statec/muldel/">
			
                <label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th></th>
                                            <th>Id</th>
											<th>countryname</th>
											<th data-hide="phone">Statename</th>
											<th data-hide='phone, tablet'>Date</th>
											<th data-hide='phone, tablet'>Status</th>
                                            <th data-hide='phone, tablet'>Action</th>
										</tr>
									</thead>
									<tbody>
                                    
                                    <?php
									foreach($getstate as $row)
									{?>
                                    <tr>
                                    <td><div class="checkbox">
                                    <label>
		                                <input type="checkbox" name="chk[]"  value="<?php echo $row->stateid;?>" > </label>
                                        </div></td>
                                    <td><?php echo $row->stateid;?></td>
                                    <td><?php echo $row->countryname; ?></td>
                                    <td><?php echo $row->sname;?></td>
                                    <td><?php echo $row->datereg;?></td>
                                    <td>
									 <a href="<?php echo site_url()?>/Statec/status/<?php echo $row->stateid ?>" class="<?php if($row->sstatus=="Active"){?>btn btn-raised btn-success btn-sm"<?php }else {?>  btn btn-raised btn-primary btn-sm <?php }?>style="text-decoration:none">
									
									<?php echo $row->sstatus;?></td>
       <td><a href="<?php echo site_url()?>/Statec/statedel/<?php echo $row->stateid;?>"><i class="fa fa-trash-o"  style='color:#F00;'></i></a>
        |<a href="<?php echo site_url() ?>/Statec/stateedit/<?php echo $row->stateid;?>">
        <i class="fa fa-edit"></i></a></td><?php
									 }?>
                                     </tr>
                                    </tbody>
									<tfoot class="hide-if-no-paging">
										<tr>
											<td colspan="5" class="text-right">
												<ul class="pagination">
												</ul>
											</td>
										</tr>
									</tfoot>
								</table>
                                
                                <input type="submit" name="submit" value="Muldel" class="btn btn-raised btn-primary"/>
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
	<script src="<?php echo base_url()?>assets/js/vendor/footable/footable.all.min.js"></script>
	<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script>	
    <script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>
</html>