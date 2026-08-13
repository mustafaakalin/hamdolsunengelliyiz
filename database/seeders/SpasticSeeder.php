<?php

namespace Database\Seeders;

use App\Models\Spastic;
use Illuminate\Database\Seeder;

class SpasticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spastic::firstOrCreate(
            ['slug' => 'elif-safak'],
            [
                'user_id' => 1,
                'name' => 'Elif Şafak',
                'title' => 'Yazar',
                'description' => "Türkiye'nin önde gelen yazarlarından biridir. Kendisi, spastik engelli bir birey olarak doğdu ve hayatının ilk yıllarında zorluklarla karşılaştı. Ancak, Şafak, engellerini aşarak, yazarlık kariyerinde büyük başarılar elde etti. Kendisi, 2006 yılında \"Baba ve Piç\" adlı romanıyla İngilizceye çevrilen ilk Türk yazar oldu. Şafak, aynı zamanda TED konuşmaları ve farklı ülkelerdeki konferanslarla da tanınmaktadır. Kendisi, engelli bireylerin toplumda daha fazla yer alması ve farkındalığın artması için çalışmalar yapmaktadır.\n\nAyrıca, TRT Haber'de yayınlanan bir haberde, milli yüzücü Batuhan Uçar, psikiyatrist Sare Aydın ve ressam Yusuf Akgün'ün ilham veren hayat hikayeleri anlatılmaktadır. Her birinin hikayesi farklı. Kimi bir sağlık sorunuyla dünyaya geldi, kimi geçirdiği kazayla engelli oldu. Ancak, hiçbirisi hayallerinden vazgeçmedi ve zorlukların üstesinden gelerek başarıya ulaştı.",
                'image' => null,
                'twitter' => 'https://twitter.com/elifsafak',
            ],
        );
    }
}
