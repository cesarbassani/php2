<?php
/* 
 * DirectoryItems
 * 
 */
class DirectoryItems {


    private $fileArray = array();

    function __construct($directory) { $d = "";
        if(is_dir($directory)){
            $d = opendir($directory) or
                die ("Não pude abrir o diretório.");

            while( false !== ( $f = readdir($d)) ){
                if( is_file("$directory/$f") ) {
                    $this->fileArray[] = $f;

                }
            }
            closedir($d);
        }
        else
            {
            //error
            die("Deve-se informar um diretório");
            }
        }

        public function getFileArray()
        {
            return $this->fileArray;
        }

        function indexOrder(){
            sort($this->fileArray);
        }

        function naturalCaseInsensitiveOrder(){
            natcasesort($this->fileArray);
        }

        function getCount(){
            return count($this->fileArray);
        }

        function checkAllImages(){
            $bln = true;
            $extension = "";
            $types = array('jpg','jpeg','gif','png');
            foreach($this->fileArray as $key => $value){
                $extension = substr( $value,( strrpos($value, '.') + 1 ) );
                $extension = strtolower($extension);
                if(!in_array($extension, $types) ){
                    $bln = false;
                    break;
                }
            }
            return $bln;


                }

        
}