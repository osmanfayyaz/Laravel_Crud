<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud</title>
       <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <!-- Google Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
      <!-- Bootstrap core CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

      <!-- JQuery -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
      <!-- (Optional) Latest compiled and minified JavaScript translation files -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
</head>
    <style>
    .container{
      padding-top:100px;
    }
    /*.modal-dialog{*/
    /*  !* width:50% !important;*/
    /*  max-width:1000px !important; *!*/
    /*  max-height:50% !important;*/
    /*}*/
    .fas.fa-user.prefix.grey-text, .fas.fa-user-friends.prefix.grey-text ,
    .fas.fa-venus.prefix.grey-text,.fa.fa-map-marker.prefix.grey-text, 
    .fa.fa-map-marker-alt.prefix.grey-text, .fas.fa-address-card.prefix.grey-text{
   
     color:purple !important;
}
      .table .container{
        display: flex !important;
      }
    </style>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <a href="#" class="btn btn-info float-right mb-3" data-toggle="modal" data-target="#exampleModal">Add New Student</a>
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Last Name</th>
                      <th>Gender</th>
                      <th>Country</th>
                      <th>City</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                    <tbody>
                    @foreach($cruds as$key=> $crud)
                      <tr>
                        <td>{{++$key}}</td>
                        <td>{{$crud->image}}</td>
                        <td>{{$crud->firstname}}</td>
                        <td>{{$crud->lasttname}}</td>
                        <td>{{$crud->gender}}</td>
                        <td>{{$crud->country}}</td>
                        <td>{{$crud->city}}</td>
                        <td>{{$crud->address}}</td>
                        <td class="container">

                          <a href="" type="button" class="btn btn-success btn-sm mr-2">Show</a>
                          <a href="" type="button" class="btn btn-info btn-sm mr-2">Edit</a>
                          <a href="" type="button" class="btn btn-warning btn-sm mr-2">Delete</a>

                        </td>
                      </tr>
                @endforeach
                    </tbody>
                {{$cruds->links()}}
              </thead>
            </table>

            <!-- Student modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Detail Of Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- <div class="modal-body">
        <form action="" method="post">

          <div class="input-group">
            <div class="input-group-prepend">
                 <span class="input-group-text">Lastname</span>
            </div>
            <input type="text" class="form-control" name="firstname">
            <label data-error="wrong" data-success="right" for="form3">Enter First Name</label>
            &nbsp;&nbsp;&nbsp;
            <div class="input-group-prepend">
                 <span class="input-group-text">Lastname</span>
            </div>
            <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
          </div>
          <br>

          
      </div> -->
      <div class="modal-body mx-3">
      <form action="{{route('crud.store')}}" method="post">
      @method('post')
      @csrf
      <div class="form-row">
          <div class="md-form mb-2 col-md-6">
              <i class="fas fa-user prefix grey-text"></i>
              <input type="text" id="defaultForm-firstname" class="form-control validate" name="firstname" value="">
              <label data-error="wrong" data-success="right" for="defaultForm-email">First name</label>
            </div>

            <div class="md-form mb-2 col-md-6">
              <i class="fas fa-user-friends prefix grey-text" ></i>
              <input type="text" id="defaultForm-lasttname" class="form-control validate" name="lasttname">
              <label data-error="wrong" data-success="right" for="defaultForm-pass"> Last name</label>
            </div>

            <div class="md-form mb-2 col-md-4">
              <i class="fas fa-venus prefix grey-text"></i>
              <input type="text" id="defaultForm-gender" class="form-control validate" name="gender">
              <label data-error="wrong" data-success="right" for="defaultForm-pass">Gender</label>
            </div>

            <div class="md-form mb-2 col-md-4">
            <i class="fa fa-map-marker prefix grey-text" aria-hidden="true"></i>
              <input type="text" id="defaultForm-country" class="form-control validate" name="country">
              <label data-error="wrong" data-success="right" for="defaultForm-pass">Country</label>
            </div>

            <div class="md-form mb-2 col-md-4">
            <i class="fa fa-map-marker-alt prefix grey-text" aria-hidden="true"></i>
              <input type="text" id="defaultForm-city" class="form-control validate" name="city">
              <label data-error="wrong" data-success="right" for="defaultForm-pass">City</label>
            </div>

            <div class="md-form col-md-12">
            <i class="fas fa-address-card prefix grey-text" aria-hidden="true"></i>
              <input type="text" id="defaultForm-address" class="form-control validate" name="address">
              <label data-error="wrong" data-success="right" for="defaultForm-pass">Address</label>
            </div>


      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" >Save Details </button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>
    </div>
    </div>

</body>
</html>