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
                        <h1 class="">Job Seekers</h1>
                        <a href="">Dashborad / <i>Job Seekers </i></a>
                    </div> 
                    <!-- Content Row -->
                    <div class="">

                        <div class="">
                            <div class="card shadow ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Job Seeker Detailes </h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                    <form
                        class="form-inline">
                        <div class="input-group">
                            <input type="text" autocomplete="off" name="search" onkeyup="searchit(this.value)"  class="form-control bg-light border-0 small" placeholder="Search Seekers ...."
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
                                    <th>Name</th>
                                    <th>Email-ID</th>
                                    <th>Phone Number</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Nationality</th>
                                    <th>State</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="can">
                                <?php
                                $i = 0;
                                $stmt = $admin -> ret("SELECT * FROM `seeker` ORDER BY `f_name` ASC");
                                while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
                             
                                ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td> <img src="../Controller/<?= $row['profile_pic'] ?>" height="80" width="80" alt=""></td>
                                    <td><?= $row['f_name']." ".$row['l_name'] ?></td>
                                    <td><?= $row['email_id'] ?></td>
                                    <td><?= $row['phone_number'] ?></td>
                                    <td><?= $row['gender'] ?></td>
                                    <td><?php $dob= $row['dob'];
                                        $dob=substr($dob,0, -6);
                                        $today=date("Y");
                                        echo $today-$dob;
                                     ?></td>
                                    <td><?= $row['nationality'] ?></td>
                                    <td><?= $row['state'] ?></td>
                                    <td><?php if($row['stutus'] == 1){ ?>
                                        <a href="../Controller/blockunblockfunction.php?block=0&candiid=<?= $row['id']?>" class="btn btn-success"><i class="fa fa-unlock"></i></a>
                                    <?php }else{ ?>
                                        <a href="../Controller/blockunblockfunction.php?block=1&candiid=<?= $row['id']?>" class="btn btn-danger"><i class="fa fa-lock"></i></a>
                                   <?php }  ?>
                                   <a href="viewcanpro.php?canid=<?= $row['id']?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                   <a href="../Controller/delete.php?deleteCandi=<?= $row['id']?>" class="btn btn-danger"><i class="fa fa-eraser"></i></a>
                                   </td>
                                </tr>
                               
                                <?php
                                } ?>  <?php if($i == 0){ ?>
                                        <td></td>
                                        <td class="alert alert-danger" role="alert">
                                          <center><b>No Records...</b></center>  
                                        </td>
                                   
                               <?php }
                                ?>
                            </tbody>
                        </table>
                               
                                </div>
                            </div>
                        </div>
                    </div>

<script>
    function searchit(alm){

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("can").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "search/getcansearchresult.php?q=" + alm, true);
            xmlhttp.send();
        }
</script>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
        <?php include 'include/footer.php'; ?>