@extends('layouts.user')

@section('content')
<main class="pt-2 mx-lg-5">
    <div class="container-fluid mt-5 pt-4">
        <h1 class="h1-responsive mb-4">My Profile</h1>
            <div class="row ">
                <div class="col-md-5">
                    <!-- Material form login -->
            <div class="card ">
                <!--Card content-->
                <div class="card-body px-lg-5 py-5">

                  <!-- Form -->
                  <form class="text-center" style="color: #757575;" action="#!">
                    <!-- Email -->
                    <div class="md-form">
                      <input type="text" name="client-id" class="form-control" disabled placeholder="SM-20165878">
                      <label for="">Client Id</label>
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                      <input type="text" name="name"  class="form-control">
                      <label for="">Full Name</label>
                    </div>
                    <div class="md-form">
                        <input type="email" name="email"  class="form-control">
                        <label for="">Email</label>
                    </div>
                    <div class="md-form">
                        <textarea  class="form-control md-textarea" rows="3"></textarea>
                        <label for="">Address</label>
                    </div>

                    <div class="md-form">
                        <input type="text" name="mobile"  class="form-control">
                        <label for="">Phone Number</label>
                    </div>


                    <!-- Sign in button -->
                    <button class="btn btn-custom text-white btn-block my-4 waves-effect z-depth-0" type="submit">Chnage Profile</button>


                  </form>
                  <!-- Form -->

                </div>

              </div>

                </div>

    </div>
</main>
@endsection
