@extends('personal.layout')

@section('content')
<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Get in touch</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <!-- /resources/views/post/create.blade.php -->

<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
                    <h1>Basic Form</h1>
                    <form action="{{ route('personal.contact_data') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid

                            @enderror " />
                            @error('name')
                          <small class="invalid-feedback">{{ $message }}</small>

                          @enderror
                            <label for="name">Full name</label>

                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input type="email" name="email" placeholder="Email" class="form-control  @error('email') is-invalid

                            @enderror">
                            @error('email')
                            <small  class="invalid-feedback">{{ $message }}</small>

                            @enderror
                            <label for="email">Email address</label>

                        </div>

                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input type="text" name="phone" placeholder="Phone" class="form-control @error('phone') is-invalid

                            @enderror " />
                            @error('phone')
                          <small class="invalid-feedback">{{ $message }}</small>

                          @enderror
                            <label for="phone">Phone number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <label class="mb-10" ">Cv write</label>
                            <input type="file" name="cv"  class="form-control">


                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea  name="message" placeholder="Message" rows="5" style="height: 10rem" class="form-control @error('message') is-invalid @enderror">@error('message')<small class="invalid-feedback">{{ $message }}</small>@enderror</textarea><label for="message">Message</label>
                        </div>
                        <div class="form-floating mb-3">
                    <button class="btn btn-success px-5">Send</button>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
