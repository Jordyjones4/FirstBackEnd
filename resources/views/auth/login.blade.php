<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="{{asset('css/layout.css')}}" rel="stylesheet">
    <title>Login</title>
  </head>

  <body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-5">
                        <h2 class="fw-bold mb-2 text-uppercase">Login Page</h2>
                        <p class="text-white-50 mb-5">Please enter your login and password!</p>
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="form-outline form-white mb-4">
                                <input id="username" type="username" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="form-label">Username</label>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="password"  class="form-control form-control-lg" name="password"/>
                                <label class="form-label">Password</label>
                            </div>
                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        </form>
                  </div>
                  <div>
                    <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-white-50 fw-bold">Sign Up</a></p>
                  </div>
                </div>
              </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
