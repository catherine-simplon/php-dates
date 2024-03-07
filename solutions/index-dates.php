<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Date Exercises - answers</title>
		 <style>
			 .todo {
				 color: gray;
			 }
			 .output {
				 border: 1px solid gray;
				 padding: 20px;
				 margin: 20px 0;
			 }
		 </style>
  </head>
  <body>
		<h1>Date Exercises - answers</h1>
		
		<h2>Exercise 1.</h2>
		<p class="todo">
			Write a PHP script which will display the copyright information in the following format. To get current year you can use the date() function.<br>
			<i>Expected Format : © 2024 PHP Exercises - Simplon.co</i>
		</p>
		
		<div class="output">
			<p>© <?php echo date('Y'); ?> PHP Exercises - Simplon.co</p>
		</div>
		
		<h2>Exercise 2.</h2>
		<p class="todo">
			Create a simple 'birthday countdown' script, the script will count the number of days between current day and birthday.
		</p>
		
		<div class="output">
			<?php
				$target_days = mktime(0,0,0,12,31,2024);// modify the birth day 12/31/2024
				$today = time();
				$diff_days = ($target_days - $today);
				$days = (int)($diff_days/86400);
				print "Days till next birthday: $days days!"."\n";
			?>
		</div>
		
		<h2>Exercise 3.</h2>
		<p class="todo">
			Write a PHP script to print the current date in the following format. To get current date's information you can use the date() function.<br>
			<i>
				Sample format : (assume current date is September 01, 2013)<br>
				2024/09/01<br>
				24.09.01<br>
				01-09-24
			</i>
		</p>
		
		<div class="output">
			<?php
				echo date("Y/m/d") . "\n";
				echo date("y.m.d") . "\n";
				echo date("d-m-y") . "\n";
			?>
		</div>
		
		<h2>Exercise 4.</h2>
		<p class="todo">
			Write a PHP script to calculate the difference between two dates.<br>
			<i>
				Sample dates : 1981-11-04, 2024-09-04<br>
				Expected Result : 31 years, 10 months, 11 days
			</i>
		</p>
		
		<div class="output">
			<?php
				$sdate = "1981-11-04";
				$edate = "2024-09-04";

				$date_diff = abs(strtotime($edate) - strtotime($sdate));

				$years = floor($date_diff / (365*60*60*24));
				$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
				$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

				printf("%d years, %d months, %d days", $years, $months, $days);
				printf("\n");
			?>
		</div>
		
		<h2>Exercise 5.</h2>
		<p class="todo">
			Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy.<br>
			<i>
				Sample date : 2024-09-12<br>
				Expected Result : 12-09-2024
			</i>
		</p>
		
		<div class="output">
			<?php
				$odate = "2024-09-12";
				$newDate = date("d-m-Y", strtotime($odate));
				echo $newDate."\n";
			?>
		</div>
		
		<h2>Exercise 6.</h2>
		<p class="todo">
			Write a PHP script to convert the date to timestamp.<br>

			<i>
				Sample date : 12-05-2024<br>
				Expected Result : 1715472000
			</i>
		</p>
		
		<div class="output">
			<?php
				$timestamp = strtotime('12-05-2024');
				echo $timestamp."\n";
			?>
		</div>
		
		
		<h2>Exercise 7.</h2>
		<p class="todo">
			Write a PHP script to calculate a number of days between two dates.
		</p>
		
		<div class="output">
			<?php
				$to_date = time(); // Input your date here e.g. strtotime("2024-01-02")
				$from_date = strtotime("2012-01-31");
				$day_diff = $to_date - $from_date;
				echo floor($day_diff/(60*60*24))."\n";
			?>
		</div>
		
		
		<h2>Exercise 8.</h2>
		<p class="todo">
			Write a PHP script to get the first and last day of a month from a specified date.
		</p>
		
		<div class="output">
			<?php
				$dt = "2024-02-23";
				echo 'First day : '. date("Y-m-01", strtotime($dt)).' - Last day : '. date("Y-m-t", strtotime($dt));
			?>
		</div>
		
		
		<h2>Exercise 9.</h2>
		<p class="todo">
			Write a PHP script to print like : Saturday the 7th.
		</p>
		
		<div class="output">
			<?php
				echo date('l \t\h\e jS');
			?>
		</div>
		
		
		<h2>Exercise 10.</h2>
		<p class="todo">
			Write a PHP script to check whether the given dates are valid or not?
		</p>
		
		<div class="output">
			<?php
				var_dump(checkdate(2, 30, 2024));
				var_dump(checkdate(2, 29, 2024));	
			?>
		</div>
		
		
		<h2>Exercise 11.</h2>
		<p class="todo">
			Write a PHP script to get time difference in days and years, months, days, hours, minutes, seconds between two dates.<br>

			<i>Note : Use DateTime class.</i>
		</p>
		
		<div class="output">
			<?php
				$date1 = new DateTime('2022-06-01 02:12:51');
				$date2 = $date1->diff(new DateTime('2024-05-12 11:10:00'));
				echo $date2->days.'Total days'."\n";
				echo $date2->y.' years'."\n";
				echo $date2->m.' months'."\n";
				echo $date2->d.' days'."\n";
				echo $date2->h.' hours'."\n";
				echo $date2->i.' minutes'."\n";
				echo $date2->s.' seconds'."\n";
			?>
		</div>
		
		
		<h2>Exercise 12.</h2>
		<p class="todo">
			Write a PHP script to change month number to month name.
		</p>
		
		<div class="output">
			<?php
				$month_num = 7;
				$month_name = date("F", mktime(0, 0, 0, $month_num, 10));
				echo $month_name."\n"; 
			?>
		</div>
		
		
		<h2>Exercise 13.</h2>
		<p class="todo">
			Write a PHP script to get yesterday's date.
		</p>
		
		<div class="output">
			<?php
				$dt = new DateTime();
				$dt->sub(new DateInterval('P1D'));
				echo $dt->format('F j, Y')."\n";	
			?>
		</div>
		
		
		<h2>Exercise 14.</h2>
		<p class="todo">
			Write a PHP script to get the current date/time of 'Australia/Melbourne'.
		</p>
		
		<div class="output">
			<?php
				date_default_timezone_set('Australia/Melbourne');
				$date = date('m/d/Y h:i:s a', time());
				echo $date;
			?>
		</div>
		
		
		<h2>Exercise 15.</h2>
		<p class="todo">
			Write a PHP script to check whether a date is a weekend or not.
		</p>
		
		<div class="output">
			<?php
				$dt = '2011-01-04';
				$dt1 = strtotime($dt);
				$dt2 = date("l", $dt1);
				$dt3 = strtolower($dt2);
				if (($dt3 == "saturday" )|| ($dt3 == "sunday")) {
					echo $dt3.' is weekend'."\n";
				} else {
					echo $dt3.' is not weekend'."\n";
				}
			?>
		</div>
		
		
		<h2>Exercise 16.</h2>
		<p class="todo">
			Write a PHP script to add/subtract the number of days from a particular date.<br>
			<i>
				Sample Output : Original date : 2024-01-01<br>
				Before 40 days : 2023-11-22<br>
				After 40 days : 2024-02-10
			</i>
		</p>
		
		<div class="output">
			<?php
				$dt = '2024-01-01';
				echo 'Original date : '.$dt."\n";
				$no_days = 40;
				$bdate = strtotime("-".$no_days." days", strtotime($dt));
				$adate = strtotime("+".$no_days." days", strtotime($dt));
				echo 'Before 40 days : '.date("Y-m-d", $bdate)."\n";
				echo 'After  40 days : '.date("Y-m-d", $adate)."\n";				
			?>
		</div>
		
		
		<h2>Exercise 17.</h2>
		<p class="todo">
			Write a PHP function to get start and end date of a week (by week number) of a particular year.<br>

			<i>
				Sample week and year : 12, 2024<br>
				Output :<br>
				Starting date of the week: 2024-3-24<br>
				End date the week: 2024-3-30
			</i>
		</p>
		
		<div class="output">
			<?php
				function Start_End_Date_of_a_week($week, $year)
				{
					$time = strtotime("1 January $year", time());
					$day = date('w', $time);
					$time += ((7*$week)+1-$day)*24*3600;
					$dates[0] = date('Y-n-j', $time);
					$time += 6*24*3600;
					$dates[1] = date('Y-n-j', $time);
					return $dates;
				}

				$result = Start_End_Date_of_a_week(12,2024);
				echo 'Starting date of the week: '. $result[0]."\n";
				echo 'End date the week: '. $result[1];
				
			?>
		</div>
		
		
		<h2>Exercise 18.</h2>
		<p class="todo">
			Write a PHP script to calculate the current age of a person.<br>

			<i>
				Sample date of birth : 11.4.1987<br>
				Output : Your age : 27 years, 1 month, 29 days*
			</i>
		</p>
		
		<div class="output">
			<?php
				$bday = new DateTime('11.4.1987'); // Your date of birth
				$today = new Datetime(date('m.d.y'));
				$diff = $today->diff($bday);
				printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
				printf("\n");
			?>
		</div>
		
		
		<h2>Exercise 19.</h2>
		<p class="todo">
			Write a PHP script to calculate weeks between two dates.<br>

			<i>Sample Output : Weeks between 1/1/2024 and 12/31/2024 is 52</i>
		</p>
		
		<div class="output">
			<?php
				function week_between_two_dates($date1, $date2)
				{
				    $first = DateTime::createFromFormat('m/d/Y', $date1);
				    $second = DateTime::createFromFormat('m/d/Y', $date2);
				    if($date1 > $date2) return week_between_two_dates($date2, $date1);
				    return floor($first->diff($second)->days/7);
				}

				$dt1 = '1/1/2024';
				$dt2 = '12/31/2024';
				echo 'Weeks between '.$dt1.' and '. $dt2. ' is '. week_between_two_dates($dt1, $dt2)."\n";
			?>
		</div>
		
		
		<h2>Exercise 20.</h2>
		<p class="todo">
			Write a PHP script to get the number of the month before the current month.
		</p>
		
		<div class="output">
			<?php
				echo date('m', strtotime('-1 month'))."\n";
			?>
		</div>
		
		
		<h2>Exercise 21.</h2>
		<p class="todo">
			Write a PHP script to convert seconds into days, hours, minutes and seconds.<br>

			<i>
				Sample seconds : 200000<br>
				Expected output : 2 days, 7 hours, 33 minutes and 20 second*
			</i>
		</p>
		
		<div class="output">
			<?php
				function convert_seconds($seconds) 
				{
					$dt1 = new DateTime("@0");
					$dt2 = new DateTime("@$seconds");
					return $dt1->diff($dt2)->format('%a days, %h hours, %i minutes and %s seconds');
				}
				echo convert_seconds(200000)."\n";
			?>
		</div>
		
		
		<h2>Exercise 22.</h2>
		<p class="todo">
			Write a PHP script to get the last 6 months from the current month.
		</p>
		
		<div class="output">
			<?php
				for ($i = 1; $i <= 6; $i++) {
					$months[] = date("Y-m%", strtotime( date( 'Y-m-01' )." -$i months"));
				}
				echo '<pre>';
				print_r($months);	
				echo '</pre>';
			?>
		</div>
		
		
		<h2>Exercise 23.</h2>
		<p class="todo">
			Write a PHP script to get the current month and previous three months.
		</p>
		
		<div class="output">
			<?php
				echo date("M - Y")."\n";
				echo date("M - Y",strtotime("-1 Months"))."\n";
				echo date("M - Y",strtotime("-2 Months"))."\n";
				echo date("M - Y",strtotime("-3 Months"))."\n";				
			?>
		</div>
		
		
		<h2>Exercise 24.</h2>
		<p class="todo">
			Write a PHP script to increment date by one month<br>

			<i>
				Sample date : 2023-12-21<br>
				Expected Output : 2024-01-21
			</i>
		</p>
		
		<div class="output">
			<?php
				$dt = strtotime("2024-12-21");
				echo date("Y-m-d", strtotime("+1 month", $dt))."\n";					
			?>
		</div>
		
		
		<h2>Exercise 25.</h2>
		<p class="todo">
			Write a PHP script to get the current date in Italian.<br>

			<i>Sample Output : Today is lun on ott 06, 2024</i>
		</p>
		
		<div class="output">
			<?php
				date_default_timezone_set( 'Europe/Rome' );

				// make a DateTime object 
				$dateTimeObj = new DateTime('now', new DateTimeZone('Europe/Rome'));
			  
				// format the date according to your preferences
				// the 3 params are [ DateTime object, ICU date scheme, string locale ]
				$dateFormatted = IntlDateFormatter::formatObject($dateTimeObj, "l 'on' F d, Y", 'it_IT' );
				
				echo 'Today is ' . ucwords($dateFormatted);
			?>
		</div>
		
		
		<h2>Exercise 26.</h2>
		<p class="todo">
			Write a PHP script to convert the number to month name.
		</p>
		
		<div class="output">
			<?php
				$month_num  = 9;
				$dateObj = DateTime::createFromFormat('!m', $month_num);
				$month_name = $dateObj->format('F');
				echo $month_name . "\n";
			?>
		</div>
		
		
		<h2>Exercise 27.</h2>
		<p class="todo">
			Write a PHP script to get the number of days of the current month.
		</p>
		
		<div class="output">
			<?php
				echo 'Number of days for the month of '.date('M'). ' is :' .date('t')."\n";
			?>
		</div>
		
		
		<h2>Exercise 28.</h2>
		<p class="todo">
			Write a PHP script to display time in a specified timezone.
		</p>
		
		<div class="output">
			<?php
				ini_set('date.timezone','America/New_York'); 
				echo '<p>'.date("g:i A").'</p>'."\n";
			?>
		</div>
		
  </body>
</html>
