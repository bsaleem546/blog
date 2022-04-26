@extends('layouts.main')

@section('content')
    <div id="app">
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
                                            <option>Select a job type</option>
                                            <option>Select a job type</option>
                                            <option>Select a job type</option>
                                            <option>Select a job type</option>
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
                                        <select class="form-control form-control-sm">
                                            <option>Select a country</option>
                                            <option>United Kingdom</option>
                                            <option>United States</option>
                                            <option>Russia</option>
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
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                               role="tab" aria-controls="pills-home" aria-selected="true">My Post</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                               role="tab" aria-controls="pills-profile" aria-selected="false">All Post</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">

                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            @auth
                                                <div v-for="p in myPost" class="posty">
                                                        <div class="post-bar no-margin">

                                                            <div class="post_topbar">
                                                                <div class="usy-dt">
                                                                    <img src="{{ asset('assets') }}/images/resources/us-pc2.png" alt="">
                                                                    <div class="usy-name">
                                                                        <h3>{{ Auth::user()->name }}</h3>
                                                                        <span>
                                                                            <img src="{{ asset('assets') }}/images/clock.png" alt="">
                                                                            @{{ p.created_at | myDate }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="epi-sec">
                                                                <ul class="descp">
                                                                    <li>
                                                                        <img src="{{ asset('assets') }}/images/icon9.png" alt="">
                                                                        <span>@{{ p.cate }}</span></li>
                                                                    <li>
                                                                        <img src="{{ asset('assets') }}/images/icon9.png" alt="">
                                                                        <span>{{ Auth::user()->country }}</span></li>
                                                                </ul>
                                                            </div>

                                                            <div class="job_descp">
                                                                <h3>@{{ p.title }}</h3>
                                                                <ul class="job-dt">
                                                                    <li><a href="#" title="">@{{ p.post_type }}</a></li>
                                                                    <li><span>$@{{ p.rate }} / hr</span></li>
                                                                </ul>
                                                                <p>@{{ p.desc }}</p>
{{--                                                                <ul class="skill-tags">--}}
{{--                                                                    <li><a href="#" title="">HTML</a></li>--}}
{{--                                                                    <li><a href="#" title="">PHP</a></li>--}}
{{--                                                                    <li><a href="#" title="">CSS</a></li>--}}
{{--                                                                    <li><a href="#" title="">Javascript</a></li>--}}
{{--                                                                    <li><a href="#" title="">Wordpress</a></li>--}}
{{--                                                                </ul>--}}
                                                            </div>
{{--                                                            <div class="job-status-bar">--}}
{{--                                                                <ul class="like-com">--}}
{{--                                                                    <li>--}}
{{--                                                                        <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
                                                        </div>
                                                </div>
                                            @endauth
                                        </div>

                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                            <div v-for="p in allPost" class="posty">
                                                <div class="post-bar no-margin">

                                                    <div class="post_topbar">
                                                        <div class="usy-dt">
                                                            <img src="{{ asset('assets') }}/images/resources/us-pc2.png" alt="">
                                                            <div class="usy-name">
                                                                <h3>@{{ p.user.name }}</h3>
                                                                <span>
                                                                            <img src="{{ asset('assets') }}/images/clock.png" alt="">
                                                                            @{{ p.created_at | myDate }}
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="epi-sec">
                                                        <ul class="descp">
                                                            <li>
                                                                <img src="{{ asset('assets') }}/images/icon9.png" alt="">
                                                                <span>@{{ p.cate }}</span></li>
                                                            <li>
                                                                <img src="{{ asset('assets') }}/images/icon9.png" alt="">
                                                                <span>@{{ p.user.country }}</span></li>
                                                        </ul>
                                                    </div>

                                                    <div class="job_descp">
                                                        <h3>@{{ p.title }}</h3>
                                                        <ul class="job-dt">
                                                            <li><a href="#" title="">@{{ p.post_type }}</a></li>
                                                            <li><span>$@{{ p.rate }} / hr</span></li>
                                                        </ul>
                                                        <p>@{{ p.desc }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('java')

    <script type="text/javascript">
        const app = new Vue({
            el: '#app',
            data: {
                myPost:{!! Auth::check() ? Auth::user()->post : '' !!},
                allPost:{!! \App\Models\Post::with('user')->latest()->get() !!}
            },
            methods:{},
            mounted() {
                console.log('working')
            }
        })
    </script>
@endsection
