<div class="container my-5">
  <div class="text-center mb-4">
    <img src="<?= $data['article']['image'] ?>" alt="<?= $data['article']['title'] ?>" class="img-fluid rounded" width="700">
  </div>
  <h2><?= $data['article']['title'] ?></h2>
  <div>
    <p class='text-justify'><?= $data['article']['content'] ?></p>
  </div>
  <p><strong>Ditulis pada:</strong> <?= date('d M Y', strtotime($data['article']['created_at'])) ?></p>
  <a href="<?= BASE_URL . 'artikel' ?>" class="btn btn-secondary">Kembali ke Daftar Berita</a>
</div>
