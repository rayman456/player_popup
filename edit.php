<?php defined('C5_EXECUTE') or die ('Access Denied');?>

<center>
<table id="playerPopupEdit" style="width: 100%; height: 100%">
	<tr>
		<th>
			<?echo $form->label('playerFirstName', "First Name");?>
		</th>
		<td>
			<?echo $form->text('playerFirstName', $playerFirstName, array('maxlength' => '20'));?>
		</td>
	</tr>
	<tr>
		<th>
			<?echo $form->label('playerLastName', "Last Name");?>
		</th>
		<td>
			<?echo $form->text('playerLastName', $playerLastName, array('maxlength' => '20'));?>
		</td>
	</tr>
	<tr>
		<th>
			<?echo $form->label('playerNumber', "Number");?>
		</th>
		<td>
			<?echo $form->text('playerNumber', $playerNumber, array('maxlength' => '2'));?>
		</td>
	</tr>
	<tr>
		<th>
			<?echo $form->label('playerPosition', "Position");?>
		</th>
		<td>
			<?echo $form->select('playerPosition', array('g' => 'Goal Keeper', 
													     's' => 'Sweeper', 
													     'f' => 'Full-Back', 
													     'b' => 'Wing-Back', 
													     'd' => 'Defensive Midfield', 
													     'm' => 'Midfield', 
													     'a' => 'Attacking Midfield', 
													     'c' => 'Center Forward', 
													     'k' => 'Striker', 
													     'w' => 'Winger'), 'g');?>
		</td>
	</tr>
	<tr>
		<th>
			<?echo $form->label('playerGrade', "Grade");?>
		</th>
		<td>
			<?echo $form->select('playerGrade', array('f' => 'Freshman', 
													  'p' => 'Sophomore', 
													  'j' => 'Junior', 
													  's' => 'Senior'), 'f');?>
		</td>
	<tr>
		<th>
			<?echo $form->label('playerDescription', "Description");?>
		</th>
		<td>
			<?echo $form->textarea('playerDescription', $playerDescription, array('style' => 'width: 25opx; height: 250px;', 'maxlength' => '500'));?>
		</td>
	</tr>
</table>
</center>
