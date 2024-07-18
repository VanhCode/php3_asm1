@extends('Client.block.master')

@section('title')
    Trang chủ - Báo mới
@endsection


@section('content')
    <div class="slider">

        <div id="rev_slider_108_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
             data-alias="food-carousel80"
             style="margin:0px auto;background-color:#eef0f1;padding:0px;margin-top:0px;margin-bottom:0px;">

            <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->

            <div id="rev_slider_108_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">

                <ul>
                    <!-- SLIDE  -->
                    @if(!empty($postSlides))
                        @foreach($postSlides as $slide)
                            <li data-index="rs-325" data-transition="fade" data-slotamount="7" data-easein="default"
                                data-easeout="default" data-masterspeed="300" data-thumb="{{ asset($slide->image) }}"
                                data-rotate="0" data-saveperformance="off" data-title="{{ $slide->title }}" data-description="">

                                <!-- MAIN IMAGE -->

                                <img src="{{ asset($slide->image) }}" alt="{{ $slide->title }}" data-bgposition="center center" data-bgfit="contain"
                                     data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->


                                <!-- LAYER NR. 2 -->

                                <!-- LAYER NR. 3 -->

                                <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme"

                                     id="slide-325-layer-5"

                                     data-x="441"

                                     data-y="110"

                                     data-width="['auto']"

                                     data-height="['auto']"

                                     data-transform_idle="o:1;"

                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"

                                     data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;"

                                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;"

                                     data-transform_out="auto:auto;s:500;"

                                     data-start="bytrigger"

                                     data-splitin="none"

                                     data-splitout="none"

                                     data-actions='[{"event":"click","action":"stoplayer","layer":"slide-325-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-325-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-325-layer-1","delay":""}]'

                                     data-responsive_offset="on"

                                     data-end="bytrigger"

                                     data-lasttriggerstate="reset"

                                     style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                    <i class="fa-icon-remove"></i>

                                </div>

                            </li>
                        @endforeach
                    @endif
                </ul>

                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>

            </div>

        </div>

        <!-- END REVOLUTION SLIDER -->

    </div>

    <!-- /. SLIDER ENDS

        ========================================================================= -->

    <!-- CATEGORY GRID STARTS

        ========================================================================= -->

    <div class="container">

        <div class="row">

            <!-- Left Column Starts -->

            <div class="col-lg-8 grid">

                <div class="cat-caption clearfix">

                    <h1 class="pull-left">Tin tức nổi bật</h1>

                    <div class="read-more pull-right"><a href="#">Xem tất cả »</a></div>

                </div>

                <div class="row">

                    @if(!empty($postHot))
                        @foreach($postHot->limit(2)->get() as $post)
                            <div class="col-lg-6 col-md-6 col-sm-6">

                                <div class="post">
                                    <div class="picture">
                                        <a href="{{ route('post.detail', $post->slug) }}">
                                            <img src="{{ asset($post->image) }}" style="height: 250px !important;
                                            " class="img-responsive" alt="">
                                        </a>
                                    </div>

                                    <div class="post-info">

                                        <h2 class="post-caption">{{ $post->category_name }}</h2>

                                        <div class="info">
                                            <span class="date">
                                                <i class="fa fa-clock-o"></i> {{ date('d-m-Y', strtotime($post->created_at)) }}</span>
                                            <span class="comment">
                                                <i class="fa fa-comment"></i> 20</span></div>
                                    </div>

                                    <h1><a href="{{ route('post.detail', $post->slug) }}">{{ $post->title }}</a></h1>

                                    <div class="description">
                                        {!! $post->excerpt !!}
                                    </div>

                                    <div class="read-more"><a href="{{ route('post.detail', $post->slug) }}">Đọc tiếp »</a></div>

                                </div>

                            </div>
                        @endforeach
                    @endif


                </div>

                <div class="row">
                    @if(!empty($postHot))
                        @foreach($postHot->limit(3)->get() as $post)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="post">
                                    <a href="{{ route('post.detail', $post->slug) }}">
                                        <div class="picture">
                                            <img src="{{ asset($post->image) }}" style="height: 180px !important;" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                    <div class="post-info">
                                        <h2 class="post-caption">{{ $post->category_name }}</h2>
                                        <div class="info">
                                            <span class="date">
                                                <i class="fa fa-clock-o"></i> {{ date('d-m-Y', strtotime($post->created_at)) }}</span>
                                            <span class="comment">
                                                <i class="fa fa-comment"></i> 20</span></div>
                                    </div>
                                    <h1><a href="{{ route('post.detail', $post->slug) }}">{{ $post->title }}</a></h1>
                                    <div class="description">
                                        {!! $post->excerpt !!}
                                    </div>
                                    <div class="read-more"><a href="{{ route('post.detail', $post->slug) }}">Đọc tiếp »</a></div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- Left Column Ends -->

            <!-- Right Columns Starts -->

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

                            <li role="presentation" class="active"><a href="#posts" aria-controls="posts" role="tab"
                                                                      data-toggle="tab">posts</a></li>

                            <li role="presentation"><a href="#comments" aria-controls="comments" role="tab"
                                                       data-toggle="tab">comments</a></li>

                            <li role="presentation"><a href="#tags" aria-controls="tags" role="tab"
                                                       data-toggle="tab">tags</a></li>

                        </ul>

                        <!-- Tab panes -->

                        <div class="tab-content">

                            <!-- Post Starts -->

                            <div role="tabpanel" class="tab-pane fade in active" id="posts">

                                <ul class="tabs-posts">

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Chicken</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i
                                                            class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">3 Four-Star Resorts Costa Rica’s Luxury
                                                    Reputation</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">BBQ</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i
                                                            class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Sir John is New Celebrity Makeup</a>
                                            </div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Baking</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i
                                                            class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">All of the Best and Worst Moments</a>
                                            </div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Fish</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i
                                                            class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">10 Most Beautifull Infinity Pools With
                                                    Blue
                                                    Water</a></div>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                            <!-- Post Ends -->

                            <!-- Comments Starts -->

                            <div role="tabpanel" class="tab-pane fade" id="comments">

                                <ul class="tabs-posts">

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Chicken</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i
                                                            class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Pellentesque habitant morbi tristique
                                                    senectus et netu.</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Chicken</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i
                                                            class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Pellentesque habitant morbi tristique
                                                    et
                                                    netus et.</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Chicken</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i
                                                            class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Pellentesque habitant morbi tristique
                                                    et
                                                    net.</a></div>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                            <!-- Comments Ends -->

                            <!-- Tags Starts -->

                            <div role="tabpanel" class="tab-pane fade" id="tags">

                                <div class="tag-list">

                                    <a href="#">design</a>

                                    <a href="#">graphics</a>

                                    <a href="#">photography</a>

                                    <a href="#">html5</a>

                                    <a href="#">wordpress</a>

                                    <a href="#">onepage</a>

                                    <a href="#">design</a>

                                    <a href="#">graphics</a>

                                    <a href="#">photography</a>

                                    <a href="#">html5</a>

                                    <a href="#">wordpress</a>

                                    <a href="#">onepage</a>

                                </div>

                            </div>

                            <!-- Tags Ends -->

                        </div>

                    </div>

                </div>

                <!-- TABS CONTROL ENDS -->

            </div>

            <!-- Right Columns Ends -->

        </div>

    </div>

    <!-- /. CATEGORY GRID ENDS

        ========================================================================= -->

    <!-- CATEGORY GRID STARTS

        ========================================================================= -->

    <div class="grey-bg">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 grid">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="cat-caption clearfix">

                                <h1 class="pull-left">Baking</h1>

                                <div class="read-more pull-right"><a href="#">View All »</a></div>

                            </div>

                        </div>

                        <div class="col-lg-5 col-md-5">

                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="post">

                                        <div class="picture"><img src="http://placehold.it/750x500"
                                                                  class="img-responsive"
                                                                  alt=""></div>

                                        <div class="post-info">

                                            <h2 class="post-caption">Cakes</h2>

                                            <div class="info"><span class="author-name"><a
                                                        href="#">John Doe</a></span><span
                                                    class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                    class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                        </div>

                                        <h1>All of the Best and Worst Moments</h1>

                                        <div class="description">Pellentesque habitant morbi tristique senectus et
                                            vestibulum tortor quam, feugiat vitae. Habitant morbi tristique senectus et
                                            vestibulum tortor quam, feugiat vitae.<br><br>Pellentesque habitant morbi
                                            tristique senectus et vestibulum tortor quam
                                        </div>

                                        <div class="read-more"><a href="#">Continue Reading »</a></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-7 col-md-7">

                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <div class="post">

                                        <div class="picture"><img src="http://placehold.it/750x500"
                                                                  class="img-responsive"
                                                                  alt=""></div>

                                        <div class="post-info">

                                            <h2 class="post-caption">Swiming</h2>

                                            <div class="info"><span class="author-name">John Doe</span><span
                                                    class="date"><i
                                                        class="fa fa-clock-o"></i> may 1, 2015</span><span
                                                    class="comment"><i
                                                        class="fa fa-comment"></i> 20</span></div>

                                        </div>

                                        <h2><a href="#">Pellentesque habitant morbi tristique.</a></h2>

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <div class="post">

                                        <div class="picture"><img src="http://placehold.it/750x500"
                                                                  class="img-responsive"
                                                                  alt=""></div>

                                        <div class="post-info">

                                            <h2 class="post-caption">Ice Skating</h2>

                                            <div class="info"><span class="author-name"><a
                                                        href="#">John Doe</a></span><span
                                                    class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                    class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                        </div>

                                        <h2><a href="#">Pellentesque habitant morbi tristique.</a></h2>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <div class="post">

                                        <div class="picture"><img src="http://placehold.it/750x500"
                                                                  class="img-responsive"
                                                                  alt=""></div>

                                        <div class="post-info">

                                            <h2 class="post-caption">Golf 2015</h2>

                                            <div class="info"><span class="author-name"><a
                                                        href="#">John Doe</a></span><span
                                                    class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                    class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                        </div>

                                        <h2><a href="#">Pellentesque habitant morbi tristique.</a></h2>

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <div class="post">

                                        <div class="picture"><img src="http://placehold.it/750x500"
                                                                  class="img-responsive"
                                                                  alt=""></div>

                                        <div class="post-info">

                                            <h2 class="post-caption">Football</h2>

                                            <div class="info"><span class="author-name"><a
                                                        href="#">John Doe</a></span><span
                                                    class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                    class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                        </div>

                                        <h2><a href="#">Pellentesque habitant morbi tristique.</a></h2>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- CATEGORY GRID STARTS

        ========================================================================= -->

    <!-- CATEGORY GRID STARTS

        ========================================================================= -->

    <div class="container">

        <div class="row">

            <!-- Left Column Starts -->

            <div class="col-lg-8 grid">

                <div class="cat-caption clearfix">

                    <h1 class="pull-left">Chicken & Beef</h1>

                    <div class="read-more pull-right"><a href="#">View All »</a></div>

                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive" alt="">
                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">Chicken</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>Melbourne calling: Three reasons why you should visit it</h1>

                            <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                malesuada
                                fames ac turpis egestas.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive" alt="">
                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">BBQ</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>3 Four-Star Resorts Bolster Costa Rica’s Luxury Reputation</h1>

                            <div class="description">Tristique senectus et netus et malesuada fames ac turpis egestas
                                vestibulum tortor quam, feugiat vitae.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <!-- Post Starts -->

                        <div class="row post small">

                            <div class="col-lg-5 col-md-5 col-sm-5">

                                <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive"
                                                          alt="">
                                </div>

                            </div>

                            <div class="col-lg-7 col-md-7 col-sm-7">

                                <div class="post-info">

                                    <h2 class="post-caption">Chicken</h2>

                                    <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                            class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                            class="comment"><i
                                                class="fa fa-comment"></i> 20</span></div>

                                </div>

                                <h2><a href="#">Tristique senectus et netus et malesuada</a></h2>

                            </div>

                        </div>

                        <!-- Post Ends -->

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <!-- Post Starts -->

                        <div class="row post small">

                            <div class="col-lg-5 col-md-5 col-sm-5">

                                <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive"
                                                          alt="">
                                </div>

                            </div>

                            <div class="col-lg-7 col-md-7 col-sm-7">

                                <div class="post-info">

                                    <h2 class="post-caption">Chicken</h2>

                                    <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                            class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                            class="comment"><i
                                                class="fa fa-comment"></i> 20</span></div>

                                </div>

                                <h2><a href="#">Turpis egestas vesti tortor quam feugiat vitae</a></h2>

                            </div>

                        </div>

                        <!-- Post Ends -->

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <!-- Post Starts -->

                        <div class="row post small">

                            <div class="col-lg-5 col-md-5 col-sm-5">

                                <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive"
                                                          alt="">
                                </div>

                            </div>

                            <div class="col-lg-7 col-md-7 col-sm-7">

                                <div class="post-info">

                                    <h2 class="post-caption">Fish</h2>

                                    <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                            class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                            class="comment"><i
                                                class="fa fa-comment"></i> 20</span></div>

                                </div>

                                <h2><a href="#">Malesuada fames ac turpis egestas vestibulum</a></h2>

                            </div>

                        </div>

                        <!-- Post Ends -->

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <!-- Post Starts -->

                        <div class="row post small">

                            <div class="col-lg-5 col-md-5 col-sm-5">

                                <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive"
                                                          alt="">
                                </div>

                            </div>

                            <div class="col-lg-7 col-md-7 col-sm-7">

                                <div class="post-info">

                                    <h2 class="post-caption">Chicken</h2>

                                    <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                            class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                            class="comment"><i
                                                class="fa fa-comment"></i> 20</span></div>

                                </div>

                                <h2><a href="#">Pellentesque habitant morbi tristique senectus</a></h2>

                            </div>

                        </div>

                        <!-- Post Ends -->

                    </div>

                </div>

            </div>

            <!-- Left Column Ends -->

            <!-- Right Column Starts -->

            <div class="col-lg-4 sidebar">

                <!-- FEATURED VIDEOS STARTS -->

                <div class="featured-video">

                    <div class="cat-caption">

                        <h1>Recipe of the Day</h1>

                    </div>

                    <div class="featured-video-carousel">

                        <div class="video">

                            <img src="http://placehold.it/750x800" class="img-responsive" alt="">

                            <div class="bg">&nbsp;</div>

                            <div class="icon"><a class="popup-youtube"
                                                 href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i
                                        class="fa fa-play"></i></a></div>

                            <div class="information">

                                <h1>Beef<br><strong>Pot Roast</strong></h1>

                                <h2 class="post-caption">BBQ</h2>

                                <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                            </div>

                        </div>

                        <div class="video">

                            <img src="http://placehold.it/750x800" class="img-responsive" alt="">

                            <div class="bg">&nbsp;</div>

                            <div class="icon"><a class="popup-vimeo" href="https://vimeo.com/45830194"><i
                                        class="fa fa-play"></i></a></div>

                            <div class="information">

                                <h1>Steamed broccoli<br><strong>with vinegar</strong></h1>

                                <h2 class="post-caption">BBQ</h2>

                                <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- /. FEATURED VIDEOS ENDS -->

                <!-- ADVERTISEMENT 300 X 250 STARTS -->

                <div class="ads">

                    <div class="ad-300x250">

                        <img src="{{ asset('blogs_theme/images/ads/3d_300x250_v2.gif') }}" width="300" height="250" alt="">

                    </div>

                </div>

                <!-- ADVERTISEMENT 300 X 250 ENDS -->

            </div>

            <!-- Right Column Ends -->

        </div>

    </div>

    <!-- /. CATEGORY GRID ENDS

        ========================================================================= -->

    <!-- CATEGORY GRID STARTS

        ========================================================================= -->

    <div class="grey-bg">

        <div class="container">

            <div class="row grid">

                <div class="col-lg-12">

                    <div class="cat-caption clearfix">

                        <h1 class="pull-left">Premium Recipes</h1>

                        <div class="read-more pull-right"><a href="#">View All »</a></div>

                    </div>

                </div>

                <!-- Post Starts -->

                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="post">

                        <div class="picture">

                            <img src="http://placehold.it/750x500" class="img-responsive" alt="">

                            <!-- Picture Overlay Starts -->

                            <div class="video-overlay">

                                <div class="icons">

                                    <div><span class="icon"><a class="popup-youtube"
                                                               href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i
                                                    class="fa fa-play-circle-o"></i></a></span></div>

                                </div>

                            </div>

                            <!-- Picture Overlay Ends -->

                        </div>

                        <div class="post-info">

                            <h2 class="post-caption">Chicken</h2>

                            <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                    class="date"><i
                                        class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i
                                        class="fa fa-comment"></i> 20</span></div>

                        </div>

                        <h1>Sir John is New Celebrity Makeup</h1>

                        <div class="description">Pellentesque habitant morbi tristique senectus et netus et malesuada
                            fame.
                        </div>

                        <div class="read-more"><a href="#">Continue Reading »</a></div>

                    </div>

                </div>

                <!-- Post Ends -->

                <!-- Post Starts -->

                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="post">

                        <div class="picture">

                            <img src="http://placehold.it/750x500" class="img-responsive" alt="">

                            <!-- Picture Overlay Starts -->

                            <div class="video-overlay">

                                <div class="icons">

                                    <div><span class="icon"><a class="popup-youtube"
                                                               href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i
                                                    class="fa fa-play-circle-o"></i></a></span></div>

                                </div>

                            </div>

                            <!-- Picture Overlay Ends -->

                        </div>

                        <div class="post-info">

                            <h2 class="post-caption">Recipe</h2>

                            <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                    class="date"><i
                                        class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i
                                        class="fa fa-comment"></i> 20</span></div>

                        </div>

                        <h1>Brings Her 2 Sons to Cheer on Daddy</h1>

                        <div class="description">Netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.
                        </div>

                        <div class="read-more"><a href="#">Continue Reading »</a></div>

                    </div>

                </div>

                <!-- Post Ends -->

                <!-- Post Starts -->

                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="post">

                        <div class="picture">

                            <img src="http://placehold.it/750x500" class="img-responsive" alt="">

                            <!-- Picture Overlay Starts -->

                            <div class="video-overlay">

                                <div class="icons">

                                    <div><span class="icon"><a class="popup-youtube"
                                                               href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i
                                                    class="fa fa-play-circle-o"></i></a></span></div>

                                </div>

                            </div>

                            <!-- Picture Overlay Ends -->

                        </div>

                        <div class="post-info">

                            <h2 class="post-caption">Food</h2>

                            <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                    class="date"><i
                                        class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i
                                        class="fa fa-comment"></i> 20</span></div>

                        </div>

                        <h1>All of the Best and Worst Moments</h1>

                        <div class="description">Morbi tristique senectus et netus et malesuada tortor quam, feugiat
                            vitae.
                        </div>

                        <div class="read-more"><a href="#">Continue Reading »</a></div>

                    </div>

                </div>

                <!-- Post Ends -->

                <!-- Post Starts -->

                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="post">

                        <div class="picture">

                            <img src="http://placehold.it/750x500" class="img-responsive" alt="">

                            <!-- Picture Overlay Starts -->

                            <div class="video-overlay">

                                <div class="icons">

                                    <div><span class="icon"><a class="popup-youtube"
                                                               href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i
                                                    class="fa fa-play-circle-o"></i></a></span></div>

                                </div>

                            </div>

                            <!-- Picture Overlay Ends -->

                        </div>

                        <div class="post-info">

                            <h2 class="post-caption">Recipe</h2>

                            <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                    class="date"><i
                                        class="fa fa-clock-o"></i> may 1, 2015</span> <span class="comment"><i
                                        class="fa fa-comment"></i> 20</span></div>

                        </div>

                        <h1>Imagine Losing 20 Pounds In 14 Days!</h1>

                        <div class="description">Senectus et netus et malesuada fames ac turpis egestas vestibulum
                            tortor.
                        </div>

                        <div class="read-more"><a href="#">Continue Reading »</a></div>

                    </div>

                </div>

                <!-- Post Ends -->

            </div>

        </div>

    </div>

    <!-- /. CATEGORY GRID STARTS

        ========================================================================= -->

    <!-- CATEGORY GRID STARTS

        ========================================================================= -->

    <div class="container">

        <div class="row">

            <!-- Left Column Starts -->

            <div class="col-lg-8 grid">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="cat-caption clearfix">

                            <h1 class="pull-left">Latest Articles</h1>

                            <div class="read-more pull-right"><a href="#">View All »</a></div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <!-- Post Starts -->

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive" alt="">
                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">Recipe</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>10 Most Beautifull Infinity Pools With Blue Water</h1>

                            <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                malesuada
                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                    <!-- Post Ends -->

                    <!-- Post Starts -->

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture">

                                <img src="http://placehold.it/750x500" class="img-responsive" alt="">

                                <!-- Picture Overlay Starts -->

                                <div class="video-overlay">

                                    <div class="icons">

                                        <div><span class="icon"><a class="popup-youtube"
                                                                   href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i
                                                        class="fa fa-play-circle-o"></i></a></span></div>

                                    </div>

                                </div>

                                <!-- Picture Overlay Ends -->

                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">Chicken</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>Burberry Brings London to LA, Including the Grenadier Guards</h1>

                            <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                malesuada
                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                    <!-- Post Ends -->

                </div>

                <div class="row">

                    <!-- Post Starts -->

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive" alt="">
                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">Chicken</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>5 Collections to know from the Paris Men's Shows</h1>

                            <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                malesuada
                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                    <!-- Post Ends -->

                    <!-- Post Starts -->

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive" alt="">
                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">Chicken</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>9 Standout Trends from the Resort 2016 Collections</h1>

                            <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                malesuada
                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                    <!-- Post Ends -->

                </div>

                <div class="row">

                    <!-- Post Starts -->

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture">

                                <img src="http://placehold.it/750x500" class="img-responsive" alt="">

                                <!-- Picture Overlay Starts -->

                                <div class="video-overlay">

                                    <div class="icons">

                                        <div><span class="icon"><a class="popup-youtube"
                                                                   href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i
                                                        class="fa fa-play-circle-o"></i></a></span></div>

                                    </div>

                                </div>

                                <!-- Picture Overlay Ends -->

                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">Chicken</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>For the First Time, Lilly Pulitzer Hosts a Resort Preview</h1>

                            <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                malesuada
                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                    <!-- Post Ends -->

                    <!-- Post Starts -->

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture">

                                <img src="http://placehold.it/750x500" class="img-responsive" alt="">

                                <!-- Picture Overlay Starts -->

                                <div class="video-overlay">

                                    <div class="icons">

                                        <div><span class="icon"><a class="popup-youtube"
                                                                   href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i
                                                        class="fa fa-play-circle-o"></i></a></span></div>

                                    </div>

                                </div>

                                <!-- Picture Overlay Ends -->

                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">Chicken</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>ISA Areen presents First Resort Collection</h1>

                            <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                malesuada
                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                    <!-- Post Ends -->

                </div>

                <div class="row">

                    <!-- Post Starts -->

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive" alt="">
                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">Chicken</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>Posen got Inspiration for Resort from Instagram</h1>

                            <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                malesuada
                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                    <!-- Post Ends -->

                    <!-- Post Starts -->

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive" alt="">
                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">Chicken</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>The 6 Coolest Brands we saw at Russian Fashion Week</h1>

                            <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                malesuada
                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                    <!-- Post Ends -->

                </div>

                <div class="row">

                    <!-- Post Starts -->

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive" alt="">
                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">Chicken</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>Posen got Inspiration for Resort from Instagram</h1>

                            <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                malesuada
                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                    <!-- Post Ends -->

                    <!-- Post Starts -->

                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div class="post">

                            <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive" alt="">
                            </div>

                            <div class="post-info">

                                <h2 class="post-caption">Chicken</h2>

                                <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                        class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                        class="comment"><i
                                            class="fa fa-comment"></i> 20</span></div>

                            </div>

                            <h1>The 6 Coolest Brands we saw at Russian Fashion Week</h1>

                            <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                malesuada
                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.
                            </div>

                            <div class="read-more"><a href="#">Continue Reading »</a></div>

                        </div>

                    </div>

                    <!-- Post Ends -->

                </div>

                <!-- Pagging Starts -->

                <div class="row">

                    <div class="col-lg-12">

                        <ul class="pagination pagination-lg">

                            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a>
                            </li>

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

            <!-- Left Column Ends -->

            <!-- Right Column Starts -->

            <div class="col-lg-4 sidebar">

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

                            <div class="stars pull-left"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star grey"></i>
                            </div>

                            <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                        </div>

                        <div class="description"><a href="#">Tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor.</a></div>

                    </div>

                    <!-- Post Ends -->

                    <div class="row">

                        <!-- Post Starts -->

                        <div class="col-lg-12 col-md-6 col-sm-6">

                            <div class="row post">

                                <div class="col-lg-5 col-md-5">

                                    <div class="picture"><img src="http://placehold.it/750x750" class="img-responsive"
                                                              alt=""></div>

                                </div>

                                <div class="col-lg-7 col-md-7">

                                    <h1>Chicken</h1>

                                    <div class="post-info clearfix">

                                        <div class="stars pull-left"><i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star grey"></i></div>

                                        <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                                    </div>

                                    <div class="description"><a href="#">Pellentesque habitant morbi tristique senectus
                                            et
                                            netus et malesuada fames ac.</a></div>

                                </div>

                            </div>

                        </div>

                        <!-- Post Ends --><!-- Post Starts -->

                        <div class="col-lg-12 col-md-6 col-sm-6">

                            <div class="row post">

                                <div class="col-lg-5 col-md-5">

                                    <div class="picture"><img src="http://placehold.it/750x750" class="img-responsive"
                                                              alt=""></div>

                                </div>

                                <div class="col-lg-7 col-md-7">

                                    <h1>BBQ</h1>

                                    <div class="post-info clearfix">

                                        <div class="stars pull-left"><i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star grey"></i></div>

                                        <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                                    </div>

                                    <div class="description"><a href="#">Netus et malesuada fames ac turpis egestas.
                                            Vestibulum tortor quam, feugiat vitae.</a></div>

                                </div>

                            </div>

                        </div>

                        <!-- Post Ends -->

                        <!-- Post Starts -->

                        <div class="col-lg-12 col-md-6 col-sm-6">

                            <div class="row post">

                                <div class="col-lg-5 col-md-5">

                                    <div class="picture"><img src="http://placehold.it/750x750" class="img-responsive"
                                                              alt=""></div>

                                </div>

                                <div class="col-lg-7 col-md-7">

                                    <h1>Fish</h1>

                                    <div class="post-info clearfix">

                                        <div class="stars pull-left"><i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star grey"></i></div>

                                        <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                                    </div>

                                    <div class="description"><a href="#">Netus et malesuada fames ac turpis egestas.
                                            Vestibulum tortor quam, feugiat vitae.</a></div>

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

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/ads/125x125/1.jpg" width="125"
                                                                              height="125" alt=""></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/ads/125x125/2.jpg" width="125"
                                                                              height="125" alt=""></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/ads/125x125/3.jpg" width="125"
                                                                              height="125" alt=""></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/ads/125x125/5.gif" width="125"
                                                                              height="125" alt=""></div>

                    </div>

                </div>

                <!-- ADVERTISEMENT 300 X 250 ENDS -->

                <!-- FEATURED AUTHORS STARTS -->

                <div class="featured-authors">

                    <div class="cat-caption">

                        <h1>Mag Authors</h1>

                    </div>

                    <ul>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt=""></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt=""></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt=""></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt=""></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt=""></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt=""></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt=""></a></li>

                        <li><a href="#"><img src="http://placehold.it/120x120" class="img-responsive" alt=""></a></li>

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

            </div>

            <!-- Right Column Ends -->

        </div>

    </div>
@endsection
