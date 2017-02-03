<?php

use App\Step;
use App\User;
use App\Group;
use App\Process;
use App\Procedure;
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
        
    	/*dummy data*/
        $user = new User;
        $user->name = 'Byron Murray';
        $user->email = 'byron4stacey@hotmail.com';
        $user->password = bcrypt('kitten333');
        $user->save();

    	/*Processes */
        $process = new process;
        $process->user_id = 1;
        $process->title = "Build New Website";
        $process->slug = "build-new-website";
        $process->save();

        $process = new process;
        $process->user_id = 1;
        $process->title = "Website Updates";
        $process->slug = "website-updates";
        $process->save();

        $process = new process;
        $process->user_id = 1;
        $process->title = "SEO";
        $process->slug = "seo";
        $process->save();

        $process = new process;
        $process->user_id = 1;
        $process->title = "Facebook";
        $process->slug = "facebook";
        $process->save();

        /*Groups*/
        $group = new Group;
        $group->title = 'Websites';
        $group->slug = 'websites';
        $group->save();

        $group = new Group;
        $group->title = 'Search Engine Optimization';
        $group->slug = 'search-engine-optimization';
        $group->save();

        $group = new Group;
        $group->title = 'Social Media';
        $group->slug = 'social-media';
        $group->save();

        /*Procedures*/
        $procedure = new Procedure;
        $procedure->user_id = 1;
        $procedure->title = 'Mock Ups';
        $procedure->slug = 'mock-ups';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->user_id = 1;
        $procedure->title = 'Wire Frames';
        $procedure->slug = 'wire-frames';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->user_id = 1;
        $procedure->title = 'Client Folder';
        $procedure->slug = 'client-folder';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->user_id = 1;
        $procedure->title = 'Website Instructions';
        $procedure->slug = 'website-instructions';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->user_id = 1;
        $procedure->title = 'Google Analytics';
        $procedure->slug = 'google-analytics';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->user_id = 1;
        $procedure->title = 'Install WordPress';
        $procedure->slug = 'install-wordPress';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->user_id = 1;
        $procedure->title = 'Buy Domain';
        $procedure->slug = 'buy-domain';
        $procedure->save();

        $step = new Step;
        $step->procedure_id = 3;
        $step->user_id = 1;
        $step->title = 'Create New Folder';
        $step->body = 'If client folder dose not exist create a new folder by going to Dubzz shared Documents/clients and make a copy of the folder "A NEW CLIENT FOLDER" and rename it.';
        $step->save();


    }
}
