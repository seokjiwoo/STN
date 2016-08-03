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

					<h3 class="title02">채용프로세스</h3>

					<div class="process mt50">
						<ul>
							<li>
								<img src="../images/img/img_process01.jpg" alt="" />
								<p>지원서 접수</p>
							</li>
							<li>
								<img src="../images/img/img_process02.jpg" alt="" />
								<p>서류전형</p>
							</li>
							<li>
								<img src="../images/img/img_process03.jpg" alt="" />
								<p>실무면접전형</p>
							</li>
							<li>
								<img src="../images/img/img_process04.jpg" alt="" />
								<p>임원면접전형</p>
							</li>
							<li>
								<img src="../images/img/img_process05.jpg" alt="" />
								<p class="last">최종입사</p>
							</li>
						</ul>
					</div>

					<div class="tables02-2 mt60">
						<table>
							<caption>채용안내표</caption>
							<colgroup>
								<col width="15%" /><col width="85%" />
							</colgroup>
							<tbody>
								<tr>
									<th scope="row"><div>1. 지원서 접수</div></th>
									<td>
										<p>
											신입 및 경력 지원자는 정해진 기간에 본 홈페이지(www.onstn.com)를 접속해 <br />
											입사지원서류(이력서, 자기소개서)를 접수해야 합니다. <br />
											지원서 접수 시 본인의 관심 직무에 맞게 지원을 하면 됩니다. <br />
											지원서 접수는 이력서와 자기소개서를 본 사이트에 로그인 이후 채용안내 카테고리 내에 업로드 하면 됩니다. 
										</p>
									</td>
								</tr>
								<tr>
									<th scope="row"><div>2. 서류전형</div></th>
									<td>
										<p>
											이력서 및 자기소개서를 바탕으로 지원자가 지원직무와 회사에 적합한 자격, 경험, 열정을 가진 인재인지를 <br />
											종합적으로 평가합니다.
										</p>
									</td>
								</tr>
								<tr>
									<th scope="row"><div>3. 면접전형</div></th>
									<td>
										<p>
											STN의 신입 및 경력 채용 면접은 총 2단계로 구성됩니다. <br />
											내실있는 면접과정을 통해 지원자의 기초소양, 직무능력 등을 면밀하게 평가함으로써 직무수행에 필요한 역량과 <br />
											회사가 추구하는 가치에 부합하는 인재를 선발합니다.<br /><br />
											1단계 : 실무면접전형   -   2단계 : 임원면접전형
										</p>
									</td>
								</tr>
								<tr>
									<th scope="row"><div>4. 최종입사</div></th>
									<td>
										<p>대표이사 면접에 합격된 대상자는 STN 사원으로 입사하게 됩니다.</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					<h3 class="title02 mt50">채용문의</h3>

					<div class="addressInfo mt20">
						<ul>
							<li>
								<em>이메일</em>
								<span></span>
							</li>
							<li>
								<em>문의전화</em>
								<span>1599-1242</span>
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