<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Illuminate\Support\Str;
use App\Http\Requests\StoreJobRequest;
use App\Category;
use App\JobType;
use App\JobLevel;
use App\User;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function show($alias, $job_alias)
    {
        $user = User::where('alias', $alias)->first();
        $job = $user->jobs->where('alias', $job_alias)->first();

        return view('job.show', compact('user', 'job'));
    }

    public function create()
    {
        $categories = Category::all();
        $job_types = JobType::all();
        $job_levels = JobLevel::all();

        return view('job.create', compact('categories', 'job_types', 'job_levels'));
    }

    public function store(StoreJobRequest $request)
    {
        $offer = new Job();
        $offer->user_id = $request->user()->id;
        $offer->title = $request->title;
        $offer->alias = Str::slug($request->title, '-');
        $offer->category_id = $request->category_id;
        $offer->job_type_id = $request->job_type_id;
        $offer->job_level_id = $request->job_level_id;
        $offer->description = $request->description;
        $offer->location = $request->location;
        $offer->from = $request->from;
        $offer->to = $request->to;
        $offer->currency = $request->currency;
        $offer->other_apply = $request->other_apply;
        $offer->start_date = date('Y-m-d', time());
        $offer->save();

        return back()->with('status', 'Offer post successfully.');
    }

    public function disable_job(Job $job)
    {
        if(Gate::denies('update-job', $job)) {
            return back();
        }

        $job->delete();
        return back()->with('status', 'Job disable successfully.'); 
    }

    public function apply_for_job(Request $request)
    {
        dd($request->all());
    }

    // public function renew_job(Job $job)
    // {
    //     if(Gate::denies('update-job', $job)) {
    //         return back();
    //     }

    //     $job->start_date = date('Y-m-d', time());
    //     $job->update();
    //     $job->restore();
    
    //     return back()->with('status', 'Job renew successfully.'); 
    // }
}
