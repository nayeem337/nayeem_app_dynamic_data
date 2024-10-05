@extends('master')

@section('title')
    Password-Generator Page
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header"> Password Generator Program </div>
                        <div class="card-body">
                            <form action="{{route('make-password')}}" method="POST" >
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-4"> Enter Your Password Length </label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="password_length" />
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-4"> Your Password  </label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{session('message')}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Create New Password" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
