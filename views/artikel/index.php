<div class="container mb-5">
  <h2 class="text-center my-4">Berita Terbaru</h2>
  <p class="text-center mb-4">Berikut adalah berita terbaru dari Universitas Widya Husada Semarang. Kami berkomitmen untuk memberikan informasi terkini mengenai kegiatan, prestasi, dan perkembangan kampus kami. Jangan lewatkan berita menarik lainnya di halaman ini.</p>
  <div class="text-center mb-4">
    <!-- <img src="./img////////.jpg" alt="Berita Terbaru" class="img-fluid rounded"> -->
  </div> 
      <div class="row">
        <?php foreach ($data['articles'] as $article) { ?>
        <div class="col-md-4">
          <div class="card">
            <img src="<?= $article['image'] ?>" class="card-img-top" alt="<?= $article['title'] ?>" height="200">
            <div class="card-body">
              <h5 class="card-title"><?= $article['title'] ?></h5>
              <p class="card-text"><?= substr($article['description'], 0 ,70) ?>...</p>
              <a href="<?= BASE_URL. 'artikel/detail/'. $article['id'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
       <?php } ?>
      </div>
</div>
