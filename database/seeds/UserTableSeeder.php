<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_author = Role::where('name', 'Author')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        $role_bac = Role::where('name', 'BAC')->first();
        $role_budget = Role::where('name', 'Budget')->first();
        $role_acc = Role::where('name', 'Accounting')->first();
        $role_treas = Role::where('name', 'Treasurer')->first();
        $role_pgo = Role::where('name', 'PGO')->first();
        $role_pgso = Role::where('name', 'PGSO')->first();


        $user = new User();
        $user->first_name = 'Victor';
        $user->last_name = 'Visitor';
        $user->email = 'visitor@example.com';
        $user->password = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->first_name = 'Admin';
        $admin->last_name = 'Admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $author = new User();
        $author->first_name = 'Andy';
        $author->last_name = 'Author';
        $author->email = 'author@example.com';
        $author->password = bcrypt('author');
        $author->save();
        $author->roles()->attach($role_author);

        $author = new User();
        $author->first_name = 'Ruel';
        $author->last_name = 'Saludaga';
        $author->email = 'panyero2003@yahoo.com';
        $author->password = bcrypt('panyero');
        $author->save();
        $author->roles()->attach($role_author);

        $bac = new User();
        $bac->first_name = 'Toto';
        $bac->last_name = 'Orsolino';
        $bac->email = 'totoorsolino@yahoo.com';
        $bac->password = bcrypt('bac');
        $bac->save();
        $bac->roles()->attach($role_author);

        $budget = new User();
        $budget->first_name = 'Adelwisa';
        $budget->last_name = 'Lucero';
        $budget->email = 'adelwisalucero@yahoo.com';
        $budget->password = bcrypt('budget');
        $budget->save();
        $budget->roles()->attach($role_author);

        $acc = new User();
        $acc->first_name = 'Amalia';
        $acc->last_name = 'Espinar';
        $acc->email = 'amyespinar@yahoo.com';
        $acc->password = bcrypt('accounting');
        $acc->save();
        $acc->roles()->attach($role_author);

        $treas = new User();
        $treas->first_name = 'Allan';
        $treas->last_name = 'Valenciano';
        $treas->email = 'allanvalenciano@yahoo.com';
        $treas->password = bcrypt('treasurer');
        $treas->save();
        $treas->roles()->attach($role_author);

        $pgo = new User();
        $pgo->first_name = 'Jose';
        $pgo->last_name = 'Ong';
        $pgo->email = 'joseong@yahoo.com';
        $pgo->password = bcrypt('governor');
        $pgo->save();
        $pgo->roles()->attach($role_author);

        $pgso = new User();
        $pgso->first_name = 'Dondon';
        $pgso->last_name = 'Baylon';
        $pgso->email = 'dondonbaylon@yahoo.com';
        $pgso->password = bcrypt('pgso');
        $pgso->save();
        $pgso->roles()->attach($role_author);

        $provadmin = new User();
        $provadmin->first_name = 'Efren';
        $provadmin->last_name = 'Sabong';
        $provadmin->email = 'efrensabong@yahoo.com';
        $provadmin->password = bcrypt('provadmin');
        $provadmin->save();
        $provadmin->roles()->attach($role_author);


        


    }
}
