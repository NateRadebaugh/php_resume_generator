<?php
$name = 'Nathan T Radebaugh';
$address = 'Currently interning at Microsoft<br>
4306 156th Ave. NE DD116<br>
Redmond, WA 98052
';
/*$address = 'Hillenbrand Hall, Mailbox #696<br>
1301 Third Street Dr.<br>
West Lafayette, IN 47906';*/
$phone = '530-628-3723 (mobile)';
$email = 'nate.radebaugh@gmail.com';
$website = "www.naterad.com";

$objective = 'To obtain a full-time position within the field of software engineering.';
$important = 'full-time';

$shown_gpa_type = 'Cumulative';
$shown_gpa = '3.71';
$maximum_gpa = '4.00';



# skills
$resume_data['skills']['*display'] = 'Software Skills';
$resume_data['skills']['skills'] = array(
	'Windows, Mac, Unix, and Android',
	'SVN, Git, and Perforce',
	'Batch, Bash, Ruby, Python, and Perl',
	'HTML, CSS, JavaScript, PHP, and MySQL',
	'C, C++, and Java using Object Oriented Programming'
);




# experience
$resume_data['experience']['*display'] = 'Work Experience';
$resume_data['experience']['Software Development Engineer Intern'] = array(
	'Microsoft',
	'Redmond, WA',
	'May 2012 - August 2012',
	array(
		'Top Secret work for the Windows Phone Team'
	)
);
$resume_data['experience']['Interim Engineering Intern'] = array(
	'Qualcomm',
	'San Diego, CA',
	'May 2011 - August 2011',
	array(
		'Wrote tools using Batch, Perl, Visual C++ and the MFC framework to automate the running of tests on an external server, generate regression reports, and send out emails, resulting in an over 705% increase in test productivity.',
		'Wrote PHP and C++ scripts to streamline the creation and maintenance of Call Flow Analysis log parser tools.',
		'Performed low level structure analysis and alignment, resulting in smaller data packets and faster data transfer speeds.',
		'Wrote Ruby scripts to analyze header files and automatically refactor and decouple header files, significantly decreasing compile times.'
	)
);
$resume_data['experience']['Senior Software Developer'] = array(
	'Purdue ResNet',
	'West Lafayette, IN',
	'Fall 2010 - Present',
	array(
		'Led a team of eight student developers in the development and maintenance of a PHP/MySQL driven management tool using the open source PHP framework FuelPHP.',
		'Developed PHP and Perl scripts to help monitor usage across the network.',
		'Administered multiple Linux web and database servers used for development and production environments.'
	)
);
$resume_data['experience']['Senior Computer Consultant'] = array(
	'Purdue ResNet',
	'West Lafayette, IN',
	'Fall 2010 - Spring 2012',
	array(
		'Supervised ResNet Employees.',
		'Active role in the interviewing, hiring, and training of new employees.'
	)
);
/*
$resume_data['experience']['Computer Consultant'] = array(
	'Purdue ResNet',
	'West Lafayette, IN',
	'Fall 2009 - Spring 2010',
	array(
		'Provided telephone and onsite support for over 10,000 ResNet internet users.'
	)
);
//*/
$resume_data['experience']['Web Designer'] = array(
	'The Perfect Pastry',
	'Allison Park, PA',
	'2009',
	array(
		'Worked with a client to create a website for a local bakery using HTML, CSS, JavaScript, and PHP.'
	)
);


# education
$resume_data['education']['*display'] = 'Education';
$resume_data['education']['Computer Science, concentration in Software Engineering and Programming Languages'] = array(
	'B.S.',
	'Purdue University',
	'West Lafayette, IN',
	'May 2013 (expected)'
);
$resume_data['education']['Mathematics'] = array(
	'Minor'
);
$resume_data['education']['Religious Studies'] = array(
	'Minor'
);


# related courses
$resume_data['related courses']['*display'] = 'Related Courses';
$resume_data['related courses'] = array(
	'Operating Systems: B',
	'Software Engineering: A',
	'Web Information Retrieval and Management: A+',
	'Systems Programming: A',
	'Computer Architecture: B',
	'Data Structures and Algorithms: A-',
	'Foundations of Computer Science (Discrete Mathematics): B',
	'Concurrent Programming in Java: A'
);


# activities
$resume['activities']['*display'] = 'Activities';
$resume_data['activities'][] = array(
	'Tomahawk Leadership Society',
	'Webmaster',
	'Spring 2011 - Present'
);
$resume_data['activities'][] = array(
	'Purdue Lutheran Ministry',
	'VP of Worship and Service',
	'Spring 2010 - Present'
);
$resume_data['activities'][] = array(
	'Latin and Ballroom Dance Club',
	'',
	'Fall 2010 - Spring 2011'
);
$resume_data['activities'][] = array(
	'Fencing Club',
	'',
	'Fall 2009'
);
