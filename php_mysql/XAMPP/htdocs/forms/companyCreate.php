<?php
/*

*	File:			companyCreate.php
*	By:			TMIT
*	Date:		2010-06-01
*
*	This script defines an HTML form using php 
*	for user to enter company details - POST to companySave.php
*
*
*=====================================
*/

{ 		//	Secure Connection Script
		include('../../htconfig/dbConfig.php'); 
		$dbSuccess = false;
		$dbConnected = mysql_connect($db['hostname'],$db['username'],$db['password']);
		
		if ($dbConnected) {		
			$dbSelected = mysql_select_db($db['database'],$dbConnected);
			if ($dbSelected) {
				$dbSuccess = true;
			} else {
				echo "DB Selection FAILed";
			}
		} else {
				echo "MySQL Connection FAILed";
		}
		//	END	Secure Connection Script
}

if ($dbSuccess) {

	echo '<h2 style="font-family: arial, helvetica, sans-serif;" >
				New Company Creation Form
			</h2>';

	echo "<br />";
	
	{	//		FORM postCompany 
		echo '<form name="postCompany" action="companySave.php" method="post">';
		
				echo '
				<table>
					<tr>
						<td>pre Name</td>
						<td><input type="text" name="preName" /></td>
					</tr>
					<tr>
						<td>Company Name</td>
						<td><input type="text" name="companyName" /></td>
					</tr>
					<tr>
						<td>Reg Type</td>
						<td><input type="text" name="RegType" /></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="StreetA" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" name="StreetB" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" name="StreetC" /></td>
					</tr>
					<tr>
						<td>Town</td>
						<td><input type="text" name="Town" /></td>
					</tr>
					<tr>
						<td>County</td>
						<td><input type="text" name="County" /></td>
					</tr>
					<tr>
						<td>Postcode</td>
						<td><input type="text" name="Postcode" /></td>
					</tr>
					<tr>
						<td>COUNTRY</td>
						<td><input type="text" name="COUNTRY" /></td>
					</tr>
					<tr>
						<td></td>
						<td align="right"><input type="submit"  value="Save" /></td>
					</tr>
				</table>
				';
					
		echo '</form>';
	}

}

echo "<br /><hr /><br />";


echo '<a href="../index.php">Quit - to homepage</a>';
?>