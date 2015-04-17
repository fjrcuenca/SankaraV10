<!DOCTYPE html>
<!--
    Copyright (c) 2012-2014 Adobe Systems Incorporated. All rights reserved.

    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome-4.2.0/css/font-awesome.min.css" />
        <title>Sankara Eye Records</title>
    </head>
    <body>
		<?php 	
			$q = intval($_GET['q']);
			$db_host = "dbserver.engr.scu.edu:3306";
			$db_user = "sankara";
			$db_pass = "Fig2014";
			$db_name = "sankara_web";
			
			$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			if (!$con) {
				die('Could not connect: ' . mysqli_error($con));
			}

			mysqli_select_db($con,"sankara_web");
			$sql="SELECT * FROM login";
			$result = mysqli_query($con,$sql);

			echo "<table>
			<tr>
			<th>Username</th>
			<th>Password</th>
			</tr>";
			while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['username'] . "</td>";
				echo "<td>" . $row['password'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			mysqli_close($con);
			
		?>
	
		<br/><br/>

		<button class="back-btn" id="med-btn" onclick="window.location.href='index.html';"> <i class="fa fa-undo"></i> &nbsp Back</button>
        
		<script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
