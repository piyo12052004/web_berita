{{-- app mobile --}}
<div class="app-mobile">
    <div class="app-mobile-navbar">
      <div class="navbar-sidebar">
        <button class="seedbar-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
          <i data-feather="align-justify" class="icon-nav-main"></i>
        </button>
        <img src="{{ asset('img/sinyalbekasi.png') }}" alt="" >
        
        <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">SEARCH</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div>
              <form action="/search/sarchBlog">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">cari</button>
                </div>
            </form>
            </div>
            <div class="dropdown mt-3">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">CATEGORY</h5>
              <ul>
                <li>piyo aswandi</li>
                <li>piyo aswandi</li>
                <li>piyo aswandi</li>
                <li>piyo aswandi</li>
                <li>piyo aswandi</li>
                <li>piyo aswandi</li>
                <li>piyo aswandi</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-category">
        <ul>
          <li><a href="">piyo aswandi</a></li>
          <li><a href="">piyo aswandi</a></li>
          <li><a href="">piyo aswandi</a></li>
          <li><a href="">piyo aswandi</a></li>
          <li><a href="">piyo aswandi</a></li>
          <li><a href="">piyo aswandi</a></li>
          <li><a href="">piyo aswandi</a></li>
          <li><a href="">piyo aswandi</a></li>
        </ul>
      </div>
  
    </div>
    </div>