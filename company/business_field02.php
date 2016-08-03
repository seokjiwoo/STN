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

					<div class="sportsArea bg02">
						<p>
							STN은 매년 400경기 이상의 생중계를 제작하고 있습니다. <br />
							TV채널뿐만아니라 포털사이트, 유튜브, N-Screen TV, 지상파 DMB 등 <br />
							다양한 매체로의 송출도 진행해 스포츠중계방송의 시청폭을 넓히고 있습니다. 
						</p>
					</div>

					<div class="thumbArea">
						<ul>
							<li><img src="../images/img/img_thumb03.jpg" alt="" /></li>
							<li><img src="../images/img/img_thumb04.jpg" alt="" /></li>
						</ul>
					</div>

					<div class="sportschList">
						<ul>
							<li><span>TV채널<br />(케이블, IPTV 등)<br />스포츠생중계</span></li>
							<li class="bg"><span>포털사이트<br />(NAVER, DAUM 등)<br />스포츠생중계</span></li>
							<li><span>N-Screen TV<br />스포츠생중계</span></li>
							<li class="bg"><span>지상파 DMB<br />스포츠생중계</span></li>
						</ul>
						<ul class="mt26">
							<li class="bg"><span>인터넷<br />(유튜브, 유스트림 등) <br />스포츠생중계</span></li>
							<li><span>기타 뉴미디어<br />스포츠생중계</span></li>
						</ul>
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