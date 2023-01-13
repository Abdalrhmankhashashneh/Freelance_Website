@extends('layout.master')
{{-- css link here V --}}
@section('style_up')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('style_down')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

{{-- JS link here V --}}
@section('script_down')
<script>
    window.scrollTo(0, 0);
    ciarcle = document.querySelector('.arrow');
    let bottom = 0;
      bottom  = ciarcle.getBoundingClientRect().bottom;
    let row = document.querySelectorAll('.row');
      console.log(bottom);
var i = 1;
console.log(row);
ciarcle.addEventListener('click', function (e) {
e.preventDefault();
    if( i < row.length){
        if(i+1 == row.length){
            ciarcle.innerHTML = 'X';
        }
        
        row[i].scrollIntoView({
            behavior: 'smooth'
        });
        i++;
    }
    else{
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        ciarcle.innerHTML = 'V';
        i = 1;
    }
    
});
</script>
@endsection





{{-- Html here V --}}
@section('content')

{{-- arrow down botton here  --}}

<div class="ciarcle">
    <div>

        <a class="arrow" href="#">
           V
        </a>
    </div>
  </div>

<section class="row ">

    <div class="col">
        <div class="box_img">
            <img src="{{ asset('img/svg/undraw_building_websites_i78t.svg') }}" width="100%" alt="image">
        </div>
    </div>
    <div class="col">
        <div class="box">
            <div class="text">
                <div class="black">
                    <h1>Bulid Your Website
                        in a Recod Time</h1>
                    {{-- <p>Lordtik is a web development company that provides web development services to its
                        customers. We are a team of web developers who are passionate about web development and are
                        always ready to help you with your web development needs.</p> --}}
                </div>
                <a class="btn" href="{{ route('about') }}" class="btn btn-primary">Start with us now </a>
            </div>
        </div>
    </div>

</section>

{{-- step 1: --}}

<section class="row left-tright">
    <h1>Requirements First</h1>
    <div class="col">
        <div class="box_img">
            <img src="{{ asset('img/svg/undraw_wait_in_line_o2aq.svg') }}" width="100%" alt="image">
        </div>
    </div>
    <div class="col">
        <div class="box">
            <div class="text">
                <div class="black-bold">
                    <h2>We will study
                        your requerments</h2>
                    <p>How the website desgin will be ?<br />
                        What you want to do in the website ?<br />
                        What is the main goal of the website ?<br /></p>
                </div>
            </div>
        </div>
    </div>

</section>

{{-- step 2: --}}
<section class="row ">
    <h1 class="light">Wireframe & Mockup</h1>

    <div class="col">
        <div class="box_img">
            <img src="{{ asset('img/svg/undraw_design_sprint_re_tke3.svg') }}" width="100%" alt="image">
        </div>
    </div>
    <div class="col">
        <div class="box">
            <div class="text">
                <div class="black">
                    <h2>See simple design</h2>
                    <p>We will make a simple design for your website to be comfired that we get your requerment well ;</p>
                </div>
               
            </div>
        </div>
    </div>

</section>


{{-- step 3: --}}

<section class="row left-tright">
    <h1>Time to leave It to US</h1>
    <div class="col">
        <div class="box_img">
            <img src="{{ asset('img/svg/undraw_a_moment_to_relax_re_v5gv.svg') }}" width="100%" alt="image">
        </div>
    </div>
    <div class="col">
        <div class="box">
            <div class="text">
                <div class="black-bold">
                    <h2>Take a coffee and get on tuch</h2>
                    <p>We will take the work from her . If you interst how we will work after , We will use our workspace and share your requirment to our team and get the work start .</p>
                </div>
            </div>
        </div>
    </div>

</section>

{{-- step 4: --}}
<section class="row ">
    <h1 class="light">Take a look </h1>

    <div class="col">
        <div class="box_img">
            <img src="{{ asset('img/svg/undraw_experience_design_re_dmqq.svg') }}" width="100%" alt="image">
        </div>
    </div>
    <div class="col">
        <div class="box">
            <div class="text">
                <div class="black">
                    <h2>Is everything  alright</h2>
                    <p>After we finish we will ask you to get a look on the prototpye and We will noted the feedback from you and  all edits to ensure everything work fine with you .</p>
                </div>
               
            </div>
        </div>
    </div>

</section>



{{-- step 5: --}}

<section class="row left-tright">
    <h1>Work in edits if It exiest</h1>
    <div class="col">
        <div class="box_img">
            <img src="{{ asset('img/svg/undraw_online_test_re_kyfx.svg') }}" width="80%" alt="image">
        </div>
    </div>
    <div class="col">
        <div class="box">
            <div class="text">
                <div class="black-bold">
                    <h2>Back to work </h2>
                    <p>We will work on all the edits that you mention in your feedback and make sure all done correctly .</p>
                </div>
            </div>
        </div>
    </div>

</section>

{{-- step 6: --}}
<section class="row ">
    <h1 class="light">Last Stepe Get your website </h1>
    
    <div class="col">
        <div class="box_img">
            <img src="{{ asset('img/svg/undraw_heatmap_uyye.svg') }}" width="100%" alt="image">
        </div>
    </div>
    <div class="col">
        <div class="box">
            <div class="text">
                <div class="black">
                    <h2>Get your website</h2>
                    <p>Take a look to the final reselt of your website and let's started to publish it so erveryone can see it .</p>
                </div>
               
            </div>
        </div>
    </div>
    
</section>

<section class="row left-tright">
    <h1>Support & Training</h1>
    <div class="col">
        <div class="box_img">
            <img src="{{ asset('img/svg/undraw_developer_activity_re_39tg.svg') }}" width="80%" alt="image">
        </div>
    </div>
    <div class="col">
        <div class="box">
            <div class="text">
                <div class="black-bold">
                    <h2>Have a question ? </h2>
                    <p>We will learn and make you know how the website work and how you can use it and offcours We will happy to answer your questions </p>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection