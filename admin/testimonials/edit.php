<?php require("../include/header.php"); ?>
<?php require("../include/navbar.php"); ?>
<?php require("../include/sidebar.php"); ?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Layouts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">


      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Vertical Form</h5>


            <?php
            if (isset($_GET['id'])) {

              $id = $_GET['id'];
              $query = "SELECT * FROM filemanagers WHERE id=$id";
              $result = mysqli_query($con, $query);
              $data = $result->fetch_assoc();
            }

            if (isset($_POST['submit'])) {
              $title = $_POST['title'];

              $filename = $_FILES['dataFile']['name'];
              $filesize = $_FILES['dataFile']['size'];

              if ($title != "" && $filename == "") {
                $querry = "UPDATE  filemanagers  SET  title='$title' WHERE id=$id";

                $result = mysqli_query($con, $querry);
                if ($result) {
                  echo "You title is updated.";
                  echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";

                } else
                  echo "not 1st";
              }

              if ($title != "" && $filename != "") {
                if ($filesize <= 2000000) {
                  $explode = explode(".", $filename);
                  $firstname = strtolower(@$explode[0]);
                  $ext = strtolower(@$explode[1]);

                  $str = str_replace(" ", "", $firstname);
                  $finalname = $str . time() . "." . $ext;
                  $targrt_file = '../uploads/' . $finalname;
                  if ($ext == "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "mp4" || $ext == "pdf") {


                    $oldfilelink = $data['img_link']; //file link from database
                    $finallink = '../uploads/' . $oldfilelink;
                    unlink($finallink);

                    if (move_uploaded_file($_FILES['dataFile']['tmp_name'], "../uploads/" . $targrt_file)) {
                      $insert = "UPDATE filemanagers SET title='$title', img_link='$finalname' WHERE id=$id ";
                      $result = mysqli_query($con, $insert);
                      if ($result) {
                        echo "File is inserted";
                        echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";

                      } else {
                        echo "File is not inserted";
                      }
                    } else {
                      echo "file is not uploaded";
                    }
                  } else {
                    echo "file extension does not match";
                  }
                } else {
                  echo "File size must be lessthan 3 MB";
                }
              } else {
                echo "Title and image is required";
              }
            }
            mysqli_close($con);

            ?>

          <!-- Vertical Form -->
          <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
              <div class="col-6">
                <label for="inputNanme4" class="form-label">Title</label>
                <input type="text" name="title" value="<?php echo $data['title'] ?>" class="form-control" id="inputNanme4">
              </div>
              <div class="col-6">
                <label for="inputEmail4" class="form-label">Image</label>
                <img src="<?php echo '../uploads/' . $data['img_link'] ?>" alt="" width="100" height="100">
                <input type="file" name="dataFile" class="form-control" id="inputEmail4">
              </div>
              <div class="col-6 ">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>



      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php require("../include/footer.php"); ?>