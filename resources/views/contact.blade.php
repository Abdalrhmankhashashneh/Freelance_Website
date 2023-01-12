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

<section>
    <h1>hi mister abd hi baasil </h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic quas facere fuga ab temporibus, recusandae, similique laborum reiciendis iste a, ducimus fugit dicta repudiandae. Facilis eius ratione optio reprehenderit.
    </p>
</section>
@endsection