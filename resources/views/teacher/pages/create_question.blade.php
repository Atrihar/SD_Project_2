@extends('teacher.layouts.default')
@section('content')
    < <main id="main" class="main">

        <div class="pagetitle">
            <h1>Course</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create Question</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-8">
                    <h3>
                        Create Question
                    </h3>
                </div>

                <p></p>
                <div class="card">
                    <div class="card-body">
                        <p></p>
                        <form method="post" action="{{ url('teacher/save_question') }}" class="row g-3">
                            @csrf
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Group Name">
                              <label for="floatingName">Name</label>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="group_id" name="group_id" placeholder="Course code">
                              <label for="floatingName">Group ID</label>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="ques" name="ques" placeholder="Course code">
                              <label for="floatingName">Question</label>
                            </div>
                          </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="attachment" name="attachment" placeholder="Course code">
                              <label for="floatingName">Attachment</label>
                              <label for="floatingName">Attachment</label>
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
