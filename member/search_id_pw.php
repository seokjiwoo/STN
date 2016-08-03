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
						<div class="idpwSearch">
							<div class="txt">
								<p><span>아이디</span>를 분실하셨나요?</p>
								<p>본인의 이름 및 이메일 주소를 입력해 주세요.</p>
							</div>
							<div class="inputTables02 mt30">
								<table>
									<caption>아이디찾기표</caption>
									<colgroup><col width="5%" /><col width="95%" /></colgroup>
									<tbody>
										<tr>
											<th>이름</th>
											<td><input type="text" class="inpType01 w166"></td>
										</tr>
										<tr>
											<th>이메일</th>
											<td>
												<input type="text" class="inpType01 w166"> @
												<input type="text" class="inpType01 w166">
												<span class="selectType01">
													<select class="w132">
														<option>이메일선택</option>
													</select>
												</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- 확인버튼 누르면 나오는 레이어 -->
						<div class="idpwShow" style="display:none">
							<div class="tar"><a href="#"><img src="../images/btn/btn_close.png" alt="닫기" /></a></div>
							<p>회원님의 아이디는 ydkim 입니다.</p>
						</div>
						<!-- // 확인버튼 누르면 나오는 레이어 -->
					</div>
					<div class="tac mt10"><a href="#" class="blue w50"><span>확인</span></a></div>

					<div class="memberBox mt20">
						<div class="idpwSearch">
							<div class="txt">
								<p><span>비밀번호</span>를 분실하셨나요?</p>
								<p>정보를 입력하시면 임시비밀번호를 발송해드립니다.</p>
							</div>
							<div class="inputTables02 mt30">
								<table>
									<caption>비밀번호찾기표</caption>
									<colgroup><col width="5%" /><col width="95%" /></colgroup>
									<tbody>
										<tr>
											<th>이름</th>
											<td><input type="text" class="inpType01 w166"></td>
										</tr>
										<tr>
											<th>아이디</th>
											<td><input type="text" class="inpType01 w166"></td>
										</tr>
										<tr>
											<th>이메일</th>
											<td>
												<input type="text" class="inpType01 w166"> @
												<input type="text" class="inpType01 w166">
												<span class="selectType01">
													<select class="w132">
														<option>이메일선택</option>
													</select>
												</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- 확인버튼 누르면 나오는 레이어 -->
						<div class="idpwShow" style="display:none">
							<div class="tar"><a href="#"><img src="../images/btn/btn_close.png" alt="닫기" /></a></div>
							<p>회원님의 이메일 주소로 임시 비밀번호가 발송되었습니다.</p>
						</div>
						<!-- // 확인버튼 누르면 나오는 레이어 -->
					</div>
					<div class="tac mt10"><a href="#" class="blue w50"><span>확인</span></a></div>

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