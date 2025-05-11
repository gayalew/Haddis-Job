<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        Listing::factory(6)->create([
            'user_id' => $user->id,
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript, react',
        //     'company' => 'Haddis Tech',
        //     'location' => 'Bahir Dar',
        //     'email' => 'infohaddis@gmail.com',
        //     'website' => 'haddistech.com',
        //     'description' => 'We provide bojklnll bikldewik edworhgljr dewjnjwfnl dewhoelrfgfe ferhnfwep; trhjvnf h3wo[we oijherohnwpd rhiofepnqw; ujtgmfvsnlpeg owhfwprnfqe fhewo qp24utpncpqi 3t5-2[fqbd;sk hqdfifweio.'
        // ]);

        // Listing::create([
        //     'title' => 'React Senior Developer',
        //     'tags' => 'javascript, Tailwind, Material UI',
        //     'company' => 'Askuala Link',
        //     'location' => 'Bahir Dar',
        //     'email' => 'askualalink@gmail.com',
        //     'website' => 'askualalink.com',
        //     'description' => 'Technology is bojklnll bikldewik edworhgljr dewjnjwfnl dewhoelrfgfe ferhnfwep; trhjvnf h3wo[we oijherohnwpd 2ednwioe wdifho3 fhewo qp24utpncpqi 3t5-2[fqbd;sk hqdfifweio.'
        // ]);
    }
}
