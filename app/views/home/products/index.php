
  <link rel="stylesheet" href="/css/products.css">
<?php
  $path = '../app/views/';
	include($path.'header.php');
  include($path.'navbar.php');
?>
  <div class="container">
    <h3 class="h3">Products Grid</h3>
    <div class="row">
        <?php
          foreach($data['product'] as $item){
            echo '<div class="col-md-4 col-sm-2 mt-3">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="/home/item/' . $item->pid .'">
                        <img class="pic-1" src="/assets/products/Image3.jpg">
                        <img class="pic-2" src="/assets/products/Image3_1.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title">
                    <a href="#">
                        '.$item->manufacturer.' '.$item->model.' '.$item->category.' 
                    </a>
                    </h3>
                    <div class="price">
                       '.$item->price.'
                        <span>$16.00</span>
                    </div> 
                    <btn type="button" class="add-to-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                    </btn>
                    <btn type="button" class="add-to-cart">Details</btn>
        
                </div>
            </div>
        </div>';
            
          }
        ?>
    </div>
</div>
<div class="position-fixed bottom-0 end-0 m-3">
    <button type="button" class="btn btn-outline-dark rounded-pill p-3" data-bs-toggle="offcanvas" data-bs-target="#cart" aria-controls="cart">  
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-dark">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>
    </button>
<div class="offcanvas offcanvas-end" tabindex="-1" id="cart" aria-labelledby="cartLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="cartLabel">Cart</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  </div>
</div>
</div>
<?php
	// include($path.'footer.php');
?>