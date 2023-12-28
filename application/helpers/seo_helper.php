<?php
function seo_karakter($seo) {
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

    $seo = str_replace($d, '', $seo); // Hilangkan karakter yang telah disebutkan di array $d
    
    $seo = strtolower(str_replace($c, '_', $seo)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $seo;
}
?>
