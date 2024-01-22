<?php require("../include/header.php"); ?>
<?php require("../include/navbar.php"); ?>
<?php require("../include/sidebar.php"); ?>



<main id="main" class="main">

    <div class="pagetitle">
        <h1>Documentation</h1>
        
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">


            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Documentaion for Settings</h5>

                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo et fugit quia animi maiores quidem ut dolore enim alias corrupti delectus, soluta odio nemo, possimus temporibus doloremque sed necessitatibus quod!</p>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Documentaion for Settings</h5>

                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo et fugit quia animi maiores quidem ut dolore enim alias corrupti delectus, soluta odio nemo, possimus temporibus doloremque sed necessitatibus quod!</p>

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