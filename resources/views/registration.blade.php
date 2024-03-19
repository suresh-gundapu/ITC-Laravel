@extends('layouts.master')
@section('title','Registration')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Registration</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Registration</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Registration</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="form-group mt-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your UserName">
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Your password">
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Registration</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->


</main><!-- End #main -->

@stop