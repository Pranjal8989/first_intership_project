
   
   <div id="page-wrapper">
<div class="tables">
						<div class="table-responsive bs-example widget-shadow">
						<h4 style="color: #e94e02;">List of Student</h4>
						<table class="table table-bordered table-striped"> <thead> 
							
					

<a  class="btn btn-info" href="<?php echo base_url('Student/download/');?>"><i class="fa fa-download" style="font-size:20px;color:grey"></i> Download table </a>
    <table border="1" class="table table-light table-striped-columns">
        <tr>
             <td>S.No</td>
             <td> Name</td>
             <td> Father Name</td>
             <td>Mother Name</td>
             <td>Aadhar Number</td>
             <td>PAN</td>
             <td>mobile1</td>
             <td>mobile2</td>
             <td>Gender</td>
             <td>Date Of Brith</td>
             <td>Email</td>
             <td>Blood Group</td>
             <td>Categroy</td>
             <td>Religion</td>
             <td>Minority</td>
             <td>Handicap</td>
             <td>Local Address</td>
             <td>Permanant Address</td>
             <td>City</td>
             <td>District</td>
             <td>Pincode</td>
             <td>State</td>
             <td>Operation</td>
        </tr>
        <?php
        $i=1;
        foreach($rs as $data)
        {?>
             <tr>
            <td> <?php echo $i++; ?></td>
            <td> <?php echo $data->title.' '. $data->fname.' '.$data->mname.' '.$data->lname; ?></td>
            <td> <?php echo $data->father_name; ?></td>
            <td> <?php echo $data->mother_name; ?></td>
            <td> <?php echo $data->aadhar; ?></td>
            <td> <?php echo $data->pan_no; ?></td>
            <td> <?php echo $data->mobile1; ?></td>
            <td> <?php echo $data->mobile2; ?></td>
            <td> <?php echo $data->gender; ?></td>
            <td> <?php echo $data->dob; ?></td>
            <td> <?php echo $data->email; ?></td>
            <td> <?php echo $data->blood_group; ?></td>
            <td> <?php echo $data->category; ?></td>
            <td> <?php echo $data->religion; ?></td>
            <td> <?php echo $data->minority; ?></td>
            <td> <?php echo $data->handicap; ?></td>
            <td> <?php echo $data->laddress; ?></td>
            <td> <?php echo $data->paddress; ?></td>
            <td> <?php echo $data->city; ?></td>
            <td> <?php echo $data->district; ?></td>
            <td> <?php echo $data->pincode; ?></td>
            <td> <?php echo $data->state; ?></td>



           <td>
           <a  class="btn btn-primary" href="<?php echo base_url('Student/edit/'.$data->id);?>">Update </a>
           <a class="btn btn-danger" href="<?php echo base_url('Student/deletedata/'.$data->id);?>">Delete </a> </td>
        </tr>
              
        <?php }
        $i++; ?>
        
</table>
</div>
					</div>
					</div>
				
</div>
</div>
