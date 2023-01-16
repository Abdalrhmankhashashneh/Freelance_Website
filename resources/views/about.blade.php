@extends('layout.master')
{{-- css link here V --}}
@section('style_up')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('style_down')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

{{-- JS link here V --}}
@section('script_down')
<script>
    console.log('hi mister abd hi baasil');
</script>
@endsection





{{-- Html here V --}}
@section('content')
<div class="cover">
    <h1>About US </h1>
</div>
<section class="row left-tright c3">
   
    <div class="col">
        <div class="box_img">
            <img src="{{ asset('img/svg/undraw_positive_attitude_re_wu7d.svg') }}" width="100%" alt="image">
        </div>
    </div>
    <div class="col">
        <div class="box">
            <div class="text">
                <div class="black-bold c3">
                    <h2>Who are we</h2>
                    <p>We are a team of passionate people, and we try to work and be creative in our field. Here our story begins, and here is our goal.</p>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection