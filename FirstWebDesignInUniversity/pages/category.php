<?php include "header.php"; ?><section class="py-5">
    <div class="container">
        <div class="row"><?php foreach ($categoryBlogs as $categoryBlog) { ?><div class="col-md-4 mb-4">
                    <div class="card"><img src="assets/img/<?php echo $categoryBlog['image']; ?>" alt="" class="" />
                        <div class="card-body">
                            <h4><?php echo $categoryBlog['title']; ?></h4>
                            <p><?php echo substr($categoryBlog['description'], 0, 80) . ' ...'; ?></p><a href="action.php?page=blog-detail&&id=<?php echo $categoryBlog['id']; ?>" class="btn btn-outline-danger">Read More</a>
                        </div>
                    </div>
                </div><?php } ?></div>
    </div>
</section><?php include "footer.php"; ?>