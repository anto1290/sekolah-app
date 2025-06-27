<?php


class UploadImage
{
    private $image;
    private $file;
    private $allowedTypes;
    private $maxSize;
    private $uploadDir;
    public function __construct($file, array $allowedTypes = [],int $maxSize = 5000000, $uploadDir = 'public/uploads/')
    {
        $this->file = $file;
        $this->allowedTypes = $allowedTypes ?: ['image/jpeg', 'image/png'];
        $this->maxSize = $maxSize;
        $this->uploadDir = $uploadDir;

        if (!file_exists($this->uploadDir)) {
          mkdir($this->uploadDir, 0777, true);
      }

    }
    public function isValid(): bool
    {
        return isset($this->file) &&
            $this->file['error'] === UPLOAD_ERR_OK &&
            in_array($this->file['type'], $this->allowedTypes) &&
            $this->file['size'] <= $this->maxSize;
    }

    public function upload(string $customName = null): string|false
    {
        $extension = pathinfo($this->file['name'], PATHINFO_EXTENSION);
        $filename = ($customName ? $customName : uniqid()) . '.' . $extension;
        $destination = $this->uploadDir . $filename;

        if (move_uploaded_file($this->file['tmp_name'], $destination)) {
            return $filename;
        }

        return false;
    }

    public function getError(): string
    {
        if ($this->file['error'] !== UPLOAD_ERR_OK) {
            return "Upload error code: " . $this->file['error'];
        }

        if (!in_array($this->file['type'], $this->allowedTypes)) {
            return "Tipe file tidak diizinkan.";
        }

        if ($this->file['size'] > $this->maxSize) {
            return "Ukuran file melebihi batas maksimum.";
        }

        return "Kesalahan tidak diketahui.";
    }

}
