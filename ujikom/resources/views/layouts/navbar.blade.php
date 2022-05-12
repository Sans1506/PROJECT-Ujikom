<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto" method="GET" action="/cari">
      @csrf
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
      </ul>
        <div class="col-auto">
          <select onchange="yesnocheck(this);" class="form-control form-select" type="search">
            <option value="lokasi">Lokasi</option>
            <option value="tanggal">Tanggal</option>
            <option value="jam">Jam</option>
            <option value="suhu">Suhu</option>
          </select>
        </div>
        <div class="col">
          <div class="form-group">
            <input name="lokasi" id="iflokasi"  class="form-control" type="search" placeholder="Cari Kota" aria-label="search" data-width="250">
            <button id="iflokasiBtn"  class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </div>
          <div class="form-group">
            <input name="tanggal" id="iftgl" style="display: none;" class="form-control" type="date" placeholder="Cari Tanggal" aria-label="search" data-width="250">
            <button id="ifBtnTgl" style="display: none;" class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </div>
          <div class="form-group">
            <input name="jam" id="ifjam" style="display: none;" class="form-control" type="search" placeholder="Cari Jam" aria-label="search" data-width="250">
            <button id="ifBtnjam" style="display: none;" class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </div>
          <div class="form-group">
            <input name="suhu" id="ifsuhu" style="display: none;" class="form-control" type="search" placeholder="Cari Suhu" aria-label="search" data-width="250">
            <button id="ifBtnsuhu" style="display: none;" class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        {{-- <img alt="image" src="{{ asset('')}}assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> --}}
        <i class="fas fa-user"></i>
        <div class="d-sm-none d-lg-inline-block" >Hi,
          @if (!empty(auth()->user()->name))
            {{ auth()->user()->name }}
          @else
            User
          @endif</div></a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="/logout" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>

  <script>
    function yesnocheck(that) {
      if (that.value == "tanggal") {
        document.getElementById("iftgl").style.display = "block";
        document.getElementById("ifBtnTgl").style.display = "block";
        
        document.getElementById("iflokasi").style.display = "none";
        document.getElementById("iflokasiBtn").style.display = "none";
        
        document.getElementById("ifsuhu").style.display = "none";
        document.getElementById("ifBtnsuhu").style.display = "none";
        document.getElementById("ifjam").style.display = "none";
        document.getElementById("ifBtnjam").style.display = "none";
      } else if(that.value == "jam"){
        document.getElementById("iftgl").style.display = "none";
        document.getElementById("ifBtnTgl").style.display = "none";
        
        document.getElementById("iflokasi").style.display = "none";
        document.getElementById("iflokasiBtn").style.display = "none";
        
        document.getElementById("ifsuhu").style.display = "none";
        document.getElementById("ifBtnsuhu").style.display = "none";
        document.getElementById("ifjam").style.display = "block";
        document.getElementById("ifBtnjam").style.display = "block";
      } else if(that.value == "suhu") {
        document.getElementById("iftgl").style.display = "none";
        document.getElementById("ifBtnTgl").style.display = "none";
        
        document.getElementById("iflokasi").style.display = "none";
        document.getElementById("iflokasiBtn").style.display = "none";
        
        document.getElementById("ifsuhu").style.display = "block";
        document.getElementById("ifBtnsuhu").style.display = "block";
        document.getElementById("ifjam").style.display = "none";
        document.getElementById("ifBtnjam").style.display = "none";
      } else{
        document.getElementById("iftgl").style.display = "none";
        document.getElementById("ifBtnTgl").style.display = "none";
        
        document.getElementById("iflokasi").style.display = "block";
        document.getElementById("iflokasiBtn").style.display = "block";
        
        document.getElementById("ifsuhu").style.display = "none";
        document.getElementById("ifBtnsuhu").style.display = "none";

        document.getElementById("ifjam").style.display = "none";
        document.getElementById("ifBtnjam").style.display = "none";
      }
    }
  </script>
