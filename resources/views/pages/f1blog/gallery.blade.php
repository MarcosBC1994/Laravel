@extends('master.main')
@section('content')
    <div class="container mt-3">
        <div class="row d-flex">
            <div class="col-3">

            </div>
            <div class="col-6 text-center">
                <h1>Gallery</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dicta numquam praesentium! Assumenda, dignissimos, sit?</p>
                <button type="button" class="btn btn-outline-primary">Primary</button>
        </div>
        <div class="col-3">
        </div>

    </div>
    <hr>
    <div class="container mt-3">
        <div class="row row-cols-4">
            <div class="col">
                @component('components.gallery.gallery',

                        [
                        'image' => 'https://images.impresa.pt/sicnot/2023-02-14-sf23.jpg-f1206aff-1',
                        ]
                        )
                @endcomponent
            </div>
            <div class="col">
                @component('components.gallery.gallery',

                        [
                        'image' => 'https://images.impresa.pt/sicnot/2023-02-14-sf23.jpg-f1206aff-1',
                        ]
                        )
                @endcomponent
            </div>
            <div class="col">@component('components.gallery.gallery',

                        [
                        'image' => 'https://images.impresa.pt/sicnot/2023-02-14-sf23.jpg-f1206aff-1',
                        ]
                        )
                @endcomponent</div>
            <div class="col">@component('components.gallery.gallery',
                        [
                        'image' => 'https://images.impresa.pt/sicnot/2023-02-14-sf23.jpg-f1206aff-1',
                        ]
                        )
                @endcomponent
        </div>
    </div>

            <div class="row row-cols-4">
                <div class="col">
                    @component('components.gallery.gallery',

                            [
                            'image' => 'https://images.impresa.pt/sicnot/2023-02-14-sf23.jpg-f1206aff-1',
                            ]
                            )
                    @endcomponent
                </div>
                <div class="col">
                    @component('components.gallery.gallery',

                            [
                            'image' => 'https://images.impresa.pt/sicnot/2023-02-14-sf23.jpg-f1206aff-1',
                            ]
                            )
                    @endcomponent
                </div>
                <div class="col">@component('components.gallery.gallery',

                        [
                        'image' => 'https://images.impresa.pt/sicnot/2023-02-14-sf23.jpg-f1206aff-1',
                        ]
                        )
                    @endcomponent</div>
                <div class="col">@component('components.gallery.gallery',
                        [
                        'image' => 'https://images.impresa.pt/sicnot/2023-02-14-sf23.jpg-f1206aff-1',
                        ]
                        )
                    @endcomponent
                </div>
            </div>
@endsection
