<?php
//GD.PHP


//dimensoes do captcha

$size_x = 200;
$size_y = 75;

// pega o codigo via URL
if( isset($_GET['code']) ) {
    // limita o tamanho em 8 caracteres
    $code = substr($_GET['code'], 0, 8);

}else{
    $code = 'unknow';
}

// calcula o espaço entre os caracteres
// de acordo com a quantidade de caracteres
$space_per_char = $size_x / (strlen($code) + 1);

/* cria canvas */
$img = imagecreatetruecolor($size_x, $size_y);

/* Aloca cores */
$background = imagecolorallocate($img, 255, 255, 255);
$border = imagecolorallocate($img, 128, 128, 128);
$colors[] = imagecolorallocate($img, 128, 64, 128);
$colors[] = imagecolorallocate($img, 192, 64, 128);
$colors[] = imagecolorallocate($img, 108, 192, 64);

/* Preenche o fundo */
imagefilledrectangle($img, 1, 1, $size_x -2, $size_y -2, $background);
imagerectangle($img, 0, 0, $size_x -1, $size_y -1, $border);

/* desenha o texto */
for( $i=0;$i<strlen($code); $i++)
{
    $color = $colors[$i % count($colors)];
    imagettftext(
            $img,
            28 + rand(0, 8),
            -20 + rand(0, 40),
            ($i + 0.3) * $space_per_char,
            50 + rand(0, 10),
            $color,
            '/home/aluno/php2/aula09/fonte.ttf',
            $code{$i}
            );
}
/* Adicionando algumas distorsoes aleatorias */
for ($i = 0; $i < 1000; $i++)
{
    $x1 = rand(5, $size_x -5);
    $y1 = rand(5, $size_y -05);
    $x2 = $x1 -4 + rand(0, 8);
    $y2 = $y1 -4 + rand(0, 8);
    imageline($img, $x1, $y1, $x2, $y2,
            $colors[ rand( 0, count($colors) -1 ) ]
            );
    
}

/* saida para o navegador */
header('Content-type: image/png');
imagepng($img);