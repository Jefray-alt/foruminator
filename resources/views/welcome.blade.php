@extends('layouts.app')
@section('title', 'Home')
@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Foruminator</h1>
                    <span class="subheading">Come and collaborate</span>
                    <form action="post" class="form-inline mt-4">
                        @csrf
                        <div class="flex-grow-1">
                            <input type="text" name="search" id="search" placeholder="Search Posts" class="form-control form-control-lg w-100 ">
                        </div>
                        <div class="flex-sm-grow-0 flex-grow-1">
                            <input type="submit" value="Search" class="btn btn-primary btn-block">
                        </div>
                </div>
                </form>
            </div>

        </div>
    </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class="post-subtitle">
                        Problems look mighty small from 150 miles up
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on September 24, 2019</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                    </h2>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on September 18, 2019</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Science has not yet mastered prophecy
                    </h2>
                    <h3 class="post-subtitle">
                        We predict too much for the next year and yet far too little for the next ten.
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on August 24, 2019</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Failure is not an option
                    </h2>
                    <h3 class="post-subtitle">
                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on July 8, 2019</p>
            </div>
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-2  d-lg-block d-md-none d-sm-none d-none">

            <div class="mb-5 shadow card">
                <div class="card-body">
                    <h5 class="mb-4">Popular Tags</h5>
                    <a href='!#' class="badge badge-pill badge-primary p-3">C#</a>
                    <a href='!#' class="badge badge-pill badge-secondary p-3">Javascript</a>
                </div>
            </div>
            <div class="shadow card">
                <div class="card-body">
                    <h5 class="mb-4">Latest Posts</h5>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
