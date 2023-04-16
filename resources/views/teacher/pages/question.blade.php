@extends('teacher.layouts.default')
@section('content')
    < <main id="main" class="main">

        <div class="pagetitle">
            <h1>Questions</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Question</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-8">
                    <h3>
                        Look at the Questions that you prepared
                    </h3>
                </div>

                <p></p>
                <div class="card">
                    <div class="card-body">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Group</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Attachment</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($question as $q)
                                <tr>
                                    <td>{{ $q->name }}</td>
                                    <td>{{ $q->group_id }}</td>
                                    <td>{{ $q->ques }}</td>
                                    <td>{{ $q->attachment }}</td>
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
