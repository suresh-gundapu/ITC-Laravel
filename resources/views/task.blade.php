@extends('layouts.master')
@section('title','Task Read')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Task</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Task Page</li>
                </ol>
            </div>

        </div>

    </section><!-- End Breadcrumbs Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <a href="{{ url('task-create') }}"><button class="btn btn-primary m-2 ">Task create</button></a>
            <div class="row">
                @if ($message = Session::get('delete'))
                <p class="text-primary text-center">{{ $message }}</p>
                @endif
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($data as $k=>$v)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $v['title'] }}</td>
                            <td>{{ $v['description'] }}</td>
                            <td><a href="{{ url('/task-edit')}}/{{ $v['id'] }}">Edit</a>||<a href="{{ url('/task-delete')}}/{{ $v['id'] }}" onclick="confirm('Are you sure to delete?')"> Delete </a></td>
                        </tr>
                        @php $i++ @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section><!-- End About Section -->

</main><!-- End #main -->

@stop