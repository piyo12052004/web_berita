@extends('layouts.main')
@section('content')
<div class="destop">
    <div class="show-table-bloger">
        <table>
            <tr>
                <td>
                    <div class="blog-details">
                        <div class="category">
                            <small><i class="bi bi-house-door"></i> > {{$post->category}}</small>
                        </div>
                        <div class="title">
                            <p>{{$post->title }}</p>
                        </div>
                        <div class="img">
                            <img src="{{ $post->image_url }}" alt="" width="100%">
                        </div>
                        <div class="content" id="article-content">
                            <p>{!! $post->content !!}</p>
                        </div>
                    </div>
                </td>
                <td class="td-sedbar">
                    <div class="sedbar-show-blog">
                        <div class="category">
                            <ul>
                                <li># piyo</li>
                                <li># piyo</li>
                                <li># piyo</li>
                                <li># piyo</li>
                                <li># piyo</li>
                                <li># piyo</li>
                                <li># piyo</li>
                            </ul>
                        </div>
                        <div class="poster">
                            <p>poster iklan jika mau di terapkan</p>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
        <!-- resources/views/index.blade.php -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var articleContent = document.getElementById('article-content');
                var images = articleContent.getElementsByTagName('img');
        
                for (var i = 0; i < images.length; i++) {
                    images[i].style.display = 'none';
                }
            });
        </script>
@endsection

{{-- app mobile --}}
@section('mobile')
    <div class="show-app-mobile">
        <div class="content-show-mobile">
            <div class="category">
                <small><a href="/"><i class="bi bi-house-door"></i></a> > {{$post->category}}</small>
            </div>
            <div class="title">
                <p>{{$post->title }}</p>
            </div>
            <div class="img">
                <img src="{{ $post->image_url }}" alt="">
            </div>
            <div id="article-content" class="article-content">
                <p>{!! $post->content !!}</p>
            </div>
            <hr>
            <div class="icon-medsos" >
                <p>Bagikan:</p>
                <a href=""><i class="bi bi-whatsapp"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-twitter-x"></i></a>
            </div>
            <hr>
            @if ($latestPosts->count() > 0)
                <div class="berita-lain-nya">
                    <p style="padding-left: 10px" ><b>berita lain nya</b></p>
                    @foreach ($latestPosts as $post)
                        <a href="">
                            <div class="post">
                            <div class="post-title">
                                <img src="{{ $post->image_url }}" alt="">
                            </div>
                            <div class="post-text">
                                <p>{{ $post->title }}</p>
                                <small>{{ $post->created_at }}</small>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var articleContent = document.getElementById('article-content');
            var images = articleContent.getElementsByTagName('src');

            for (var i = 0; i < images.length; i++) {
                images[i].style.display = 'none';
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#article-content img').hide();
        });
    </script>
@endsection