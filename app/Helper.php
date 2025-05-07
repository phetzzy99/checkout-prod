<?php

function formatDateThai($strDate){
    $strYear = date("Y",strtotime($strDate)+543);
    $strMonth = date("n",strtotime($strDate));
    $strDay = date("j",strtotime($strDate));
    $strHour = date("H",strtotime($strDate));
    $strMinute = date("i",strtotime($strDate));
    $strSeconds = date("s",strtotime($strDate));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];

    return "$strDay $strMonthThai $strYear $strHour:$strMinute";
}


function Linenotify($message){

    // AIS
    // 'Authorization: Bearer Zsp78r1K957ZqEUdXIVtllylWn92q7S0WMAJ0Suwb9l'
    
    // Original
    // 'Authorization: Bearer hUSIZSyLQJKJAtIZL0RvglqzN7770QQsuSAUw6fw0Kc'

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://notify-api.line.me/api/notify',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'message='.$message,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer hUSIZSyLQJKJAtIZL0RvglqzN7770QQsuSAUw6fw0Kc',
            'Content-Type: application/x-www-form-urlencoded'
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
    
}
