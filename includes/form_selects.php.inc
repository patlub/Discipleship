<?php
/**
 * Created by PhpStorm.
 * User: PATRICK
 * Date: 7/21/2016
 * Time: 12:03 PM
 */

function sex_select(Disciple $disciple)
{
    if ($disciple->get_sex() == 'Male') {
        ?>
        <option value="Male" selected>Male</option>
        <option value="Female">Female</option>
    <?php } else { ?>
        <option value="Male">Male</option>
        <option value="Female" selected>Female</option>
    <?php
    }
}

function marital_select(Disciple $disciple)
{

    if ($disciple->get_marital_status() == 'Married') {
        ?>
        <option value="Married" selected>Married</option>
        <option value="Engaged">Engaged</option>
        <option value="Single">Single</option>
    <?php } else if ($disciple->get_marital_status() == 'Engaged') { ?>
        <option value="Married">Married</option>
        <option value="Engaged" selected>Engaged</option>
        <option value="Single">Single</option>
    <?php } else { ?>
        <option value="Married">Married</option>
        <option value="Engaged">Engaged</option>
        <option value="Single" selected>Single</option>
    <?php
    }
}

function member_select(Disciple $disciple)
{

    if ($disciple->get_member_status() == 'Yes') {
        ?>
        <option value="Yes" selected>Yes</option>
        <option value="No">No</option>
    <?php } else { ?>
        <option value="Yes">Yes</option>
        <option value="No" selected>No</option>
    <?php
    }
}

function submitted_select(Disciple $disciple)
{
    if ($disciple->get_submit_status() == 'Yes') {
        ?>
        <option value="Yes" selected>Yes</option>
        <option value="No">No</option>
    <?php } else { ?>
        <option value="Yes">Yes</option>
        <option value="No" selected>No</option>
    <?php
    }
}

function submit_select(Disciple $disciple)
{
    if ($disciple->get_want_submit() == 'Yes') {
        ?>
        <option value="Yes" selected>Yes</option>
        <option value="No">No</option>
    <?php } else { ?>
        <option value="Yes">Yes</option>
        <option value="No" selected>No</option>
    <?php
    }
}

function minister_select(Disciple $disciple)
{
    if ($disciple->get_minister() == 'Yes') {
        ?>
        <option value="Yes" selected>Yes</option>
        <option value="No">No</option>
    <?php } else { ?>
        <option value="Yes">Yes</option>
        <option value="No" selected>No</option>
    <?php
    }

}

function ministry_select(Disciple $disciple)
{
    if ($disciple->get_join_ministry() == 'Yes') {
        ?>
        <option value="Yes" selected>Yes</option>
        <option value="No">No</option>
    <?php } else { ?>
        <option value="Yes">Yes</option>
        <option value="No" selected>No</option>
    <?php
    }
}

?>