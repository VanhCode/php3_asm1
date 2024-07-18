@extends('Client.block.master')

@section('title')
    {{ $keyword ?? '' }}
@endsection

@section('content')
    <!-- BREADCRUMBS STARTS

			========================================================================= -->

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <ol class="breadcrumb">

                    <li><a href="#">Trang chủ</a></li>

                    <li class="active">Kết quả tìm kiếm</li>

                </ol>

            </div>

        </div>

    </div>

    <!-- /. BREADCRUMBS ENDS

        ========================================================================= -->

    <!-- CATEGORY GRID STARTS

        ========================================================================= -->

    <div class="container">

        <div class="row">

            <!-- LEFT COLUMNS STARTS

                ========================================================================= -->

            <div class="col-lg-8 grid">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="cat-caption clearfix">

                            <h1>Kết quả tìm kiếm "{{ $keyword ?? '' }}"</h1>

                        </div>

                    </div>

                </div>

                <!-- Row Starts -->

                @if($resultSearch->isEmpty())
                    <div class="p-3 text-center">
                        <h4 class="text-center">Bài viết "{{ $keyword ?? '' }} bàn tìm kiếm không có"</h4>
                    </div>
                @else
                    @foreach($resultSearch->chunk(2) as $postChunk)
                        <div class="row">
                            @foreach($postChunk as $post)
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="post">
                                        <a href="{{ route('post.detail', $post->slug) }}">
                                            <div class="picture">
                                                <img src="{{ asset($post->image) }}" style="height: 256px !important; object-fit: cover" class="img-responsive" alt="{{ $post->title }}">
                                            </div>
                                        </a>
                                        <div class="post-info">
                                            <h2 class="post-caption">{{ $post->category_name }}</h2>
                                            <div class="info">
                                                <span class="date">
                                                    <i class="fa fa-clock-o"></i> {{ date('d-m-Y', strtotime($post->created_at)) }}
                                                </span>
                                                <span class="comment">
                                                    <i class="fa fa-comment"></i> 20
                                                </span>
                                            </div>
                                        </div>
                                        <h1><a href="{{ route('post.detail', $post->slug) }}">{{ $post->title }}</a></h1>
                                        <div class="description">{!! $post->excerpt !!}</div>
                                        <div class="read-more"><a href="{{ route('post.detail', $post->slug) }}">Đọc tiếp »</a></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif

                <!-- Row Ends -->


                <!-- Pagging Starts -->

                <div class="row">

                    <div class="col-lg-12">

                        <ul class="pagination pagination-lg">

                            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>

                            <li class="active"><a href="#">1</a></li>

                            <li><a href="#">2</a></li>

                            <li><a href="#">3</a></li>

                            <li><a href="#">4</a></li>

                            <li><a href="#">5</a></li>

                            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>

                        </ul>

                    </div>

                </div>

                <!-- Pagging Ends -->

            </div>

            <!-- /. LEFT COLUMNS ENDS

                ========================================================================= -->

            <!-- RIGHT COLUMNS STARTS

                ========================================================================= -->

            <div class="col-lg-4 sidebar">

                <!-- JOIN US STARTS -->

                <div class="join-us clearfix">

                    <div class="cat-caption">

                        <h1>Follow Us</h1>

                    </div>

                    <ul>

                        <li class="facebook">

                            <div class="icon"><a href="#"><i class="fa fa-facebook"></i></a></div>

                            <div class="count">350</div>

                            <div class="followers">followers</div>

                        </li>

                        <li class="twitter">

                            <div class="icon"><a href="#"><i class="fa fa-twitter"></i></a></div>

                            <div class="count">350</div>

                            <div class="followers">followers</div>

                        </li>

                        <li class="linkedin">

                            <div class="icon"><a href="#"><i class="fa fa-linkedin"></i></a></div>

                            <div class="count">350</div>

                            <div class="followers">followers</div>

                        </li>

                        <li class="dribbble">

                            <div class="icon"><a href="#"><i class="fa fa-dribbble"></i></a></div>

                            <div class="count">350</div>

                            <div class="followers">followers</div>

                        </li>

                    </ul>

                </div>

                <!-- JOIN US ENDS -->

                <!-- TABS CONTROL STARTS -->

                <div class="tabs">

                    <div class="cat-caption">

                        <h1>Most Popular</h1>

                    </div>

                    <div role="tabpanel">

                        <!-- Nav tabs -->

                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active"><a href="#posts" aria-controls="posts" role="tab" data-toggle="tab">posts</a></li>

                            <li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">comments</a></li>

                            <li role="presentation"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">tags</a></li>

                        </ul>

                        <!-- Tab panes -->

                        <div class="tab-content">

                            <!-- Post Starts -->

                            <div role="tabpanel" class="tab-pane fade in active" id="posts">

                                <ul class="tabs-posts">

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt="" ></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Fashion</h2>

                                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">3 Four-Star Resorts Costa Rica’s Luxury Reputation</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt="" ></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">tech</h2>

                                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Sir John is New Celebrity Makeup</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt="" ></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">life style</h2>

                                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">All of the Best and Worst Moments</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt="" ></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">world</h2>

                                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">10 Most Beautifull Infinity Pools With Blue Water</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt="" ></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">world</h2>

                                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Pellentesque habitant morbi tristique et netus et.</a></div>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                            <!-- Post Ends -->

                            <!-- Comments Starts -->

                            <div role="tabpanel" class="tab-pane fade" id="comments">

                                <ul class="tabs-posts">

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt="" ></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Fashion</h2>

                                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Pellentesque habitant morbi tristique senectus et netu.</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt="" ></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Fashion</h2>

                                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Pellentesque habitant morbi tristique et netus et.</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt="" ></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Fashion</h2>

                                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Pellentesque habitant morbi tristique et net.</a></div>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                            <!-- Comments Ends -->

                            <!-- Tags Starts -->

                            <div role="tabpanel" class="tab-pane fade" id="tags">

                                <div class="tag-list">

                                    <a href="#" >design</a>

                                    <a href="#" >graphics</a>

                                    <a href="#" >photography</a>

                                    <a href="#" >html5</a>

                                    <a href="#" >wordpress</a>

                                    <a href="#" >onepage</a>

                                    <a href="#" >design</a>

                                    <a href="#" >graphics</a>

                                    <a href="#" >photography</a>

                                    <a href="#" >html5</a>

                                    <a href="#" >wordpress</a>

                                    <a href="#" >onepage</a>

                                </div>

                            </div>

                            <!-- Tags Ends -->

                        </div>

                    </div>

                </div>

                <!-- TABS CONTROL ENDS -->

                <!-- FEATURED VIDEOS STARTS -->

                <div class="featured-video">

                    <div class="cat-caption">

                        <h1>Featured Videos</h1>

                    </div>

                    <div class="featured-video-carousel">

                        <div class="video">

                            <img src="http://placehold.it/750x800" class="img-responsive" alt="">

                            <div class="bg">&nbsp;</div>

                            <div class="icon"><a class="popup-vimeo" href="https://vimeo.com/45830194"><i class="fa fa-play"></i></a></div>

                            <div class="information">

                                <h1>Shopping<br><strong>Festival 2014</strong></h1>

                                <h2 class="post-caption">Fashion</h2>

                                <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                            </div>

                        </div>

                        <div class="video">

                            <img src="http://placehold.it/750x800" class="img-responsive" alt="">

                            <div class="bg">&nbsp;</div>

                            <div class="icon"><a class="popup-vimeo" href="https://vimeo.com/45830194"><i class="fa fa-play"></i></a></div>

                            <div class="information">

                                <h1>California<br><strong>Catwalk 2014</strong></h1>

                                <h2 class="post-caption">Fashion</h2>

                                <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- /. FEATURED VIDEOS ENDS -->

                <!-- ADVERTISEMENT 300 X 250 STARTS -->

                <div class="ads">

                    <div class="ad-300x250">

                        <img src="images/ads/3d_300x250_v2.gif" width="300" height="250" alt="" >

                    </div>

                </div>

                <!-- ADVERTISEMENT 300 X 250 ENDS -->

                <!-- FEATURED AUTHORS STARTS -->

                <div class="featured-authors">

                    <div class="cat-caption">

                        <h1>Mag Authors</h1>

                    </div>

                    <ul>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt="" ></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt="" ></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt="" ></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt="" ></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt="" ></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt="" ></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt="" ></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt="" ></a></li>

                    </ul>

                    <div class="clearfix"></div>

                </div>

                <!-- FEATURED AUTHORS ENDS -->

                <!-- SUBSCRIBE NOW STARTS -->

                <div class="subcribe-now">

                    <h1>Subscribe Now</h1>

                    <input name="email" type="text" placeholder="Your Email">

                    <input name="Submit" type="submit" value="Subscribe">

                    <div class="already">Already 95780 Subscribers</div>

                </div>

                <!-- SUBSCRIBE NOW ENDS -->

                <!-- LATEST REVIEWS STARTS -->

                <div class="latest-reviews">

                    <div class="cat-caption">

                        <h1>Latest Reviews</h1>

                    </div>

                    <!-- Post Starts -->

                    <div class="post">

                        <div class="picture"><img src="http://placehold.it/750x750" class="img-responsive" alt=""></div>

                        <h1>Netus et malesuada</h1>

                        <div class="post-info clearfix">

                            <div class="stars pull-left"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star grey"></i></div>

                            <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                        </div>

                        <div class="description"><a href="#">Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor.</a></div>

                    </div>

                    <!-- Post Ends -->

                    <div class="row">

                        <!-- Post Starts -->

                        <div class="col-lg-12 col-md-6 col-sm-6">

                            <div class="row post">

                                <div class="col-lg-5 col-md-5">

                                    <div class="picture"><img src="http://placehold.it/750x750" class="img-responsive" alt=""></div>

                                </div>

                                <div class="col-lg-7 col-md-7">

                                    <h1>Fashion Week</h1>

                                    <div class="post-info clearfix">

                                        <div class="stars pull-left"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star grey"></i></div>

                                        <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                                    </div>

                                    <div class="description"><a href="#">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>

                                </div>

                            </div>

                        </div>

                        <!-- Post Ends -->

                        <!-- Post Starts -->

                        <div class="col-lg-12 col-md-6 col-sm-6">

                            <div class="row post">

                                <div class="col-lg-5 col-md-5">

                                    <div class="picture"><img src="http://placehold.it/750x750" class="img-responsive" alt=""></div>

                                </div>

                                <div class="col-lg-7 col-md-7">

                                    <h1>Fashion Week</h1>

                                    <div class="post-info clearfix">

                                        <div class="stars pull-left"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star grey"></i></div>

                                        <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                                    </div>

                                    <div class="description"><a href="#">Netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</a></div>

                                </div>

                            </div>

                        </div>

                        <!-- Post Ends -->

                    </div>

                </div>

                <!-- LATEST REVIEWS ENDS -->

                <!-- ADVERTISEMENT 125 x 125 STARTS -->

                <div class="ad-125x125">

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/ads/125x125/1.jpg" width="125" height="125" alt=""></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/ads/125x125/2.jpg" width="125" height="125" alt=""></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/ads/125x125/3.jpg" width="125" height="125" alt=""></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/ads/125x125/5.gif" width="125" height="125" alt=""></div>

                    </div>

                </div>

                <!-- ADVERTISEMENT 300 X 250 ENDS -->

            </div>

            <!-- /. RIGHT COLUMNS ENDS

                ========================================================================= -->

        </div>

    </div>

    <!-- /. CATEGORY GRID STARTS

        ========================================================================= -->
@endsection
