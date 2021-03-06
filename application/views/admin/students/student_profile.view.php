<?php include(dirname(dirname(__FILE__))."/includes/head.php"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/app-assets/css/app.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/app-assets/css/core/menu/menu-types/vertical-compact-menu.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/app-assets/css/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/app-assets/css/style.css">
</head>
<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
<?php include(dirname(dirname(__FILE__))."/includes/header.php"); ?>
<?php include(dirname(dirname(__FILE__))."/includes/sidebar.php"); ?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Student Profile : <?php echo $StudentDetails['fullname']; ?></h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?php echo base_url('admin/home'); ?>">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="<?php echo base_url('student/list'); ?>">All Students</a>
                </li>
                <li class="breadcrumb-item active">
                  Student Profile
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right text-md-right col-md-6 col-12">
          <div class="btn-group">
            <a href="<?php echo base_url('student/list'); ?>">
            <button class="btn btn-round btn-info" type="button">
            <i class="ft-list"></i> All Students
            </button>
            </a>
          </div>
        </div>
      </div>
      <div class="sidebar-detached sidebar-left" ,=",">
        <div class="sidebar">
          <div class="bug-list-sidebar-content">
            <div class="card card border-teal border-lighten-2">
              <div class="text-center">
                <div class="card-body">
                  <img src="<?php echo $StudentDetails['profile_image'] ; ?>" class="rounded-circle  height-150"
                    alt="image">
                </div>
                <div class="card-body">
                  <h4 class="card-title"><?php echo $StudentDetails['fullname']; ?></h4>
                  <h6 class="card-subtitle text-muted"><?php $user_type = $StudentDetails['user_type'];
                    if($user_type=='0'){ echo "Super Admin"; }
                    elseif($user_type=='1'){ echo "Student"; }
                    elseif($user_type=='0'){ echo "Student"; } ?></h6>
                  <h4 class="card-title"><?php echo $StudentDetails['designation']; ?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-detached content-right">
        <div class="content-body">
          <section class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body admin-account-details">
                    <div id="fuzzy-search-list" class="row info-div-content">
                      <ul class="list-group list col-md-6">
                        <li class="list-group-item">
                          <span class="info-heading">First Name:</span>
                          <span class="info-value"><?php echo $StudentDetails['fullname'] ; ?></span>
                        </li>
                        <li class="list-group-item">
                          <span class="info-heading">Phone:</span>
                          <span class="info-value"><?php echo $StudentDetails['phone'] ; ?></span>
                        </li>
                        <li class="list-group-item">
                          <span class="info-heading">Gender:</span>
                          <span class="info-value"><?php if ($StudentDetails['gender']=='1') {
                            echo '<span class="gender-icons">&#9794;</span> Male' ;
                            } elseif ($StudentDetails['gender']=='2') {
                            echo '<span class="gender-icons">&#9792;</span> Female' ;
                            }else{
                              echo '';
                            }
                            ?></span>
                        </li>
                        <li class="list-group-item">
                          <span class="info-heading">Address:</span>
                          <span class="info-value"><?php echo $StudentDetails['address'] ; ?></span>
                        </li>
                        <li class="list-group-item">
                          <span class="info-heading">State:</span>
                          <span class="info-value"><?php echo $StudentDetails['state'] ; ?></span>
                        </li>
                        <li class="list-group-item">
                          <span class="info-heading">Skype ID:</span>
                          <span class="info-value"><?php echo $StudentDetails['skype_id'] ; ?></span>
                        </li>
                        <li class="list-group-item">
                          <span class="info-heading">Reg. Date:</span>
                          <span class="info-value"><?php echo date("jS F, Y h:i:s A", strtotime($StudentDetails['created_by'])) ; ?></span>
                        </li>
                      </ul>
                      <ul class="list-group list col-md-6">
                        <li class="list-group-item">
                          <span class="info-heading">Email:</span>
                          <span class="info-value"><?php echo $StudentDetails['email'] ; ?></span>
                        </li>
                        <li class="list-group-item">
                          <span class="info-heading">DOB:</span>
                          <span class="info-value"><?php $dob = $StudentDetails['dob']; echo ($dob=='0000-00-00') ? '' : date("jS F, Y", strtotime($dob)) ; ?></span>
                        </li>
                        <li class="list-group-item">
                          <span class="info-heading">Qualification:</span>
                          <span class="info-value"><?php echo $StudentDetails['qualification'] ; ?></span>
                        </li>
                        <li class="list-group-item">
                          <span class="info-heading">City:</span>
                          <span class="info-value"><?php echo $StudentDetails['city'] ; ?></span>
                        </li>
                        <li class="list-group-item">
                          <span class="info-heading">District:</span>
                          <span class="info-value"><?php echo $StudentDetails['district'] ; ?></span>
                        </li>
                        <li class="list-group-item">
                          <span class="info-heading">User Bio:</span>
                          <span class="info-value user_bio"><?php echo $StudentDetails['user_bio'] ; ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
<?php include(dirname(dirname(__FILE__))."/includes/footer.php"); ?>
</body>
</html>