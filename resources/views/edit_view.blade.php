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
                <h3>Update Data</h3>
                <form action="/edit" method="POST" >
                    @csrf
                    <input type="hidden" value="{{$hello->id}}" name="id">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$hello->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="{{$hello->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control" value="{{$hello->password}}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary" type="submit">UPDATE</button>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>

    </body>
</html>

