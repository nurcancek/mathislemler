<?php

    echo "sonuç=".(10+5)."<br>";
    echo "sonuç=".(10-5)."<br>";
    echo "sonuç=".(10*5)."<br>";
    echo "sonuç=".(10/5)."<br>";

    $sayi1=10;
    $sayi2=20;
    $sayi3=5;

    echo "sonuç=".(($sayi1+$sayi2)/$sayi3)."<br>";
    echo "sonuç=".($sayi1-$sayi2)."<br>";
    echo "sonuç=".($sayi1*$sayi2)."<br>";
    echo "sonuç=".($sayi1/$sayi2)."<br>";

    echo var_dump(is_int(10))."<br>";
    echo var_dump(is_int(10.2))."<br>";
    echo var_dump(is_int("10"))."<br>";

    echo var_dump(is_float(10))."<br>";
    echo var_dump(is_float(10.2))."<br>";
    echo var_dump(is_float("10"))."<br>";
    
    echo var_dump(is_numeric("10"))."<br>";

    echo abs(-10)."<br>";
    echo ceil(4.3)."<br>"; # yukarı yuvarlama
    echo floor(4.9)."<br>"; # aşağı yuvarlama
    echo round(4.9)."<br>"; # yuvarlama
    echo round(4.4)."<br>"; # yuvarlama

    echo sqrt(25)."<br>";
    echo pow(2,5)."<br>";
    echo max(2,5,10,4,89)."<br>";
    echo min(2,5,10,4,89)."<br>";


?>