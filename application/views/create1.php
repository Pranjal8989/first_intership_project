<script type="text/javascript">
	
	function check_aadhar()
	{
	        
	        var aadhar = $('#aadhar').val();
	       
	        var n = aadhar.length;
	        if(n!=12)
	        {
	        	alert("Aadhar number must be of 12 digits");
	       	$('#aadhar').val('');
	       	$('#aadhar').focus;
	       	//break;
	           return ;
	       
	        }
	       
	}
	
	function check_mobile()
	{
		var mobile1 = $('#mobile1').val();
		
	       
	        var ns = mobile1.length;
	       
	        if(ns!=10)
	        {
	        	alert("Mobile number must be of 10 digits");
	       	$('#mobile1').val('');
	       	$('#mobile1').focus;
	       	//break;
	           return ;
	       
	        }
	}

	function check_mobile_a()
	{
		var mobile2 = $('#mobile2').val();
		
	       
	        var nz = mobile2.length;
	       
	        if(nz!=10)
	        {
	        	alert("Mobile number must be of 10 digits");
	       	$('#mobile2').val('');
	       	$('#mobile2').focus;
	       	//break;
	           return ;
	       
	        }
	}

</script>
<style>
	.custom_margin {
	margin-top: 12em !important;
	}
	@media only screen and (max-width: 992px) {
	.custom_margin {
	margin-top: 1em !important;
	}
	}	
	.select-editable {
	position:relative;
	background-color:white;
	width:120px;
	height:18px;
	}
	.select-editable select {
	position:absolute;
	top:0px;
	left:0px;
	font-size:14px;
	border: 1px solid #ccc;
	width:270px;
	margin:0;
	padding: 6px 12px;
	height: 34px;
	}
	.select-editable input {
	position:absolute;
	top:0px;
	left:0px;
	width:250px;
	padding:1px;
	font-size:14px;
	border: 1px solid #ccc;
	padding: 6px 12px;
	height: 34px;
	}
	.select-editable select:focus, .select-editable input:focus {
	outline:none;
	}
</style>
<div id="page-wrapper">
	<div class="forms">
	   
		<h3 class="title1">Student's Information</h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms">
			<div class="form-title">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#personal">Personal Information</a></li>
					
				</ul>
			</div>
			<form action="<?php echo base_url('Student/add_student');?>" method="post" id="theForm" enctype="multipart/form-data" >
				<!-- Div tab content starts -->
				<div class="tab-content">
					<!--div tab2 starts-->
					<!-- div menu1 starts-->
					<div id="personal" class="tab-pane fade in active">
					
						<div class="form-grids row widget-shadow" data-example-id="basic-forms">
							<div id="aadhar_err"></div>

							<div class="form-title">
								<h4>Student Personal Information</h4>
							</div>
							<div class="form-body">
								<div class="row">
									<div class="form-group col-md-2">
										<label><b>Title</b></label>
										<select type="select" class="form-control" id="title" name="title"  required >
											<option value="">Select Title </option>
											<option value="Mr.">Mr.</option>
											<option value="Ms.">Ms.</option>
											<option value="Mrs.">Mrs.</option>
											<option value="Dr.">Dr.</option>
										</select>
									</div>
									<div class="form-group col-md-3"> 
										<label><b>Student's First Name</b></label>
										<input type="text" class="form-control" id="first_name" placeholder="Student's First Name" name="fname" required> 
									</div>
									<div class="form-group col-md-3"> 
										<label><b>Student's Middle Name</b></label>
										<input type="text" class="form-control" id="middle_name" placeholder="Student's Middle Name" name="mname" > 
									</div>
									<div class="form-group col-md-3"> 
										<label><b>Student's Last Name</b></label>
										<input type="text" class="form-control" id="last_name" placeholder="Student's Last Name" name="lname" required > 
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-5"> 
										<label><b>Aadhar Number</b></label>
										<input type="number"   class="form-control" id="aadhar" placeholder="Enter Student's Aadhar Number" name="aadhar" onchange="check_aadhar()"  required> 
									</div>

									<div class="form-group col-md-5"> 
									   <label><b>PAN</b></label>
									   <input type="text" class="form-control" id="pan_no" placeholder="PAN Number" name="pan_no" required	> 
								</div>
								</div>
								<div class="row">
									<div class="form-group col-md-5"> 
										<label><b>Mobile Number</b></label>
										<input type="number" class="form-control" id="mobile1" placeholder="Student's Mobile Number" name="mobile1" onblur="check_mobile()" required> 
									</div>
									<div class="form-group col-md-5"> 
										<label><b>Alternate Mobile Number</b></label>
										<input type="number" class="form-control" id="mobile2" placeholder="Student's Alternate Mobile Number" name="mobile2" onblur="check_mobile_a()" required> 
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-5">
										<label><b>Gender</b></label>
										<select class="form-control" id="gender" name="gender" required >
											<option value="">Select Gender </option>
											<option value="M">Male</option>
											<option value="F">Female</option>
											<option value="O">Other </option>
										</select>
									</div>
									<div class="form-group col-md-5"> 
										<label><b>Date of Birth</b></label>
										<input type="date"  class="form-control" id="date_of_birth" placeholder="Student's DOB" name="dob"  required> 
									</div>
								</div>
								<div class="row">

									<div class="form-group col-md-5"> 
										<label><b>Email ID</b></label>
										<input type="email"  class="form-control" id="email" placeholder="Student's Email ID" name="email" required> 
									</div>
									<div class="form-group col-md-5">
										<label><b>Blood Group</b></label>
										<select class="form-control" id="blood_group" name="blood_group" required>
											<option value="">Select Blood Group </option>
											<option value="A+">A+</option>
											<option value="A-">A-</option>
											<option value="B+">B+</option>
											<option value="B-">B-</option>
											<option value="AB+">AB+</option>
											<option value="AB-">AB-</option>
											<option value="O+">O+</option>
											<option value="O-">O-</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-5">
										<label><b>Category</b></label>
										<select class="form-control" id="category" name="category" required >
											<option value="">Select Category </option>
											<option value="General">General</option>
											<option value="OBC">OBC</option>
											<option value="SC">SC</option>
											<option value="ST">ST</option>
										</select>
									</div>
									<!-- <div class="form-group col-md-5"> 
										<label><b>Caste</b></label>
										<input type="text" class="form-control" id="caste" placeholder="Student's Caste" name="caste"   /> required
									</div>
								
                                   </div> -->
								
									<div class="form-group col-md-5">
										<label><b>Religion</b></label>
										<select class="form-control" id="religion" name="religion" required >
											<option value="">Select Religion </option>
											<option value="Hindu">Hindu</option>
											<option value="Muslim">Muslim</option>
											<option value="Sikh">Sikh</option>
											<option value="Christian">Christian</option>
											<option value="Buddhist">Buddhist</option>
											<option value="Parsi">Parsi</option>
											<option value="Jain">Jain</option>
										</select>
									</div>
                                </div>
                                <div class="row">
									<div class="form-group col-md-5">
										<label><b>Minority</b></label>
										<select class="form-control" id="minority" name="minority" required >
										<option value="">select</option>
										<option value="">not in minority </option>
											<option value="">Minority </option>
										</select>
									</div>
									<div class="form-group col-md-5">
										<label><b>Handicap</b></label>
										<select class="form-control" id="handicap" name="handicap" required >
											<option value="">Is Student Handicapped </option>
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>

								</div>
								
								<div class="row">
									<div class="form-group col-md-4"> 
										<label><b>Local Address</b></label>
										<input type="text" class="form-control" id="address_line1" placeholder="Enter Address Line 1" name="laddress" required >
									</div>
									<div class="form-group col-md-4"> 
										<label><b> Permanent Address </b></label>
										<input type="text" class="form-control" id="address_line2" placeholder="Enter Address Line 2" name="paddress" required>
									</div>
									<div class="form-group col-md-4"> 
										<label><b>City</b></label>
										<input type="text" class="form-control" id="city" placeholder="Enter City" name="city" 	required>
								</div>
								</div>
								<div class="row">
									<div class="form-group col-md-4"> 
										<label><b>District</b></label>
										<input type="text" class="form-control" id="district" placeholder="Enter District" name="district" required>
									</div>

									<div class="form-group col-md-4">
										<label><b>Pincode</b></label>
										<input type="number" class="form-control" id="pincode" placeholder="Pincode" name="pincode" required>
									</div>
									<div class="form-group col-md-4">
										<label><b>State</b></label>
										<select class="form-control" id="state" name="state" required >
											<option value="">Select State</option>
											<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
											<option value="Andhra Pradesh">Andhra Pradesh</option>
											<option value="Arunachal Pradesh">Arunachal Pradesh</option>
											<option value="Assam">Assam</option>
											<option value="Bihar">Bihar</option>
											<option value="Chandigarh">Chandigarh</option>
											<option value="Chhattisgarh">Chhattisgarh</option>
											<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
											<option value="Daman and Diu">Daman and Diu</option>
											<option value="Delhi">Delhi</option>
											<option value="Goa">Goa</option>
											<option value="Gujarat">Gujarat</option>
											<option value="Haryana">Haryana</option>
											<option value="Himachal Pradesh">Himachal Pradesh</option>
											<option value="Jammu and Kashmir">Jammu and Kashmir</option>
											<option value="Jharkhand">Jharkhand</option>
											<option value="Karnataka">Karnataka</option>
											<option value="Kerala">Kerala</option>
											<option value="Lakshadweep">Lakshadweep</option>
											<option selected value="Madhya Pradesh">Madhya Pradesh</option>
											<option value="Maharashtra">Maharashtra</option>
											<option value="Manipur">Manipur</option>
											<option value="Meghalaya">Meghalaya</option>
											<option value="Mizoram">Mizoram</option>
											<option value="Nagaland">Nagaland</option>
											<option value="Orissa">Orissa</option>
											<option value="Pondicherry">Pondicherry</option>
											<option value="Punjab">Punjab</option>
											<option value="Rajasthan">Rajasthan</option>
											<option value="Sikkim">Sikkim</option>
											<option value="Tamil Nadu">Tamil Nadu</option>
											<option value="Telangana">Telangana</option>
											<option value="Tripura">Tripura</option>
											<option value="Uttaranchal">Uttaranchal</option>
											<option value="Uttar Pradesh">Uttar Pradesh</option>
											<option value="West Bengal">West Bengal</option>
										</select>
									</div>
								</div>

							</div>
							<!-- div form-body ends -->
						</div>
                        <div class="form-grids row widget-shadow" data-example-id="basic-forms">
							<div class="form-title">
								<h4>Student's Parent's Information</h4>
							</div>
							<div class="form-body">

								<div class="row">
									<div class="form-group col-md-5"> 
										<label><b>Father's Name</b></label>
										<input type="text" class="form-control" id="father_name" placeholder="Enter Father's Name" name="father_name"required > 
									</div>
									<div class="form-group col-md-5"> 
										<label><b>Mother's Name</b></label>
										<input type="text" class="form-control" id="mother_name" placeholder="Enter Mother's Name" name="mother_name" required> 
									</div>
								</div>
							</div>
						</div>
						<!-- div form-grids row widget-shadow ends -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
											<button type="submit" class="btn btn-success">Add Student</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- tab college ends-->
				</div>
				<!-- div tab-content ends-->
			</form>
		</div>
	</div>
	<!-- div forms ends-->
</div>
<!-- div page-wrapper ends-->


