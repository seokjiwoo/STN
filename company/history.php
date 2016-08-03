<?php require_once("../include/doc_header.php"); ?>

	<!-- wrapper -->
	<div class="wrapper">
		<!-- header -->
		<?php require_once("../include/header.php"); ?>
		<!--// header -->
		
		<!-- container -->
		<div class="container">

			<!-- left global menu -->
			<?php require_once("../include/category.php"); ?>
			<!--// left global menu -->

			<?php
			/**
			 * 프로그램 클래스 분기 처리 
			 * lnb 쓸때 : contentsSectionType01
			 * lnb 안쓸때 : contentsSectionType02
			 */
			?>
			<div class="contentsSectionType01">

				<!-- left global menu -->
				<?php require_once("../include/lnb_menu.php"); ?>
				<!--// left global menu -->

				<div class="contents">

					<!-- breadcrumb or location -->
					<?php require_once("../include/breadcrumb.php"); ?>
					<!--// breadcrumb or location -->

					<div class="historyTables">
						<table>
							<caption>회사연혁표</caption>
							<colgroup>
								<col width="20%" /><col width="80%" />
							</colgroup>
							<tbody>
								<tr>
									<th scope="row">2015</th>
									<td>
										<ul>
											<li>aa</li>
											<li>aa</li>
											<li>aa</li>
										</ul>
									</td>
								</tr>
								<tr>
									<th scope="row">2014</th>
									<td>
										<ul>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</td>
								</tr>
								<tr>
									<th scope="row">2013</th>
									<td>
										<ul>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</td>
								</tr>
								<tr>
									<th scope="row">2012</th>
									<td>
										<ul>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</td>
								</tr>
								<tr>
									<th scope="row">2011</th>
									<td>
										<ul>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</td>
								</tr>
								<tr>
									<th scope="row">2010</th>
									<td>
										<ul>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</td>
								</tr>
								<tr>
									<th scope="row">2009</th>
									<td>
										<ul>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</td>
								</tr>
								<tr>
									<th scope="row">2008</th>
									<td>
										<ul>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</td>
								</tr>
								<tr>
									<th scope="row">2007</th>
									<td>
										<ul>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</td>
								</tr>
								<tr>
									<th scope="row">2006</th>
									<td>
										<ul>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
		<!--// container -->
		
		<!-- footer -->
		<?php require_once('../include/footer.php'); ?>
		<!-- // footer -->
	</div>
	<!--// wrapper -->

<?php require_once('../include/doc_footer.php'); ?>