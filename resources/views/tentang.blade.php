@extends('layouts.main')

@section('title', 'home')

@section('content')
   <!-- content -->
   <div class="content">
      <img src="img/masjid.jpg" class="img-fluid" alt="" />
      <div class="container">
          <div class="carousel-caption text-start position-absolute top-50 start-20 end-0 ">
            <h1 class="fw-bold" style="font-size: 60px; text-transform: uppercase;"> Tentang</h1>
            <p class="pb-5 fs-5">Beberapa tentang website ini.</p>
          </div>
        </div>
    </div>
    <!-- akhir content -->

    <!-- Tentang -->
    <div class="container col-lg-10">
        <div class="text-tentang my-5 p-4">
            <h1 class="fw-semibold" style="color: #a72185;">Tentang Desa</h1>
            <p>Kami salah satu desa yang ada di profinsi jawa barat, kami mempunyai beberapa kampung dan tempat wisata, kami pun menyediakan sebuah layanan untuk masyarakat dan mempermudah masyarakat, membantu masyarakat serta ikut gotong royong dengan masyarakat.</p>

            <p>Kami membuat website ini atar kerjasama bersama SMKN 1 Kawali, mereka ingin sekalian bersilaturahmi bersama kami dalam bentuk utnuk membangun desa digital, kami sangat bangga atas kerjasamanya karena dengan adanya hal tersebut bisa membantu orang lain dalam mengakses desa kami, kami pun berterimakasih kepada SMKN 1 Kawali karena hal tersebut memungkinkan kami lebih mudah untuk membagikan informasi.</p>

            <p>Jika kalian butuh bantukan kami silahkan kontak kami, atau kalian bisa langsung datang ke kantor kami, karna kami selalu ada untuk masyarakat.</p>
        </div>
        <div class="text-tentang my-5 p-4">
            <h1 class="fw-semibold" style="color: #a72185;">Tentang SMKN 1 Kawali</h1>
            <p>Kamipun berterimakasih kepada desa kawali yang ingin menerima niat baik kami, karena hal tersebut kami bisa sekalian melatih anak didik kami untuk mencoba membuat project ini dan semoga desa kawali dan desa lainnya bisa menjadi desa digital yang akan memudahkan masyarakat untuk mengetahui tentang desa mereka.</p>

            <p>Kami berterimakasih juga kepada siswa yang telah membuatkan website ini dengan ini semoga kalian bisa mempunyai soft skil yang bagus untuk kedepanya kalian berkerja, kami sangat bangga terhadap karya kalian dengan ini kami akan selalu membatu kalian agar kalian bisa mendapat pekerjaan yang layak suatu saat nanti, lalu kalian jangan menjadi orang yang malas selalu lah berlajar dan gapai mimpi kalian karna kami yakin kalian akan bisa menggapai mimpi yang kalian inginkan selagi kalian berusaha.</p>

            <p>Silahkan jika kalian membutuhkan bantuan kami, kami selalu ada untuk kalian silahkan anda datang ke SMKN 1 Kawali.</p>
        </div>
    </div>
    <!-- end tentang -->
    
    <!-- contact -->
    <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-md-7">
            <h2 class="fw-bold">Petalokasi</h2>
          </div>
          <div class="col-md-5">
            <h2 class="fw-bold">Kontak</h2>
          </div>
          <hr class="featurette-divider" />
          <div class="row mt-5">
            <div class="col-md-7">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d654.0943647419421!2d108.3694460678143!3d-7.185554546448442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f43a83e8ed271%3A0xc5407ff39e3dee55!2sKawali%20Head%20Village%20Office!5e1!3m2!1sen!2sid!4v1663330642829!5m2!1sen!2sid"
                width="100%"
                height="100%"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
            <div class="col-md-5">
              <div class="row mb-3">
                <div class="col">
                  <form action="">
                    <label for="firstName">Nama depan</label>
                    <input type="text" id="firstName" class="form-control shadow-sm" aria-label="First name" />
                  </div>
                  <div class="col">
                    <label for="lastName">Nama belakang</label>
                    <input type="text" id="lastName" class="form-control shadow-sm" aria-label="Last name" />
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control shadow-sm" id="exampleInputEmail1" aria-describedby="emailHelp" />
                  <div id="emailHelp" class="form-text">Tolong isikan email anda dengan benar!!</div>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                  <textarea class="form-control shadow-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary" style="border: none; background-color: #a72185 !important">Kirim!!</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir contact -->
@endsection