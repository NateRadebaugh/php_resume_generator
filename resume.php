<?php
ob_start();
include("config.php");
?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
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
</style>
</head>
<body>
<div id="wrapper">
<div>
	<div id="name"><?php echo $name; ?></div>
	<div id="contact">
	<?php
	if (empty($address) === false):
		echo $address.'<br>'."\n\t";
	endif;

	if (empty($phone) === false):
		echo $phone.'<br>'."\n\t";
	endif;

	if (empty($email) === false):
		echo $email.'<br>'."\n\t";
	endif;

	if (empty($website) === false):
		echo $website;
	endif;
	?>
	</div>
</div>
	<?php
	if (empty($objective) === false):
		?>
		<br />
		<div class="label">Objective:</div>
		<div class="content">
		<?php
		if (isset($important) === true):
			echo str_replace($important, '<strong>'.$important.'</strong>', $objective);
		else:
			echo $objective;
		endif;
		?>
		</div>
		<?php
	endif;

	if (empty($resume_data['skills']) === false): ?>
		<div class="label"><?php
		if (empty($resume_data['skills']['*display']) === false):
			echo $resume_data['skills']['*display'];
		else:
			echo 'Skills';
		endif;
		unset($resume_data['skills']['*display']);
		?>:</div>
		<div class="content">
		<?php
		foreach ($resume_data['skills']['skills'] as $skill):
		    echo $skill.'. ';
		endforeach;
		?>
		</div>
	<?php
	endif;
	?>
	<div class="label"><?php
	if (empty($resume_data['education']) === false):
		if (empty($resume_data['education']['*display']) === false):
			echo $resume_data['education']['*display'];
		else:
			echo 'Education';
		endif;
		unset($resume_data['education']['*display']);
		?>:</div>
		<div class="content">
			<table><tbody>
		<?php
		foreach ($resume_data['education'] as $category => $information):
			$degree_type = 0;
			$school_name = 1;
			$school_location = 2;
			$grad_date = 3;
		?>
				<?php if (empty($information[$school_name]) === false && empty($information[$school_location]) === false && empty($information[$grad_date]) === false): ?>
				<tr>
					<td style="width: 90%"><strong><?php echo $information[$school_name];?></strong>, <?php echo $information[$school_location]; ?></td>
					<td><?php echo $information[$grad_date]; ?></td>
				</tr>
				<?php endif; ?>
				<tr>
					<td colspan="2" style="text-align: left; padding-left: 1.5em"><?php echo $information[$degree_type];?>, <i><?php echo $category; ?></i></td>
				</tr>
		<?php
		endforeach;
		?>
			</tbody></table>
		</div>
		<?php
	endif;

	if (count($resume_data) > 0): ?>
	<div class="label"><?php
	if (empty($resume_data['related courses']) === false)
	if (empty($resume_data['related courses']['*display']) === false):
		echo $resume_data['related courses']['*display'];
	else:
		echo 'Related Courses';
	endif;
	unset($resume_data['related courses']['*display']);
	?>:</div>
	<div class="content">
	<table><tbody>
	<?php
	$numCourses = count($resume_data['related courses']);
	for ($i=0;$i<$numCourses;$i++):
		if (!($i % 2)):
			echo '<tr>';
		endif;
	?>
		<td style="text-align: left"><?php echo $resume_data['related courses'][$i]; ?></td>
	<?php
		if ($i % 2):
			echo '</tr>';
		endif;
	endfor;
	?>
	</tbody></table>
<?php if (empty($shown_gpa) === false && empty($maximum_gpa) === false ): ?>
	<strong style="display: inline-block; margin-top: 0.25em"><?php echo $shown_gpa_type; ?> GPA: <?php echo $shown_gpa; ?> / <?php echo $maximum_gpa; ?></strong>
<?php endif; ?>
	</div>
<?php endif; ?>

<?php if (count($resume_data['experience']) > 0): ?>
	<div class="label"><?php
	if (empty($resume_data['experience']['*display']) === false):
		echo $resume_data['experience']['*display'];
	else:
		echo 'Work Experience';
	endif;
	unset($resume_data['experience']['*display']);
	?>:</div>
	<div class="content">
	<?php foreach ($resume_data['experience'] as $category => $information):
		$company = 0;
		$location = 1;
		$dates = 2;
		$details = 3;
	?>
		<div style="padding-bottom: 0.25em"><strong><?php echo $information[$company];?></strong>, <?php echo $information[$location];?><span style="float:right"><?php echo $information[$dates]; ?></span><br /><span style="font-style: italic"><?php echo $category;?></span></div>
		<?php if (count($information[$details]) > 0): ?>
		<ul style="padding-bottom: 0.5em">
			<?php foreach ($information[$details] as $detail): ?>
				<li><?php echo $detail; ?></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	<?php endforeach; ?>
	</div>
<?php endif; ?>
<?php if ( count($resume_data['activities']) > 0): ?>
	<div class="label"><?php
	if (empty($resume_data['activities']['*display']) === false):
		echo $resume_data['activities']['*display'];
	else:
		echo 'Activities';
	endif;
	unset($resume_data['activities']['*display']);
	?>:</div>
	<div class="content">
	<table><tbody>      
	<?php
	foreach ($resume_data['activities'] as $array):
		$club = 0;
		$position = 1;
		$dates = 2;
		$description = 3;
		?>
		<tr>
		<?php
		if (empty($array[$position]) === false):
		?>
			<td><strong><?php echo $array[$club];?></strong></td>
			<td style="text-align: right"><?php echo $array[$position];?></td>
		<?php
		else:
		?>
			<td colspan="2"><strong><?php echo $array[$club];?></strong></td>
		<?php			
		endif;
		?>
			<td><?php echo $array[$dates]; ?></td>
		</tr>
		<?php if (empty($array[$description]) === false && is_array($array[$description]) === true): ?>
		<tr>
			<td colspan="3">
				<?php
				echo '<ul>';
				foreach ($array[$description] as $item):
					echo '<li>'.$item.'</li>';;
				endforeach;
				echo '</ul>';
				?>
			</td>
		</tr>
		<?php
		endif;
	endforeach;
	?>
	</tbody></table>
	</div>
<?php endif; ?>
</div>
</body>
</html>
<?php
$resume_html = ob_get_contents();
ob_end_flush();

$fh = fopen('resume.html', 'w') or die('can\'t open resume.html for writing');
fwrite($fh, $resume_html);
fclose($fh);


