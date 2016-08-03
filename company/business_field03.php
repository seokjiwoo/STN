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
							STN은 스포츠 홍보활성화의 성공여부는 마케팅이 핵심이라 판단하며  <br />
							스포츠마케팅에 많은 노력을 기울였습니다.  <br />
							STN의 스포츠마케팅은 다양한 매체를 활용하며 주요 국제대회 및 국내대회의 성공을 이끌고 있습니다. 
						</p>
					</div>

					<div class="thumbArea">
						<ul>
							<li><img src="../images/img/img_thumb05.jpg" alt="" /></li>
							<li><img src="../images/img/img_thumb06.jpg" alt="" /></li>
						</ul>
					</div>

					<div class="sportschList">
						<ul>
							<li><span>포털사이트 <br />스포츠마케팅</span></li>
							<li class="bg"><span>대중교통수단 <br />스포츠마케팅</span></li>
							<li><span>보도영상제공<br />스포츠마케팅</span></li>
							<li class="bg"><span>SNS 스포츠마케팅</span></li>
						</ul>
						<ul class="mt26">
							<li class="bg"><span>스포츠간행물 제작<br />스포츠마케팅</span></li>
							<li><span>VOD제공<br />스포츠마케팅</span></li>
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