<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 *
 * @package    local_fooplug
 * @author     Darko Miletic
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {

    $settings = new admin_settingpage(
        'localfooplug',
        new lang_string('settingstitle', 'local_fooplug')
    );

    $settings->add(
        new admin_setting_configstoredfile(
            'local_fooplug/myimage',
            new lang_string('imagefile', 'local_fooplug'),
            new lang_string('imagefile_desc', 'local_fooplug'),
            'filearea'
        )
    );

    /** @var admin_root $ADMIN */
    $ADMIN->add('localplugins', $settings);
}
