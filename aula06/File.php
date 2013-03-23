<?php

class EFileNotFound extends Exception{};
class EFileEmpty extends Exception{};
class EFileNotInformed extends Exception{};

class File {
    protected $file_name;
    private $flag;

    function  __construct($name) {
        $this->flag = False;
        $this->setFile($name);
    }

    public function  setFile($name) {
        if (file_exists($name)){
            $this->file_name = $name;
            $this->flag = TRUE;
        } else {

            throw new EFileNotFound("Arquivo informado não existe", 4);

        }
    }

    public function showFile(){
        if ($this->flag === False) {

            throw new EFileNotInformed("Arquivo não informado", 10);

        } elseif (file_exists($this->file_name)) {
            if (filesize($this->file_name) == 0) {

                throw new EFileEmpty("Arquivo vazio", 20);

            }
            echo "<pre>";
            echo htmlentities(file_get_contents($this->file_name));
            echo "</pre>";
        }
        else {

            throw new EFileNotFound("Arquivo informado não existe", 40);

            }
        }
    }


?>
