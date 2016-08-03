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

					<div class="tables02">
						<table>
							<caption>게시물보기표</caption>
							<thead>
								<tr>
									<th scope="col">
										<ul>
											<li class="epll">공지사항 제목자리공지사항 제목자리공지사항 제목자리공지사항 제목자리공지사항 제목자리공지사항 제목자리공지사항 제목자리</li>
											<li>
												<span>2015.08.30</span>
												<span>조회:1503</span>
											</li>
										</ul>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<p class="tac"><img src="../images/img/img_sample04.jpg" alt="" /></p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="tar mt15"><a href="#" class="blue w50"><span>목록</span></a></div>

					<div class="tables01 mt30">
						<table>
							<caption>이전/다음 게시물이동</caption>
							<colgroup>
								<col width="88%" /><col width="12%" />
							</colgroup>
							<tbody>
								<tr>
									<td><a href="#" class="p_prev epll">2015년 8월 STN 공지사항 내용입니다.2015년 8월 STN 공지사항 내용입니다.2015년 8월 STN 공지사항 내용입니다.2015년 8월 STN 공지사항 내용입니다.</a></td>
									<td class="bor-left-none">2015.08.24</td>
								</tr>
								<tr>
									<td><a href="#" class="p_next epll">2015년 8월 STN 공지사항 내용입니다.</a></td>
									<td class="bor-left-none">2015.08.24</td>
								</tr>
							</tbody>
						</table>
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