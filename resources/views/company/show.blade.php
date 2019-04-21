@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$company->name}}</div>

                <div class="card-body">
                    <div class="row form-group">
                        <div class="col-md-3 text-center align-self-center">
                            <img src="{{asset('storage/'.$company->logo)}}" alt="{{$company->name}} Logo" class="img-thumbnail">
                        </div>
                        <div class="col-md-3 text-center align-self-center">
                            <strong>{{$company->name}}</strong>
                        </div>
                        <div class="col-md-3 text-center align-self-center">
                            {{$company->location}}
                        </div>
                        <div class="col-md-3 text-center align-self-center">
                            <a href="{{$company->url}}">Website</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! $company->description !!}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <dt>Avaliable jobs</dt>
                            <ul>
                                @foreach ($company->jobs as $j)
                                    <li><a href="{{route('job.show', [$company->alias, $j->alias])}}">{{$j->title}}</a></li>
                                @endforeach
                            </ul>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
