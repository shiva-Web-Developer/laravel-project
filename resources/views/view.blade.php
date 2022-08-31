<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <!-- fa fa icon  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- modal cdn  -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body style="background-image: linear-gradient(#ffcccc, #ccffff);">

        <div class="container" style="padding-top:100px;">
            <div class="row">
               
                <div class="col-12 col-lg-8 m-auto" >
                <h3>View Data</h3>
                <h2>{{session('user')}}</h2>
                
                <h3><a href="logout">Logout</a></h3>

                <!-- <form method="POST" action="logout">
                @csrf
                <button type="submit">Logout</button>
                </form> -->

                    <table class="table">
                        <tr>
                            <th>SR</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php $a = 1; ?>
                        @foreach($hello as $hello)
                        <tr>
                            <td><?php echo $a++; ?></td>
                            <td>{{$hello->name}}</td>
                            <td>{{$hello->email}}</td>
                            <td>{{$hello->password}}</td>
                            <td>{{$hello->password}}</td>
                            
                            <td class="text-center">
		                    <a href="{{url('/')}}/editview/{{$hello->id}}" data-toggle="tooltip"
                             data-original-title="Edit"><i class="fa fa-edit">
							</i></a>
						    </td>
                           
                            <td class="text-center">
		                    <a href="{{url('/')}}/delete/{{$hello->id}}" data-toggle="tooltip"
                             data-original-title="Delete"><i class="fa fa-trash">
							</i></a>
						    </td>
                        
                        </tr>
                        @endforeach
                    </table>
                    <a href="/">create</a>
                </div>
            </div>
        </div>

    </body>
</html>

<!-- modal  -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title text-left">Edit Data</h4>
        </div>
        <div class="modal-body">

        
        <form action="/update" method="POST">
        @csrf

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="#" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary" type="submit">Submit</button>
                    </div>
                </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>