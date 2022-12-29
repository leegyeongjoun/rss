<?php
    $ch=curl_init();//curl을 사용하기위해 초기화
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//인증서 검사여부 안함
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//결과값을 받기위해
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_URL, "https://www.chosun.com/arc/outboundfeeds/rss/category/sports/?outputType=xml");
    $url_source=curl_exec($ch);//실행하기
    curl_close($ch);//실행한거 닫기

    // 화면에 뿌리는것 echo
    echo $url_source;
?>