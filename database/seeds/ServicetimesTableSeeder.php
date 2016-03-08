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

// LaSalle Software
use Lasallecms\Servicetimes\Models\Lookup_servicetimes_holiday;
use Lasallecms\Servicetimes\Models\Lookup_servicetimes_specialday;
use Lasallecms\Servicetimes\Models\Lookup_servicetimes_servicetype;

// Laravel classes
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class ServicetimesTableSeeder extends Seeder
{
    /**
     * Run the LaSalleCRM database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        /**
         * Lookup_servicetimes_holiday Table
         */
        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Hashana',
            'description' => 'Rosh Hashana',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Yom Kippur',
            'description' => 'Yom Kippur',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Sukkot',
            'description' => 'Sukkot',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shmini Atzeret',
            'description' => 'Shmini Atzeret',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Simchat Torah',
            'description' => 'Simchat Torah',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Chanukah',
            'description' => 'Chanukah',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Purim',
            'description' => 'Purim',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Pesach',
            'description' => 'Pesach',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shavuot',
            'description' => 'Shavuot',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Tish\'a B\'Av',
            'description' => 'Tish\'a B\'Av',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Tu BiShvat',
            'description' => 'Tu BiShvat',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Purim Katan',
            'description' => 'Minor Purim celebration during Adar I on leap years.',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shushan Purim',
            'description' => 'Purim celebrated in Jerusalem and walled cities.',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Pesach Sheni',
            'description' => 'Second Passover, one month after Passover.',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Lag BaOmer',
            'description' => 'celebrated on the 33rd day of the Counting of the Omer, which occurs on the 18th day of the Hebrew month of Iyar. One reason given for the holiday is as the day of passing of Rabbi Shimon bar Yochai. Modern Jewish tradition links the holiday to the Bar Kokhba Revolt against the Roman Empire (132-135 CE). In Israel, it is celebrated as a symbol for the fighting Jewish spirit.',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Leil Selichot',
            'description' => 'Jewish penitential poems and prayers, especially those said in the period leading up to the High Holidays, and on Fast Days. In the Ashkenazic tradition, it begins on the Saturday night before Rosh Hashanah. If, however, the first day of Rosh Hashanah falls on Monday or Tuesday, Selichot are said beginning the Saturday night prior to ensure that Selichot are recited at least four times.',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Tu B\'Av',
            'description' => 'Minor Jewish holiday. In modern-day Israel, it is celebrated as a holiday of love, similar to Valentine\'s Day. It has been said to be a "great day for weddings".',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Tzom Gedaliah',
            'description' => 'Minor fast.',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Asara B\'Tevet',
            'description' => 'Minor fast.',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Ta\'anit Esther',
            'description' => 'Minor fast',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Ta\'anit Bechorot',
            'description' => 'Minor fas.t',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Tzom Tammuz',
            'description' => 'Minor fast.',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Yom HaShoah',
            'description' => 'Yom HaShoah',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Yom HaZikaron',
            'description' => 'Yom HaZikaron',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Yom HaAtzma\'ut',
            'description' => 'Yom HaAtzma\'ut',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Yom Yerushalayim',
            'description' => 'Yom Yerushalayim',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shabbat Shuva',
            'description' => 'Shabbat Shuva',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shabbat Shekalim',
            'description' => 'Shabbat Shekalim',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shabbat Zachor',
            'description' => 'Shabbat Zachor',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shabbat Parah',
            'description' => 'Shabbat Parah',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shabbat HaChodesh',
            'description' => 'Shabbat HaChodesh',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shabbat HaGadol',
            'description' => 'Shabbat HaGadol',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shabbat Chazon',
            'description' => 'Shabbat Chazon',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shabbat Nachamu',
            'description' => 'Shabbat Nachamu',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shabbat Rosh Chodesh',
            'description' => 'Shabbat Machar Chodesh',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Shabbat Machar Chodesh',
            'description' => 'When Shabbat falls the day before Rosh Chodesh.',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Cheshvan',
            'description' => 'Rosh Chodesh Cheshvan',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Kislev',
            'description' => 'Rosh Chodesh Kislev',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Tevet',
            'description' => 'Rosh Chodesh Tevet',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Sh\'vat',
            'description' => 'Rosh Chodesh Sh\'vat',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Adar',
            'description' => 'Rosh Chodesh Adar',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Adar II',
            'description' => 'Rosh Chodesh Adar II',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Nisan',
            'description' => 'Rosh Chodesh Nisan',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Iyyar',
            'description' => 'Rosh Chodesh Iyyar',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Sivan',
            'description' => 'Rosh Chodesh Sivan',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Tamuz',
            'description' => 'Rosh Chodesh Tamuz',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Av',
            'description' => 'Rosh Chodesh Av',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_holiday::create([
            'title'       => 'Rosh Chodesh Elul',
            'description' => 'Rosh Chodesh Elul',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);


        /**
         * lookup_servicetimes_servicetypes Table
         */
        Lookup_servicetimes_servicetype::create([
            'title'       => 'Shacharit',
            'description' => 'Shacharit',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_servicetype::create([
            'title'       => 'Mincha',
            'description' => 'Mincha',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_servicetype::create([
            'title'       => 'Ma\'ariv',
            'description' => 'Ma\'ariv',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_servicetype::create([
            'title'       => 'Kol Nidre',
            'description' => 'Kol Nidre',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);

        Lookup_servicetimes_servicetype::create([
            'title'       => 'Neilah',
            'description' => 'Neilah',
            'enabled'     => 1,
            'created_at'  => new DateTime,
            'created_by'  => 1,
            'updated_at'  => new DateTime,
            'updated_by'  => 1,
        ]);
    }
}