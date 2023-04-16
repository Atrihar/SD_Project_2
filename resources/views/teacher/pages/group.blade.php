@extends('teacher.layouts.default')
@section('content')
    < <main id="main" class="main">

        <div class="pagetitle">
            <h1>Group</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Group</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-8">
                    <h3>
                        Look at the Groups
                    </h3>
                </div>

                <p></p>
                <div class="card">
                    <div class="card-body">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">name</th>
                                    <th scope="col">Course Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($group as $g)
                                <tr>
                                    <td>{{ $g->name }}</td>
                                    <td>{{ $g->course_id }}</td>
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
