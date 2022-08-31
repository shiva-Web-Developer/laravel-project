<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    </head>
    <body style="background-image: linear-gradient(#ffcccc, #ccffff);">

        <div class="container" style="padding-top:100px;">
            <div class="row">
                <div class="col-12 col-lg-6 m-auto">
                <form action="getAdd" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
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
                        <label for="">File</label>
                        <input type="text" name="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary" type="submit">Submit</button>
                    </div>
                    <a href="view">view</a>
                </form>
                </div>
            </div>
        </div>

    </body>
</html>