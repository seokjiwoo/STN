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

					<div class="channelNum">
						<ul>
							<li>
								<span><img src="../images/img/img_everyontv.jpg" alt="everyontv" /></span>
								<p><em>Ch. 94</em></p>
							</li>
							<li>
								<span><img src="../images/img/img_ollehtv.jpg" alt="ollehtv" /></span>
								<p><em>Ch. 267</em></p>
							</li>
							<li>
								<span><img src="../images/img/img_everyontv.jpg" alt="everyontv" /></span>
								<p><em>Ch. 94</em></p>
							</li>
							<li>
								<span><img src="../images/img/img_ollehtv.jpg" alt="ollehtv" /></span>
								<p><em>Ch. 267</em></p>
							</li>
						</ul>
					</div>

					<div class="tables01-1 mt30">
						<table>
							<caption>채널번호안내표</caption>
							<colgroup>
								<col width="10%" /><col width="25%" /><col width="25%" />
								<col width="10%" /><col width="15%" /><col width="15%" />
							</colgroup>
							<thead>
								<tr>
									<th scope="col">구분</th>
									<th scope="col">지역</th>
									<th scope="col">방송국</th>
									<th scope="col">케이블</th>
									<th scope="col">디지털SD</th>
									<th scope="col">디지털HD</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>서울</td>
									<td>강남구</td>
									<td>EVERY ON TV</td>
									<td>50</td>
									<td>100</td>
									<td>100</td>
								</tr>
								<tr>
									<td>경기</td>
									<td>구리/남양주/하남</td>
									<td>OLLEH TV</td>
									<td>50</td>
									<td>100</td>
									<td>100</td>
								</tr>
								<tr>
									<td>서울</td>
									<td>강남구</td>
									<td>EVERY ON TV</td>
									<td>50</td>
									<td>100</td>
									<td>100</td>
								</tr>
								<tr>
									<td>경기</td>
									<td>구리/남양주/하남</td>
									<td>OLLEH TV</td>
									<td>50</td>
									<td>100</td>
									<td>100</td>
								</tr>
								<tr>
									<td>서울</td>
									<td>강남구</td>
									<td>EVERY ON TV</td>
									<td>50</td>
									<td>-</td>
									<td>-</td>
								</tr>
								<tr>
									<td>경기</td>
									<td>구리/남양주/하남</td>
									<td>OLLEH TV</td>
									<td>50</td>
									<td>-</td>
									<td>-</td>
								</tr>
								<tr>
									<td>서울</td>
									<td>강남구</td>
									<td>EVERY ON TV</td>
									<td>50</td>
									<td>-</td>
									<td>-</td>
								</tr>
								<tr>
									<td>경기</td>
									<td>구리/남양주/하남</td>
									<td>OLLEH TV</td>
									<td>50</td>
									<td>-</td>
									<td>-</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<div class="paging">
						<a href="#" class="startBtn"></a>
						<a href="#" class="prevBtn"></a>
							<span>
								<a href="#">280</a>
								<a href="#">281</a>
								<a href="#">283</a>
								<a href="#">284</a>
								<a href="#" class="on">285</a>
								<a href="#">286</a>
								<a href="#">287</a>
								<a href="#">288</a>
								<a href="#">289</a>
								<a href="#">290</a>
							</span>
						<a href="#" class="nextBtn"></a>
						<a href="#" class="endBtn"></a>
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