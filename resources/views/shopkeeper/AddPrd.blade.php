@extends('shopkeeper.shop-dash')
@section('AddPrd')
<div class="w3-container ">
  <span id="add_data" class="w3-btn w3-green w3-round-xlarge">+ Add Product</span>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="modal-title">Add Products</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        <div class="alert" id="message" style="display: none"></div>
        <form method="post" action="{{route('insert.prd')}}" id="insert_prd" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-sm-4">
              
              
              <p class="w3-center"><img  id="blah"  class="w3-circle img-thumbnail" style="height:200px;width:200px" alt="Select Product Image">
                
                
                <input type="file"
                onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" name="image" value="">
                
              </div>
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Item Name" id="ItemName" name="ItemName">
                    </div>
                  </div>
                  
                  
                  <div class="col-sm-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="CompanyName" id="company_name" name="company_name">
                    </div>
                    
                    
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <select value="" class="form-control" name="type" id="type">
                        <option value="food">Food</option>
                        <option value="grocery">Grocery</option>
                        <option value="kryana">Kryana</option>
                        <option value="makeup">Make-up</option>
                        <option value="vegetables">Vegetables</option>
                        <option value="fruits">Fruits</option>
                      </select>
                    </div>
                    
                    
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Price (pkr)" id="price" name="price">
                    </div>
                    
                    
                  </div>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Unit</span>
                        </div>
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="qty">
                        <div class="input-group-append">
                          <select class="form-control w3-green" name="unit" id="unit">
                            <option value="litter">litter</option>
                            <option value="kg">kg</option>
                            <option value="piece">piece</option>
                            
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                  
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="shipping" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Free Shipping</label>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
                <button type="reset">Reset </button>
                <button type="submit" name="add" id="add" value="add" class="w3-btn w3-green">+ Add</button>
              </div>
            </div>
            
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function(){
  $('#add_data').click(function(){
  $('#myModal').modal('show');
  $('#PrdForm')[0].reset();
  $('#form_output').html('');
  $('.modal-title').text('Add Products');
  
  });


  //add items with ajax
  $('#insert_prd').on('submit', function(event){
              event.preventDefault();
              $.ajax({
              url:"{{ route('insert.prd') }}",
              method:"POST",
              data:new FormData(this),
             dataType:'JSON',
              contentType: false,
              cache: false,
              processData: false,
              success:function(data)
              {
                if(data.message){
                  $('#message').css('display', 'block');
                $('#message').html(data.message);
                $('#message').addClass(data.class_name);
               // $('#uploaded_image').html(data.uploaded_image);
                }else{
                  alert('sucesss');
                }
              
                
              }
              })
            });
  });
  </script>
  @endsection