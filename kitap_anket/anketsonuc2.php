<?php
// Veritabanı bağlantısı
$baglanti = mysqli_connect("localhost", "root", "admin123", "anketodev2");

// Bağlantı kontrolü
if (!$baglanti) {
    echo ("Bağlantı hatası: " . mysqli_connect_error());
}


$egitim = $_POST["egitim"];
$yas = $_POST["yas"];
$cinsiyet = $_POST["cinsiyet"];
$soru = $_POST["soru"];
$RadioGroup1 = $_POST["RadioGroup1"];
$CheckboxGroup1 = $_POST["CheckboxGroup1"];
$RadioGroup3 = $_POST["RadioGroup3"];
$RadioGroup4 = $_POST["RadioGroup4"];
$RadioGroup5 = $_POST["RadioGroup5"];
$RadioGroup6 = $_POST["RadioGroup6"];
$CheckboxGroup7 = $_POST["CheckboxGroup7"];
$RadioGroup8 = $_POST["RadioGroup8"];
$CheckboxGroup5 = $_POST["CheckboxGroup5"];
$RadioGroup10 = $_POST["RadioGroup10"];
$CheckboxGroup2 = $_POST["CheckboxGroup2"];
$CheckboxGroup3 = $_POST["CheckboxGroup3"];
$RadioGroup13 = $_POST["RadioGroup13"];
$CheckboxGroup4 = $_POST["CheckboxGroup4"];
$RadioGroup15 = $_POST["RadioGroup15"];
$RadioGroup16 = $_POST["RadioGroup16"];
$RadioGroup17 = $_POST["RadioGroup17"];
$RadioGroup18 = $_POST["RadioGroup18"];
$RadioGroup19 = $_POST["RadioGroup19"];
$RadioGroup20 = $_POST["RadioGroup20"];
$CheckboxGroup21 = $_POST["CheckboxGroup21"];


$CheckboxGroup1String = implode(", ", $CheckboxGroup1);
$CheckboxGroup7String = implode(", ", $CheckboxGroup7);
$CheckboxGroup2String = implode(", ", $CheckboxGroup2);
$CheckboxGroup3String = implode(", ", $CheckboxGroup3);
$CheckboxGroup4String = implode(", ", $CheckboxGroup4);
$CheckboxGroup5String = implode(", ", $CheckboxGroup5);
$CheckboxGroup21String = implode(", ", $CheckboxGroup21);



// Veritabanına ekleme sorgusu
$sorgu = "INSERT INTO anket2 (egitim, yas, cinsiyet,  soru,RadioGroup1,CheckboxGroup1,RadioGroup3,RadioGroup4,RadioGroup5,RadioGroup6, CheckboxGroup7
,RadioGroup8,CheckboxGroup5,RadioGroup10, CheckboxGroup2,CheckboxGroup3,RadioGroup13,CheckboxGroup4,RadioGroup15,RadioGroup16,
RadioGroup17,RadioGroup18,RadioGroup19,RadioGroup20,CheckboxGroup21) 
VALUES ('$egitim', '$yas', '$cinsiyet','$soru','$RadioGroup1', '$CheckboxGroup1String', '$RadioGroup3', '$RadioGroup4', '$RadioGroup5',
 '$RadioGroup6', '$CheckboxGroup7String', '$RadioGroup8', '$CheckboxGroup5String', '$RadioGroup10', '$CheckboxGroup2String', '$CheckboxGroup3String', '$RadioGroup13',
  '$CheckboxGroup4String', '$RadioGroup15', '$RadioGroup16', 
'$RadioGroup17', '$RadioGroup18', '$RadioGroup19', '$RadioGroup20','$CheckboxGroup21String')";





// Sorguyu çalıştır
if (mysqli_query($baglanti, $sorgu)) {
    echo "Kaydınız başarıyla eklenmiştir.";
} else {
    echo "Kayıt eklenirken hata oluştu: " . mysqli_error($baglanti);
}


mysqli_close($baglanti);