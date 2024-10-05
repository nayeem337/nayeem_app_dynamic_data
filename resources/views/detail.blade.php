@extends('master')


@section('title')
    Blog Detail Page
@endsection


@section('body')

    <section class="py-5">
       <div class="container">
           <div class="row">
               <div class="col">
                   <div class="card card-body">
                       <h1> {{ $blog->title }} </h1>
                       <img src="{{asset($blog->image)}}" alt="" class="my-4" height="400" width="1000" />
                       <hr/>
                        <p> {{$blog->description}} </p>
                   </div>
               </div>
           </div>
       </div>
    </section>

@endsection
