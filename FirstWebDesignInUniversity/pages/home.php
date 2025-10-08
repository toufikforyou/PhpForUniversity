<?php include "header.php"; ?><div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
    <div class="carousel-inner">
        <div class="carousel-item active"><img src="assets/img/2.jpg" alt="" class="w-100" />
            <div class="carousel-caption">
                <h1>This is a caption heading</h1>
                <p>Lorem ipsum dolor sit amet, consecteturadipisicing elit. Alias architecto consequatur dolorem eosfacilis fugit, in iusto laboriosam nesciunt nihil nobispossimus, saepe sapiente sit tenetur vero voluptatum.Harum, impedit.</p><a href="" class="btn btn-info">ReadMore</a>
            </div>
        </div>
        <div class="carousel-item"><img src="assets/img/3.jpg" alt="" class="w-100" />
            <div class="carousel-caption">
                <h1>This is a caption heading</h1>
                <p>Lorem ipsum dolor sit amet, consecteturadipisicing elit. Alias architecto consequatur dolorem eosfacilis fugit, in iusto laboriosam nesciunt nihil nobispossimus, saepe sapiente sit tenetur vero voluptatum.Harum, impedit.</p><a href="" class="btn btn-info">ReadMore</a>
            </div>
        </div>
        <div class="carousel-item"><img src="assets/img/4.jpg" alt="" class="w-100" />
            <div class="carousel-caption">
                <h1>This is a caption heading</h1>
                <p>Lorem ipsum dolor sit amet, consecteturadipisicing elit. Alias architecto consequatur dolorem eosfacilis fugit, in iusto laboriosam nesciunt nihil nobis possimus, saepe sapiente sit tenetur vero voluptatum.Harum, impedit.</p><a href="" class="btn btn-info">ReadMore</a>
            </div>
        </div>
    </div><a href="#slider" class="carousel-control-prev" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></a><a href="#slider" class="carousel-control-next" data-bs-slide="next"><span class="carousel-control-next-icon"></span></a>
</div>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body h-100">
                    <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit. Culpa dicta doloribuseligendi ipsam natus officia optio quam quibusdam.Accusantium at dolores eaque laboriosam neque quidemreprehenderit repudiandae ut velit voluptatibus?</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body h-100">
                    <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit. Minima odit quod recusandaereiciendis sit. Aspernatur eius ipsam iusto minus modioptio provident quisquam sunt? Ab ad consectetur esse magnitemporibus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body h-100">
                    <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit. Doloremque excepturi omnisratione sint voluptate. Animi aperiam distinctio et facerehic natus quaerat unde velit! Adipisci et impeditnecessitatibus sunt tempora?</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light py-5">
    <div class="container">
        <div class="row"><?php foreach ($blogs as $blog) { ?><div class="col-md-4">
                    <div class="card h-100"><img src="<?php echo $blog['image']; ?>" alt="" class="" />
                        <div class="card-body">
                            <h4><?php echo $blog['title']; ?></h4>
                            <p><?php echo substr($blog['description'], 0, 80) . ' ...' ?></p><a href="" class="btn btn-outline-danger">Read More</a>
                        </div>
                    </div>
                </div><?php } ?></div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-warning mb-4">
                    <div class="row">
                        <div class="col-4"><img src="https://placehold.co/600x400" alt="" class="w-100 h-100" /></div>
                        <div class="col-8">
                            <div class="card-body">
                                <p>This is heading of news...</p><a href="" class="btn btn-outline-danger">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-warning">
                    <div class="row">
                        <div class="col-4"><img src="https://placehold.co/600x400" alt="" class="w-100 h-100" /></div>
                        <div class="col-8">
                            <div class="card-body">
                                <p>This is heading of news...</p><a href="" class="btn btn-outline-danger">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-warning">
                    <div class="row">
                        <div class="col-4"><img src="https://placehold.co/600x400" alt="" class="w-100 h-100" /></div>
                        <div class="col-8">
                            <div class="card-body">
                                <p>This is heading of news...</p><a href="" class="btn btn-outline-danger">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-warning">
                    <div class="row">
                        <div class="col-4"><img src="https://placehold.co/600x400" alt="" class="w-100 h-100" /></div>
                        <div class="col-8">
                            <div class="card-body">
                                <p>This is heading of news...</p><a href="" class="btn btn-outline-danger">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php include "footer.php"; ?>