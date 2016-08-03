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

					<h3 class="title02">STN 인사시스템</h3>
					<ul class="system_txt mt20">
						<li>STN은 능력과 실적에 따른 인사제도를 실현해 운영하고 있습니다.</li>
						<li>STN기업문화에 잘 적응하고 진취적인 능력을 펼칠 수 있는 인재를 환영합니다.</li>
					</ul>
					<div class="systemList mt50">
						<ul>
							<li>
								<img src="../images/img/img_system01.jpg" alt="" />
								<em>채용양성</em>
								<ul>
									<li>직무별 전문가 양성</li>
									<li>최적인재의 채용, 스포츠부문의 인재 양성</li>
								</ul>
							</li>
							<li>
								<img src="../images/img/img_system02.jpg" alt="" />
								<em>평가보상</em>
								<ul>
									<li>업무수행 시 보여준 역량과 성과 중심의 평가와 보상 </li>
									<li>경영성과에 따른 탄력적 보상</li>
									<li>직무우수인력에 대한 발탁 및 승진</li>
								</ul>
							</li>
							<li>
								<img src="../images/img/img_system03.jpg" alt="" />
								<em>조직운영</em>
								<ul>
									<li>직무별 전문가 양성 </li>
									<li>최적인재의 채용, 스포츠부문의 인재 양성</li>
								</ul>
							</li>
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