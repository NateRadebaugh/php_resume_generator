<?php
ob_start();

$name = ucwords('Nathan T Radebaugh');
$address = strtoupper('3843 ridgeway dr<br>allison park pa 15101');
$phone = '412-225-5185';
$email = strtolower('nradebau@cs.purdue.edu');

$objective = 'To obtain a summer internship position at a company in the field of computer science.';
$important = 'internship';

$cumulativeGpa = '3.71';



# skills
$resumeData['computer skills'][] = 'Windows, Mac, Unix, and Android';
$resumeData['computer skills'][] = 'HTML, CSS, JavaScript, PHP, and MySQL';
$resumeData['computer skills'][] = 'Batch, Bash, Ruby, and Perl';
$resumeData['computer skills'][] = 'C, C++, Java using Object Oriented Programming';




# experience
$resumeData['experience']['Interim Engineering Intern'] = array(
	'Qualcomm, Inc.',
	'San Diego, CA',
	'May 2011 - August 2011',
	array(
		'TD-SCDMA Team',
		'Wrote tools to automate tests and increase productivity',
		'Worked on Call Flow Analysis tools'
	)
);
$resumeData['experience']['Senior Computer Consultant'] = array(
	'Purdue ResNet Services',
	'West Lafayette, IN',
	'Fall 2010 - Present',
	array('Manager')
);
$resumeData['experience']['Software Developer'] = array(
	'Purdue ResNet Services',
	'West Lafayette, IN',
	'Spring 2010 - Present',
	array(
		'Database Administrator',
		'Web Developer'
	)
);
$resumeData['experience']['Computer Consultant'] = array(
	'Purdue ResNet Services',
	'West Lafayette, IN',
	'Fall 2009 - Spring 2010'
);
$resumeData['experience']['Web Designer'] = array(
	'The Perfect Pastry',
	'Allison Park, PA',
	'2009'
);


# education
$resumeData['education']['Computer Science'] = array(
	'Bachelor of Science',
	'Purdue University',
	'West Lafayette, IN',
	'2013'
);
$resumeData['education']['Mathematics'] = array(
	'Minor',
	'Purdue University',
	'West Lafayette, IN',
	'2013'
);
$resumeData['education']['Religious Studies'] = array(
	'Minor',
	'Purdue University',
	'West Lafayette, IN',
	'2013'
);


# related courses
//$resumeData['related courses'][] = 'Calculus I, II, III. Linear Algebra';
$resumeData['related courses'][] = 'System Programming';
$resumeData['related courses'][] = 'Computer Architecture';
$resumeData['related courses'][] = 'Data Structures and Algorithms';
$resumeData['related courses'][] = 'Foundations of Computer Science (Discrete Mathematics)';
$resumeData['related courses'][] = 'Concurrent Programming in Java';
//$resumeData['related courses'][] = 'Philosophy of Religion, Introduction to the Study of Religion, Religions of the East, Religions of the West';


# activities
$resumeData['activities'][] = array(
	'Latin and Ballroom Dance Club',
	'',
	'Fall 2010 - Spring 2011'
);
$resumeData['activities'][] = array(
	'Purdue Lutheran Ministry',
	'Vice President of Worship and Service',
	'Spring 2010 - Fall 2010'
);
$resumeData['activities'][] = array(
	'Fencing Club',
	'',
	'Fall 2009'
);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html style="font-family:Arial"><head><meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>Resume for <?php echo $name; ?></title>
<style type="text/css">
	table, html {
		font-size : 90%;
	}
	table {
		width : 100%;
	}
	table td {
		vertical-align : top;
	}
	td {
		padding : 5 0 0 0;
		width : 300px;
	}
	.first {
		width : 400px !important;
	}
	p, ul, ul li {
		margin : 0;
		padding : 0;
	}
	ul {
		margin-left : 30px;
	}
	hr {
		margin : 5px 0 5px 0;
		border:1px solid #999;
	}
</style>
</head>
<body>
<table><tbody>
<tr><td style="text-align:left;vertical-align:middle"><strong><font size="+2"><?php echo $name; ?></font></strong></td><td style="text-align:right">
<strong>
<?php echo $address; ?><br />
<?php echo $phone; ?><br>
<?php echo $email; ?></strong></td></tr></tbody></table>
<hr>
<p><strong>OBJECTIVE</strong></p>
<p><?php
echo str_replace($important,'<strong>'.$important.'</strong>',$objective);
?></p>
<center><strong>COMPUTER SKILLS</strong><br></center>
<ul style="list-style:none">
<?php
foreach ($resumeData['computer skills'] as $skill){
	echo '<li>',$skill,'.</li>',"\n";
}
?>
</ul>
<hr>
<center><strong>EXPERIENCE</strong><br></center>
<table><tbody>
<?php
foreach ($resumeData['experience'] as $category => $information){
	echo
	'<tr>',"\n",
	'<td class="first"><strong>',$category,'</strong>',"\n";
	if (isset($information[3])&&count($information[3])>0){
		echo '<ul>',"\n";
		foreach ($information[3] as $description){
			echo '<li>',$description,'</li>',"\n";
		}
		echo '</ul>';
	}
	echo
	'</td>',"\n",
	'<td>',$information[0],'</td>',
	'<td>',$information[1],'</td>',
	'<td style="text-align:right">',$information[2],'</td>',
	'</tr>';
}
?>
</tbody></table>
<hr>
<center><strong>EDUCATION</strong></center>
<table><tbody>
<?php
foreach ($resumeData['education'] as $category => $information){
	echo '<tr>',"\n",
	'<td style="width:90%">',
	'<strong>',$information[0],' in <big>',$category,'</big>,</strong> ',
	$information[1],', ',$information[2],'</td>',
	'<td style="text-align:right">',$information[3],'</td>',
	'</tr>';
}
?>
<tr><td>	
<strong>Cumulative GPA: <big><?php echo $cumulativeGpa; ?> / 4.00</big></strong>
</td></tr>
</tbody></table>
<hr>
<center><strong>RELATED COURSES</strong></center>
<ul style="list-style:none">
<?php
$numCourses = count($resumeData['related courses']);
for ($i=0;$i<$numCourses;$i++){
	echo '<li>',$resumeData['related courses'][$i];
	echo ($i<($numCourses-1))?',':'.';
	echo '</li>',"\n";
}
?>
</ul>
<hr>
<center><strong>ACTIVITIES</strong></center>
<table><tbody>
<?php
foreach ($resumeData['activities'] as $array){
	echo
	'<tr>',"\n",
		'<td><strong>',$array[0],'</strong></td>',"\n",
		'<td>',$array[1],'</td>',"\n",
		'<td style="text-align:right">',$array[2],'</td>',"\n",
	'</tr>',"\n";
}
?>
</tbody></table>
</body>
</html>
<?php
$resumeHtml = ob_get_contents();
ob_end_flush();

$fh = fopen('resume.html','w') or die('can\'t open resume.html for writing');
fwrite($fh,$resumeHtml);
fclose($fh);
?>






