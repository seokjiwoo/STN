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
						<div class="loginWrap">
							<div class="loginArea">
								<div class="tac"><img src="../images/img/img_stn02.jpg" alt="stn" /></div>
								<div class="loginForm">
									<ul>
										<li><input type="text" /></li>
										<li><input type="password" /></li>
									</ul>
									<button class="loginBtn">LOGIN</button>
								</div>
								<div class="loginMenu">
									<ul>
										<li><a href="#">회원가입</a></li>
										<li><a href="#">ID/PW찾기</a></li>
									</ul>
								</div>
							</div>
						</div>		
					</div>
					<!-- 로그인시 얼럿창으로 뜨는 문구 

							1. 입력하신 정보와 일치하는 사용자가 없습니다. 다시 확인하고 로그인하시기 바랍니다.

							2. 회원님의 계정은 이메일 인증이 완료되지 않았습니다. 메일에서 인증을 완료해주세요.
					-->

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