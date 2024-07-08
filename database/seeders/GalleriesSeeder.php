<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galleries')->insert([
            [
                'name' => 'COUNTRYSIDE TOUR',
                'images' => json_encode(['https://c1.wallpaperflare.com/preview/103/398/566/mountain-tree-green-hill.jpg', 'https://gttp.imgix.net/377570/x/0/take-your-photo-at-bilar-man-made-forest-3.jpg?ar=1.91%3A1&w=1200&fit=crop', 'https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1200,h_630/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/swlinvlc740u9iocipbd/Loboc%20River%20Cruise%20in%20Bohol.jpg']),
                'travel_package_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ISLAND HOPPING',
                'images' => json_encode(['https://gttp.imgix.net/405230/x/0/aerial-view-of-balicasag-island-1.jpg?ar=1.91%3A1&w=1200&fit=crop', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg4WS0rsx-eMR8hJWKT_DGNE01YovalZ7PuprrF-qv1KN19TQV7DR28DluTkv9bABcf61JbH4l0lQ7CYarlnA2Cz4mbLmMFbGMnOmOTzdskjeqCjGi-L9160fvSEHFl2cqWN6impU3chfux/s1600/DSCF3079.jpg', 'https://farm8.staticflickr.com/7169/26778728020_12dc07919e_b.jpg']),
                'travel_package_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PANGLAO TOUR',
                'images' => json_encode(['https://gallivantrix.com/wp-content/uploads/2018/02/20171001_120055.jpg?w=676', 'https://www.willflyforfood.net/uploads/food-travel4/bohol/boholbeefarm/2.jpg', 'https://files01.pna.gov.ph/source/2023/12/06/bohol-s-hinagdanan-cave-12012023jb.jpg']),
                'travel_package_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '3D2N COUNTRYSIDE + PANGLAO + ISLAND HOPPING',
                'images' => json_encode(['https://live.staticflickr.com/225/500530652_47d6f584b5_b.jpg', 'https://gallivantrix.com/wp-content/uploads/2018/02/20171001_120055.jpg?w=676', 'https://gttp.imgix.net/405230/x/0/aerial-view-of-balicasag-island-1.jpg?ar=1.91%3A1&w=1200&fit=crop']),
                'travel_package_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
