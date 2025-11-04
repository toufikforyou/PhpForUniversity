<?php include "header.php"; ?>



<section class="container" style="padding: 50px">
    <h1 style="text-align:center; padding-bottom: 50px;">Contact Form</h1>
    <form class="row g-3" method="post" action="/action.php">
        <div class="row g-3">
            <div class="col">
                <label for="FName" class="form-label">First Name</label>
                <input id="FName" name="fname" type="text" class="form-control" placeholder="First name"
                    aria-label="First name">
            </div>
            <div class="col">
                <label for="LName" class="form-label">Last Name</label>
                <input id="LName" name="lname" type="text" class="form-control" placeholder="Last name"
                    aria-label="Last name">
            </div>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Full Name</label>

            <input value="<?php 
            if(isset($name)){
                echo $name;
            }
            ?>" type="text" name="fullname" class="form-control" id="inputAddress" placeholder="Full Name">


        </div>
        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</section>



<?php include "footer.php"; ?>