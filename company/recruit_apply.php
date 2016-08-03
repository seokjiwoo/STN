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
					
					<div class="recruitInfo">
						<p>2016 상반기 신입·경력 채용</p>
						<div class="down mt15">
							<a href="#"><span>지원서 다운로드</span></a>
						</div>
					</div>

					<div class="inputTables01 mt40">
						<table>
							<caption>입사지원입력표</caption>
							<colgroup>
								<col width="19%" /><col width="81%" />
							</colgroup>
							<tbody>
								<tr>
									<th>이름</th>
									<td><input type="text" class="inpType01 w166" /></td>
								</tr>
								<tr>
									<th>연락처</th>
									<td>
										<ul class="inpAlign">
											<li><input type="text" class="inpType01 w166" /></li>
										</ul>
									</td>
								</tr>
								<tr>
									<th>이메일</th>
									<td>
										<ul class="inpAlign">
											<li>
												<input type="text" class="inpType01 w166" /> @ 
												<input type="text" class="inpType01 w166" />
												<span class="selectType01">
													<select class="w132">
														<option>이메일선택</option>
													</select>
												</span>
											</li>
											<li><a href="#" class="gray03 w66"><span>중복확인</span></a></li>
										</ul>
									</td>
								</tr>
								<tr>
									<th class="vtop">내용</th>
									<td>
										<div class="textarea02 w567"><textarea class="h178"></textarea></div>
									</td>
								</tr>
								<tr>
									<th>지원서</th>
									<td><input type="file" /></td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="btnAlgin tac mt30">
						<a href="#" class="blue w80"><span>지원하기</span></a>
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