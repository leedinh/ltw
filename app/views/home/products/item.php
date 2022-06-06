<?php
    $path = '../app/views/';
    include($path.'header.php');
    include($path.'navbar.php');
?>
<style>
    .item-detail{
        border-radius: 25px;
    }
    .item-detail img{
        border-radius: 25px;
    }
    .item-detail .card{
        border-radius: 25px;
    }
</style>
<div class="product-detail container">
    <div class="row g-0 bg-light position-relative p-3 item-detail">
        <div class="col-md-6 mb-md-0 p-md-4">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="/assets/products/Image1_1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/assets/products/Image1_1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/assets/products/Image1_1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="container d-flex flex-row bd-highlight" style="margin-top:2rem;">
                <div class="card me-3">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card ms-3">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-4 ps-md-0">
            <div class="infor ps-4">
                <h1 class="mt-0"><?php echo $data['item']->manufacturer.' '. $data['item']->model ?></h1>
                <h2 class="mt-0">&euro; <?php echo $data['item']->price ?></h2>
                <p>Cau hinh</p>
                <div class="container">
                    <div class="row">
                        <?php
                        echo '<div class="col-6 col-xs-12">
                            <h5>Screen</h5>
                            <p>'.$data['item']->screen.'</p>
                            <p>Size: '.$data['item']->screensize.'</p>
                        </div>
                        <div class="col-6 col-xs-12">
                            <h5>CPU</h5>
                            <p>'.$data['item']->cpu.'</p>
                        </div>
                        <div class="col-6  col-xs-12">
                            <h5>RAM</h5>
                            <p>'.$data['item']->ram.'</p>
                        </div>
                        <div class="col-6 col-xs-12">
                            <h5>Storage</h5>
                            <p>'.$data['item']->storage.'</p>
                        </div>
                        <div class="col-6 col-xs-12">
                            <h5>GPU</h5>
                            <p>'.$data['item']->gpu.'</p>
                        </div>
                        <div class="col-6 col-xs-12">
                            <h5>OS</h5>
                            <p>'.$data['item']->os.'</p>
                        </div>
                        <div class="col-6 col-xs-12">
                            <h5>Weight</h5>
                            <p>'.$data['item']->weight.'</p>
                        </div>'
                        ?>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end pb-4 pe-4">
                    <button class="btn btn-primary bg-primary me-md-2 p-3" type="button">  
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="auto" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
	include($path.'footer.php');
?>