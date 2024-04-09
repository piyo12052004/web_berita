@extends('layouts.main')
@section('content')
{{-- destop --}}
<div class="destop">
        <div class="logo-web">
            <img src="img/sinyalbekasi.png" alt="sinyal bekasi">
        </div>
        <div class="web-category">
            <table>
                <tr>
                    <th>
                        {{-- <form action="/search/sarchBlog" class="pb-5">
                        <div class="input-group">
                          <input type="hidden" class="form-control" name="search" placeholder="Search..."  value="Pemerintah">
                          <button type="submit" class="button-category" id="basic-addon2">Pemeritah</i></button>
                        </div>
                      </form> --}}
                    </th>
                </tr>
            </table>
        </div>
    @if ($allBloggers->count())
        <div class="nav-category-dua">
            <table>
                <tr>
                    <td><a href=""><i data-feather="video"></i> <span>Video</span></a></td>
                    <td><a href=""><span>#Internasional</span></a></td>
                    <td><a href=""><span>#Piala Duinia</span></a></td>
                </tr>
            </table>
        </div>

        {{-- postingan --}}
        <div class="postingan">
        <div class="row">
            <div class="content-post">
                <a href="/show/showBlog/{{$allBloggers[0]->title}}"><div class="card mt-3">
                    <div class="head-card">
                        @if ($allBloggers[0]->image_url)
                            <img src="{{ $allBloggers[0]->image_url }}" alt="Post Image">
                            @else
                            <p>Tidak ada gambar tersedia.</p>
                        @endif
                    </div>
                    <div class="body-car">
                        {{ Str::limit($allBloggers[0]->title, 35) }}
                    </div>
                </div></a>
                <a href="/show/showBlog/{{$allBloggers[1]->title}}"><div class="card mt-3">
                    <div class="head-card">
                        @if ($allBloggers[1]->image_url)
                            <img src="{{ $allBloggers[1]->image_url }}" alt="Post Image">
                            @else
                            <p>Tidak ada gambar tersedia.</p>
                        @endif
                    </div>
                    <div class="body-car">
                        {{ Str::limit($allBloggers[1]->title, 35) }}
                    </div>
                </div></a>
                <a href="/show/showBlog/{{$allBloggers[2]->title}}"><div class="card mt-3">
                    <div class="head-card">
                        @if ($allBloggers[2]->image_url)
                            <img src="{{ $allBloggers[2]->image_url }}" alt="Post Image">
                            @else
                            <p>Tidak ada gambar tersedia.</p>
                        @endif
                    </div>
                    <div class="body-car">
                        {{ Str::limit($allBloggers[2]->title, 35) }}
                    </div>
                </div></a>
                <a href="/show/showBlog/{{$allBloggers[3]->title}}"><div class="card mt-3">
                    <div class="head-card">
                        @if ($allBloggers[3]->image_url)
                            <img src="{{ $allBloggers[3]->image_url }}" alt="Post Image">
                            @else
                            <p>Tidak ada gambar tersedia.</p>
                        @endif
                    </div>
                    <div class="body-car">
                        {{ Str::limit($allBloggers[3]->title, 35) }}
                    </div>
                </div></a>
                <a href="/show/showBlog/{{$allBloggers[4]->title}}"><div class="card mt-3">
                    <div class="head-card">
                        @if ($allBloggers[4]->image_url)
                            <img src="{{ $allBloggers[4]->image_url }}" alt="Post Image">
                            @else
                            <p>Tidak ada gambar tersedia.</p>
                        @endif
                    </div>
                    <div class="body-car">
                        {{ Str::limit($allBloggers[4]->title, 35) }}
                    </div>
                </div></a>
            </div>

                <div class="berita-terkini mt-4">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/logo.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/logo.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/logo.jpg" class="d-block w-100" alt="...">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
        </div>
    <table>
        <tr>
            <td>
        <div class="card-group ">
            <div style="padding: 10px">
                {{-- berita terpopuler frist --}}
                <a href="/show/showBlog/{{$allBloggers[6]->title}}">
                    <div class="berita-populer">
                    <div class="text-berita-populer">
                        <p>{{$allBloggers[6]->title }}</p>
                    </div>
                    <div class="img-berita-populer">
                        <img src="{{ $allBloggers[6]->image_url }}" alt="" >
                    </div>
                </a>
            </div>
                
                {{-- main postingan --}}
            @foreach($allBloggers->skip(8) as $post)
                <div class="clickable-element card" data-blog-id="{{ $post->blogger_id }}">
                    <a href="/show/showBlog/{{$post->title}}">
                        <div class="main-post">
                            <div class="img" >
                                @if ($post->image_url)
                                <img src="{{ $post->image_url }}" class="img-fluid rounded-start" alt="..." >
                                @endif
                            </div>
                            <div class="title">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post['title'] }}</h5>
                                    <p class="card-text"><small class="text-body-secondary">{{ $post->created_at->format('d-m-Y H:i:s')}}</small></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
                {{--  --}}
                <div class=" col-md-10">
                    {{-- berita terpopuler frist --}}
                    <a href="/show/showBlog/{{$allBloggers[7]->title}}">
                        <div class="berita-populer">
                        <div class="text-berita-populer">
                            <p>{{$allBloggers[7]->title }}</p>
                        </div>
                        <div class="img-berita-populer">
                            <img src="{{ $allBloggers[7]->image_url }}" alt="" >
                        </div>
                    </a>
                </div>

                {{-- berita lain nya  --}}
                <div class="berita-lain-nya mt-4">
                    <div class="isi-beritalainnya">
                        <a href="">
                            <div class="card" style="width: 13rem;">
                            <img src="img/logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </a>
                        <a href="">
                            <div class="card" style="width: 13rem;">
                            <img src="img/logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </a>
                        <a href="">
                            <div class="card" style="width: 13rem;">
                            <img src="img/logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </a>
                        <a href="">
                            <div class="card" style="width: 13rem;">
                            <img src="img/logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </a>
                        <a href="">
                            <div class="card" style="width: 13rem;">
                            <img src="img/logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </a>
                        <a href="">
                            <div class="card" style="width: 13rem;">
                            <img src="img/logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </a>
                        
                    </div>
                </div>
                <div class="readmore-blogger">
                    <a class="btn btn-warning" href="">Read More</a>
                </div>
        </div>
    </td>

            <td style="vertical-align: top; padding-top:50px;" class="td-seedbar-blog">
                {{-- sedbar left --}}
            <div class="sedbar-blog">
                <div class="artikerl-pilihan">
                    <h4 class="px-3" >Terpopular</h4>
                    <div class="berita-populer">
                        <table>
                            <tr>
                                <td>1</td>
                                <td class="px-2"><a href="">Piyo aswandi ganteng seluruh dunia dan kaya raya</a></td>
                                <td><a href=""><img src="img/logo.jpg" alt="" width="100px" style="border-radius: 10px"></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            </td>
        </tr>
    </table>
        </div>
        @else
            <p class="text-center fs-4" >No Post fount</p>
        @endif
    </div>
@endsection
@section('mobile')
    

{{-- app Mobile --}}
    <div class="app-mobile">
        <div class="content-app-mobile">
            <div id="app-mobile-sidebar" class="carousel slide sidebar-content">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#app-mobile-sidebar" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#app-mobile-sidebar" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#app-mobile-sidebar" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner seed-img">
                <div class="carousel-item active">
                    <img src="img/logo.jpg" class="d-block " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/logo.jpg" class="d-block " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/logo.jpg" class="d-block " alt="...">
                </div>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#app-mobile-sidebar" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon sles-kiri" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#app-mobile-sidebar" data-bs-slide="next">
                    <span class="carousel-control-next-icon sles-kanan" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="tag-app-mobile">
                <ul>
                    <li><a href="">#piyo</a></li>
                    <li><a href="">#piyo</a></li>
                    <li><a href="">#piyo</a></li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="mobole12052004">
            <a href="/show/showBlog/{{$allBloggers[0]->title}}" class="angker-content-main">
                <div class="content-main-post-app-mobile">
                    <div class="title">
                        <p>{{ $allBloggers[0]->title }}</p>
                        <p><small>{{ $allBloggers[0]->created_at->format('d-m-Y H:i:s')}}</small></p>
                    </div>
                    <div class="img">
                        <img src="{{ $allBloggers[0]->image_url }}" alt="" >
                    </div>
                </div>
            </a>
        </div>

        <hr>

        <div class="all-content-app-mobile">
            @foreach($allBloggers->skip(2) as $post)
            <a href="/show/showBlog/{{$post->title}}" class="angker-all-content">
                <div class="container">
                <div class="content">
                    <div class="img">
                        @if ($post->image_url)
                        <img src="{{ $post->image_url }}" alt="" >
                        @endif
                    </div>
                    <div class="title">
                        <p>{{ $post['title'] }}</p>
                        <small>{{ $post->created_at->format('d-m-Y H:i:s')}}</small>
                    </div>
                </div>
            </div>
            </a>
            @endforeach
            <hr>
        </div>
        <div class="mobole12052004">
            <a href="/show/showBlog/{{$allBloggers[1]->title}}" class="angker-content-main">
                <div class="content-main-post-app-mobile">
                    <div class="title">
                        <p>{{ $allBloggers[1]->title }}</p>
                        <p><small>{{ $allBloggers[1]->created_at->format('d-m-Y H:i:s')}}</small></p>
                    </div>
                    <div class="img">
                        <img src="{{ $allBloggers[1]->image_url }}" alt="" >
                    </div>
                </div>
            </a>
        </div>

        <hr>

        <div class="berita-pilihan-app-mobile ">
            <p><b>Berita Lain nya</b></p>
            @if ($latestPosts->count() > 0)
            <div class="container">
                <div class="content-app-mobile">
                @foreach ($latestPosts as $post)
                <a href="" class="angke-berita-pilihan">
                    <div class="card">
                        <div class="card-title">
                            <img src="{{ $post->image_url }}" alt="" >
                        </div>
                        <div class="isi-card">
                            <p>{{ $post->title }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            @else
                    <p>Tidak ada post yang ditemukan.</p>
                @endif
        </div>
    </div>

</div>

    @endsection
