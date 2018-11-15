@extends('layouts.index')
@section('content')
		<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">blog list view</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/beranda">Home</a>
                                  <!-- <span class="brd-separetor"><img src="images/icons/brad.png" alt="separator images"></span> -->
                                  <span class="breadcrumb-item active">blog list view</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Blog Grid Area -->
        <div class="dcare__blog__list bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9 blog-list-rightsidebar">
        				<!-- Start Blogs -->
        				<div class="row">

                          

                            <!-- Start Single BLog -->
                            @if (count($artikels) > 0)
                            @foreach($a as $data)
                            <div class="col-12 mt--50">
                                <article class="blog__single blog__item">
                                    <div class="blog__thumb sticky">
                                        <a href="blog-details.html">
                                            <img src="{{ asset ('assets/img/gambargaleri/'.$data->gambar) }}" alt="blog images">
                                        </a>
                                    </div>
                                    <div class="blog__content">
                                        <h2><a href="/blog/{{$data->slug}}">{{$data->judul}}</a></h2>
                                        <ul class="bl__post">
                                            <li>By Penulis : {{ $data->user->name}}</li>
                                            <li>Date : {{ date('M j, Y', strtotime($data->created_at)) }}</li>
                                        </ul>
                                        <p>{!! str_limit($data->content, 300, '&raquo;') !!}</p>
                                        <div class="blog__btn">
                                            <a class="dcare__btn btn__f6f6f6" href="/blog/{{$data->slug}}">Read More</a>
                                            <div class="blog__share">
                                                <a href="#"><i class="fa fa-share-alt"></i></a>
                                                <ul class="dacre__social__link d-flex justify-content-start">
                                                    <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                                    <li class="pinterest"><a href="https://www.plus.google.com/sharer?url={{ urlencode(Request::fullUrl()) }}"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                            @endif
                            <!-- End Single BLog -->

                           



        				</div>

        				<nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                           {{ $artikels->links() }}
		                        </ul>
		                    </nav>
        				<!-- End Blogs -->
        			</div>
        			<!-- Start Sidebar -->
        			@include('blog.side')
        			<!-- End Sidebar -->
        		</div>
        	</div>
        </div>
        <!-- End Blog Grid Area -->
        @endsection