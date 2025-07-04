<?php

class GaleriController extends Controller {
    public function index() {
        // Load the galeri view
        $this->layout('galeri/index', 'default', [
            'title' => 'Galeri',
            'description' => 'Galeri foto kegiatan dan acara di Universitas Widya Husada Semarang'
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
