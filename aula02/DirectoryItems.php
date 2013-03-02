<?php
/* 
 * DirectoryItems
 * 
 */
class DirectoryItems {


    private $fileArray = array();


    public function __construct($directory, $replacechar = "_")
            {
                $this->directory = $directory;
                $this->replaceChar = $replacechar;

                $d = "";
                if( is_dir($directory) )
                {
                    $d = opendir($directory) or
                        die ("Não pude abrir o diretorio.");

                while( false !== ($f = readdir($d)) )
                {
                    if(is_file("$directory/$f"))
                    {
                        $title=$this->createTitle($f);
                        $this->fileArray[$f] = $title;
                    }
                }
                closedir($d);
                }
                else
                {
                    //error
                    die("Deve-se informar um diretorio");
                }
            }

            private function createTitle($file)
            {
                //retira a extensão
                $title = substr($file, 0, strrpos($file, '.'));

                //substitui o separador
                $title = str_replace($this->replaceChar, ' ',$title);

                return $title;

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

        public function filter() {

            $types = array('jpg','jpeg','gif','png');

            foreach($this->fileArray as $key => $value)
            {
                $extension = substr( $key,( strrpos($key, '.') + 1 ) );
                $extension = strtolower($extension);
                if(!in_array($extension, $types) ){
                    unset($this->fileArray[$key]);
                }
            }
       }

        
}