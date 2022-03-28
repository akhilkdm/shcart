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
                        <h1 class="">Reviwes</h1>
                        <a href="">Dashborad / <i>Reviwes </i></a>
                    </div> 
                    <!-- Content Row -->
                    <div class="">

                        <div class="">
                            <div class="card shadow ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Reviews </h6>
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
                                    <th>Review</th>
                                </tr>
                            </thead>
                            <tbody id="can">
                                <?php
                                $i = 0;
                                $astmt = $admin -> ret("SELECT * FROM `reviews` ORDER BY `r_id` DESC");
                                while($arow = $astmt -> fetch(PDO::FETCH_ASSOC)){ 
                                $sid = $arow['s_id'];
                                $stmt = $admin -> ret("SELECT * FROM `seeker` WHERE `id` = '$sid'");
                                $row = $stmt -> fetch(PDO::FETCH_ASSOC);
                             
                                ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td><?= $row['f_name']." ".$row['l_name'] ?></td>
                                    <td><?= $row['email_id'] ?></td>
                                    <td><?= $arow['review'] ?></td>
                                
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