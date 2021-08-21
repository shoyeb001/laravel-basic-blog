@extends('front/layout.layout')

@section('container')
        <header class="masthead" style="background-image: url('{{asset("front_asset/assets/img/home-bg.jpg")}}')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Laravel Blog</h1>
                            <span class="subheading">This is blog created by laravel.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    @foreach ($result as $list)

                    <div class="post-preview">
                        <a href="{{url('post/'.$list->id)}}">
                            <h2 class="post-title">{{$list->title}}</h2>
                            <h3 class="post-subtitle">{{$list->short_desc}}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{@config('constant.site_name')}}</a>
                            on  {{$list->added_on}}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    @endforeach
                    

                </div>
            </div>
        </div>
        