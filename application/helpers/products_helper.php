<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

function get_jumlah_produk($id){
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => API_URL.'api/get_count_product_types',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('id' => $id),
    CURLOPT_HTTPHEADER => array(
      'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
      'Cookie: ci_session=ckkcs2h659i9jdfsght02pqb5pumhj6t'
    ),
  ));

  $response = curl_exec($curl);
  curl_close($curl);

  return $response;
}