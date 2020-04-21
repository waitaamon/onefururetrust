<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new \App\Domain\Pages\About();
        $about->title = 'About us';
        $about->body = 'We are a non-profit organisation established for charitable purposes with our main office based in Nairobi, Kenya.  Our operations and principles are guided by our founders’ belief in a fairer world and that development is possible in all parts of the world.
Our objectives are geared towards tackling the problems the world is facing today. Climate Change, hunger, food insecurity, widening inequality, social exclusion, unemployment among youth and women among others. Environmental conservation and protection are at the heart of our operations as we strongly believe it is the foundation of a successful development agenda.
We are guided by the global universal call to ‘’leave no one behind’’ and as such, the aim to support the achievement of the global Sustainable Development agenda 2030 is spread out across all our main objectives.
We believe in development co-operation, not to create a perfect world but to help create a better one. By working with diverse actors, development cooperation is a tool fit to take on 21st-century challenges and remain vital and effective in building a better world, a better future for all.  
';
        $about->save();
    }
}
