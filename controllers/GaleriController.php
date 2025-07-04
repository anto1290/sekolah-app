<?php

class GaleriController extends Controller {
    protected $galeri = [
        [
            'id' => 1,
            'title' => 'Kegiatan Belajar Mengajar',
            'description' => 'Kegiatan belajar mengajar di kelas',
            'image' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/04/2025/01/02/Screenshot_20250102_113714_WPS-Office-2861681748.jpg',
            'created_at' => '2023-01-01 10:00:00'
        ],
        [
            'id' => 2,
            'title' => 'Kegiatan Ekstrakurikuler',
            'description' => 'Kegiatan ekstrakurikuler siswa',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSM33BWR_tC9TVxpwRdPYZb3vvmVaZNZ6K2U3cfkOYzFiVOjIg8pGoxCferczxX1g9aBLA&usqp=CAU',
            'created_at' => '2023-01-02 10:00:00'
        ],
        [
            'id' => 3,
            'title' => 'Kegiatan Ekstrakurikuler',
            'description' => 'Kegiatan ekstrakurikuler siswa',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW7a_h0hptSSwPgw8cJjVCybC-eogYZO8HjQ&s',
            'created_at' => '2023-01-02 10:00:00'
        ],
        [
            'id' => 4,
            'title' => 'Kegiatan Ekstrakurikuler',
            'description' => 'Kegiatan ekstrakurikuler siswa',
            'image' => 'https://uwhs.ac.id/wp-content/uploads/2018/07/pelatihan_item_dev-1024x576.jpeg',
            'created_at' => '2023-01-02 10:00:00'
        ]
        ];
    public function index() {
        // Load the galeri view
        $this->layout('galeri/index', 'default', [
            'title' => 'Galeri',
            'description' => 'Galeri foto kegiatan dan acara di Universitas Widya Husada Semarang',
            'galeri' => $this->galeri
        ]);
    }

    public function detail($id) {
        // Load the galeri detail view
        $this->layout('galeri/detail', 'default', [
            'title' => 'Detail Galeri',
            'description' => 'Detail galeri dengan ID: ' . $id
        ]);
    }
}
