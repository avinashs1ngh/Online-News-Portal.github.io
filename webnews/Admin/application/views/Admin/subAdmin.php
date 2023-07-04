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
					<h1 class="h3 m-0">Subadmin</h1>
					
				</div>
			</div>
		</div>
        <!-- row -->
		<div class="row">
			<div class="col-md-12">
				<section class="boxs ">
				
			<div class="boxs-body">
			 <div class="form-group">
            
 	<label for="filter" style="padding-top: 5px">Search:</label>
	<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th></th>
                                            <th>ID</th>
                                            <th>name</th>
                                            <th>Aemail</th>
                                            <th>Contact</th>
                                            <th>image</th>
											<th>date</th>
                                            <th data-hide='phone, tablet'>status</th>
                                             <th>Priority</th>
                                            <th data-hide='phone, tablet'>Action</th>
										</tr>
									</thead>
									<tbody>
                                    
                                    <?php
									foreach($subAdmin as $row)
									{?>
                                    <tr>
                                        <td><div class="checkbox"><label>
		           <input type="checkbox" name="chk[]"  value="<?php echo $row->Aid;?>"> </label>
                                        </div>
                                        </td>
                                    
                                    <td><?php echo $row->Aid;?></td>                                    <td><?php echo $row->fullname;?></td>
                                    <td><?php echo $row->Aemail;?></td>
                                    <td><?php echo $row->contactno;?></td>
                    <td><img src="<?php echo base_url()?>gallery/<?php echo $row->Aid;?>/<?php echo $row->aimage ;?>" height='70' width='80' alt="Image Not Found"/></td>
                                    <td><?php echo $row->datereg;?></td>
                                    <td><a href="<?php echo site_url()?>/SubadminC/status/<?php echo $row->Aid ?>" class="<?php if($row->astatus=="Active"){?>btn btn-raised btn-success btn-sm<?php }else {?>  btn btn-raised btn-primary btn-sm <?php }?>"style="text-decoration:none">
									<?php echo $row->astatus;?></a></td>
                                    <td class="btn btn-raised btn-primary btn-sm" style="text-decoration:none;width:80px;">
									<?php echo $row->priority;?></td>
                                   
       <td align="center"><a href="<?php echo site_url()?>/SubadminC/deleteSub/<?php echo $row->Aid;?>"><i class="fa fa-trash-o"  style='color:#F00;'></i></a></td><?php
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