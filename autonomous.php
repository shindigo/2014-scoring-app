<?php

	set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

	session_start();
	
	$link = mysql_connect('team102.org:3306', 'team102_webuser', $_SESSION['password']);
	
	if (!mysql_select_db('team102_2014', $link)) {
    		echo 'Could not select database';
    		exit;
	}
	
	$match_number  = $_GET['rdoMatch'];
	
	$sql = sprintf("SELECT * FROM matches WHERE match_number = '%s'", $match_number);
	$matches = mysql_query($sql, $link);
	
	$match =  mysql_fetch_object($matches);
	
	$_SESSION['match'] = $match;

?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><? echo $_SESSION['tournament']->Title; ?></title>
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
    <link rel="stylesheet" href="stylesheet.css" />
    <!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body class="no-js">
    <div id="page">
        <div class="header">
            <div id="competition"><? echo $_SESSION['tournament']->Title . ' ' . $_SESSION['initials']; ?></div>
            <div id="match">Match <? echo $_SESSION['match']->match_number . " - " . $_SESSION['match']->start_time . " - " . $_SESSION['alliance']; ?></div>
            <div id="autonomous">Autonomous</div>
        </div>
        <form id="autonomousForm" action="teleop.html">
            <div id="Team1" class="team">
                <div id="Team1Number" class="teamNumber">102</div>
                <div id="Team1AutoScore">
					<div id="Team1HasBall">
						<input type="checkbox" name="chkTeam1HasBallName" id="chkTeam1HasBall" value="Team-1-HasBall" checked="true" />
						<label for="chkTeam1HasBall">Has Ball</label>
					</div>
                    <div id="Team1ScoreHigh">
                        <input type="radio" name="rdoScore1" id="rdoScoreHigh1" value="Team-1-High" />
                        <label for="rdoScoreHigh1">High</label>
                    </div>
                    <div id="Team1ScoreLow">
                        <input type="radio" name="rdoScore1" id="rdoScoreLow1" value="Team-1-Low" />
                        <label for="rdoScoreLow1">Low</label>
                    </div>
                    <div id="Team1ScoreLow">
                        <input type="radio" name="rdoScore1" id="rdoScoreNone1" value="Team-1-None" checked="true" />
                        <label for="rdoScoreNone1">None</label>
                    </div>
                </div>
				<div id="Team1Hot">
                    <input type="checkbox" name="chkTeam1HotName" id="chkTeam1Hot" value="Team-1-Hot" />
                    <label for="chkTeam1Hot">Hot</label>
                </div>
                <div id="Team1Mobility">
                    <input type="checkbox" name="chkTeam1MobilityName" id= "chkTeamMobility" value="Team-1-Mobility" />
                    <label for="chkTeamMobility">Mobility</label>
                </div>
            </div>
            <div id="Team2" class="team">
                <div id="Team2Number" class="teamNumber">303</div>
                <div id="Team2AutoScore">
					<div id="Team2HasBall">
						<input type="checkbox" name="chkTeam2HasBallName" id="chkTeam2HasBall" value="Team-2-HasBall" checked="true" />
						<label for="chkTeam2HasBall">Has Ball</label>
					</div>
                    <div id="Team2ScoreHigh">
                        <input type="radio" name="rdoScore2" id="rdoScoreHigh2" value="Team-2-High" />
                        <label for="rdoScoreHigh2">High</label>
                    </div>
                    <div id="Team2ScoreLow">
                        <input type="radio" name="rdoScore2" id="rdoScoreLow2" value="Team-2-Low" />
                        <label for="rdoScoreLow2">Low</label>
                    </div>
                    <div id="Team2ScoreLow">
                        <input type="radio" name="rdoScore2" id="rdoScoreNone2" value="Team-2-None" checked="true" />
                        <label for="rdoScoreNone2">None</label>
                    </div>
                </div>
				<div id="Team2Hot">
                    <input type="checkbox" name="chkTeam2HotName" id="chkTeam2Hot" value="Team-2-Hot" />
                    <label for="chkTeam2Hot">Hot</label>
                </div>
                <div id="Team2Mobility">
                    <input type="checkbox" name="chkTeam2MobilityName" id="chkTeam2Mobility" value="Team-2-Mobility" />
                    <label for="chkTeam2Mobility">Mobility</label>
                </div>
            </div>
            <div id="Team3" class="team">
                <div id="Team3Number" class="teamNumber">2547</div>
                <div id="Team3AutoScore">
					<div id="Team3HasBall">
						<input type="checkbox" name="chkTeam3HasBallName" id="chkTeam3HasBall" value="Team-3-HasBall"  checked="true"/>
						<label for="chkTeam3HasBall">Has Ball</label>
					</div>
                    <div id="Team3ScoreHigh">
                        <input type="radio" name="rdoScore3" id="rdoScoreHigh3" value="Team-3-High" />
                        <label for="rdoScoreHigh3">High</label>
                    </div>
                    <div id="Team3ScoreLow">
                        <input type="radio" name="rdoScore3" id="rdoScoreLow3" value="Team-3-Low" />
                        <label for="rdoScoreLow3">Low</label>
                    </div>
                    <div id="Team3ScoreLow">
                        <input type="radio" name="rdoScore3" id="rdoScoreNone3" value="Team-3-None" checked="true" />
                        <label for="rdoScoreNone3">None</label>
                    </div>
                </div>
				<div id="Team3Hot">
                    <input type="checkbox" name="chkTeam3HotName" id="chkTeam3Hot" value="Team-3-Hot" />
                    <label for="chkTeam3Hot">Hot</label>
                </div>
                <div id="Team3Mobility">
                    <input type="checkbox" name="chkTeam3MobilityName" id="chkTeam3Mobility" value="Team-3-Mobility" />
                    <label for="chkTeam3Mobility">Mobility</label>
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="footer">
                <div id="Score">Score: 37</div>
                <div id="nav">
                    <button type="button" class="btnBack" onclick="history.back();">Back</button>
                    <input type="submit" name="btnNext" value="Next" />
                </div>
            </div>
        </form>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/modernizr.js"></script>
</body>
</html>