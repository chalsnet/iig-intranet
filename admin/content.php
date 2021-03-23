<div class="dashboard_content">

	<div class="sub_page">
		<?php print_r($_GET["sub"]); ?>
	</div>
	<div class="row">
		<div class="col-sm">
			<div>Sales Report</div>
			<div class="sales_report">
			</div>
		</div>
		<div class="col-sm">
			<div>Sales Report</div>
			<div>
				<ul>
					<li>asdfas</li>
					<li>123423</li>
					<li>asdfasd</li>
					<li>5353433</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm">
			<div>Sales Report</div>
			<div>
				<ul>
					<li>asdfas</li>
					<li>123423</li>
					<li>asdfasd</li>
					<li>5353433</li>
				</ul>
			</div>
		</div>
		<div class="col-sm">
			<div>Sales Report</div>
			<div>
				<ul>
					<li>asdfas</li>
					<li>123423</li>
					<li>asdfasd</li>
					<li>5353433</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php
	global $wpdb;

	$myrows = $wpdb->get_results( "SELECT * FROM wp_users, wp_usermeta WHERE wp_users.ID = wp_usermeta.user_id" );
	$myArray = json_encode($myrows);

	// print_r($myArray);
?>

<script type="text/javascript">
	const myArray = JSON.parse('<?= addslashes($myArray); ?>');

	myArray.forEach(function(i){

		const sales_report_li = document.createElement("li");
		sales_report_li.setAttribute("class", "sales_report_item");
		document.getElementsByClassName("sales_report")[0].appendChild(sales_report_li);
		
		sales_report_li.innerHTML = i.user_login + ' / ' + i.meta_value;
		// console.log(i.user_login)

	});
	// console.log(myArray);
</script>

