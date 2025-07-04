<div class="container py-4">
  <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
    <div class="w-50">
      <h1>Galeri Kegiatan Kami</h1>
    </div>
  </div>
  <div class="row">
    <?php foreach($data['galeri'] as $galery) { ?> 
    <div class="col-md-3">
      <img src="<?= $galery['image'] ?>" alt="<?= $galery['title'] ?>" class="img-fluid rounded mb-3" width="280" height="300">
    </div>
    <?php } ?>
  </div>
</div>
