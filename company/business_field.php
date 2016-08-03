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

					<div class="sportsArea bg01">
						<p>
							STN은 24시간 스포츠 TV채널을 운영하고 있습니다. <br />
							인기종목과 전략종목을 아우르는 다양한 종목의 생중계를 편성해 시청자들과 함께하고 있습니다. 
						</p>
					</div>

					<div class="thumbArea">
						<ul>
							<li><img src="../images/img/img_thumb01.jpg" alt="" /></li>
							<li><img src="../images/img/img_thumb02.jpg" alt="" /></li>
						</ul>
					</div>

					<div class="sportschList">
						<ul>
							<li><span>IPTV 스포츠채널</span></li>
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