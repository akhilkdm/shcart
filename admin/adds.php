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
                        <h1 class="">Adds</h1>
                        <a href="">Dashborad / <i>Adds </i></a>
                    </div> 
                    <!-- Content Row -->
                    <div class="">

                        <div class="">
                            <div class="card shadow ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Adds </h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                  
                     <br>
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th width="100">#</th>
                                    <th> Title</th>
                                    <th>Product Category</th>
                                    <th>Price</th>
                                    <th>Condition</th>
                                    <th>Add Cat</th>
                                    <th>Product Condition   </th>
                                    <th>Status</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody id="job">
                                <?php
                                $i = 0;
                                $stmt = $admin -> ret("SELECT * FROM `products` ORDER BY `p_id` DESC");
                                while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
                                    ++$i;
                             
                                ?>





                                <tr>
                                    
                                    <td><img height="100px" width="100px" src="../Controller/<?= $row['image1'] ?>" alt=""></td>
                                    <td><?= $row['title'] ?></td>
                                    <td><?= $row['pro_cat'] ?></td>
                                    <td><?= $row['price'] ?></td>
                                    <td><?= $row['price_condition'] ?></td>
                                    <td><?= $row['addcat'] ?></td>
                                    <td><?= $row['pro_condition'] ?></td>
                                    <td><?= $row['stutus'] ?></td>
                                    <td><?= $row['discription'] ?></td>
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
                document.getElementById("job").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "search/getjobsearchresult.php?q=" + alm, true);
            xmlhttp.send();
        }
</script>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
        <?php include 'include/footer.php'; ?>