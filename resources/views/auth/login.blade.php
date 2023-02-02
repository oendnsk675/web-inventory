@extends('layouts.auth.index')
@section('content')
<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image object-cover relative overflow-hidden h-300px">
        <img src="{{ url('assets/images/bg-login.jpg') }}" class="position-absolute h-100 w-100 top-0 left-0 object-cover" alt="background">      
    </div>
    <!-- Background image -->
  
    <div class="w-100 d-flex justify-content-center">
      <div class="card rounded-3 border mx-4 col-10 col-md-6 mx-md-5 shadow-5-strong" style="
            margin-top: -250px;
            background: hsla(0, 0%, 100%, 0.8);
            backdrop-filter: blur(30px);
            ">
        <div class="card-body py-5 px-md-5">
    
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">

              {{-- logo --}}
              <div class="d-flex justify-content-center mb-5">
                <div class="circle-md"></div>
              </div>
              {{-- logo --}}
              
              <h2 class="fw-bold mb-5">Login</h2>
              <form>
                <!-- Email input -->
                <div class=" mb-4">
                  <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Email" />
                </div>
    
                <!-- Password input -->
                <div class=" mb-4">
                  <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Password" />
                </div>
    
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 w-100">
                  Login
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</section>
<!-- Section: Design Block -->
@endsection
