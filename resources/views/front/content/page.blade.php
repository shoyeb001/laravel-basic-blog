@extends('front/layout.layout')

@section('container')
        <header class="masthead" style="background-image: url('{{asset('storage/page/'.$result[0]->img)}}')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>{{$result[0]->name}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        {{$result[0]->desc}}
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->