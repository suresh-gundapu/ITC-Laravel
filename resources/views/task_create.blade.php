@extends('layouts.master')
@section('title','Task')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Task</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Task</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Task</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      @if ($message = Session::get('success'))
      <p class="text-primary text-center">{{ $message }}</p>
      @endif
      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <form action="{{ url('task-save') }}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-12 form-group">
                <input type="text" name="title" class="form-control" id="title" placeholder="Your Title">
                @error('title')
                <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
              <div class="col-md-12 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="description" id="description" placeholder="Your Description">
                @error('description')
                <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
            </div>

            <div class="text-center"><button type="submit">Create</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->


</main><!-- End #main -->


@stop