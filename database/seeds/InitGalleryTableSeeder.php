<?php

use Illuminate\Database\Seeder;

class InitGalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = new \App\Domain\Content\Gallery();
        $gallery->title = 'main gallery';
        $gallery->identifier = \Illuminate\Support\Str::uuid();
        $gallery->save();
    }
}
