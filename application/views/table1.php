<div id="page-wrapper" style="min-height: 330px;">
	<div class="main-page">
			<form action = "<?php echo base_url('Login/MasterFacultyLogin');?>" method="post" >
				<div class="form-grids row widget-shadow" data-example-id="basic-forms">
					<div class="form-body">
						<div class="panel panel-info">
							<div class="panel-heading"> 
		                  			<h2 class="panel-title" style="color:#000000;font-size: 20px !important;"> Master Login Search </h2> 
		                  		</div>
		                  		<div class="panel-body">
		                  			<div class="row">
		                  				<div class="form-group col-md-4"> 
										   <label>Department<span style="color:red;"> * </span></label><br>
										    <select id="Dept_F1" class="form-control dept" name="FacDept[]" onchange="getFaculty('Dept_F1','F1')" required>
										    	 <option value="" >Select</option>
										    	<?php foreach ($dept as $data) {?>
										  	 	<option value="<?php echo $data['id'];?>"><?php echo $data['name']; ?></option>
										  	 <?php } ?>
										  </select>
									    </div>

									    <div class="form-group col-md-4"> 
										   <label>Faculty<span style="color:red;"> * </span></label><br>
										   <select class="form-control" id="F1" name="computer_code" >
										   </select>
									    </div>

									    <br>
									    <div class="form-group col-md-2 col-md-offset-2"> 
									 		<button id="submit" type="submit" class="btn btn-warning"> Login </button>
									 	</div>
		                  			</div>
		                  			
		                  		</div>
						</div>
					</div>
				</div>
	    	</form>
	</div>
</div>


