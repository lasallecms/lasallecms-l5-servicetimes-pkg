<?php

/**
 *
 * Service Times package for the LaSalle Content Management System, based on the Laravel 5 Framework
 * Copyright (C) 2015 - 2016  The South LaSalle Trading Corporation
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @package    Service Times package for the LaSalle Content Management System
 * @link       http://LaSalleCMS.com
 * @copyright  (c) 2015 - 2016, The South LaSalle Trading Corporation
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @author     The South LaSalle Trading Corporation
 * @email      info@southlasalle.com
 *
 */

// Laravel classes
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateTables
 */
class ServicetimesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ///////////////////////////////////////////////////////////////////////
        ////                    Lookup Tables                              ////
        ///////////////////////////////////////////////////////////////////////

        if (!Schema::hasTable('lookup_servicetimes_holidays'))
        {
            Schema::create('lookup_servicetimes_holidays', function (Blueprint $table)
            {
                $table->engine = 'InnoDB';

                $table->increments('id')->unsigned();

                $table->string('title')->unique();
                $table->string('description');

                $table->boolean('enabled')->default(true);

                $table->timestamp('created_at');
                $table->integer('created_by')->unsigned();
                $table->foreign('created_by')->references('id')->on('users');

                $table->timestamp('updated_at');
                $table->integer('updated_by')->unsigned();
                $table->foreign('updated_by')->references('id')->on('users');

                $table->timestamp('locked_at')->nullable();
                $table->integer('locked_by')->nullable()->unsigned();
                $table->foreign('locked_by')->references('id')->on('users');
            });
        }

        if (!Schema::hasTable('lookup_servicetimes_servicetypes'))
        {
            Schema::create('lookup_servicetimes_servicetypes', function (Blueprint $table)
            {
                $table->engine = 'InnoDB';

                $table->increments('id')->unsigned();

                $table->string('title')->unique();
                $table->string('description');

                $table->boolean('enabled')->default(true);

                $table->timestamp('created_at');
                $table->integer('created_by')->unsigned();
                $table->foreign('created_by')->references('id')->on('users');

                $table->timestamp('updated_at');
                $table->integer('updated_by')->unsigned();
                $table->foreign('updated_by')->references('id')->on('users');

                $table->timestamp('locked_at')->nullable();
                $table->integer('locked_by')->nullable()->unsigned();
                $table->foreign('locked_by')->references('id')->on('users');
            });
        }


        ///////////////////////////////////////////////////////////////////////
        ////                    Main Tables                                ////
        ///////////////////////////////////////////////////////////////////////

        // SERVICETIMES TABLE --> have title field? And, the "down" for this table...

        if (!Schema::hasTable('servicetimes'))
        {
            Schema::create('servicetimes', function (Blueprint $table)
            {
                $table->engine = 'InnoDB';

                $table->increments('id')->unsigned();

                // "Composite Title" that is comprised of the ['date', 'time', 'servicetimes_servicetypes_id']
                // concatenated automatically during persist operations.
                $table->string('title');
                $table->string('description')->nullable();

                $table->date('date');
                $table->text('time');

                $table->boolean('enabled')->default(true);

                $table->integer('servicetimes_holidays_id')->nullable()->unsigned();
                $table->foreign('servicetimes_holidays_id')->references('id')->on('lookup_servicetimes_holidays');

                $table->integer('servicetimes_servicetypes_id')->unsigned();
                $table->foreign('servicetimes_servicetypes_id')->references('id')->on('lookup_servicetimes_servicetypes');

                $table->timestamp('created_at');
                $table->integer('created_by')->unsigned();
                $table->foreign('created_by')->references('id')->on('users');

                $table->timestamp('updated_at');
                $table->integer('updated_by')->unsigned();
                $table->foreign('updated_by')->references('id')->on('users');

                $table->timestamp('locked_at')->nullable();
                $table->integer('locked_by')->nullable()->unsigned();
                $table->foreign('locked_by')->references('id')->on('users');
            });
        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Disable foreign key constraints or these DROPs will not work
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');


        ///////////////////////////////////////////////////////////////////////
        ////                       Lookup Tables                           ////
        ///////////////////////////////////////////////////////////////////////

        Schema::table('lookup_servicetimes_holidays', function($table){
            $table->dropIndex('lookup_servicetimes_holidays_title_unique');
            $table->dropForeign('lookup_servicetimes_holidays_created_by_foreign');
            $table->dropForeign('lookup_servicetimes_holidays_updated_by_foreign');
            $table->dropForeign('lookup_servicetimes_holidays_locked_by_foreign');
        });
        Schema::dropIfExists('lookup_servicetimes_holidays');

        Schema::table('lookup_servicetimes_servicetypes', function($table){
            $table->dropIndex('lookup_servicetimes_servicetypes_title_unique');
            $table->dropForeign('lookup_servicetimes_servicetypes_created_by_foreign');
            $table->dropForeign('lookup_servicetimes_servicetypes_updated_by_foreign');
            $table->dropForeign('lookup_servicetimes_servicetypes_locked_by_foreign');
        });
        Schema::dropIfExists('lookup_servicetimes_servicetypes');



        ///////////////////////////////////////////////////////////////////////
        ////                    Main Tables                                ////
        ///////////////////////////////////////////////////////////////////////

        Schema::table('servicetimes', function($table){
            $table->dropIndex('servicetimes_title_unique');
            $table->dropForeign('servicetimes_servicetimes_holidays_id_foreign');
            $table->dropForeign('servicetimes_servicetypes_id');
            $table->dropForeign('servicetimes_created_by_foreign');
            $table->dropForeign('servicetimes_updated_by_foreign');
            $table->dropForeign('servicetimes_locked_by_foreign');
        });
        Schema::dropIfExists('servicetimes');


        // Enable foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}