@extends('master.main')

@section('content')
    <div>
        <div class="row">
            <div class="col-12 mb-5">
                @component('components.carrousel.carrousel',
                [
                'image' => 'https://images6.alphacoders.com/130/1303198.jpg',
                'image2' => 'https://wallpapers.com/images/hd/red-bull-f1-rb14-9atrk600o8ti42jl.jpg',
                'image3' => 'https://e1.pxfuel.com/desktop-wallpaper/63/479/desktop-wallpaper-f1-ultra-formula-1.jpg',
                ]
                )
                @endcomponent
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-4 mb-5 mt-5">
                        @component('components.cards.card',
                        [
                        'title' => 'Ferrari',
                        'description' => 'Ferrari F1',
                        'image' => 'https://images.impresa.pt/sicnot/2023-02-14-sf23.jpg-f1206aff-1',
                        ]
                        )
                        @endcomponent
                    </div>
                    <div class="col-4 mb-5 mt-5">
                        @component('components.cards.card',
                        [
                        'title' => 'Mercedes',
                        'description' => 'Mercedes F1',
                        'image' => 'https://images.impresa.pt/sicnot/2023-02-15-mercedes.jpg-ae457c7d-1',
                        ]
                        )
                        @endcomponent
                    </div>
                    <div class="col-4 mb-5 mt-5">
                        @component('components.cards.card',
                        [
                        'title' => 'Red Bull',
                        'description' => 'Red Bull F1',
                        'image' => 'https://cdn-7.motorsport.com/images/mgl/6n9RnBeY/s8/red-bull-racing-rb18-1.jpg',
                        ]
                        )
                        @endcomponent
                    </div>

                </div>
            </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-6 mb-5 mt-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dicta numquam praesentium! Assumenda, dignissimos, sit?</p>
                </div>
                   <div class="col-6 mb-5 mt-5">
                       <img src="https://www.topgear.com/sites/default/files/2022/05/0-Monaco-Track-Tour.jpg?w=424&h=239" alt="">
                   </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 mb-5 mt-5">
                <img src="https://www.topgear.com/sites/default/files/2022/05/0-Monaco-Track-Tour.jpg?w=424&h=239" alt="">

            </div>
            <div class="col-6 mb-5 mt-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, aliquam amet cum, cupiditate deserunt doloremque doloribus earum eligendi est ex fugit illo minima nulla optio quasi quidem voluptatum. Ipsam, saepe?</p>
            </div>
        </div>
    </div>

@endsection

