<?php //print_r($image); die(); ?>
<style>
    body {
        padding: 0;
        margin: 0;
        color: #000;

    }


    .student-profile .card {
        border-radius: 5px;
    }

    .student-profile .card .card-header .profile_img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        margin: 10px auto;
        border: 4px solid #ccc;
        border-radius: 50%;
    }

    .student-profile .card h3 {
        font-size: 20px;
        font-weight: 700;
    }

    .student-profile .card p {
        font-size: 16px;
        color: #000;
    }

    .student-profile .table th,
    .student-profile .table td {
        font-size: 14px;
        padding: 5px 10px;
        color: #000;
    }

    .profile-pic {
        color: transparent;
        transition: all 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        transition: all 0.3s ease;
    }

    .profile-pic input {
        display: none;
    }

    .card1 {

        background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
        border-radius: 10px;
        transition: all .3s;
    }

    .card2 {

        background-color: #f0e7e7;

        transition: all .2s;
    }

    .card2:hover {
        transform: scale(0.98);
        border-radius: 10px;
    }

    .card1:hover {
        box-shadow: 0px 0px 30px 1px rgba(0, 255, 117, 0.30);
    }

    .circle {
        border-radius: 100% !important;
        overflow: hidden;
        width: 120px;
        height: 120px;
        border: 2px solid black;
        justify-content: center;
        margin-left: 80px;
        /* position: absolute; */
        /* top: 72px; */
    }
</style>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
<link href="<?php echo base_url(); ?>css/bootstrap_profile.css" rel='stylesheet' type='text/css' />
<div id="page-wrapper">
    
    <div class="form-grids  widget-shadow" data-example-id="basic-forms">

        <div class="main-page">
            <div class="form-title">
                <h4> Profile Details</h4>
            </div>


            <div class="student-profile">
                <div class="container1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card1">
                                <div class="card2">
                                    <div class="shadow bg-white rounded">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent text-center">

                                                <div>
                                                    <?php if (!$image) { ?>
                                                        <form method="POST"
                                                            action="<?php echo base_url('Profile/upload'); ?>"
                                                            enctype="multipart/form-data">
                                                            <!-- <div class="form-group"> -->
                                                            <h4> Upload Image </h4>
                                                            <div class="circle">
                                                                <input class="form-control" type="file" name="uploadfile"
                                                                    value="" >
                                                                <button class="btn btn-primary" type="submit"
                                                                    name="upload">UPLOAD</button>
                                                            </div>



                                                        </form>

                                                    <?php } else { ?>


                                                        <img class="profile_img"
                                                            src="<?php echo base_url('./upload/image/');
                                                            echo $image['filename']; ?>">
                                                    <?php } ?>

                                                </div>


                                                <?php
                                                foreach ($ram as $data) { ?>
                                                    <td1 style="color:brown;">
                                                        <?php echo $data->title; ?>
                                                        <?php echo $data->fname; ?>
                                                        <?php echo $data->mname; ?>
                                                        <?php echo $data->lname; ?>
                                                    </td1>
                                                <?php }
                                                ?>
                                            </div>

                                            <div class="card-body">
                                                <!-- <p class="mb-0"><strong class="pr-1">Student ID:</strong>
                                            <?php echo $data->id; ?>
                                        </p> -->
                                                <p class="mb-0"><strong class="pr-1">Class:</strong>CSE-AIML</p>
                                                <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-8">
                            <div class="card1">
                                <div class="card2">
                                    <div class="shadow bg-white rounded">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General
                                                    Information
                                                </h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <table class="table table-bordered">

                                                    <?php
                                                    foreach ($ram as $data) { ?>
                                                        <tr>
                                                            <th width="30%">Academic Year </th>
                                                            <td width="2%">:</td>
                                                            <td>2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="30%">Gender</th>
                                                            <td width="2%">:</td>
                                                            <td>
                                                                <?php echo $data->gender; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="30%">Religion</th>
                                                            <td width="2%">:</td>
                                                            <td>
                                                                <?php echo $data->religion; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="30%" style="color:red;">Blood Group</th>
                                                            <td width="2%">:</td>
                                                            <td style="color:red;">
                                                                <?php echo $data->blood_group; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="30%" style="color:red;">Mobile No.</th>
                                                            <td width="2%">:</td>
                                                            <td style="color:red;">
                                                                <?php echo $data->mobile1; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="30%">Email</th>
                                                            <td width="2%">:</td>
                                                            <td>
                                                                <?php echo $data->email; ?>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Student Profile -->

        </div><br>



    </div>
</div>