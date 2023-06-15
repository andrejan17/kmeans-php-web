<?php
//hitung Euclidean Distance Space
function jarakEuclidean($data=array(),$centroid=array()){
    return sqrt(pow(($data[0]-$centroid[0]),2) + pow(($data[1]-$centroid[1]),2));
}

function jarakTerdekat($jarak_ke_centroid=array(),$centroid){
    foreach ($jarak_ke_centroid as $key => $value) {
        if(!isset($minimum)){
            $minimum=$value;
            $cluster=($key+1);
            continue;
        }
        else if($value<$minimum){
            $minimum=$value;
            $cluster=($key+1);
            
        }
    }
    return array(
        'cluster'=>$cluster,
        'value'=>$minimum,
    );
}

function perbaruiCentroid($table_iterasi,&$hasil_cluster){
    $hasil_cluster=[];
    //looping untuk mengelompokan x dan y sesuai cluster
    foreach ($table_iterasi as $key => $value) {
        $hasil_cluster[($value['jarak_terdekat']['cluster']-1)][0][]= $value['data'][0];//data x
        $hasil_cluster[($value['jarak_terdekat']['cluster']-1)][1][]= $value['data'][1];//data y
        //echo '<pre>'; print_r($value);
    }
    $new_centroid=[];
    //looping untuk mencari nilai centroid baru dengan cara mencari rata2 dari masing2 data(0=x dan 1=y) 
    foreach ($hasil_cluster as $key => $value) {
        $new_centroid[$key]= [
            array_sum($value[0])/count($value[0]),
            array_sum($value[1])/count($value[1])
        ]; 
        //echo '<pre>'; print_r($hasil_cluster);
    }
    //sorting berdasarkan cluster
    ksort($new_centroid);
    return $new_centroid;
}

function centroidBerubah($centroid,$iterasi){
    $centroid_lama = flatten_array($centroid[($iterasi-1)]); //flattern array
    $centroid_baru = flatten_array($centroid[$iterasi]); //flatten array
    //hitbandingkan centroid yang lama dan baru jika berubah return true, jika tidak berubah/jumlah sama=0 return false
    $jumlah_sama=0;
    for($i=0;$i<count($centroid_lama);$i++){
        if($centroid_lama[$i]===$centroid_baru[$i]){
            $jumlah_sama++;
        }
    }
    return $jumlah_sama===count($centroid_lama) ? false : true; 
}

function flatten_array($arg) {
  return is_array($arg) ? array_reduce($arg, function ($c, $a) { return array_merge($c, flatten_array($a)); },[]) : [$arg];
}

?>