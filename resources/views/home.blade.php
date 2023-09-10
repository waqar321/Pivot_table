@extends('layouts.app')

@section('content')

<div class="wrapper">
    <header>
      <div class="container">
        <div class="header-data">
          <div class="logo">
              <a href="#" title=""><img src="{{ asset('JObTask/images/logo.png') }}" alt=""></a>
          </div>
          <div class="search-bar"></div>
          <nav>
            <ul>
              <li>
                <a href="#" title="">
                  <span><img src="{{ asset('JObTask/images/icon5.png') }}" alt=""></span>
                  Jobs
                </a>
              </li>
            </ul>
          </nav>
            <div class="menu-btn">
                <a href="#" title=""><i class="fa fa-bars"></i></a>
            </div>
            <div class="user-account">
                <div class="user-info">
                    <img src="{{ asset('JObTask/images/resources/user.png') }}" alt="">
                    <a href="#" title="">
                        {{ Auth::user()->first_name }}
                    </a>
                    <i class="la la-sort-down"></i>
                </div>
                <div class="user-account-settingss">
                    <h3 class="tc"><a href="{{ route('logout') }}" title="" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                    </a></h3>     

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
      </div>
    </header>
      <main>
          <div class="main-section">
              <div class="container">
                  <div class="main-section-data">
                      <div class="row">
                          <div class="col-lg-3">
                              <div class="filter-secs">
                                  <div class="filter-heading">
                                      <h3>Filters</h3>
                                      <a href="#" title="">Clear all filters</a>
                                  </div>
                                  <div class="paddy">
                                      <div class="filter-dd">
                                          <div class="filter-ttl">
                                              <h3>Skills</h3>
                                          </div>
                                              <input class="form-control form-control-sm" type="text" name="search-skills" placeholder="Search skills">
                                      </div>
                                      <div class="filter-dd">
                                          <div class="filter-ttl">
                                              <h3>Availabilty</h3>
                                          </div>
                                          <ul class="avail-checks">
                                              <li>
                                                  <input type="radio" name="cc" id="c1">
                                                  <label for="c1">
                                                      <span></span>
                                                  </label>
                                                  <small>Hourly</small>
                                              </li>
                                              <li>
                                                  <input type="radio" name="cc" id="c2">
                                                  <label for="c2">
                                                      <span></span>
                                                  </label>
                                                  <small>Part Time</small>
                                              </li>
                                              <li>
                                                  <input type="radio" name="cc" id="c3">
                                                  <label for="c3">
                                                      <span></span>
                                                  </label>
                                                  <small>Full Time</small>
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="filter-dd">
                                          <div class="filter-ttl">
                                              <h3>Job Type</h3>
                                          </div>
                                              <select class="form-control form-control-sm"> 
                                                    <option> Select Job Types  </option>
                                                    @foreach($jobtypes as $jobtype) 
                                                        <option> {{ $jobtype->type_name }}  </option>
                                                    @endforeach 
                                              </select>
                                      </div>
                                      <div class="filter-dd">
                                          <div class="filter-ttl">
                                              <h3>Pay Rate / Hr ($)</h3>
                                          </div>
                                          <div class="rg-slider">
                                              <input class="rn-slider slider-input" type="hidden" value="5,50" />
                                          </div>
                                          <div class="rg-limit">
                                              <h4>1</h4>
                                              <h4>100+</h4>
                                          </div>
                                      </div>
                                      <div class="filter-dd">
                                          <div class="filter-ttl">
                                              <h3>Countries</h3>
                                          </div>
                                              <select class="form-control form-control-sm all_countries">
                                                 <!-- while ($ country = mysqli_fetch_array($ allCountries))  -->
                                                  
                                                
                                              </select>
                                      </div>
                                      <input class="btn btn-block text-white" type="button" value="Filter" style="background-color: #e44d3a;">
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-9">
                              <div class="main-ws-sec">
                                  <div class="posts-section">
                                      <ul class="nav nav-pills nav-justified mb-3 tabs-my" id="pills-tab" role="tablist">
                                          <li class="nav-item" >
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">My Post</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">All Post</a>
                                          </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                           
                                           @foreach($myjobs as $job) 
                                                <div class="post-bar">
                                                  <div class="post_topbar">
                                                      <div class="usy-dt">
                                                          <img src="{{ asset('JObTask/images/resources/us-pic.png') }} " alt="">
                                                          <div class="usy-name">
                                                              <h3> {{ $job->title }} </h3>
                                                              <span><img src="{{ asset('JObTask/images/clock.png') }} " alt="">
                                                            </span>
                                                          </div>
                                                      </div>
                                                      <div class="ed-opts">
                                                          <a href="#" title="" class="ed-opts-open"><i
                                                                  class="la la-ellipsis-v"></i></a>
                                                          <ul class="ed-options">
                                                              <li><a href="#" title="">Edit Post</a></li>
                                                              <li><a href="#" title="">Unsaved</a></li>
                                                              <li><a href="#" title="">Unbid</a></li>
                                                              <li><a href="#" title="">Close</a></li>
                                                              <li><a href="#" title="">Hide</a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                                  <div class="epi-sec">
                                                      <ul class="descp">
                                                          <li><img src="{{ asset('JObTask/images/icon8.png') }} " alt=""><span>Epic Coder</span></li>
                                                          <li><img src="{{ asset('JObTask/images/icon9.png') }} " alt=""><span>nick name </span></li>
                                                      </ul>
                                                  </div>
                                                  <div class="job_descp">
                                                      <h3> Full Time  </h3>
                                                      <ul class="job-dt">
                                                          <li><a href="#" title=""> {{ $job->type }} </a></li>
                                                          <li><span>$ {{ $job->rate }} / hr</span></li>
                                                      </ul>
                                                      <p>{{ $job->description }}<a href="#" title="">view more</a></p>
                                                      <ul class="skill-tags">
                                                      {{ $job->tags }}
                                                    </ul>
                                                  </div>
                                                  <div class="job-status-bar">
                                                      <ul class="like-com">
                                                          <li>
                                                              <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                           @endforeach 
                                          
                                          </div>
                                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                           @foreach($Jobs as $job) 
                                                <div class="post-bar">
                                                  <div class="post_topbar">
                                                      <div class="usy-dt">
                                                          <img src="{{ asset('JObTask/images/resources/us-pic.png') }} " alt="">
                                                          <div class="usy-name">
                                                              <h3> {{ $job->title }} </h3>
                                                              <span><img src="{{ asset('JObTask/images/clock.png') }} " alt="">
                                                            </span>
                                                          </div>
                                                      </div>
                                                      <div class="ed-opts">
                                                          <a href="#" title="" class="ed-opts-open"><i
                                                                  class="la la-ellipsis-v"></i></a>
                                                          <ul class="ed-options">
                                                              <li><a href="#" title="">Edit Post</a></li>
                                                              <li><a href="#" title="">Unsaved</a></li>
                                                              <li><a href="#" title="">Unbid</a></li>
                                                              <li><a href="#" title="">Close</a></li>
                                                              <li><a href="#" title="">Hide</a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                                  <div class="epi-sec">
                                                      <ul class="descp">
                                                          <li><img src="{{ asset('JObTask/images/icon8.png') }} " alt=""><span>Epic Coder</span></li>
                                                          <li><img src="{{ asset('JObTask/images/icon9.png') }} " alt=""><span>nick name </span></li>
                                                      </ul>
                                                  </div>
                                                  <div class="job_descp">
                                                      <h3> Full Time  </h3>
                                                      <ul class="job-dt">
                                                          <li><a href="#" title=""> {{ $job->type }} </a></li>
                                                          <li><span>$ {{ $job->rate }} / hr</span></li>
                                                      </ul>
                                                      <p>{{ $job->description }}<a href="#" title="">view more</a></p>
                                                      <ul class="skill-tags">
                                                      {{ $job->tags }}
                                                    </ul>
                                                  </div>
                                                  <div class="job-status-bar">
                                                      <ul class="like-com">
                                                          <li>
                                                              <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                           @endforeach 
                                          
                                          </div>
                                        </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      </main>
  </div>
  <footer>
      <div class="footy-sec mn no-margin">
          <div class="container">
              <ul>
                  <li><a href="#" title="">Help Center</a></li>
                  <li><a href="#" title="">About</a></li>
                  <li><a href="#" title="">Privacy Policy</a></li>
                  <li><a href="#" title="">Community Guidelines</a></li>
                  <li><a href="#" title="">Cookies Policy</a></li>
                  <li><a href="#" title="">Career</a></li>
                  <li><a href="forum.html" title="">Forum</a></li>
                  <li><a href="#" title="">Language</a></li>
                  <li><a href="#" title="">Copyright Policy</a></li>
              </ul>
              <p><img src="{{ asset('JObTask/images/copy-icon2.png') }} " alt="">Copyright 2019</p>
              <img class="fl-rgt" src="{{ asset('JObTask/images/logo2.png') }} " alt="">
          </div>
      </div>
  </footer>
@endsection