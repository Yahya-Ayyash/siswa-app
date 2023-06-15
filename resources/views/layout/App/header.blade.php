<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Data Siswa</span>
      </a>

      @if(!Auth::check())
        <a href= " {{ url("login") }} " class="btn btn-outline-dark me-2"> Log-In </a>
        <a href= " {{ url("register") }} " class="btn btn-outline-dark me-2"> Register </a>
        @else()
        <a href= " # " class="btn btn-outline-dark me-2"> {{ Auth::user()->name }} </a>
        <a href= " {{ url("logout") }} " class="btn btn-outline-dark me-2"> Log-Out </a>
        @endif
    </header>
  </div>