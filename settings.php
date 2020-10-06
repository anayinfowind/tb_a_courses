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
 * tb_a_courses block settings
 *
 * @package   block_tb_a_courses
 * @copyright  2020 Leeloo LXP (https://leeloolxp.com)
 * @author     Leeloo LXP <info@leeloolxp.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $name = 'block_tb_a_courses/defaultmaxcourses';
    $title = new lang_string('defaultmaxcourses', 'block_tb_a_courses');
    $description = new lang_string('defaultmaxcoursesdesc', 'block_tb_a_courses');
    $setting = new admin_setting_configtext($name, $title, $description, 10, PARAM_INT);
    $settings->add($setting);

    $name = 'block_tb_a_courses/forcedefaultmaxcourses';
    $title = new lang_string('forcedefaultmaxcourses', 'block_tb_a_courses');
    $description = new lang_string('forcedefaultmaxcoursesdesc', 'block_tb_a_courses');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1, PARAM_INT);
    $settings->add($setting);

    $name = 'block_tb_a_courses/showchildren';
    $title = new lang_string('showchildren', 'block_tb_a_courses');
    $description = new lang_string('showchildrendesc', 'block_tb_a_courses');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1, PARAM_INT);
    $settings->add($setting);

    $name = 'block_tb_a_courses/showwelcomearea';
    $title = new lang_string('showwelcomearea', 'block_tb_a_courses');
    $description = new lang_string('showwelcomeareadesc', 'block_tb_a_courses');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1, PARAM_INT);
    $settings->add($setting);

    $showcategories = array(
        BLOCKS_tb_a_courses_SHOWCATEGORIES_NONE => new lang_string('none', 'block_tb_a_courses'),
        BLOCKS_tb_a_courses_SHOWCATEGORIES_ONLY_PARENT_NAME => new lang_string('onlyparentname', 'block_tb_a_courses'),
        BLOCKS_tb_a_courses_SHOWCATEGORIES_FULL_PATH => new lang_string('fullpath', 'block_tb_a_courses'),
    );

    $name = 'block_tb_a_courses/showcategories';
    $title = new lang_string('showcategories', 'block_tb_a_courses');
    $description = new lang_string('showcategoriesdesc', 'block_tb_a_courses');
    $setting = new admin_setting_configselect($name, $title, $description, BLOCKS_tb_a_courses_SHOWCATEGORIES_NONE, $showcategories);
    $settings->add($setting);

    $name = 'block_tb_a_courses/customsettings';
    $title = new lang_string('customsettings', 'block_tb_a_courses');
    $description = new lang_string('customsettings_desc', 'block_tb_a_courses');
    $setting = new admin_setting_heading($name, $title, $description);
    $settings->add($setting);

    $name = 'block_tb_a_courses/courseimagedefault';
    $title = new lang_string('courseimagedefault', 'block_tb_a_courses');
    $description = new lang_string('courseimagedefault_desc', 'block_tb_a_courses');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'courseimagedefault');
    $settings->add($setting);

    $name = 'block_tb_a_courses/tb_a_courses_bgimage';
    $title = new lang_string('tb_a_courses_bgimage', 'block_tb_a_courses');
    $description = new lang_string('tb_a_courses_bgimage_desc', 'block_tb_a_courses');
    $setting = new admin_setting_configcheckbox($name, $title, $description, BLOCKS_tb_a_courses_IMAGEASBACKGROUND_FALSE);
    $settings->add($setting);

    $settings->add(new admin_setting_configtext('block_tb_a_courses/summary_limit',
        get_string('summary_limit', 'block_tb_a_courses'),
        get_string('summary_limit_desc', 'block_tb_a_courses'), 150, PARAM_INT));

    $name = 'block_tb_a_courses/showteachers';
    $title = new lang_string('showteachers', 'block_tb_a_courses');
    $description = new lang_string('showteachers_desc', 'block_tb_a_courses');
    $setting = new admin_setting_configcheckbox($name, $title, $description, BLOCKS_tb_a_courses_SHOWTEACHERS_NO);
    $settings->add($setting);

    $name = 'block_tb_a_courses/progressenabled';
    $title = new lang_string('progressenabled', 'block_tb_a_courses');
    $description = new lang_string('progressenabled_desc', 'block_tb_a_courses');
    $setting = new admin_setting_configcheckbox($name, $title, $description, BLOCKS_tb_a_courses_SHOWGRADES_NO);
    $settings->add($setting);

    $name = 'block_tb_a_courses/startgrid';
    $title = new lang_string('startgrid', 'block_tb_a_courses');
    $description = new lang_string('startgrid_desc', 'block_tb_a_courses');
    $setting = new admin_setting_configcheckbox($name, $title, $description, BLOCKS_tb_a_courses_STARTGRID_NO);
    $settings->add($setting);
    $name = 'block_tb_a_courses/coursegridwidth';
    $title = new lang_string('coursegridwidth', 'block_tb_a_courses');
    $description = new lang_string('coursegridwidthdesc', 'block_tb_a_courses');
    $setting = new admin_setting_configselect($name, $title, $description, 4, array(
        '12' => new lang_string('fullwidth', 'block_tb_a_courses'),
        '6' => new lang_string('splitwidth', 'block_tb_a_courses'),
        '4' => new lang_string('thirdwidth', 'block_tb_a_courses'),
        '3' => new lang_string('quarterwidth', 'block_tb_a_courses'),
    ));

    $settings->add($setting);
}