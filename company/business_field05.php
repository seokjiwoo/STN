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

					<div class="sportsArea bg04">
						<p>
							STN은 IT사업본부 및 개발연구소를 중심으로 스포츠IT부문의 활성화를 이끌어내고 있습니다. <br />
							STN의 스포츠IT는 개발, 솔루션, 방송기기총판, IT인프라구축, 스크린골프공급 등의 <br />
							부문으로 영역이 나뉘어 진행되고 있습니다.
						</p>
					</div>

					<div class="thumbArea">
						<ul>
							<li><img src="../images/img/img_thumb09.jpg" alt="" /></li>
							<li><img src="../images/img/img_thumb10.jpg" alt="" /></li>
						</ul>
					</div>

					<div class="sportschList">
						<ul>
							<li><span>대회정보시스템<br />구축 및 운영</span></li>
							<li class="bg"><span>심판비디오판독시스템 <br />구축 및 운영</span></li>
							<li><span>AD카드 발급시스템 <br />구축 및 운영</span></li>
							<li class="bg"><span>종합대회정보<br />프레임워크 솔루션</span></li>
						</ul>
						<ul class="mt26">
							<li class="bg"><span>통합 엔드포인트<br />보안 솔루션</span></li>
							<li><span>3PLAY LSM <br />국내 총판</span></li>
							<li class="bg"><span>종합대회, 공공기관, <br />중소기업<br />통신 IT인프라 구축</span></li>
							<li><span>스크린골프<br />구축 및 공급</span></li>							
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