<?php require("../include/header.php"); ?>
<?php require("../include/navbar.php"); ?>
<?php require("../include/sidebar.php"); ?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Features</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Features</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">


      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Features</h5>

            <?php

            if (isset($_POST['submit'])) {
              $icon = $_POST['icon'];
              $title = $_POST['title'];
              $description = $_POST['description'];

              if ($icon != "" && $title != "" && $description != "") {

                $insert = "INSERT INTO features (icon, title, description) 
                VALUES ('$icon','$title','$description')";
                $result =  mysqli_query($con, $insert);
                if ($result) {
            ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>features is added</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                  // echo Header("Refresh:2; URL=index.php");
                  echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";
                } else {
                ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>features is not added</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                  echo "<meta http-equiv=\"refresh\" content=\"1;\">";
                }
              } else {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>All fields are required</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                echo "<meta http-equiv=\"refresh\" content=\"1;\">";
              }
            }

            ?>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
              <div class="col-6">
                <label for="inputNanme4" class="form-label">Icon</label>
                <input type="text" name="icon" class="form-control" id="inputNanme4">
              </div>
              <div class="col-6">
                <label for="inputNanme4" class="form-label">title</label>
                <input type="text" name="title" class="form-control" id="inputNanme4">
              </div>
              <div class="col-6">
                <label for="inputEmail4" class="form-label">description</label>
                <input type="text" name="description" class="form-control" id="inputEmail4">
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


<script>
  function selectImage() {
    let x = document.querySelector('input[name=img_link]:checked').value;
    //var selectedOption = $("input:radio[name=filename]:checked").val()
    document.getElementById('sliderbox').value = x; // use .innerHTML if we want data on label
  }
</script>

<?php require("../include/footer.php"); ?>