<!-- <link rel="stylesheet" href="/css/products.css"> -->
<?php
$path = '../app/views/';
include($path . 'header.php');
include($path . 'navbar.php');
?>
<style>
  span .product-image {
    display: inline-block;
    width: 75px;
    height: 50px;
    padding-right: 10px;
  }
    span img {
      width: 60px;
      height: 50px;
      transition: all 0.5s linear;
    }


  .col-2 {
    padding-top: 170px;
    padding-right: 120px;
  }

  img {
    max-width: 100%;
    max-height: 100%;
    display: block;
    /* remove extra space below image */
  }

  .carousel {
    width: 10vw;
    height: auto;
    position: fixed;
  }

  .brands {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .price {
    color: #808080;
  }

  .control {
    display: flex;
    justify-content: center;
  }

  .brands .box {
    width: 10%;
    height: 10%;
  }

  .brands .box-btn {
    width: 6vw;
    height: 6vw;
  }

  .bg-opacity {
    background: rgba(255, 255, 255, 0.3);
    border-radius: 25px;
  }

  .brand-inner {
    display: flex;
    position: relative;
    justify-content: center;
  }

  .title a {
    text-decoration: none;
    font-weight: 600;
  }

  @keyframes slideUp {
    0% {
      transform: translateY(500px);
    }

    100% {
      transform: translateY(0);
    }
  }

  #cate {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    font-weight: 300px;
  }

  .title {
    height: 30%;
    padding-top: 1.5em;
    margin-bottom: 1.5em;
  }

  .product-grid4 {
    height: 10vw;
  }

  .product-grid4 .price {
    padding-top: 1em;
    font-weight: 400;
  }

  #item {
    min-height: 30rem;
  }

  .product-content {
    height: 90%;
  }
</style>
<div class="test container">
  <!-- <img alt="LENOVO LEGION 5: Best Choice tầm giá 27 triệu!" src="https://media-api-beta.thinkpro.vn/media/core/banners/2022/5/12/Bản sao legion 5 866-374.jpg" class="blur-up h-full w-full object-cover t-img"> -->
  <div class="row">
    <div class="col-2">
      <div id="cate" class="row">Category</div>
      <div class="row">
        <div class="brands mb-3">
          <div class="product-carousel ">
            <div class="brand-inner d-flex flex-column" id="brand-inner">
              <a href="/home/products/Asus" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/Asus.png" alt="">
              </a>
              <a href="/home/products/Lenovo" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/lenovo.png" alt="">
              </a>
              <a href="/home/products/HP" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/hp.png" alt="">
              </a>
              <a href="/home/products/Dell" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/dell.png" alt="">
              </a>
              <a href="/home/products/Google" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/Google.png" alt="">
              </a>
              <a href="/home/products/Acer" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/acer.png" alt="">
              </a>
              <a href="/home/products/LG" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/lg.svg" alt="">
              </a>
              <a href="/home/products/Samsung" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/samsung.png" alt="">
              </a>
              <a href="/home/products/Huawei" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/huawei.png" alt="">
              </a>
              <a href="/home/products/Microsoft" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/microsoft.png" alt="">
              </a>
              <a href="/home/products/MSI" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/msi.png" alt="">
              </a>
              <a href="/home/products/Razer" type="button" class="btn box-btn border border-outline-dark p-3 m-3 d-flex align-items-center">
                <img class="" src="/assets/logo/razer.svg" alt="">
              </a>
            </div>
            <div class="control">
              <button class="btn btn-sm border border-outline-dark prev-brand">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg>
              </button>
              <button class="btn btn-sm border border-outline-dark next-brand">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-10 px-3 bg-opacity">
      <form class="show-product px-4 d-flex flex-column w-50">
        <div id="search-bar" class="search-bar d-flex flex-row">
          <input type="text" class="form-control border border-dark m-3" id="search-input" placeholder="Search...">
          <button type="button" class="btn" id="search-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </button>
        </div>
        <div class="result position-relative" name="result" id="result"></div>
      </form>
      <div class="row" id="wrap">
        <?php
        foreach ($data['product'] as $item) {
          echo '
                    <div class="col-md-4 col-sm-6 col-xs-12 item mt-3" id="item">
                    <div class="product-grid4 w-100 h-100 border-bottom border-dark p-3"">
                        <div class="product-image4">
                            <a href="/home/item/' . $item->pid . '">
                                <img class="pic-1 w-100" src="/assets/products/Image3.jpg">
                                <!-- <img class="pic-2 w-100" src="/assets/products/Image3_1.jpg"> -->
                            </a>
                        </div>
                        <div class="product-content" style="padding-bottom: 4rem;">
                            <h5 class="title text-wrap">
                              <a>
                                  ' . $item->fullname . '
                              </a>
                            </h5>
                            <div class="price fw-bold" > &euro;
                               ' . $item->price . '
                            </div> 
                            <div class=" table-btn mt-4 d-flex justify-content-center" >
                                <div class="button w-100 d-flex justify-content-center">
                                <btn data-pid=' . $item->pid . ' type="button" class="btn cartbtn btn-outline-dark w-75">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                                </btn>
                                
                                </div>
                                <div class="button w-100 d-flex justify-content-center">
                                <a href="/home/item/' . $item->pid . '" class="btn btn-outline-dark w-75">Details
                                 </a>
                                  </div>
                                  
                             </div> 
                             
                        </div>
                    </div>
                    
                </div>';
        }
        ?>
      </div>
      <div aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-3 p-3" id="fixme">
          <button class="btn prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
              <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
            </svg>
          </button>
          <input type="text" style="width:2em; text-align: center;" id="page" value="1">
          <button class="btn next">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
              <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
            </svg>
          </button>
        </ul>
        <div class="container d-flex justify-content-center">
          <p>Total:&nbsp; </p>
          <p id="num-of-page">
          </p>
        </div>
      </div>

    </div>
  </div>
</div>
<hr>
<div class="position-fixed bottom-0 end-0 m-3">
  <button id="cart-show" type="button" class="btn btn-outline-dark rounded-pill p-3" data-bs-toggle="offcanvas" data-bs-target="#cart" aria-controls="cart">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </svg>
    <span id="numi" class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-dark">
      <?php
      if (isset($_SESSION['cart']))
        echo array_sum($_SESSION['cart']);
      else
        echo 0;
      ?>
    </span>
  </button>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="cart" aria-labelledby="cartLabel">
    <div class="offcanvas-header" >
      <h5 class="offcanvas-title align-middle" id="cartLabel">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-heart-fill mx-3" viewBox="0 0 16 16">
  <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5ZM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1Zm0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
</svg>Cart</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      
    </div>
    <div class="offcanvas-footer d-flex flex-column" style="z-index: 1">
      <div class="total-price d-flex p-3" style="border-top: solid 1px black ; ">
        <div class="me-auto p-2">SUB-TOTAL</div>
        <div class="p-2">Price</div>
      </div>
      <div class="cart-btn d-flex justify-content-evenly p-3">
        <button type="button" class="btn btn-outline-dark p-3 clear-btn" style="width: 35%">
            Clear
        </button>
        <button type="button" class="btn btn-dark p-3 checkout-btn" style="width: 35%; background-color: black;">
          Checkout
        </button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  var $el = $("#wrap > .item");
  var $curr = document.getElementById("page").value;
  var pageSize = 6;
  var numPage = Math.ceil($el.length / pageSize);



  document.getElementById("num-of-page").innerHTML = numPage;
  $el.slice(0, pageSize).css({
    display: 'block'
  });
  $el.slice(pageSize, $el.length).css({
    display: 'none'
  });

  function addSlice(num) {
    return num + pageSize;
  }

  function subtractSlice(num) {
    return num - pageSize;
  }

  var slice = [0, pageSize];

  $('.next').click(function() {
    if (slice[1] < $el.length) {
      slice = slice.map(addSlice);
      // console.log(slice);
      $curr++;
      document.getElementById("page").value = $curr;
    }
    showSlice(slice);
  });

  $('.cartbtn').click(function() {
    $pid = $(this).data('pid');
    $.ajax({
      url: '/home/cartclick/' + $pid,
      type: 'GET',
      success: function(data) {
        $('#numi').html(data);
      }
    });
  });

  $('#cart-show').click(function() {
    $.ajax({
      url: '/home/cartshow',
      type: 'GET',
      success: function(data) {
        $('.offcanvas-body').html(data);
      }
    });
  });

  $('.prev').click(function() {
    // console.log($curr);
    if (slice[0] > 0) {
      slice = slice.map(subtractSlice);
      $curr--;
      document.getElementById("page").value = $curr;
    }
    showSlice(slice);
  })

  $('#page').bind("enterKey", function(e) {
    // console.log($curr);
    if ($(this).val() < 0 || $(this).val() == null) {
      $curr = 1
      document.getElementById("page").value = $curr;
    }
    if ($(this).val() <= numPage && $(this).val() > 0) {
      $curr = $(this).val();
      slice[0] = ($curr - 1) * pageSize;
      slice[1] = slice[0] + pageSize;
    }
    showSlice(slice);
  })
  $('#page').keyup(function(e) {
    if (e.keyCode == 13) {
      $(this).trigger("enterKey");
    }
  })
  $('#page').on("focusout", function() {
    // console.log($curr);
    if ($(this).val() < 0 || $(this).val() == null) {
      $curr = 1
      document.getElementById("page").value = $curr;
    }
    if ($(this).val() <= numPage && $(this).val() > 0) {
      $curr = $(this).val();
      slice[0] = ($curr - 1) * pageSize;
      slice[1] = slice[0] + pageSize;
    }
    showSlice(slice);
  });

  function showSlice(slice) {
    // console.log($curr);
    $el.css('display', 'none');
    $el.slice(slice[0], slice[1]).css('display', 'block');
  }


  function addPiece(num) {
    return num + brandSize;
  }

  function subtractPiece(num) {
    return num - brandSize;
  }

  var $brand = $('#brand-inner > .btn');
  console.log($brand);
  var brandSize = 4;

  $brand.slice(0, brandSize).addClass('d-flex');
  $brand.slice(0, brandSize).removeClass('d-none');
  $brand.slice(brandSize, $brand.length).addClass('d-none');
  $brand.slice(brandSize, $brand.length).removeClass('d-flex');

  var piece = [0, brandSize];
  $('.next-brand').click(function() {
    if (piece[1] < $brand.length) {
      piece = piece.map(addPiece);
    }
    showPiece(piece);
  });


  $('.prev-brand').click(function() {
    if (piece[0] > 0) {
      piece = piece.map(subtractPiece);
    }
    showPiece(piece);
  });

  function showPiece(piece) {
    $brand.addClass('d-none');
    $brand.removeClass('d-flex');
    $brand.slice(piece[0], piece[1]).addClass('d-flex');
    $brand.slice(piece[0], piece[1]).removeClass('d-none');
  }

  $(document).ready(function() {
    $('#search-input').keyup(function() {
      fetch();
    });
  });

  function fetch() {
    var val = $("#search-input").val();
    console.log(val);
    if (val != "") {
      $.ajax({
        type: "post", //submit method
        url: '/home/search/' + val,
        type: 'post',
        //action on successful post request
        success: function(response) {
          $('.result').html(response);
        },
      })
    } else {
      $('.result').html("");
    }
  }
</script>
<?php
include($path . 'footer.php');
?>