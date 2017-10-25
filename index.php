<!--
Desenvolvido Por: mLabs
-->
<?php
$url = "https://giphy.com/";
$title = "Meu GIF";

$var = array(
        "1" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/3o6oziEt5VUgsuunxS/giphy.gif"
                  ),
        "2" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/liFaAWEOa1uKc/giphy.gif"
                  ),
        "3" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/3rgXBQIDHkFNniTNRu/giphy.gif"
                  ),
        "4" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/FBzqZGthkW6KQ/giphy.gif"
                  ),
        "5" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/6fScAIQR0P0xW/giphy.gif"
                  ),
        "6" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/xWazTCAcI7m2A/giphy.gif"
                  ),
        "7" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/YbniyzLEgaJGM/giphy.gif"
                  ),
        "8" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/X2UscFgwkKDS/giphy.gif"
                  ),
        "9" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/l41Yy2XyXWlSvupl6/giphy.gif"
                  ),
        "10" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/XwkwBaI8apFew/giphy.gif"
                  ),
        "11" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/OVmZZjfEMFFe0/giphy.gif"
                  ),
        "12" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/zsLloEs8InxD2/giphy.gif"
                  ),
        "13" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/6QWuDqkrCVNBe/giphy.gif"
                  ),
        "14" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/Mh69NgKRcvbpu/giphy.gif"
                  ),
        "15" => array(
                  "titulo" => "Meu GIF",
                  "image" => "https://media.giphy.com/media/NGVKiuxWcBDwc/giphy.gif"
                  ),
        );

$section = array_rand($var);

?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?php echo $var[$section]['titulo']; ?>" />
<meta property="og:url" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:type" content="video.other">

<script>
  setTimeout(function(){
    window.location='https://giphy.com/';
  },100);
</script>
