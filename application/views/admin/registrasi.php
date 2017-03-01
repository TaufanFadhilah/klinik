
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="di di-welcome-write-blog"></i> Registrasi - <?php echo $this->session->flashdata('status'); ?></h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            <div class="panel-body">
                                
                                <div class="col-md-12">
									<a href="<?php echo base_url(); ?>index.php/registrasi/input"><button class="btn btn-primary">Tambah Registrasi</button></a>
                                    <br><br>
									<table class="table table-bordered table-dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Patient</th>
                                            <th>Employee</th>
                                            <th>Service</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1;foreach($registrasi as $data){ ?>
										<tr>
											<td><?php echo $no++;?></td>
											<td><?php echo $data['patientname'];?></td>
											<td><?php echo $data['name'];?></td>
											<td><?php echo $data['servicename'];?></td>
											<td><?php echo $data['reg_date'];?></td>
										</tr>
										<?php } ?>
                                    </tbody>
                                </table>
                                </div>
                                
                            </div>
                        </div>
	</div>
</div>