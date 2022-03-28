<?php include 'include/header.php'; ?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            <?php include 'include/sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    <?php include 'include/navbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="">Users</h1>
                        <a href="">Dashborad / <i>Users </i></a>
                    </div> 
                    <!-- Content Row -->
                    <div class="">

                        <div class="">
                            <div class="card shadow ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Manage Users </h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                    
                     <br>
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th width="100">#</th>
                                    <th>Name</th>
                                    <th>Email-ID</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="rec">
                                <?php
                                $i = 0;
                                $stmt = $admin -> ret("SELECT * FROM `customer` ORDER BY `cust_name` ASC");
                                while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
                             
                                ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td> <img height="90" width="90" src="../Controller/<?= $row['profile_pic'] ?>" alt=""> </td>
                                    <td><?= $row['cust_name'] ?></td>
                                    <td><?= $row['email_id'] ?></td>
                                    <td><?= $row['phone_no'] ?></td>
                                    <td><?= $row['address'] ?></td>
                                   
                                </tr>
                               
                                <?php
                                } ?>  
                            </tbody>
                        </table>
                               <?php if($i == 0){ ?>
                                   
                                        <div class="alert alert-danger" role="alert">
                                          <center><b>No Records...</b></center>  
                                        </div>
                                   
                               <?php }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>

<script>
    function searchit(alm){

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("rec").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "search/getrecsearchresult.php?q=" + alm, true);
            xmlhttp.send();
        }
</script>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
        <?php include 'include/footer.php'; ?>