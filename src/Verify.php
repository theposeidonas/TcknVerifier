<?php

namespace Theposeidonas\TcknVerifier;

class Verify
{
    /**
     * @param $tckn
     * @param $name
     * @param $surname
     * @param $birthYear
     * @return bool|void
     */
    public static function person($tckn, $name, $surname, $birthYear)
    {
        $client = new \SoapClient('https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL');
        $response = $client->TCKimlikNoDogrula([
            'TCKimlikNo' => $tckn,
            'Ad' => \Transliterator::create('tr-Upper')->transliterate($name),
            'Soyad' => \Transliterator::create('tr-Upper')->transliterate($surname),
            'DogumYili' => $birthYear,
        ]);
        if (!$response->TCKimlikNoDogrulaResult) return false;
        else return true;
    }

    /**
     * @param $tckn
     * @return bool
     */
    public static function tckn($tckn)
    {
        $odd = 0; $even = 0; $total = 0;

        for($i=0; $i<=8; $i+=2)
            $odd+=$tckn[$i];

        for($i=1; $i<=7; $i+=2)
            $even+=$tckn[$i];

        for($i=0; $i<=9; $i++)
            $total+=$tckn[$i];

        if (strlen($tckn) != 11) return false;

        elseif (!ctype_digit($tckn)) return false;

        elseif(((7*$odd)-$even)%10!=$tckn[9]) return false;

        elseif($total%10!=$tckn[10]) return false;

        else return true;
    }
}