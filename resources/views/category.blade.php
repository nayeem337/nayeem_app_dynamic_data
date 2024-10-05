@extends('master')


@section('title')
  Blog  Category Page
@endsection


@section('body')

<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-4">
              <div class="card">
                  <img src="{{asset($blog->image)}}" alt="" height="250" />
                  <div class="card-body">
                      <h4> {{$blog->title}} </h4>
                      <p> {{substr($blog->description, 0, 70).'...'}} </p>
                      <hr/>
                      <a href="{{route('detail', ['id' => $blog->id])}}" class="btn btn-success"> Read More... </a>
                  </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
