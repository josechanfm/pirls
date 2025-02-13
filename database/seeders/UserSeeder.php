<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Team;
use App\Models\Member;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $adminRole=Role::firstOrCreate(['name'=>'admin']);
        $organizerRole=Role::firstOrCreate(['name'=>'organizer']);
        $masterRole=Role::firstOrCreate(['name'=>'master']);

        $user=User::create([
            'name' => 'Master',
            'email' => 'master@example.com',
            'password' => Hash::make('password'),
        ]);
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
        $user->assignRole($masterRole);

        $user=User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('admin');
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));

        for($i=1; $i<=20; $i++){
            $user=User::create([
                'name' => 'Member '.$i,
                'email' => 'member'.$i.'@example.com',
                'password' => Hash::make('password'),
            ]);    
            $user->ownedTeams()->save(Team::forceCreate([
                'user_id' => $user->id,
                'name' => explode(' ', $user->name, 2)[0]."'s Team",
                'personal_team' => true,
            ]));
        }

    }
}
