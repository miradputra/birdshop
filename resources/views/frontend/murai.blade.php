
@extends('layouts.frontend')
@section('content')
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Shop Category</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index">Home</a>
              <a href="category">Shop</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <div class="product_top_bar">
              <div class="left_dorp">
              <select class="sorting">
                  <option value="1">halaman awal</option>
                  <option value="2">halaman 01</option>
                  <option value="4">halaman 02</option>
                </select>

                <select class="show">
                  <option value="1">Show 3</option>
                </select>
              </div>
            </div>
            
            <div class="latest_product_inner">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <div class="single-product">
                    <div class="product-img">
                      <img
                        class="card-img"
                        src="frontend/eiser/img/product/inspired-product/muraibatu.jpg"alt="" style = "height:250px;"/>
                      <div class="p_icon">
                        <a href="#">
                          <i class="ti-eye"></i>
                        </a>
                        <a href="#">
                          <i class="ti-heart"></i>
                        </a>
                        <a href="#">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="#" class="d-block">
                        <h4>Burung Murai Batu</h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4">Rp.1.300.000</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6">
                  <div class="single-product">
                    <div class="product-img">
                      <img
                        class="card-img"
                        src="frontend/eiser/img/product/inspired-product/muraiborneo.jpg"alt="" style = "height:250px;"/>
                      <div class="p_icon">
                        <a href="#">
                          <i class="ti-eye"></i>
                        </a>
                        <a href="#">
                          <i class="ti-heart"></i>
                        </a>
                        <a href="#">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="#" class="d-block">
                        <h4>Burung Murai Borneo</h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4">Rp.1.400.000</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="single-product">
                    <div class="product-img">
                      <img
                        class="card-img"
                        src="frontend/eiser/img/product/inspired-product/muraimedan.jpg" alt="" style = "height:250px;"/>
                      <div class="p_icon">
                        <a href="#">
                          <i class="ti-eye"></i>
                        </a>
                        <a href="#">
                          <i class="ti-heart"></i>
                        </a>
                        <a href="#">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="#" class="d-block">
                        <h4>Burung Murai Batu edan</h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4">Rp.2.200.000</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Bird Categories</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="category">Love bird</a>
                    </li>
                    <li>
                      <a href="kenari">Kenari</a>
                    </li>
                    <li>
                      <a href="murai">Murai Batu</a>
                    </li>
                    <li>
                      <a href="anis">Anis</a>
                    </li>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Medisinal Products</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                    <a href="ebod">Ebod jaya</a>
                    </li>
                    <li>
                      <a href="oriq">Oriq Jaya</a>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Bird Food</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="biji">biji bijian</a>
                    </li>
                    <li>
                      <a href="voer">Voer</a>
                    </li>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection