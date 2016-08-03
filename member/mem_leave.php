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
						<div class="leaveWrap">
							<div class="leaveArea tac">
								<p><span>회원님의 정보</span>를 탈퇴 처리합니다.</p>
								<p>STN 웹사이트에서 탈퇴하시면 <br /> 회원인증이 필요한 서비스를 이용하실 수 없습니다.</p>
							</div>
							<div class="loginForm mt30">
								<ul>
									<li><input type="text" /></li>
									<li><input type="password" /></li>
								</ul>
							</div>
						</div>		
					</div>

					<div class="tac mt15">
						<a href="#" class="blue w50"><span>탈퇴</span></a>
						<a href="#" class="gray02 w50"><span>취소</span></a>
					</div>

					<!-- 탈퇴시 얼럿창으로 뜨는 문구 

							입력하신 정보와 일치하는 사용자가 없습니다. 다시 확인하고 로그인하시기 바랍니다.
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