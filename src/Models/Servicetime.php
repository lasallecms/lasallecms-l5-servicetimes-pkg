<?php

namespace Lasallecms\Servicetimes\Models;

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

// LaSalle Software
use Lasallecms\Lasallecmsapi\Models\BaseModel;

class Servicetime extends BaseModel
{
    ///////////////////////////////////////////////////////////////////
    ///////////     MANDATORY USER DEFINED PROPERTIES      ////////////
    ///////////              MODIFY THESE!                /////////////
    ///////////////////////////////////////////////////////////////////
    // LARAVEL MODEL CLASS PROPERTIES
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'servicetimes';

    /**
     * Which fields may be mass assigned
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'date', 'time', 'enabled', 'servicetimes_holidays_id', 'servicetimes_servicetypes_id',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * LaSalle Software handles the created_at and updated_at fields, so false.
     *
     * @var bool
     */
    public $timestamps = false;


    // PACKAGE PROPERTIES

    /*
     * Name of this package
     *
     * @var string
     */
    public $package_title = "LaSalleCMS";


    // MODEL PROPERTIES

    /*
     * Model class namespace.
     *
     * Do *NOT* specify the model's class.
     *
     * @var string
     */
    public $model_namespace = "Lasallecms\Servicetimes\Models";


    /*
     * Model's class.
     *
     * Convention is capitalized and singular -- which is assumed.
     *
     * @var string
     */
    public $model_class = "Servicetime";


    // RESOURCE ROUTE PROPERTIES

    /*
     * The base URL of the resource routes.
     *
     * Frequently is the same as the table name.
     *
     * By convention, plural.
     *
     * Lowercase.
     *
     * @var string
     */
    public $resource_route_name   = "servicetimes";

    /*
     * Do you want the "view" button to display in the index listing?
     *
     * @var bool
     */
    public $display_the_view_button = true;


    // FORM PROCESSORS PROPERTIES.
    // THESE ARE THE ADMIN CRUD COMMAND HANDLERS.
    // THE ONLY REASON YOU HAVE TO CREATE THESE COMMAND HANDLERS AT ALL IS THAT
    // THE EVENTS DIFFER. EVERYTHING THAT HAPPENS UP TO THE "PERSIST" IS PRETTY STANDARD.

    /*
     * Namespace of the Form Processors
     *
     * MUST *NOT* have a slash at the end of the string
     *
     * @var string
     */
    public $namespace_formprocessor = 'Lasallecms\Servicetimes\Formprocessing';

    /*
     * Class name of the CREATE Form Processor command
     *
     * @var string
     */
    public $classname_formprocessor_create = 'CreateServicetimesFormProcessing';

    /*
     * Namespace and class name of the UPDATE Form Processor command
     *
     * @var string
     */
    public $classname_formprocessor_update = 'UpdateServicetimesFormProcessing';

    /*
     * Namespace and class name of the DELETE (DESTROY) Form Processor command
     *
     * @var string
     */
    public $classname_formprocessor_delete = 'DeleteServicetimesFormProcessing';


    // SANITATION RULES PROPERTIES

    /**
     * Sanitation rules for Create (INSERT)
     *
     * @var array
     */
    public $sanitationRulesForCreate = [
        'description' => 'trim|strip_tags',
        'time'        => 'trim|strip_tags',

    ];
    /**
     * Sanitation rules for UPDATE
     *
     * @var array
     */
    public $sanitationRulesForUpdate = [
        'description' => 'trim|strip_tags',
        'time'        => 'trim|strip_tags',
    ];


    // VALIDATION RULES PROPERTIES

    /**
     * Validation rules for  Create (INSERT)
     *
     * @var array
     */
    public $validationRulesForCreate = [
        'servicetimes_holidays_id'     => 'integer',
        'servicetimes_servicetypes_id' => 'integer',
    ];

    /**
     * Validation rules for UPDATE
     *
     * @var array
     */
    public $validationRulesForUpdate = [
        'servicetimes_holidays_id'     => 'integer',
        'servicetimes_servicetypes_id' => 'integer',
    ];


    // USER GROUPS & ROLES PROPERTIES

    /*
     * User groups that are allowed to execute each controller action
     *
     * @var array
     */
    public $allowed_user_groups = [
        ['index'   => ['Super Administrator']],
        ['create'  => ['Super Administrator']],
        ['store'   => ['Super Administrator']],
        ['edit'    => ['Super Administrator']],
        ['update'  => ['Super Administrator']],
        ['destroy' => ['Super Administrator']],
    ];


    // FIELD LIST PROPERTIES

    /*
     * Field list
     *
     * ID and TITLE must go first.
     *
     * Forms will list fields in the order fields are listed in this array.
     *
     * @var array
     */
    public $field_list = [
        [
            /*  "Composite Title" field. Database tables that are related to each other need a "Title" field.
                 There is no natural field that can serve as the "Title" field. The "Composite Title" field
                 concatenates other fields during create and updates automatically.
                 * not for lookup tables
                 * include  'index_skip' => true,  so existing code will exclude from index listing
                 * MySQL field type "text" so not run out of space concatenating multiple varchar(255) fields
             */
            'name'                  => 'composite_title',
            'type'                  => 'composite_title',
            'fields_to_concatenate' => ['date', 'time', 'servicetimes_servicetypes_id'],
            'index_skip'            => true,
        ],
        [
            'name'                   => 'id',
            'type'                   => 'int',
            'info'                   => false,
            'index_skip'             => false,
            'index_align'            => 'center',
        ],
        [
            'name'                   => 'servicetimes_servicetypes_id',
            'alternate_form_name'    => 'Service Types',
            'type'                   => 'related_table',
            'related_table_name'     => 'lookup_servicetimes_servicetypes',
            'related_namespace'      => 'Lasallecms\Servicetimes\Models',
            'related_model_class'    => 'Lookup_servicetimes_servicetype',
            'related_fk_constraint'  => false,
            'related_pivot_table'    => false,
            'nullable'               => false,
            'info'                   => 'Service type. Mandatory',
            'index_skip'             => false,
            'index_align'            => 'center',
        ],
        [
            'name'                   => 'date',
            'type'                   => 'date',
            'info'                   => 'What is the date of this service?',
            'index_skip'             => false,
            'persist_wash'          => 'publish_on',
        ],
        [
            'name'                   => 'time',
            'type'                   => 'varchar',
            'info'                   => 'What time does this service start? eg: 6:30pm.',
            'index_skip'             => false,
            'persist_wash'           => 'content',
        ],
        [
            'name'                   => 'servicetimes_holidays_id',
            'alternate_form_name'    => 'Holidays (optional)',
            'type'                   => 'related_table',
            'related_table_name'     => 'lookup_servicetimes_holidays',
            'related_namespace'      => 'Lasallecms\Servicetimes\Models',
            'related_model_class'    => 'Lookup_servicetimes_holiday',
            'related_fk_constraint'  => false,
            'related_pivot_table'    => false,
            'nullable'               => false,
            'info'                   => 'Holidays. Optional',
            'index_skip'             => false,
            'index_align'            => 'center',
        ],
        [
            'name'                   => 'description',
            'type'                   => 'text-no-editor',
            'info'                   => 'Description is optional. 255 character maximum.',
            'index_skip'             => true,
        ],

    ];


    // MISC PROPERTIES

    /*
     * Suppress the delete button when just one record to list, in the listings (index) page
     *
     * true  = suppress the delete button when just one record to list
     * false = display the delete button when just one record to list
     *
     * @var bool
     */
    public $suppress_delete_button_when_one_record = false;

    /*
     * DO NOT DELETE THESE CORE RECORDS.
     *
     * Specify the TITLE of these records
     *
     * Assumed that this database table has a "title" field
     *
     * @var array
     */
    public $do_not_delete_these_core_records = [];


    ///////////////////////////////////////////////////////////////////
    //////////////        RELATIONSHIPS             ///////////////////
    ///////////////////////////////////////////////////////////////////

    /*
     * One to one relationship with lookup_address_type
     *
     * Method name must be:
     *    * the model name,
     *    * NOT the table name,
     *    * singular;
     *    * lowercase.
     *
     * @return Eloquent
     */
    public function lookup_servicetimes_holiday()
    {
        return $this->hasOne('Lasallecms\Servicetimes\Models\Lookup_servicetimes_holiday');
    }

    /*
     * One to one relationship with lookup_address_type
     *
     * Method name must be:
     *    * the model name,
     *    * NOT the table name,
     *    * singular;
     *    * lowercase.
     *
     * @return Eloquent
     */
    public function lookup_servicetimes_servicetype()
    {
        return $this->hasOne('Lasallecms\Servicetimes\Models\Lookup_servicetimes_servicetype');
    }


    ///////////////////////////////////////////////////////////////////
    //////////////        OTHER METHODS             ///////////////////
    ///////////////////////////////////////////////////////////////////

    // none
}