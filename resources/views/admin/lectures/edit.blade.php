@extends('admin.layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Lectures</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Lectures</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->

        @if ($errors->any())
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

        @endif
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Lecture</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.lectures.update',$lecture->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                    <label for="title">Lecture Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Subject Title" value="{{$lecture->title}}">
                    </div>
                    <div class="form-group">
                        <label>Lecture Description</label>
                        <textarea class="form-control" rows="3" name="description" placeholder="Enter Description ...">{{$lecture->description}}</textarea>
                    </div>
                    <div class="form-group">
                    <label for="image">Image</label>
                    <a href="{{asset('uploaded/'.$lecture->image)}}" target="_blank" >
                        <img src="{{asset('uploaded/'. $lecture->image)}}" width="50px" height="50px" alt="{{$lecture->title}}" title="{{$lecture->title}}" srcset="">
                    </a> (current image)
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose image</label>
                        </div>

                    </div>
                    </div>
                    {{-- <div class="form-group">
                        <label>Course Name</label>
                        <select class="form-control" name="course_id">
                        <option selected disabled>Select Course</option>
                        @foreach ($courses as $course )
                        <option
                        @if ($lecture->course_id == $course->id)
                        selected
                    @endif
                         value="{{$course->id}}">{{$course->title}}</option>
                        @endforeach
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label for="link">Lecture Iframe</label>
                        <input type="text" class="form-control" name="link" id="link" placeholder="Enter Lecture Iframe" value="{{$lecture->link}}">
                    </div>



                </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
      </div>
    </div>
  </section>




@endsection
