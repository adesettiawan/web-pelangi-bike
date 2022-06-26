@extends('frontend.layouts.app')
@section('content')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Blog Page</h1>
                <nav class="d-flex align-items-center">
                    <a href="{{ route('beranda') }}">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="javascript:void(0)">Blog</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->


<!--================Blog Area =================-->
<section class="blog_area" style="padding-top: 90px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="{{ route('search-blogs') }}" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts..." name="keyword"
                                    placeholder="Search ..." value="{{ request('keyword') }}"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i
                                            class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                    </aside>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_left_sidebar" style="padding-top: 30px">
                    <article class="row blog_item">
                        @foreach ($blogs as $item)
                        <div class="col-md-4">
                            <div class="blog_post" style="padding-top: 50px">
                                <img style="height: 230px; width: 100%" src="{{ Storage::url('blog/'.$item->image) }}"
                                    alt="blog-name">
                                <div class="blog_details">
                                    <a href="{{ route('blog-details.blogId',$item->slug) }}">
                                        <h2>{{Str::limit($item->title,55,'...')}}</h2>
                                    </a>
                                    <p>{{Str::limit($item->content,120,'...')}}</p>
                                    <a href="{{ route('blog-details.blogId',$item->slug) }}"
                                        class="white_bg_btn">Selengkapnya...</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </article>

                    <nav class="blog-pagination justify-content-start d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-left"></span>
                                    </span>
                                </a>
                            </li>
                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                            <li class="page-item active"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">9</a></li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-right"></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</section>
<!--================Blog Area =================-->
@endsection