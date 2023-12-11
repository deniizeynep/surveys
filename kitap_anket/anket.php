<!doctype html>
<html>
<head>
	
<meta charset="utf-8">
	
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
 

<title>Kitap Anketi</title>
	<style>
	
	.submit-button {
            padding: 10px 20px;
		        margin-top: 25px; 
            font-size: 18px;
            background-color: #8B4513;
            color: #fff;
            border: none;
            cursor: pointer; 
            border-radius: 35px;
            transition: background-color 0.3s, transform 0.3s;
            margin-right: 4px;
		      
        }

        .submit-button:hover {
            background-color: #D2691E;
            transform: scale(1.1);
			
        }

        .button-container {
            display: flex;
            justify-content: center; 
            align-items: center; }

        .button-icon {
            margin-right: 10px;
        }
		
		.header {
      border: 2px solid;
      padding: 10px;
      text-align: left;
      border-radius: 10px 10px 5px 5px;
    }

    .header p {
      margin: 0;    
    }

    .header .right {
      float: right;
      margin-top: -20px;
    }

    .header .right {
      float: right;
      margin-top: -20px;
    }
    
    .table{
border-width: 2px; 
border-style: solid; 
border-radius: 10px; 
padding: 10px; 
width: 50%; 
background-image: url('arkaresimm.jpg'); 
border: 1px solid;
padding: 10px;
box-shadow: 5px 10px #888888;
    position: relative;
    margin: auto;
    margin-top: 20px;
    margin-bottom: 20px;

    }

     .title {
      border: 2px solid;
      text-align: center;
      font-size: 25px;
      padding: 20px;
      border-radius: 5px 5px 10px 10px;
    }

    .note {
      text-align: center; 
      font-size: 19px;
      padding: 5px;
      font-style: italic;
    }

    .question {
      font-weight: bold;
      font-size: 18px;
    }
      
    .back{
      background-image: url('arkaresimm.jpg'); 
      border-radius: 10px;
    }
    .reset-button {
      padding: 10px 30px;
      font-size: 18px;
      background-color: #8B4513;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 35px;
      transition: background-color 0.3s, transform 0.3s;
      margin-top: 25px; 
      margin-left: 4px;
    }
    .reset-button:hover {
      background-color: 	#D2691E;
      transform: scale(1.1);
    }
    .reset-button i {
      margin-right: 5px; }
  
		
	</style>

</head>

<body   style="background-color: #F5DEB3;
background-image: url('resim111.jpg'); "     >
		
	<div class="back">
	   <div class="header">
        <p>221250057 &nbsp &nbsp Fatma Sena Balkuv</p>
        <p class="right"><?php $tarih = date("d.m.Y");
                    echo($tarih);?></p>
        <p>221250015 &nbsp &nbsp Zeynep Deniz</p>
        <p>221250029 &nbsp &nbsp Berna Kaya</p>
        <p class="right">Afyon Kocatepe Üniversitesi</p>
        <p style="margin-top: 10px;">Bilgisayar Programcılığı NÖ2</p>
        <p class="right">Afyon Meslek Yüksekokulu</p>
    </div>

    <div class="title">
        Kitap Okuma Alışkanlıkları Ve Tercihleri Anketi
        <div class="note">
           NOT: Bu anket araştırma ve teknikleri kapsamında ödev olarak hazırlanmıştır.
           </div>
           </div>
          </div>


<div class="table">
  
<form action="anketsonuc2.php" method="post">

<p class="question">1- Eğitim durumunuz</p>
<label for="egitim_1"><input type="radio" name="egitim" value="İlköğretim" id="egitim_1"> İlköğretim</label><br>
<label for="egitim_2"><input type="radio" name="egitim" value="Ortaöğretim" id="egitim_2"> Ortaöğretim</label><br>
<label for="egitim_3"><input type="radio" name="egitim" value="Lisans" id="egitim_3"> Lisans</label><br>
<label for="egitim_4"><input type="radio" name="egitim" value="Önlisans" id="egitim_4"> Önlisans</label><br>

<p class="question">2- Yaş aralığınız</p>
<label for="yas_1"><input type="radio" name="yas" value="14-17" id="yas_1"> 14-17</label><br>
<label for="yas_2"><input type ="radio" name="yas" value="18-23" id="yas_2"> 18-23</label><br>
<label for="yas_3"><input type="radio" name="yas" value="24-30" id="yas_3"> 24-30</label><br>
<label for="yas_4"><input type="radio" name="yas" value="31+" id="yas_4"> 31+</label><br>

<p class="question">3- Cinsiyetiniz</p>
<label for="cinsiyet_1"><input type="radio" name="cinsiyet" value="Bay" id="cinsiyet_1"> Bay</label><br>
<label for="cinsiyet_2"><input type="radio" name="cinsiyet" value="Bayan" id="cinsiyet_2"> Bayan</label><br>
<label for="cinsiyet_3"><input type="radio" name="cinsiyet" value="Belirtmek istemiyorum" id="cinsiyet_3"> Belirtmek İstemiyorum</label><br>

<p class="question">4- Kitap okuma alışkanlığınız var mı?</p>
<label for="soru_1"><input type="radio" name="soru" value="Evet" id="soru_1"> Evet</label><br>
<label for="soru_2"><input type="radio" name="soru" value="Hayır" id="soru_2"> Hayır</label><br>

<p class="question">5- Hangi sıklıkla kitap okursunuz?</p>
<label for="RadioGroup1_0"><input type="radio" name="RadioGroup1" value="Hergün" id="RadioGroup1_0"> Her gün</label><br>
<label for="RadioGroup1_1"><input type="radio" name="RadioGroup1" value="Haftada birkaç kez" id="RadioGroup1_1"> Haftada birkaç kez</label><br>
<label for="RadioGroup1_2"><input type="radio" name="RadioGroup1" value="Haftada bir kez" id="RadioGroup1_2"> Haftada bir kez</label><br>
<label for="RadioGroup1_3"><input type="radio" name="RadioGroup1" value="Nadiren" id="RadioGroup1_3"> Nadiren</label><br>
<label for="RadioGroup1_4"><input type="radio" name="RadioGroup1" value="Hiç okumam" id="RadioGroup1_4"> Hiç okumam</label><br>

<p class="question">6- Hangi türde kitapları tercih edersiniz?</p>
<label for="CheckboxGroup1_0"><input type="checkbox" name="CheckboxGroup1[]" value="Roman" id="CheckboxGroup1_0"> Roman</label><br>
<label for="CheckboxGroup1_1"><input type="checkbox" name="CheckboxGroup1[]" value="Klasik" id="CheckboxGroup1_1"> Klasik</label><br>
<label for="CheckboxGroup1_2"><input type="checkbox" name="CheckboxGroup1[]" value="Polisiye/Gerilim" id="CheckboxGroup1_2"> Polisiye/Gerilim</label><br>
<label for="CheckboxGroup1_3"><input type="checkbox" name="CheckboxGroup1[]" value="Bilim Kurgu" id="CheckboxGroup1_3"> Bilim Kurgu</label><br>
<label for="CheckboxGroup1_4"><input type="checkbox" name="CheckboxGroup1[]" value="Fantastik" id="CheckboxGroup1_4"> Fantastik</label><br>
<label for="CheckboxGroup1_5"><input type="checkbox" name="CheckboxGroup1[]" value="Korku" id="CheckboxGroup1_5"> Korku</label><br>
<label for="CheckboxGroup1_6"><input type="checkbox" name="CheckboxGroup1[]" value="Biyografi/Otobiyografi" id="CheckboxGroup1_6"> Biyografi/Otobiyografi</label><br>
<label for="CheckboxGroup1_7"><input type="checkbox" name="CheckboxGroup1[]" value="Tarih" id="CheckboxGroup1_7"> Tarih</label><br>
<label for="CheckboxGroup1_8"><input type="checkbox" name="CheckboxGroup1[]" value="Bilim" id="CheckboxGroup1_8"> Bilim</label><br>
<label for="CheckboxGroup1_9"><input type="checkbox" name="CheckboxGroup1[]" value="Felsefe" id="CheckboxGroup1_9"> Felsefe</label><br>
<label for="CheckboxGroup1_10"><input type="checkbox" name="CheckboxGroup1[]" value="Şiir" id="CheckboxGroup1_10"> Şiir</label><br>
<label for="CheckboxGroup1_11"><input type="checkbox" name="CheckboxGroup1[]" value="Genç Yetişkin" id="CheckboxGroup1_11"> Genç Yetişkin</label><br>

																
<p class="question">7- Kitap okurken hangi türde kitap işaretleyicileri veya notlar kullanırsınız?</p>
<label for="RadioGroup3_0"><input type="radio" name="RadioGroup3" value="Önemli yerleri post-it ile işaretlerim" id="RadioGroup3_0"> Önemli yerleri post-it ile işaretlerim</label><br>
<label for="RadioGroup3_1"><input type="radio" name="RadioGroup3" value="Kitabın boş alanlarına notlar alırım" id="RadioGroup3_1"> Kitabın boş alanlarına notlar alırım</label><br>
<label for="RadioGroup3_1"><input type="radio" name="RadioGroup3" value="Altını çizerim" id="RadioGroup3_2"> Altını çizerim</label><br>
<label for="RadioGroup3_2"><input type="radio" name="RadioGroup3" value="Kullanmam" id="RadioGroup3_3"> Kullanmam</label><br>

<p class="question">8- Favori kitap okuma mekanınız neresidir?</p>
<label for="RadioGroup4_0"><input type="radio" name="RadioGroup4" value="Evim" id="RadioGroup4_0"> Evim</label><br>
<label for="RadioGroup4_2"><input type="radio" name="RadioGroup4" value="Kütüphane" id="RadioGroup4_1"> Kütüphane</label><br>
<label for="RadioGroup4_1"><input type="radio" name="RadioGroup4" value="Kitap Kafe tarzı yerler" id="RadioGroup4_2"> Kitap Kafe tarzı yerler</label><br>
<label for="RadioGroup4_1"><input type="radio" name="RadioGroup4" value="Kitap Kafe tarzı yerler" id="RadioGroup4_3"> Açık alanlar (Park, sahil kenarı vs.)</label><br>
<label for="RadioGroup4_3"><input type="radio" name="RadioGroup4" value="Favori mekanım yok" id="RadioGroup4_4"> Favori mekanım yok</label><br>

<p class="question">9- En son bitirdiğiniz kitabı veya şu an okuduğunuz kitabı önerir misiniz?</p>
<label for="RadioGroup5_0"><input type="radio" name="RadioGroup5" value="Kesinlikle öneririm" id="RadioGroup5_0"> Kesinlikle öneririm</label><br>
<label for="RadioGroup5_1"><input type="radio" name="RadioGroup5" value="Öneririm" id="RadioGroup5_1"> Öneririm</label><br>
<label for="RadioGroup5_2"><input type="radio" name="RadioGroup5" value="Kararsızım" id="RadioGroup5_2"> Kararsızım</label><br>
<label for="RadioGroup5_3"><input type="radio" name="RadioGroup5" value="Önermem" id="RadioGroup5_3"> Önermem</label><br>
<label for="RadioGroup5_4"><input type="radio" name="RadioGroup5" value="Kesinlikle önermem" id="RadioGroup5_4"> Kesinlikle önermem</label><br>

<p class="question">10- Bir kitabı en fazla ne kadar okudunuz?</p>
<label for="RadioGroup6_0"><input type="radio" name="RadioGroup6" value="1 kere" id="RadioGroup6_0"> 1 kere</label><br>
<label for="RadioGroup6_1"><input type="radio" name="RadioGroup6" value="2 kere" id="RadioGroup6_1"> 2 kere</label><br>
<label for="RadioGroup6_2"><input type="radio" name="RadioGroup6" value="3 kere" id="RadioGroup6_2"> 3 kere</label><br>
<label for="RadioGroup6_3"><input type="radio" name="RadioGroup6" value="4 kere ve daha fazlası" id="RadioGroup6_3"> 4 kere ve daha fazlası</label><br>

<p class="question">11- Hangisini tercih edersiniz?</p>
<label for="CheckboxGroup7_0"><input type="checkbox" name="CheckboxGroup7[]" value="Satın alırım" id="CheckboxGroup7_0"> Satın alırım</label><br>
<label for="CheckboxGroup7_1"><input type="checkbox" name="CheckboxGroup7[]" value="Arkadaşımdan ödünç alırım" id="CheckboxGroup7_1"> Arkadaşımdan ödünç alırım</label><br>
<label for="CheckboxGroup7_2"><input type="checkbox" name="CheckboxGroup7[]" value="Kütüphaneden ödünç alırım" id="CheckboxGroup7_2"> Kütüphaneden ödünç alırım</label><br>
<label for="CheckboxGroup7_3"><input type="checkbox" name="CheckboxGroup7[]" value="İkinci el almayı tercih ederim" id="CheckboxGroup7_3"> İkinci el almayı tercih ederim</label><br>

<p class="question">12- En son ne zaman kitap okudunuz?</p>
<label for="RadioGroup8_0"><input type="radio" name="RadioGroup8" value="0-7 gün içerisinde" id="RadioGroup8_0"> 0-7 gün içerisinde</label><br>
<label for="RadioGroup8_1"><input type="radio" name="RadioGroup8" value="1 ay içerisinde" id="RadioGroup8_1"> 1 ay içerisinde</label><br>
<label for="RadioGroup8_2"><input type="radio" name="RadioGroup8" value="3-4 ay içerisinde" id="RadioGroup8_2"> 2-4 ay içerisinde</label><br>
<label for="RadioGroup8_3"><input type="radio" name="RadioGroup8" value="1 yıl içerisinde" id="RadioGroup8_3"> 1 yıl içerisinde</label><br>
<label for="RadioGroup8_4"><input type="radio" name="RadioGroup8" value="Hatırlamıyorum" id="RadioGroup8_4"> Hatırlamıyorum</label><br>

      
<p class="question">13- Kitapları en çok hangi formatta tercih edersiniz?</p>
<label for="CheckboxGroup5_0"><input type="checkbox" name="CheckboxGroup5[]" value="Basılı kitaplar" id="CheckboxGroup5_0"> Basılı kitaplar</label><br>
<label for="CheckboxGroup5_1"><input type="checkbox" name="CheckboxGroup5[]" value="E-kitaplar" id="CheckboxGroup5_1"> E-kitaplar</label><br>
<label for="CheckboxGroup5_2"><input type="checkbox" name="CheckboxGroup5[]" value="Sesli kitaplar" id="CheckboxGroup5_2"> Sesli kitaplar</label><br>
<label for="CheckboxGroup5_3"><input type="checkbox" name="CheckboxGroup5[]" value="İkinci el kitaplar" id="CheckboxGroup5_3"> İkinci el kitaplar</label><br>

<p class="question">14- En son ne zaman kitap aldınız?</p>
<label for="RadioGroup10_0"><input type="radio" name="RadioGroup10" value="1 ay içerisinde" id="RadioGroup10_0"> 1 ay içerisinde</label><br>
<label for="RadioGroup10_0"><input type="radio" name="RadioGroup10" value="1 ay içerisinde" id="RadioGroup10_1"> 2-5 ay içerisinde</label><br>
<label for="RadioGroup10_1"><input type="radio" name="RadioGroup10" value="6-12 ay arasında" id="RadioGroup10_2"> 6-12 ay arasında</label><br>
<label for="RadioGroup10_2"><input type="radio" name="RadioGroup10" value="1-2 yıl önce" id="RadioGroup10_3"> 1-2 yıl önce</label><br>
<label for="RadioGroup10_3"><input type="radio" name="RadioGroup10" value="Hiç almadım" id="RadioGroup10_4"> Hiç almadım</label><br>

<p class="question">15- Okuduğunuz kitapların seçiminde etkili olan nedir?</p>
<label for="CheckboxGroup2_0"><input type="checkbox" name="CheckboxGroup2[]" value="Kitap kapak tasarımı" id="CheckboxGroup2_0"> Kitap kapak tasarımı</label><br>
<label for="CheckboxGroup2_1"><input type="checkbox" name="CheckboxGroup2[]" value="Birinin tavsiyesi" id="CheckboxGroup2_1"> Birinin tavsiyesi</label><br>
<label for="CheckboxGroup2_2"><input type="checkbox" name="CheckboxGroup2[]" value="Eleştirmen incelemeleri" id="CheckboxGroup2_2"> Eleştirmen incelemeleri</label><br>
<label for="CheckboxGroup2_3"><input type="checkbox" name="CheckboxGroup2[]" value="Yazarın önceki eserleri" id="CheckboxGroup2_3"> Yazarın önceki eserleri</label><br>
<label for="CheckboxGroup2_4"><input type="checkbox" name="CheckboxGroup2[]" value="Kitabın popülaritesi" id="CheckboxGroup2_4"> Kitabın popülaritesi</label><br>
<label for="CheckboxGroup2_4"><input type="checkbox" name="CheckboxGroup2[]" value="Kitabın popülaritesi" id="CheckboxGroup2_5"> Kitabın türü</label><br>
<label for="CheckboxGroup2_5"><input type="checkbox" name="CheckboxGroup2[]" value="Kitabın özeti veya konusu" id="CheckboxGroup2_6"> Kitabın özeti veya konusu</label><br>
<label for="CheckboxGroup2_6"><input type="checkbox" name="CheckboxGroup2[]" value="Yazarın düşünce tarzı veya temaları" id="CheckboxGroup2_7"> Yazarın düşünce tarzı veya temaları</label><br>

<p class="question">16- Kitap okumak insanlara ne kazandırabilir?</p>
<label for="CheckboxGroup3_0"><input type="checkbox" name="CheckboxGroup3[]" value="Bilgi birikimini artırabilir" id="CheckboxGroup3_0"> Bilgi birikimini artırabilir</label><br>
<label for="CheckboxGroup3_1"><input type="checkbox" name="CheckboxGroup3[]" value="Hayal dünyasını zenginleştirebilir" id="CheckboxGroup3_1"> Hayal dünyasını zenginleştirebilir</label><br>
<label for="CheckboxGroup3_2"><input type="checkbox" name="CheckboxGroup3[]" value="Dil becerilerini geliştirebilir" id="CheckboxGroup3_2"> Dil becerilerini geliştirebilir</label><br>
<label for="CheckboxGroup3_3"><input type="checkbox" name="CheckboxGroup3[]" value="Daha geniş bir kelime dağarcığına sahip olur" id="CheckboxGroup3_3"> Daha geniş bir kelime dağarcığına sahip olur</label><br>
<label for="CheckboxGroup3_4"><input type="checkbox" name="CheckboxGroup3[]" value="Daha iyi konsantrasyon ve odaklanma becerisine sahip olur" id="CheckboxGroup3_4"> Daha iyi konsantrasyon ve odaklanma becerisine sahip olur</label><br>

<p class="question">17- Kitap fiyatları, sinema, tiyatro gibi diğer eğlence veya etkinliklere göre sizce ne kadar maliyetli veya maliyetsiz?</p>
<label for="RadioGroup13_0"><input type="radio" name="RadioGroup13" value="Daha pahalı" id="RadioGroup13_0"> Daha pahalı</label><br>
<label for="RadioGroup13_1"><input type="radio" name="RadioGroup13" value="Daha ucuz" id="RadioGroup13_1"> Daha ucuz</label><br>
<label for="RadioGroup13_2"><input type="radio" name="RadioGroup13" value="Benzer fiyatlar" id="RadioGroup13_2"> Benzer fiyatlar</label><br>
<label for="RadioGroup13_3"><input type="radio" name="RadioGroup13" value="Kararsızım" id="RadioGroup13_3"> Kararsızım</label><br>

      
<p class="question">18- Kitap okumanıza engel olan şeyler nelerdir?</p>
<label for="CheckboxGroup4_0"><input type="checkbox" name="CheckboxGroup4[]" value="Dikkat dağıtıcı faktörler" id="CheckboxGroup4_0"> Dikkat dağıtıcı faktörler</label><br>
<label for="CheckboxGroup4_1"><input type="checkbox" name="CheckboxGroup4[]" value="İş veya okul gereksinimleri" id="CheckboxGroup4_1"> İş veya okul gereksinimleri</label><br>
<label for="CheckboxGroup4_2"><input type="checkbox" name="CheckboxGroup4[]" value="Sosyal yaşantı" id="CheckboxGroup4_2"> Sosyal yaşantı</label><br>
<label for="CheckboxGroup4_3"><input type="checkbox" name="CheckboxGroup4[]" value="Yorgunluk veya uyku eksikliği" id="CheckboxGroup4_3"> Yorgunluk veya uyku eksikliği</label><br>
<label for="CheckboxGroup4_4"><input type="checkbox" name="CheckboxGroup4[]" value="Okuma motivasyon eksikliği" id="CheckboxGroup4_4"> Okuma motivasyon eksikliği</label><br>
<label for="CheckboxGroup4_5"><input type="checkbox" name="CheckboxGroup4[]" value="Kitap seçimi konusunda kararsız kalma" id="CheckboxGroup4_5"> Kitap seçimi konusunda kararsız kalma</label><br>

<p class="question">19- Kitap okurken müzik dinler misiniz?</p>
<label for="RadioGroup15_0"><input type="radio" name="RadioGroup15" value="Evet, genelde dinlerim" id="RadioGroup15_0"> Evet, dinlerim</label><br>
<label for="RadioGroup15_1"><input type="radio" name="RadioGroup15" value="Sadece klasik müzik dinlerim" id="RadioGroup15_1"> Sadece klasik müzik dinlerim</label><br>
<label for="RadioGroup15_2"><input type="radio" name="RadioGroup15" value="Hayır, kitap okurken sessizliği tercih ederim" id="RadioGroup15_2"> Hayır, kitap okurken sessizliği tercih ederim</label><br>

<p class="question">20- Kitap okumanın öneminin yeterince kavranmadığını düşünüyorum.</p>
<label for="RadioGroup16_0"><input type="radio" name="RadioGroup16" value="Kesinlikle katılıyorum" id="RadioGroup16_0"> Kesinlikle katılıyorum</label><br>
<label for="RadioGroup16_1"><input type="radio" name="RadioGroup16" value="Katılıyorum" id="RadioGroup16_1"> Katılıyorum</label><br>
<label for="RadioGroup16_2"><input type="radio" name="RadioGroup16" value="Kararsızım" id="RadioGroup16_2"> Kararsızım</label><br>
<label for="RadioGroup16_3"><input type="radio" name="RadioGroup16" value="Katılmıyorum" id="RadioGroup16_3"> Katılmıyorum</label><br>
<label for="RadioGroup16_4"><input type="radio" name="RadioGroup16" value="Kesinlikle katılmıyorum" id="RadioGroup16_4"> Kesinlikle katılmıyorum</label><br>

<p class="question">21- Toplumda başarısı ile tanınan insanların geçmişte ve şimdi çok kitap okuduklarına inanıyorum.</p>
<label for="RadioGroup17_0"><input type="radio" name="RadioGroup17" value="Kesinlikle katılıyorum" id="RadioGroup17_0"> Kesinlikle katılıyorum</label><br>
<label for="RadioGroup17_1"><input type="radio" name="RadioGroup17" value="Katılıyorum" id="RadioGroup17_1"> Katılıyorum</label><br>
<label for="RadioGroup17_2"><input type="radio" name="RadioGroup17" value="Kararsızım" id="RadioGroup17_2"> Kararsızım</label><br>
<label for="RadioGroup17_3"><input type="radio" name="RadioGroup17" value="Katılmıyorum" id="RadioGroup17_3"> Katılmıyorum</label><br>
<label for="RadioGroup17_4"><input type="radio" name="RadioGroup17" value="Kesinlikle katılmıyorum" id="RadioGroup17_4"> Kesinlikle katılmıyorum</label><br>

<p class="question">22- Hangisini tercih edersiniz?</p>
<label for="RadioGroup18_0"><input type="radio" name="RadioGroup18" value="Yerli yazarları daha çok tercih ederim" id="RadioGroup18_0"> Yerli yazarları tercih ederim</label><br>
<label for="RadioGroup18_1"><input type="radio" name="RadioGroup18" value="Yabancı yazarları daha çok tercih ederim" id="RadioGroup18_1"> Yabancı yazarları tercih ederim</label><br>
<label for="RadioGroup18_2"><input type="radio" name="RadioGroup18" value="İkisini de tercih ederim" id="RadioGroup18_2"> İkisini de tercih ederim</label><br>
<label for="RadioGroup18_2"><input type="radio" name="RadioGroup18" value="İkisini de tercih ederim" id="RadioGroup18_2"> İkisini de tercih etmem</label><br>

      
<p class="question">23- İnternette bazı kitapların yayımlanmasının insanın kitaba olan ilgisini arttıracağına inanıyor musunuz?</p>
<label for="RadioGroup19_0"><input type="radio" name="RadioGroup19" value="Evet, yazarların yeni eserlerinin tanıtımı kitaba ilgiyi arttırır" id="RadioGroup19_0"> Evet, yazarların yeni eserlerinin tanıtımı kitaba ilgiyi arttırır</label><br>
<label for="RadioGroup19_1"><input type="radio" name="RadioGroup19" value="Hayır, kitap okuma alışkanlığı kişisel ilgiye dayalıdır, internet etkilemez" id="RadioGroup19_1"> Hayır, kitap okuma alışkanlığı kişisel ilgiye dayalıdır, internet etkilemez</label><br>
<label for="RadioGroup19_2"><input type="radio" name="RadioGroup19" value="Kısmen, tanıtımların ve kitap inceleme siteleri etki yaratabilir." id="RadioGroup19_2"> Kısmen, tanıtımların ve kitap inceleme siteleri etki yaratabilir.</label><br>

<p class="question">24- En son okuduğunuz kitabın adını hatırlıyor musunuz?</p>
<label for="RadioGroup20_0"><input type="radio" name="RadioGroup20" value="Evet" id="RadioGroup20_0"> Evet</label><br>
<label for="RadioGroup20_1"><input type="radio" name="RadioGroup20" value="Hayır" id="RadioGroup20_1"> Hayır</label><br>

<p class="question">25- Genelde hangi vakitler kitap okursunuz?</p>
<label for="CheckboxGroup21_0"><input type="checkbox" name="CheckboxGroup21[]" value="Sabahları" id="CheckboxGroup21_0"> Sabahları</label><br>
<label for="CheckboxGroup21_1"><input type="checkbox" name="CheckboxGroup21[]" value="Okul, iş dönüşü" id="CheckboxGroup21_1"> Okul, iş dönüşü</label><br>
<label for="CheckboxGroup21_2"><input type="checkbox" name="CheckboxGroup21[]" value="Gece geç saatlerde" id="CheckboxGroup21_2"> Gece geç saatlerde</label><br>
<label for="CheckboxGroup21_3"><input type="checkbox" name="CheckboxGroup21[]" value="Hafta sonları herhangi bir saatte" id="CheckboxGroup21_3"> Hafta sonları herhangi bir saatte</label><br>
<label for="CheckboxGroup21_4"><input type="checkbox" name="CheckboxGroup21[]" value="Her fırsatta, zaman sınırlaması olmaksızın" id="CheckboxGroup21_4"> Her fırsatta, zaman sınırlaması olmaksızın</label><br>
<label for="CheckboxGroup21_5"><input type="checkbox" name="CheckboxGroup21[]" value="Kitap okuma alışkanlığım yok" id="CheckboxGroup21_5"> Kitap okuma alışkanlığım yok</label><br>

            <div class="button-container" style="display: flex; justify-content: center;">
                <button class="submit-button" type="submit">
                    <i class="fas fa-paper-plane button-icon"></i> Gönder
                </button>

                <button class="reset-button" type="reset"><i class="fas fa-sync"></i> Sıfırla</button>
            </div>
        </form>
    </div>

</body>
</html>