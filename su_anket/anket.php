<!doctype html>
<html>

<head>

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <title>Su Tasarrufu Anketi</title>

  <style>
    .submit-button {
      padding: 10px 20px;
      margin-top: 25px;
      font-size: 18px;
      background-color: #2F4F4F;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 35px;
      transition: background-color 0.3s, transform 0.3s;
      margin-right: 4px;

    }

    .submit-button:hover {
      background-color: #696969;
      transform: scale(1.1);

    }

    .button-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .button-icon {
      margin-right: 10px;
    }

    .header {
      border: 2px solid;
      padding: 10px;
      margin-top: 30px;
      text-align: left;
      border-top-width: 2px;
      border-radius: 10px 10px 5px 5px;
      background-color: white;
      height: 90px;

    }

    .header h4 {
      margin: 0;
    }

    .header .date {
      float: right;
      margin-top: -20px;
    }

    .konu {
      background-color: white;
      border: 2px solid;
      text-align: center;
      font-size: 25px;
      padding: 20px;
      border-radius: 5px 5px 10px 10px;
    }

    .not {
      border: 2px solid;
      text-align: center;
      font-size: 19px;
      padding: 10px;

    }

    p {
      font-size: 19px;
      font-weight: bold;
    }




    .reset-button {
      padding: 10px 30px;
      font-size: 18px;
      background-color: #2F4F4F;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 35px;
      transition: background-color 0.3s, transform 0.3s;
      margin-top: 25px;
      margin-left: 4px;
    }

    .reset-button:hover {
      background-color: #696969;
      transform: scale(1.1);
    }

    .reset-button i {
      margin-right: 5px;
    }

    .box-container {

      justify-content: center;
      flex-direction: column;
      display: flex;
      justify-content: center;
      /* Yatayda ortala */
      align-items: center;
      /* Dikeyde ortala */

    }

    .box-container>div {
      flex: 1;

    }
  </style>

</head>

<body style="background-image: url('WORLD WATER DAY (1).png');">



  <div class="header" style="background-image: url('blue modern world water day.png'); background-size: 200px 100px;">


    <h4>221250015 &nbsp &nbsp Zeynep Deniz</h4>
    <h4 class="date"> <i class="fa-solid fa-calendar-days" style="margin-right: 5px;"></i><?php $tarih = date("d.m.Y");
                                                                                          echo ($tarih); ?> </h4>
    <h4>221250029 &nbsp &nbsp Berna Kaya</h4>
    <h4>221250057 &nbsp &nbsp Fatma Sena Balkuv</h4>

    <h4 style="margin-top: 5px; "></h4>
    <h4 class="date">Bilgisayar Programcılığı NÖ2 <br>Afyon Meslek Yüksekokulu</h4>
  </div>

  <div class="konu" style="background-image: url('blue modern world water day.png'); background-size: 200px 100px;">
    Çevresel Bilinç Anketi: Su Tasarrufu
    <div style="text-align: center; 
      font-size: 19px;
      padding: 5px;
      font-style: italic;">
      Bu anket araştırma ve teknikleri kapsamında ödev olarak hazırlanmıştır.
    </div>
  </div>


  <div class="box-container">

    <div style=" flex:1; border-width: 2px; border-style: solid; border-radius: 10px; padding: 10px; margin: 10px; width: 800px; background-color: white ;  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px #888888;">

      <form action="anketsonuc.php" method="post">


        <!--SORU1-->
        <p>1-Eğitim durumunuz </p>
        <label for="egitim_ilkokul"> <input type="radio" name="egitim" id="egitim_ilkokul" value="ilkokul "> İlköğretim </label> <br>
        <label for="egitim_ortaokul"><input type="radio" name="egitim" id="egitim_ortaokul" value="ortaokul"> Ortaöğretim</label><br>
        <label for="egitim_lisans"><input type="radio" name="egitim" id="egitim_lisans" value="lisans"> Lisans </label> <br>
        <label for="egitim_onlisans"><input type="radio" name="egitim" id="egitim_onlisans" value="onlisans"> Önlisans</label><br>




        <p>2-Yaş aralığınız </p>
        <label for="yas_14_17">
          <input type="radio" name="yas" id="yas_14_17" value="14-17"> 14-17
        </label>
        <br>
        <label for="yas_18_23">
          <input type="radio" name="yas" id="yas_18_23" value="18-23"> 18-23
        </label>
        <br>
        <label for="yas_24_30">
          <input type="radio" name="yas" id="yas_24_30" value="24-30"> 24-30
        </label>
        <br>
        <label for="yas_31_plus">
          <input type="radio" name="yas" id="yas_31_plus" value="31+"> 31+
        </label>



        <p>3-Cinsiyetiniz</p>
        <label for="cinsiyet_bay">
          <input type="radio" name="cinsiyet" id="cinsiyet_bay" value="Bay"> Bay
        </label>
        <br>
        <label for="cinsiyet_bayan">
          <input type="radio" name="cinsiyet" id="cinsiyet_bayan" value="Bayan"> Bayan
        </label>
        <br>
        <label for="cinsiyet_belirtmek_istemiyorum">
          <input type="radio" name="cinsiyet" id="cinsiyet_belirtmek_istemiyorum" value="Belirtmek İstemiyorum"> Belirtmek İstemiyorum
        </label>



        <p>4-Yaşadığınız şehir</p>

        <select name="il" style="margin-left:10px;">
          <option value="Adana">Adana</option>
          <option value="Adıyaman">Adıyaman</option>
          <option value="Afyonkarahisar">Afyonkarahisar</option>
          <option value="Ağrı">Ağrı</option>
          <option value="Amasya">Amasya</option>
          <option value="Ankara">Ankara</option>
          <option value="Antalya">Antalya</option>
          <option value="Artvin">Artvin</option>
          <option value="Aydın">Aydın</option>
          <option value="Balıkesir">Balıkesir</option>
          <option value="Bilecik">Bilecik</option>
          <option value="Bingöl">Bingöl</option>
          <option value="Bitlis">Bitlis</option>
          <option value="Bolu">Bolu</option>
          <option value="Burdur">Burdur</option>
          <option value="Bursa">Bursa</option>
          <option value="Çanakkale">Çanakkale</option>
          <option value="Çankırı">Çankırı</option>
          <option value="Çorum">Çorum</option>
          <option value="Denizli">Denizli</option>
          <option value="Diyarbakır">Diyarbakır</option>
          <option value="Düzce">Düzce</option>
          <option value="Edirne">Edirne</option>
          <option value="Elazığ">Elazığ</option>
          <option value="Erzincan">Erzincan</option>
          <option value="Erzurum">Erzurum</option>
          <option value="Eskişehir">Eskişehir</option>
          <option value="Gaziantep">Gaziantep</option>
          <option value="Giresun">Giresun</option>
          <option value="Gümüşhane">Gümüşhane</option>
          <option value="Hakkari">Hakkari</option>
          <option value="Hatay">Hatay</option>
          <option value="Iğdır">Iğdır</option>
          <option value="Isparta">Isparta</option>
          <option value="İstanbul">İstanbul</option>
          <option value="İzmir">İzmir</option>
          <option value="Kahramanmaraş">Kahramanmaraş</option>
          <option value="Karabük">Karabük</option>
          <option value="Karaman">Karaman</option>
          <option value="Kars">Kars</option>
          <option value="Kastamonu">Kastamonu</option>
          <option value="Kayseri">Kayseri</option>
          <option value="Kırıkkale">Kırıkkale</option>
          <option value="Kırklareli">Kırklareli</option>
          <option value="Kırşehir">Kırşehir</option>
          <option value="Kilis">Kilis</option>
          <option value="Kocaeli">Kocaeli</option>
          <option value="Konya">Konya</option>
          <option value="Kütahya">Kütahya</option>
          <option value="Malatya">Malatya</option>
          <option value="Manisa">Manisa</option>
          <option value="Mardin">Mardin</option>
          <option value="Mersin">Mersin</option>
          <option value="Muğla">Muğla</option>
          <option value="Muş">Muş</option>
          <option value="Nevşehir">Nevşehir</option>
          <option value="Niğde">Niğde</option>
          <option value="Ordu">Ordu</option>
          <option value="Osmaniye">Osmaniye</option>
          <option value="Rize">Rize</option>
          <option value="Sakarya">Sakarya</option>
          <option value="Samsun">Samsun</option>
          <option value="Siirt">Siirt</option>
          <option value="Sinop">Sinop</option>
          <option value="Sivas">Sivas</option>
          <option value="Şanlıurfa">Şanlıurfa</option>
          <option value="Şırnak">Şırnak</option>
          <option value="Tekirdağ">Tekirdağ</option>
          <option value="Tokat">Tokat</option>
          <option value="Trabzon">Trabzon</option>
          <option value="Tunceli">Tunceli</option>
          <option value="Uşak">Uşak</option>
          <option value="Van">Van</option>
          <option value="Yalova">Yalova</option>
          <option value="Yozgat">Yozgat</option>
          <option value="Zonguldak">Zonguldak</option>
        </select>



        <p>5-Haftada kaç kere duş alıyorsunuz?</p>
        <label for="soru_1"><input type="radio" name="soru" value="1" id="soru_1">1</label><br>
        <label for="soru_2"><input type="radio" name="soru" value="2" id="soru_2">2</label><br>
        <label for="soru_3"><input type="radio" name="soru" value="3" id="soru_3">3</label><br>
        <label for="soru_4"><input type="radio" name="soru" value="4" id="soru_4">4</label><br>
        <label for="soru_5"><input type="radio" name="soru" value="5" id="soru_5">5</label><br>
        <label for="soru_6"><input type="radio" name="soru" value="6+" id="soru_6">6+</label><br>

        <p>6-Ortalama duş alma süreniz?</p>
        <label for="RadioGroup1_0"><input type="radio" name="RadioGroup1" value="5-20dk" id="RadioGroup1_0">5-20dk</label><br>
        <label for="RadioGroup1_1"><input type="radio" name="RadioGroup1" value="21-30dk" id="RadioGroup1_1">21-30dk</label><br>
        <label for="RadioGroup1_2"><input type="radio" name="RadioGroup1" value="30-45dk" id="RadioGroup1_2">30-45dk</label><br>
        <label for="RadioGroup1_3"><input type="radio" name="RadioGroup1" value="45dk+" id="RadioGroup1_3">45dk+</label><br>

        <p>7-Çamaşırlarınızı nasıl yıkıyorsunuz?</p>
        <label for="RadioGroup2_0"><input type="radio" name="RadioGroup2" value="Çamaşır makinesi kullanıyorum" id="RadioGroup2_0">Çamaşır makinesi kullanıyorum</label><br>
        <label for="RadioGroup2_1"><input type="radio" name="RadioGroup2" value="Elde yıkıyorum" id="RadioGroup2_1">Elde yıkıyorum</label><br>

        <p>8-Haftada kaç kere çamaşır yıkıyorsunuz?</p>
        <label for="RadioGroup3_0"><input type="radio" name="RadioGroup3" value="0-3" id="RadioGroup3_0">0-3</label><br>
        <label for="RadioGroup3_1"><input type="radio" name="RadioGroup3" value="4-7" id="RadioGroup3_1">4-7</label><br>
        <label for="RadioGroup3_2"><input type="radio" name="RadioGroup3" value="8+" id="RadioGroup3_2">8+</label><br>

        <p>9-Bulaşıklarınızı nasıl yıkıyorsunuz?</p>
        <label for="RadioGroup4_0"><input type="radio" name="RadioGroup4" value="Bulaşık makinesi kullanıyorum" id="RadioGroup4_0">Bulaşık makinesi kullanıyorum</label><br>
        <label for="RadioGroup4_1"><input type="radio" name="RadioGroup4" value="Elde yıkıyorum" id="RadioGroup4_1">Elde yıkıyorum</label><br>

        <p>10-Haftada Kaç kez bulaşık yıkıyorsunuz?</p>
        <label for="RadioGroup5_0"><input type="radio" name="RadioGroup5" value="0-3" id="RadioGroup5_0">0-3</label><br>
        <label for="RadioGroup5_1"><input type="radio" name="RadioGroup5" value="4-7" id="RadioGroup5_1">4-7</label><br>
        <label for="RadioGroup5_2"><input type="radio" name="RadioGroup5" value="7+" id="RadioGroup5_2">7+</label><br>

        <p>11-Bulaşıkları makineye atmadan önce sudan geçiriyor musunuz?</p>
        <label for="RadioGroup6_0"><input type="radio" name="RadioGroup6" value="Evet" id="RadioGroup6_0">Evet</label><br>
        <label for="RadioGroup6_1"><input type="radio" name="RadioGroup6" value="Hayır" id="RadioGroup6_1">Hayır</label><br>

        <p>12- Mutfak musluklarını bir günde ne kadar süre kullanıyorsunuz?</p>
        <label for="RadioGroup7_0"><input type="radio" name="RadioGroup7" value="0-20dk" id="RadioGroup7_0">0-20dk</label><br>
        <label for="RadioGroup7_1"><input type="radio" name="RadioGroup7" value="20-45dk" id="RadioGroup7_1">20-45dk</label><br>
        <label for="RadioGroup7_2"><input type="radio" name="RadioGroup7" value="45dk+" id="RadioGroup7_2">45dk+</label><br>

        <p>13-Aracınız varsa ne sıklıkla yıkıyorsunuz?</p>
        <label for="RadioGroup8_0"><input type="radio" name="RadioGroup8" value="Günde bir" id="RadioGroup8_0">Günde bir</label><br>
        <label for="RadioGroup8_1"><input type="radio" name="RadioGroup8" value="Hafta bir" id="RadioGroup8_1">Hafta bir</label><br>
        <label for="RadioGroup8_2"><input type="radio" name="RadioGroup8" value="Ayda bir" id="RadioGroup8_2">Ayda bir</label><br>
        <label for="RadioGroup8_3"><input type="radio" name="RadioGroup8" value="Aracım yok" id="RadioGroup8_3">Aracım yok</label><br>

        <p>14-Aylık yaklaşık mutfak gideriniz nedir?</p>
        <label for="RadioGroup9_0"><input type="radio" name="RadioGroup9" value="1500tl" id="RadioGroup9_0">1500tl</label><br>
        <label for="RadioGroup9_1"><input type="radio" name="RadioGroup9" value="2000tl" id="RadioGroup9_1">2000tl</label><br>
        <label for="RadioGroup9_2"><input type="radio" name="RadioGroup9" value="3000tl" id="RadioGroup9_2">3000tl</label><br>
        <label for="RadioGroup9_3"><input type="radio" name="RadioGroup9" value="4000tl+" id="RadioGroup9_3">4000tl+</label><br>

        <p>15-Haftalık kırmızı et tüketiminiz nedir?(Bir hamburger 2331 litre suya denk gelir)</p>
        <label for="RadioGroup10_0"><input type="radio" name="RadioGroup10" value="1-2kg" id="RadioGroup10_0">1-2kg</label><br>
        <label for="RadioGroup10_1"><input type="radio" name="RadioGroup10" value="2-3kg" id="RadioGroup10_1">2-3kg</label><br>
        <label for="RadioGroup10_2"><input type="radio" name="RadioGroup10" value="3kg+" id="RadioGroup10_2">3kg+</label><br>
        <label for="RadioGroup10_3"><input type="radio" name="RadioGroup10" value="Et tüketmiyorum" id="RadioGroup10_3">Et tüketmiyorum</label><br>

        <p>16-Günde kaç bardak kahve içersiniz? (Bir fincan kahve için, tohumun toprağa ekimesinden önümüze gelmesine kadar geçen toplam süre 140 litre su harcanıyor.)</p>
        <label for="RadioGroup11_0"><input type="radio" name="RadioGroup11" value="1-3" id="RadioGroup11_0">1-3</label><br>
        <label for="RadioGroup11_1"><input type="radio" name="RadioGroup11" value="4-6" id="RadioGroup11_1">4-6</label><br>
        <label for="RadioGroup11_2"><input type="radio" name="RadioGroup11" value="6+" id="RadioGroup11_2">6+</label><br>
        <label for="RadioGroup11_3"><input type="radio" name="RadioGroup11" value="Kahve içmiyorum" id="RadioGroup11_3">Kahve içmiyorum</label><br>

        <p>17-Aylık kıyafet alışveriş gideriniz nedir? (Bir tişört üretmek için kullanılan su miktarı 2700 litredir)</p>
        <label for="RadioGroup12_0"><input type="radio" name="RadioGroup12" value="500-700 tl" id="RadioGroup12_0">500-700 tl</label><br>
        <label for="RadioGroup12_1"><input type="radio" name="RadioGroup12" value="800-1000 tl" id="RadioGroup12_1">800-1000 tl</label><br>
        <label for="RadioGroup12_2"><input type="radio" name="RadioGroup12" value="1000-3000 tl" id="RadioGroup12_2">1000-3000 tl</label><br>
        <label for="RadioGroup12_3"><input type="radio" name="RadioGroup12" value="3000 tl +" id="RadioGroup12_3">3000 tl +</label><br>

        <p>18-Bahçenizi veya bitkilerinizi hangi yöntemle sularsınız?</p>
        <label for="RadioGroup13_0"><input type="radio" name="RadioGroup13" value="Damla sulama" id="RadioGroup13_0">Damla sulama</label><br>
        <label for="RadioGroup13_1"><input type="radio" name="RadioGroup13" value="Manuel sulama" id="RadioGroup13_1">Manuel sulama</label><br>
        <label for="RadioGroup13_2"><input type="radio" name="RadioGroup13" value="Yağmurlama(Overhead)sulama" id="RadioGroup13_2">Yağmurlama sulama</label><br>

        <p>19-Kullanılmış yağları lavaboya döküyor musunuz? (1 litre atık yağ 1 milyon litre içme suyunu kirletebiliyor. Atık su kirliliğinin %25'ini kullanılmış bitkisel ve hayvansal yağlar oluşturur.)</p>
        <label for="RadioGroup14_0"><input type="radio" name="RadioGroup14" value="Evet" id="RadioGroup14_0">Evet</label><br>
        <label for="RadioGroup14_2"><input type="radio" name="RadioGroup14" value="Bazen" id="RadioGroup14_1">Bazen</label><br>
        <label for="RadioGroup14_1"><input type="radio" name="RadioGroup14" value="Hayır" id="RadioGroup14_2">Hayır</label><br>


        <p>20-Aylık su faturanız ne kadar geliyor? </p>
        <label for="RadioGroup15_0"><input type="radio" name="RadioGroup15" value="300-500" id="RadioGroup15_0">300-500tl</label><br>
        <label for="RadioGroup15_1"><input type="radio" name="RadioGroup15" value="600-800" id="RadioGroup15_1">600-800tl</label><br>
        <label for="RadioGroup15_2"><input type="radio" name="RadioGroup15" value="900-1200" id="RadioGroup15_2">900-1200tl</label><br>
        <label for="RadioGroup15_3"><input type="radio" name="RadioGroup15" value="1300+" id="RadioGroup15_3">1300tl+</label><br>

        <p>21-Muslu hiç açık unutuyor ya da bırakıyor musunuz?</p>
        <label for="RadioGroup16_0"><input type="radio" name="RadioGroup16" value="Evet" id="RadioGroup16_0">Evet</label><br>
        <label for="RadioGroup16_1"><input type="radio" name="RadioGroup16" value="Hayır" id="RadioGroup16_1">Hayır</label><br>
        <label for="RadioGroup16_2"><input type="radio" name="RadioGroup16" value="Bazen" id="RadioGroup16_2">Bazen</label><br>

        <p>22-Tıraş olurken veya diş fırçalarken suyu açık bırakıyor musunuz?</p>
        <label for="RadioGroup17_0"><input type="radio" name="RadioGroup17" value="Evet" id="RadioGroup17_0">Evet</label><br>
        <label for="RadioGroup17_1"><input type="radio" name="RadioGroup17" value="Hayır" id="RadioGroup17_1">Hayır</label><br>
        <label for="RadioGroup17_2"><input type="radio" name="RadioGroup17" value="Bazen" id="RadioGroup17_2">Bazen</label><br>

        <p>23-Evinizde damlayan bir musluk var mı?</p>
        <label for="RadioGroup18_0"><input type="radio" name="RadioGroup18" value="Evet" id="RadioGroup18_0">Evet</label><br>
        <label for="RadioGroup18_1"><input type="radio" name="RadioGroup18" value="Hayır" id="RadioGroup18_1">Hayır</label><br>

        <p>24-Su kullanımı konusunda bilinçli olduğunuzu düşünüyor musunuz?</p>
        <label for="RadioGroup19_0"><input type="radio" name="RadioGroup19" value="Evet kesinlikle" id="RadioGroup19_0">Evet kesinlikle</label><br>
        <label for="RadioGroup19_1"><input type="radio" name="RadioGroup19" value="Hayır" id="RadioGroup19_1">Hayır</label><br>

        <p>25-Sebze ve meyveleri yıkarken bir kap kullanıyor musunuz?</p>
        <label for="RadioGroup20_0"><input type="radio" name="RadioGroup20" value="Evet kullanıyorum" id="RadioGroup20_0">Evet kullanıyorum</label><br>
        <label for="RadioGroup20_1"><input type="radio" name="RadioGroup20" value="Hayır kullanmıyorum" id="RadioGroup20_1">Hayır kullanmıyorum</label><br>


        <p>26-Su tasarrufu ile önlemler alıyor musunuz </p>
        <label for="RadioGroup21_0"><input type="radio" name="RadioGroup21" value="Evet aldığım önlemler var" id="RadioGroup21_0">Evet aldığım önlemler var</label><br>
        <label for="RadioGroup21_1"><input type="radio" name="RadioGroup21" value="Hayır hiç önlem almıyorum" id="RadioGroup21_1">Hayır hiç önlem almıyorum</label><br>

        <p>27-Ailelerin çocuklarını suyu tasarruflu kullanmaları konusunda bilinçlendirmesini isterim</p>
        <label for="RadioGroup22_0"><input type="radio" name="RadioGroup22" value="Kesinlikle katılıyorum" id="RadioGroup22_0">Kesinlikle katılıyorum</label><br>
        <label for="RadioGroup22_1"><input type="radio" name="RadioGroup22" value="Katılıyorum" id="RadioGroup22_1">Katılıyorum</label><br>
        <label for="RadioGroup22_2"><input type="radio" name="RadioGroup22" value="Kararsızım" id="RadioGroup22_2">Kararsızım</label><br>
        <label for="RadioGroup22_3"><input type="radio" name="RadioGroup22" value="Katılmıyorum" id="RadioGroup22_3">Katılmıyorum</label><br>
        <label for="RadioGroup22_4"><input type="radio" name="RadioGroup22" value="Kesinlikle katılmıyorum" id="RadioGroup22_4">Kesinlikle katılmıyorum</label><br>

        <p>28-Çevremdekileri su tasarrufu yapmaları konusunda uyarırım</p>
        <label for="RadioGroup23_0"><input type="radio" name="RadioGroup23" value="Evet,kesinlikle uyarırım" id="RadioGroup23_0">Evet,kesinlikle uyarırım</label><br>
        <label for="RadioGroup23_1"><input type="radio" name="RadioGroup23" value="Genelde uyarırım" id="RadioGroup23_1">Genelde uyarırım</label><br>
        <label for="RadioGroup23_2"><input type="radio" name="RadioGroup23" value="Hayır,uyarmam" id="RadioGroup23_2">Hayır,uyarmam</label><br>



        <p>29-Suyu tasarruflu kullanmak için nasıl önlemler alıyorsunuz</p>
        <label for="CheckboxGroup1_0"><input type="checkbox" name="CheckboxGroup1[]" value="Daha kısa süreli duş alma" id="CheckboxGroup1_0">Daha kısa süreli duş alma</label><br>
        <label for="CheckboxGroup1_1"><input type="checkbox" name="CheckboxGroup1[]" value="Bulaşık ve çamaşır makinesini tam kapasiteli kullanma" id="CheckboxGroup1_1">Bulaşık ve çamaşır makinesini tam kapasiteli kullanma</label><br>
        <label for="CheckboxGroup1_2"><input type="checkbox" name="CheckboxGroup1[]" value="Dışarıda veya bahçede su kullanırken dikkatli olma" id="CheckboxGroup1_2">Dışarıda veya bahçede su kullanırken dikkatli olma</label><br>
        <label for="CheckboxGroup1_3"><input type="checkbox" name="CheckboxGroup1[]" value="İçme suyu dışındaki suları biriktirip kullanma" id="CheckboxGroup1_3">İçme suyu dışındaki suları biriktirip kullanma</label><br>
        <label for="CheckboxGroup1_4"><input type="checkbox" name="CheckboxGroup1[]" value="Muslukta sızıntı olup olmadığını düzenli olarak kontrol etme" id="CheckboxGroup1_4">Muslukta sızıntı olup olmadığını düzenli olarak kontrol etme</label><br>
        <label for="CheckboxGroup1_5"><input type="checkbox" name="CheckboxGroup1[]" value="Çevremdekileri su tasarrufu konusunda bilinçlendiririm." id="CheckboxGroup1_5">Çevremdekileri su tasarrufu konusunda bilinçlendiririm.</label>


        </from>

        <div class="button-container" style="margin-top: 10px;">
          <button type="submit" class="submit-button">
            <i class="fas fa-paper-plane button-icon"></i> Gönder
          </button>

          <button type="reset" class="reset-button">
            <i class="fas fa-undo button-icon"></i> Sıfırla
          </button>
        </div>

    </div>





</body>

</html