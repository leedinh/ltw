
<?php
  $path = '../app/views/';
  include($path.'header.php');
  include($path.'navbar.php');
  $total = 0;
?>

<style>
.content-wrapper {
	width: 1050px;
	margin: 0 auto;
}
.cart h1 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
}
.cart table {
	width: 100%;
}
 .cart table thead td {
	padding: 30px 0;
	border-bottom: 1px solid #EEEEEE;
}
.cart table thead td:last-child {
	text-align: right;
}
.cart table tbody td {
	padding: 20px 0;
	border-bottom: 1px solid #EEEEEE;
}
.cart table tbody td:last-child {
	text-align: right;
}
.cart table .img {
	width: 80px;
}
.cart table .remove {
	color: #777777;
	font-size: 12px;
	padding-top: 3px;
}
.cart table .remove:hover {
	text-decoration: underline;
}
.cart table .price {
	color: #999999;
}
.cart table a {
	text-decoration: none;
	color: #555555;
}
.cart table input[type="number"] {
	width: 68px;
	padding: 10px;
	border: 1px solid #ccc;
	color: #555555;
	border-radius: 5px;
}
.cart .subtotal {
	text-align: right;
	padding: 40px 0;
}
.cart .subtotal .text {
	padding-right: 40px;
	font-size: 18px;
}
 .cart .subtotal .price {
	font-size: 18px;
	color: #999999;
}
 .cart .buttons {
	text-align: right;
	padding-bottom: 40px;
}
 .cart .buttons a {
	margin-left: 5px;
	padding: 12px 20px;
	border: 0;
	background: #4e5c70;
	color: #FFFFFF;
	font-size: 14px;
	font-weight: bold;
	cursor: pointer;
	border-radius: 5px;
}
.cart .buttons a:hover {
	background: #434f61;
}
.placeorder h1 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
}
 .placeorder p {
	text-align: center;
}

</style>
<div class="cart content-wrapper">
    <h1>Shopping Cart</h1>
    <form action="index.php?page=cart" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (!isset($_SESSION['cart'])): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                </tr>
                <?php else: ?>
                <?php foreach ($_SESSION['cart'] as $key => $value): 
                    $product = $this->model('Product');
                    $product= $product->find($key);
                    $total += (float)$product->price * $value;
                    ?>
                <tr>
                    <td class="img">
                        <a href="/home/item/<?=$product->pid?>">
                            <img src="/assets/products/Image3.jpg" width="50" height="50" alt="<?=$product->fullname?>">
                        </a>
                    </td>
                    <td>
                        <a href="/home/item/<?=$product->pid?>"><?=$product->fullname?></a>
                        <br>
                        <a href="/home/deleteCart/<?=$product->pid?>" class="remove">Remove</a>
                    </td>
                    <td class="price">&euro;<?=$product->price?></td>
                    <td class="quantity">
                        <input type="number" name="quantity-<?=$product->pid?>" value="<?=$value?>" min="1" max="100" placeholder="Quantity" required>
                    </td>
                    <td class="price">&euro;<?=(float)$product->price * $value?>,00</td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Total</span>
            <span class="price">&euro;<?=$total?>,00</span>
        </div>
        <div class="buttons">
            <a> Update </a>
            <a> Place Order </a>
        </div>
    </form>
</div>


<?php
	include($path.'footer.php');
?>