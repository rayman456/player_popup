<?php define('C5_EXECUTE')or die ('Access Denied');?>

<div style="width: 100%; height: 100%">
	<a href="javascript:void(0)">
		<div class="playerdisplay" onclick="expand('<?echo $bID;?>');">
			<div class="playerinfo">
				<!--Insert Image Here-->
				<strong><span class="playername"><?echo $playerFirstName . ' ' . $playerLastName;?></span></strong>
				<div class="infoLine">
					<strong><span class="playernumber">#<?echo $playerNumber;?></span></strong>
					<strong><span class="playerposition"><?echo getPosition($playerPosition);?></span></strong>
					<strong><span class="playergrade"><?echo getGrade($playerGrade);?></span></strong>
				</div>
			</div>
		</div>
	</a>
</div>
<div id="light<?echo $bID;?>" class="white_content">
	<!--Insert Image Here-->
	<div>
		<strong><?echo $playerFirstName . ' ' . $playerLastName;?> #<?echo $playerNumber;?></strong>
        <p><?echo $playerDescription;?></p>
	</div>
</div>
<div onclick="contract('<?echo $bID;?>')" id="fade<?echo $bID;?>" class="black_overlay"></div>

<?
function getGrade($grade) {
    $a = array('f' => 'Freshman', 
	       'p' => 'Sophomore', 
	       'j' => 'Junior', 
	       's' => 'Senior');
    return $a[$grade];
}

function getPosition($position) {
    $a  = array('g' => 'Goal Keeper', 
	        	's' => 'Sweeper', 
                'f' => 'Full-Back', 
                'b' => 'Wing-Back', 
                'd' => 'Defensive Midfield', 
	        	'm' => 'Midfield', 
	        	'a' => 'Attacking Midfield', 
	        	'c' => 'Center Forward', 
                'k' => 'Striker', 
                'w' => 'Winger');
    return $a[$position];
}
?>