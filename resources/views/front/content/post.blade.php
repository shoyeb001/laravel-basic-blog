@extends('front/layout.layout')

@section('container')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{asset('storage/post/'.$result[0]->img)}}')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>{{$result[0]->title}}</h1>
                            <h2 class="subheading">{{$result[0]->short_desc}}</h2>
                            <span class="meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                on August 24, 2021
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>{{$result[0]->long_desc}}</p>
                        <p>
                            Posted By {{@config('constant.site_name')}}
                            
                        </p>
                    </div>
                </div>
            </div>
        </article>

