@extends('layouts.layout')
@section('content')
<section style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('svg/smarttax.jpg');background-size:cover;height:650px;">
    <div class="container text-white py-5">
        <div class="row">
            <div class="col-md-6 ml-auto">
            <h1 class="h1 h1-responsive  pt-5 mt-5" style="font-size:61px;">SmartTax ONLINE <br>2020.</h1>
        <p class=" " style="letter-spacing:1px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta facere similique consectetur possimus autem sapiente alias. Ratione nam aliquam quis doloribus illo saepe sed consectetur delectus cum labore</p>
        <a href="" class="btn btn-custom px-5 white-text">Get Started</a>
            </div>
        </div>

    </div>
</section>
<!--why smarttax-->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Why SmartTax</p>
                <h1 class="h1 h1-responsive">
                We Provide Proper Tax <br>Solutions
                </h1>
                <p class="pt-3 text-justify">Over a million Canadians put their trust in UFile products every year. File smart with UFile’s 20 years of experience serving Canadian taxpayers.</p>
                <p class=" text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
            <div class="col-md-5 ml-5">
                <img src="{{url('svg/whysmart.jpg')}}" class="immg img-fluid">
            </div>
            <a href=" " class="btn btn-custom btn-md white-text px-5">See More</a>
        </div>
    </div>
</section>
<!--products-->
<section class="py-5" style="background:#F6F6F6;">
    <div class="container py-3">
        <h2 class="h2 h2-responsive pb-2 site-color text-center">Our Products</h2>
        <p class="text-center">There are many variations of passages of Lorem Ipsum available, but the majority have<br> suffered alteration in some form, by injected humour.   </p>
        <div class="row py-4">
            <div class="col-md-4">
                <!-- Card -->
                <div class="card card-product" style="box-shadow:none;border-bottom:3px solid #1BBCAA;">

                <!-- Card image -->
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

                <!-- Card content -->
                <div class="card-body text-center py-4">

                <!-- Title -->
                <h4 class="card-title"><a href="" class="site-color">SmartTax<br> Online</a></h4>
                <!-- Text -->
                <p class="card-text" style="font-family: 'Raleway', sans-serif!important;">There are many variations of passag Lorem Ipsum available, but the majority have sfered alteration in some form.
                    </p>
                </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-md-4">
                <!-- Card -->
                <div class="card card-product" style="box-shadow:none;border-bottom:3px solid #1BBCAA;">

                <!-- Card image -->
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

                <!-- Card content -->
                <div class="card-body text-center py-4">

                <!-- Title -->
                <h4 class="card-title"><a href="" class="site-color">SmartTax for <br>Corporation</a></h4>
                <!-- Text -->
                <p class="card-text">There are many variations of passag Lorem Ipsum available, but the majority have sfered alteration in some form.
                    </p>
                </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-md-4">
                <!-- Card -->
                <div class="card card-product" style="box-shadow:none;border-bottom:3px solid #1BBCAA;">

                <!-- Card image -->
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

                <!-- Card content -->
                <div class="card-body text-center py-4">

                <!-- Title -->
                <h4 class="card-title"><a href="" class="site-color">Community volunteer income tax program</a></h4>
                <!-- Text -->
                <p class="card-text">There are many variations of passag Lorem Ipsum available, but the majority have sfered alteration in some form.
                    </p>
                </div>

                </div>
                <!-- Card -->
            </div>
         </div>
    </div>
</section>
<!--calculator-->
<section class="py-5" style="background:#181818;">
    <div class="container text-white py-5">
        <h1 class="h1 h1-responsive text-center ">CREATE . PROCESS . EXECUTE</h1>
        <p class="text-center px-5 py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sit rerum earum corporis ratione, velit, doloremque eius quaerat praesentium atque, voluptatibus harum consectetur eveniet cum. Modi consectetur voluptate eaque nobis!
        </p>
        <div class="text-center">
            <a href="" class="btn btn-md btn-custom px-5">
            Register Now
            </a>
        </div>
    </div>
</section>
<section class="my-5 py-5">
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
            <img src="{{asset('svg/tip.jpg')}}" class="img img-fluid">
            </div>
            <div class="col-md-6 pl-5 m-0 px-0">
                <h1 class="h1 h1-responsive site-color" >
                    Tax Tips
                </h1>
                <div class="border-text">
                </div>
                <p class="pt-4   text-color">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste dolorem itaque repellendus delectus optio ullam minus beatae ad? Eos eius ex suscipit, voluptatibus quas ab commodi impedit natus inventore amet!
                    tio ullam minus beatae ad? Eos eius ex suscipit, voluptatibus quas ab commodi..
                </p>
                <p class="text-justify text-color">optio ullam minus beatae ad? Eos eius ex suscipit, voluptatibus quas ab commodi impedit natus inv</p>
                <a href="" class="btn btn-custom btn-md px-5 white-text">See More</a>
            </div>
        </div>
    </div>
</section>
@endsection
