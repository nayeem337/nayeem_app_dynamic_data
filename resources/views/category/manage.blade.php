
@extends('master')

@section('title')
    Manage Category Page
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center"> All Category Information </div>
                        <div class="card-body">

                            <h4 class="text-center text-success"> {{session('message')}} </h4>

                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> SL NO </th>
                                    <th> Category Name </th>
                                    <th> Category Description </th>
                                    <th> Category Image </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($categories as $category)
                                    <tr>
                                        <td> {{$loop->iteration}} </td>
                                        <td> {{$category->name}} </td>
                                        <td> {{$category->description}}  </td>
                                        <td> <img src="{{ asset($category->image)  }}" alt="" height="60" width="80"> </td>
                                        <td>
                                            <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-success btn-sm"> Edit </a>
                                            <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this!')"> Delete </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
