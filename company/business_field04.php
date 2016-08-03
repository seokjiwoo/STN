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

					<div class="sportsArea bg03">
						<p>
							STN은 2009년 스포츠언론사를 출범하였고 이후 농구전문언론사 바스켓투데이를 인수해<br />
							본격적으로 스포츠보도를 진행했습니다. <br />
							스포츠전종목 기사를 제공하는 계약을 NAVER와 DAUM과 체결해 <br />
							포털사이트로도 기사를 제공하고 있습니다. <br />
							STN은 텍스트, 사진기사뿐만 아니라 영상뉴스를 강화해 보도하고 있습니다.
						</p>
					</div>

					<div class="thumbArea">
						<ul>
							<li><img src="../images/img/img_thumb07.jpg" alt="" /></li>
							<li><img src="../images/img/img_thumb08.jpg" alt="" /></li>
						</ul>
					</div>

					<div class="sportschList">
						<ul>
							<li><span>스포츠전종목<br />STN SPORTS<br />홈페이지 기사 제공</span></li>
							<li class="bg"><span>스포츠전종목 <br />NAVER 기사 제공</span></li>
							<li><span>스포츠전종목<br />DAUM 기사 제공</span></li>
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