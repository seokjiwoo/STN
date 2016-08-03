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

					<div class="memberBox">
						<div class="joinOk tac">
							<img src="../images/img/img_stn02.jpg" alt="stn" />
							<div class="txt">
								<p><span>회원님의 정보</span>가 정상 입력되었습니다.</p>
								<p>
									입력하신 이메일 주소로 인증메일을 보내드렸으니 확인하시고 인증을 완료해주시기 바랍니다. <br />
									인증완료 후 로그인이 가능합니다. 감사합니다.
								</p>
							</div>
						</div>
					</div>
					<div class="tac mt20"><a href="#" class="blue w50"><span>확인</span></a></div>

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