<?php
$name = 'Nate Radebaugh';
$address = null;
$phone = '530-628-3723 (mobile)';
$email = 'nate.radebaugh@outlook.com';
$website = "www.naterad.com";

$objective = null;
//$objective = 'To obtain a full-time position within the field of software engineering.';
$important = 'full-time';

# education
define('DEGREE_TYPE', 0);
define('SCHOOL_NAME', 1);
define('SCHOOL_LOCATION', 2);
define('GRADUATION_DATE', 3);

# experience
define('COMPANY_NAME', 0);
define('COMPANY_LOCATION', 1);
define('EMPLOYMENT_DATES', 2);
define('EMPLOYMENT_DETAILS_ARRAY', 3);


# skills
$resume_data['skills']['*display'] = 'Software Skills';
$resume_data['skills']['skills'] = array(
    'Git, and SVN',
    'HTML, CSS, Angular, React, PHP, and SQL',
    'C/C++/CX/C#, and Java'
);


# experience
$resume_data['experience']['*display'] = 'Work Experience';
$resume_data['experience']['Staff Consultant'] = array(
    'SWC Technology Partners',
    'Oak Brook, IL',
    'May 2017 - Present',
    array(
        'Working with clients on web projects of scale in a variety of technologies including .NET MVC and Java Spring Boot.'
    )
);

$resume_data['experience']['Software Development Engineer II'] = array(
    'Microsoft',
    'Redmond, WA',
    'December 2015 - May 2017',
    array(
        'Worked with a team of about 20 developers to rearchitect how Windows UI is created for different products (Phone, Desktop, etc.)',
        'Led architectural decisions for componentization of Windows for future shells, mentoring Jr. team members. Met with specific owners and led inventory, consolidation, and forward planning of individual components of Windows UI, including taskbar, navigation bar, action center, etc.',
        'Became subject matter expert at XAML UI markup and efficient data binding through the MVVM pattern. Led team through decisions about performance and memory optimizations and improvements in back end and front end.'
    )
);
$resume_data['experience']['Software Development Engineer'] = array(
    'Microsoft',
    'Redmond, WA',
    'August 2013 - December 2015',
    array(
        'Implemented home page of Cortana app including personalized welcome text and help tips UI.',
        'Extended phone functionality and experiences for a large external display, providing a "Desktop-like" experience when connecting a phone to a TV/keyboard/mouse.',
        'Owned the first-run experience, configuration, and virtual touchpad application for this new "Desktop-like" experience on Windows Phones.'
    )
);
$resume_data['experience']['Software Development Engineer Intern'] = array(
    'Microsoft',
    'Redmond, WA',
    'May 2012 - July 2012',
    array(
        'Worked the Microsoft Wallet team, within Windows Phone division. Ported barcode generation functionality from Microsoft Office apps to be available to apps on Windows Phone.'
    )
);
$resume_data['experience']['Interim Engineering Intern'] = array(
    'Qualcomm',
    'San Diego, CA',
    'May 2011 - August 2011',
    array(
        'Wrote tools using Batch, Perl, Visual C++, and the MFC framework to automate running tests, generating regression reports, and sending email reports.'
    )
);
$resume_data['experience']['Senior Software Developer'] = array(
    'Purdue ResNet',
    'West Lafayette, IN',
    'Fall 2010 - Spring 2013',
    array(
        'Led a team of 8 student developers in the development and maintenance of a PHP/MySQL driven management tool using the open source PHP MVC framework FuelPHP and open source Bootstrap, including Perl scripts to help monitor data usage across the network.',
        'Administered multiple Linux web and database servers used for development, test, and production environments.',
        'Active role in interviewing, hiring, and training of new employees.'
    )
);

# education
$resume_data['education']['*display'] = 'Education';
$resume_data['education']['Computer Science, concentrations in Software Engineering and Programming Languages'] = array(
    'B.S.',
    'Purdue University',
    'West Lafayette, IN',
    'May 2013'
);