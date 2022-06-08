<?php
  $path = '../app/views/';
  include($path.'header.php');
  include($path.'navbar.php');
?>
<style>
    .img-cart {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    .title-cart {
        margin: 5%;
    }
    .cart-item {
        margin: 25px;
    }
</style>
<!-- CART goes here -->
<div class="container-fluid">
        <h5 class="title-cart">Shopping cart</h5>
        <div class="cart-items">
            <?php 
            var_dump($_SESSION['cart']);
                // foreach ($_SESSION['cart'] as $item)
                // {
                //     echo '
                //         <div class="row cart-item">
                //             <div class="col-4 col-xs-2">
                //                 <a href="/home/item/'.$item->pid.'" class="stretched-link w-50 ">
                //                 <img src="/assets/products/Image3.jpg" class="flex-shrink-0 me-3 img-cart">
                //                 </a>
                //             </div>
                //             <div class="col-8 col-xs-2">
                //                 <a href="/home/item/'.$item->pid.'" style="text-decoration: none;">
                //                     <p class="mt-0" style="color: black; font-weight: 700;">'.$item->fullname.'</p>
                //                     <p class="price" style="color: #8585e0;">
                //                         Price: '.$item->price.'
                //                     </p>
                //                     <p class="quantity" style="color: black;">
                //                         Quantity: temp
                //                     </p>
                //                 </a>
                //             </div>
                //         </div>';
                // }
            ?>
        </div>
        <div class="total d-flex flex-column">
            <div class="total-price d-flex p-3" style="border-top: solid 1px black ; ">
            <div class="me-auto p-2">SUB-TOTAL</div>
            <div class="p-2">Price</div>
        </div>
        <div class="cart-btn d-flex justify-content-evenly p-3">
            <button type="button" class="btn btn-outline-dark p-3 clear-btn" style="width: 35%">
                Cancel
            </button>
            <button type="button" class="btn btn-dark p-3 checkout-btn" style="width: 35%; background-color: black;">
                Checkout
            </button>
        </div>
        </div>
    </div>
</div>
<hr>

<?php
	include($path.'footer.php');
?>