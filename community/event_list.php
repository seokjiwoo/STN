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

					<div class="eventList">
						<ul>
							<li>
								<a href="#"><img src="../../images/img/img_sample09.jpg" alt="" /></a>
								<p>
									<a href="#">STN IPTV 개국기념 연예인야구단 친선경기 개최STN IPTV 개국기념 연예인야구단 친선경기 개최STN IPTV 개국기념 연예인야구단 친선경기 개최</a>
									<span class="txt">
										<span class="icon on"><i>진행중</i></span>
										<em>2015.08.24 ~ 2015.10.11</em>
									</span>
								</p>
							</li>
							<li>
								<a href="#"><img src="../../images/img/img_sample09.jpg" alt="" /></a>
								<p>
									<a href="#">STN IPTV 개국기념 연예인야구단 친선경기 개최</a>
									<span class="txt">
										<span class="icon off"><i>종료</i></span>
										<em>2015.08.24 ~ 2015.10.11</em>
									</span>
								</p>
							</li>
							<li>
								<a href="#"><img src="../../images/img/img_sample09.jpg" alt="" /></a>
								<p>
									<a href="#">STN IPTV 개국기념 연예인야구단 친선경기 개최STN IPTV 개국기념 연예인야구단 친선경기 개최STN IPTV 개국기념 연예인야구단 친선경기 개최</a>
									<span class="txt">
										<span class="icon on"><i>진행중</i></span>
										<em>2015.08.24 ~ 2015.10.11</em>
									</span>
								</p>
							</li>
							<li>
								<a href="#"><img src="../../images/img/img_sample09.jpg" alt="" /></a>
								<p>
									<a href="#">STN IPTV 개국기념 연예인야구단 친선경기 개최</a>
									<span class="txt">
										<span class="icon off"><i>종료</i></span>
										<em>2015.08.24 ~ 2015.10.11</em>
									</span>
								</p>
							</li>
						</ul>
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