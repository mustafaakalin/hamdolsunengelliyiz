<?php

namespace Database\Seeders;

use App\Models\Hearing;
use Illuminate\Database\Seeder;

class HearingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hearing::firstOrCreate(
            ['slug' => 'celil-uzun'],
            [
                'user_id' => 1,
                'name' => 'Celil Uzun',
                'title' => 'Hukukçu',
                'description' => "Celil Uzun, 1992 yılında Diyarbakır'da dünyaya geldi. Doğuştan işitme ve görme engelli olan Uzun, ailesi ve öğretmenlerinin desteğiyle erken yaşta okuma ve yazma öğrendi. Celil Uzun, İşitme ve Görme Engelli Hukukçu.\n\nİlk, orta ve lise öğrenimini Diyarbakır'da tamamlayan Uzun, ardından Ankara Üniversitesi Hukuk Fakültesi'ne girdi. Fakültede zorluklarla karşılaşsa da, azmi ve kararlılığı sayesinde eğitimini başarıyla tamamladı.\n\n2018 yılında mezun olan Uzun, avukatlık stajını tamamladıktan sonra Diyarbakır'da serbest avukatlık yapmaya başladı. İşitme ve görme engelli olmasına rağmen, mesleğini başarıyla yürüten Uzun, engelli hakları konusunda da çalışmalar yürütüyor.\n\nUzun, engelli bireylerin toplumda daha fazla yer alması için mücadele ediyor. Bu amaçla, engelli hakları konusunda farkındalık yaratmak için eğitimler veriyor ve seminerlere katılıyor.\n\nUzun'un başarı hikayesi, engelli bireylerin hayallerine ulaşmaları için her türlü engele rağmen mücadele etmelerini gösteriyor.\n\nUzun, başarısını şu sözlerle anlatıyor:\n\n\"Engelli olmak bir dezavantaj değil, bir avantajdır. Engellerimizi bir engel olarak değil, bir fırsat olarak görmeliyiz. Herkesin hayallerini gerçekleştirebileceğine inanıyorum. Yeter ki biz isteyelim ve çabalayalım.\"",
                'image' => null,
                'twitter' => 'https://twitter.com/celiluzun',
            ],
        );
    }
}
