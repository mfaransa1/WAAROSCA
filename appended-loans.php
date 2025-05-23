
<?php
session_set_cookie_params(0);
session_start();
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
    header('location: login.php');
} else {
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Warriors Affluence Alliance</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>

</head>
<body class="sb-nav-fixed">
    <div id="layoutSidenav">

    <?php include('includes/header.php');?>

<?php include('includes/sidebar.php');?>


            <div id="layoutSidenav_content" id="content-wrapper">
                <main>
                    <div class="container-fluid px-4">
                   

                                               <div class="card mb-4">
                            <div class="card-header">
                               
                            <a href="" id="create_new" align="right" class="btn btn-sm btn-primary">Appended Loans</a>
                            
                            </div>
                              <div class="card-body">
                              <table id="dataTable" class="table table-bordered"   width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                           
                                            <th>Appended Date</th>
                                            <th>Details</th>                                           
                                            <th>Status</th> 
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>                                       
                                        <th>Appended Date</th>
                                            <th>Details</th>                                          
                                            <th>Status</th> 
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                     $email1 = $_SESSION['login'];
                                     $sql1 = "SELECT `id` FROM `users` WHERE `email`=:email1";
                                     $query1 = $dbh->prepare($sql1);
                                     $query1->bindParam(':email1', $email1, PDO::PARAM_STR);
                                     $query1->execute();
                                     $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                                     if ($query1->rowCount() > 0) {
                                         foreach ($results1 as $result1) {
                                             $uid = $result1->id;
                                         }
                                     }
 
                                    $status=3;
                                    $sql = "SELECT loans.* from loans where loans.userid=:uid and loans.`status`=3 order by loans.id desc";
                                       
                                        $query = $dbh->prepare($sql);
                                        $query->bindParam(':uid', $uid, PDO::PARAM_STR);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt = 1;
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) {
                                             ?>
										
                                        <tr>
                                        <td><?php echo htmlentities($cnt); ?></td>                                   
                                                          
                                                                   
                                    <td><?php echo htmlentities($result->created_date); ?></td>
                                    <td>
                                        <p><span style="color:green; font-size:15px;"><?php echo htmlentities($result->amount); ?> Shillings</span>
                                  </p> </td>
                                  <td class="text-center">

                                        <?php if($result->status == 0): ?>
						 			<span class="badge badge-warning">Approved and Active</span>
						 		<?php elseif($result->status == 1): ?>
						 			<span class="badge badge-info">Waiting Approval</span>
					 			<?php elseif($result->status == 2): ?>
						 			<span class="badge badge-primary">Cleared</span>
					 			<?php elseif($result->status == 3): ?>
						 			<span class="badge badge-success">Disapproved</span>					 			
						 		<?php endif; ?>

                                        </td>
   
    
                                        </tr>
                                        <?php $cnt = $cnt + 1;
                                            }
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>


            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    </body>
</html>
<?php } ?>