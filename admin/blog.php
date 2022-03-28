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
                        <h1 class="">Blogs</h1>
                        <a href="">Dashborad / <i>Blog</i></a>
                    </div> 
                    <!-- Content Row -->
                    <div class="">

                        <div class="">
                            <div class="card shadow ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Manage Blogs</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    
<?php
if(isset($_GET['blog'])){ 
?>
    
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


 
 	<form action="../controller/blog.php" enctype="multipart/form-data" method="post" id="mail">
		<label for="" class="label-control">Blog Title</label>
		<input type="text" class="form-control" name="title" placeholder="Blog Title" id="">			
		<label for="" class="label-control">Blog Short Descritption</label>
		<textarea placeholder="in 120 Charactors" maxlength="120" class="form-control" name="sdesc" id=""></textarea>
		<label for="" class="label-control"> Blog Image</label>
		<input type="file" class="form-control" name="bimage" id="">
		<br>
  		 <textarea id="summernote" name="blog"></textarea>
	</section>
     
	<br>
        <button type="submit" name="postblog" class="btn btn-primary">Post Blog</button>

	  </form>
      <?php
      }
      ?>    

<?php
if(isset($_GET['bloguid'])){ 

    $bloguid = $_GET['bloguid'];
    $astmt = $admin -> ret("SELECT * FROM `blog` WHERE `b_id` = '$bloguid'");
    $arow = $astmt -> fetch(PDO::FETCH_ASSOC);
?>
    
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


 
 	<form action="../controller/blog.php" enctype="multipart/form-data" method="post" id="mail">
		<input type="hidden" name="buid" value="<?= $bloguid?>">
        <label for="" class="label-control">Blog Title</label>
		<input type="text" value="<?= $arow['b_title']?>" class="form-control" name="title" placeholder="Blog Title" id="">			
		<label for="" class="label-control">Blog Short Descritption</label>
		<textarea placeholder="in 120 Charactors" maxlength="120" class="form-control" name="sdesc" id=""><?= $arow['b_s_desc']?></textarea>
		<label for="" class="label-control"> Blog Image</label>
		<input type="file" disabled class="form-control" name="bimage" id="">
		<br>
  		 <textarea id="summernote" name="blog"><?= $arow['blog'] ?></textarea>
	</section>
     
	<br>
        <button type="submit" name="postblogupdate" class="btn btn-primary">Update Blog</button>

	  </form>
      <?php
      }
      ?>

<a href="blog.php?blog=1" <?php if(isset($_GET['blog']) OR isset($_GET['bloguid'])){ ?> style="display:none;" <?php } ?> class="btn btn-primary">Post New Blog</a> <br> <br>
  <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th width="100">#</th>
                                    <th>Blog Title</th>
                                    <th>from</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="catres">
                                <?php
                                $i = 0;
                                $stmt = $admin -> ret("SELECT * FROM `blog` ORDER BY `b_id` DESC");
                                while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
                             
                                ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td><?= $row['b_title'] ?></td>
                                    <td><?= $row['from'] ?></td>
                                    <td><?= $row['b_post_date'] ?></td>
                                    <td> 
                                    <a href="blog.php?bloguid=<?= $row['b_id']?>" class="btn btn-info"><i class="fa fa-level-up"></i></a>
                                   <a href="../Controller/delete.php?deleteblog=<?= $row['b_id']?>" class="btn btn-danger"><i class="fa fa-eraser"></i></a>
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









  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
        placeholder: 'Enter Blog ex.you can Insert, Image, Link,',
       tabsize: 2,
       height: 350
        });
    });
  </script>



                                </div>
                            </div>
                        </div>
                     
                    </div>

                

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
        <?php include 'include/footer.php'; ?>