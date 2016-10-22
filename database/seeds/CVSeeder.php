<?php

use Illuminate\Database\Seeder;

class CVSeeder extends Seeder
{
     /**
      * Run the database seeds.
      *
      * @return void
      */
     public function run()
     {
          $userid = Auth::user()->id;
          $username = Auth::user()->name;
          DB::table('cv')->insert(['cv_name' => $username, 'user_id' => $userid, 'template_id' => 1]);
          $userNewCv = DB::table('cv')->where('user_id', $userid)->orderBy('created_at', 'desc')->first();
          $userNewCvId = $userNewCv->cv_id;

          DB::table('personal_data')->insert(
               [
                    'personal_data_fname' => $username,
                    'image_url' => '/images/1.png',
                    'personal_data_bdate' => "11/03/1996",
                    'personal_data_info' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                    'personal_data_profession' => "WEB DEVELOPER",
                    'cv_id' => $userNewCvId]);
     }
}
