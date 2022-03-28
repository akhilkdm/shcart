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
                        <h1 class="">Companies</h1>
                        <a href="">Dashborad / <i>Companies </i></a>
                    </div> 
                    <!-- Content Row -->
                    <div class="">

                        <div class="">
                            <div class="card shadow ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Companies </h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                    <form
                        class="form-inline">
                        <div class="input-group">
                            <input type="text" autocomplete="off" name="search" onkeyup="searchit(this.value)"  class="form-control bg-light border-0 small" placeholder="Search Companies ...."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                     <br>
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th width="100">#</th>
                                    <th width="100">#</th>
                                    <th>Company Name</th>
                                    <th>Email - ID</th>
                                    <th>Phone Number</th>
                                    <th>Website</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody id="com">
                                <?php
                                $i = 0;
                                $stmt = $admin -> ret("SELECT * FROM `company_details` ORDER BY `company_name` ASC");
                                while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
                             
                                ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td> <img src="../Controller/<?= $row['company_logo'] ?>" height="100" width="100" alt=""> </td>
                                    <td><?= $row['company_name'] ?></td>
                                    <td><?= $row['company_email_id'] ?></td>
                                    <td><?= $row['contact_number'] ?></td>
                                    <td><?= $row['com_web_site'] ?></td>
                                    <td><?= $row['company_desc'] ?></td>
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
                document.getElementById("com").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "search/getcomsearchresult.php?q=" + alm, true);
            xmlhttp.send();
        }
</script>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
        <?php include 'include/footer.php'; ?>