<?php

use App\{Profession, Skill, Team, User};
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professions = Profession::all();
        $skills = Skill::all();
        $teams = Team::all();

        $user = User::create([
            'team_id' => $teams->firstWhere('name', 'IES Ingeniero')->id,
            'name' => 'Pepe Pérez',
            'email' => 'pepe@mail.es',
            'password' => bcrypt('123456'),
            'role' => 'admin',
            'created_at' => now()->addDay(),
        ]);

        $user->profile()->create([
            'bio' => 'Programador',
            'profession_id' => $professions->where('title', 'Desarrollador Back-End')->first()->id,
        ]);

        foreach (range(1, 999) as $i) {
            $user = factory(User::class)->create([
                'team_id' => rand(0,2) ? null : $teams->random()->id,
            ]);

            $user->skills()->attach($skills->random(rand(0,7)));

            $user->profile()->create(
                factory(App\UserProfile::class)->raw([
                    'profession_id' => rand(0,2) ? $professions->random()->id : null,
                ])
            );
        }
    }
}