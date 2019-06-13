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
 * Atto text editor integration version file.
 *
 * @package    atto_applink
 * @copyright  2019 Dani Palou <dani@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Initialise this plugin
 * @param string $elementid
 */
function atto_applink_strings_for_js() {
    global $PAGE;

    $PAGE->requires->strings_for_js(array('createlink',
                                          'enterurl',
                                          'openinnewwindow',
                                          'openinapp',
                                          'urlscheme',
                                          'addusername',
                                          'username',
                                          'browserepositories'),
                                    'atto_applink');
}

/**
 * Sends the parameters to the JS module.
 *
 * @return array
 */
function atto_applink_params_for_js() {
    global $OUTPUT;

    $params = [
        'help' => [
            'urlscheme' => $OUTPUT->help_icon('urlscheme', 'atto_applink'),
            'username' => $OUTPUT->help_icon('username', 'atto_applink')
        ]
    ];

    return $params;
}