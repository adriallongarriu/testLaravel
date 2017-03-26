<?php

use App\Models\Auth\Role;
use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `phones` (`id`,  `make`, `model`, `imgUrl`, `created_at`, `updated_at`)
                    VALUES
                        (1,  'Apple', 'iPhone 8 ', 'http://www.iphone8biz.com/wp-content/uploads/2017/01/iphone-8-concept.jpg', '2017-03-26 13:28:00', '2017-03-26 13:28:00'),
                        (2,  'Google', 'Pixel 2', 'http://media.idownloadblog.com/wp-content/uploads/2017/03/google-pixel-2-leaked-image-back.jpg', '2017-03-26 13:28:00', '2017-03-26 13:28:00'),
                        (3,  'HTC', '11', 'https://www.sahteyazilim.com/wp-content/uploads/2016/12/htc-11_indirme-deposu.jpg', '2017-03-26 13:28:00', '2017-03-26 13:28:00'),
                        (4,  'Huawei', 'P9', 'http://consumer-res.huaweistatic.com/es/mobile-phones/p9lite/assets/matebook/images/index-img/sec8/phone.png?1487755111503', '2017-03-26 13:28:00', '2017-03-26 13:28:00')
                    ");


    }
}
