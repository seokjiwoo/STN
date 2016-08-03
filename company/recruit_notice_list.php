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

					<div class="tables01">
						<table>
							<caption>게시물목록보기</caption>
							<colgroup>
								<col width="10%" /><col width="65%" />
								<col width="15%" /><col width="10%" />
							</colgroup>
							<thead>
								<tr>
									<th scope="col">번호</th>
									<th scope="col">제목</th>
									<th scope="col">작성일</th>
									<th scope="col">조회</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>3265</td>
									<td><a href="#" class="epll t_link">2016 상반기 신입·경력 채용</a></td>
									<td>2015.08.30</td>
									<td>100</td>
								</tr>
								<tr>
									<td>3265</td>
									<td><a href="#" class="epll t_link">2016 상반기 신입·경력 채용</a></td>
									<td>2015.08.30</td>
									<td>100</td>
								</tr>
								<tr>
									<td>3265</td>
									<td><a href="#" class="epll t_link">2016 상반기 신입·경력 채용</a></td>
									<td>2015.08.30</td>
									<td>100</td>
								</tr>
								<tr>
									<td>3265</td>
									<td><a href="#" class="epll t_link">2016 상반기 신입·경력 채용</a></td>
									<td>2015.08.30</td>
									<td>100</td>
								</tr>
								<tr>
									<td>3265</td>
									<td><a href="#" class="epll t_link">2016 상반기 신입·경력 채용</a></td>
									<td>2015.08.30</td>
									<td>100</td>
								</tr>
								<tr>
									<td>3265</td>
									<td><a href="#" class="epll t_link">2016 상반기 신입·경력 채용</a></td>
									<td>2015.08.30</td>
									<td>100</td>
								</tr>
								<tr>
									<td>3265</td>
									<td><a href="#" class="epll t_link">2016 상반기 신입·경력 채용</a></td>
									<td>2015.08.30</td>
									<td>100</td>
								</tr>
								<tr>
									<td>3265</td>
									<td><a href="#" class="epll t_link">2016 상반기 신입·경력 채용</a></td>
									<td>2015.08.30</td>
									<td>100</td>
								</tr><tr>
									<td>3265</td>
									<td><a href="#" class="epll t_link">2016 상반기 신입·경력 채용</a></td>
									<td>2015.08.30</td>
									<td>100</td>
								</tr>
								<tr>
									<td>3265</td>
									<td><a href="#" class="epll t_link">2016 상반기 신입·경력 채용</a></td>
									<td>2015.08.30</td>
									<td>100</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="paging">
						<a href="#" class="startBtn"></a>
						<a href="#" class="prevBtn"></a>
							<span>
								<a href="#">280</a>
								<a href="#">281</a>
								<a href="#">283</a>
								<a href="#">284</a>
								<a href="#" class="on">285</a>
								<a href="#">286</a>
								<a href="#">287</a>
								<a href="#">288</a>
								<a href="#">289</a>
								<a href="#">290</a>
							</span>
						<a href="#" class="nextBtn"></a>
						<a href="#" class="endBtn"></a>
					</div>

					<div class="postSearch">
						<div>
							<span class="selectType02">
								<select class="w90">
									<option>전체</option>
								</select>
							</span>
							<input type="text" class="inpType02 w345 bor-left-none" />
							<button class="search01 bor-left-none">검색</button>
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