<?php
if (isset($_GET['id'])){
    $sql = mysql_query("select nama_produk from produk where id_produk='$_GET[id]'");
    $j   = mysql_fetch_array($sql);
    if ($j) {
        echo "$j[nama_produk]";
    } else
		echo ".::PRo-KDRT Program Penjualan Kebutuhan Dalam Rumah Tangga ::.";
}
else{
		echo ".::PRo-KDRT Program Penjualan Kebutuhan Dalam Rumah Tangga::.";
}

?>
