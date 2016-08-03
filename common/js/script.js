var moduleUI = (function(moduleUI, $, undefined){

	// GNB
	moduleUI.gnb = function(){
		this.init = function(){
			this.menu = ".gnb > ul > li";
			this.easing = "easeInOutCirc";
			this.speed = 200;
		};
		this.initEvent = function(){
			var that = this;
			$(this.menu).on("mouseenter", function(){
				$(this).addClass("on").find("> ul").stop().slideDown( this.speed, that.easing );
			});
			$(this.menu).on("mouseleave", function(){
				$(this).removeClass("on").find("> ul").stop().slideUp( this.speed, that.easing );
			});
		};
		this.init();
		this.initEvent();
	};

	// STN 채널가이드
	moduleUI.chGuide = function(){
		this.init = function(){
			this.chList = ".chList > .ch";
			this.chCount = $(this.chList).length;
			this.num = 0;
			this.prevBtn = ".ch_btn .prevBtn";
			this.nextBtn = ".ch_btn .nextBtn";
		};
		this.initEvent = function(){
			var that = this;
			$(this.prevBtn).on("click", function(){
				that.prevCount();
			});
			$(this.nextBtn).on("click", function(){
				that.nextCount();
			});
		};
		this.nextCount = function(){
			this.num += 1;
			if( this.num >= this.chCount ){
				this.num = 0;
			};
			this.activeCh( this.num );
		};
		this.prevCount = function(){
			this.num -= 1;
			if( this.num < 0){
				this.num = this.chCount -1;
			}
			this.activeCh( this.num );
		};
		this.activeCh = function( counter ){
			$(this.chList).removeClass("on");
			$(this.chList).eq( counter ).addClass("on");
		};
		this.init();
		this.initEvent();
	};

	// 인풋요소 비우기
	moduleUI.formClear = function( selecter ){
		this.init = function( selecter ){
			this.form = selecter;
			this.att = null;
		};
		this.initEvent = function(){
			var that = this;
			$(this.form).on("focus", function(){
				that.att = $(this).val();
				$(this).val("");
			});
			$(this.form).on("focusout", function(){
				$(this).val(that.att);
			});
		};
		this.init( selecter );
		this.initEvent();
	};

	// 프로그램 레이어열기
	moduleUI.programLayer = function(){
		this.init = function(){
			this.menuList = ".lectureList > ul > li";
			this.listCon = ".lectureList .con";
			this.layer = ".listContent";
			this.layerNone = ".listContent .title a";
			this.oLeft = null;
			this.oTop = null;
		};
		this.initEvent = function(){
			var that = this;
			$(this.menuList + ":even").on("click", function(){
				that.checkPosition( $(this), true );
			});
			$(this.menuList + ":odd").on("click", function(){
				that.checkPosition( $(this), false );
			});
			$(this.layerNone).on("click", function(e){
				e.stopPropagation();
				e.preventDefault();
				that.layerClose();
			});
		};
		this.checkPosition = function( obj, booleans ){
			this.hideLayer( obj );
			if( booleans  ){
				this.showLayer( obj );
			}else{
				this.showLayer( obj );
				obj.find( this.layer ).css({ marginLeft : -510 });
			}
		};
		this.showLayer = function( obj ){
			this.oLeft = obj.offset().left;
			this.oTop = obj.offset().top;
			obj.find( this.layer ).css({
				left : this.oLeft,
				top : this.oTop + 178,
				display : "block"
			});
		};
		this.hideLayer = function( obj ){
			$(this.listCon).find("> i").remove();
			$(obj).find( $(this.listCon) ).append("<i></i>");
			$(this.layer).css({display:"none"});
			$(this.menuList).removeClass("on");
			obj.addClass("on");
		};
		this.layerClose = function(){
			$(this.layer).each(function(i){ $(this).css({ display : "none" }); });
			$(this.menuList).each(function(){ $(this).removeClass("on"); });
			$(this.listCon).find("> i").remove();
		};
		this.init();
		this.initEvent();
	};

	moduleUI.preLoader = function(){
		this.imageSources = [];
		var that = this;
		$("img").each(function(){
			var sources = $(this).attr("img");
			that.imageSources.push(sources);
		});
		if($(this.imageSources).load()){
			alert("이미지 로딩 완료");
		}
    };

	// 구글 지도 API
	// 함수호출시 파라미터 (지도보일 영역, 제목, X 좌표, Y좌표)
	moduleUI.googleMap = function( idName , title , xPoint, yPoint ){
		/*
			http://openapi.map.naver.com/api/geocode.php?key=f32441ebcd3cc9de474f8081df1e54e3&encoding=euc-kr&coord=LatLng&query=서울특별시 강남구 강남대로 456
	            위의 링크에서 뒤에 주소를 적으면 x,y 값을 구할수 있습니다.
		*/
		this.Y_point = xPoint,// Y 좌표
		this.X_point = yPoint, // X 좌표
		this.zoomLevel = 16, // 지도의 확대 레벨 : 숫자가 클수록 확대정도가 큼
		this.markerTitle = "홈코트 위치",	// 현재 위치 마커에 마우스를 오버을때 나타나는 정보
		this.markerMaxWidth = 300,	// 마커를 클릭했을때 나타나는 말풍선의 최대 크기
		this.myLatlng = new google.maps.LatLng(this.Y_point, this.X_point);
		var mapOptions = {
			zoom: this.zoomLevel,
			center: this.myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById( idName ), mapOptions);
		var marker = new google.maps.Marker({
			position: this.myLatlng,
			map: map,
			title: this.markerTitle
		});
		var infowindow = new google.maps.InfoWindow(
			{
				//content: this.contentString,
				content: title ,
				maxWidth: this.markerMaxWidth
			}
		);
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map, marker);
		});
	};

	// 윈도우 팝업 열기 ( 주소, 너비 , 높이 )
	moduleUI.popupOpen = function(url, w, h) {
		this.popUrl = url;
		this.popOption = "width=" + w +"," + "height=" + h +"," + "resizable=no, scrollbars=no, status=no;"
		window.open(this.popUrl,"",this.popOption);
	}
	
	return moduleUI;

})(window.moduleUI || {}, jQuery);

$(window).on("load", function(){
	moduleUI.gnb();
	$(".lectureList div.con em").append("<span></span>");
	$("#footmenu li:eq(3)").on("click", function(e){ e.preventDefault(); moduleUI.popupOpen("/etc/access_terms.php",650,680) });
	$("#footmenu li:eq(4)").on("click", function(e){ e.preventDefault(); moduleUI.popupOpen("/etc/personal_data.php",650,680) });
	$("#footmenu li:eq(5)").on("click", function(e){ e.preventDefault(); moduleUI.popupOpen("/etc/email_notcollect.php",650,312) });
});