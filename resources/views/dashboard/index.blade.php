@extends('layouts.app')
@section('DashboardTitle', 'Index Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">INDEX PAGE</div>

                <div class="card-body">
                  @foreach($jobs as $job)
                              <!-- START JOB DETAILS -->
                                <div class="col-xs-12">
                                <div class="jobs-block">
                                  <header>
                                    <div class="hgroup">
                                      <h4>
                              <a href="{{ route('jobs.show', $job->slug)}}">{{ $job->job_title }}</a>
                                      </h4>
                                       <div class="spacer-front"></div>
                                    </div>

                                  </header>

                                  <footer>
                                    <div class="status"><strong>Posted: &nbsp;<i class="fa fa-clock-o"></i></strong>{{ $job->created_at->diffForHumans() }}&nbsp; </div>
 <!-- edit button starts here -->
                                    <div class="action-btn">
                                      <a class="btn btn-xs btn-info" href="{{route('dashboard.edit', $job->id)}}">edit</a>
                                    </div>
                                    <!-- delete button start here -->
                                    <div class="action-btn">
                                      <a class="btn btn-xs btn-danger" href="{{route('dashboard.destroy', $job->id)}}">delete</a>
                                    </div>
                                  </footer>
                                </div>
                              </div>
                  @endforeach
                                           <!-- END JOB DETAILS -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
