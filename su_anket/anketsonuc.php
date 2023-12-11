<?php
// Veritabanı bağlantısı
$baglanti = mysqli_connect("localhost", "root", "admin123", "anketodev");

// Bağlantı kontrolü
if (!$baglanti) {
    echo ("Bağlantı hatası: " . mysqli_connect_error());
}

$egitim = $_POST["egitim"];
$yas = $_POST["yas"];
$cinsiyet = $_POST["cinsiyet"];
$il = $_POST["il"];
$soru = $_POST["soru"];
$RadioGroup1 = $_POST["RadioGroup1"];
$RadioGroup2 = $_POST["RadioGroup2"];
$RadioGroup3 = $_POST["RadioGroup3"];
$RadioGroup4 = $_POST["RadioGroup4"];
$RadioGroup5 = $_POST["RadioGroup5"];
$RadioGroup6 = $_POST["RadioGroup6"];
$RadioGroup7 = $_POST["RadioGroup7"];
$RadioGroup8 = $_POST["RadioGroup8"];
$RadioGroup9 = $_POST["RadioGroup9"];
$RadioGroup10 = $_POST["RadioGroup10"];
$RadioGroup11 = $_POST["RadioGroup11"];
$RadioGroup12 = $_POST["RadioGroup12"];
$RadioGroup13 = $_POST["RadioGroup13"];
$RadioGroup14 = $_POST["RadioGroup14"];
$RadioGroup15 = $_POST["RadioGroup15"];
$RadioGroup16 = $_POST["RadioGroup16"];
$RadioGroup17 = $_POST["RadioGroup17"];
$RadioGroup18 = $_POST["RadioGroup18"];
$RadioGroup19 = $_POST["RadioGroup19"];
$RadioGroup20 = $_POST["RadioGroup20"];
$RadioGroup21 = $_POST["RadioGroup21"];
$RadioGroup22 = $_POST["RadioGroup22"];
$RadioGroup23 = $_POST["RadioGroup23"];
$CheckboxGroup1 =  $_POST["CheckboxGroup1"];


$CheckboxGroup1String = implode(", ", $CheckboxGroup1);


// Veritabanına ekleme sorgusu
$sorgu = "INSERT INTO anket (egitim, yas, cinsiyet, il, soru,RadioGroup1,RadioGroup2,RadioGroup3,RadioGroup4,RadioGroup5,RadioGroup6,RadioGroup7
,RadioGroup8,RadioGroup9,RadioGroup10,RadioGroup11,RadioGroup12,RadioGroup13,RadioGroup14,RadioGroup15,RadioGroup16,
RadioGroup17,RadioGroup18,RadioGroup19,RadioGroup20,RadioGroup21,RadioGroup22,RadioGroup23,CheckboxGroup1) 
VALUES ('$egitim', '$yas', '$cinsiyet', '$il', '$soru','$RadioGroup1', '$RadioGroup2', '$RadioGroup3', '$RadioGroup4', '$RadioGroup5',
 '$RadioGroup6', '$RadioGroup7', '$RadioGroup8', '$RadioGroup9', '$RadioGroup10', '$RadioGroup11', '$RadioGroup12', '$RadioGroup13',
  '$RadioGroup14', '$RadioGroup15', '$RadioGroup16', 
'$RadioGroup17', '$RadioGroup18', '$RadioGroup19', '$RadioGroup20', '$RadioGroup21', '$RadioGroup22', '$RadioGroup23','$CheckboxGroup1String')";




// Sorguyu çalıştır
if (mysqli_query($baglanti, $sorgu)) {
    echo "Kaydınız başarıyla eklenmiştir.";
} else {
    echo "Kayıt eklenirken hata oluştu: " . mysqli_error($baglanti);
}


mysqli_close($baglanti);