<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdateImgPathInMovies extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        $moviesData = [
            1 => 'https://image.tmdb.org/t/p/w500/tmU7GeKVybMWFButWEGl2M4GeiP.jpg',
            2 => 'https://image.tmdb.org/t/p/w500/ft8WRF2xqEwwGWa59naDUybKTAx.jpg',
            3 => 'https://image.tmdb.org/t/p/w500/uif5fUshJrXyyDzfpzp1DLw3N0S.jpg',
            4 => 'https://image.tmdb.org/t/p/w500/kZ2nZw8D681aphje8NJi8EfbL1U.jpg',
            5 => 'https://image.tmdb.org/t/p/w500/lxD5ak7BOoinRNehOCA85CQ8ubr.jpg',
            6 => 'https://image.tmdb.org/t/p/w500/suaEOtk1N1sgg2MTM7oZd2cfVp3.jpg',
            7 => 'https://image.tmdb.org/t/p/w500/mzfx54nfDPTUXZOG48u4LaEheDy.jpg',
            8 => 'https://image.tmdb.org/t/p/w500/zqkmTXzjkAgXmEWLRsY4UpTWCeo.jpg',
            9 => 'https://image.tmdb.org/t/p/w500/1jVEONg10d7lJunwl9GAS6tUGkB.jpg',
            10 => 'https://image.tmdb.org/t/p/w500/lDJx0ZKbfYbGoe8mwWmVKSQr0ub.jpg'
        ];

        foreach ($moviesData as $id => $link) {
            DB::table('movies')
                ->where('id', $id)
                ->update(['img_path' => $link]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        $moviesData = [
            1 => 'https://image.tmdb.org/t/p/w500/tmU7GeKVybMWFButWEGl2M4GeiP.jpg',
            2 => 'https://image.tmdb.org/t/p/w500/ft8WRF2xqEwwGWa59naDUybKTAx.jpg',
            3 => 'https://image.tmdb.org/t/p/w500/uif5fUshJrXyyDzfpzp1DLw3N0S.jpg',
            4 => 'https://image.tmdb.org/t/p/w500/kZ2nZw8D681aphje8NJi8EfbL1U.jpg',
            5 => 'https://image.tmdb.org/t/p/w500/lxD5ak7BOoinRNehOCA85CQ8ubr.jpg',
            6 => 'https://image.tmdb.org/t/p/w500/suaEOtk1N1sgg2MTM7oZd2cfVp3.jpg',
            7 => 'https://image.tmdb.org/t/p/w500/mzfx54nfDPTUXZOG48u4LaEheDy.jpg',
            8 => 'https://image.tmdb.org/t/p/w500/zqkmTXzjkAgXmEWLRsY4UpTWCeo.jpg',
            9 => 'https://image.tmdb.org/t/p/w500/1jVEONg10d7lJunwl9GAS6tUGkB.jpg',
            10 => 'https://image.tmdb.org/t/p/w500/lDJx0ZKbfYbGoe8mwWmVKSQr0ub.jpg'
        ];

        foreach ($moviesData as $id => $link) {
            DB::table('movies')
                ->where('id', $id)
                ->update(['img_path' => null]);
        }
    }
};
