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

					<div class="schedule">
						<ul>
							<li><a href="#"><span><em>15.08.24</em> 월</span></a></li>
							<li><a href="#"><span><em>15.08.24</em> 화</span></a></li>
							<li class="on"><a href="#"><span><em>15.08.24</em> 수</span></a></li>
							<li><a href="#"><span><em>15.08.24</em> 목</span></a></li>
							<li><a href="#"><span><em>15.08.24</em> 금</span></a></li>
							<li><a href="#"><span><em>15.08.24</em> 토</span></a></li>
							<li><a href="#"><span><em>15.08.24</em> 일</span></a></li>
						</ul>
					</div>

					<div class="tables01 mt20">
						<table>
							<caption>방송편성표</caption>
							<colgroup>
								<col width="10%" /><col width="50%" /><col width="10%" />
								<col width="20%" /><col width="10%" />
							</colgroup>
							<thead>
								<tr>
									<th scope="col">시간</th>
									<th scope="col">프로그램명</th>
									<th scope="col">등급</th>
									<th scope="col">서비스</th>
									<th scope="col">장르</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>02:00</th>
									<td><p class="t_link epll">2015 내셔널리그</p></td>
									<td><span class="square03 c2 inb"><em>19</em></span></td>
									<td>
										<ul class="icon_align">
											<li><span class="square01 c2"><em>생</em></span></li>
											<li><span class="square01 c1"><em>재</em></span></li>
											<li><span class="square02 c1"><em>HD</em></span></li>
										</ul>
									</td>
									<td>스포츠</td>
								</tr>
								<tr class="on">
									<th>04:00</th>
									<td><p class="t_link epll">꿈꾸는대학로-재능기부콘서트꿈꾸는대학로-재능기부콘서트꿈꾸는대학로-재능기부콘서트</p></td>
									<td><span class="square03 c2 inb"><em>19</em></span></td>
									<td>
										<ul class="icon_align">
											<li><span class="square01 c3"><em>본</em></span></li>
											<li><span class="square01 c4"><em>녹</em></span></li>
											<li><span class="square02 c2"><em>SD</em></span></li>
										</ul>
									</td>
									<td>음악</td>
								</tr>
								<tr>
									<th>05:00</th>
									<td><p class="t_link epll">한국에산다</p></td>
									<td><span class="square03 c3 inb"><em>12</em></span></td>
									<td>
										<ul class="icon_align">
											<li><span class="square01 c2"><em>생</em></span></li>
											<li><span class="square01 c1"><em>재</em></span></li>
											<li><span class="square02 c1"><em>HD</em></span></li>
										</ul>
									</td>
									<td>교양/정보</td>
								</tr>
								<tr>
									<th>06:00</th>
									<td><p class="t_link epll">2015 내셔널리그</p></td>
									<td><span class="square03 c4 inb"><em>15</em></span></td>
									<td>
										<ul class="icon_align">
											<li><span class="square01 c2"><em>생</em></span></li>
											<li><span class="square01 c1"><em>재</em></span></li>
											<li><span class="square02 c2"><em>SD</em></span></li>
										</ul>
									</td>
									<td>스포츠</td>
								</tr>
								<tr>
									<th>07:00</th>
									<td><p class="t_link epll">STN 특별기획 M1 GLOBAL CHALLENGE 34</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td>
										<ul class="icon_align">
											<li><span class="square01 c3"><em>본</em></span></li>
											<li><span class="square01 c4"><em>녹</em></span></li>
											<li><span class="square02 c2"><em>SD</em></span></li>
										</ul>
									</td>
									<td>스포츠</td>
								</tr>
								<tr>
									<th>08:00</th>
									<td><p class="t_link epll">산업실록</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>교양/정보</td>
								</tr>
								<tr>
									<th>09:00</th>
									<td><p class="t_link epll">2015 내셔널리그</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>스포츠</td>
								</tr>
								<tr>
									<th>11:00</th>
									<td><p class="t_link epll">산업뉴스</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>스포츠</td>
								</tr>
								<tr>
									<th>02:00</th>
									<td><p class="t_link epll">TV 한권의 책</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>음악</td>
								</tr>
								<tr>
									<th>12:00</th>
									<td><p class="t_link epll">2015 KCC 프로 아마 최강전</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>교양/정보</td>
								</tr>
								<tr>
									<th>12:30</th>
									<td><p class="t_link epll">STN 스포츠 특강-스포츠종목 온라인 콘텐츠 개발</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>스포츠</td>
								</tr>
								<tr>
									<th>13:00</th>
									<td><p class="t_link epll">적중창업</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>교양/정보</td>
								</tr>
								<tr>
									<th>14:00</th>
									<td><p class="t_link epll">바스켓쇼</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>스포츠</td>
								</tr>
								<tr>
									<th>16:00</th>
									<td><p class="t_link epll">제12회 회장배 전국 학생 스쿼시 선수권 대회</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>교양/정보</td>
								</tr>
								<tr>
									<th>02:00</th>
									<td><p class="t_link epll">STN 스포츠 특강-스포츠종목 온라인 콘텐츠 개발</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>스포츠</td>
								</tr>
								<tr>
									<th>17:00</th>
									<td><p class="t_link epll">바스켓쇼</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>교양/정보</td>
								</tr>
								<tr>
									<th>17:30</th>
									<td><p class="t_link epll">TV 한권의 책</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>스포츠</td>
								</tr>
								<tr>
									<th>18:00</th>
									<td><p class="t_link epll">2015 KCC 프로 아마 최강전</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>음악</td>
								</tr>
								<tr>
									<th>20:00</th>
									<td><p class="t_link epll">제12회 회장배 전국 학생 스쿼시 선수권 대회</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>교양/정보</td>
								</tr>
								<tr>
									<th>23:00</th>
									<td><p class="t_link epll">STN 스포츠 특강-스포츠종목 온라인 콘텐츠 개발</p></td>
									<td><span class="square03 c1 inb"><em>all</em></span></td>
									<td></td>
									<td>교양/정보</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<div class="iconInfomation mt25">
						<p class="cYellow ">* 본 편성표는 방송사 사정에 따라 변경될 수 있습니다.</p>
						<div class="iconKinds mt15">
							<div class="iconDis">
								<ul>
									<li>
										<span class="square01 c2"><em>생</em>
										</span> <em>생방송</em>
									</li>
									<li>
										<span class="square01 c4"><em>녹</em></span>
										<em>녹화방송</em>
									</li>
									<li>
										<span class="square01 c3"><em>본</em></span>
										<em>본방송</em>
									</li>
									<li>
										<span class="square02 c2"><em>SD</em></span>
										<em>SD방송</em>
									</li>
									<li>
										<span class="square02 c1"><em>HD</em></span>
										<em>HD방송</em>
									</li>
								</ul>
							</div>
							<div class="iconLevel">
								<ul>
									<li><span class="square03 c1"><em>all</em></span></li>
									<li><span class="square03 c3"><em>12</em></span></li>
									<li><span class="square03 c4"><em>15</em></span></li>
									<li>
										<span class="square03 c2"><em>19</em></span>
										<em>시청등급</em>
									</li>
								</ul>
							</div>
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