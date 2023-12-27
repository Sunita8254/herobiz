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
              $query = "SELECT * FROM hero WHERE id=$id";
              $result = mysqli_query($con, $query);
              $data = $result->fetch_assoc();
            }

            if (isset($_POST['submit'])) {
              $title = $_POST['title'];
              $description = $_POST['description'];
              $video = $_POST['video'];

              if ($title != "" && $description != "" && $video != "") {

                $insert = "UPDATE hero SET title='$title', description='$description', video='$video' WHERE id=$id ";

                $result =  mysqli_query($con, $insert);
                if ($result) {
            ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data is added</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                  // echo Header("Refresh:2; URL=index.php");
                  echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";
                } else {
                ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data is not added</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                  echo Header("Refresh:2");
                }
              } else {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>All fields are required</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                echo Header("Refresh:2");
              }
            }

            ?>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
              <div class="col-6">
                <label for="inputNanme4" class="form-label">title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $data['title']; ?>" id="inputNanme4">
              </div>
              <div class="col-6">
                <label for="inputEmail4" class="form-label">description</label>
                <input type="text" name="description" class="form-control" value="<?php echo $data['description']; ?>" id="inputEmail4">
              </div>
              <!-- model -->
              <div class="col-6">
                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <style>
                            [type=radio]:checked+img {
                              outline: 2px solid #f00;
                            }
                          </style>

                          <?php
                          $select = "SELECT *FROM filemanagers";
                          $result = mysqli_query($con, $select);
                          $i = 1;
                          while ($data = mysqli_fetch_array($result)) {
                          ?>
                            <div class="col-lg-4 col-sm-6 col-12">
                              <label>
                                <input type="radio" name="img_link" value="<?php echo $data['img_link']; ?>" />
                                <img src=" <?php echo "../uploads/" . $data['img_link']; ?>" alt="" height="100px;" width="100px;" style="margin-right:20px;">
                              </label>

                              <p><?php echo $data['type']; ?></p>
                            </div>
                          <?php
                          }
                          mysqli_close($con);
                          ?>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="selectImage()">Save</button>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group col-12 mb-0">
                    <label class="form-label">Gallery Image</label>
                  </div>
                  <div class="input-group mb-3 col-12">
                    <video controls width="100" height="100">
                          <source src="<?php echo '../uploads/'.$data['video']; ?>" >
                    </video>
                    <input id="sliderbox" type="text" class="form-control" name="video" readonly>
                    <div class="input-group-append">
                      <button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Choose Image
                      </button>
                    </div>
                  </div>

                </div>
                <!-- model -->

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


<script>
  function selectImage() {
    let x = document.querySelector('input[name=img_link]:checked').value;
    //var selectedOption = $("input:radio[name=filename]:checked").val()
    document.getElementById('sliderbox').value = x; // use .innerHTML if we want data on label
  }
</script>

<?php require("../include/footer.php"); ?>