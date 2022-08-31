<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    </head>
    <body style="background-image: linear-gradient(#ffcccc, #ccffff);">

        <div class="container" style="padding-top:100px;">
            <div class="row">
                <div class="col-12 col-lg-6 m-auto">
                <h3>Login Data</h3>
                <form action="logindata" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary" type="submit">Login</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </body>
</html>