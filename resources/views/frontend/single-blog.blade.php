@extends('layouts.frontend')
@section('content')
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Blog Detail</h2>
              <p>Info Lomba Burung Kicau Mania</p>
            </div>
            <div class="page_link">
              <a href="index">Home</a>
              <a href="blog">Blog </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="blog_area section_gap">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">
                      <article class="blog_item">
                        <div class="blog_item_img">
                          <img class="card-img rounded-0" src="frontend/eiser/img/blog/main-blog/info1.jpg" alt="">
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Info Lomba burung</h2>
                            </a>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                             of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution 
                             of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop
                              publishing packages and web page editors now use Lorem Ipsum as.The point of using Lorem Ipsum is that it has a more-or-less normal distribution 
                             of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop
                              publishing packages and web page editors now use Lorem Ipsum as
                        </div>
                      </article>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside class="single_sidebar_widget search_widget">
                          <form action="#">
                            <div class="form-group">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Keyword">
                                <div class="input-group-append">
                                  <button class="btn" type="button"><i class="ti-search"></i></button>
                                </div>
                              </div>
                            </div>
                            <button class="main_btn rounded-0 w-100" type="submit">Search</button>
                          </form>
                      </aside>
                      <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Resaurant food</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Travel news</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Modern technology</p>
                                    <p>(03)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Product</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Inspiration</p>
                                    <p>21</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Health Care (21)</p>
                                    <p>09</p>
                                </a>
                            </li>
                        </ul>
                      </aside>
                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Recent Post</h3>
                          <div class="media post_item">
                              <img src="frontend/eiser/img/blog/popular-post/post1.jpg" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>From life was you fish...</h3>
                                  </a>
                                  <p>January 12, 2019</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="frontend/eiser/img/blog/popular-post/post2.jpg" alt="post">                              
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>The Amazing Hubble</h3>
                                  </a>
                                  <p>02 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="frontend/eiser/img/blog/popular-post/post3.jpg" alt="post">                              
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>Astronomy Or Astrology</h3>
                                  </a>
                                  <p>03 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="frontend/eiser/img/blog/popular-post/post4.jpg" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>Asteroids telescope</h3>
                                  </a>
                                  <p>01 Hours ago</p>
                              </div>
                          </div>
                      </aside>
                      <aside class="single_sidebar_widget tag_cloud_widget">
                          <h4 class="widget_title">Tag Clouds</h4>
                          <ul class="list">
                              <li>
                                  <a href="#">project</a>
                              </li>
                              <li>
                                  <a href="#">love</a>
                              </li>
                              <li>
                                  <a href="#">technology</a>
                              </li>
                              <li>
                                  <a href="#">travel</a>
                              </li>
                              <li>
                                  <a href="#">restaurant</a>
                              </li>
                              <li>
                                  <a href="#">life style</a>
                              </li>
                              <li>
                                  <a href="#">design</a>
                              </li>
                              <li>
                                  <a href="#">illustration</a>
                              </li>
                          </ul>
                      </aside>
                  </div>
              </div>
          </div>
      </div>
  </section>
  @endsection
  <!--================Blog Area =================-->