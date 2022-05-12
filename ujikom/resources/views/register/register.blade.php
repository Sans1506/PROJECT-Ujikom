<!DOCTYPE html>
<html lang="en">
<head>
@include('style.stylesheet')
</head>

<body style="background-color: #0050EF">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>
              <div class="card-body">
                <form method="post" action="/saveregister">
                  @csrf
                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <input id="nik" type="text" maxlength="16" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="1" required autofocus placeholder="Masukan NIK">
                    @error('password')
                        <div class="invalid-feedback alert alert-danger">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="2" required autofocus placeholder="Masukan email" value="{{old('email')}}">
                    @error('email')
                        <div class="invalid-feedback alert alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                  <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" tabindex="3" required placeholder="Masukan Nama Lengkap" value="{{old('name')}}">
                    @error('name')
                        <div class="invalid-feedback alert alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" >
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Have an account? <a href="/login">Here to Login</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @include('style.javascript')
</body>
</html>
