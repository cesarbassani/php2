<?php
# ThumbnailImage.php
class ThumbnailImage {

    private $image;
    private $quality = 100;
    private $mimetype;
    private $imageproperties = array();
    private $initialfilesize;

    public function __construct($file, $thumbnailsize = 100)
    {
        //checa o arquivo
        is_file($file) or die("Arquivo: $file nao existe.");
        $this->initialfilesize = filesize($file);
        $this->imageproperties = getimagesize($file) or die("Tipo de arquivo incorreto.");

        //nova função image_type_to_mime_type
        $this->mimetype = image_type_to_mime_type($this->imageproperties[2]);

        //cria a imagem
        switch($this->imageproperties[2]) {
            case IMAGETYPE_JPGE:
                $this->image = imagecreatefromjpeg($file);
                break;
            case IMAGETYPE_GIF:
                $this->image = imagecreatefromgif($file);
                break;
            case IMAGETYPE_PNG:
                $this->image = imagecreatefrompng($file);
                break;
            default:
                die("Nao foi possivel criar a imagem.");
                break;
        }
        $this->createThumb($thumbnailsize);
    }

    private function createThumb($thumbnailsize)
    {
        // elementos altura e latgura da array
        $srcW = $this->imageproperties[0];
        $scrH = $this->imageproperties[1];

        // somente reduz se a dimensao for maior que a maxima permitida
        if($srcW > $thumbnailsize or $srcH > $thumbnailsize){
            $reduction = $this->calculateReduction($thumbnailsize);

            // pega as proporcoes
            $desW = $srcW/$reduction;
            $desH = $srcH/$reduction;
            $copy = imagecreatetruecolor($desW, $desH);

            imagecopyresampled($copy, $this->image, 0, 0, 0, 0, $desW, $desH, $srcW, $srcH ) or die('A copia da imagem falhou.');

            // spaga o resource da imagem original
            imagedestroy($this->image);
            $this->image = $copy;
        }
    }

    private function calculateReduction($thumbnailsize)
    {
        $srcW = $this->imageproperties[0];
        $srcH = $this->imageproperties[1];

        // adjust
        if($srcW < $srcH) {
            $reduction = round($srcH/$thumbnailsize);
        } else {
            $reduction = round($srcW/$thumbnailsize);
        }

        return $reduction;

    }

    public function getImage()
    {
        header("Content-type: $this->mimetype");

        switch($this->imageproperties[2]);
        {
            case IMAGETYPE_JPGE:
                imagejpge($this->image, "", $this->quality);
                break;
        case IMAGETYPE_GIF:
                imagegif($this->image);
                break;
        case IMAGETYPE_PNG:
                imagepng($this->image, "", $this->quality/100);
                break;
        default:
                die("Nao pude criar a imagem");
                break;

        }
    }

 }
