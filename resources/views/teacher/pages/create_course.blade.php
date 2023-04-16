@extends('teacher.layouts.default')
@section('content')
    < <main id="main" class="main">

        <div class="pagetitle">
            <h1>Course</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create Course</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-8">
                    <h3>
                        Create Course
                    </h3>
                </div>

                <p></p>
                <div class="card">
                    <div class="card-body">
                        <p></p>
                        <form method="post" action="{{ url('teacher/save_course') }}" class="row g-3">
                            @csrf
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="title" name="title" placeholder="Course title">
                              <label for="floatingName">Course title</label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="code" name="code" placeholder="Course code">
                              <label for="floatingName">Course code</label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="session" name="session" placeholder="Enter session">
                              <label for="floatingName">Session</label>
                            </div>
                          </div>

                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                          </div>
                        </form>

                      </div>
                </div>

            </div>
        </section>

        </main>
    @endsection
