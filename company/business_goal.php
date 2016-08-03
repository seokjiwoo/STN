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

					<div class="irImg irBg02">
						<div class="goal">
							<ul>
								<li class="pos01">
									<em>차별화된 스포츠 콘텐츠 창조</em>
									<span>STN은 기존의 스포츠 미디어가 다루지 않는 스포츠를<br /> 양질의 콘텐츠로 창조하여 스포츠 팬들과 함께할 것입니다.</span>
								</li>
								<li class="pos02">
									<em>스포츠 미디어 시장을 선도</em>
									<span>STN은 인기종목을 더욱 발전시키고 전략종목은 활성화를 통해 <br /> 독립적 마케팅이 가능하도록 하여 스포츠 미디어 시장을 이끌 것입니다.  </span>
								</li>
								<li class="pos03">
									<em>스포츠 팬들의 관심을 높이는 환경 조성</em>
									<span>스포츠 팬들이 언제 어디서나 스포츠와 함께할 수 있도록 <br /> STN은 미디어 환경의 미래를 그려 나아갈 것입니다.</span>
								</li>
							</ul>
						</div>
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