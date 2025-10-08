<?php include "header.php"; ?><section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h1 class="text-center"><?php echo $singleBlog['title']; ?></h1>
                    <hr /><img src="<?php echo $singleBlog['image']; ?>" />
                    <p class="my-4"><?php echo $singleBlog['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section><?php include "footer.php"; ?>