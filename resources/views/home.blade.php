@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    @empty (Auth::user()->email_verified_at)
                        <div class="alert alert-info">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                        </div>
                    @endempty

                    @foreach (Auth::user()->jobs as $j)
                        <hr>
                        <div>
                            <a href="{{route('job.show', [Auth::user()->alias, $j->alias])}}"><dt>{{$j->title}}</dt></a>
                            <ul class="m-0">
                                <li>{{$j->category->name}}</li>
                                <li>{{$j->job_level->name}}</li>
                                <li>{{$j->job_type->name}}</li>
                            </ul>
                            {!! Form::open(['route' => ['job.disable', $j]]) !!}
                                <input type="submit" value="Disable">
                            {!! Form::close() !!}
                        </div> 
                    @endforeach

                    {{-- <hr>
                    @foreach (Auth::user()->jobs()->onlyTrashed()->get() as $j)
                        <a href="{{route('job.show', [Auth::user()->alias, $j->alias])}}"><dt>{{$j->title}}</dt></a>
                        {!! Form::open(['route' => ['job.renew', $j]]) !!}
                            <input type="submit" value="Renew">
                        {!! Form::close() !!}
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
