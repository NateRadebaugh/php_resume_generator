<?php
ob_start();
include("config.php");
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
        <title>Resume for <?php echo $name; ?></title>

        <style type="text/css">
            table,
            html {
                font-size: 90%;
                font-family: "Helvetica Neue", Arial;
            }
            table {
                width: 100%;
            }
            *,
            table td {
                vertical-align: top;
            }
            td {
                padding: 1 0 0 0;
                width: 300px;
            }
            td:first-child {
                text-align: left;
            }
            td:last-child {
                text-align: right;
                white-space: nowrap;
            }
            .first {
                width: 500px !important;
            }
            p,
            ul,
            li {
                margin: 0;
                padding: 0;
            }
            ul {
                margin-left: 20px;
                text-align: left;
                white-space: normal;
            }
            br {
                clear: both;
            }
            .label, .content {
                margin-top: 10px;
                float: left;
            }
            .label {
                clear: left;
                font-weight: bold;
                width: 1.5in;
            }
            .content {
                width: 6.5in;
                clear: right;
            }
            #name {
                font-size: 3em;
                font-weight: bold;
                display: inline-block;
            }
            #contact {
                display: inline-block;
                float: right;
                text-align: right;
            }
            #wrapper {
                width: 8in;
            }
            .gpa {
                display: inline-block;
                margin-top: 0.25em;
            }
            .degree-information {
                text-align: left !important;
                padding-left: 1.5em;
            }
            .school-name {
                width: 90%;
            }
            table.related-courses td {
                text-align: left;
            }
            .float-right {
                float: right;
            }
            .employment-header {
                padding-bottom: 0.25em;
            }
            .employment-details {
                padding-bottom: 0.5em;
            }
            table.activities td:nth-child(2) {
                text-align: right;
            }
            table.activities td:nth-child(1) {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <div>
                <div id="name"><?php echo $name; ?></div>
                <div id="contact"><?php
                if (!empty($address)) { ?>
                    <?php echo $address; ?><br>
<?php } ?>

<?php if (!empty($phone)) { ?>
                    <?php echo $phone; ?><br>
<?php } ?>
<?php if (!empty($email)) { ?>
                    <?php echo $email; ?><br>
<?php } ?>
<?php if (!empty($website)) { ?>
                    <?php echo $website; ?><br>
<?php } ?>
                </div>
            </div>
<?php
    if (!empty($objective)) {
        ?>
        <br/>
        <div class="label">Objective:</div>
        <div class="content">
<?php
        if (isset($important)) {
            echo str_replace($important, '<strong>'.$important.'</strong>', $objective);
        } else {
            echo $objective;
        }
        ?>
        </div>
        <?php
    }

    if (!empty($resume_data['skills'])) {
    ?>

            <div class="label"><?php
            if (!empty($resume_data['skills']['*display'])) {
                echo $resume_data['skills']['*display'];
            } else {
                echo 'Skills';
            }

        unset($resume_data['skills']['*display']);
        ?>:</div>
            <div class="content">
<?php foreach ($resume_data['skills']['skills'] as $skill) { ?>
                <?php echo $skill; ?>.
<?php } ?>
            </div>
<?php
    }
    ?>

            <div class="label"><?php
    if (!empty($resume_data['education'])) {
        if (!empty($resume_data['education']['*display'])) {
            echo $resume_data['education']['*display'];
        } else {
            echo 'Education';
        }

        unset($resume_data['education']['*display']);
        ?>:</div>
            <div class="content">
                <table>
                    <tbody>
<?php
foreach ($resume_data['education'] as $category => $information) {
    if (!empty($information[SCHOOL_NAME]) &&
    !empty($information[SCHOOL_LOCATION]) &&
    !empty($information[GRADUATION_DATE])) {
    ?>
                        <tr>
                            <td class="school-name"><strong><?php echo $information[SCHOOL_NAME]; ?></strong>, <?php echo $information[SCHOOL_LOCATION]; ?></td>
                            <td><?php echo $information[GRADUATION_DATE]; ?></td>
                        </tr>
<?php
    }
    ?>
                        <tr>
                            <td colspan="2" class="degree-information">
                                <?php echo $information[DEGREE_TYPE]; ?>, <i><?php echo $category; ?></i>
                            </td>
                        </tr>
<?php
}
        ?>
                    </tbody>
                </table>
            </div>

<?php
    }

    if (count($resume_data) > 0) {
    ?>
            <div class="label"><?php
    if (!empty($resume_data['related courses'])) {
        if (!empty($resume_data['related courses']['*display'])) {
            echo $resume_data['related courses']['*display'];
        } else {
            echo 'Related Courses';
        }
    }

    unset($resume_data['related courses']['*display']);
    ?>:</div>
            <div class="content">
                <table class="related-courses">
                    <tbody>
<?php
                $numCourses = count($resume_data['related courses']);
            for ($i = 0; $i < $numCourses; $i++) {
                if (!($i % 2)) {
                ?>
                        <tr>
<?php } ?>
                            <td><?php echo $resume_data['related courses'][$i]; ?></td>
<?php
if ($i % 2) {
?>
                        </tr>
<?php
}
}
                ?>
                    </tbody>
                </table>
<?php
    if (!empty($shown_gpa) &&
        !empty($maximum_gpa)) {
    ?>
                <strong class="gpa"><?php echo $shown_gpa_type; ?> GPA: <?php echo $shown_gpa; ?> / <?php echo $maximum_gpa; ?></strong>
<?php
    }
    ?>
            </div>
<?php } ?>

<?php if (count($resume_data['experience']) > 0) { ?>
            <div class="label"><?php
        if (!empty($resume_data['experience']['*display'])) {
            echo $resume_data['experience']['*display'];
        } else {
            echo 'Work Experience';
        }

        unset($resume_data['experience']['*display']);
?>:</div>
            <div class="content">
<?php foreach ($resume_data['experience'] as $category => $information) { ?>
                <div class="employment-header">
                    <strong><?php echo $information[COMPANY_NAME]; ?></strong>, <?php echo $information[COMPANY_LOCATION]; ?>

                    <span class="float-right"><?php echo $information[EMPLOYMENT_DATES]; ?></span><br/>
                    <em><?php echo $category; ?></em>
                </div>
<?php if (count($information[EMPLOYMENT_DETAILS_ARRAY]) > 0) { ?>
                <ul class="employment-details">
<?php foreach ($information[EMPLOYMENT_DETAILS_ARRAY] as $detail) { ?>
                    <li><?php echo $detail; ?></li>
<?php } ?>
                </ul>
<?php } ?>
<?php } ?>
            </div>
<?php } ?>

<?php if (!empty($resume_data['side projects']) && count($resume_data['side projects']) > 0) { ?>
            <div class="label"><?php
        if (!empty($resume_data['side projects']['*display'])) {
            echo $resume_data['side projects']['*display'];
        } else {
            echo 'Side Projects';
        }

        unset($resume_data['side projects']['*display']);
?>:</div>
            <div class="content">
<?php foreach ($resume_data['side projects'] as $project_name => $information) { ?>
                <div class="employment-header">
                    <strong><?php echo $project_name; ?></strong>

                    <span class="float-right"><?php echo $information[PROJECT_DATES]; ?></span><br/>
                </div>
<?php if (count($information[PROJECT_DESCRIPTION_ARRAY]) > 0) { ?>
                <ul class="employment-details">
<?php foreach ($information[PROJECT_DESCRIPTION_ARRAY] as $detail) { ?>
                    <li><?php echo $detail; ?></li>
<?php } ?>
                </ul>
<?php } ?>
<?php } ?>
            </div>
<?php } ?>
        </div>
    </body>
</html>
<?php
$resume_html = ob_get_contents();
ob_end_flush();

$fh = fopen('resume.html', 'w') or die('can\'t open resume.html for writing');
fwrite($fh, $resume_html);
fclose($fh);


