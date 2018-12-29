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
define('DEGREE_NAME', 0);
define('DEGREE_TYPE', 1);
define('SCHOOL_NAME', 2);
define('SCHOOL_LOCATION', 3);
define('GRADUATION_DATE', 4);

# experience
define('POSITION_NAME', 0);
define('COMPANY_NAME', 1);
define('COMPANY_LOCATION', 2);
define('EMPLOYMENT_DATES', 3);
define('EMPLOYMENT_DETAILS_ARRAY', 4);


# skills
$resume_data['skills']['*display'] = 'Software Skills';
$resume_data['skills']['skills'] = array(
    'React, HTML, CSS, Angular, PHP, and SQL',
    'C#, Java, and C/C++/CX',
    'Git, and SVN',
);


# experience
$resume_data['experience']['*display'] = 'Work Experience';
$resume_data['experience'][] = array(
    'Senior Consultant',
    'SWC Technology Partners',
    'Oak Brook, IL',
    'December 2018 - Present',
    array(
        'Technical lead on multiple client projects at a time.',
        'Project planning and delegation for a variety of enterprise web products using .NET MVC, Java Spring, MSSQL/Oracle.',
        'Writing front ends using a mixture of JQuery and React.'
    )
);

$resume_data['experience'][] = array(
    'Staff Consultant',
    'SWC Technology Partners',
    'Oak Brook, IL',
    'May 2017 - December 2018',
    array(
        'Worked with clients on large scale enterprise web products in a variety of technologies including .NET MVC and Java Spring Boot.'
    )
);

$resume_data['experience'][] = array(
    'Software Development Engineer II',
    'Microsoft',
    'Redmond, WA',
    'December 2015 - May 2017',
    array(
        'Worked with a team of about 20 developers to rearchitect how Windows UI is created for different products (Phone, Desktop, etc.) Led architectural decisions for componentization of Windows for future shells, mentoring new team members.',
        'Became subject matter expert at XAML UI markup and efficient data binding through the MVVM pattern. Led team through decisions about performance and memory optimizations and improvements in back end and front end.'
    )
);
$resume_data['experience'][] = array(
    'Software Development Engineer',
    'Microsoft',
    'Redmond, WA',
    'August 2013 - December 2015',
    array(
        'Implemented home page of Cortana app including personalized welcome text and help tips UI.',
        'Owned the first-run experience, configuration, and virtual touchpad application for a new "Desktop-like" experience on Windows Phones.'
    )
);
$resume_data['experience'][] = array(
    'Intern',
    'Microsoft',
    'Redmond, WA',
    'Summer 2012',
    array(
        'Worked the Microsoft Wallet team, within Windows Phone division. Ported barcode generation functionality from Microsoft Office apps to be available to apps on Windows Phone.'
    )
);
$resume_data['experience'][] = array(
    'Intern',
    'Qualcomm',
    'San Diego, CA',
    'Summer 2011',
    array(
        'Wrote tools using Batch, Perl, Visual C++, and the MFC framework to automate running tests, generating regression reports, and sending email reports.'
    )
);
$resume_data['experience'][] = array(
    'Senior Software Developer',
    'Purdue University ResNet',
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
$resume_data['education'][] = array(
    'Computer Science, concentrations in Software Engineering and Programming Languages',
    'B.S.',
    'Purdue University',
    'West Lafayette, IN',
    'May 2013'
);