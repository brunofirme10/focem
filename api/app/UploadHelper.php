<?php

/* Classe criada para auxiliar nos uploads de arquivos definindo os nomes e arquivos temporarios
 * Mover arquivo para pasta definida, ou definido o path padrão através do $path
 */

class UploadHelper {

    protected $path = 'uploads/', $file, $fileName, $fileType, $fileTmpName, $fileWidth, $fileHeight;

    public function setPath($path) {
        $this->path = $path;
        return $this;
    }

    public function getPath() {
        return $this->path;
    }

    public function setFile($file) {
        $this->file = $file;
        $this->setFileName();
        $this->setFileType();
        $this->setFileTmpName();
        $this->setWidthHeightFile();
        return $this;
    }

    public function setFileName() {
        $this->fileName = $this->file['name'];
        return $this;
    }

    public function setFileType() {
        $this->fileType = $this->file['type'];
    }

    public function setFileTmpName() {
        $this->fileTmpName = $this->file['tmp_name'];
    }

    public function setWidthHeightFile() {
        $dimensions = getimagesize($this->fileTmpName);
        $this->fileWidth = $dimensions[0];
        $this->fileHeight = $dimensions[1];
    }

    public function deleteImagem($image) {
        @unlink($this->path . $image);
        return $this;
    }

    public function uploadFile() {
        if ($this->file['size']) {
            $name = $this->fileName;
            $extensao = array_reverse(explode(".", $name));
            $ext = $extensao[0];
            $uniqname = uniqid(rand());
            $name = $uniqname . "_" . "." . $ext;

            move_uploaded_file($this->fileTmpName, $this->path . $name);
            return $name;
        } else {
            return false;
        }
    }

    public function upload($action, $type, $w = null, $h = null) {
        if (!empty($this->fileTmpName) && !empty($this->path)) {
            empty($w) ? $w = $this->fileWidth : $w = $w;
            empty($h) ? $h = $this->fileHeight : $h = $h;
            return $this->geraImagem($w, $h, $action, $type);
        } else {
            return false;
        }
    }

    public function geraImagem($w, $h, $action, $type) {
        $name = $this->fileName;
        $extensao = array_reverse(explode(".", $name));
        $ext = $extensao[0];

        $uniqname = uniqid(rand());
        $name = $uniqname . "_" . $type . "." . $ext;

        $this->resize($w, $h, $action, $this->path . $name);
        return $name;
    }

    public function resize($w, $h, $action, $newfilename, $watermark = false) {
        $img = $this->fileTmpName;
        $int_width = 0;
        $int_height = 0;
        $nWidth = $w;
        $nHeight = $h;
        $imgInfo = getimagesize($img);
        switch ($imgInfo[2]) {
            case 1: $im = imagecreatefromgif($img);
                break;
            case 2: $im = imagecreatefromjpeg($img);
                break;
            case 3: $im = imagecreatefrompng($img);
                break;
            default: trigger_error('Unsupported filetype!', E_USER_WARNING);
                break;
        }

        if ($action == 'resize') {
            $old_width = $imgInfo[0];
            $old_height = $imgInfo[1];
            $scale = min($w / $old_width, $h / $old_height);
            $nWidth = ceil($scale * $old_width);
            $nHeight = ceil($scale * $old_height);
            $w = $nWidth;
            $h = $nHeight;
        }
        if ($action == 'crop') {
            $ow = $imgInfo[0];
            $oh = $imgInfo[1];
            $wm = $ow / $w;
            $hm = $oh / $h;
            $h_height = $h / 2;
            $w_height = $w / 2;
            $ratio = $w / $h;
            $old_img_ratio = $ow / $oh;
            if ($old_img_ratio > $ratio) {
                $nWidth = $ow / $hm;
                $half_width = $nWidth / 2;
                $int_width = $half_width - $w_height;
            } else if ($old_img_ratio <= $ratio) {
                $nHeight = $oh / $wm;
                $half_height = $nHeight / 2;
                $int_height = $half_height - $h_height;
            }
        }

        $newImg = imagecreatetruecolor($w, $h);
        if (($imgInfo[2] == 1) OR ( $imgInfo[2] == 3)) {
            imagealphablending($newImg, false);
            imagesavealpha($newImg, true);
            $transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127);
            imagefilledrectangle($newImg, 0, 0, $nWidth, $nHeight, $transparent);
        }
        imagecopyresampled($newImg, $im, -$int_width, -$int_height, 0, 0, $nWidth, $nHeight, $imgInfo[0], $imgInfo[1]);

        if ($watermark) {
            $watermark = imagecreatefrompng("../../../img/estampa.png");
            $watermark_width = imagesx($watermark);
            $watermark_height = imagesy($watermark);

            $dest_x = ($w - $watermark_width) / 2;
            $dest_y = ($h - $watermark_height) / 2;

            imagecopy($newImg, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height);
        }
        switch ($imgInfo[2]) {
            case 1: imagegif($newImg, $newfilename);
                break;
            case 2: imagejpeg($newImg, $newfilename, 100);
                break;
            case 3: imagepng($newImg, $newfilename);
                break;
            default: trigger_error('Failed resize image!', E_USER_WARNING);
                break;
        }
        return $newfilename;
    }

}
