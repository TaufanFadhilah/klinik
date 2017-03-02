<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="di di-desktop"></i> Gaji - <?php echo $this->session->flashdata('message');?></h3>
                                
                            </div>
                            <div class="panel-body">
                                
                                <div class="col-md-12">
                                    <table class="table table-bordered table-dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Employee Name</th>
                                            <th>Date</th>
											<th>Detail</th>
											<!--
                                            <th>Honor/schedule</th>
                                            <th>Total Honor</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <?php $no = 1;foreach($gaji as $data){ ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['name']; ?></td>
											<td><?php echo $data['reg_date']; ?></td>
											<td><a href="<?php echo base_url() ?>index.php/gaji/detail/<?php echo $data['iduser'] ?>">
											<button class="btn btn-primary">Detail</button></a></td>
											<!--
											<td><?php echo $data['nominal']; ?></td>
											<td><?php echo $data['nominal']; ?></td> -->
										</tr>
										<?php } ?>
										
                                    </tbody>
                                </table>
                                </div>
                                
                            </div>
                        </div>
	</div>
</div>