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
 * Event observers used in reservation.
 *
 * @package    mod_reservation
 * @copyright  2015 Wiktor Wandachowicz <wiktor.wandachowicz@p.lodz.pl>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/mod/reservation/lib.php');
require_once($CFG->dirroot.'/mod/reservation/locallib.php');

/**
 * Event observer for mod_reservation.
 */
class mod_reservation_observer {

    /**
     * Triggered via user_enrolment_deleted event.
     *
     * @param \core\event\user_enrolment_deleted $event
     */
    public static function user_enrolment_deleted(\core\event\user_enrolment_deleted $event) {
        $userid = $event->relateduserid;
        $courseid = $event->courseid;
        $time = $event->timecreated;

        reservation_cancel_user_requests($userid, $courseid, $time);
    }

    /**
     * Triggered via user_enrolment_created event.
     *
     * @param \core\event\user_enrolment_created $event
     */
    public static function user_enrolment_created(\core\event\user_enrolment_created $event) {
        $userid = $event->relateduserid;
        $courseid = $event->courseid;
        $time = $event->timecreated;

        reservation_restore_user_requests_grades($userid, $courseid, $time);
    }

}
