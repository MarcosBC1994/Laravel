@extends('master.main')
@section('content')
<div class="container text-center mt-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="mb-5">Contact Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, cum dolorem, doloremque expedita explicabo fugit hic illo ipsam laudantium maiores nemo non obcaecati porro quis sapiente sit vero voluptatem? Unde.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur distinctio doloribus, ducimus, impedit ipsum iusto magnam maiores nulla, officia qui tenetur vitae voluptas. Asperiores exercitationem iste laudantium quae velit!</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, cum dolorem, doloremque expedita explicabo fugit hic illo ipsam laudantium maiores nemo non obcaecati porro quis sapiente sit vero voluptatem? Unde.</p>

        </div>
        <div class="col-3"></div>

    </div>

</div>
<div class="container mb-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            @component('components.forms.forms')
            @endcomponent
        </div>
        <div class="col-3"></div>

    </div>

</div>
@endsection
