<?php

    $data1 = array('a', 'b', 'c', 'd', 'e');
    // tampilkan d?
    echo $data1[3];

    $data2 = array('nama' => 'tasya', 'alamat' => 'semarang', 'tinggal' => 'jogja');
    // tampilkan tinggal?
    echo $data2['tinggal'];
    

    echo "<br><br><br><br><br>";

    $data3 = array(
        array('nama' => 'tasya', 'alamat' => 'semarang', 'tinggal' => 'jogja'),
        array('nama' => 'tasya2', 'alamat' => 'semarang2', 'tinggal' => 'jogja2'),
        array('nama' => 'tasya3', 'alamat' => 'semarang3', 'tinggal' => 'jogja3')
    );
    // tampikan nama: tasya2, alamat: semarang3, tinggal: jogja?
    echo $data3[1]['nama'];
    echo $data3[2]['alamat'];
    echo $data3[0]['tinggal'];
    // print_r($data3[1]);

?>