<?php require("../include/header.php"); ?>
<?php require("../include/navbar.php"); ?>
<?php require("../include/sidebar.php"); ?>
 


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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

              <!-- Vertical Form -->
              <form class="row g-3" method="" action="" enctype="multipart/form-data">
                <div class="col-6">
                  <label for="inputNanme4" class="form-label">Your Name</label>
                  <input type="text" name="" class="form-control" id="inputNanme4">
                </div>
                <div class="col-6">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" name="" class="form-control" id="inputEmail4">
                </div>
                <div class="col-6">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" name="" class="form-control" id="inputPassword4">
                </div>
                <div class="col-6">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" name="" class="form-control" id="inputAddress" placeholder="1234 Main St">
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
 