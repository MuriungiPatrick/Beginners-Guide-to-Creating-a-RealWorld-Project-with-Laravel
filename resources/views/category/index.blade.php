@extends('layouts.master')
@section('pagetitle', 'Category Page')
@section('description', 'Hello from the Category Page')

@section('content')
<!-- Site header -->
    <header class="site-header size-lg text-center" style="background-color: #000;">
      <div class="container">
        @if(isset($categoryHeading))
        <h1>Category: {{ $categoryHeading}}</h1
          @endif
      </div>
    </header>
    <!-- END Site header -->
    <!-- Main container -->
    <main>
      <!-- Recent jobs -->
      <section>
        <div class="container">
          <div class="row jobs-details">
            <!-- Job item -->
            @foreach($jobs as $job)
                        <!-- START JOB DETAILS -->
                          <div class="col-xs-12">
                          <div class="jobs-block">
                            <header>
                              <a href="author-jobs-details.html"><img class="resume-avatar" src="{{ asset('assets/img/Team-5-specs.png') }}" alt=""></a>
                              <div class="hgroup">
                                <h4>
                        <a href="{{ route('jobs.show', $job->slug)}}">{{ $job->job_title }}</a>
                                </h4>
                                 <div class="spacer-front"></div>
                              </div>
                              <div class="jobs-meta">
                                <span class="label label-success">{{ $job->job_types }}</span>
                                <span class="label label-warning"><i class="fa fa-dollar"></i> {{ $job->hourly_rate }}</span>
                              </div>
                            </header>

                            <footer>
                              <div class="status"><strong>Posted: &nbsp;<i class="fa fa-clock-o"></i></strong>{{ $job->created_at->diffForHumans() }}&nbsp; By:&nbsp;<a href="author-jobs-details.html">{{ $job->freelance->name}}</a></div>

                              <div class="action-btn">
                                <a class="btn btn-xs btn-info" href="category-details.html">{{ $job->category->title }}</a>
                              </div>
                            </footer>
                          </div>
                        </div>
            @endforeach
                        <!-- END Job item -->



          </div>

          <br><br>

        </div>
      </section>
      <!-- END Recent jobs -->
      <!-- END Categories -->
     </main>
    <!-- END Main container -->

@endsection
