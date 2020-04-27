@extends('layouts.layout')
@section('content')

<style>
    .w-200 {
      width: 200px;
    }
  </style>

<section style="background:linear-gradient(rgba(27,188,160,0.5),rgba(27,188,160,0.5)),url('svg/partners.jpg');background-size:cover;">
    <div class="container py-3">
        <div class="py-5">
            <h1 class="white-text text-center h1 h1-responsive ">Partners</h1>
            <p class="text-font text-center text-white">
            <a href="{{url('/')}}" class="white-text"> Home</a>/Partners
            </p>

        </div>
    </div>
</section>
<div class="container py-5">
    <section class=" text-center text-lg-left">
      <h2 class=" font-weight-bold mb-4 pb-1">Our Partners</h2>
      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="card">
            <div
              class="avatar w-100 white d-flex justify-content-center align-items-center"
            >
            <img src="{{asset('svg/Pic-Saiful.jpg')}}"
            class="img-fluid"
          />
            </div>
            <div class="card-body">
              <p class="font-weight-bold my-2">Syed Saiful Hasan</p>
              <p class="text-muted">CPA, CGA</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="card">
            <div
              class="avatar w-100 white d-flex justify-content-center align-items-center">
              <img
                src="{{asset('svg/Pic-Hafiz.jpg')}}"
                class="img-fluid"
              />
            </div>
            <div class="card-body">
              <p class="font-weight-bold my-2">Hafizur Rahman Khan</p>
              <p class="text-muted"> CPA, CGA</p>
            </div>
          </div>
        </div>

      </div>
    </section>
  </div>

  <div class="container py-5 ">
    <div class="row ">
        <div class="col-md-6">
            <img src="{{asset('svg/service.jpg')}}" class="img img-fluid">
            </div>
        <div class="col-md-6 pl-5">
            <div class="">
                <h3 class="h3 h3-responsive">Our Services</h3>
                <p>
                    We have developed a specialty and reputation for our knowledge and experience in the following areas:
                </p>
                <ul class="list-unstyled text-font">
                    <li class="list-item py-1">
                     <i class="fa fa-check"></i>&ensp;Owner-manager and family owned businesses

                    </li>
                    <li class="list-item py-1">
                        <i class="fa fa-check"></i>&ensp;Home builders, construction, real estate developers and related trades Professional consultants


                    </li>
                    <li class="list-item py-1">
                        <i class="fa fa-check"></i>&ensp;Professionals such as doctors, dentists, optometrists, lawyers, veterinarians

                       </li>
                       <li class="list-item py-1">
                           <i class="fa fa-check"></i>&ensp;Investment holding companies


                       </li>
                       <li class="list-item py-1">
                        <i class="fa fa-check"></i>&ensp;Automotive service and sales

                       </li>
                       <li class="list-item py-1">
                           <i class="fa fa-check"></i>&ensp;Business executives and high net worth individuals and


                       </li>
                       <li class="list-item py-1">
                        <i class="fa fa-check"></i>&ensp;Estate and succession planning including corporate reorganizations


                    </li>
                </ul>
            </div>
        </div>
    </div>
  </div>
@endsection
