@extends('layouts.master')
@section('pagetitle', 'Jobs Details Page')
@section('description', 'Hello from the Details Page')
@section('content')

    <!-- END Navigation bar -->
    <!-- Page header -->
    <header class="site-header size-lg text-center single-page-header" style="background-color: #000;">
      <div class="container">

<div class="single-page-header-inner">
          <div class="left-side">
            <div class="header-image"><a href="single-company-profile.html"><img src="assets/img/Team-5-specs.png" alt=""></a></div>
            <div class="header-details">
              <h2>{{$job->job_title}}</h2>
              <ul>
            <li>Posted By: &nbsp;<a class="text-white" href="author-jobs-details.html">
              <i class="fa fa-user"></i> {{ $job->freelance->name}}</a></li>
              </ul>
            </div>
          </div>
          <div class="right-side">
            <div class="salary-box">
              <div class="salary-type">Hourly Rate</div>
              <div class="salary-amount">$&nbsp;{{ $job->hourly_rate}}</div>
            </div>
          </div>
    </div>
            </header>
            <div class="container">
    <!-- END Page header -->
    <!-- Main container -->
    <main>

      <!-- Job detail -->
      <section>
        <div class="container">
          <div class="col-md-7 col-lg-8">

          <article class="post">
            <h2>Job Description</h2>
             <div class="blog-content">
        {{$job->job_description}}
</div>
</div>
</article>
<!-- Sidebar -->
    <div class="col-xl-4 col-lg-4">
      <div class="sidebar-container">

        <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim"> <i class="icon-material-outline-arrow-right-alt"></i></a>

        <!-- Sidebar Widget -->
        <div class="sidebar-widget">
          <div class="job-overview">
            <div class="job-overview-headline">Job Summary</div>
            <div class="job-overview-inner">
              <ul>

                <li><i class="fa fa-briefcase"></i>
                  <span>Job Type</span>
                  <h5>{{ $job->job_types}}</h5>
                </li>
                <li>
                  <i class="fa fa-dollar"></i>
                  <span>Hourly Rate</span>
                  <h5>$ &nbsp;{{ $job->hourly_rate}}</h5>
                </li>
                <li>
                  <i class="fa fa-clock-o"></i>
                  <span>Date Posted</span>
                  <h5>{{ $job->created_at->diffForHumans() }}</h5>
                </li>
              </ul>
            </div>
          </div>
          <div class="button-group">
            <ul class="social-icons">
              <h4 class="title">Share on</h4>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- Sidebar Widget -->
 </div>
          </div>
        </div>
      </section>
      <!-- END Job detail -->
    </main>
    <!-- END Main container -->
 </div>
<!-- Site footer -->
@endsection
