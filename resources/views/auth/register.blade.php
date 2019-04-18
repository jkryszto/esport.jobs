@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::open([
                        'route' => 'register',
                        'files' => 'true'
                    ]) !!}

                       <logo-preview></logo-preview>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="name">Company name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" autocomplete="name" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="description">Description</label>
                                <text-editor></text-editor>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="location">Location</label>
                                <input type="text" name="location" class="form-control" value="{{ old('location') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="url">Website</label>
                                <input type="url" name="url" value="{{ old('url') }}" class="form-control">
                            </div>
                        </div>

                        <hr>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="email">E-Mail Address</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="password_confirmation">Confirm password</label>
                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Register" class="btn btn-light btn-block">
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
