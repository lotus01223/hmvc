<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id')->nullable();
            $table->integer('resume_id')->nullable();
            $table->integer('wisdom_id')->nullable();
            $table->string('fullname');
            $table->string('email');
            $table->string('password');
            $table->string('picture_name')->nullable();
            $table->enum('sex', ['male', 'female']);
            $table->date('birthday');
            $table->integer('nationality_id')->index();
            $table->integer('residence_id')->index();
            $table->string('phone');
            $table->integer('japanese_level_id')->index();
            $table->integer('it_skill_id')->index();
            $table->string('current_company')->nullable();
            $table->integer('current_job_id')->index()->nullable();
            $table->integer('education_background_id')->index();
            $table->string('major');
            $table->integer('gra_year');
            $table->integer('gra_month');
            $table->tinyInteger('gra_status');
            $table->integer('education_id')->index();
            $table->integer('job_experience_id')->index();
            $table->integer('job_objective_id')->index();
            $table->integer('language_id')->index();
            $table->integer('portfolio_files_id')->index();
            $table->integer('test_result_id')->index();
            $table->integer('scout_status_id')->index();
            $table->integer('recommend_status_id')->index();
            $table->integer('event_status_id')->index();
            $table->string('ca_image')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->tinyInteger('activity_status');
            $table->tinyInteger('service_status');
            $table->tinyInteger('employ_status');
            $table->timestamps();
            $table->string('modified_by')->nullable();
            $table->timestamp('lastlogin_at')->nullable();

            // foreign
            // $table->foreign('nationality_id')->references('id')->on('nationality_masters');
            // $table->foreign('residence_id')->references('id')->on('country_masters');
            // $table->foreign('japanese_level_id')->references('id')->on('japanese_level_masters');
            // $table->foreign('it_skill_id')->references('id')->on('it_skill');
            // $table->foreign('current_job_id')->references('id')->on('job_masters');
            // $table->foreign('education_background_id')->references('id')->on('education_masters');
            // $table->foreign('education_id')->references('id')->on('educations');
            // $table->foreign('job_experience_id')->references('id')->on('job_experiences');
            // $table->foreign('job_objective_id')->references('id')->on('job_objectives');
            // $table->foreign('language_id')->references('id')->on('use_languages');
            // $table->foreign('portfolio_files_id')->references('id')->on('portfolios');
            // $table->foreign('test_result_id')->references('id')->on('test_results');
            // $table->foreign('scout_status_id')->references('id')->on('scout_statuses');
            // $table->foreign('recommend_status_id')->references('id')->on('recommend_statuses');
            // $table->foreign('event_status_id')->references('id')->on('event_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
