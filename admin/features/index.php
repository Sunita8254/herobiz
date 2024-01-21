<?php require("../include/header.php"); ?>
<?php require("../include/navbar.php"); ?>
<?php require("../include/sidebar.php"); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Manage Features</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Manage Features</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Manage Features</h5>
            <a class="btn btn-primary btn-sm " href="create.php" role="button">add </a>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Icon</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $select = "SELECT *FROM features";
                $result = mysqli_query($con, $select);
                $i = 1;
                while ($data = mysqli_fetch_array($result)) {
                ?>
                  <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><i class="<?php echo $data['icon']; ?>"></i></td>
                    <td><?php echo $data['title']; ?></td>
                    <td><?php echo $data['description']; ?></td>
                    <td>
                      <a class="btn btn-primary btn-sm " href="edit.php?id=<?php echo $data['id']; ?>" role="button"> Edit</a>
                      <a class="btn btn-info btn-sm " href="view.php?id=<?php echo $data['id']; ?>" role="button"> View</a>
                      <a class="btn btn-danger btn-sm " onclick="return confirm('Do you want to delete this data??');" href="delete.php?id=<?php echo $data['id']; ?>" role="button"> Delete</a>
                    </td>
                  </tr>
                <?php
                }
                mysqli_close($con);
                ?>

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php require("../include/footer.php"); ?>