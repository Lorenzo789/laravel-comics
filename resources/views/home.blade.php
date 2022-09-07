@extends('layouts.main')

@section('main-content')
<main>
    <div class="main-content">
        <div class="main-container">

            @foreach ($comics as $comic )
            
                <div class="card">

                    <div class="card-image">
                        <img src="{{ $comic->image }}" alt="{{ $comic->type }}">
                    </div>

                    <h5>{{ $comic->title }}</h5>    
                </div>

            @endforeach

            <button class="btn-main">Load More</button>
        </div>
    </div>

    <div class="banner-shop">
        <div class="container">
            <div>
                <img src="" :alt="link.text">
                <a href="#"></a>
            </div>
        </div>
    </div>

    <div class="content-bottom">
        <div class="container">
            <ul>
                <h2>DC Comics</h2>
                <li>
                    <a href="#"></a>
                </li>

                <h2>Shop</h2>
                <li>
                    <a href="#"></a>
                </li>
            </ul>
            <ul>
                <h2>DC</h2>
                <li>
                    <a href="#"></a>
                </li>
            </ul>
            <ul>
                <h2>Sites</h2>
                <li>
                    <a href="#"></a>
                </li>
            </ul>
            <img class="pos" src="{{asset('/assets/dc-logo-bg.png')}}" alt="">
        </div>
    </div>
</main>
@endsection