<?php require("../include/header.php"); ?>
<?php require("../include/navbar.php"); ?>
<?php require("../include/sidebar.php"); ?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Edit Feature</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Edit Feature</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">


      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Feature</h5>
            <a class="btn btn-primary btn-sm " href="index.php" role="button"> <</a>

            <?php

            if (isset($_GET['id'])) {

              $id = $_GET['id'];
              $query = "SELECT * FROM features WHERE id=$id";
              $result = mysqli_query($con, $query);
              $data = $result->fetch_assoc();
            }

            if (isset($_POST['submit'])) {
              $icon = $_POST['icon'];
              $title = $_POST['title'];
              $description = $_POST['description'];

              if ($icon!="" && $title != "" && $description != "") {

                $insert = "UPDATE features SET icon= '$icon',title='$title', description='$description' WHERE id=$id ";

                $result =  mysqli_query($con, $insert);
                if ($result) {
            ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Feature is Updated</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                  // echo Header("Refresh:2; URL=index.php");
                  echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";
                } else {
                ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Feature is not Updated</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                  echo header("Refresh:2");
                }
              } else {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>All fields are required</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                echo header("Refresh:2");
              }
            }

            ?>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
              <div class="col-6">
                <label for="inputNanme4" class="form-label">Icon</label>
                <input type="text" readonly name="icon" class="form-control" value="<?php echo $data['icon']; ?>" id="inputNanme4">
              </div>
              <div class="col-6">
                <label for="inputNanme4" class="form-label">title</label>
                <input type="text" name="title" readonly class="form-control" value="<?php echo $data['title']; ?>" id="inputNanme4">
              </div>
              <div class="col-6">
                <label for="inputEmail4" class="form-label">description</label>
                <input type="text" name="description" readonly class="form-control" value="<?php echo $data['description']; ?>" id="inputEmail4">
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