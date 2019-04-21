@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-header">Add offer</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open([
                        'route' => 'job.store'
                    ]) !!}
                        <div class="row form-group">
                            <div class="col-md-7">
                                <label for="title">Job title</label>
                                <input type="text" name="title" class="form-control" required autofocus>
                            </div>
                            <div class="col-md-5">
                                <label for="category">Category</label>
                                <select name="category_id" class="form-control" required>
                                    @foreach ($categories as $c)
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="job_type_id">Job type</label>
                                <select name="job_type_id" class="form-control" required>
                                    @foreach ($job_types as $jt)
                                        <option value="{{$jt->id}}">{{$jt->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="job_level_id">Job level</label>
                                <select name="job_level_id" class="form-control" required>
                                    @foreach ($job_levels as $jl)
                                        <option value="{{$jl->id}}">{{$jl->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="description">Description</label>
                                <text-editor></text-editor>
                            </div>
                        </div>

                        <hr>
                        
                        <div class="row form-group">
                            <div class="col-md-12">
                                <small>Optional</small>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label for="from">From</label>
                                <input type="number" min="0" name="from" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="to">To</label>
                                <input type="number" min="0" name="to" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="currency">Currency</label>
                                <select name="currency" id="currency" class="form-control">
                                    <option value="" selected hidden>Select a currency</option>
                                    <option value="usd">USD</option>
                                    <option value="eur">EUR</option>
                                    <option value="gbp">GBP</option>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="other_apply">Apply link</label>
                                <input type="url" name="other_apply" class="form-control">
                            </div>
                        </div>

                        <hr>

                        <location></location>

                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Post a offer" class="btn btn-outline-secondary btn-block">
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
