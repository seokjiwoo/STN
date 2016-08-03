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

					<div class="irImg irBg03">
						<div class="orgList">
							<dl>
								<dt>방송본부</dt>
								<dd>
									<strong>편성팀</strong>
									<span>편성기획, 편성제작</span>
								</dd>
								<dd>
									<strong>스포츠제작팀</strong>
									<span>방송중계,</span>
									<span>스포츠그래픽</span>
								</dd>
								<dd>
									<strong>스포츠보도팀</strong>
									<span>취재, 기획취재</span>
								</dd>
							</dl>
							<dl>
								<dt>운영본부</dt>
								<dd>
									<strong>총무팀</strong>
									<span>인사, 재무, 회계, 법무</span>
								</dd>
								<dd>
									<strong>기획팀</strong>
									<span>기획, 신사업,</span>
									<span>스포츠마케팅</span>
								</dd>
								<dd>
									<strong>광고사업팀</strong>
									<span>SO마케팅,</span>
									<span>인터넷광고, 광고</span>
								</dd>
							</dl>
							<dl>
								<dt>IT사업본부</dt>
								<dd>
									<strong>IT영업팀</strong>
									<span>IT영업</span>
								</dd>
								<dd>
									<strong>기업연구소(IT개발)</strong>
									<span>IT개발, 웹디자인</span>
								</dd>
							</dl>
							<dl>
								<dt>전략사업본부</dt>
								<dd>
									<strong>방송영업팀</strong>
									<span>방송영업, 방송제휴</span>
								</dd>
								<dd>
									<strong>콘텐츠관리팀</strong>
									<span>해외콘텐츠,</span>
									<span>국내콘텐츠</span>
								</dd>
								<dd>
									<strong>해외신규사업팀</strong>
									<span>교육사업, 신사업</span>
								</dd>
							</dl>
							<dl>
								<dt>통신사업본부</dt>
								<dd>
									<strong>통신영업팀</strong>
									<span>통신영업, 통신가설</span>
								</dd>
								<dd>
									<strong>통신CS팀</strong>
									<span>고객상담, 고객관리</span>
								</dd>
							</dl>
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