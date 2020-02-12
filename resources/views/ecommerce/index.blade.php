@extends('layouts.frontend')
@section('content')

  <!--================Home Banner Area =================-->
  <section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content row">
          <div class="col-lg-12">
            <h3><span>Pojok Bird Shop </span> <br />Solusi Biar Burung Tetap Jos</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->
  <!--================Feature Product Area =================-->
	<section class="feature_product_area section_gap_bottom_custom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="main_title">
						<h2><span>Produk obat yang sangat di sarankan</span></h2>
						<p>sangat di sarankan untuk para kicau mania</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- PERHATIAKAN BAGIAN INI, LOOPING DATA PRODUK -->
				@forelse($products as $row)
				<div class="col col1">
					<div class="f_p_item">
						<div class="f_p_img">
							<!-- KEMUDIAN TAMPILKAN IMAGENYA DARI FOLDER /PUBLIC/STORAGE/PRODUCTS -->
							<img class="img-fluid" style = "height:250px" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
							<div class="p_icon">
								<a href="{{ url('/product/' . $row->slug) }}">
									<i class="lnr lnr-cart"></i>
								</a>
							</div>
						</div>
							<!-- KETIKA PRODUK INI DIKLIK MAKA AKAN DIARAHKAN KE URL DIBAWAH -->
							<!-- HANYA SAJA URL TERSEBUT BELUM DISEDIAKAN PADA ARTIKEL KALI INI -->
							<a href="{{ url('/product/' . $row->slug) }}">
								<!-- TAMPILKAN NAMA PRODUK -->
								<h4>{{ $row->name }}</h4>
											</a>
							<!-- TAMPILKAN HARGA PRODUK -->
							<h5>Rp {{ number_format($row->price) }}</h5>
							</div>
						</div>
						@empty
									
						@endforelse
					</div>
						<!-- GENERATE PAGINATION UNTUK MEMBUAT NAVIGASI DATA SELANJUTNYA JIKA ADA -->
					<div class="row">
						{{ $products->links() }}
					</div>
				</div>
			</div>
            </div>
        </div>
	</section>
	<!--================End Feature Product Area =================-->

  <!--================ Inspired Product Area =================-->
  <section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>burung yang paling populer di area kontes</span></h2>
            <p>mudah untuk di pelihara</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="frontend/eiser/img/product/inspired-product/pastelijo.jpg" alt="" style = "height:250px;" />
              <div class="p_icon">
                <a href="single-product">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Love Bird Pastel ijo</h4>
              </a>
              <div class="mt-3">
                <!-- <span class="mr-4">Rp.150.000</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="frontend/eiser/img/product/inspired-product/cobal.jpg" alt="" style = "height:250px;" />
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
                <h4>Love Bird Biru Cobal</h4>
              </a>
              <div class="mt-3">
                <!-- <span class="mr-4">Rp.200.000</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="frontend/eiser/img/product/inspired-product/batman.jpg" alt="" style = "height:250px;" />
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
                <h4>Love Bird Batman</h4>
              </a>
              <div class="mt-3">
                <!-- <span class="mr-4">Rp.300.000</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="frontend/eiser/img/product/inspired-product/olive.jpg" alt="" style = "height:250px;" />
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
                <h4>Love Bird Hijau Olive</h4>
              </a>
              <div class="mt-3">
                <!-- <span class="mr-4">Rp.175.000</span> -->
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="frontend/eiser/img/product/inspired-product/kacer.jpg" alt="" style = "height:250px;" />
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
                <h4>Burung Kacer</h4>
              </a>
              <div class="mt-3">
                <!-- <span class="mr-4">Rp.350.000</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="frontend/eiser/img/product/inspired-product/kenari.jpg" alt="" style = "height:250px;" />
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
                <h4>Burung Kenari</h4>
              </a>
              <div class="mt-3">
                <!-- <span class="mr-4">Rp.250.000</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="frontend/eiser/img/product/inspired-product/murai.jpg" alt="" style = "height:250px;" />
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
                <!-- <span class="mr-4">$1300.000</span> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="frontend/eiser/img/product/inspired-product/suren.jpg" alt="" style = "height:250px;"/>
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
                <h4>Burung Jalak Suren</h4>
              </a>
              <div class="mt-3">
                <!-- <span class="mr-4">450.000</span> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Inspired Product Area =================-->
  @endsection