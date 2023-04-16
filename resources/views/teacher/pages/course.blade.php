@extends('teacher.layouts.default')
@section('content')
    < <main id="main" class="main">

        <div class="pagetitle">
            <h1>Course</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Course</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-8">
                    <h3>
                        Look at the courses
                    </h3>
                </div>

                <p></p>
                <div class="card">
                    <div class="card-body">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $c)
                                <tr>
                                    <td>{{ $c->title }}</td>
                                    <td>{{ $c->code }}</td>
                                    <td>{{ $c->session }}</td>
                                    <td>{{ $c->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </section>

        </main>
    @endsection
