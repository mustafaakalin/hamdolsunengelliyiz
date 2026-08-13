<?php

namespace Database\Seeders;

use App\Models\Orthopedic;
use Illuminate\Database\Seeder;

class OrthopedicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Orthopedic::firstOrCreate(
            ['slug' => 'batuhan-ucar'],
            [
                'user_id' => 1,
                'name' => 'Batuhan Uçar',
                'title' => 'Milli Yüzücü',
                'description' => "Batuhan Uçar, 1997 yılında Adana'da dünyaya geldi. Doğuştan omurilik felci hastası olan Uçar, henüz 10 aylıkken geçirdiği ameliyat sonucu yürüyemez hale geldi. Ancak bu durum, onun hayallerinin peşinden gitmesine engel olmadı.\n\nUçar, 12 yaşındayken yüzmeye başladı. Yüzmenin, engelini aşmak için en iyi yol olduğunu düşünen Uçar, kısa sürede yüzme sporuna tutundu. 2013 yılında, Türkiye Bedensel Engelliler Spor Federasyonu'nun düzenlediği yüzme şampiyonasında ilk kez yarışan Uçar, o dönem 16 yaşında olmasına rağmen, 50 metre serbest stil kategorisinde altın madalya kazandı.\n\nUçar, bu başarısının ardından, engelli yüzme sporunda Türkiye'nin en başarılı sporcularından biri haline geldi. 2016 yılında, Rio Paralimpik Oyunları'nda Türkiye'yi temsil eden Uçar, 50 metre serbest stil kategorisinde 6. oldu. 2020 Tokyo Paralimpik Oyunları'nda ise 50 metre serbest stil kategorisinde 5. oldu.\n\nUçar, bugüne kadar katıldığı uluslararası yarışmalarda 20'den fazla madalya kazandı. Türkiye'de ve dünyada engelli yüzme sporunun gelişimine katkıda bulunan Uçar, aynı zamanda bir ilham kaynağı olarak da gösteriliyor. Batuhan Uçar, engelli yüzücü.\n\nUçar, başarısını şu şekilde anlatıyor: \"Engelimin bana engel olacağını hiç düşünmedim. Her zaman hayallerimin peşinden koştum. Yüzme, benim için engelimi aşmanın en iyi yoluydu. Yüzme sayesinde kendimi daha güçlü hissediyorum ve dünyayı daha iyi tanıyorum.\"\n\nUçar, gelecekte engelli yüzme sporunun daha da gelişmesini ve daha fazla engelli sporcunun uluslararası yarışmalarda başarılar kazanmasını istiyor.",
                'image' => null,
                'twitter' => 'https://twitter.com/batuhanucar',
            ],
        );
    }
}
