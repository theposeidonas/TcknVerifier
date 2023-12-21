<a name="readme-top"></a>
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]




<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://istanbulwebtasarim.pro">
    <img src="https://istanbulwebtasarim.pro/images/istanbul-web-tasarim-logo.webp" alt="İstanbul Web Tasarım" style="width: 40%">
  </a>

<h3 align="center">TC Kimlik Numarası Doğrulama</h3>
[![Laravel][Laravel.com]][Laravel-url]
![Packagist Downloads (https://packagist.org/packages/theposeidonas/verimor-sms)] [downloads-url]
  <p align="center">
    Laravel için yazılmış Türkiye Vatandaşları için TC kimlik numarası ve şahıs doğrulama paketi.
    <br />
    <a href="https://github.com/theposeidonas/TcknVerifier"><strong>Dökümantasyon »</strong></a>
    <br />
    <br />
    <a href="https://github.com/theposeidonas/TcknVerifier">Demo</a>
    ·
    <a href="https://github.com/theposeidonas/TcknVerifier/issues">Buglar</a>
    ·
    <a href="https://github.com/theposeidonas/TcknVerifier/issues">İstekler</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>İçindekiler</summary>
  <ol>
    <li>
      <a href="#about-the-project">Proje Hakkında</a>
    </li>
    <li>
      <a href="#getting-started">Başlarken</a>
      <ul>
        <li><a href="#prerequisites">İhtiyaçlar</a></li>
        <li><a href="#installation">Projenize Ekleme</a></li>
      </ul>
    </li>
    <li><a href="#usage">Kullanım</a></li>
    <li><a href="#license">Lisans</a></li>
    <li><a href="#contact">İletişim</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## Proje Hakkında

TcknVerifier Laravel için oluşturulmuş kolayca TC kimlik numarası ve Vatandaş doğrulama paketidir. TC kimlik numaralarının geçerli olup olmadığını ve belirli bilgilerin alınması sonucu şahısın gerçekten olup olmadığını kontrol eden 2 fonksiyonlu bir pakettir.

Neden ihtiyaç var:
* Laravel için Türkiye'de en çok kullanılan ve ihtiyaç duyulan işlemleri kolayca yapar.
* Tekrar tekrar her projeniz için fonksiyonları güncellemeniz ve tekrar yazmanız gerekmez.
* Basit bir komut ile en verimli şekilde TCKN ve şahıs doğrular.

Sadece basit bir kaç komut ile projenize dahil edebilir, fonksiyonları kullanarak basit şekilde doğrulama yapabilirsiniz.

<p align="right">(<a href="#readme-top">başa dön</a>)</p>




<!-- GETTING STARTED -->
## Başlarken

Kullanacağınız proje Laravel projesi olmalıdır. Kurulumu yaptıktan sonra composer ile projenize ekleyebilirsiniz.

### İhtiyaçlar

PHP Soap ve PHP intl sunucunuzda veya yerelinizde kullanılabiliyor olmalı. Kullanılamıyorsa mutlaka php.ini dosyasından bunları eklemeli veya önündeki comment ';' işaretini kaldırmalısınız.

### Projenize ekleme

Laravel projenizde terminali açarak şu komutu çalıştırın;
   ```
    composer require theposeidonas/tckn-verifier
   ```

<p align="right">(<a href="#readme-top">başa dön</a>)</p>

<!-- USAGE EXAMPLES -->
## Kullanım

Kullanım için projenize eklemeyi yaptıktan sonra, kullanacağınız Controller içerisinde yukarıya şu satırı eklemelisiniz;
 ```
use Theposeidonas\TcknVerifier\Verify;
  ```

Sonrasında kullanmak istediğiniz yerde 2 adet fonksiyonu çalıştırabilirsiniz;

 ```
 // Bu komut şahısı NVI sisteminde doğrular
 Verify::person('11111111111', 'isim', 'soyisim','1997');
 
 // Bu komut sadece TC Kimlik Numarası geçerli mi diye doğrular.
 Verify::tckn('11111111111');
  ```

<p align="right">(<a href="#readme-top">başa dön</a>)</p>

<!-- LICENSE -->
## Lisanslama

MIT Lisansı altında dağıtılmaktadır. Daha fazla bilgi için 'LICENSE.txt' dosyasına bakın.

<p align="right">(<a href="#readme-top">başa dön</a>)</p>



<!-- CONTACT -->
## İletişim

Baran Arda - [@theposeidonas](https://twitter.com/theposeidonas) - info@baranarda.com.com

Proje Linki: [https://github.com/theposeidonas/TcknVerifier](https://github.com/theposeidonas/TcknVerifier)

<p align="right">(<a href="#readme-top">başa dön</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/theposeidonas/TcknVerifier.svg?style=for-the-badge
[contributors-url]: https://github.com/theposeidonas/TcknVerifier/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/theposeidonas/TcknVerifier.svg?style=for-the-badge
[forks-url]: https://github.com/theposeidonas/TcknVerifier/network/members
[stars-shield]: https://img.shields.io/github/stars/theposeidonas/TcknVerifier.svg?style=for-the-badge
[stars-url]: https://github.com/theposeidonas/TcknVerifier/stargazers
[issues-shield]: https://img.shields.io/github/issues/theposeidonas/TcknVerifier.svg?style=for-the-badge
[issues-url]: https://github.com/theposeidonas/TcknVerifier/issues
[license-shield]: https://img.shields.io/github/license/theposeidonas/TcknVerifier.svg?style=for-the-badge
[license-url]: https://github.com/theposeidonas/TcknVerifier/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/theposeidonas/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[downloads-url]: https://img.shields.io/packagist/dt/theposeidonas/tckn-verifier?style=for-the-badge&color=007ec6
