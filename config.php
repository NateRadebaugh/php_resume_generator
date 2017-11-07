<?php
$name = 'Nathan T Radebaugh';
$address = null;
$phone = '530-628-3723 (mobile)';
$email = 'nate.radebaugh@outlook.com';
$website = "www.naterad.com";

$objective = null;
//$objective = 'To obtain a full-time position within the field of software engineering.';
$important = 'full-time';

$shown_gpa_type = 'Cumulative';
$shown_gpa = '3.71';
$maximum_gpa = '4.00';

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

# activities
define('CLUB_NAME', 0);
define('CLUB_POSITION', 1);
define('PARTICIPATION_DATES', 2);
define('CLUB_DESCRIPTION_ARRAY', 3);

# side projects
define('PROJECT_DATES', 0);
define('PROJECT_DESCRIPTION_ARRAY', 1);


# skills
$resume_data['skills']['*display'] = 'Software Skills';
$resume_data['skills']['skills'] = array(
    'Windows, Mac, Linux, Android, Windows Phone',
    'Git, and SVN',
    'PowerShell, Bash, Ruby, Python, and Perl',
    'HTML, CSS, Angular, React, PHP, and My/MSSQL',
    'C, C++, CX, C#, and Java using Object Oriented Programming',
    'MVC and MVVM patterns'
);


# experience
$resume_data['experience']['*display'] = 'Work Experience';
$resume_data['experience']['Staff Consultant'] = array(
    'SWC Technology Partners',
    'Oak Brook, IL',
    'May 2017 - Present',
    array(
        'Working with clients on large projects of scale in a variety of technologies including C#, .NET MVC, and MSSQL.'
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
        //'Worked on Microsoft Wallet app, shipping in Windows Phone 8 and 8.1.',
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
        'Wrote tools using Batch, Perl, Visual C++, and the MFC framework to automate running tests, generating regression reports, and sending email reports.',
        //'Wrote PHP and C++ scripts to streamline the creation and maintenance of Call Flow Analysis log parser tools.',
        //'Performed low level struct analysis and alignment, resulting in smaller data packets and faster data transfer speeds.',
        //'Wrote Ruby scripts to analyze header files and automatically refactor and decouple header files, significantly decreasing compile times.'
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

/*
$resume_data['experience']['Senior Computer Consultant'] = array(
    'Purdue ResNet',
    'West Lafayette, IN',
    'Fall 2010 - Spring 2012',
    array(
        'Supervised Purdue Campus Internet (ResNet) Employees in call center and development roles.',
        'Active role in the interviewing, hiring, and training of new employees.',
        'Provided telephone and onsite support for over 10,000 users.'
    )
);

$resume_data['experience']['Computer Consultant'] = array(
	'Purdue ResNet',
	'West Lafayette, IN',
	'Fall 2009 - Spring 2010',
	array(
		'Provided telephone and onsite support for over 10,000 ResNet internet users.'
	)
);

$resume_data['experience']['Web Designer'] = array(
	'The Perfect Pastry',
	'Allison Park, PA',
	'2009',
	array(
		'Worked with a client to create a website for a local bakery using HTML, CSS, JavaScript, and PHP.'
	)
);
//*/


# education
$resume_data['education']['*display'] = 'Education';
$resume_data['education']['Computer Science, concentration in Software Engineering and Programming Languages'] = array(
    'B.S.',
    'Purdue University',
    'West Lafayette, IN',
    'May 2013'
);
$resume_data['education']['Religious Studies'] = array(
    'Minor'
);


# related courses
$resume_data['related courses']['*display'] = 'Related Courses';
$resume_data['related courses'] = array(
    'Data Structures and Algorithms: A-',
    'Programming Languages: B',

    'Concurrent Programming in Java: A',
    'Compilers: A+',

    'Software Testing: A',
    'Software Engineering: A',

    'Web Information Retrieval and Management: A+',
    'Computer Networks: A',
);

# side projects
// $resume_data['side projects']['*display'] = 'Side Projects';
// $resume_data['side projects']['Web App - FoodCents'] = array(
//     '2016 - Present',
//     array(
//         'Created web app for smarter meal planning using MySQL/CodeIgniter PHP MVC framework/JQuery/Bootstrap/Mustache templates.',
//         'Currently porting to use Angular and MongoDB front end.'
//     )
// );
// $resume_data['side projects']['Windows Phone Game - FarkleFun'] = array(
//     '2013',
//     array(
//     )
// );
// $resume_data['side projects']['Android Game - FarkleFun Free!'] = array(
//     '2013',
//     array(
//     )
// );
// $resume_data['side projects']['Android Widget - What\'s Today Calendar Widget'] = array(
//     '2010',
//     array(
//     )
// );
