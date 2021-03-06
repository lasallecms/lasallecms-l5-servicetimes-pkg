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

/*
 * Admin routes
 */
Route::group(array('prefix' => 'admin'), function()
{
    Route::resource('servicetimes', 'AdminServicetimesController');
    Route::post('servicetimes/confirmDeletion/{id}', 'AdminServicetimesController@confirmDeletion');
    Route::post('servicetimes/confirmDeletionMultipleRows', 'AdminServicetimesController@confirmDeletionMultipleRows');
    Route::post('servicetimes/destroyMultipleRecords', 'AdminServicetimesController@destroyMultipleRecords');

    Route::resource('luservicetimesholiday', 'AdminServicetimesholidayController');
    Route::post('luservicetimesholiday/confirmDeletion/{id}', 'AdminServicetimesholidayController@confirmDeletion');
    Route::post('luservicetimesholiday/confirmDeletionMultipleRows', 'AdminServicetimesholidayController@confirmDeletionMultipleRows');
    Route::post('luservicetimesholiday/destroyMultipleRecords', 'AdminServicetimesholidayController@destroyMultipleRecords');

    Route::resource('luservicetimesservicetype', 'AdminServicetypeController');
    Route::post('luservicetimesservicetype/confirmDeletion/{id}', 'AdminServicetypeController@confirmDeletion');
    Route::post('luservicetimesservicetype/confirmDeletionMultipleRows', 'AdminServicetypeController@confirmDeletionMultipleRows');
    Route::post('luservicetimesservicetype/destroyMultipleRecords', 'AdminServicetypeController@destroyMultipleRecords');
});

/*
 * frontend routes
 */
$router->get('servicetimes/display1', [
    'as'   => 'servicetimes.display1',
    'uses' => 'ServicetimesController@displayFrontend1'
]);


