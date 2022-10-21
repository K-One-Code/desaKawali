@extends('layouts.main')

@section('title', 'home')

@section('content')
<!-- <link rel="stylesheet" href="css/style1.css"> -->
     <!-- carousel berita -->
     <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item  carausel-berita active position-relative">
                    <img src="img/desa.jpg" class="d-block w-100" alt="img/desa.jpg">
                    <div class="ovelay text-white position-absolute start-0 end-0 top-50 bottom-0 text-center col-lg-6 offset-3">
                      <h1 class="text-judul fw-bold">Harga <span class="text-purple">BBM Naik</span></h1>

                      <p>Harga BBM sekarang naik menjadi 10rb tetapi anehnya bukannya di pombensin menjadi semakin sepi ini malah semakin banyak yang mengakibatkan kewalahanya para petugas pombensin.</p>
                      <button class="btn-other border-0 rounded-4 px-5 py-1 shadow"><a href="#berita" class="text-decoration-none text-white">Liat lainnya</a></button>
                    </div>
                  </div>
                  <div class="carousel-item carausel-berita  position-relative">
                    <img src="img/sawah.jpg" class="d-block w-100" alt="img/desa.jpg">
                    <div class="ovelay text-white position-absolute start-0 end-0 top-50 bottom-0 text-center col-lg-6 offset-3">
                      <h1 class="text-judul fw-bold">Harga <span class="text-purple">BBM Naik</span></h1>

                      <p>Harga BBM sekarang naik menjadi 10rb tetapi anehnya bukannya di pombensin menjadi semakin sepi ini malah semakin banyak yang mengakibatkan kewalahanya para petugas pombensin.</p>
                      <button class="btn-other border-0 rounded-4 px-5 py-1 shadow"><a href="#berita" class="text-decoration-none text-white">Liat lainnya</a></button>
                    </div>
                  </div>
                  <div class="carousel-item carausel-berita  position-relative">
                    <img src="img/coursel/images.jpg" class="d-block w-100" alt="img/desa.jpg">
                    <div class="ovelay text-white position-absolute start-0 end-0 top-50 bottom-0 text-center col-lg-6 offset-3">
                      <h1 class="text-judul fw-bold">Harga <span class="text-purple">BBM Naik</span></h1>

                      <p>Harga BBM sekarang naik menjadi 10rb tetapi anehnya bukannya di pombensin menjadi semakin sepi ini malah semakin banyak yang mengakibatkan kewalahanya para petugas pombensin.</p>
                      <button class="btn-other border-0 rounded-4 px-5 py-1 shadow"><a href="#berita" class="text-decoration-none text-white">Liat lainnya</a></button>
                    </div>
                  </div>
                </div>
              </div>
    <!-- end carausel -->

    <!-- content berita -->
    <section id="berita">
      <div class="container berita">
        <div class="row my-5 justify-content-center">
          <h1 class="text-center fw-bold p-3">Berita</h1>
          <div class="col-lg-11">
            <div class="row bg-berita p-3 rounded-4 shadow align-items-center">
              <div class="row">
                <div class="col-8">
                  <h5 class="fw-bold">Terkini</h5>
                </div>
                <div class="col-4 text-end">
                  <p>lainya <i class="bi bi-chevron-right "></i></p>
                </div>
              </div>
              <div class="col-md-4 position-relative">
                <img src="img/kades2.JPG " class="d-block mx-auto foto-berita rounded-4 shadow" alt="">
                <div class="ovelay-berita position-absolute  start-0 bottom-0 p-4 rounded">
                  <h5 class="text-white">Harga bebeem yang naiknya sangat buset banget membuat sebagian warga tercengang.</h5>
                  <p class="text" style="font-size: 11px;">1 bulan yang lalu</p>
                </div>
              </div>
              <div class="col-md-4  berita-lainya">
                <div class="col">
                  <p>Terbaru dan umum</p>
                </div>
                <div class="row bg-white pt-3 m-1 rounded-top">
                  <div class="col-md-4">
                    <img src="img/kades2.JPG" class="img-berita rounded-3" alt="">
                  </div>
                  <div class="col-md-8 text-img-berita">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, assumenda. Exercitationem vel optio natus. Praesentium?</p>
                    <p><i class="bi bi-clock-fill"></i> 24 house</p>
                  </div>
                </div>
                <div class="row bg-white pt-3  m-1">
                  <div class="col-md-4">
                    <img src="img/kades2.JPG" class="img-berita rounded-3" alt="">
                  </div>
                  <div class="col-md-8 text-img-berita">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, assumenda. Exercitationem vel optio natus. Praesentium?</p>
                    <p><i class="bi bi-clock-fill"></i> 24 house</p>
                  </div>
                </div>
                <div class="row bg-white pt-3  m-1 rounded-bottom">
                  <div class="col-md-4">
                    <img src="img/kades2.JPG" class="img-berita rounded-3" alt="">
                  </div>
                  <div class="col-md-8 text-img-berita">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, assumenda. Exercitationem vel optio natus. Praesentium?</p>
                    <p><i class="bi bi-clock-fill"></i> 24 house</p>
                  </div>
                </div>
                </div>
              <div class="col-md-4 berita-lainya">
                <div class="col">
                  <p>Terending</p>
                </div>
                <div class="row bg-white pt-3  m-1 rounded-top">
                  <div class="col-md-4">
                    <img src="img/kades2.JPG" class="img-berita rounded-3" alt="">
                  </div>
                  <div class="col-md-8 text-img-berita">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, assumenda. Exercitationem vel optio natus. Praesentium?</p>
                    <p><i class="bi bi-clock-fill"></i> 24 house</p>
                  </div>
                </div>
                <div class="row bg-white pt-3  m-1">
                  <div class="col-md-4">
                    <img src="img/kades2.JPG" class="img-berita rounded-3" alt="">
                  </div>
                  <div class="col-md-8 text-img-berita">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, assumenda. Exercitationem vel optio natus. Praesentium?</p>
                    <p><i class="bi bi-clock-fill"></i> 24 house</p>
                  </div>
                </div>
                <div class="row bg-white pt-3  m-1 rounded-bottom">
                  <div class="col-md-4">
                    <img src="img/kades2.JPG" class="img-berita rounded-3" alt="">
                  </div>
                  <div class="col-md-8 text-img-berita">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, assumenda. Exercitationem vel optio natus. Praesentium?</p>
                    <p><i class="bi bi-clock-fill"></i> 24 house</p>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="container berita">
        <div class="row my-5 justify-content-center">
          <div class="col-lg-11">
            <div class="row bg-berita p-3 rounded-4 shadow align-items-center">
              <div class="row">
                <div class="col-8">
                  <h5 class="fw-bold">Berita Olahraga</h5>
                </div>
                <div class="col-4 text-end">
                  <p>lainya <i class="bi bi-chevron-right "></i></p>
                </div>
              </div>
              <div class="col-md-4 position-relative">
                <img src="img/kades2.JPG " class="d-block mx-auto foto-berita rounded-4 shadow" alt="">
                <div class="ovelay-berita position-absolute  start-0 bottom-0 p-4 rounded">
                  <h5 class="text-white">Larian dari anak ini mampu mengalahakan kecepatan f1 sampai semua orang terkagum-kagum melihatnya.</h5>
                  <p class="text" style="font-size: 11px;">1 bulan yang lalu</p>
                </div>
              </div>
              <div class="col-md-8 berita-lainya">
                <div class="col">
                  <p>Terbaru dan umum</p>
                </div>
                <div class="row bg-white p-3 m-1 rounded-top">
                  <div class="col-md-2">
                    <img src="img/kades2.JPG" class="img-berita rounded-3" alt="">
                  </div>
                  <div class="col-md-10 text-img-berita">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, assumenda. Exercitationem vel optio natus. Praesentium?</p>
                    <p><i class="bi bi-clock-fill"></i> 24 house</p>
                  </div>
                </div>
                <div class="row bg-white p-3  m-1">
                  <div class="col-md-2">
                    <img src="img/kades2.JPG" class="img-berita rounded-3" alt="">
                  </div>
                  <div class="col-md-10 text-img-berita">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, assumenda. Exercitationem vel optio natus. Praesentium?</p>
                    <p><i class="bi bi-clock-fill"></i> 24 house</p>
                  </div>
                </div>
                <div class="row bg-white p-3  m-1 rounded-bottom">
                  <div class="col-md-2">
                    <img src="img/kades2.JPG" class="img-berita rounded-3" alt="">
                  </div>
                  <div class="col-md-10 text-img-berita">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, assumenda. Exercitationem vel optio natus. Praesentium?</p>
                    <p><i class="bi bi-clock-fill"></i> 24 house</p>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </section>


    <!-- end content -->
@endsection