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
					
					<div class="tables03">
						<table>
							<caption>게시물쓰기표</caption>
							<colgroup>
								<col width="22%" /><col width="78%" />
							</colgroup>
							<tbody>
								<tr>
									<th scope="row">작성자</th>
									<td><input type="text" class="inpType03 w166" /></td>
								</tr>
								<tr>
									<th scope="row">제목</th>
									<td><input type="text" class="inpType03 w606" /></td>
								</tr>
								<tr>
									<th scope="row">내용</th>
									<td><div class="textarea"><textarea class="h626"></textarea></div></td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="tac mt15">
						<a href="#" class="blue w50"><span>등록</span></a>
						<a href="#" class="gray02 w50"><span>취소</span></a>
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