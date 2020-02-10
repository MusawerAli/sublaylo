@extends('admin.admin-master')

@section('AddShops')

<section>

  <div class="w3-container">
    <header class="w3-container" style="padding-top:22px">
        <h5 ><b class="w3-border-bottom"><i class="fa fa-dashboard"></i> ShopKeepers Detail </b> </h5>
        <button class="w3-btn w3-green w3-border w3-border-green w3-round-xlarge" id="add_data">+ Add ShopKeeper</button>
      </header>
      <div class="w3-center" id="form_output"></div>
<br>
    
      <table class="w3-table-all w3-hoverable" id="table">
        
        <thead>
          <tr class="w3-light-grey">
          
            <th>Name</th>
            <th>Email</th>
            <th>Contact#</th>
            <th>BusinName</th>
            <th>BusinType</th>
            <th>Addr</th>
            <th>City</th>
            <th>RegDate</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
       
      </table>
  </div>

</section>



<div id="businModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST"  id="BusinessForm">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   
                </div>
                <div class="modal-body">
                    <h2 class="modal-title w3-center w3-wide">Add Shopkeepers</h2>
                    <br>
                   @csrf

                    <span id="form_output"></span>
                    <div class="row">
                        <div class="col col-md-6 col-lg-6 col-sm-6">
                            <span class="w3-wide">Personal Detail</span>
                            <div class="form-group">
                                
                                <input type="text" class="form-control" name="name" placeholder="Full Name" id="name">
                              </div>

                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="email" placeholder="Email#" id="email">
                                <span id="error_email"></span>
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="address" placeholder="Personal Address" id="email">
                              </div>
                              <div class="form-group">
                                
                                <input type="password" class="form-control" name="password" placeholder="*********" id="password">
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="contact" placeholder="Contact #" id="contact">
                              </div>
                              
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="city" placeholder="city#" id="city">
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="state" placeholder="state" value="punjab" id="state">
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="country" placeholder="country" readonly readonly value="pakistan" id="country">
                              </div>
                        </div>
                        <div class="col col-md-6 col-lg-6 col-sm-6">
                            <span class="w3-wide">Business Detail</span>
                            <div class="form-group">
                                
                                <input type="text" class="form-control" name="BusinessName" placeholder="Business Name" id="busin_name">
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="BusinessContact" placeholder="Business Contact#" id="busin_contact">
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="BusinessAddress" placeholder="Business Address 1" id="address">
                              </div>

                              <div class="form-group">
                                <label >Business Type</label>
                                <select class="form-control" name="BusinessType" id="BusinessType">
                                  <option>Krayana</option>
                                  <option>Grocery</option>
                                
                                </select>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="button_action" id="button_action" value="insert" />
                    <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>       
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />

<script type="text/javascript">

$(document).ready(function(){

  $('#table').DataTable({
        "processing": true,
        "serverSide": true,
        responsive: true,
    "scrollY": 500,
    "scrollCollapse": true,
    "jQueryUI": true,
        "ajax": "{{route('ShopskeeperDetail')}}",
        columns: [
                  {
                    data: 'name',
                    name: 'name'
                  },
                  {
                    data: 'email',
                    name: 'email'
                  },
                  {
                    data: 'contact',
                    name: 'contact'
                  },
                  {
                    data: 'BusinessName',
                    name: 'BusinessName'
                  },
                  {
                    data: 'BusinessType',
                    name: 'BusinessType'
                  },
                  {
                    data: 'BusinessAddress',
                    name: 'BusinessAddress'
                  },
                  {
                    data: 'city',
                    name: 'city'
                  },
                  {
                    data: 'created_at',
                    name: 'created_at'
                  }, 
                  {
                    data: 'status',
                    name: 'status',
                    orderable:false,
                  },
                 
                 
                  { 
                    "data": "action", 
                    orderable:false, 
                    searchable: false
                  }
                  ]
     });


    $('#add_data').click(function(){
        $('#businModal').modal('show');
        $('#BusinessForm')[0].reset();
        $('#form_output').html('');
        $('#button_action').val('insert');
        $('#action').val('Add');
});

          //Verify Email
    $('#email').blur(function(){
               var error_email = '';
               var email = $('#email').val();
              // var contact = $('#contact').val();
               var _token = $('input[name="_token"]').val();
               var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                if(!filter.test(email)){
                    $('#error_email').html('<label class="text-danger w3-wide">Email not Valid</label>');
                    $('#email').addClass('w3-red');
                    $('#submit').attr('disabled','disabled');

                }else{
                        $.ajax({
                            url:"{{route('Check.Email')}}",
                            method:"POST",
                            data:{email:email,_token:_token},
                            success:function(result){
                               
                                if(result==0){
                                    $('#error_email').html('<span class="text-success fa fa-check"> Email Available</span>');
                                    $('#email').removeClass('w3-red');
                                    $('#email').addClass('w3-green');
                                    $('#action').attr('disabled',false);
                                }

                                else{
                                    $('#error_email').html('<span class="w3-text-red w3-yellow fa fa-close"> This Email already taken.</span>');
                                    
                                    $('#action').attr('disabled',true);
                                }
                            }
                        });
                }
  });


            //Add Shopskeeper

    $('#BusinessForm').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url:"{{route('AddBusiness')}}",
            method:"POST",
            data:form_data,
            dataType:"json",
            success:function(data)
            {
            
               
                if(data.error.length > 0)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                    }
                    $('#form_output').html(error_html);
                }
                else
                {
                    $('#form_output').html(data.success);
                    $('#BusinessForm')[0].reset();
                    $('#action').val('Add');
                    $('.modal-title').text('Add Data');
                    $('#button_action').val('insert');
                    //$('#student_table').DataTable().ajax.reload();
                }
            }
        })
    });


    
    $(document).on('click', '.status', function(){
        var id = $(this).attr("id");
        var value = $(this).attr("value");
       var name = $(this).attr("secure");
        $('#form_output').html('');
        $.ajax({
            url:"{{route('status')}}",
            method:'get',
            data:{id:id,value:value,name:name},
            success:function(data)
            {
              $('#form_output').html("<span class='alert alert-success fa fa-check'>"+data+"</span>");
              $('#table').DataTable().ajax.reload();

            }
        })
    });

});
</script>

@endsection