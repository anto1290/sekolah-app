<!DOCTYPE html>
<div class="container-fluid">
  <div class="container pt-5 px-2 pb-2">
    <div class="row justify-content-between">
      <div class="col-5">
        <h1 class="text-left">Universitas <span class="text-primary">Widya Husada</span> Semarang</h1>
        <p class="text-left">Universitas WHS adalah tempat mencetak penerus bangsa
yang berkualitas dan berprestasi di segala bidang
yang dapat bersaing di dunia  internasional</p>
        <div class="mt-2">
          <button class="btn btn-primary">Daftar Sekarang</button>
        </div>
      </div>
      <div class="col-5">
        <img src="https://lh3.googleusercontent.com/p/AF1QipPhNXY0aDBMvIJKcaIzMdzduFzGPXkhI2zDu33I=s1360-w1360-h1020-rw" alt="uwhs" class="rounded" widht="300" height="280">
      </div>
    </div>
  </div>
</div>
<!-- Card Info -->
 <div class="my-2">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Dosen</h5>
              <p class="card-text h2 text-center">50 <i class="fa-solid fa-user"></i></p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Mahasiswa</h5>
              <p class="card-text h2 text-center">300 <i class="fa-solid fa-user-graduate"></i></p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kelas</h5>
              <p class="card-text h2 text-center">17 <i class="fa-solid fa-building-columns"></i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div> 
 <!-- Card WHY -->
<div class="container py-3">
  <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
    <div class="w-50">
      <h1>Kenapa Harus Universitas <span class="text-primary">Widya Husada</span>  Semarang?</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <img src="./img/icons/computer.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Fasilitas Lengkap</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
      <div class="card-body text-center">
          <img src="./img/icons/bank.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Lingkungan Nyaman</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
      <div class="card-body text-center">
          <img src="./img/icons/team.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Pengajar Kompeten</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
      <div class="card-body text-center">
          <img src="./img/icons/team_work.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Kerja Sama Luas</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Section Who -->
<div class="container py-4">
  <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
    <div class="w-50">
      <h1>Siapa Kami?</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
    <img src="https://lh3.googleusercontent.com/p/AF1QipPhNXY0aDBMvIJKcaIzMdzduFzGPXkhI2zDu33I=s1360-w1360-h1020-rw" alt="uwhs" class="rounded" widht="300" height="280">
      
    </div>
    <div class="col-md-8">
    <p>Universitas Widya Husada Semarang adalah perguruan tinggi yang berkomitmen untuk mencetak generasi penerus bangsa yang berkualitas dan berprestasi di segala bidang. Dengan fasilitas lengkap, lingkungan nyaman, dan pengajar kompeten, kami siap memberikan pendidikan terbaik untuk masa depan yang gemilang.</p>
    <p>Kami memiliki kerja sama luas dengan berbagai institusi, sehingga mahasiswa kami dapat mengakses peluang belajar dan karir yang lebih baik. Bergabunglah bersama kami dan jadilah bagian dari komunitas akademis yang dinamis dan inovatif.</p>
    </div>
  </div>
</div>
<!-- End of Section Who --> 
 <!-- Section News -->
  <div class="continer-fluid bg-success-subtle py-4">
    <div class="container">
      <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
        <div class="w-50">
          <h1>Berita Terbaru</h1>
        </div>
      </div>
      <div class="row">
        <?php foreach ($data['berita'] as $news) { ?>
        <div class="col-md-4">
          <div class="card">
            <img src="<?= $news['image'] ?>" class="card-img-top" height="200" alt="Berita 1">
            <div class="card-body">
              <h5 class="card-title"><?= $news['title']; ?></h5>
              <p class="card-text"><?= substr($news['description'], 0, 70); ?>...</p>
              <a href="<?= BASE_URL.'artikel/detail/'. $news['id'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
<!-- End of Section News -->
<!-- Section Galery -->
<div class="container py-4">
  <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
    <div class="w-50">
      <h1>Galeri Kegiatan Kami</h1>
    </div>
  </div>
  <div class="row">
    <?php foreach ($data['galeri'] as $galeri) { ?>
    <div class="col-md-4">
      <img src="<?= $galeri['image'] ?>" alt="<?= $galeri['title'] ?>" class="img-fluid rounded mb-3" width="250" height="250">
    </div>
    <?php } ?>
  </div>
</div>
<!-- End of Section Galery -->
