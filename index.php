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

require('../../config.php');

require_login();

$PAGE->set_url('/local/fooplug/index.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_title('Title');
$PAGE->set_heading('Heading');

echo $OUTPUT->header();

$fs = get_file_storage();
$files = $fs->get_area_files($PAGE->context->id, 'local_fooplug', 'filearea');
foreach ($files as $file) {
    if ($file->is_valid_image()) {
        $url = moodle_url::make_pluginfile_url(
            $file->get_contextid(),
            $file->get_component(),
            $file->get_filearea(),
            $file->get_itemid(),
            $file->get_filepath(),
            $file->get_filename()
        );
        echo html_writer::img($url->out(false), 'This is my image!!!');
    }
}


echo $OUTPUT->footer();
