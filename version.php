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

function local_fooplug_ci_helper($default) {
    $result = $default;
    if (during_initial_install()) {
        require($CFG->dirroot . '/version.php');
        $currentbranch = (int)$branch;
    } else {
        $currentbranch = (int)$CFG->branch;
    }
    if ($currentbranch > 32) {
        $result = 2088052300;
    }

    return $result;
}

/** @var stdClass $plugin */
$plugin->version   = 2018012500;
$plugin->requires  = local_fooplug_ci_helper(2016052300); // Requires this Moodle version (3.1.0).
$plugin->component = 'local_fooplug';
$plugin->release   = "1 (Build: {$plugin->version})";
$plugin->maturity  = MATURITY_STABLE;
