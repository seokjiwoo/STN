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

					<div class="irImg irBg01">
						<div class="greeting">
							<p>
								<strong>안녕하십니까. <br /> ㈜에스티엔 대표이사 이강영입니다.</strong> <br /><br />
								STN은 그동안 전략종목의 활성화와 인기종목의 새로운 도약을 위해 힘써왔습니다. <br /><br />

								10여 년 전만 하더라도 스포츠 환경은 매우 열악했습니다.<br />
								이는 먼 아프리카의 이야기가 아닌 우리의 이야기입니다.<br />
								STN은 도전정신을 바탕으로 스포츠의 유비쿼터스를 실현했습니다. <br />
								언제 어디서나 스포츠와 함께할 수 있는 환경을 STN이 만든 것입니다. <br /><br />

								그동안 STN은 저비용 고효율의 뉴미디어 스포츠중계방송, 스포츠마케팅, 스포츠영상제작, 스포츠IT개발, <br />
								스포츠비디오판독을 진행했고 더불어 스포츠소식을 빠르고 정확하게 전달하기 위해 스포츠언론사도 운영했습니다. <br /><br />

								STN은 이에 만족하지 않고 스포츠 팬들이 언제나 스포츠와 함께할 수 있도록 스포츠 TV채널을 런칭했습니다. <br />
								365일 24시간 스포츠 팬들은 STN의 스포츠 TV채널과 함께하며 스포츠의 다이내믹함을 느낄 수 있을 것입니다.<br /><br />

								스포츠의 모든 것을 STN과 함께 하십시오.<br />
								지금 이 순간 STN과 함께 하신다면 새로운 변화를 느낄 수 있을 것입니다.<br />
								STN은 언제나 여러분을 환영합니다.
							</p>
							<div class="ceoName">
								<span>㈜에스티엔 대표이사</span>
								<img src="../images/img/img_ceo.jpg" alt="이강영" />
							</div>
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