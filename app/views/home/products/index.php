
  <link rel="stylesheet" href="/css/products.css">
<?php
  $path = '../app/views/';
	include($path.'header.php');
  include($path.'navbar.php');
?>
<style>
  body {
    top: 10%;
  }
  img{
        max-width: 100%;
        max-height: 100%;
        display: block; /* remove extra space below image */
    }
  .carousel{
    width: 10vw;
    height: auto;
  }
  .brands {
    align-items: center;
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
  .bg-opacity{
    background: rgba(255, 255, 255, 0.3);
    border-radius: 25px;
  }
  .carousel-item {
    animation: slideUp 1.5s ease;
  }
  @keyframes slideUp{
    0% {
      transform: translateY(500px);
    }
    100% {
      transform: translateY(0);
    }
  }
</style>
  <div class="position-relative container w-75">
    <!-- <img alt="LENOVO LEGION 5: Best Choice tầm giá 27 triệu!" src="https://media-api-beta.thinkpro.vn/media/core/banners/2022/5/12/Bản sao legion 5 866-374.jpg" class="blur-up h-full w-full object-cover t-img"> -->
    <div class="row">
        <div class="col-4">
          <div class="container brands d-flex mb-3">
            <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2 product-carousel">
              <div class="control">
                <button class="btn btn-sm border border-outline-dark" data-bs-target="#carousel-example-multi" data-bs-slide="prev">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                    <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                  </svg>
                </button>
              </div>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active mx-auto">
                    <a href="/home/products/Asus" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                      <img class="" src="/assets/logo/Asus.png" alt="">
                    </a>
                    <a href="/home/products/Lenovo" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                      <img class="" src="/assets/logo/lenovo.png" alt="">
                    </buttoalt>
                    <a href="/home/products/HP" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                      <img class="" src="/assets/logo/hp.png" alt="">
                    </a>
                    <a href="/home/products/Dell" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                    <img class="" src="/assets/logo/dell.png" alt="">
                  </a>
                </div>
                <div class="carousel-item">
                    <a href="/home/products/Google" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                      <img class="" src="/assets/logo/Google.png" alt="">
                    </a>
                    <a href="/home/products/Acer" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                      <img class="" src="/assets/logo/acer.png" alt="">
                    </a>
                    <a href="/home/products/LG" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                      <img class="" src="/assets/logo/lg.svg" alt="">
                    </a>
                    <a href="/home/products/Samsung" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                    <img class="" src="/assets/logo/samsung.png" alt="">
                  </a>
                </div>
                <div class="carousel-item">
                    <a href="/home/products/Huawei" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                      <img class="" src="/assets/logo/huawei.png" alt="">
                    </a>
                    <a href="/home/products/Microsoft" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                      <img class="" src="/assets/logo/microsoft.png" alt="">
                    </a>
                    <a href="/home/products/MSI" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                      <img class="" src="/assets/logo/msi.png" alt="">
                    </a>
                    <a href="/home/products/Razer" type="button" class="btn box-btn border border-outline-dark p-3 m-3">
                    <img class="" src="/assets/logo/razer.svg" alt="">
                  </a>
                  </div>
                  <!-- <div class="carousel-item ">
                  </div> -->
                </div>
                <div class="control">
                  <button class="btn btn-sm border border-outline-dark" data-bs-target="#carousel-example-multi" data-bs-slide="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                      <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-8 p-3 bg-opacity">
            <form method="POST" id="search-bar" class="search-bar">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search...">
            </form>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <div class="row p-3" id="wrap">
            
              <?php
                foreach($data['product'] as $item){
                  echo '
                  <div class="col-md-4 col-sm-2 mt-3 item" style="height: 35vh;">
                  <div class="product-grid4 h-100">
                      <div class="product-image4">
                          <a href="/home/item/' . $item->pid .'">
                              <img class="pic-1" src="/assets/products/Image3.jpg">
                              <img class="pic-2" src="/assets/products/Image3_1.jpg">
                          </a>
                          <span class="product-new-label">New</span>
                          <span class="product-discount-label">-10%</span>
                      </div>
                      <div class="product-content container">
                          <h3 class="title" style="height: 15%;">
                          <a href="#">
                              '.$item->manufacturer.' '.$item->model.'
                          </a>
                          </h3>
                          <div class="price container" style="height: 5%;">
                             '.$item->price.'
                          </div> 
                          <div class="container table-btn" >
                            <div class="row" >
                              <div class="col">
                              <btn type="button" class="btn btn-outline-dark w-100 h-100">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                              <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                              </svg>
                              </btn>
                              
                              </div>
                              <div class="col">
                              <btn type="button" class="btn btn-outline-dark w-100 h-100">Details</btn>
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
              <ul class="pagination justify-content-center mt-3">
                  <button class="btn prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
  <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
</svg></button>
                <input type="text" style="width:2em;" id="page" value="1">
                  <button class="btn next"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg></button>
              </ul>
              <div id="num-of-page">
              </div>
            </div>
        </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script type="text/javascript">
  var $el = $("#wrap > .item");
  var $curr = document.getElementById("page").value;
  var pageSize = 18;
  var numPage = Math.ceil($el.length/pageSize);
  document.getElementById("num-of-page").innerHTML = numPage;
  $el.slice(0, pageSize).css({display: 'block'});
  $el.slice(pageSize, $el.length).css({display: 'none'});

  function addSlice(num){
    return num + pageSize;
  }

  function subtractSlice(num){
    return num - pageSize;
  }

  var slice = [0, pageSize];
    
    $('.next').click(function(){
    if (slice[1] < $el.length ){ 
      slice = slice.map(addSlice);   
      console.log(slice);
      $curr++;
      document.getElementById("page").value = $curr;
    }
    showSlice(slice);
  });


  $('.prev').click(function(){
    console.log($curr);
    if (slice[0] > 0 ){ 
      slice = slice.map(subtractSlice); 
      $curr--;
      document.getElementById("page").value = $curr;
    }
    showSlice(slice);
  });

  $('#page').bind("enterKey", function(e){
    console.log($curr);
    if ($(this).val() < 0 || $(this).val() == null){
      $curr = 1
      document.getElementById("page").value = $curr;
    }
    if ($(this).val() <= numPage && $(this).val() > 0){ 
      $curr = $(this).val();
      slice[0] = ($curr - 1)*pageSize;
      slice[1] = slice[0] + pageSize; 
    }
    showSlice(slice);
  })
  $('#page').keyup(function(e){
    if (e.keyCode == 13){
      $(this).trigger("enterKey");
    }
  })
  $('#page').on("focusout",function(){
    console.log($curr);
    if ($(this).val() < 0 || $(this).val() == null){
      $curr = 1
      document.getElementById("page").value = $curr;
    }
    if ($(this).val() <= numPage && $(this).val() > 0){ 
      $curr = $(this).val();
      slice[0] = ($curr - 1)*pageSize;
      slice[1] = slice[0] + pageSize; 
    }
    showSlice(slice);
  });
  function showSlice(slice){
    console.log($curr);
    $el.css('display', 'none');
    $el.slice(slice[0], slice[1]).css('display','block');
    document.getElementById("num-of-page").innerHTML = numPage;
  }
</script>
<?php
	include($path.'footer.php');
?>