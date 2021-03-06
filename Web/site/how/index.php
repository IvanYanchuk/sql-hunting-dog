<!DOCTYPE html>
<html>
<?php include "../header.php" ?>
	<body>
		<center>
			<table>
<?php
	$active = "how";
	include "../menu.php";
	include "../donate.php";
?>
			</table>
			<div id="content" class="article">
				<h2>How it works</h2>
				<p>
					Hunting Dog works as a plugin for SQL Server Management Studio. That means that it embeds into SQL Server Management
					Studio 2008,2012 or 2014 and creates a separate window.
				</p>
				<p>
					This window allows you to quickly search stored procedures, tables, etc. through the connected servers and perform most actions with a single keystroke.
				</p>
				<h3>Activate</h3>
				<p>
					To activate Hunting Dog SSMS plugin simply press <strong>Ctrl+D</strong>. SQL Server Management Studio will move the current focus to the plugin's search field.
				</p>
				<p style="text-align: center">
					<img class="screenshot" src="../img/how/image001.png" style="width: 385px" />
				</p>
				<h3>Table Search</h3>
				<p>
					If you want to find a table, simply start typing its name (or any part of its name). 
				</p>
				<p style="text-align: center">
					<img class="screenshot" src="../img/how/image002.png" style="width: 393px" />
				</p>
				<p>
					You can narrow down your criteria and specify multiple words.
				</p>
				<p style="text-align: center">
					<img class="screenshot" src="../img/how/image003.png" style="width: 385px" />
				</p>
				<p>
					You can specify <strong>/t</strong> key to show only tables:
				</p>
				<p style="text-align: center">
					<img class="screenshot" src="../img/how/image004.png" style="width: 381px" />
				</p>
				<h3>Actions can be performed on Tables</h3>
				<ul>
					<li>
						<strong>Select Data</strong>
						<p>generate 'SELECT TOP 200 * FROM Table' query in new query window</p>
					</li>
					<li>
						<strong>Edit Data</strong>
						<p>show Edit Data SQL Server Management Studio window</p>
					</li>
					<li>
						<strong>Design Data</strong>
						<p>show SQL Server Management Studio table designer</p>
					</li>
					<li>
						<strong>Script table</strong>
						<p>generate create scripts (script will include indexes)</p>
					</li>
					<li>
						<strong>Locate</strong>
						<p>find Table in the standard Object Explorer</p>
					</li>
				</ul>
				<p style="text-align: center">
					<img class="screenshot" src="../img/how/image005.png" style="width: 823px; position: relative; left: -161px" />
				</p>
				<h3>Stored Procedure Search</h3>
				<p>
					Just type part of the Stored Procedure name and all matching procedures will be displayed.
					You can add <strong>/s</strong> key to filter search only to stored procedures.
				</p>
				<p style="text-align: center">
					<img class="screenshot" src="../img/how/image006.png" style="width: 350px" />
				</p>
				<h3>Stored Procedure Actions</h3>
				<p>
					The following actions are available (Enter or mouse right-click):
				</p>
				<ul>
					<li>
						<strong>Modify</strong>
						<p>show stored procedure body</p>
					</li>
					<li>
						<strong>Execute</strong>
						<p>generate Execute script</p>
					</li>
					<li>
						<strong>Locate</strong>
						<p>find Stored Procedure in the standard Object Explorer</p>
					</li>
				</ul>
				<p style="text-align: center">
					<img class="screenshot" src="../img/how/image007.png" style="width: 738px; position: relative; left: -119px" />
				</p>
				<h3>View Search</h3>
				<p>
					Just type part of the View name and all matching Views will be displayed. You can add <strong>/v</strong> key
					to filter search results to show only Views found.
				</p>
				<p style="text-align: center">
					<img class="screenshot" src="../img/how/image008.png" style="width: 308px" />
				</p>
				<h3>View Operations</h3>
				<ul>
					<li>
						<strong>Select Data</strong>
						<p>generate 'SELECT TOP 200 * FROM View' query in new query window</p>
					</li>
					<li>
						<strong>Modify View</strong>
						<p>show View body (ALTER script)</p>
					</li>
					<li>
						<strong>Locate</strong>
						<p>find View in the standard Object Explorer</p>
					</li>
				</ul>
				<p style="text-align: center">
					<img class="screenshot" src="../img/how/image009.png" style="width: 365px" />
				</p>
				<h3>Function Search</h3>
				<p>
					Just type part of the Function name and all matching Views will be displayed. You can add <strong>/f</strong> key
					to filter search only to Functions.
				</p>
				<h3>Function Actions</h3>
				<ul>
					<li>
						<strong>Modify</strong>
						<p>show Function body</p>
					</li>
					<li>
						<strong>Execute</strong>
						<p>generate Execute script</p>
					</li>
					<li>
						<strong>Locate</strong>
						<p>find Function in the standard Object Explorer</p>
					</li>
				</ul>
				<h3>Drag and Drop</h3>
				<p>
					You can drag and drop any table, stored procedure, view or function name from Hunting Dog result window to Query Window.
				</p>
				<h3>Connecting and disconnecting SQL Servers</h3>
				<p>
					Hunting Dog automatically detects newly connected servers and adds them to the servers combo box.
					Also, if you disconnect from a server, Hunting Dog removes it. Please allow some time for Hunting Dog
					to detect a recently connected server (about 3 seconds).
				</p>
				<h3>User Preferences</h3>
				<p>
					Hunting Dog stores the last database name user worked with for each SQL Server. When the user connects to that SQL Server,
					Hunting Dog will automatically select Database and restore the last Search text.
				</p>
			</div>
			<div class="signature">2015 (c) <a href="mailto:sqlhuntingdog@gmail.com">SQL Hunting Dog</a></div>
		</center>
	</body>
</html>
