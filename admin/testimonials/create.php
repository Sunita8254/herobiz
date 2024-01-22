<?php require("../include/header.php"); ?>
<?php require("../include/navbar.php"); ?>
<?php require("../include/sidebar.php"); ?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Testimonials</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Testimonials</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">


      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Testimonials</h5>


            <?php

            if (isset($_POST['submit'])) {
              $image = $_POST['image'];

              $filename = $_FILES['dataFile']['name'];
              $filesize = $_FILES['dataFile']['size'];

              $explode = explode(".", $filename);
              $firstname = strtolower(@$explode[0]);
              $ext = strtolower(@$explode[1]);

              $str = str_replace(" ", "", $firstname);
              $finalname = $str . time() . "." . $ext;

              echo $filename;

              if ($title != "" && $finalname != "") {
                if ($filesize <= 500000000) {
                  if ($ext == "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "mp4" || $ext == "pdf") {
                    if (move_uploaded_file($_FILES['dataFile']['tmp_name'], "../uploads/" . $finalname)) {
                      $insert = "INSERT INTO filemanagers(title, img_link, type)
                      VALUES('$title', '$finalname', '$ext')";
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
                <label for="inputEmail4" class="form-label">Image</label>
                <input type="file" name="dataFile" class="form-control" id="inputEmail4">
              </div>
              <div class="col-6">
                <label for="inputNanme4" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="inputNanme4">
              </div>
              <div class="col-6">
                <label for="inputNanme4" class="form-label">Position</label>
                <input type="text" name="position" class="form-control" id="inputNanme4">
              </div>
              <div class="col-6">
                <label for="inputNanme4" class="form-label">Message</label>
                <input type="text" name="message" class="form-control" id="inputNanme4">
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