<!DOCTYPE html>
<html lang="en">
<head>
@include('style.stylesheet')
</head>
<body>
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
                    <div class="card-header"><h4>Login</h4></div>
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{session('status')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif
                    @if (session('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('loginError')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                    @if (session('logout'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('logout')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @endif
                    <div class="card-body">
                      <form method="POST" action="/login" class="needs-validation" >
                        @csrf
                        <div class="form-group">
                          <label for="nik">NIK</label>
                          <input id="nik" type="text" maxlength="16" class="form-control" name="password" tabindex="1" required autofocus placeholder="Masukan NIK">
                          <div class="invalid-feedback">
                            Please fill in your NIK
                          </div>
                        </div>

                        <div class="form-group">
                              <label for="name" class="control-label">Name</label>
                          <input id="name" type="text" class="form-control" name="name" tabindex="2" required placeholder="Masukan Nama Lengkap">
                          <div class="invalid-feedback">
                            Please fill in your Name
                          </div>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            Login
                          </button>
                        </div>
                      </form>

                    </div>
                  </div>
                  <div class="mt-5 text-muted text-center" >
                    Don't Have an account? <a href="/register">Create Here</a>
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
