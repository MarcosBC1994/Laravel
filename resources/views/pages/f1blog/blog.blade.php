@extends('master.main')

@section('content')
    <div class="container bg-dark mt-5">
        <div class="row">
            <div class="col-md-6  text-light mt-5">
                <h1>Title of a longer featured blog post</h1>
                <p>Here you can see some of the best cars in the world.Here you can see some of the best cars in the worldHere you can see some of the best cars in the world </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur culpa cupiditate eveniet ipsa pariatur reiciendis suscipit voluptas! Animi consequatur culpa dolorem eum exercitationem maiores, maxime, non quis sapiente unde voluptates.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-md-8">
                <h3><strong>Daily News</strong></h3>
                <hr>
                @component('components.Blog.post', [
                        'pnumber' => '1'
                        ])

                @endcomponent

                @component('components.Blog.post ', [
                        'pnumber' => '2'
                        ])
                @endcomponent
            </div>
            <div class="col-md-4 mt-5">
                @component('components.Blog.archives')
                @endcomponent
            </div>
        </div>
    </div>
@endsection
