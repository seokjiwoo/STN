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
										
					<div class="titleWrap mt30">
						<h3 class="title01 fl">상세정보입력</h3>
						<span class="fr">*표시는 필수항목이므로 반드시 반드시 입력해 주시기 바랍니다.</span>
					</div>

					<div class="inputTables01 mt20">
						<table>
							<caption>회원정보입력표</caption>
							<colgroup>
								<col width="19%" /><col width="81%" />
							</colgroup>
							<tbody>
								<tr>
									<th>이름 <i>*</i></th>
									<td>홍길동</td>
								</tr>
								<tr>
									<th>아이디 <i>*</i></th>
									<td>ydkim</td>
								</tr>
								<tr>
									<th class="vtop">이메일 <i>*</i></th>
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
										<p class="mt10">이메일 인증 절차에 필요하니 사용하고 계시는 정확한 메일주소를 입력해주세요.</p>
									</td>
								</tr>
								<tr>
									<th>비밀번호 <i>*</i></th>
									<td><input type="password" class="inpType01 w166" /></td>
								</tr>
								<tr>
									<th>비밀번호 확인 <i>*</i></th>
									<td><input type="password" class="inpType01 w166" /></td>
								</tr>
								<tr>
									<th>E-mail 수신 <i>*</i></th>
									<td>
										<ul class="inpAlign">
											<li><input type="checkbox" id="chk3" /><label for="chk3" class="pl10">수신</label></li>
											<li class="ml32"><input type="checkbox" id="chk4" /><label for="chk4" class="pl10">수신안함</label></li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="btnAlgin tac mt15">
						<a href="#" class="blue w50"><span>수정</span></a>
						<a href="#" class="gray02 w50"><span>취소</span></a>
					</div>

					<!-- 수정 버튼누르면 나오는 문구 

						회원정보가 변경되었습니다. 수정된 사항을 확인해주세요.

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