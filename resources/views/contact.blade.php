@extends('layout.master')
{{-- css link here V --}}
@section('style_up')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('style_down')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
    <h1>Contact US </h1>
</div>
<section class="row left-tright c4">
   
    <div class="col">
        <div class="box_img">
            <img src="{{ asset('img/svg/undraw_developer_activity_re_39tg.svg') }}" width="100%" alt="image">
        </div>
    </div>
    <div class="col ">
        <div class="box">
            <div class="text">
                <div class="black-bold c4">
                    <h2>How We can help</h2>
                    <p>Any time you call us on : <span class="c1" style="padding: 5px; border-radius: 30px;">00962781959937 </span>  <br/> <br/>Or you can fill the form belwo to we can contact you </p>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="row">
    <div class="form">

        <h1 class="c2">Get In Tuch </h1>
        <div class="input-gruop">
            <label for="name"> Full Name</label>
            <input type="text" name="name">
            <label for="email"> Email</label>
            <input type="text" name="email">
            <label for="subject"> Subject</label>
            <input type="text" name="subject">
            <label for="Message"> Message</label>
            <textarea name="" id="" cols="30" rows="10" name="message">
            </textarea>
                <a href="" class="btn">Send</a>
        </div>

    </div>
    
</section>
@endsection