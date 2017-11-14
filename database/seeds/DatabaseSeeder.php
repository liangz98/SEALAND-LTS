<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(MembersTableSeeder::class);
    
        // $this->call(TrainingCategorysTableSeeder::class);
        // $this->call(TrainingsTableSeeder::class);
    
        // $this->call(RegisterCoursesTableSeeder::class);
        $this->call(CertificationsTableSeeder::class);
        
		// $this->call(MembershipsTableSeeder::class);
		// $this->call(RenewCertificationsTableSeeder::class);
		// $this->call(CertificationsTableSeeder::class);
		// $this->call(NewssTableSeeder::class);
        // $this->call(TopicsTableSeeder::class);
		// $this->call(ReplysTableSeeder::class);
		// $this->call(ProjectsTableSeeder::class);
    }
}
