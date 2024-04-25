@extends('app')

@section('content')
<div class="imgGame" style="background-image: url('{{ asset('assets/img/gamingLarge.jpg') }}');background-size: cover;">
</div>
<div class="container  px-4">
    <div class="flexJustify flex-wrap">
        <img src="{{ asset('assets/img/1.png') }}" class="" width="500px" class="" alt="">
        <img src="{{ asset('assets/img/2.png') }}" class="bounce" width="600px" class="" alt="">
    </div>
</div>
<div>
    <h3 id="element" class="textWhite text-center mt-5"></h3>
</div>
@endsection
