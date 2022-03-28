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
                        <h1 class="">Job Category</h1>
                        <a href="">Dashborad / <i>Job Categories</i></a>
                    </div> 
                    <!-- Content Row -->
                    <div class="">

                        <div class="">
                            <div class="card shadow ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Job Categories</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                    <form
                        class="form-inline">
                        <div class="input-group">
                            <input type="text" autocomplete="off" name="search" onkeyup="searchit(this.value)"  class="form-control bg-light border-0 small" placeholder="Search Job Category ...."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                     <br>
                     <a class="btn btn-primary" href="jobcats.php?new=true">Add Categories</a>

                     <?php
                     if(isset($_GET['new'])){?>

                        <form action="../Controller/postjobs.php" method="post">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="catname" placeholder="Enter Category" id="">
          </div>
       
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        
          <button type="submit" name="addcats" class="btn btn-success">Add Category</button>
        </div>
        </form>
                     <?php }

                     ?>

                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th width="100">#</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="catres">
                                <?php
                                $i = 0;
                                $stmt = $admin -> ret("SELECT 	* FROM `category`
                                         ORDER BY `catname` ASC");
                                while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
                             
                                ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td><?= $row['catname'] ?></td>
                                    <td>
                                          <a href="../Controller/delete.php?deletecats=<?= $row['c_id']?>" class="btn btn-danger"><i class="fa fa-eraser"></i></a>
                                   </td>
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
                document.getElementById("catres").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "search/getcatsearchresult.php?q=" + alm, true);
            xmlhttp.send();
        }
</script>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
        <?php include 'include/footer.php'; ?>