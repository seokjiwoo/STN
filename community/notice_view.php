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
										<p>
										[STN스포츠=이보미 기자] 홍해천 감독(송림고)이 이끄는 한국 U-23 남자배구대표팀이 세계선수권이 열리는 두바이로 향한다. <br /><br />
										지난 5월 미얀마에서 열린 제1회 아시아남자 U-23 선수권대회에서 2위에 오르며 출전권을 획득한 한국. 2015 세계남자 U-23 선수권대회에<br /> 출전한다. 이번 대회는 8월 24일부터 31일까지 아랍에미리트 두바이에서 각 대륙대표 12팀이 참가하여 열전을 펼치게 된다.<br /><br />
										2013년 브라질에서 열린 첫 대회에서는 개최국 브라질이 우승을 차지했다. 당시 아시아 출전국은 FIVB 세계랭킹에 따라 출전권이 결정돼 <br />랭킹에 뒤쳐졌던 한국은 출전 대상에 포함되지 않았다.<br /><br />
										U-23 대표팀이 출전하는 첫 세계대회인 만큼 선수단의 각오도 남다르다. 목표는 4강이다. 홍해천 감독은 “시니어와 마찬가지로 유럽, 남미 <br />팀들이 굉장히 강하다. 힘과 높이에서는 밀리겠지만 조직력과 끈끈한 수비력으로 맞선다면 좋은 결과가 따라올 것”이라 기대했다.
										</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="tar mt15"><button class="blue w50">목록</button></div>

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