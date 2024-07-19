<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="col-md-3 mt-5">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="w-100 alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
        
            <h2>Login</h2>
            <form method="POST" action="{{route('login.signin')}}">
                @csrf
                <div class="mb2">
                    <label for="" class="form-label">Username</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb2">
                    <label for="" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="mb2">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary my-3">Submit</button>
            </form>
        </div>
        
   
</body>
</html>