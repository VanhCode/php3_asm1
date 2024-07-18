@extends('Client.block.master')

@section('title')
    {{ $postDetail->title }}
@endsection

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <ol class="breadcrumb">

                    <li><a href="#">Trang chủ</a></li>

                    <li class="active">{{ $postDetail->title }}</li>

                </ol>

            </div>

        </div>

    </div>

    <!-- /. BREADCRUMBS ENDS

        ========================================================================= -->

    <!-- CATEGORY GRID STARTS

        ========================================================================= -->

    <div class="container post-page">

        <div class="row">

            <!-- Left Column Starts -->

            <div class="col-lg-8">

                <div class="post">

                    <div class="caption clearfix">

                        <h1>{{ $postDetail->title }}</h1>

                    </div>

                    <!-- Gallery Carousel Starts -->

                    <div class="gallery-carousel">

                        <div class="picture">

                            <img src="{{ asset($postDetail->image) }}" class="img-responsive" alt="">

                        </div>

                    </div>

                    <!-- Gallery Carousel Ends -->

                    <div class="post-info">

                        <div class="info">

                            <span class="author-name"><a href="#">{{ $postDetail->category_name }}</a></span>

                            <span class="date"><i class="fa fa-clock-o"></i> {{ date('d-m-Y', strtotime($postDetail->created_at)) }}</span>

                            <span class="comment"><i class="fa fa-comment"></i> 20</span>

                            <span class="eye"><i class="fa fa-eye"></i> 99</span>

                        </div>

                    </div>

                    <hr>

                    <!-- Details Starts -->

                    <div class="detail">

                        <p>{!! $postDetail->excerpt !!}</p>

                        <p>{!! $postDetail->content !!}</p>

                    </div>

                    <!-- Details Ends -->

                    <hr>

                    <!-- Via, Source, Tags Starts -->

                    <div class="via">

                        <ul>

                            <li>VIA</li>

                            <li><a href="#">John Doe</a></li>

                        </ul>

                        <div class="clearfix"></div>

                        <ul>

                            <li>SOURCS</li>

                            <li><a href="#">Themeforest</a></li>

                        </ul>

                        <div class="clearfix"></div>

                        <ul>

                            <li>TAGS</li>

                            <li><a href="#">fashion</a></li>

                            <li><a href="#">clothing</a></li>

                            <li><a href="#">makeup</a></li>

                            <li><a href="#">catwalk</a></li>

                            <li><a href="#">photography</a></li>

                        </ul>

                        <div class="clearfix"></div>

                    </div>

                    <!-- Via, Source, Tags Ends -->

                    <hr>

                    <!-- Share this post starts -->

                    <div class="s-icons">

                        <ul>

                            <li>SHARE POST&nbsp;&nbsp;&nbsp;</li>

                            <li class="icon facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>

                            <li class="icon twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li class="icon linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>

                            <li class="icon dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>

                            <li class="icon youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>

                            <li class="icon behance"><a href="#"><i class="fa fa-behance"></i></a></li>

                        </ul>

                    </div>

                    <!-- Share this post ends -->

                    <hr>

                    <!-- Next & Prev. Starts -->

                    <div class="row next-prev">

                        <div class="col-lg-6 col-md-6 col-sm-6">

                            <div class="post">

                                <div class="post-info">

                                    <h2 class="post-caption">Beauty Trends 2015</h2>

                                    <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                            class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                            class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                </div>

                                <h2><a href="#">9 Beauty Hacks That Will Change the Way You Makeup</a></h2>

                                <div class="button"><a href="#" class="fill prev"><i
                                            class="fa fa-angle-double-left"></i> PREV. ARTICLE</a></div>

                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">

                            <div class="post">

                                <div class="post-info">

                                    <h2 class="post-caption">Cosmopolitan</h2>

                                    <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                            class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                            class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                </div>

                                <h2><a href="#">Now This Is Four Cities Where All The Cool Kids Are Moving</a></h2>

                                <div class="button"><a href="#" class="fill next">NEXT ARTICLE <i
                                            class="fa fa-angle-double-right"></i></a></div>

                            </div>

                        </div>

                    </div>

                    <!-- Next & Prev. Ends -->

                    <hr>

                    <!-- About Author Starts -->

                    <div class="about-author">

                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6 cat-caption">

                                <h1>About Author</h1>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">

                                <div class="s-icons pull-right">

                                    <ul>

                                        <li class="icon facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>

                                        <li class="icon twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>

                                        <li class="icon linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-12">

                                <img src="http://placehold.it/120x120" class="pull-left" alt="">

                                <div class="name">John Doe</div>

                                <div class="description">Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies
                                    eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper
                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- About Author Ends -->

                    <hr>

                    <!-- Related Articles Starts -->

                    <div class="row">

                        <div class="col-lg-12 cat-caption">

                            <h1>Related Articles</h1>

                        </div>

                        <div class="col-lg-4 col-md-4">

                            <div class="post">

                                <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive"
                                                          alt=""></div>

                                <div class="post-info">

                                    <h2 class="post-caption">Celebrity Style</h2>

                                    <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                            class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                            class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                </div>

                                <h2><a href="#">The 5 New Watch Trends To Try Now</a></h2>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-4">

                            <div class="post">

                                <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive"
                                                          alt=""></div>

                                <div class="post-info">

                                    <h2 class="post-caption">Fashion Shows</h2>

                                    <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                            class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                            class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                </div>

                                <h2><a href="#">10 Style Tips to Look Instantly Slimmer</a></h2>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-4">

                            <div class="post">

                                <div class="picture"><img src="http://placehold.it/750x500" class="img-responsive"
                                                          alt=""></div>

                                <div class="post-info">

                                    <h2 class="post-caption">Beauty Trends</h2>

                                    <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                            class="date"><i class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                            class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                </div>

                                <h2><a href="#">Cheryl Steals Kate Middleton’s</a></h2>

                            </div>

                        </div>

                    </div>

                    <!-- Related Articles Ends -->

                    <hr>

                    <!-- Comment Starts -->

                    <div class="comments">

                        <div class="row">

                            <div class="col-lg-12 cat-caption">

                                <h1>4 Comments</h1>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-12">

                                <ul class="media-list">

                                    <li class="media">

                                        <div class="media-left">

                                            <a href="#">

                                                <img src="http://placehold.it/120x120" alt="">

                                            </a>

                                        </div>

                                        <div class="media-body">

                                            <h4 class="media-heading">Phasellus ultrices nulla</h4>

                                            <div class="info"><span class="author-name"><a
                                                        href="#">John Doe</a></span><span class="date"><i
                                                        class="fa fa-clock-o"></i> may 1, 2015</span></div>

                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                ultricies eget, tempor sit.</p>

                                            <div class="reply"><a href="#">reply</a></div>

                                            <!-- Nested media object -->

                                            <div class="media">

                                                <div class="media-left">

                                                    <a href="#">

                                                        <img src="http://placehold.it/120x120" alt="">

                                                    </a>

                                                </div>

                                                <div class="media-body">

                                                    <h4 class="media-heading">Pellentesque habitant morbi</h4>

                                                    <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                                            class="date"><i
                                                                class="fa fa-clock-o"></i> may 1, 2015</span></div>

                                                    <p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi
                                                        vitae est. Mauris placerat eleifend leo. Quisque sit amet est
                                                        et.</p>

                                                    <div class="reply"><a href="#">reply</a></div>

                                                </div>

                                            </div>

                                            <!-- Nested media object -->

                                            <div class="media">

                                                <div class="media-left">

                                                    <a href="#">

                                                        <img src="http://placehold.it/120x120" alt="">

                                                    </a>

                                                </div>

                                                <div class="media-body">

                                                    <h4 class="media-heading">Morbi in sem quis</h4>

                                                    <div class="info"><span class="author-name"><a href="#">John Doe</a></span><span
                                                            class="date"><i
                                                                class="fa fa-clock-o"></i> may 1, 2015</span></div>

                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque ante sollicitudin commodo. Cras purus odio,
                                                        vestibulum in vulputate.</p>

                                                    <div class="reply"><a href="#">reply</a></div>

                                                </div>

                                            </div>

                                        </div>

                                    </li>

                                    <li class="media">

                                        <div class="media-left">

                                            <a href="#">

                                                <img src="http://placehold.it/120x120" alt="">

                                            </a>

                                        </div>

                                        <div class="media-body">

                                            <h4 class="media-heading">Lorem ipsum dolor sit amet</h4>

                                            <div class="info"><span class="author-name"><a
                                                        href="#">John Doe</a></span><span class="date"><i
                                                        class="fa fa-clock-o"></i> may 1, 2015</span></div>

                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate.</p>

                                            <div class="reply"><a href="#">reply</a></div>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <!-- Comment Ends -->

                    <hr>

                    <!-- Leave a Comment Starts -->

                    <div class="leave-comment">

                        <div class="row">

                            <div class="col-lg-12 cat-caption">

                                <h1>Leave a Comment</h1>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6 col-md-6"><input name="name" type="text" placeholder="Name *"></div>

                            <div class="col-lg-6 col-md-6"><input name="emailaddress" type="text"
                                                                  placeholder="Email Address *"></div>

                            <div class="col-lg-12"><input name="website" type="text" placeholder="Website"></div>

                            <div class="col-lg-12"><textarea rows="5" placeholder="Comment"></textarea></div>

                            <div class="col-lg-12"><input type="button" value="POST COMMENT"></div>

                        </div>

                    </div>

                    <!-- Leave a Comment Ends -->

                </div>

            </div>

            <!-- Left Column Ends -->

            <!-- Right Columns Starts -->

            <div class="col-lg-4 sidebar">

                <!-- JOIN US STARTS -->

                <div class="join-us-02 clearfix">

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

                        <li class="youtube">

                            <div class="icon"><a href="#"><i class="fa fa-youtube"></i></a></div>

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

                            <li role="presentation"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">tags</a>
                            </li>

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

                                                <h2 class="post-caption">Fashion</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">3 Four-Star Resorts Costa Rica’s Luxury
                                                    Reputation</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">tech</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Sir John is New Celebrity Makeup</a>
                                            </div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">life style</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">All of the Best and Worst Moments</a>
                                            </div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">world</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">10 Most Beautifull Infinity Pools With
                                                    Blue Water</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">world</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Pellentesque habitant morbi tristique
                                                    et netus et.</a></div>

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

                                                <h2 class="post-caption">Fashion</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Pellentesque habitant morbi tristique
                                                    senectus et netu.</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Fashion</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Pellentesque habitant morbi tristique
                                                    et netus et.</a></div>

                                        </div>

                                    </li>

                                    <li class="post">

                                        <div class="picture"><img src="http://placehold.it/100x100" alt=""></div>

                                        <div class="information">

                                            <div class="post-info">

                                                <h2 class="post-caption">Fashion</h2>

                                                <div class="info"><span class="author-name"><a
                                                            href="#">John Doe</a></span><span class="date"><i
                                                            class="fa fa-clock-o"></i> may 1, 2015</span> <span
                                                        class="comment"><i class="fa fa-comment"></i> 20</span></div>

                                            </div>

                                            <div class="description"><a href="#">Pellentesque habitant morbi tristique
                                                    et net.</a></div>

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

                <!-- FEATURED VIDEOS STARTS -->

                <div class="featured-video">

                    <div class="cat-caption">

                        <h1>Featured Videos</h1>

                    </div>

                    <div class="featured-video-carousel">

                        <div class="video">

                            <img src="http://placehold.it/750x800" class="img-responsive" alt="">

                            <div class="bg">&nbsp;</div>

                            <div class="icon"><a class="popup-vimeo" href="https://vimeo.com/45830194"><i
                                        class="fa fa-play"></i></a></div>

                            <div class="information">

                                <h1>Shopping<br><strong>Festival 2014</strong></h1>

                                <h2 class="post-caption">Fashion</h2>

                                <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                            </div>

                        </div>

                        <div class="video">

                            <img src="http://placehold.it/750x800" class="img-responsive" alt="">

                            <div class="bg">&nbsp;</div>

                            <div class="icon"><a class="popup-vimeo" href="https://vimeo.com/45830194"><i
                                        class="fa fa-play"></i></a></div>

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

                        <img src="images/ads/3d_300x250_v2.gif" width="300" height="250" alt="">

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

                                    <h1>Fashion Week</h1>

                                    <div class="post-info clearfix">

                                        <div class="stars pull-left"><i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star grey"></i></div>

                                        <div class="info pull-right"><i class="fa fa-clock-o"></i> may 1, 2015</div>

                                    </div>

                                    <div class="description"><a href="#">Pellentesque habitant morbi tristique senectus
                                            et netus et malesuada fames ac.</a></div>

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

                                    <h1>Fashion Week</h1>

                                    <div class="post-info clearfix">

                                        <div class="stars pull-left"><i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star grey"></i></div>

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

                                    <h1>Fashion Week</h1>

                                    <div class="post-info clearfix">

                                        <div class="stars pull-left"><i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star grey"></i></div>

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

                                    <h1>Fashion Week</h1>

                                    <div class="post-info clearfix">

                                        <div class="stars pull-left"><i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star grey"></i></div>

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

            </div>

            <!-- Right Columns Ends -->

        </div>

    </div>

    <!-- /. CATEGORY GRID ENDS

        ========================================================================= -->

    <!-- FOOTER STARTS

        ========================================================================= -->
@endsection
