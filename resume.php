<?php
ob_start();

$name = 'Nathan T Radebaugh';
$address = 'Hillenbrand Hall, Mailbox #696<br />
1301 Third Street Dr.<br />
West Lafayette, IN 47906';
$phone = '530-628-3723 (mobile)';
$email = 'nate.radebaugh@gmail.com';
$website = "www.naterad.com";

$objective = 'To obtain a summer internship position within the field of software engineering.';
$important = 'internship';

$cumulativeGpa = '3.71';
$maximumGpa = '4.00';



# skills
$resumeData['computer skills'] = array(
	'Windows, Mac, Unix, and Android',
	'SVN, Git, and Perforce',
	'Batch, Bash, Ruby, and Perl',
	'HTML, CSS, JavaScript, PHP, and MySQL',
	'C, C++, and Java using Object Oriented Programming'
);




# experience
$resumeData['experience']['Interim Engineering Intern'] = array(
	'Qualcomm, Inc.',
	'San Diego, CA',
	'May 2011 - August 2011',
	array(
		'Wrote tools using Batch, Perl, Visual C++ and the MFC framework to automate the running of tests on an external server, generate regression reports, and send out emails, resulting in an over 705% increase in test productivity.',
		'Wrote PHP and C++ scripts to streamline the creation and maintenance of Call Flow Analysis log parser tools.',
		'Performed low level structure analysis and alignment, resulting in smaller data packets and faster data transfer speeds.',
		'Wrote Ruby scripts to analyze header files and automatically refactor and decouple header files, significantly decreasing compile times.'
	)
);
$resumeData['experience']['Senior Computer Consultant'] = array(
	'Purdue ResNet',
	'West Lafayette, IN',
	'Fall 2010 - Present',
	array(
		'Supervised ResNet Employees',
		'Active role in the interviewing, hiring, and training of new employees'
	)
);
$resumeData['experience']['Software Developer'] = array(
	'Purdue ResNet',
	'West Lafayette, IN',
	'Spring 2010 - Present',
	array(
		'Led a team of eight student developers in the development and maintenance of a PHP/MySQL driven management tool using the open source PHP Framework FuelPHP.',
		'Developed PHP and Perl scripts to help monitor usage across the network.',
		'Administered multiple Linux web and database servers used for development and production environments.'
	)
);
$resumeData['experience']['Computer Consultant'] = array(
	'Purdue ResNet',
	'West Lafayette, IN',
	'Fall 2009 - Spring 2010',
	array(
		'Provided telephone and onsite support for over 10,000 ResNet internet users'
	)
);
$resumeData['experience']['Web Designer'] = array(
	'The Perfect Pastry',
	'Allison Park, PA',
	'2009',
	array(
		'Worked with a client to create a website for a local bakery using HTML, CSS, JavaScript, and PHP.'
	)
);


# education
$resumeData['education']['Computer Science, concentration in Software Engineering and Programming Languages'] = array(
	'B.S.',
	'Purdue University',
	'West Lafayette, IN',
	'May 2013 (expected)'
);
$resumeData['education']['Mathematics'] = array(
	'Minor'
);
$resumeData['education']['Religious Studies'] = array(
	'Minor'
);


# related courses
$resumeData['related courses'] = array(
	'Operating Systems',
	'Software Engineering',
	'Web Information Retrieval and Management',
	'Systems Programming : A',
	'Computer Architecture : B',
	'Data Structures and Algorithms : A-',
	'Foundations of Computer Science (Discrete Mathematics) : B',
	'Concurrent Programming in Java : A'
);


# activities
$resumeData['activities'][] = array(
	'Latin and Ballroom Dance Club',
	'',
	'Fall 2010 - Spring 2011'
);
$resumeData['activities'][] = array(
	'Purdue Lutheran Ministry',
	'VP of Worship and Service',
	'Spring 2010 - Present'
);
$resumeData['activities'][] = array(
	'Fencing Club',
	'',
	'Fall 2009'
);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>Resume for <?php echo $name; ?></title>
<style type="text/css">
	table, html {
		font-size : 90%;  
		font-family : "Helvetica Neue", Arial;
	}
	table {
		width : 100%;
	}
	*, table td {
		vertical-align : top;
	}
	td {
		padding : 1 0 0 0;
		width : 300px;
	}
	td:first-child {
		text-align : left;
	}
	td:last-child {
		text-align : right;
		white-space : nowrap;
	}
	.first {
		width : 500px !important;
	}
	p, ul, ul li {
		margin : 0;
		padding : 0;
	}
	ul {
		margin-left : 20px;
		text-align : left;
		white-space : normal;
	}
	br {
		clear : both;
	}
	.label, .content {
		margin-top : 10px;
		float : left;
	}
	.label {
		clear : left;
		font-weight : bold;
		width : 1.5in;
	}
	.content {
		width : 6.5in;
		clear : right;
	}
	#name {
		font-size : 3em;
		font-weight : bold;
		display : inline-block;
	}
	#contact {
		display : inline-block;
		float : right;
		text-align : right;
	}
	#wrapper {
		width : 8in;
	}
</style>
</head>
<body>
<div id="wrapper">
<div>
	<div id="name"><?php echo $name; ?></div>
	<div id="contact">
	<?php echo $address; ?><br />
	<?php echo $phone; ?><br />      
	<?php echo $email; ?><br />
	<?php echo $website; ?>
	</div>
</div>
	<br />
	
	<div class="label">Objective:</div>
	<div class="content">
	<?php echo str_replace($important,'<strong class="highlight">'.$important.'</strong>',$objective); ?>
	</div>
	<div class="label">Software Skills:</div>
	<div class="content">
	<?php
	foreach ($resumeData['computer skills'] as $skill){
	    echo $skill.'. ';
	}
	?>
	</div>
	<div class="label">Education:</div>
	<div class="content">
	<?php
	foreach ($resumeData['education'] as $category => $information){
		$degree_type = 0;
		$school_name = 1;
		$school_location = 2;
		$grad_date = 3;
	?>
		<table><tbody>
			<?php if ( empty($information[$school_name]) === false && empty($information[$school_location]) === false && empty($information[$grad_date]) === false){ ?>
			<tr>
				<td style="width:90%"><strong><?php echo $information[$school_name];?></strong>, <?php echo $information[$school_location]; ?></td>
				<td><?php echo $information[$grad_date]; ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="2" style="text-align:left"><?php echo $information[$degree_type];?>, <i><?php echo $category; ?></i></td>
			</tr>
		</tbody></table>
	<?php
	}
	?>
	</div>
	<div class="label">Related Courses:</div>
	<div class="content">
	<table><tbody>
	<?php
	$numCourses = count($resumeData['related courses']);
	for ($i=0;$i<$numCourses;$i++){
		if (!($i % 2))
		{
			echo '<tr>';
		}
	?>
		<td style="text-align:left"><?php echo $resumeData['related courses'][$i]; ?></td>
	<?php
		if ($i % 2)
		{
			echo '</tr>';
		}
	}
	?>
	</tbody></table>
	<strong style="display:inline-block;margin-top:0.25em">Cumulative GPA: <?php echo $cumulativeGpa; ?> / <?php echo $maximumGpa; ?></strong>
	</div>
	<div class="label">Work Experience:</div>
	<div class="content">
	<?php foreach ($resumeData['experience'] as $category => $information)
	{
		$company = 0;
		$location = 1;
		$dates = 2;
		$details = 3;
	?>
		<div style="padding-bottom : 0.25em"><strong><?php echo $information[$company];?></strong>, <?php echo $information[$location];?><span style="float:right"><?php echo $information[$dates];?></span><br /><span style="font-style: italic"><?php echo $category;?></span></div>
		<?php if (count($information[$details]) > 0){ ?>
		<ul style="padding-bottom : 0.5em">
			<?php foreach ($information[$details] as $detail){ ?>
				<li><?php echo $detail; ?></li>
			<?php } ?>
		</ul>
		<?php } ?>
		</tr>
	<?php } ?>
	</div>
	<div class="label">Activities:</div>
	<div class="content">
	<table><tbody>      
	<?php
	foreach ($resumeData['activities'] as $array)
	{
		$club = 0;
		$position = 1;
		$dates = 2;
	?>
	<tr>
		<td><strong><?php echo $array[$club];?></strong></td>
		<td style="text-align : center"><?php echo $array[$position];?></td>
		<td><?php echo $array[$dates];?></td>
	</tr>
	<?php
	}
	?>
	</tbody></table>
	</div>
</div>
</body>
</html>
<?php
$resumeHtml = ob_get_contents();
ob_end_flush();

$fh = fopen('resume.html','w') or die('can\'t open resume.html for writing');
fwrite($fh,$resumeHtml);
fclose($fh);
?>




