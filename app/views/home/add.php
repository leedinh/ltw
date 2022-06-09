<?php
  $path = '../app/views/';
	include($path.'header.php');
  include($path.'navbar.php');
?>
<style>
  .table {
    padding-left: 0.1vw;
    padding-right: 0.1vw;
    border: solid 2px black;
  }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary" style="color:white;">
        <h5 class="modal-title ">Add product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="" class="w-100 " style="padding: 2em; ">
          <div class="container d-flex flex-column bd-highlight mb-3">
            <div class="container">
              <div class="row">
              <div class="col-6 col-xs-12 pe-3 pt-4">
                <label for="disabledTextInput" class="form-label">
                    <h5>Manufacturer</h5>
          
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              <div class="col-6 col-xs-12 pe-3 pt-4">
                <label for="disabledTextInput" class="form-label">
                    <h5>Model</h5>
          
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              <div class="col-6 col-xs-12 pe-3 pt-4">
                <label for="disabledTextInput" class="form-label">
                    <h5>Category</h5>
          
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              <div class="col-6 col-xs-12 pe-3 pt-4">
                <label for="disabledTextInput" class="form-label">
                    <h5>Screen size</h5>
          
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              <div class="col-6 col-xs-12 pe-3 pt-4">
                <label for="disabledTextInput" class="form-label">
                    <h5>Screen category</h5>
          
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              <div class="col-6 col-xs-12 pe-3 pt-4">
                <label for="disabledTextInput" class="form-label">
                    <h5>CPU</h5>
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              <div class="col-6  col-xs-12 pe-3 pt-4 ">
                <label for="disabledTextInput" class="form-label">
                    <h5>RAM</h5>
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              <div class="col-6 col-xs-12 pe-3 pt-4 ">
                <label for="disabledTextInput" class="form-label">
                    <h5>Storage</h5>
          
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              <div class="col-6 col-xs-12 pe-3 pt-4 ">
                <label for="disabledTextInput" class="form-label">
                    <h5>GPU</h5>
          
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              <div class="col-6 col-xs-12 pe-3 pt-4 ">
                <label for="disabledTextInput" class="form-label">
                    <h5>OS</h5>
          
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                  
              </div>
              <div class="col-6 col-xs-12 pe-3 pt-4 ">
                <label for="disabledTextInput" class="form-label">
                    <h5>Weight</h5>
          
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              <div class="col-6 col-xs-12 pe-3 pt-4 ">
                <label for="disabledTextInput" class="form-label">
                    <h5>Price</h5>
          
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              <div class="col-6 col-xs-12 pe-3 pt-4 ">
                <label for="disabledTextInput" class="form-label">
                    <h5>Image</h5>
          
                  </label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
              </div>
              
            </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn">Save changes</button>
      </div>
    </div>
  </div>
</div>


      <div class="table-product container p-3">
        <div class="search-bar d-flex flex-row p-3 pb-3">
          <input type="text" class="form-control w-75" placeholder="Search..." style="padding: 10px; border: 1px solid grey;">
          <div class="btn-container w-25 d-flex justify-content-center align-item-center">
            <button type="button" class="btn btn-outline-dark " data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add product
            </button>
          </div>
        </div>
        <table class="table mt-">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Manufacturer</th>
              <th scope="col">Model</th>
              <th scope="col">Category</th>
              <th scope="col">Screen size</th>
              <th scope="col">Screen category</th>
              <th scope="col">CPU</th>
              <th scope="col">RAM</th>
              <th scope="col">Storage</th>
              <th scope="col">GPU</th>
              <th scope="col">OS</th>
              <th scope="col">Weight</th>
              <th scope="col">Price</th>
            </tr>
          </thead>
          <tbody>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            
            <?php 
            foreach ($data['product'] as $item){
            echo '<tr>
              <th scope="row">'.$item->pid.'</th>
              <td>'.$item->manufacturer.'</td>
              <td>'.$item->model.'</td>
              <td>'.$item->category.'</td>
              <td>'.$item->screensize.'</td>
              <td>'.$item->screen.'</td>
              <td>'.$item->cpu.'</td>
              <td>'.$item->ram.'</td>
              <td>'.$item->storage.'</td>
              <td>'.$item->gpu.'</td>
              <td>'.$item->os.'</td>
              <td>'.$item->weight.'</td>
              <td>'.$item->price.'</td>
              <td>
                <a href="/home/deleteProduct/'.$item->pid.' "<button class="btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                  </svg>
                </button>
              </a>
              </td>
            </tr>';
            }
            ?>
          </tbody>
        </table>
        <div aria-label="Page navigation">
                <ul class="pagination justify-content-center mt-3" id="fixme">
                    <button class="btn prev">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                        <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                      </svg>
                    </button>
                  <input type="text" style="width:2em;" id="page" value="1">
                    <button class="btn next">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script type="text/javascript">
  // $('#add-product').click(function(){
  //   $(".form-add").toggleClass("d-none");
  // })
  function addSlice(num){
    return num + colSize;
  }
  
  function subtractSlice(num){
    return num - colSize;
  }

  var $col = $('tbody > tr');
  console.log($col);
  var colSize = 8;
  var numPage = Math.ceil($col.length/colSize);
  var $curr = document.getElementById("page").value;

  document.getElementById("num-of-page").innerHTML = numPage;
  $col.slice(0, colSize).css('display', 'table-row');
  $col.slice(colSize, $col.length).css('display','none');

  var slice = [0, colSize];
  $('.next').click(function(){
    if (slice[1] < $col.length ){ 
      slice = slice.map(addSlice);   
      $curr++;
      document.getElementById("page").value = $curr;
    }
    showSlice(slice);
  });
  
  $('#page').bind("enterKey", function(e){
    if ($(this).val() < 0 || $(this).val() == null){
      $curr = 1
      document.getElementById("page").value = $curr;
    }
    if ($(this).val() <= numPage && $(this).val() > 0){ 
      $curr = $(this).val();
      slice[0] = ($curr - 1)*colSize;
      slice[1] = slice[0] + colSize; 
    }
    showSlice(slice);
  })
  $('#page').keyup(function(e){
    if (e.keyCode == 13){
      console.log("Enter key");
      $(this).trigger("enterKey");
    }
  })
  $('#page').on("focusout",function(){
    if ($(this).val() < 0 || $(this).val() == null){
      $curr = 1
      document.getElementById("page").value = $curr;
    }
    if ($(this).val() <= numPage && $(this).val() > 0){ 
      $curr = $(this).val();
      slice[0] = ($curr - 1)*colSize;
      slice[1] = slice[0] + colSize; 
    }
    showSlice(slice);
  });
  $('.prev').click(function(){
    if (slice[0] > 0 ){ 
      slice = slice.map(subtractSlice); 
      $curr--;
      document.getElementById("page").value = $curr;
    }
    showSlice(slice);
  });
  
  function showSlice(slice){
    $col.css('display','none');
    $col.slice(slice[0], slice[1]).css('display','table-row');
    document.getElementById("num-of-page").innerHTML = numPage;
  }
</script>
<?php
	include($path.'footer.php');
?>