@extends('layouts.master')
@section('title','Login')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>LOGIN</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Login</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Login</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="col-md-12 form-group mt-3 mt-md-0">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Your password">
                            </div>
                        </div>

                        <div class="text-center"><button type="submit">Login</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->


</main><!-- End #main -->


@stop