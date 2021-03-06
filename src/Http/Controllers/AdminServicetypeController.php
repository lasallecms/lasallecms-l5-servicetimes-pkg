<?php

namespace Lasallecms\Servicetimes\Http\Controllers;

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
use Lasallecms\Formhandling\Lookuptables\AdminLookupTableBaseController;
use Lasallecms\Lasallecmsapi\Repositories\BaseRepository;

/*
 * Resource controller for administration of lookup_address_types
 */
class AdminServicetypeController extends AdminLookupTableBaseController
{
    ///////////////////////////////////////////////////////////////////
    ////////////////     USER DEFINED PROPERTIES      /////////////////
    ////////////////           MODIFY THESE!          /////////////////
    ///////////////////////////////////////////////////////////////////

    /*
     * @var Name of this package
     */
    public $package_title        = "LaSalleCMS";

    /*
     * Lookup table type, in the plural
     */
    public $table_type_plural   = "Servicetimes Servicetypes";

    /*
     * Lookup table type, in the singular
     */
    public $table_type_singular  = "Servicetimes Servicetypes";

    /*
     * Lookup table name
     */
    public $table_name           = "lookup_servicetimes_servicetypes";

    /*
     * This lookup table's model class namespace
     */
    public $model_namespace      = "Lasallecms\Servicetimes\Models";

    /*
     * This lookup table's model class
     */
    public $model_class          = "Lookup_servicetimes_servicetype";

    /*
     * The base URL of this lookup table's resource routes
     */
    public $resource_route_name   = "luservicetimesservicetype";

    /*
     * Suppress the delete button when just one record to list, in the listings (index) page
     *
     * true  = suppress the delete button when just one record to list
     * false = display the delete button when just one record to list
     *
     * @var bool
     */
    public $suppress_delete_button_when_one_record = false;




    ///////////////////////////////////////////////////////////////////
    ////////////////     DO NOT MODIFY BELOW!         /////////////////
    ///////////////////////////////////////////////////////////////////

    /*
     * @param  Lasallecms\Lasallecmsapi\Repositories\BaseRepository
     * @return void
     */
    public function __construct(BaseRepository $repository)
    {
        // execute AdminLookupTableBaseController's construct method first in order to run the middleware
        parent::__construct() ;

        // Inject repository
        $this->repository = $repository;

        // Inject the relevant model into the repository
        $this->repository->injectModelIntoRepository($this->model_namespace."\\".$this->model_class);
    }
}