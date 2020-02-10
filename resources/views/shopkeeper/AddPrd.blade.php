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
          <h4 class="modal-title" id="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Item Name" id="ItemName" name="ItemName">
                    </div>
                    <div class="col-sm-4">
                        <select value="">
                            <option value="">Food</option>
                            <option value="">Grocery</option>
                            <option value="">Kryana</option>
                            <option value="">Make-up</option>
                            <option value="">Vegetables</option>
                            <option value="">Fruits</option>
                        </select>
                    </div>

                    <div class="col-sm-4">

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

});
</script>
@endsection