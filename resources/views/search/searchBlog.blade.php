@extends('layouts.main')
@section('content')
@if ($posts->count())
<div class="destop">
<table>
    <tr>
        <td class="td-seacrh">
            <div class="blog-seach">
                @foreach ($posts as $result)
                <div class="post-search">
                        @if ($result->image_url)
                        <div class="img">
                            <img src="{{ $result->image_url }}" alt="Blog Image" >
                        </div>
                        @endif
                        <div class="title">
                            <p>{{ $result->title }}</p>
                            <small style="color: blue">{{ $result->category }}</small>
                        </div>
                        {{-- <p>{{ $result->content }}</p> --}}
                        <hr>
                    </div>
                @endforeach
            </div>
            
        </td>
        <td class="td-seedbar-search">
            <div class="search-seedbar-poster">
                <p>piyo aswandi</p>
            </div>
        </td>
    </tr>
</table>
@else
            <div style="justify-content: center;display: flex;align-items: center;text-align: center; padding-top:100px; " >
                <h1>Tidak ada hasil</h1>
            </div>
            @endif
</div>
@endsection
@section('mobile')
@if ($posts->count())
<div class="serch-app-mobile">
    <div class="serch-pencarian">
        <p><a href="/"><i class="bi bi-house-door"></i> </a> > {{ $maintitle }}</p>
    </div>
        @foreach ($posts as $result)

            <a href=""><div class="post">
                <div class="post-header">
                    @if ($result->image_url)
                        <img src="{{ $result->image_url }}" alt="Blog Image" >
                    @endif
                </div>
                <div class="post-body">
                    <p>{{ $result->title }}</p>
                    <small style="color: blue">{{ $result->category }}</small>
                </div>
            </div>
        </a>
        @endforeach
    </div>
@else
    <div style="justify-content: center;display: flex;align-items: center;text-align: center; padding-top:100px; " >
        <h1><b>Tidak ada hasil</b></h1>
    </div>
@endif

@endsection