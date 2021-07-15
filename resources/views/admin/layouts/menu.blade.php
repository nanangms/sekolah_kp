<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <center>
  <img src="{{ asset('images/logo.jpeg') }}" width="100px" alt="Image" class="img-fluid text-center"></center>
  <hr>
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      @if(auth()->user()->role == 'admin')
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/home">
          <i class="fa fa-tachometer-alt" ></i>
          Dashboard
        </a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/home">
          <i class="fa fa-tachometer-alt" ></i>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/pendaftaran-siswa-baru">
          <i class="fa fa-edit" ></i>
          Pendaftaran Siswa
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/upload-berkas">
          <i class="fa fa-file" ></i>
          Upload Berkas
        </a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt" ></i> Sign out</a>
        
      </li>
    </ul>

    
  </div>
</nav>