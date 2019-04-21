@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$job->title}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-4">
                            <strong>{{$user->name}}</strong>
                            <img src="{{asset('storage/'.$user->logo)}}" alt="{{$job->user->name}} Logo" class="img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            <ul class="mb-2">
                                <li>{{$job->category->name}}</li>
                                <li>{{$job->job_level->name}}</li>
                                <li>{{$job->job_type->name}}</li>
                            </ul>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            {!! $job->description !!}
                        </div>
                    </div>  
                    <hr>
                    <div class="row">
                        <div class="col-md-12">                            
                                {{-- @isset($job->other_apply)
                                    <a href="{{$job->other_apply}}" class="btn btn-dark btn-block">Apply (other website)</a>
                                @else --}}
                                    {!! Form::open([
                                        'route' => ['job.apply', $job],
                                        'files' => 'true'
                                    ]) !!}
                                        <div class="row form-group">     
                                            <div class="col-md-6">
                                                <label for="firstname">Firstname</label>
                                                <input type="text" name="firstname" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="surname">Surname</label>
                                                <input type="text" name="surname" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row form-group">     
                                            <div class="col-md-12">
                                                <label for="email">E-mail address</label>
                                                <input type="text" name="email" class="form-control" required>
                                            </div>                                          
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="phone">Mobile phone</label>
                                                <input type="text" name="phone" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="location">Location</label> <small>Just city and country</small>
                                                <input type="text" name="location" class="form-control">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="cv">Upload CV</label>
                                                <input type="file" name="cv" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="cover_letter">Cover letter</label>
                                                <input type="file" name="cover_letter" class="form-control" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="linkedin">Linkedin url</label>
                                                <input type="text" name="linkedin" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control" placeholder="Write some about yoursefl. Later github links or something"></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <input type="submit" value="Apply" class="btn btn-warning btn-block">
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                {{-- @endisset --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
