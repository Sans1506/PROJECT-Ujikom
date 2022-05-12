
<!DOCTYPE html>
<html lang="en">
@include('style.stylesheet')
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('layouts.navbar')
      @include('layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            @yield('section')
          </div>

          <div class="section-body">
              @yield('body')
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="https://www.instagram.com/_sans15/"target="_blank">Ikhsan Firmansyah</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

 @include('style.javascript')
</body>
</html>
