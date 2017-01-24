<?php

use App\Step;
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

    	/*Processes */
        $process = new process;
        $process->title = "Build New Website";
        $process->slug = "build-new-website";
        $process->save();

        $process = new process;
        $process->title = "Website Updates";
        $process->slug = "website-updates";
        $process->save();

        $process = new process;
        $process->title = "SEO";
        $process->slug = "seo";
        $process->save();

        $process = new process;
        $process->title = "Facebook";
        $process->slug = "facebook";
        $process->save();

        /*Groups*/
        $group = new Group;
        $group->title = 'Websites';
        $group->save();

        $group = new Group;
        $group->title = 'Search Engine Optimization';
        $group->save();

        $group = new Group;
        $group->title = 'Social Media';
        $group->save();

        /*Procedures*/
        $procedure = new Procedure;
        $procedure->title = 'Mock Ups';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->title = 'Wire Frames';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->title = 'Client Folder';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->title = 'Website Instructions';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->title = 'Google Analytics';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->title = 'Install WordPress';
        $procedure->save();

        $procedure = new Procedure;
        $procedure->title = 'Buy Domain';
        $procedure->save();

        $step = new Step;
        $step->procedure_id = 3;
        $step->title = 'Create New Folder';
        $step->body = 'If client folder dose not exist create a new folder by going to Dubzz shared Documents/clients and make a copy of the folder "A NEW CLIENT FOLDER" and rename it.';
        $step->save();


    }
}
