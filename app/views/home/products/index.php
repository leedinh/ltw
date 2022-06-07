<link rel="stylesheet" href="/css/products.css">
<?php
$path = '../app/views/';
include($path . 'header.php');
include($path . 'navbar.php');
?>
<style>
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
</style>
<div class="">
  <!-- <img alt="LENOVO LEGION 5: Best Choice tầm giá 27 triệu!" src="https://media-api-beta.thinkpro.vn/media/core/banners/2022/5/12/Bản sao legion 5 866-374.jpg" class="blur-up h-full w-full object-cover t-img"> -->
  <div class="row">
    <div class="col-2">
      <div class="container-fluid brands mb-3">
        <div class="product-carousel position-fixed top-50 start-25 translate-middle-y">
          <div class="control">
            <button class="btn btn-sm border border-outline-dark next-brand">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z" />
              </svg>
            </button>
          </div>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-10 px-3 bg-opacity">
      <div class="show-product px-4">
      <form class="show-product px-4 d-flex flex-column w-50">
              <div id="search-bar" class="search-bar d-flex flex-row">
                <input type="text" class="form-control border border-dark m-3" id="search-input" placeholder="Search...">
                <button class="button" class="btn" id="search-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                </button>
              </div>
              <div class="result position-relative" name="result" id="result"></div>
            </form>
            <div class="row" id="wrap">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <div class="row" id="wrap">

          <?php
          foreach ($data['product'] as $item) {
            echo '
                    <div class="col-md-4 col-sm-6 col-xs-12 item" style="margin-top: 2em;">
                    <div class="product-grid4 h-100 w-75 border" style="border-color: black;">
                        <div class="product-image4">
                            <a href="/home/item/' . $item->pid . '">
                                <img class="pic-1 w-100" src="/assets/products/Image3.jpg">
                                <img class="pic-2 w-100" src="/assets/products/Image3_1.jpg">
                            </a>
                            <span class="product-new-label">New</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content container">
                            <h3 class="title" >
                            <a >
                                ' . $item->manufacturer . ' ' . $item->model . '
                            </a>
                            </h3>
                            <div class="price container" >
                               ' . $item->price . '
                            </div> 
                            <div class="container table-btn" >
                              <div class="row" >
                                <div class="col">
                                
                                <btn data-pid=' . $item->pid . ' type="button" class="cartbtn btn btn-outline-dark w-100 h-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                                </btn>
                                
                                </div>
                                <div class="col">
                                <a href="/home/item/' . $item->pid . '">
                                <btn type="button" class="btn btn-outline-dark w-100 h-100">Details</btn>
                                 </a>
                                  </div>
                                  </div>
                                  
                             </div> 
                             
                        </div>
                    </div>
                    
                </div>';
          }
          ?>
        </div>
        <div aria-label="Page navigation">
          <ul class="pagination justify-content-center mt-3" id="fixme">
            <button class="btn prev">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
              </svg>
            </button>
            <input type="text" style="width:2em;" id="page" value="1">
            <button class="btn next">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
              </svg>
            </button>
          </ul>
          <div id="num-of-page">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="position-fixed bottom-0 end-0 m-3">
  <button type="button" class="btn btn-outline-dark rounded-pill p-3" data-bs-toggle="offcanvas" data-bs-target="#cart" aria-controls="cart">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </svg>
    <span id="numi" class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-dark">
      0
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


  $('.prev').click(function() {
    // console.log($curr);
    if (slice[0] > 0) {
      slice = slice.map(subtractSlice);
      $curr--;
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
    document.getElementById("num-of-page").innerHTML = numPage;
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

  $(document).ready(function(){
  $('#search-input').keyup(function(){
    fetch();
  });
});
function fetch() {
  var val = $("#search-input").val();
  console.log(val);
  if (val != ""){
  $.ajax({
    type:"post",    //submit method
    url: '/home/search/'+val,
    type: 'post',
    //action on successful post request
    success: function(response)
    {
      $('.result').html(response);
    },
  })}
  else{
    $('.result').html("");
  }
}
</script>
<?php
include($path . 'footer.php');
?>