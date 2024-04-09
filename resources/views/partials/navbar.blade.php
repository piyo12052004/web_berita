<div class="destop">
  <div class="navbar position-fixed">
      <div class="container ">
          <div class="nav-icon-serch">
              <table>
                <tr>
                  <td class="nav-main-date" id="menu-icon">
                    <a class="angker-sidbar" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i data-feather="align-justify" class="icon-nav-main"></i>
                      <span>Home</span>
                    </a><span id="hari-ini"></span>,<span id="tanggal-hari-ini"></span>
                  
                  <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasExampleLabel"><i data-feather="search" class="icon-nav-main"></i> SEARCH</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <div>
                        <ul>
                          <li>
                            <form action="/search/sarchBlog">
                              <div class="input-group mb-3">
                                  <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
                                  <button class="btn btn-danger" type="submit">cari</button>
                              </div>
                          </form>
                        </li>
                        </ul>
                      </div>
                      <h5 class="offcanvas-title" id="offcanvasExampleLabel"><i data-feather="book-open" class="icon-nav-main"></i> CATEGORY</h5>
                      <div class="sedbar-list-nav" >
                        <ul>
                          {{-- <li><form action="{{ route('search') }}" class="pb-5">
                            <div class="input-group">
                              <input type="hidden" class="form-control" name="search" placeholder="Search..."  value="Pemerintah">
                              <button type="submit" class="button-category" id="basic-addon2">Pemeritah</i></button>
                            </div>
                          </form></li>
                          <li><form action="{{ route('search') }}" class="pb-5">
                            <div class="input-group">
                              <input type="hidden" class="form-control" name="search" placeholder="Search..."  value="Pemerintah">
                              <button type="submit" class="button-category" id="basic-addon2">Pemeritah</i></button>
                            </div>
                          </form></li>
                          <li><form action="{{ route('search') }}" class="pb-5">
                            <div class="input-group">
                              <input type="hidden" class="form-control" name="search" placeholder="Search..."  value="Pemerintah">
                              <button type="submit" class="button-category" id="basic-addon2">Pemeritah</i></button>
                            </div>
                          </form></li>
                          <li><form action="{{ route('search') }}" class="pb-5">
                            <div class="input-group">
                              <input type="hidden" class="form-control" name="search" placeholder="Search..."  value="Pemerintah">
                              <button type="submit" class="button-category" id="basic-addon2">Pemeritah</i></button>
                            </div>
                          </form></li>
                          <li><form action="{{ route('search') }}" class="pb-5">
                            <div class="input-group">
                              <input type="hidden" class="form-control" name="search" placeholder="Search..."  value="Pemerintah">
                              <button type="submit" class="button-category" id="basic-addon2">Pemeritah</i></button>
                            </div>
                          </form></li>
                          <li><form action="{{ route('search') }}" class="pb-5">
                            <div class="input-group">
                              <input type="hidden" class="form-control" name="search" placeholder="Search..."  value="Pemerintah">
                              <button type="submit" class="button-category" id="basic-addon2">Pemeritah</i></button>
                            </div>
                          </form></li>
                          <li><form action="{{ route('search') }}" class="pb-5">
                            <div class="input-group">
                              <input type="hidden" class="form-control" name="search" placeholder="Search..."  value="Pemerintah">
                              <button type="submit" class="button-category" id="basic-addon2">Pemeritah</i></button>
                            </div>
                          </form></li>
                          <li><form action="{{ route('search') }}" class="pb-5">
                            <div class="input-group">
                              <input type="hidden" class="form-control" name="search" placeholder="Search..."  value="Pemerintah">
                              <button type="submit" class="button-category" id="basic-addon2">Pemeritah</i></button>
                            </div>
                          </form></li>
                          <li><form action="{{ route('search') }}" class="pb-5">
                            <div class="input-group">
                              <input type="hidden" class="form-control" name="search" placeholder="Search..."  value="Pemerintah">
                              <button type="submit" class="button-category" id="basic-addon2">Pemeritah</i></button>
                            </div>
                          </form></li> --}}
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                  {{-- <td class="nav-main-date"><span id="hari-ini"></span>,<span id="tanggal-hari-ini"></span></td> --}}
                </tr>
              </table>
            </div>
            
            {{-- <div class="sidebar " id="sidebar">
              <!-- Isi sidebar -->
              <span class="close-btn" id="close-btn">&times;</span>
              <ul class="sid-judul mt-3">
                  <li><p>SEARCH</p></li>
                  <hr>
              </ul>
              <ul>
                  <li>
                    <form action="{{ route('search') }}" class="pb-5">
                      <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search..."  value="{{ request('search') }}">
                        <button type="submit" class="input-group-text" id="basic-addon2"><i data-feather="search"></i></button>
                      </div>
                    </form>
                  </li>
              </ul>
              <ul class="sid-judul">
                <li><p>CATEGORY</p></li>
              <hr>
            </ul>
            <ul class="sidbar-list-category">
              <li><a href="">web 1</a></li>
              <li><a href="">web 1</a></li>
              <li><a href="">web 1</a></li>
              <li><a href="">web 1</a></li>
              <li><a href="">web 1</a></li>
              <li><a href="">web 1</a></li>
              <li><a href="">web 1</a></li>
              <li><a href="">web 1</a></li>
              <li><a href="">web 1</a></li>
              <li><a href="">web 1</a></li>
            </ul>
            </div> --}}
            {{--  --}}
            {{--  --}}
          
            <div class="nav-tranding">
              <i data-feather="loader" class="icon-nav-main"></i>
              <div id="textContainer" >
                      <a href="/{blog:title}" class="display-4">loaading..</a>
              </div>
          </div>
      </div>
  </div>
</div>






<script>
    document.getElementById("menu-icon").addEventListener("click", function() {
  document.getElementById("sidebar").style.left = "0"; // Menampilkan sidebar saat ikon diklik
});

document.getElementById("close-btn").addEventListener("click", function() {
  document.getElementById("sidebar").style.left = "-250px"; // Menyembunyikan sidebar saat tombol close di-klik
});

</script>

{{-- // untuk title yang bergantian --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var texts = ["Teks Pertama", "Teks Kedua", "Teks Ketiga"];
        var currentIndex = 0;

        function changeText() {
            $("#textContainer a").fadeOut(500, function() {
                $(this).text(texts[currentIndex]).fadeIn(500);
            });

            currentIndex = (currentIndex + 1) % texts.length;
        }

        setInterval(changeText, 3000); // Ganti teks setiap 2000 milidetik (2 detik)
    });
</script>