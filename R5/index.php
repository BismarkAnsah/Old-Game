<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<title>Web 1920 – 1</title>
	<!-- <link rel="stylesheet" href="css/system.css"> -->
	<link rel="stylesheet" href="slot_machine/dist/slotmachine.css" />
	<script src="slot_machine/dist/slotmachine.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style id="applicationStylesheet" type="text/css">
		* {
			font-size: 36px;
			box-sizing: border-box;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
		}

		textarea{
			resize: none;
			margin-left: 54px;
			width: 2400px;
			height: 450px;
            outline: none;
			color: #b88785;
			background-color: #f8f4e9;
		}

		.num-btn-controls>* {
			margin: 30px !important;
		}

		.num-btn-controls{
			width: fit-content;
			margin-left: 36px;
			/* border: 5px solid #000; */
		
		}


		.cart-info-head {
			list-style-type: none;
			display: flex;
			justify-content: space-between;
			width: 1200px;
			position: relative;
			left: 600px;
		}

		.work-area.outline {

			border: 3px solid #707070;
			padding: 30px;
		}

		.work-area .col {
			display: block;
			justify-content: space-between;

			display: inline;
			/* border: 2px solid #000; */
			width: fit-content;
		}

		.line {
			margin: 30px;
			position: relative;
			right: 45px;
			border: 2px solid #707070;
			width: 2700px;
			z-index: 999;
		}

		.cart-area {
			position: relative;
			right: 45px;
		}


		.solo-play {
			margin-left: 60px;
		}

		.solo-play>* {
			margin-right: 12px;
		}

		.work-area .row {
			display: flex;
			width: fit-content;
			/* border: 5px solid black; */
			justify-content: space-between;
			margin-top: 90px;
			margin-bottom: 99px;
		}

		.work-area .row:nth-child(5) {
			margin-top: 150px;
		}

		.work-area {
			border: 5px solid #707070;

			/* position: relative;
	width: 2000px;
	display: flex;
	justify-content: center;
	align-items: center; */
		}

		.quick-settings-box {
			color: #707070;
			position: relative;
			left: 1030px;
			top: 120px;
			list-style-type: none;
			display: flex;
			align-items: center;
			justify-content: space-between;
			height: fit-content;
			width: 2400px;
		}

		.quick-settings-box>li {
			margin-left: 21px;
		}

		.quick-settings-box>li>* {
			font-size: 42px;
			margin-left: 12px;
			cursor: pointer;
		}

		#how-to-play {
			cursor: pointer;
		}

		.mediaViewInfo {
			--web-view-name: Web 1920 – 1;
			--web-view-id: Web_1920__1;
			--web-scale-on-resize: true;
			--web-enable-deep-linking: true;
		}

		:root {
			--web-view-ids: Web_1920__1;
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			border: none;
		}

		#Web_1920__1 {
			position: absolute;
			width: 5213px;
			height: 3636px;
			background-color: #f1f3fe;
			overflow: hidden;
			--web-view-name: Web 1920 – 1;
			--web-view-id: Web_1920__1;
			--web-scale-on-resize: true;
			--web-enable-deep-linking: true;
		}

		#Rectangle_1_l {
			fill: url(#Rectangle_1_l);
		}

		.Rectangle_1_l {
			position: absolute;
			overflow: visible;
			width: 5213px;
			height: 3639px;
			left: 0px;
			top: 0px;
		}

		#Path_2 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Path_2 {
			overflow: visible;
			position: absolute;
			width: 2722px;
			height: 1570px;
			left: 888px;
			top: 558px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Group_2 {
			position: absolute;
			width: 2660px;
			height: 1515px;
			left: 921px;
			top: 588px;
			overflow: visible;
		}

		#Rectangle_4 {
			opacity: 1;
			fill: #eee3bb;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_4 {
			position: absolute;
			overflow: visible;
			width: 2660px;
			height: 125px;
			left: 0px;
			top: 2px;
		}

		#Rectangle_5 {
			fill: #eef0fc;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_5 {
			position: absolute;
			overflow: visible;
			width: 2660px;
			height: 1515px;
			left: 0px;
			top: 0px;
		}

		/* #All_5 {
        left: 95px;
        top: 41px;
        position: absolute;
        overflow: visible;
        width: 67px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      } */

		.game-group-nav-box,
		.history-nav-box {
			height: fit-content;
			width: fit-content;
			margin-bottom: 63px;
		}

		.game-group-nav-box>ul,
		.history-nav-box>ul {
			border: 5px solid black;
			width: 2589px;
			height: 120px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			list-style-type: none;
			padding: 12px;
			border-radius: 45px;
			background-color: #eee3bb;
		}

		.game-group-nav-box>ul>li,
		.history-nav-box>ul>li {
			cursor: pointer;
			border-radius: 9px;
			padding: 6px;
			color: #707070;
		}

		.simple-hover>*:hover {
			color: #000;
		}

		/* #All_4 {
        left: 239px;
        top: 41px;
        position: absolute;
        overflow: visible;
        width: 67px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #First_3 {
        left: 383px;
        top: 41px;
        position: absolute;
        overflow: visible;
        width: 90px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #Mid_3 {
        left: 553px;
        top: 41px;
        position: absolute;
        overflow: visible;
        width: 87px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #Last_3 {
        left: 718px;
        top: 41px;
        position: absolute;
        overflow: visible;
        width: 87px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #First_2 {
        left: 884px;
        top: 41px;
        position: absolute;
        overflow: visible;
        width: 90px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #Last_2 {
        left: 1052px;
        top: 41px;
        position: absolute;
        overflow: visible;
        width: 87px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #Fixed_place {
        left: 1218px;
        top: 41px;
        position: absolute;
        overflow: visible;
        width: 168px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #Any_Place {
        left: 1464px;
        top: 41px;
        position: absolute;
        overflow: visible;
        width: 146px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #BSOE {
        left: 1688px;
        top: 41px;
        position: absolute;
        overflow: visible;
        width: 120px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #Fun {
        left: 1887px;
        top: 40px;
        position: absolute;
        overflow: visible;
        width: 56px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #Pick_2 {
        left: 2021px;
        top: 40px;
        position: absolute;
        overflow: visible;
        width: 89px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #Pick_3 {
        left: 2189px;
        top: 40px;
        position: absolute;
        overflow: visible;
        width: 89px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      }

      #Pick_4 {
        left: 2355px;
        top: 40px;
        position: absolute;
        overflow: visible;
        width: 89px;
        white-space: nowrap;
        text-align: left;
        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 34px;
        color: rgba(112, 112, 112, 1);
      } */

		#Rectangle_35 {
			opacity: 0.55;
			fill: rgba(112, 112, 112, 1);
		}

		.Rectangle_35 {
			width: 43px;
			height: 44px;
			position: absolute;
			overflow: visible;
			transform: translate(-927px, -588px) matrix(1, 0, 0, 1, 3485, 628.5) rotate(90deg);
			transform-origin: center;
		}

		#Rectangle_36 {
			opacity: 0.43;
			fill: rgba(128, 185, 230, 1);
		}

		.Rectangle_36 {
			position: absolute;
			overflow: visible;
			width: 207px;
			height: 64px;
			left: 695px;
			top: 408px;
		}

		#Rectangle_95 {
			opacity: 0.43;
			fill: rgba(128, 185, 230, 1);
		}

		.Rectangle_95 {
			position: absolute;
			overflow: visible;
			width: 207px;
			height: 64px;
			left: 944px;
			top: 408px;
		}

		#V {
			left: 2572.5px;
			top: 49px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(206, 206, 206, 1);
		}

		#Straight {
			left: 50px;
			top: 159px;
			position: absolute;
			overflow: visible;
			width: 104px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#Group {
			left: 52px;
			top: 234px;
			position: absolute;
			overflow: visible;
			width: 84px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#n_0221221413 {
			left: 228px;
			top: 1043px;
			position: absolute;
			overflow: visible;
			width: 179px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(213, 135, 126, 1);
		}

		#the_amount {
			left: 646px;
			top: 1043px;
			position: absolute;
			overflow: visible;
			width: 155px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#amount_betting {
			left: 1771px;
			top: 1040px;
			position: absolute;
			overflow: visible;
			width: 208px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#Enter_bet_amount {
			left: 2100px;
			top: 1048px;
			position: absolute;
			overflow: visible;
			width: 232px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(213, 135, 126, 1);
		}

		#n_ {
			left: 2213px;
			top: 1146px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#n__bh {
			left: 2078px;
			top: 1144px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#Text {
			left: 2334px;
			top: 1144px;
			position: absolute;
			overflow: visible;
			width: 22px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#betting_multiple {
			left: 1771px;
			top: 1146px;
			position: absolute;
			overflow: visible;
			width: 213px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#multiple {
			left: 646px;
			top: 1155px;
			position: absolute;
			overflow: visible;
			width: 109px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#model {
			left: 801px;
			top: 1268px;
			position: absolute;
			overflow: visible;
			width: 85px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#Bonus {
			left: 47px;
			top: 1152px;
			position: absolute;
			overflow: visible;
			width: 82px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		.active-game-box {
			display: flex;
			justify-content: space-between;
			width: 600px;
		}

		#n_st {
			left: 52px;
			top: 558px;
			position: absolute;
			overflow: visible;
			width: 44px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(112, 112, 112, 1);
		}

		#n_st_bq {
			left: 50px;
			top: 731px;
			position: absolute;
			overflow: visible;
			width: 44px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(112, 112, 112, 1);
		}

		#n_st_br {
			left: 52px;
			top: 904px;
			position: absolute;
			overflow: visible;
			width: 44px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(112, 112, 112, 1);
		}

		/* #how-to-play {
			left: 716px;
			top: 419px;
			position: absolute;
			overflow: visible;
			width: 160px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		} */

		#What_is_solo,
		#how-to-play {
			box-sizing: border-box;
			padding: 12px;
			background-color: #bfd8f2;
			color: #707070;
			border-radius: 24px;
			outline: none;
		}

		button {
			cursor: pointer;
		}

		.hotCold-lack {
			/* border: 4px solid #000; */
			margin-left: 900px !important;
		}

		.hotCold-box,
		.lack-box {
			display: inline-block;
		}

		label {
			cursor: pointer;
		}

		.hotCold,
		.lack {
			height: 30px;
			width: 30px;
			background-color: #92c6ec;
			outline: none;
			margin: 12px;
			cursor: pointer;
		}





		#Path_1 {
			fill: rgba(112, 112, 112, 1);
		}

		.path-c {
			width: 424px !important;
			height: 66px !important;
		}

		.shape-c:hover,
		.hover-text-c:hover {
			fill: rgba(73, 85, 109, 1) !important;
			color: #fff !important;
		}

		.Path_1 {
			overflow: visible;
			position: absolute;
			width: 424px;
			height: 66px;
			left: 629.944px;
			top: 156px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_1_bx {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_1_bx {
			overflow: visible;
			position: absolute;
			width: 371.083px;
			height: 56px;
			left: 1128.884px;
			top: 154px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_1_by {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_1_by {
			overflow: visible;
			position: absolute;
			width: 328.25px;
			height: 54.5px;
			left: 190.75px;
			top: 233px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_1_bz {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_1_bz {
			overflow: visible;
			position: absolute;
			width: 371.083px;
			height: 54.5px;
			left: 629.944px;
			top: 234.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_1_b {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_1_b {
			overflow: visible;
			position: absolute;
			width: 371.083px;
			height: 54.5px;
			left: 1128.884px;
			top: 233px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_1_ca {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_1_ca {
			overflow: visible;
			position: absolute;
			width: 371.083px;
			height: 54.5px;
			left: 1601.614px;
			top: 234.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_1_cb {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_1_cb {
			overflow: visible;
			position: absolute;
			width: 371.083px;
			height: 53px;
			left: 629.944px;
			top: 311px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_1_cc {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_1_cc {
			overflow: visible;
			position: absolute;
			width: 328.25px;
			height: 56px;
			left: 190.75px;
			top: 308px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_1_cd {
			fill: rgba(73, 85, 109, 1);
			/* fill:rgb(243,234,219); */
		}

		.Path_1_cd {
			overflow: visible;
			position: absolute;
			width: 328px;
			height: 56px;
			left: 191px;
			top: 154px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Rectangle_50 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_50 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 1710px;
			top: 530px;
		}

		#Rectangle_51 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_51 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 1710px;
			top: 707px;
		}

		#Rectangle_52 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_52 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 1710px;
			top: 884px;
		}

		#Rectangle_53 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_53 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2026px;
			top: 530px;
		}

		#Rectangle_54 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_54 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2026px;
			top: 707px;
		}

		#Rectangle_55 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_55 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2026px;
			top: 884px;
		}

		#Rectangle_56 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_56 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2342px;
			top: 530px;
		}

		#Rectangle_57 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_57 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2342px;
			top: 707px;
		}

		#Rectangle_58 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_58 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2342px;
			top: 884px;
		}

		#Rectangle_59 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_59 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 1868px;
			top: 530px;
		}

		#Rectangle_60 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_60 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 1868px;
			top: 707px;
		}

		#Rectangle_61 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_61 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 1868px;
			top: 884px;
		}

		#Rectangle_62 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_62 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2185px;
			top: 530px;
		}

		#Rectangle_63 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_63 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2185px;
			top: 707px;
		}

		#Rectangle_64 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_64 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2185px;
			top: 884px;
		}

		#Rectangle_65 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_65 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2499px;
			top: 530px;
		}

		#Rectangle_66 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_66 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2499px;
			top: 707px;
		}

		#Rectangle_67 {
			fill: rgba(231, 224, 220, 1);
			stroke: rgb(24, 4, 4);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_67 {
			position: absolute;
			overflow: visible;
			width: 137px;
			height: 101px;
			left: 2499px;
			top: 884px;
		}

		#First_3_Straight_Joint_cn {
			left: 213.75px;
			top: 161px;
			position: absolute;
			overflow: visible;
			width: 280px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(255, 255, 255, 1);
		}

		#First_3_Straight_Manual {
			left: 663.363px;
			top: 161px;
			position: absolute;
			overflow: visible;
			width: 316px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;

			color: rgba(112, 112, 112, 1);
		}

		#All_5_Group_120 {
			left: 252px;
			top: 238px;
			position: absolute;
			overflow: visible;
			width: 207px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#All_5_Group__10 {
			left: 259px;
			top: 316px;
			position: absolute;
			overflow: visible;
			width: 199px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#All_5_Group_5 {
			left: 744.21px;
			top: 317px;
			position: absolute;
			overflow: visible;
			width: 175px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#All_5_Group_60 {
			left: 736.195px;
			top: 237px;
			position: absolute;
			overflow: visible;
			width: 191px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#All_5_Group_30 {
			left: 1219px;
			top: 237px;
			position: absolute;
			overflow: visible;
			width: 191px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#All_5_Group_20 {
			left: 1677px;
			top: 237px;
			position: absolute;
			overflow: visible;
			width: 191px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#All_5_StraightCombo {
			left: 1181px;
			top: 161px;
			position: absolute;
			overflow: visible;
			width: 286px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		.active-game-box>* {
			margin-right: 30px;
		}

		/* .prize {

			width: 71px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		} */

		#n_96515 {
			left: 514px;
			top: 421px;
			position: absolute;
			overflow: visible;
			width: 113px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(255, 0, 0, 1);
		}

		/* #All{
		left: 1752px;
		top: 529px;
		position: absolute;
		font-size: 34px;
		
	} */

		/*my css begins*/

		.path-outline {
			fill: #707070;
		}

		.path-outline-box {
			overflow: visible;
			position: absolute;
			width: 381px;
			height: 60px;
			transform: matrix(1, 0, 0, 1, 0, 0);
			z-index: 555;
		}

		.path-fill {
			fill: #f1f3fe;
			;
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.path-fill-box {
			overflow: visible;
			position: absolute;
			width: 366px;
			height: 60px;
			left: 13.4px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		.nav-item {
			position: relative;
			/* border: 2px solid black; */

			width: 375px;
			height: 60px;
			margin-left: 45px;
			padding: 0px;
		}



		.nav-text {
			position: absolute;
			z-index: 9999;
			left: 6px;
			top: 3px;
			font-size: 12px !important;
			color: #707070;
			/* border: 2px solid black !important; */
			display: flex;
			align-items: center;
			justify-content: center;
			width: 381px;
			/*#707070;*/
		}


		.nav-item:hover {
			cursor: pointer;
		}

		.nav-item:hover .path-outline,
		.nav-item:hover .path-fill {
			fill: #49556d;
		}

		.nav-item:hover .text {
			color: #fff;
		}

		.active-svg>*>* {
			fill: #49556d;
			;
			color: #fff;
		}

		.group,
		.straight {
			display: flex;
			width: fit-content;
			/* border: 2px solid black; */
			margin-left: 51px;
			margin-bottom: 15px;
			position: relative;
			left: 60px;
			bottom: 12px;
		}


		.game-nav-box {
			margin-left: 45px;

		}


		.game-nav-box>label {
			position: absolute;
			font-size: 36px !important;
			margin: 0px;
			/* border: 2px solid black; */
		}


		.btn-rec {
			padding: 21px;
			border: 2px solid #000;
			border-radius: 12px;
			background-color: #e7e0dc;
			width: 120px;
			text-align: center;
		}

		.num-controls {
			font-size: 34px;
			margin-left: 90px;
		}

		.hover-shape:hover, .active-btn {
			background-color: #49556d;
			color: #fff;
		}

		.num-group {
			font-size: 34px;
		
		}
		
	
		.num-group>label {
			display: inline-block;
			/* border: 3px solid black; */
			position: relative;
			width: 150px;
		
		}
		.num {
			padding: 21px;
			border-radius: 50%;
			background-color: #e7e0dc;
			border: 2px solid #000;
			border-right: 36px;
			margin-left: 21px;
			width: 96px;
			height: 96px;
		}

		label {
			color: #b88785;
			margin-right: 12px;
		}

		/* div.period-box {
			position: absolute;
			left: 45px;
			top: 1000px;
		} */

		::placeholder ~textarea::placeholder{
			text-align: center;
		}
		textarea::placeholder{
			padding: 30px;
		}

		select.period,
		select.bonus,
		input.bet-amt,
		input.multiplier-input {
			color: #b88785;
			padding: 3px;
			align-items: center;
			border: 2px solid #49546d;
			background-color: #f8f4e9;
			border-radius: 12px;
			width: 372px;
			height: 60px;
			text-align: center;
			outline: none;
		}

		input.multiplier-input {
			position: relative;
			right: 12px;
			width: 192px;
			border-left: 0px;
			border-radius: 0px;
			border-right: 0px;
		}


		.plus, .minus {
			border: 2px solid #49546d;
			width: 93px;
			background-color: #f8f4e9;
			padding: 3px;
			height: 60px;
			cursor: pointer;
	
		}
		

		.plus {
			border-left: 0px;
			border-top-right-radius: 12px;
			border-bottom-right-radius: 12px;
			position: relative;
			right: 24px;
		}

		.minus {
			border-right: 0px;
			border-top-left-radius: 12px;
			border-bottom-left-radius: 12px;
			
		}

		div.unit-amt-select-box {
			position: relative;
			left: 87px;
			width: fit-content;
			/* position: absolute;
			left: 600px;
			top: 900px; */

		}

		div.multiplier-select-box {

			/* position: absolute;
			left: 600px;
			top: 1137px; */
		}

		div.model-select-box {
			position: relative;
			left: 291px;
			/* position: absolute;
			left: 600px;
			top: 1259px;  */

		}

		div.unit-amt-select-values,
		div.multiplier-select-values,
		div.model-select-values {
			border: 1px solid #49546d;
			display: inline-block;
			border-radius: 24px;
		}

		.unit-amt-select,
		.multiplier-select,
		.model-select {
			padding: 18px;
			margin: 0px -5px;
			background-color: inherit;
			color: #49546d;
			border-color: #49546d;
			border-style: solid;
			border-width: 0px 2px 0px 0px;
			width: 120px;
		}

		.unit-amt-select:last-child,
		.multiplier-select:last-child,
		.model-select:last-child {
			border: 0px !important;
			border-top-right-radius: 24px;
			border-bottom-right-radius: 24px;
		}

		.unit-amt-select:first-child,
		.multiplier-select:first-child,
		.model-select:first-child {
			border-top-left-radius: 24px;
			border-bottom-left-radius: 24px;
		}

		.btn-c:focus {
			outline: none;
		}

		/* div.bet-amt-box {
			position: absolute;
			left: 2054px;
			top: 1040px;
		}

		div.multiplier-input-box {
			position: absolute;
			left: 2054px;
			top: 1137px;
		} */

		div.bet-info {
			position: relative;
			/* border: 5px solid black; */
			/* top: 1360px;
			left: 1800px; */

			bottom:75px;
			left:720px;
			color: #b88785;
			width: fit-content;
			height: fit-content;
		}

		.draw-num-box {
			position: absolute;
			left: 2100px;
			top: 116px;
			width: 120px;
			height: 120px;
		}

		/* .ball-num-box {
			position: absolute;
			top: 36px;
			right: 12px;
			width: 600px;
			border: 2px solid black;
			box-sizing: border-box;
			display: none;

		} */

		/* .ball-num-box>* {
			font-size: 36px;
			font-weight: bolder;
			box-sizing: border-box;
			margin-left: 81px;
		} */

		.balls-box {
			position: relative;
			z-index: 9999;
			/* display: flex !important; */
			/* border: 2px solid black !important; */
			/* height: 120px; */
			/* overflow: hidden; */
		}

		.balls-box:nth-child(n+4) {
			display: none;
		}

		.ball {
			width: 120px;
			height: 120px;
		}



		div.selections-box {
			/* border: 6px solid black; */
			position: relative;
			left: 180px;
			/* width: 1500px; */
			width: fit-content;
		}

		div.period-bonus-box {
			width: fit-content;
			height: fit-content;
			margin-bottom: 0px !important;
		}

		.period-bonus-box>* {
			display: flex;
		}

		div.multiplier-bet-box {
			margin-left: 420px;
			height: fit-content;
		}



		.selections-box>*,
		.period-bonus-box>*,
		.multiplier-bet-box>* {
			margin-bottom: 30px;
		}



		.row {
			display: block;
			margin-bottom: 81px;
			margin-left: 54px;
		}

		/* my css ends*/

		#Rectangle_69 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_69 {
			position: absolute;
			overflow: visible;
		}

		.Rectangle_75 {
			position: absolute;
			overflow: visible;
			width: 757px;
			height: 58px;
			left: 837px;
			top: 1137px;
		}

		#Rectangle_79 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_79 {
			position: absolute;
			overflow: visible;
			width: 360px;
			height: 58px;
			left: 931px;
			top: 1259px;
		}

		#Rectangle_74 {
			fill: rgba(73, 85, 109, 1);
		}

		.Rectangle_74 {
			position: absolute;
			overflow: visible;
			width: 95px;
			height: 58px;
			left: 836px;
			top: 1040px;
		}

		#Rectangle_76 {
			fill: rgba(73, 85, 109, 1);
		}

		.Rectangle_76 {
			position: absolute;
			overflow: visible;
			width: 95px;
			height: 58px;
			left: 836px;
			top: 1137px;
		}

		#Ellipse_52 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_52 {
			position: absolute;
			overflow: visible;
			width: 33px;
			height: 33px;
			left: 2229px;
			top: 425px;
		}

		#Ellipse_53 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_53 {
			position: absolute;
			overflow: visible;
			width: 33px;
			height: 33px;
			left: 2463px;
			top: 425px;
		}


		.status-box {
			/* fill: url(.status-box); */
			background-color: blue;
			padding: 145px;
			border: 4px solid #000;
			height: 100px;
			border-bottom: 0px;
		}

		.status-box {
			position: relative;
			width: 2874px;
			height: 289px;
			top: 141px;
			left: 657px;
		}

		text {
			z-index: 9999;
		}

		.status-box {
			/* ff 3.6+ */
			background: -moz-linear-gradient(117deg,
					rgba(153, 203, 231, 1) 31%,
					rgba(135, 191, 245, 1) 54%,
					rgba(122, 182, 255, 1) 100%);

			/* safari 5.1+,chrome 10+ */
			background: -webkit-linear-gradient(117deg,
					rgba(153, 203, 231, 1) 31%,
					rgba(135, 191, 245, 1) 54%,
					rgba(122, 182, 255, 1) 100%);

			/* opera 11.10+ */
			background: -o-linear-gradient(117deg,
					rgba(153, 203, 231, 1) 31%,
					rgba(135, 191, 245, 1) 54%,
					rgba(122, 182, 255, 1) 100%);

			/* ie 6-9 */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7AB6FF', endColorstr='#99CBE7', GradientType=0);

			/* ie 10+ */
			background: -ms-linear-gradient(117deg,
					rgba(153, 203, 231, 1) 31%,
					rgba(135, 191, 245, 1) 54%,
					rgba(122, 182, 255, 1) 100%);

			/* global 94%+ browsers support */
			background: linear-gradient(117deg,
					rgba(153, 203, 231, 1) 31%,
					rgba(135, 191, 245, 1) 54%,
					rgba(122, 182, 255, 1) 100%);
		}

		#Rectangle_6 {
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_6 {
			position: absolute;
			overflow: visible;
			width: 108px;
			height: 122px;
			left: 2145px;
			top: 116px;
		}

		#Rectangle_14 {
			fill: rgba(73, 84, 110, 1);
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_14 {
			position: absolute;
			overflow: visible;
			width: 108px;
			height: 122px;
			left: 2381px;
			top: 116px;
		}

		#Rectangle_16 {
			fill: rgba(73, 84, 110, 1);
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_16 {
			position: absolute;
			overflow: visible;
		}

		#Rectangle_12 {
			fill: rgba(73, 84, 110, 1);
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_12 {
			position: absolute;
			overflow: visible;
			width: 108px;
			height: 122px;
			left: 2263px;
			top: 116px;
		}

		#Rectangle_13 {
			fill: rgba(73, 84, 110, 1);
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_13 {
			position: absolute;
			overflow: visible;
			width: 108px;
			height: 122px;
			left: 2499px;
			top: 116px;
		}

		#n_02212211287__ {
			left: 2307px;
			top: 20px;
			position: absolute;
			overflow: visible;
			width: 427px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(207, 121, 119, 1);
		}

		#n_00431 {
			left: 1186px;
			top: 101px;
			position: absolute;
			overflow: visible;
			width: 335px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 91px;
			color: rgba(112, 112, 112, 1);
		}

		.timer-box {
			box-sizing: border-box;
			border: 2px solid black;
			position: absolute;
			width: 428px;
			height: 120px;
			left: 1130px;
			top: 81px;
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 72px;
		}

		.timer-box>* {
			margin-right: 18px;
		}

		.timer-box>*>* {
			display: block;
			margin-left: 30px;
			display: flex;
			justify-content: center;
			align-items: center;
			color: #707070;
			font-size: 72px;
		}

		.timer-box>*>*:first-child {
			display: none;
		}

		.bet-id {
			left: 789px;
			top: 123px;
			position: absolute;
			overflow: visible;
			width: 283px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 35px;
			color: rgba(112, 112, 112, 1);
		}

		.for-sale {
			left: 956px;
			top: 164px;
			position: absolute;
			overflow: visible;
			width: 122px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 36px;
			color: rgba(112, 112, 112, 1);
		}

		.Rectangle_37 {
			overflow: hidden;
			width: 258px !important;
			height: 15px !important;
			border: 2px solid black;
			border-radius: 9px;
			border-bottom: 0px;
			border-left: 0px;
			border-top: 0px;

			/* ff 3.6+ */
			background: -moz-linear-gradient(90deg,
					rgba(123, 161, 245, 1) 0%,
					rgba(253, 114, 54, 1) 50%,
					rgba(252, 221, 26, 1) 100%);

			/* safari 5.1+,chrome 10+ */
			background: -webkit-linear-gradient(90deg,
					rgba(123, 161, 245, 1) 0%,
					rgba(253, 114, 54, 1) 50%,
					rgba(252, 221, 26, 1) 100%);

			/* opera 11.10+ */
			background: -o-linear-gradient(90deg,
					rgba(123, 161, 245, 1) 0%,
					rgba(253, 114, 54, 1) 50%,
					rgba(252, 221, 26, 1) 100%);

			/* ie 6-9 */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FCDD1A', endColorstr='#7BA1F5', GradientType=0);

			/* ie 10+ */
			background: -ms-linear-gradient(90deg,
					rgba(123, 161, 245, 1) 0%,
					rgba(253, 114, 54, 1) 50%,
					rgba(252, 221, 26, 1) 100%);

			/* global 94%+ browsers support */
			background: linear-gradient(90deg,
					rgba(123, 161, 245, 1) 0%,
					rgba(253, 114, 54, 1) 50%,
					rgba(252, 221, 26, 1) 100%);
		}

		.Rectangle_93 {
			overflow: hidden;
			position: absolute;
			overflow: visible;
			width: 428px;
			height: fit-content;
			left: 1130px;
			top: 251px;
			border: 2px solid black;
			border-radius: 9px;
		}

		#Rectangle_94 {
			opacity: 0.55;
			fill: rgba(112, 112, 112, 1);
		}

		.Rectangle_94 {
			width: 43px;
			height: 44px;
			position: absolute;
			overflow: visible;
			transform: translate(-736px, -272px) matrix(1, 0, 0, 1, 3478.5, 441.5) rotate(90deg);
			transform-origin: center;
		}

		#V_go {
			left: 2757px;
			top: 178px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(206, 206, 206, 1);
		}

		#Rectangle_68 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_68 {
			position: absolute;
			overflow: visible;
			width: 273px;
			height: 1955px;
			left: 24px;
			top: 30px;
		}

		#Path_1_gq {
			fill: rgba(0, 0, 0, 0);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Path_1_gq {
			overflow: visible;
			position: absolute;
			width: 3356px;
			height: 3px;
			left: 444px;
			top: 559.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_8 {
			fill: rgba(0, 0, 0, 0);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Path_8 {
			overflow: visible;
			position: absolute;
			width: 3356px;
			height: 3px;
			left: 478px;
			top: 3574.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#abstract-user-flat-1 {
			position: absolute;
			width: 106px;
			height: 106px;
			left: 1603px;
			top: 49px;
			overflow: visible;
		}

		#n_98-2986140_speaker-icon-svg- {
			position: absolute;
			width: 56.19px;
			height: 54.5px;
			left: 1058.05px;
			top: 75px;
			overflow: visible;
		}

		#n_9-593921_png-file-svg-passwo {
			position: absolute;
			width: 15px;
			height: 10px;
			left: 2840px;
			top: 107px;
			overflow: visible;
		}

		#img_572138 {
			position: absolute;
			width: 56px;
			height: 61px;
			left: 2595px;
			top: 71px;
			overflow: visible;
		}

		#n_30-1300317_png-file-svg-user {
			position: absolute;
			width: 78.049px;
			height: 82.389px;
			left: 2980.313px;
			top: 58.611px;
			overflow: visible;
		}

		#language-icon {
			position: absolute;
			width: 97.98px;
			height: 74px;
			left: 3358px;
			top: 67px;
			overflow: visible;
		}

		#n_5188 {
			position: absolute;
			width: 69px;
			height: 69px;
			left: 2230px;
			top: 72px;
			overflow: visible;
		}

		#History {
			left: 72px;
			top: 123px;
			position: absolute;
			overflow: visible;
			width: 107px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#P_K_10 {
			left: 72px;
			top: 375px;
			position: absolute;
			overflow: visible;
			width: 95px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#Instant__Games {
			left: 72px;
			top: 226px;
			position: absolute;
			overflow: visible;
			width: 112px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#n_D {
			left: 72px;
			top: 478px;
			position: absolute;
			overflow: visible;
			width: 43px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#Mark_6 {
			left: 72px;
			top: 581px;
			position: absolute;
			overflow: visible;
			width: 105px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#n_1_x_5 {
			left: 72px;
			top: 684px;
			position: absolute;
			overflow: visible;
			width: 90px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#Fast_3 {
			left: 72px;
			top: 787px;
			position: absolute;
			overflow: visible;
			width: 88px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#n_D_hf {
			left: 72px;
			top: 890px;
			position: absolute;
			overflow: visible;
			width: 43px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#Happy_8 {
			left: 72px;
			top: 993px;
			position: absolute;
			overflow: visible;
			width: 127px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#n__Color_Ball {
			left: 72px;
			top: 1096px;
			position: absolute;
			overflow: visible;
			width: 172px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#n_D_hi {
			left: 72px;
			top: 1199px;
			position: absolute;
			overflow: visible;
			width: 43px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#North_Vietlott {
			left: 72px;
			top: 1302px;
			position: absolute;
			overflow: visible;
			width: 111px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#Central_Vietlott {
			left: 72px;
			top: 1451px;
			position: absolute;
			overflow: visible;
			width: 111px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#South_Vietlott {
			left: 72px;
			top: 1600px;
			position: absolute;
			overflow: visible;
			width: 111px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#Thailott {
			left: 72px;
			top: 1749px;
			position: absolute;
			overflow: visible;
			width: 115px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#LF_lotto {
			left: 72px;
			top: 1852px;
			position: absolute;
			overflow: visible;
			width: 114px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(0, 0, 0, 1);
		}

		#Line_1 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_1 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 1946.5px;
			top: 1628.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_7 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_7 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 1946.5px;
			top: 1725.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_13 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_13 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 1948.5px;
			top: 1847.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_14 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_14 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2033.5px;
			top: 1847.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_15 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_15 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2118.5px;
			top: 1847.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_16 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_16 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2118.5px;
			top: 1847.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_2 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_2 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2040.5px;
			top: 1628.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_8 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_8 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2040.5px;
			top: 1725.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_3 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_3 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2140.5px;
			top: 1628.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_9 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_9 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2140.5px;
			top: 1725.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_4 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_4 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2232.5px;
			top: 1628.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_10 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_10 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2232.5px;
			top: 1725.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_5 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_5 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2325.5px;
			top: 1628.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_11 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_11 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2325.5px;
			top: 1725.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_6 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_6 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2420.5px;
			top: 1628.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_12 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_12 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 57px;
			left: 2420.5px;
			top: 1725.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Group_3 {
			position: relative;
			width: 343.033px;
			height: 77px;
			overflow: visible;
		}

		#cart-track-bet>*:hover .text,
		#cart-track-bet>*:hover path {
			fill: #49556d;
			cursor: pointer;
			color: #fff;
		}

		#cart-track-bet>*:hover {
			cursor: pointer;
		}

		.cart-track-bet {
			margin-left: 1400px;
			/* border: 2px solid #000; */
		}

		.cart-track-bet>* {
			display: inline-block;
			margin-right: 21px;
		}

		#Path_3 {
			fill: rgba(236, 198, 165, 1);
		}

		.Path_3 {
			overflow: visible;
			position: relative;
			width: 314.75px;
			height: 76.5px;
			left: 14.161px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_h {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_h {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 77px;
			left: 0px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_ia {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_ia {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 77px;
			transform: translate(-2581.089px, -1959.5px) matrix(1, 0, 0, 1, 2856.0886, 1959.5) rotate(180deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#Track {
			left: 132px;
			top: 12px;
			position: absolute;
			overflow: visible;
			width: 71px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#Group_5 {
			position: relative;
			width: 343.033px;
			overflow: visible;
		}

		#Path_3_ib {
			fill: rgba(236, 198, 165, 1);
		}

		.Path_3_ib {
			overflow: visible;
			position: absolute;
			width: 314.75px;
			height: 76.5px;
			left: 14.161px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_ic {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_ic {
			overflow: visible;
			position: relative;
			width: 68.033px;
			height: 77px;
			left: 0px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_id {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_id {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 77px;
			transform: translate(-2581.089px, -1959.5px) matrix(1, 0, 0, 1, 2856.0886, 1959.5) rotate(180deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#Add_to_cart {
			left: 87px;
			top: 12px;
			position: absolute;
			overflow: visible;
			width: 150px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#Group_4 {
			position: relative;
			width: 343.033px;
			height: 77.5px;
			overflow: visible;
		}

		#Path_4 {
			fill: rgba(236, 198, 165, 1);
		}

		.Path_4 {
			overflow: visible;
			position: absolute;
			width: 314.75px;
			height: 76.5px;
			left: 14.141px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_ig {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_ig {
			overflow: visible;
			position: relative;
			width: 68.033px;
			height: 77px;
			left: 0px;
			top: 0.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_ih {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_ih {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 77px;
			transform: translate(-2581.089px, -1959px) matrix(1, 0, 0, 1, 2856.0886, 1959.5) rotate(180deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#Bet_now {
			left: 117px;
			top: 12px;
			position: absolute;
			overflow: visible;
			width: 109px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}





		#betting_content_ {
			left: 1284px;
			top: 2316px;
			position: absolute;
			overflow: visible;
			width: 229px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#unit_ {
			left: 1675px;
			top: 2316px;
			position: absolute;
			overflow: visible;
			width: 65px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#no_data_ {
			opacity: 0.7;
			left: 2146px;
			top: 2963px;
			position: absolute;
			overflow: visible;
			width: 125px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 34px;
			color: rgba(29, 29, 29, 1);
		}

		#multiple_ir {
			left: 1897px;
			top: 2316px;
			position: absolute;
			overflow: visible;
			width: 119px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Number_of_bets {
			left: 2135px;
			top: 2316px;
			position: absolute;
			overflow: visible;
			width: 223px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#total_amount {
			left: 2478px;
			top: 2316px;
			position: absolute;
			overflow: visible;
			width: 185px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#operate {
			left: 2777px;
			top: 2316px;
			position: absolute;
			overflow: visible;
			width: 111px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Recent_bets {
			opacity: 0.47;
			left: 1260px;
			top: 2201px;
			position: absolute;
			overflow: visible;
			width: 91px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Recently_chasing__number_ {
			opacity: 0.47;
			left: 1503px;
			top: 2201px;
			position: absolute;
			overflow: visible;
			width: 229px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Recent__recharge {
			opacity: 0.47;
			left: 1884px;
			top: 2201px;
			position: absolute;
			overflow: visible;
			width: 117px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Recent__withdrawals {
			opacity: 0.47;
			left: 2153px;
			top: 2201px;
			position: absolute;
			overflow: visible;
			width: 157px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Recent__withdrawals_iz {
			opacity: 0.47;
			left: 2421px;
			top: 2201px;
			position: absolute;
			overflow: visible;
			width: 157px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Recent_profit_and__loss {
			opacity: 0.47;
			left: 2689px;
			top: 2197px;
			position: absolute;
			overflow: visible;
			width: 237px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Plan_record {
			opacity: 0.47;
			left: 3078px;
			top: 2197px;
			position: absolute;
			overflow: visible;
			width: 87px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Details {
			opacity: 0.47;
			left: 3277px;
			top: 2197px;
			position: absolute;
			overflow: visible;
			width: 89px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#All_betting {
			opacity: 0.47;
			left: 3438px;
			top: 2197px;
			position: absolute;
			overflow: visible;
			width: 139px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Group_8 {
			position: absolute;
			width: 1194.5px;
			height: 3546px;
			left: 3973px;
			top: 30px;
			overflow: visible;
		}

		#Rectangle_83 {
			fill: rgba(194, 213, 224, 1);
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_83 {
			position: absolute;
			overflow: visible;
			width: 298px;
			height: 136px;
			left: 3px;
			top: 3px;
		}

		#Rectangle_17 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_17 {
			position: absolute;
			overflow: visible;
			width: 1194px;
			height: 3546px;
			left: 0px;
			top: 0px;
		}

		#Rectangle_82 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_82 {
			position: absolute;
			overflow: visible;
			width: 1194px;
			height: 142px;
			left: 0px;
			top: 0px;
		}

		#Line_18 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_18 {
			overflow: visible;
			position: absolute;
			width: 3px;
			height: 142px;
			left: 302.5px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_19 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_19 {
			overflow: visible;
			position: absolute;
			width: 3px;
			height: 142px;
			left: 902.5px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_20 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_20 {
			overflow: visible;
			position: absolute;
			width: 3px;
			height: 142px;
			left: 602.5px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Recent_draw {
			left: 66px;
			top: 49px;
			position: absolute;
			overflow: visible;
			width: 163px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Mark_No_ {
			left: 22px;
			top: 155px;
			position: absolute;
			overflow: visible;
			width: 131px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Fill_chart {
			left: 1035px;
			top: 155px;
			position: absolute;
			overflow: visible;
			width: 113px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Dragon {
			left: 403px;
			top: 49px;
			position: absolute;
			overflow: visible;
			width: 99px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Trend {
			left: 699px;
			top: 49px;
			position: absolute;
			overflow: visible;
			width: 77px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Line_21 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_21 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 3px;
			left: 0.5px;
			top: 212.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Recent_bet {
			left: 971px;
			top: 49px;
			position: absolute;
			overflow: visible;
			width: 143px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#circle_ji {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4214px;
			top: 349px;
			overflow: visible;
		}

		#circle_jj {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4215.5px;
			top: 460px;
			overflow: visible;
		}

		#circle_jk {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4213.5px;
			top: 571px;
			overflow: visible;
		}

		#circle_jl {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4213.5px;
			top: 682px;
			overflow: visible;
		}

		#circle_jm {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4215.5px;
			top: 795px;
			overflow: visible;
		}

		#circle_jn {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4216px;
			top: 906px;
			overflow: visible;
		}

		#circle_jo {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4216.5px;
			top: 1017px;
			overflow: visible;
		}

		#circle_jp {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4216.5px;
			top: 1130px;
			overflow: visible;
		}

		#circle_jq {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4217px;
			top: 1241px;
			overflow: visible;
		}

		#circle_jr {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4213px;
			top: 1354px;
			overflow: visible;
		}

		#circle_js {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4213px;
			top: 1463.5px;
			overflow: visible;
		}

		#circle_jt {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4213px;
			top: 1576.5px;
			overflow: visible;
		}

		#circle_ju {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4217.5px;
			top: 1687.5px;
			overflow: visible;
		}

		#circle_jv {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4218px;
			top: 1800.5px;
			overflow: visible;
		}

		#circle_jw {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4218px;
			top: 1911.5px;
			overflow: visible;
		}

		#circle_jx {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4215px;
			top: 2021px;
			overflow: visible;
		}

		#circle_jy {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4344px;
			top: 349px;
			overflow: visible;
		}

		#circle_jz {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4345.5px;
			top: 460px;
			overflow: visible;
		}

		#circle_j {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4343.5px;
			top: 571px;
			overflow: visible;
		}

		#circle_ka {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4343.5px;
			top: 682px;
			overflow: visible;
		}

		#circle_kb {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4345.5px;
			top: 795px;
			overflow: visible;
		}

		#circle_kc {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4346px;
			top: 906px;
			overflow: visible;
		}

		#circle_kd {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4346.5px;
			top: 1017px;
			overflow: visible;
		}

		#circle_ke {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4346.5px;
			top: 1130px;
			overflow: visible;
		}

		#circle_kf {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4347px;
			top: 1241px;
			overflow: visible;
		}

		#circle_kg {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4343px;
			top: 1354px;
			overflow: visible;
		}

		#circle_kh {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4343px;
			top: 1463.5px;
			overflow: visible;
		}

		#circle_ki {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4343px;
			top: 1576.5px;
			overflow: visible;
		}

		#circle_kj {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4347.5px;
			top: 1687.5px;
			overflow: visible;
		}

		#circle_kk {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4348px;
			top: 1800.5px;
			overflow: visible;
		}

		#circle_kl {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4348px;
			top: 1911.5px;
			overflow: visible;
		}

		#circle_km {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4345px;
			top: 2021px;
			overflow: visible;
		}

		#circle_kn {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4279px;
			top: 349px;
			overflow: visible;
		}

		#circle_ko {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4280.5px;
			top: 460px;
			overflow: visible;
		}

		#circle_kp {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4278.5px;
			top: 571px;
			overflow: visible;
		}

		#circle_kq {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4278.5px;
			top: 682px;
			overflow: visible;
		}

		#circle_kr {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4280.5px;
			top: 795px;
			overflow: visible;
		}

		#circle_ks {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4281px;
			top: 906px;
			overflow: visible;
		}

		#circle_kt {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4281.5px;
			top: 1017px;
			overflow: visible;
		}

		#circle_ku {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4281.5px;
			top: 1130px;
			overflow: visible;
		}

		#circle_kv {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4282px;
			top: 1241px;
			overflow: visible;
		}

		#circle_kw {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4278px;
			top: 1354px;
			overflow: visible;
		}

		#circle_kx {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4278px;
			top: 1463.5px;
			overflow: visible;
		}

		#circle_ky {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4278px;
			top: 1576.5px;
			overflow: visible;
		}

		#circle_kz {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4282.5px;
			top: 1687.5px;
			overflow: visible;
		}

		#circle_k {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4283px;
			top: 1800.5px;
			overflow: visible;
		}

		#circle_la {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4283px;
			top: 1911.5px;
			overflow: visible;
		}

		#circle_lb {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4280px;
			top: 2021px;
			overflow: visible;
		}

		#circle_lc {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4409px;
			top: 349px;
			overflow: visible;
		}

		#circle_ld {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4410.5px;
			top: 460px;
			overflow: visible;
		}

		#circle_le {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4408.5px;
			top: 571px;
			overflow: visible;
		}

		#circle_lf {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4408.5px;
			top: 682px;
			overflow: visible;
		}

		#circle_lg {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4410.5px;
			top: 795px;
			overflow: visible;
		}

		#circle_lh {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4411px;
			top: 906px;
			overflow: visible;
		}

		#circle_li {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4411.5px;
			top: 1017px;
			overflow: visible;
		}

		#circle_lj {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4411.5px;
			top: 1130px;
			overflow: visible;
		}

		#circle_lk {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4412px;
			top: 1241px;
			overflow: visible;
		}

		#circle_ll {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4408px;
			top: 1354px;
			overflow: visible;
		}

		#circle_lm {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4408px;
			top: 1463.5px;
			overflow: visible;
		}

		#circle_ln {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4408px;
			top: 1576.5px;
			overflow: visible;
		}

		#circle_lo {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4412.5px;
			top: 1687.5px;
			overflow: visible;
		}

		#circle_lp {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4413px;
			top: 1800.5px;
			overflow: visible;
		}

		#circle_lq {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4413px;
			top: 1911.5px;
			overflow: visible;
		}

		#circle_lr {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4410px;
			top: 2021px;
			overflow: visible;
		}

		#circle_ls {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4474px;
			top: 349px;
			overflow: visible;
		}

		#circle_lt {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4475.5px;
			top: 460px;
			overflow: visible;
		}

		#circle_lu {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4473.5px;
			top: 571px;
			overflow: visible;
		}

		#circle_lv {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4473.5px;
			top: 682px;
			overflow: visible;
		}

		#circle_lw {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4475.5px;
			top: 795px;
			overflow: visible;
		}

		#circle_lx {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4476px;
			top: 906px;
			overflow: visible;
		}

		#circle_ly {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4476.5px;
			top: 1017px;
			overflow: visible;
		}

		#circle_lz {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4476.5px;
			top: 1130px;
			overflow: visible;
		}

		#circle_l {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4477px;
			top: 1241px;
			overflow: visible;
		}

		#circle_ma {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4473px;
			top: 1354px;
			overflow: visible;
		}

		#circle_mb {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4473px;
			top: 1463.5px;
			overflow: visible;
		}

		#circle_mc {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4473px;
			top: 1576.5px;
			overflow: visible;
		}

		#circle_md {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4477.5px;
			top: 1687.5px;
			overflow: visible;
		}

		#circle_me {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4478px;
			top: 1800.5px;
			overflow: visible;
		}

		#circle_mf {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4478px;
			top: 1911.5px;
			overflow: visible;
		}

		#circle_mg {
			position: absolute;
			width: 55px;
			height: 59px;
			left: 4475px;
			top: 2021px;
			overflow: visible;
		}

		#Path_6 {
			fill: rgba(230, 226, 202, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Path_6 {
			overflow: visible;
			position: absolute;
			width: 1190.333px;
			height: 78px;
			left: 3975px;
			top: 242px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_22 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_22 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 78px;
			left: 4213.5px;
			top: 242.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_23 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_23 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 78px;
			left: 4559.5px;
			top: 241.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_24 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_24 {
			overflow: visible;
			position: absolute;
			width: 606px;
			height: 1px;
			left: 4559.5px;
			top: 281.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_25 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_25 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 38px;
			left: 4670px;
			top: 281.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_26 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_26 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 38px;
			left: 4770px;
			top: 281.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_27 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_27 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 38px;
			left: 4870px;
			top: 281.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_28 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_28 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 38px;
			left: 4970px;
			top: 281.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_29 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_29 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 38px;
			left: 5070px;
			top: 281.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Draw {
			left: 4030px;
			top: 261px;
			position: absolute;
			overflow: visible;
			width: 69px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1217 {
			left: 4030px;
			top: 359px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1216 {
			left: 4031.5px;
			top: 470px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1215 {
			left: 4029.5px;
			top: 581px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1214 {
			left: 4029.5px;
			top: 692px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1213 {
			left: 4031.5px;
			top: 805px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1212 {
			left: 4032px;
			top: 916px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1211 {
			left: 4032.5px;
			top: 1027px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1210 {
			left: 4032.5px;
			top: 1140px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1215_l {
			left: 4033px;
			top: 1251px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1215_ma {
			left: 4029px;
			top: 1364px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1215_mb {
			left: 4029px;
			top: 1473.5px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1215_mc {
			left: 4029px;
			top: 1586.5px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1215_md {
			left: 4033.5px;
			top: 1697.5px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1215_me {
			left: 4034px;
			top: 1810.5px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1215_mf {
			left: 4034px;
			top: 1921.5px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_1215_mg {
			left: 4031px;
			top: 2031px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__mg {
			left: 4600px;
			top: 359px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__mh {
			left: 4601.5px;
			top: 470px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G120 {
			left: 4570.5px;
			top: 581px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_mj {
			left: 4570.5px;
			top: 692px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_mk {
			left: 4572.5px;
			top: 805px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_ml {
			left: 4573px;
			top: 916px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_mm {
			left: 4573.5px;
			top: 1027px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_mn {
			left: 4573.5px;
			top: 1140px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_mo {
			left: 4574px;
			top: 1251px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_mp {
			left: 4570px;
			top: 1364px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_mq {
			left: 4570px;
			top: 1473.5px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_mr {
			left: 4570px;
			top: 1586.5px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_ms {
			left: 4574.5px;
			top: 1697.5px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_mt {
			left: 4575px;
			top: 1810.5px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_mu {
			left: 4575px;
			top: 1921.5px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#G120_mv {
			left: 4572px;
			top: 2031px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#n__mw {
			left: 4706px;
			top: 359px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60 {
			left: 4687.5px;
			top: 470px;
			position: absolute;
			overflow: visible;
			width: 57px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(159, 110, 72, 1);
		}

		#G60_my {
			left: 4687.5px;
			top: 581px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_mz {
			left: 4687.5px;
			top: 692px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_m {
			left: 4689.5px;
			top: 805px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_na {
			left: 4690px;
			top: 916px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_nb {
			left: 4690.5px;
			top: 1027px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_nc {
			left: 4690.5px;
			top: 1140px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_nd {
			left: 4691px;
			top: 1251px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_ne {
			left: 4687px;
			top: 1364px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_nf {
			left: 4687px;
			top: 1473.5px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_ng {
			left: 4687px;
			top: 1586.5px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_nh {
			left: 4691.5px;
			top: 1697.5px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_ni {
			left: 4692px;
			top: 1810.5px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_nj {
			left: 4692px;
			top: 1921.5px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_nk {
			left: 4689px;
			top: 2031px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nc {
			left: 4811px;
			top: 359px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nd {
			left: 4812.5px;
			top: 470px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ne {
			left: 4810.5px;
			top: 581px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nf {
			left: 4810.5px;
			top: 692px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ng {
			left: 4812.5px;
			top: 805px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nh {
			left: 4813px;
			top: 916px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ni {
			left: 4813.5px;
			top: 1027px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nj {
			left: 4813.5px;
			top: 1140px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nk {
			left: 4814px;
			top: 1251px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nl {
			left: 4810px;
			top: 1364px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nm {
			left: 4810px;
			top: 1473.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nn {
			left: 4810px;
			top: 1586.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__no {
			left: 4814.5px;
			top: 1697.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__np {
			left: 4815px;
			top: 1810.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nq {
			left: 4815px;
			top: 1921.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nr {
			left: 4812px;
			top: 2031px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ns {
			left: 4916px;
			top: 359px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nt {
			left: 4917.5px;
			top: 470px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nu {
			left: 4915.5px;
			top: 581px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nv {
			left: 4915.5px;
			top: 692px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nw {
			left: 4917.5px;
			top: 805px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nx {
			left: 4918px;
			top: 916px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ny {
			left: 4918.5px;
			top: 1027px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__nz {
			left: 4918.5px;
			top: 1140px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__n {
			left: 4919px;
			top: 1251px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__oa {
			left: 4915px;
			top: 1364px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ob {
			left: 4915px;
			top: 1473.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__oc {
			left: 4915px;
			top: 1586.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__od {
			left: 4919.5px;
			top: 1697.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__oe {
			left: 4920px;
			top: 1810.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__of {
			left: 4920px;
			top: 1921.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__og {
			left: 4917px;
			top: 2031px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10 {
			left: 4986px;
			top: 359px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_n {
			left: 4987.5px;
			top: 470px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_oa {
			left: 4985.5px;
			top: 581px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_ob {
			left: 4985.5px;
			top: 692px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_oc {
			left: 4987.5px;
			top: 805px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_od {
			left: 4988px;
			top: 916px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_oe {
			left: 4988.5px;
			top: 1027px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_of {
			left: 4988.5px;
			top: 1140px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_og {
			left: 4989px;
			top: 1251px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_oh {
			left: 4985px;
			top: 1364px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_oi {
			left: 4985px;
			top: 1473.5px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_oj {
			left: 4985px;
			top: 1586.5px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_ok {
			left: 4989.5px;
			top: 1697.5px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_ol {
			left: 4990px;
			top: 1810.5px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_om {
			left: 4990px;
			top: 1921.5px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_on {
			left: 4987px;
			top: 2031px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_oo {
			left: 5102px;
			top: 357px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_op {
			left: 5103.5px;
			top: 468px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_oq {
			left: 5101.5px;
			top: 579px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_or {
			left: 5101.5px;
			top: 690px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_os {
			left: 5103.5px;
			top: 803px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_ot {
			left: 5104px;
			top: 914px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_ou {
			left: 5104.5px;
			top: 1025px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_ov {
			left: 5104.5px;
			top: 1138px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_ow {
			left: 5105px;
			top: 1249px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_ox {
			left: 5101px;
			top: 1362px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_oy {
			left: 5101px;
			top: 1471.5px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_oz {
			left: 5101px;
			top: 1584.5px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_o {
			left: 5105.5px;
			top: 1695.5px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_pa {
			left: 5106px;
			top: 1808.5px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_pb {
			left: 5106px;
			top: 1919.5px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n_0_pc {
			left: 5103px;
			top: 2029px;
			position: absolute;
			overflow: visible;
			width: 33px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__o {
			left: 4234px;
			top: 357px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pa {
			left: 4235.5px;
			top: 468px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pb {
			left: 4233.5px;
			top: 579px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pc {
			left: 4233.5px;
			top: 690px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pd {
			left: 4235.5px;
			top: 803px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pe {
			left: 4236px;
			top: 914px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pf {
			left: 4236.5px;
			top: 1025px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pg {
			left: 4236.5px;
			top: 1138px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ph {
			left: 4237px;
			top: 1249px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pi {
			left: 4233px;
			top: 1362px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pj {
			left: 4233px;
			top: 1471.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pk {
			left: 4233px;
			top: 1584.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pl {
			left: 4237.5px;
			top: 1695.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pm {
			left: 4238px;
			top: 1808.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pn {
			left: 4238px;
			top: 1919.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__po {
			left: 4235px;
			top: 2029px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pp {
			left: 4299px;
			top: 357px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pq {
			left: 4300.5px;
			top: 468px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pr {
			left: 4298.5px;
			top: 579px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ps {
			left: 4298.5px;
			top: 690px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pt {
			left: 4300.5px;
			top: 803px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pu {
			left: 4301px;
			top: 914px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pv {
			left: 4301.5px;
			top: 1025px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pw {
			left: 4301.5px;
			top: 1138px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__px {
			left: 4302px;
			top: 1249px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__py {
			left: 4298px;
			top: 1362px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__pz {
			left: 4298px;
			top: 1471.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__p {
			left: 4298px;
			top: 1584.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qa {
			left: 4302.5px;
			top: 1695.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qb {
			left: 4303px;
			top: 1808.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qc {
			left: 4303px;
			top: 1919.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qd {
			left: 4300px;
			top: 2029px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qe {
			left: 4364px;
			top: 357px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qf {
			left: 4365.5px;
			top: 468px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qg {
			left: 4363.5px;
			top: 579px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qh {
			left: 4363.5px;
			top: 690px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qi {
			left: 4365.5px;
			top: 803px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qj {
			left: 4366px;
			top: 914px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qk {
			left: 4366.5px;
			top: 1025px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ql {
			left: 4366.5px;
			top: 1138px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qm {
			left: 4367px;
			top: 1249px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qn {
			left: 4363px;
			top: 1362px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qo {
			left: 4363px;
			top: 1471.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qp {
			left: 4363px;
			top: 1584.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qq {
			left: 4367.5px;
			top: 1695.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qr {
			left: 4368px;
			top: 1808.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qs {
			left: 4368px;
			top: 1919.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qt {
			left: 4365px;
			top: 2029px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qu {
			left: 4429px;
			top: 357px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qv {
			left: 4430.5px;
			top: 468px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qw {
			left: 4428.5px;
			top: 579px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qx {
			left: 4428.5px;
			top: 690px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qy {
			left: 4430.5px;
			top: 803px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__qz {
			left: 4431px;
			top: 914px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__q {
			left: 4431.5px;
			top: 1025px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ra {
			left: 4431.5px;
			top: 1138px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rb {
			left: 4432px;
			top: 1249px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rc {
			left: 4428px;
			top: 1362px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rd {
			left: 4428px;
			top: 1471.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__re {
			left: 4428px;
			top: 1584.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rf {
			left: 4432.5px;
			top: 1695.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rg {
			left: 4433px;
			top: 1808.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rh {
			left: 4433px;
			top: 1919.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ri {
			left: 4430px;
			top: 2029px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rj {
			left: 4494px;
			top: 357px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rk {
			left: 4495.5px;
			top: 468px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rl {
			left: 4493.5px;
			top: 579px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rm {
			left: 4493.5px;
			top: 690px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rn {
			left: 4495.5px;
			top: 803px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ro {
			left: 4496px;
			top: 914px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rp {
			left: 4496.5px;
			top: 1025px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rq {
			left: 4496.5px;
			top: 1138px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rr {
			left: 4497px;
			top: 1249px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rs {
			left: 4493px;
			top: 1362px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rt {
			left: 4493px;
			top: 1471.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ru {
			left: 4493px;
			top: 1584.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rv {
			left: 4497.5px;
			top: 1695.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rw {
			left: 4498px;
			top: 1808.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__rx {
			left: 4498px;
			top: 1919.5px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#n__ry {
			left: 4495px;
			top: 2029px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Winning_No {
			left: 4302px;
			top: 261px;
			position: absolute;
			overflow: visible;
			width: 167px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#All5_Group {
			left: 4774px;
			top: 240px;
			position: absolute;
			overflow: visible;
			width: 143px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G120_re {
			left: 4580px;
			top: 280px;
			position: absolute;
			overflow: visible;
			width: 71px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G60_rf {
			left: 4693px;
			top: 280px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G30 {
			left: 4793px;
			top: 280px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G20 {
			left: 4893px;
			top: 280px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G10_ri {
			left: 4991px;
			top: 280px;
			position: absolute;
			overflow: visible;
			width: 53px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#G5 {
			left: 5096px;
			top: 280px;
			position: absolute;
			overflow: visible;
			width: 37px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(29, 29, 29, 1);
		}

		#Line_30 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_30 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3973.5px;
			top: 430.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_31 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_31 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3975px;
			top: 541.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_32 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_32 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3973px;
			top: 652.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_33 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_33 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3973px;
			top: 763.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_34 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_34 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3973px;
			top: 876.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_35 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_35 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3972.5px;
			top: 987.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_36 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_36 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3973px;
			top: 1098.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_37 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_37 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3974px;
			top: 1211.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_39 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_39 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3972.5px;
			top: 1322.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_40 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_40 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3972.5px;
			top: 1435.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_41 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_41 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3972.5px;
			top: 1545px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_42 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_42 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3972.5px;
			top: 1658px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_43 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_43 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3973px;
			top: 1769px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_44 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_44 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3972.5px;
			top: 1882px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_45 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_45 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3973.5px;
			top: 1993px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_46 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_46 {
			overflow: visible;
			position: absolute;
			width: 1194px;
			height: 1px;
			left: 3972.5px;
			top: 2102.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Group_9 {
			position: absolute;
			width: 1188.5px;
			height: 318.5px;
			left: 3975.5px;
			top: 2160px;
			overflow: visible;
		}

		#Rectangle_84 {
			fill: rgba(218, 184, 183, 1);
		}

		.Rectangle_84 {
			position: absolute;
			overflow: visible;
			width: 1188px;
			height: 96px;
			left: 0.5px;
			top: 26px;
		}

		#Rectangle_86 {
			opacity: 0.5;
			fill: rgba(218, 184, 183, 1);
		}

		.Rectangle_86 {
			position: absolute;
			overflow: visible;
			width: 1188px;
			height: 26px;
			left: 0.5px;
			top: 0px;
		}

		#Rectangle_85 {
			opacity: 0.46;
			fill: rgba(218, 184, 183, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_85 {
			position: absolute;
			overflow: visible;
			width: 1188px;
			height: 96px;
			left: 0.5px;
			top: 122px;
		}

		#Road {
			left: 52.5px;
			top: 54px;
			position: absolute;
			overflow: visible;
			width: 69px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#Sum {
			left: 52.5px;
			top: 150px;
			position: absolute;
			overflow: visible;
			width: 59px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#n_st_r {
			opacity: 0.5;
			left: 156.5px;
			top: 150px;
			position: absolute;
			overflow: visible;
			width: 39px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#n_nd {
			opacity: 0.5;
			left: 240.5px;
			top: 150px;
			position: absolute;
			overflow: visible;
			width: 52px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#n_rd {
			opacity: 0.5;
			left: 336.5px;
			top: 150px;
			position: absolute;
			overflow: visible;
			width: 45px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#n_th {
			opacity: 0.5;
			left: 425.5px;
			top: 150px;
			position: absolute;
			overflow: visible;
			width: 44px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#n_th_sa {
			opacity: 0.5;
			left: 513.5px;
			top: 150px;
			position: absolute;
			overflow: visible;
			width: 44px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#Road_bet {
			left: 970.5px;
			top: 54px;
			position: absolute;
			overflow: visible;
			width: 120px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#Line_38 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_38 {
			filter: drop-shadow(0px 2px 3px rgba(0, 0, 0, 0.161));
			overflow: visible;
			position: absolute;
			width: 1197px;
			height: 10px;
			left: 0px;
			top: 318.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Ellipse_54 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_54 {
			position: absolute;
			overflow: visible;
			width: 50px;
			height: 50px;
			left: 1103.5px;
			top: 50px;
		}

		#arrow_2 {
			opacity: 0.69;
			position: absolute;
			width: 28px;
			height: 32px;
			left: 1116.5px;
			top: 58px;
			overflow: visible;
		}

		#Group_10 {
			position: absolute;
			width: 288px;
			height: 69.5px;
			left: 4031px;
			top: 2395.5px;
			overflow: visible;
		}

		#Path_4_sg {
			fill: rgba(236, 198, 165, 1);
		}

		.Path_4_sg {
			overflow: visible;
			position: absolute;
			width: 259.717px;
			height: 68.5px;
			left: 14.141px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_sh {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_sh {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 69px;
			left: 0px;
			top: 0.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_si {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_si {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 69px;
			transform: translate(-2581.089px, -1959px) matrix(1, 0, 0, 1, 2801.0559, 1959.5) rotate(180deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#BigSmall {
			left: 78.239px;
			top: 14.16px;
			position: absolute;
			overflow: visible;
			width: 137px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(126, 77, 135, 1);
		}

		#Group_11 {
			position: absolute;
			width: 301.5px;
			height: 69.5px;
			left: 4419.5px;
			top: 2395.5px;
			overflow: visible;
		}

		#Path_4_sl {
			fill: rgba(236, 198, 165, 1);
		}

		.Path_4_sl {
			overflow: visible;
			position: absolute;
			width: 273.217px;
			height: 68.5px;
			left: 14.142px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_sm {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_sm {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 69px;
			left: 0px;
			top: 0.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_sn {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_sn {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 69px;
			transform: translate(-2581.088px, -1959px) matrix(1, 0, 0, 1, 2814.5557, 1959.5) rotate(180deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#OddEeven {
			left: 71.388px;
			top: 14.16px;
			position: absolute;
			overflow: visible;
			width: 149px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#Group_13 {
			position: absolute;
			width: 301.5px;
			height: 69.5px;
			left: 4748.5px;
			top: 3354px;
			overflow: visible;
		}

		#Path_4_sq {
			fill: rgba(231, 235, 238, 1);
		}

		.Path_4_sq {
			overflow: visible;
			position: absolute;
			width: 273.217px;
			height: 68.5px;
			left: 14.142px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_sr {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_sr {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 69px;
			left: 0px;
			top: 0.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_ss {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_ss {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 69px;
			transform: translate(-2581.088px, -1959px) matrix(1, 0, 0, 1, 2814.5557, 1959.5) rotate(180deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#Next_B {
			left: 53.388px;
			top: 14.16px;
			position: absolute;
			overflow: visible;
			width: 88px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#Ellipse_47 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_47 {
			position: absolute;
			overflow: visible;
			width: 28px;
			height: 28px;
			left: 153.5px;
			top: 21px;
		}

		#Ellipse_48 {
			fill: rgba(194, 31, 31, 1);
		}

		.Ellipse_48 {
			position: absolute;
			overflow: visible;
			width: 28px;
			height: 28px;
			left: 190.5px;
			top: 21px;
		}

		#Line_164 {
			fill: transparent;
			stroke: rgba(51, 130, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_164 {
			overflow: visible;
			position: absolute;
			width: 25.535px;
			height: 25.536px;
			left: 223px;
			top: 24.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Group_14 {
			position: absolute;
			width: 301.5px;
			height: 69.5px;
			left: 4736px;
			top: 3445px;
			overflow: visible;
		}

		#Path_4_sy {
			fill: rgba(231, 235, 238, 1);
		}

		.Path_4_sy {
			overflow: visible;
			position: absolute;
			width: 273.217px;
			height: 68.5px;
			left: 14.142px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_sz {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_sz {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 69px;
			left: 0px;
			top: 0.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_s {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_s {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 69px;
			transform: translate(-2581.088px, -1959px) matrix(1, 0, 0, 1, 2814.5557, 1959.5) rotate(180deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#Next_S {
			left: 66.388px;
			top: 14.16px;
			position: absolute;
			overflow: visible;
			width: 86px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#Ellipse_49 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_49 {
			position: absolute;
			overflow: visible;
			width: 28px;
			height: 28px;
			left: 166px;
			top: 21px;
		}

		#Ellipse_50 {
			fill: rgba(52, 131, 235, 1);
		}

		.Ellipse_50 {
			position: absolute;
			overflow: visible;
			width: 28px;
			height: 28px;
			left: 203px;
			top: 21px;
		}

		#Line_165 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_165 {
			overflow: visible;
			position: absolute;
			width: 24.535px;
			height: 24.536px;
			left: 236.5px;
			top: 21.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Group_12 {
			position: absolute;
			width: 287px;
			height: 69.5px;
			left: 4800px;
			top: 2395.5px;
			overflow: visible;
		}

		#Path_4_s {
			fill: rgba(236, 198, 165, 1);
		}

		.Path_4_s {
			overflow: visible;
			position: absolute;
			width: 258.717px;
			height: 68.5px;
			left: 14.142px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#DragonTiger {
			left: 47.011px;
			top: 14.16px;
			position: absolute;
			overflow: visible;
			width: 178px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(0, 0, 0, 1);
		}

		#Path_3_ta {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_ta {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 69px;
			left: 0px;
			top: 0.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_3_tb {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_3_tb {
			overflow: visible;
			position: absolute;
			width: 68.033px;
			height: 69px;
			transform: translate(-2581.089px, -1959px) matrix(1, 0, 0, 1, 2800.0559, 1959.5) rotate(180deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#Line_47 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_47 {
			overflow: visible;
			position: absolute;
			width: 1191px;
			height: 1px;
			left: 3973.5px;
			top: 2533.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_48 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_48 {
			overflow: visible;
			position: absolute;
			width: 1191px;
			height: 1px;
			left: 3973.5px;
			top: 2583.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_49 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_49 {
			overflow: visible;
			position: absolute;
			width: 1191px;
			height: 1px;
			left: 3973.5px;
			top: 2633.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_50 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_50 {
			overflow: visible;
			position: absolute;
			width: 1191px;
			height: 1px;
			left: 3973.5px;
			top: 2683.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_51 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_51 {
			overflow: visible;
			position: absolute;
			width: 1191px;
			height: 1px;
			left: 3973.5px;
			top: 2733.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_52 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_52 {
			overflow: visible;
			position: absolute;
			width: 1191px;
			height: 1px;
			left: 3973.5px;
			top: 2783.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_53 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_53 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4028.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_54 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_54 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4088.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_55 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_55 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4148.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_56 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_56 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4208.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_57 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_57 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4268.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_58 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_58 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4328.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_59 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_59 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4388.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_60 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_60 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4448.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_61 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_61 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4508.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_62 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_62 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4568.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_63 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_63 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4628.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_64 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_64 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4688.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_65 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_65 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4748.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_66 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_66 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4808.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_67 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_67 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4868.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_68 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_68 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4928.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_69 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_69 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 4988.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_70 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_70 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 5048.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_71 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_71 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 305px;
			left: 5108.5px;
			top: 2478.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Rectangle_87 {
			opacity: 0.5;
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_87 {
			position: absolute;
			overflow: visible;
			width: 541px;
			height: 315px;
			left: 3975px;
			top: 2877px;
		}

		#Rectangle_91 {
			opacity: 0.5;
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_91 {
			position: absolute;
			overflow: visible;
			width: 541px;
			height: 315px;
			left: 3975.5px;
			top: 3260px;
		}

		#Rectangle_90 {
			opacity: 0.5;
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_90 {
			position: absolute;
			overflow: visible;
			width: 561px;
			height: 315px;
			left: 4603.5px;
			top: 2877px;
		}

		#Line_83 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_83 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4283.345px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_124 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_124 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4279.845px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_109 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_109 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4923.553px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_75 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_75 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4070.5px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_120 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_120 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4071px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_105 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_105 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4708px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_81 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_81 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4374.667px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_126 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_126 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4375.167px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_111 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_111 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 5018.327px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_77 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_77 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4179.412px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_122 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_122 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4179.912px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_107 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_107 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4820.882px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_79 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_79 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4419px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_127 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_127 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4419.5px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_112 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_112 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 5066px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_73 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_73 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4022.5px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_119 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_119 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4023px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_104 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_104 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4653px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_82 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_82 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4329.006px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_125 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_125 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4329.506px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_110 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_110 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4970.94px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_74 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_74 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4126.228px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_121 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_121 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4126.728px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_106 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_106 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4766.726px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_80 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_80 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4468px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_129 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_129 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4557px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_128 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_128 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4468.5px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_161 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_161 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4562.5px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_162 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_162 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4605.5px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_113 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_113 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 5117px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_76 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_76 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4230.422px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_123 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_123 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4230.922px;
			top: 3260px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_108 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_108 {
			overflow: visible;
			position: absolute;
			width: 1px;
			height: 314.5px;
			left: 4872.782px;
			top: 2877px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_94 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_94 {
			overflow: visible;
			position: absolute;
			width: 584px;
			height: 1px;
			left: 3973.5px;
			top: 3137.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_131 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_131 {
			overflow: visible;
			position: absolute;
			width: 584px;
			height: 1px;
			left: 3973.5px;
			top: 3191.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_118 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_118 {
			overflow: visible;
			position: absolute;
			width: 631.5px;
			height: 1px;
			left: 3974px;
			top: 3520.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_103 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_103 {
			overflow: visible;
			position: absolute;
			width: 561.5px;
			height: 1px;
			left: 4603.5px;
			top: 3137.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_95 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_95 {
			overflow: visible;
			position: absolute;
			width: 584px;
			height: 1px;
			left: 3973.5px;
			top: 3083.89px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_117 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_117 {
			overflow: visible;
			position: absolute;
			width: 631.5px;
			height: 1px;
			left: 3974px;
			top: 3466.89px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_102 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_102 {
			overflow: visible;
			position: absolute;
			width: 561.5px;
			height: 1px;
			left: 4603.5px;
			top: 3083.89px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_96 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_96 {
			overflow: visible;
			position: absolute;
			width: 584px;
			height: 1px;
			left: 3973.5px;
			top: 3035.598px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_116 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_116 {
			overflow: visible;
			position: absolute;
			width: 631.5px;
			height: 1px;
			left: 3974px;
			top: 3418.598px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_101 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_101 {
			overflow: visible;
			position: absolute;
			width: 561.5px;
			height: 1px;
			left: 4603.5px;
			top: 3035.598px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_97 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_97 {
			overflow: visible;
			position: absolute;
			width: 584px;
			height: 1px;
			left: 3973.5px;
			top: 2987.305px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_114 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_114 {
			overflow: visible;
			position: absolute;
			width: 631.5px;
			height: 1px;
			left: 3974px;
			top: 3370.305px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_100 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_100 {
			overflow: visible;
			position: absolute;
			width: 561.5px;
			height: 1px;
			left: 4603.5px;
			top: 2987.305px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_98 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_98 {
			overflow: visible;
			position: absolute;
			width: 584px;
			height: 1px;
			left: 3973.5px;
			top: 2933.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_130 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_130 {
			overflow: visible;
			position: absolute;
			width: 584px;
			height: 1px;
			left: 3973.5px;
			top: 2877.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_115 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_115 {
			overflow: visible;
			position: absolute;
			width: 631.5px;
			height: 1px;
			left: 3974px;
			top: 3316.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_163 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_163 {
			overflow: visible;
			position: absolute;
			width: 631.5px;
			height: 1px;
			left: 3974px;
			top: 3260.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_99 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_99 {
			overflow: visible;
			position: absolute;
			width: 561.5px;
			height: 1px;
			left: 4603.5px;
			top: 2933.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#B {
			left: 3992px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vi {
			left: 4108px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vj {
			left: 4108px;
			top: 2534px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vk {
			left: 4108px;
			top: 2586px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vl {
			left: 4226px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vm {
			left: 4346px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vn {
			left: 4466px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vo {
			left: 4468px;
			top: 2534px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vp {
			left: 4588px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vq {
			left: 4588px;
			top: 2534px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vr {
			left: 4588px;
			top: 2586px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vs {
			left: 4588px;
			top: 2636px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vt {
			left: 4709px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vu {
			left: 4708px;
			top: 2534px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vv {
			left: 4826px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vw {
			left: 4828px;
			top: 2538px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vx {
			left: 4828px;
			top: 2588px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#B_vy {
			left: 4949px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 20px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(194, 31, 31, 1);
		}

		#S {
			left: 4048px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_v {
			left: 4048px;
			top: 2534px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wa {
			left: 4170px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wb {
			left: 4168px;
			top: 2534px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wc {
			left: 4288px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wd {
			left: 4408px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_we {
			left: 4408px;
			top: 2534px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wf {
			left: 4528px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wg {
			left: 4648px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wh {
			left: 4770px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wi {
			left: 4770px;
			top: 2537px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wj {
			left: 4770px;
			top: 2588px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wk {
			left: 4770px;
			top: 2637px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wl {
			left: 4770px;
			top: 2687px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wm {
			left: 4770px;
			top: 2738px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wn {
			left: 4884px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#S_wo {
			left: 5007px;
			top: 2483px;
			position: absolute;
			overflow: visible;
			width: 17px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(52, 131, 235, 1);
		}

		#Ellipse_6 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_6 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 3985px;
			top: 2895px;
		}

		#Ellipse_10 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_10 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4082px;
			top: 2895px;
		}

		#Ellipse_19 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_19 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4294px;
			top: 2895px;
		}

		#Ellipse_23 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_23 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4384px;
			top: 2895px;
		}

		#Ellipse_27 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_27 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4479px;
			top: 2895px;
		}

		#Ellipse_16 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_16 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4191px;
			top: 2895px;
		}

		#Ellipse_8 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_8 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4034px;
			top: 2895px;
		}

		#Ellipse_25 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_25 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4434px;
			top: 2895px;
		}

		#Ellipse_12 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_12 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4141px;
			top: 2895px;
		}

		#Ellipse_17 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_17 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4245px;
			top: 2895px;
		}

		#Ellipse_21 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_21 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4338px;
			top: 2895px;
		}

		#Ellipse_14 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_14 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4141px;
			top: 2996px;
		}

		#Ellipse_7 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_7 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 3985px;
			top: 2946px;
		}

		#Ellipse_29 {
			fill: rgba(194, 31, 31, 1);
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_29 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4035, 3276) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_31 {
			fill: rgba(194, 31, 31, 1);
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_31 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4140, 3276) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_37 {
			fill: rgba(194, 31, 31, 1);
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_37 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4140, 3331) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_33 {
			fill: rgba(194, 31, 31, 1);
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_33 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4241, 3276) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_39 {
			fill: rgba(194, 31, 31, 1);
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_39 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4241, 3331) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_40 {
			fill: rgba(194, 31, 31, 1);
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_40 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4241, 3380) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_41 {
			fill: rgba(194, 31, 31, 1);
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_41 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4241, 3429) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_35 {
			fill: rgba(194, 31, 31, 1);
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_35 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4340, 3276) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_45 {
			fill: rgba(194, 31, 31, 1);
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_45 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4432, 3276) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_11 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_11 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4082px;
			top: 2946px;
		}

		#Ellipse_18 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_18 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4294px;
			top: 2946px;
		}

		#Ellipse_22 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_22 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4384px;
			top: 2946px;
		}

		#Ellipse_26 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_26 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4479px;
			top: 2946px;
		}

		#Ellipse_20 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_20 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4294px;
			top: 2998px;
		}

		#Ellipse_9 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_9 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4034px;
			top: 2946px;
		}

		#Ellipse_28 {
			fill: rgba(52, 131, 235, 1);
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_28 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 3986, 3276) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_30 {
			fill: rgba(52, 131, 235, 1);
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_30 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4089, 3276) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_32 {
			fill: rgba(52, 131, 235, 1);
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_32 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4192, 3276) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_38 {
			fill: rgba(52, 131, 235, 1);
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_38 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4192, 3331) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_34 {
			fill: rgba(52, 131, 235, 1);
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_34 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4290, 3276) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_36 {
			fill: rgba(52, 131, 235, 1);
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_36 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4383, 3276) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_46 {
			fill: rgba(52, 131, 235, 1);
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_46 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4475, 3276) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_42 {
			fill: rgba(52, 131, 235, 1);
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_42 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4383, 3331) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_43 {
			fill: rgba(52, 131, 235, 1);
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_43 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4383, 3380) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_44 {
			fill: rgba(52, 131, 235, 1);
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_44 {
			width: 26px;
			height: 26px;
			position: absolute;
			overflow: visible;
			transform: matrix(1, 0, 0, 1, 4383, 3429) rotate(180deg);
			transform-origin: center;
		}

		#Ellipse_24 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_24 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4434px;
			top: 2946px;
		}

		#Ellipse_13 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_13 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4141px;
			top: 2946px;
		}

		#Ellipse_15 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_15 {
			position: absolute;
			overflow: visible;
			width: 26px;
			height: 26px;
			left: 4141px;
			top: 3047px;
		}

		#Line_132 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_132 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4668px;
			top: 2888.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_148 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_148 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4887.782px;
			top: 2888.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_151 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_151 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4981.84px;
			top: 2888.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_158 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_158 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 5076.9px;
			top: 2888.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_142 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_142 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4784.451px;
			top: 2888.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_140 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_140 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4668px;
			top: 2948.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_147 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_147 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4887.782px;
			top: 2948.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_149 {
			fill: transparent;
			stroke: rgba(194, 31, 31, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_149 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4883.682px;
			top: 3000.11px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_134 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_134 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4612.502px;
			top: 2888.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_157 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_157 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 5126.771px;
			top: 2888.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_143 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_143 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4835.882px;
			top: 2888.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_160 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_160 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 5030.229px;
			top: 2888.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_150 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_150 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4934.453px;
			top: 2888.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_141 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_141 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4723px;
			top: 2888.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_135 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_135 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4612.502px;
			top: 2948.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_156 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_156 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 5126.771px;
			top: 2948.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_144 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_144 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4835.882px;
			top: 2948.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_159 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_159 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 5030.229px;
			top: 2948.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_136 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_136 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4612.502px;
			top: 2999.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_155 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_155 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 5126.771px;
			top: 2999.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_145 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_145 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4835.882px;
			top: 2999.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_137 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_137 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4612.502px;
			top: 3043.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_154 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_154 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 5126.771px;
			top: 3043.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_146 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_146 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4835.882px;
			top: 3043.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_138 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_138 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4612.502px;
			top: 3096.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_153 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_153 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 5126.771px;
			top: 3096.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_139 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_139 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 4612.502px;
			top: 3151.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Line_152 {
			fill: transparent;
			stroke: rgba(52, 131, 235, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_152 {
			overflow: visible;
			position: absolute;
			width: 29.535px;
			height: 29.536px;
			left: 5126.771px;
			top: 3151.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Road_intro {
			left: 4824px;
			top: 3302px;
			position: absolute;
			overflow: visible;
			width: 146px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 30px;
			color: rgba(112, 112, 112, 1);
		}

		#Ellipse_51 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_51 {
			position: absolute;
			overflow: visible;
			width: 29px;
			height: 29px;
			left: 4790px;
			top: 3308px;
		}

		#Text_yf {
			left: 4800px;
			top: 3310px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(112, 112, 112, 1);
		}

		#Group_15 {
			position: absolute;
			width: 121.97px;
			height: 374.095px;
			left: 739px;
			top: 610.875px;
			overflow: visible;
		}

		#Path_1_yh {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_1_yh {
			overflow: visible;
			position: absolute;
			width: 374.095px;
			height: 121.97px;
			transform: translate(-739px, -610.875px) matrix(1, 0, 0, 1, 612.9375, 736.9375) rotate(-90deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#H_O_T {
			left: 47.985px;
			top: 129.625px;
			position: absolute;
			overflow: visible;
			width: 27px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 34px;
			color: rgba(112, 112, 112, 1);
		}

		#Group_16 {
			position: absolute;
			width: 121.97px;
			height: 374.095px;
			left: 746.03px;
			top: 999.845px;
			overflow: visible;
		}

		#Path_1_yk {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_1_yk {
			overflow: visible;
			position: absolute;
			width: 374.095px;
			height: 121.97px;
			transform: translate(-746.03px, -999.845px) matrix(1, 0, 0, 1, 619.9677, 1125.9072) rotate(-90deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#A_L_L {
			left: 48.985px;
			top: 118.047px;
			position: absolute;
			overflow: visible;
			width: 25px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 34px;
			color: rgba(112, 112, 112, 1);
		}

		#Group_17 {
			position: absolute;
			width: 121.97px;
			height: 374.095px;
			left: 746.03px;
			top: 1403px;
			overflow: visible;
		}

		#Path_1_yn {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_1_yn {
			overflow: visible;
			position: absolute;
			width: 374.095px;
			height: 121.97px;
			transform: translate(-746.03px, -1403px) matrix(1, 0, 0, 1, 619.9677, 1529.0625) rotate(-90deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#n__2____S__I___D__E__S {
			left: 38.97px;
			top: 60px;
			position: absolute;
			overflow: visible;
			width: 45px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 34px;
			color: rgba(112, 112, 112, 1);
		}

		#Group_18 {
			position: absolute;
			width: 121.97px;
			height: 374.095px;
			left: 746.03px;
			top: 1811.97px;
			overflow: visible;
		}

		#Path_1_yq {
			fill: rgba(112, 112, 112, 1);
		}

		.Path_1_yq {
			overflow: visible;
			position: absolute;
			width: 374.095px;
			height: 121.97px;
			transform: translate(-746.03px, -1811.97px) matrix(1, 0, 0, 1, 619.9677, 1938.0322) rotate(-90deg);
			transform-origin: center;
			left: 0px;
			top: 0px;
		}

		#s_t_a_n_d_a_r_d {
			left: 47.97px;
			top: 41.03px;
			position: absolute;
			overflow: visible;
			width: 27px;
			white-space: nowrap;
			text-align: center;
			font-family: Segoe UI;
			font-style: normal;
			font-weight: bold;
			font-size: 34px;
			color: rgba(112, 112, 112, 1);
			text-transform: uppercase;
		}



		#Polygon_1 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Polygon_1 {
			overflow: visible;
			position: absolute;
			width: 59px;
			height: 51px;
			left: 403px;
			top: 537px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Polygon_6 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Polygon_6 {
			overflow: visible;
			position: absolute;
			width: 59px;
			height: 51px;
			left: 437px;
			top: 3552px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Polygon_2 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Polygon_2 {
			overflow: visible;
			position: absolute;
			width: 59px;
			height: 51px;
			left: 463px;
			top: 509px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Polygon_3 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Polygon_3 {
			overflow: visible;
			position: absolute;
			width: 59px;
			height: 51px;
			left: 3786px;
			top: 528px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Polygon_5 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Polygon_5 {
			overflow: visible;
			position: absolute;
			width: 59px;
			height: 51px;
			left: 3820px;
			top: 3543px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Polygon_4 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Polygon_4 {
			overflow: visible;
			position: absolute;
			width: 59px;
			height: 51px;
			left: 3749px;
			top: 560px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Rectangle_96 {
			fill: rgba(73, 84, 110, 1);
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_96 {
			position: absolute;
			overflow: visible;
			width: 74px;
			height: 190px;
			left: 3902px;
			top: 241px;
		}

		#arrow {
			position: absolute;
			width: 54px;
			height: 62px;
			left: 3913px;
			top: 305px;
			overflow: visible;
		}

		#n_134065 {
			position: absolute;
			width: 193px;
			height: 193px;
			left: 2080px;
			top: 2794px;
			overflow: visible;
		}

		#n_9-593921_png-file-svg-passwo_y {
			position: absolute;
			width: 58px;
			height: 37px;
			left: 2419px;
			top: 88px;
			overflow: visible;
		}
	</style>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /> -->

	<style></style>
	<!-- <script id="applicationScript">
///////////////////////////////////////
// INITIALIZATION
///////////////////////////////////////

/**
 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page. 
 * Code subject to change.
 **/

if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set console

var Application = function() {
	// event constants
	this.prefix = "--web-";
	this.NAVIGATION_CHANGE = "viewChange";
	this.VIEW_NOT_FOUND = "viewNotFound";
	this.VIEW_CHANGE = "viewChange";
	this.VIEW_CHANGING = "viewChanging";
	this.STATE_NOT_FOUND = "stateNotFound";
	this.APPLICATION_COMPLETE = "applicationComplete";
	this.APPLICATION_RESIZE = "applicationResize";
	this.SIZE_STATE_NAME = "data-is-view-scaled";
	this.STATE_NAME = this.prefix + "state";

	this.lastTrigger = null;
	this.lastView = null;
	this.lastState = null;
	this.lastOverlay = null;
	this.currentView = null;
	this.currentState = null;
	this.currentOverlay = null;
	this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
	this.inclusionQuery = "(min-width: 0px)";
	this.exclusionQuery = "none and (min-width: 99999px)";
	this.LastModifiedDateLabelName = "LastModifiedDateLabel";
	this.viewScaleSliderId = "ViewScaleSliderInput";
	this.pageRefreshedName = "showPageRefreshedNotification";
	this.application = null;
	this.applicationStylesheet = null;
	this.showByMediaQuery = null;
	this.mediaQueryDictionary = {};
	this.viewsDictionary = {};
	this.addedViews = [];
	this.viewStates = [];
	this.views = [];
	this.viewIds = [];
	this.viewQueries = {};
	this.overlays = {};
	this.overlayIds = [];
	this.numberOfViews = 0;
	this.verticalPadding = 0;
	this.horizontalPadding = 0;
	this.stateName = null;
	this.viewScale = 1;
	this.viewLeft = 0;
	this.viewTop = 0;
	this.horizontalScrollbarsNeeded = false;
	this.verticalScrollbarsNeeded = false;

	// view settings
	this.showUpdateNotification = false;
	this.showNavigationControls = false;
	this.scaleViewsToFit = false;
	this.scaleToFitOnDoubleClick = false;
	this.actualSizeOnDoubleClick = false;
	this.scaleViewsOnResize = false;
	this.navigationOnKeypress = false;
	this.showViewName = false;
	this.enableDeepLinking = true;
	this.refreshPageForChanges = false;
	this.showRefreshNotifications = true;

	// view controls
	this.scaleViewSlider = null;
	this.lastModifiedLabel = null;
	this.supportsPopState = false; // window.history.pushState!=null;
	this.initialized = false;

	// refresh properties
	this.refreshDuration = 250;
	this.lastModifiedDate = null;
	this.refreshRequest = null;
	this.refreshInterval = null;
	this.refreshContent = null;
	this.refreshContentSize = null;
	this.refreshCheckContent = false;
	this.refreshCheckContentSize = false;

	var self = this;

	self.initialize = function(event) {
		var view = self.getVisibleView();
		var views = self.getVisibleViews();
		if (view==null) view = self.getInitialView();
		self.collectViews();
		self.collectOverlays();
		self.collectMediaQueries();

		for (let index = 0; index < views.length; index++) {
			var view = views[index];
			self.setViewOptions(view);
			self.setViewVariables(view);
			self.centerView(view);
		}

		// sometimes the body size is 0 so we call this now and again later
		if (self.initialized) {
			window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
			window.addEventListener("keyup", self.keypressHandler);
			window.addEventListener("keypress", self.keypressHandler);
			window.addEventListener("resize", self.resizeHandler);
			window.document.addEventListener("dblclick", self.doubleClickHandler);

			if (self.supportsPopState) {
				window.addEventListener('popstate', self.popStateHandler);
			}
			else {
				window.addEventListener('hashchange', self.hashChangeHandler);
			}

			// we are ready to go
			window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
		}

		if (self.initialized==false) {
			if (self.enableDeepLinking) {
				self.syncronizeViewToURL();
			} 
	
			if (self.refreshPageForChanges) {
				self.setupRefreshForChanges();
			}
	
			self.initialized = true;
		}
		
		if (self.scaleViewsToFit) {
			self.viewScale = self.scaleViewToFit(view);
			
			if (self.viewScale<0) {
				setTimeout(self.scaleViewToFit, 500, view);
			}
		}
		else if (view) {
			self.viewScale = self.getViewScaleValue(view);
			self.centerView(view);
			self.updateSliderValue(self.viewScale);
		}
		else {
			// no view found
		}
	
		if (self.showUpdateNotification) {
			self.showNotification();
		}

		//"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
		//"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
	}


	///////////////////////////////////////
	// AUTO REFRESH 
	///////////////////////////////////////

	self.setupRefreshForChanges = function() {
		self.refreshRequest = new XMLHttpRequest();

		if (!self.refreshRequest) {
			return false;
		}

		// get document start values immediately
		self.requestRefreshUpdate();
	}

	/**
	 * Attempt to check the last modified date by the headers 
	 * or the last modified property from the byte array (experimental)
	 **/
	self.requestRefreshUpdate = function() {
		var url = document.location.href;
		var protocol = window.location.protocol;
		var method;
		
		try {

			if (self.refreshCheckContentSize) {
				self.refreshRequest.open('HEAD', url, true);
			}
			else if (self.refreshCheckContent) {
				self.refreshContent = document.documentElement.outerHTML;
				self.refreshRequest.open('GET', url, true);
				self.refreshRequest.responseType = "text";
			}
			else {

				// get page last modified date for the first call to compare to later
				if (self.lastModifiedDate==null) {

					// File system does not send headers in FF so get blob if possible
					if (protocol=="file:") {
						self.refreshRequest.open("GET", url, true);
						self.refreshRequest.responseType = "blob";
					}
					else {
						self.refreshRequest.open("HEAD", url, true);
						self.refreshRequest.responseType = "blob";
					}

					self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

					// In some browsers (Chrome & Safari) this error occurs at send: 
					// 
					// Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null' 
					// has been blocked by CORS policy: 
					// Cross origin requests are only supported for protocol schemes: 
					// http, data, chrome, chrome-extension, https.
					// 
					// Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
					// 
					// Solution is to run a local server, set local permissions or test in another browser
					self.refreshRequest.send(null);

					// In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date: 
					// 
					// DOM7011: The code on this page disabled back and forward caching.

					// In Brave (Chrome) error when on the server
					// index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
					// self.refreshRequest.send(null);

				}
				else {
					self.refreshRequest = new XMLHttpRequest();
					self.refreshRequest.onreadystatechange = self.refreshHandler;
					self.refreshRequest.ontimeout = function() {
						self.log("Couldn't find page to check for updates");
					}
					
					var method;
					if (protocol=="file:") {
						method = "GET";
					}
					else {
						method = "HEAD";
					}

					//refreshRequest.open('HEAD', url, true);
					self.refreshRequest.open(method, url, true);
					self.refreshRequest.responseType = "blob";
					self.refreshRequest.send(null);
				}
			}
		}
		catch (error) {
			self.log("Refresh failed for the following reason:")
			self.log(error);
		}
	}

	self.refreshHandler = function() {
		var contentSize;

		try {

			if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {
				
				if (self.refreshRequest.status === 2 || 
					self.refreshRequest.status === 200) {
					var pageChanged = false;

					self.updateLastModifiedLabel();

					if (self.refreshCheckContentSize) {
						var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
						contentSize = self.refreshRequest.getResponseHeader("Content-Length");
						//lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
						var headers = self.refreshRequest.getAllResponseHeaders();
						var hasContentHeader = headers.indexOf("Content-Length")!=-1;
						
						if (hasContentHeader) {
							contentSize = self.refreshRequest.getResponseHeader("Content-Length");

							// size has not been set yet
							if (self.refreshContentSize==null) {
								self.refreshContentSize = contentSize;
								// exit and let interval call this method again
								return;
							}

							if (contentSize!=self.refreshContentSize) {
								pageChanged = true;
							}
						}
					}
					else if (self.refreshCheckContent) {

						if (self.refreshRequest.responseText!=self.refreshContent) {
							pageChanged = true;
						}
					}
					else {
						lastModifiedHeader = self.getLastModified(self.refreshRequest);

						if (self.lastModifiedDate!=lastModifiedHeader) {
							self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" +lastModifiedHeader);
							pageChanged = true;
						}

					}

					
					if (pageChanged) {
						clearInterval(self.refreshInterval);
						self.refreshUpdatedPage();
						return;
					}

				}
				else {
					self.log('There was a problem with the request.');
				}

			}
		}
		catch( error ) {
			//console.log('Caught Exception: ' + error);
		}
	}

	self.refreshOnLoadOnceHandler = function(event) {

		// get the last modified date
		if (self.refreshRequest.response) {
			self.lastModifiedDate = self.getLastModified(self.refreshRequest);

			if (self.lastModifiedDate!=null) {

				if (self.refreshInterval==null) {
					self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
				}
			}
			else {
				self.log("Could not get last modified date from the server");
			}
		}
	}

	self.refreshUpdatedPage = function() {
		if (self.showRefreshNotifications) {
			var date = new Date().setTime((new Date().getTime()+10000));
			document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
		}

		document.location.reload(true);
	}

	self.showNotification = function(duration) {
		var notificationID = self.pageRefreshedName+"ID";
		var notification = document.getElementById(notificationID);
		if (duration==null) duration = 4000;

		if (notification!=null) {return;}

		notification = document.createElement("div");
		notification.id = notificationID;
		notification.textContent = "PAGE UPDATED";
		var styleRule = ""
		styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
		styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
		styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1)); cursor: pointer";
		notification.setAttribute("style", styleRule);

		notification.className = "PageRefreshedClass";
		notification.addEventListener("click", function() {
			notification.parentNode.removeChild(notification);
		});
		
		document.body.appendChild(notification);

		setTimeout(function() {
			notification.style.opacity = "0";
			notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
			setTimeout(function() {
				try {
					notification.parentNode.removeChild(notification);
				} catch(error) {}
			}, duration)
		}, duration);

		document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
	}

	/**
	 * Get the last modified date from the header 
	 * or file object after request has been received
	 **/
	self.getLastModified = function(request) {
		var date;

		// file protocol - FILE object with last modified property
		if (request.response && request.response.lastModified) {
			date = request.response.lastModified;
		}
		
		// http protocol - check headers
		if (date==null) {
			date = request.getResponseHeader("Last-Modified");
		}

		return date;
	}

	self.updateLastModifiedLabel = function() {
		var labelValue = "";
		
		if (self.lastModifiedLabel==null) {
			self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
		}

		if (self.lastModifiedLabel) {
			var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
			var minutes = 0;
			var hours = 0;

			if (seconds < 60) {
				seconds = Math.floor(seconds/10)*10;
				labelValue = seconds + " seconds";
			}
			else {
				minutes = parseInt((seconds/60) + "");

				if (minutes>60) {
					hours = parseInt((seconds/60/60) +"");
					labelValue += hours==1 ? " hour" : " hours";
				}
				else {
					labelValue = minutes+"";
					labelValue += minutes==1 ? " minute" : " minutes";
				}
			}
			
			if (seconds<10) {
				labelValue = "Updated now";
			}
			else {
				labelValue = "Updated " + labelValue + " ago";
			}

			if (self.lastModifiedLabel.firstElementChild) {
				self.lastModifiedLabel.firstElementChild.textContent = labelValue;

			}
			else if ("textContent" in self.lastModifiedLabel) {
				self.lastModifiedLabel.textContent = labelValue;
			}
		}
	}

	self.getShortString = function(string, length) {
		if (length==null) length = 30;
		string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
		return string;
	}

	self.getShortNumber = function(value, places) {
		if (places==null || places<1) places = 4;
		value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
		return value;
	}

	///////////////////////////////////////
	// NAVIGATION CONTROLS
	///////////////////////////////////////

	self.updateViewLabel = function() {
		var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;
		var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
		var viewId = view ? view.id : null;

		if (viewNavigationLabel && view) {
			if (viewName && viewName.indexOf('"')!=-1) {
				viewName = viewName.replace(/"/g, "");
			}

			if (self.showViewName) {
				viewNavigationLabel.textContent = viewName;
				self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
			}
			else {
				viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
				self.setTooltip(viewNavigationLabel, viewName);
			}

		}
	}

	self.updateURL = function(view) {
		view = view == null ? self.getVisibleView() : view;
		var viewId = view ? view.id : null
		var viewFragment = view ? "#"+ viewId : null;

		if (viewId && self.viewIds.length>1 && self.enableDeepLinking) {

			if (self.supportsPopState==false) {
				self.setFragment(viewId);
			}
			else {
				if (viewFragment!=window.location.hash) {

					if (window.location.hash==null) {
						window.history.replaceState({name:viewId}, null, viewFragment);
					}
					else {
						window.history.pushState({name:viewId}, null, viewFragment);
					}
				}
			}
		}
	}

	self.updateURLState = function(view, stateName) {
		stateName = view && (stateName=="" || stateName==null) ? self.getStateNameByViewId(view.id) : stateName;

		if (self.supportsPopState==false) {
			self.setFragment(stateName);
		}
		else {
			if (stateName!=window.location.hash) {

				if (window.location.hash==null) {
					window.history.replaceState({name:view.viewId}, null, stateName);
				}
				else {
					window.history.pushState({name:view.viewId}, null, stateName);
				}
			}
		}
	}

	self.setFragment = function(value) {
		window.location.hash = "#" + value;
	}

	self.setTooltip = function(element, value) {
		// setting the tooltip in edge causes a page crash on hover
		if (/Edge/.test(navigator.userAgent)) { return; }

		if ("title" in element) {
			element.title = value;
		}
	}

	self.getStylesheetRules = function(styleSheet) {
		try {
			if (styleSheet) return styleSheet.cssRules || styleSheet.rules;
	
			return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
		}
		catch (error) {
			// ERRORS:
			// SecurityError: The operation is insecure.
			// Errors happen when script loads before stylesheet or loading an external css locally

			// InvalidAccessError: A parameter or an operation is not supported by the underlying object
			// Place script after stylesheet

			console.log(error);
			if (error.toString().indexOf("The operation is insecure")!=-1) {
				console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
			}
			return [];
		}
	}

	/**
	 * If single page application hide all of the views. 
	 * @param {Number} selectedIndex if provided shows the view at index provided
	 **/
	self.hideViews = function(selectedIndex, animation) {
		var rules = self.getStylesheetRules();
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			var cssText = rule && rule.cssText;

			if (rule.media!=null && cssText.match("--web-view-name:")) {

				if (queryIndex==selectedIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = selectedIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
				}
				else {
					if (animation) {
						self.fadeOut(rule)
					}
					else {
						self.disableMediaQuery(rule);
					}
				}
				
				queryIndex++;
			}
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();

		self.dispatchViewChange();

		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;

		return viewIndex==selectedIndex ? view : null;
	}

	/**
	 * If single page application hide all of the views. 
	 * @param {HTMLElement} selectedView if provided shows the view passed in
	 **/
	 self.hideAllViews = function(selectedView, animation) {
		var views = self.views;
		var queryIndex = 0;
		var numberOfViews = views!=null ? views.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfViews;i++) {
			var viewData = views[i];
			var view = viewData && viewData.view;
			var mediaRule = viewData && viewData.mediaRule;
			
			if (view==selectedView) {
				self.currentQuery.mediaText = mediaRule.conditionText;
				self.currentQuery.index = queryIndex;
				self.currentQuery.rule = mediaRule;
				self.enableMediaQuery(mediaRule);
			}
			else {
				if (animation) {
					self.fadeOut(mediaRule)
				}
				else {
					self.disableMediaQuery(mediaRule);
				}
			}
			
			queryIndex++;
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();
		self.dispatchViewChange();

		var visibleView = self.getVisibleView();

		return visibleView==selectedView ? selectedView : null;
	}

	/**
	 * Hide view
	 * @param {Object} view element to hide
	 **/
	self.hideView = function(view) {
		var rule = view ? self.mediaQueryDictionary[view.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);
		}
	}

	/**
	 * Hide overlay
	 * @param {Object} overlay element to hide
	 **/
	self.hideOverlay = function(overlay) {
		var rule = overlay ? self.mediaQueryDictionary[overlay.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);

			//if (self.showByMediaQuery) {
				overlay.style.display = "none";
			//}
		}
	}

	/**
	 * Show the view by media query. Does not hide current views
	 * Sets view options by default
	 * @param {Object} view element to show
	 * @param {Boolean} setViewOptions sets view options if null or true
	 */
	self.showViewByMediaQuery = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var isOverlay = view ? self.isOverlay(view) : false;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);

			if (isOverlay && view && setViewOptions) {
				self.setViewVariables(null, view);
			}
			else {
				if (view && setViewOptions) self.setViewOptions(view);
				if (view && setViewOptions) self.setViewVariables(view);
			}
		}
	}

	/**
	 * Show the view. Does not hide current views
	 */
	self.showView = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view==null) view =self.getVisibleView();
			if (view && setViewOptions) self.setViewOptions(view);
		}
		else if (id) {
			display = window.getComputedStyle(view).getPropertyValue("display");
			if (display=="" || display=="none") {
				view.style.display = "block";
			}
		}

		if (view) {
			if (self.currentView!=null) {
				self.lastView = self.currentView;
			}

			self.currentView = view;
		}
	}

	self.showViewById = function(id, setViewOptions) {
		var view = id ? self.getViewById(id) : null;

		if (view) {
			self.showView(view);
			return;
		}

		self.log("View not found '" + id + "'");
	}

	self.getElementView = function(element) {
		var view = element;
		var viewFound = false;

		while (viewFound==false || view==null) {
			if (view && self.viewsDictionary[view.id]) {
				return view;
			}
			view = view.parentNode;
		}
	}

	/**
	 * Show overlay over view
	 * @param {Event | HTMLElement} event event or html element with styles applied
	 * @param {String} id id of view or view reference
	 * @param {Number} x x location
	 * @param {Number} y y location
	 */
	self.showOverlay = function(event, id, x, y) {
		var overlay = id && typeof id === 'string' ? self.getViewById(id) : id ? id : null;
		var query = overlay ? self.mediaQueryDictionary[overlay.id] : null;
		var centerHorizontally = false;
		var centerVertically = false;
		var anchorLeft = false;
		var anchorTop = false;
		var anchorRight = false;
		var anchorBottom = false;
		var display = null;
		var reparent = true;
		var view = null;
		
		if (overlay==null || overlay==false) {
			self.log("Overlay not found, '"+ id + "'");
			return;
		}

		// get enter animation - event target must have css variables declared
		if (event) {
			var button = event.currentTarget || event; // can be event or htmlelement
			var buttonComputedStyles = getComputedStyle(button);
			var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
			var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
			var isAnimated = animation!="";
			var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
			var actionTarget = self.application ? null : self.getElement(actionTargetValue);
			var actionTargetStyles = actionTarget ? actionTarget.style : null;

			if (actionTargetStyles) {
				actionTargetStyles.setProperty("animation", animation);
			}

			if ("stopImmediatePropagation" in event) {
				event.stopImmediatePropagation();
			}
		}
		
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// remove any current overlays
		if (self.currentOverlay) {

			// act as switch if same button
			if (self.currentOverlay==actionTarget || self.currentOverlay==null) {
				if (self.lastTrigger==button) {
					self.removeOverlay(isAnimated);
					return;
				}
			}
			else {
				self.removeOverlay(isAnimated);
			}
		}

		if (reparent) {
			view = self.getElementView(button);
			if (view) {
				view.appendChild(overlay);
			}
		}

		if (query) {
			//self.setElementAnimation(overlay, null);
			//overlay.style.animation = animation;
			self.enableMediaQuery(query);
			
			var display = overlay && overlay.style.display;
			
			if (overlay && display=="" || display=="none") {
				overlay.style.display = "block";
				//self.setViewOptions(overlay);
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}
		else if (id) {

			display = window.getComputedStyle(overlay).getPropertyValue("display");

			if (display=="" || display=="none") {
				overlay.style.display = "block";
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}

		// do not set x or y position if centering
		var horizontal = self.prefix + "center-horizontally";
		var vertical = self.prefix + "center-vertically";
		var style = overlay.style;
		var transform = [];

		centerHorizontally = self.getIsStyleDefined(id, horizontal) ? self.getViewPreferenceBoolean(overlay, horizontal) : false;
		centerVertically = self.getIsStyleDefined(id, vertical) ? self.getViewPreferenceBoolean(overlay, vertical) : false;
		anchorLeft = self.getIsStyleDefined(id, "left");
		anchorRight = self.getIsStyleDefined(id, "right");
		anchorTop = self.getIsStyleDefined(id, "top");
		anchorBottom = self.getIsStyleDefined(id, "bottom");

		
		if (self.viewsDictionary[overlay.id] && self.viewsDictionary[overlay.id].styleDeclaration) {
			style = self.viewsDictionary[overlay.id].styleDeclaration.style;
		}
		
		if (centerHorizontally) {
			style.left = "50%";
			style.transformOrigin = "0 0";
			transform.push("translateX(-50%)");
		}
		else if (anchorRight && anchorLeft) {
			style.left = x + "px";
		}
		else if (anchorRight) {
			//style.right = x + "px";
		}
		else {
			style.left = x + "px";
		}
		
		if (centerVertically) {
			style.top = "50%";
			transform.push("translateY(-50%)");
			style.transformOrigin = "0 0";
		}
		else if (anchorTop && anchorBottom) {
			style.top = y + "px";
		}
		else if (anchorBottom) {
			//style.bottom = y + "px";
		}
		else {
			style.top = y + "px";
		}

		if (transform.length) {
			style.transform = transform.join(" ");
		}

		self.currentOverlay = overlay;
		self.lastTrigger = button;
	}

	self.goBack = function() {
		if (self.currentOverlay) {
			self.removeOverlay();
		}
		else if (self.lastView) {
			self.goToView(self.lastView.id);
		}
	}

	self.removeOverlay = function(animate) {
		var overlay = self.currentOverlay;
		animate = animate===false ? false : true;

		if (overlay) {
			var style = overlay.style;
			
			if (style.animation && self.supportAnimations && animate) {
				self.reverseAnimation(overlay, true);

				var duration = self.getAnimationDuration(style.animation, true);
		
				setTimeout(function() {
					self.setElementAnimation(overlay, null);
					self.hideOverlay(overlay);
					self.currentOverlay = null;
				}, duration);
			}
			else {
				self.setElementAnimation(overlay, null);
				self.hideOverlay(overlay);
				self.currentOverlay = null;
			}
		}
	}

	/**
	 * Reverse the animation and hide after
	 * @param {Object} target element with animation
	 * @param {Boolean} hide hide after animation ends
	 */
	self.reverseAnimation = function(target, hide) {
		var lastAnimation = null;
		var style = target.style;

		style.animationPlayState = "paused";
		lastAnimation = style.animation;
		style.animation = null;
		style.animationPlayState = "paused";

		if (hide) {
			//target.addEventListener("animationend", self.animationEndHideHandler);
	
			var duration = self.getAnimationDuration(lastAnimation, true);
			var isOverlay = self.isOverlay(target);
	
			setTimeout(function() {
				self.setElementAnimation(target, null);

				if (isOverlay) {
					self.hideOverlay(target);
				}
				else {
					self.hideView(target);
				}
			}, duration);
		}

		setTimeout(function() {
			style.animation = lastAnimation;
			style.animationPlayState = "paused";
			style.animationDirection = "reverse";
			style.animationPlayState = "running";
		}, 30);
	}

	self.animationEndHandler = function(event) {
		var target = event.currentTarget;
		self.dispatchEvent(new Event(event.type));
	}

	self.isOverlay = function(view) {
		var result = view ? self.getViewPreferenceBoolean(view, self.prefix + "is-overlay") : false;

		return result;
	}

	self.animationEndHideHandler = function(event) {
		var target = event.currentTarget;
		self.setViewVariables(null, target);
		self.hideView(target);
		target.removeEventListener("animationend", self.animationEndHideHandler);
	}

	self.animationEndShowHandler = function(event) {
		var target = event.currentTarget;
		target.removeEventListener("animationend", self.animationEndShowHandler);
	}

	self.setViewOptions = function(view) {

		if (view) {
			self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
			self.maximumScale = self.getViewPreferenceValue(view, self.prefix + "maximum-scale");
			self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
			self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
			self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
			self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
			self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
			self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
			self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
			self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
			self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
			self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
			self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
			self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
			self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
			self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
			self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
			self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
			self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
			self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;
			self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
			self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

			if (self.scaleViewsToFit) {
				var newScaleValue = self.scaleViewToFit(view);
				
				if (newScaleValue<0) {
					setTimeout(self.scaleViewToFit, 500, view);
				}
			}
			else {
				self.viewScale = self.getViewScaleValue(view);
				self.viewToFitWidthScale = self.getViewFitToViewportWidthScale(view, self.enableScaleUp)
				self.viewToFitHeightScale = self.getViewFitToViewportScale(view, self.enableScaleUp);
				self.updateSliderValue(self.viewScale);
			}

			if (self.imageComparisonDuration!=null) {
				// todo
			}

			if (self.refreshPageForChangesInterval!=null) {
				self.refreshDuration = Number(self.refreshPageForChangesInterval);
			}
		}
	}

	self.previousView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView()
		var index = view ? self.getViewIndex(view) : -1;
		var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		if (event) {
			event.stopImmediatePropagation();
		}

		if (prevQueryIndex<0) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==prevQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = prevQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	self.nextView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView();
		var index = view ? self.getViewIndex(view) : -1;
		var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;
		var numberOfMediaQueries = self.getNumberOfMediaRules();

		if (event) {
			event.stopImmediatePropagation();
		}

		if (nextQueryIndex>=numberOfMediaQueries) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==nextQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = nextQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	/**
	 * Enables a view via media query
	 */
	self.enableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.inclusionQuery;
		}
		catch(error) {
			//self.log(error);
			rule.conditionText = self.inclusionQuery;
		}
	}

	self.disableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.exclusionQuery;
		}
		catch(error) {
			rule.conditionText = self.exclusionQuery;
		}
	}

	self.dispatchViewChange = function() {
		try {
			var event = new Event(self.NAVIGATION_CHANGE);
			window.dispatchEvent(event);
		}
		catch (error) {
			// In IE 11: Object doesn't support this action
		}
	}

	self.getNumberOfMediaRules = function() {
		var rules = self.getStylesheetRules();
		var numberOfRules = rules ? rules.length : 0;
		var numberOfQueries = 0;

		for (var i=0;i<numberOfRules;i++) {
			if (rules[i].media!=null) { numberOfQueries++; }
		}
		
		return numberOfQueries;
	}

	/////////////////////////////////////////
	// VIEW SCALE 
	/////////////////////////////////////////

	self.sliderChangeHandler = function(event) {
		var value = self.getShortNumber(event.currentTarget.value/100);
		var view = self.getVisibleView();
		self.setViewScaleValue(view, false, value, true);
	}

	self.updateSliderValue = function(scale) {
		var slider = document.getElementById(self.viewScaleSliderId);
		var tooltip = parseInt(scale * 100 + "") + "%";
		var inputType;
		var inputValue;
		
		if (slider) {
			inputValue = self.getShortNumber(scale * 100);
			if (inputValue!=slider["value"]) {
				slider["value"] = inputValue;
			}
			inputType = slider.getAttributeNS(null, "type");

			if (inputType!="range") {
				// input range is not supported
				slider.style.display = "none";
			}

			self.setTooltip(slider, tooltip);
		}
	}

	self.viewChangeHandler = function(event) {
		var view = self.getVisibleView();
		var matrix = view ? getComputedStyle(view).transform : null;
		
		if (matrix) {
			self.viewScale = self.getViewScaleValue(view);
			
			var scaleNeededToFit = self.getViewFitToViewportScale(view);
			var isViewLargerThanViewport = scaleNeededToFit<1;
			
			// scale large view to fit if scale to fit is enabled
			if (self.scaleViewsToFit) {
				self.scaleViewToFit(view);
			}
			else {
				self.updateSliderValue(self.viewScale);
			}
		}
	}

	self.getViewScaleValue = function(view) {
		var matrix = getComputedStyle(view).transform;

		if (matrix) {
			var matrixArray = matrix.replace("matrix(", "").split(",");
			var scaleX = parseFloat(matrixArray[0]);
			var scaleY = parseFloat(matrixArray[3]);
			var scale = Math.min(scaleX, scaleY);
		}

		return scale;
	}

	/**
	 * Scales view to scale. 
	 * @param {Object} view view to scale. views are in views array
	 * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
	 * @param {Number} desiredScale scale to define. not used if scale to fit is false
	 * @param {Boolean} isSliderChange indicates if slider is callee
	 */
	self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
		var enableScaleUp = self.enableScaleUp;
		var scaleToFitType = self.scaleToFitType;
		var minimumScale = self.minimumScale;
		var maximumScale = self.maximumScale;
		var hasMinimumScale = !isNaN(minimumScale) && minimumScale!="";
		var hasMaximumScale = !isNaN(maximumScale) && maximumScale!="";
		var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
		var scaleToFitFull = self.getViewFitToViewportScale(view, true);
		var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
		var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
		var scaleToWidth = scaleToFitType=="width";
		var scaleToHeight = scaleToFitType=="height";
		var shrunkToFit = false;
		var topPosition = null;
		var leftPosition = null;
		var translateY = null;
		var translateX = null;
		var transformValue = "";
		var canCenterVertically = true;
		var canCenterHorizontally = true;
		var style = view.style;

		if (view && self.viewsDictionary[view.id] && self.viewsDictionary[view.id].styleDeclaration) {
			style = self.viewsDictionary[view.id].styleDeclaration.style;
		}

		if (scaleToFit && isSliderChange!=true) {
			if (scaleToFitType=="fit" || scaleToFitType=="") {
				desiredScale = scaleNeededToFit;
			}
			else if (scaleToFitType=="width") {
				desiredScale = scaleNeededToFitWidth;
			}
			else if (scaleToFitType=="height") {
				desiredScale = scaleNeededToFitHeight;
			}
		}
		else {
			if (isNaN(desiredScale)) {
				desiredScale = 1;
			}
		}

		self.updateSliderValue(desiredScale);
		
		// scale to fit width
		if (scaleToWidth && scaleToHeight==false) {
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitWidth;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return desiredScale;
		}

		// scale to fit height
		if (scaleToHeight && scaleToWidth==false) {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;
			
			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullHeight;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitHeight;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
				//canCenterVertically = desiredScale>=scaleNeededToFitHeight && enableScaleUp==false;
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return scaleNeededToFitHeight;
		}

		if (scaleToFitType=="fit") {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFit;
			canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFit;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			if (isSliderChange || scaleToFit==false) {
				canCenterVertically = scaleToFitFullHeight>=desiredScale;
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFit;
			}

			transformValue = "scale(" + desiredScale + ")";

			//canCenterHorizontally = self.canCenterHorizontally(view, "fit", false, desiredScale);
			//canCenterVertically = self.canCenterVertically(view, "fit", false, desiredScale);
			
			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);
			
			return desiredScale;
		}

		if (scaleToFitType=="default" || scaleToFitType=="") {
			desiredScale = 1;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}
			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			canCenterHorizontally = self.canCenterHorizontally(view, "none", false, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "none", false, desiredScale, minimumScale, maximumScale);

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
				else {
					transformValue += " translateX(" + 0 + ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;


			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);
			
			return desiredScale;
		}
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view
	 * @param {String} type type of scaling - width, height, all, none
	 * @param {Boolean} scaleUp if scale up enabled 
	 * @param {Number} scale target scale value 
	 */
	self.canCenterHorizontally = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? scale : scaleNeededToFitWidth;
		scaleUp = scaleUp == null ? false : scaleUp;

		if (type=="width") {
	
			if (scaleUp && maximumScale==null) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}
		else if (type=="height") {
			minScale = Math.min(1, scaleNeededToFitHeight);
			if (minimumScale!="" && maximumScale!="") {
				minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
			}
			else {
				if (minimumScale!="") {
					minScale = Math.max(minimumScale, scaleNeededToFitHeight);
				}
				if (maximumScale!="") {
					minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
				}
			}
	
			if (scaleUp && maximumScale=="") {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=minScale) {
				canCenter = true;
			}
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitWidth>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}

		self.horizontalScrollbarsNeeded = canCenter;
		
		return canCenter;
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view to scale
	 * @param {String} type type of scaling
	 * @param {Boolean} scaleUp if scale up enabled 
	 * @param {Number} scale target scale value 
	 */
	self.canCenterVertically = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? 1 : scale;
		scaleUp = scaleUp == null ? false : scaleUp;
	
		if (type=="width") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFitWidth;
		}
		else if (type=="height") {
			minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFit));
			canCenter = scaleNeededToFitHeight>=minScale;
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitHeight>=1) {
				canCenter = true;
			}
		}

		self.verticalScrollbarsNeeded = canCenter;
		
		return canCenter;
	}

	self.getViewFitToViewportScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth) || isNaN(elementHeight)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;
		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		else if (elementWidth > availableWidth || elementHeight > availableHeight) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		
		return newScale;
	}

	self.getViewFitToViewportWidthScale = function(view, scaleUp) {
		// need to get browser viewport width when element
		var isParentWindow = view && view.parentNode && view.parentNode===document.body;
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;

		if (enableScaleUp) {
			newScale = availableWidth/elementWidth;
		}
		else if (elementWidth > availableWidth) {
			newScale = availableWidth/elementWidth;
		}
		
		return newScale;
	}

	self.getViewFitToViewportHeightScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementHeight)) {
			return newScale;
		}

		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = availableHeight/elementHeight;
		}
		else if (elementHeight > availableHeight) {
			newScale = availableHeight/elementHeight;
		}
		
		return newScale;
	}

	self.keypressHandler = function(event) {
		var rightKey = 39;
		var leftKey = 37;
		
		// listen for both events 
		if (event.type=="keypress") {
			window.removeEventListener("keyup", self.keypressHandler);
		}
		else {
			window.removeEventListener("keypress", self.keypressHandler);
		}
		
		if (self.showNavigationControls) {
			if (self.navigationOnKeypress) {
				if (event.keyCode==rightKey) {
					self.nextView();
				}
				if (event.keyCode==leftKey) {
					self.previousView();
				}
			}
		}
		else if (self.navigationOnKeypress) {
			if (event.keyCode==rightKey) {
				self.nextView();
			}
			if (event.keyCode==leftKey) {
				self.previousView();
			}
		}
	}

	///////////////////////////////////
	// GENERAL FUNCTIONS
	///////////////////////////////////

	self.getViewById = function(id) {
		id = id ? id.replace("#", "") : "";
		var view = self.viewIds.indexOf(id)!=-1 && self.getElement(id);
		return view;
	}

	self.getViewIds = function() {
		var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
		var viewId = null;

		viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

		if (viewIds.length==0) {
			viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
			viewIds = viewId ? [viewId] : [];
		}

		return viewIds;
	}

	self.getInitialViewId = function() {
		var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
		return viewId;
	}

	self.getApplicationStylesheet = function() {
		var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
		self.applicationStylesheet = document.getElementById("applicationStylesheet");
		return self.applicationStylesheet.sheet;
	}

	self.getVisibleView = function() {
		var viewIds = self.getViewIds();
		
		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}
			
			if (view) {
				var display = getComputedStyle(view).display;
		
				if (display=="block" || display=="flex") {
					return view;
				}
			}
		}

		return null;
	}

	self.getVisibleViews = function() {
		var viewIds = self.getViewIds();
		var views = [];
		
		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}
			
			if (view) {
				var display = getComputedStyle(view).display;
				
				if (display=="none") {
					continue;
				}

				if (display=="block" || display=="flex") {
					views.push(view);
				}
			}
		}

		return views;
	}

	self.getStateNameByViewId = function(id) {
		var state = self.viewsDictionary[id];
		return state && state.stateName;
	}

	self.getMatchingViews = function(ids) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state && state.rule; 
				var matchResults = window.matchMedia(rule.conditionText);
				var view = self.views[viewId];
				
				if (matchResults.matches) {
					if (ids==true) {
						matchingViews.push(viewId);
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.ruleMatchesQuery = function(rule) {
		var result = window.matchMedia(rule.conditionText);
		return result.matches;
	}

	self.getViewsByStateName = function(stateName, matchQuery) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {

			// find state name
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state.rule;
				var mediaRule = state.mediaRule;
				var view = self.views[viewId];
				var viewStateName = self.getStyleRuleValue(mediaRule, self.STATE_NAME, state);
				var stateFoundAtt = view.getAttribute(self.STATE_NAME)==state;
				var matchesResults = false;
				
				if (viewStateName==stateName) {
					if (matchQuery) {
						matchesResults = self.ruleMatchesQuery(rule);

						if (matchesResults) {
							matchingViews.push(view);
						}
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.getInitialView = function() {
		var viewId = self.getInitialViewId();
		viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
		var view = self.getElement(viewId);
		var postName = "_Class";

		if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
			view = self.getElement(viewId.replace(postName, ""));
		}

		return view;
	}

	self.getViewIndex = function(view) {
		var viewIds = self.getViewIds();
		var id = view ? view.id : null;
		var index = id && viewIds ? viewIds.indexOf(id) : -1;

		return index;
	}

	self.syncronizeViewToURL = function() {
		var fragment = self.getHashFragment();

		if (self.showByMediaQuery) {
			var stateName = fragment;
			
			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}
			
			self.showMediaQueryViewsByState(stateName);
			return;
		}

		var view = self.getViewById(fragment);
		var index = view ? self.getViewIndex(view) : 0;
		if (index==-1) index = 0;
		var currentView = self.hideViews(index);

		if (self.supportsPopState && currentView) {

			if (fragment==null) {
				window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
			}
			else {
				window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
			}
		}
		
		self.setViewVariables(view);
		return view;
	}

	/**
	 * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
	 */
	self.setViewVariables = function(view, overlay, parentView) {
		if (view) {
			if (self.currentView) {
				self.lastView = self.currentView;
			}
			self.currentView = view;
		}

		if (overlay) {
			if (self.currentOverlay) {
				self.lastOverlay = self.currentOverlay;
			}
			self.currentOverlay = overlay;
		}
	}

	self.getViewPreferenceBoolean = function(view, property, altValue) {
		var computedStyle = window.getComputedStyle(view);
		var value = computedStyle.getPropertyValue(property);
		var type = typeof value;
		
		if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
			return true;
		}
		else if (value=="" && arguments.length==3) {
			return altValue;
		}

		return false;
	}

	self.getViewPreferenceValue = function(view, property, defaultValue) {
		var value = window.getComputedStyle(view).getPropertyValue(property);

		if (value===undefined) {
			return defaultValue;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	self.getStyleRuleValue = function(cssRule, property) {
		var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

		if (value===undefined) {
			return null;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	/**
	 * Get the first defined value of property. Returns empty string if not defined
	 * @param {String} id id of element
	 * @param {String} property 
	 */
	self.getCSSPropertyValueForElement = function(id, property) {
		var styleSheets = document.styleSheets;
		var numOfStylesheets = styleSheets.length;
		var values = [];
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var value;

		for(var i=0;i<numOfStylesheets;i++) {
			var styleSheet = styleSheets[i];
			var cssRules = self.getStylesheetRules(styleSheet);
			var numOfCSSRules = cssRules.length;
			var cssRule;
			
			for (var j=0;j<numOfCSSRules;j++) {
				cssRule = cssRules[j];
				
				if (cssRule.media) {
					var mediaRules = cssRule.cssRules;
					var numOfMediaRules = mediaRules ? mediaRules.length : 0;
					
					for(var k=0;k<numOfMediaRules;k++) {
						var mediaRule = mediaRules[k];
						
						if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {
							
							if (mediaRule.style && mediaRule.style.getPropertyValue(property)!="") {
								value = mediaRule.style.getPropertyValue(property);
								values.push(value);
							}
						}
					}
				}
				else {

					if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
						if (cssRule.style && cssRule.style.getPropertyValue(property)!="") {
							value = cssRule.style.getPropertyValue(property);
							values.push(value);
						}
					}
				}
			}
		}

		return values.pop();
	}

	self.getIsStyleDefined = function(id, property) {
		var value = self.getCSSPropertyValueForElement(id, property);
		return value!==undefined && value!="";
	}

	self.collectViews = function() {
		var viewIds = self.getViewIds();

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getElement(id);
			self.views[id] = view;
		}
		
		self.viewIds = viewIds;
	}

	self.collectOverlays = function() {
		var viewIds = self.getViewIds();
		var ids = [];

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getViewById(id);
			const isOverlay = view && self.isOverlay(view);
			
			if (isOverlay) {
				ids.push(id);
				self.overlays[id] = view;
			}
		}
		
		self.overlayIds = ids;
	}

	self.collectMediaQueries = function() {
		var viewIds = self.getViewIds();
		var styleSheet = self.getApplicationStylesheet();
		var cssRules = self.getStylesheetRules(styleSheet);
		var numOfCSSRules = cssRules ? cssRules.length : 0;
		var cssRule;
		var id = viewIds.length ? viewIds[0]: ""; // single view
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var viewsNotFound = viewIds.slice();
		var viewsFound = [];
		var selectorText = null;
		var property = self.prefix + "view-id";
		var stateName = self.prefix + "state";
		var stateValue = null;
		var view = null;
		
		for (var j=0;j<numOfCSSRules;j++) {
			cssRule = cssRules[j];
			
			if (cssRule.media) {
				var mediaRules = cssRule.cssRules;
				var numOfMediaRules = mediaRules ? mediaRules.length : 0;
				var mediaViewInfoFound = false;
				var mediaId = null;
				
				for(var k=0;k<numOfMediaRules;k++) {
					var mediaRule = mediaRules[k];

					selectorText = mediaRule.selectorText;
					
					if (selectorText==".mediaViewInfo" && mediaViewInfoFound==false) {

						mediaId = self.getStyleRuleValue(mediaRule, property);
						stateValue = self.getStyleRuleValue(mediaRule, stateName);

						selectorIDText = "#" + mediaId;
						selectorClassText = "." + mediaId + "_Class";
						view = self.getElement(mediaId);
						
						// prevent duplicates from load and domcontentloaded events
						if (self.addedViews.indexOf(mediaId)==-1) {
							self.addView(view, mediaId, cssRule, mediaRule, stateValue);
						}

						viewsFound.push(mediaId);

						if (viewsNotFound.indexOf(mediaId)!=-1) {
							viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
						}

						mediaViewInfoFound = true;
					}

					if (selectorIDText==selectorText || selectorClassText==selectorText) {
						var styleObject = self.viewsDictionary[mediaId];
						if (styleObject) {
							styleObject.styleDeclaration = mediaRule;
						}
						break;
					}
				}
			}
			else {
				selectorText = cssRule.selectorText;
				
				if (selectorText==null) continue;

				selectorText = selectorText.replace(/[#|\s|*]?/g, "");

				if (viewIds.indexOf(selectorText)!=-1) {
					view = self.getElement(selectorText);
					self.addView(view, selectorText, cssRule, null, stateValue);

					if (viewsNotFound.indexOf(selectorText)!=-1) {
						viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
					}

					break;
				}
			}
		}

		if (viewsNotFound.length) {
			console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
			console.log("Views found:" + viewsFound.join(",") + "");
		}
	}

	/**
	 * Adds a view
	 * @param {HTMLElement} view view element
	 * @param {String} id id of view element
	 * @param {CSSRule} cssRule of view element
	 * @param {CSSMediaRule} mediaRule media rule of view element
	 * @param {String} stateName name of state if applicable
	 **/
	self.addView = function(view, viewId, cssRule, mediaRule, stateName) {
		var viewData = {};
		viewData.name = viewId;
		viewData.rule = cssRule;
		viewData.id = viewId;
		viewData.mediaRule = mediaRule;
		viewData.stateName = stateName;

		self.views.push(viewData);
		self.addedViews.push(viewId);
		self.viewsDictionary[viewId] = viewData;
		self.mediaQueryDictionary[viewId] = cssRule;
	}

	self.hasView = function(name) {

		if (self.addedViews.indexOf(name)!=-1) {
			return true;
		}
		return false;
	}

	/**
	 * Go to view by id. Views are added in addView()
	 * @param {String} id id of view in current
	 * @param {Boolean} maintainPreviousState if true then do not hide other views
	 * @param {String} parent id of parent view
	 **/
	self.goToView = function(id, maintainPreviousState, parent) {
		var state = self.viewsDictionary[id];

		if (state) {
			if (maintainPreviousState==false || maintainPreviousState==null) {
				self.hideViews();
			}
			self.enableMediaQuery(state.rule);
			self.updateViewLabel();
			self.updateURL();
		}
		else {
			var event = new Event(self.STATE_NOT_FOUND);
			self.stateName = id;
			window.dispatchEvent(event);
		}
	}

	/**
	 * Go to the view in the event targets CSS variable
	 **/
	self.goToTargetView = function(event) {
		var button = event.currentTarget;
		var buttonComputedStyles = getComputedStyle(button);
		var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
		var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
		var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
		var targetView = self.application ? null : self.getElement(actionTargetValue);
		var targetState = targetView ? self.getStateNameByViewId(targetView.id) : null;
		var actionTargetStyles = targetView ? targetView.style : null;
		var state = self.viewsDictionary[actionTargetValue];
		
		// navigate to page
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// if view is found
		if (targetView) {

			if (self.currentOverlay) {
				self.removeOverlay(false);
			}

			if (self.showByMediaQuery) {
				var stateName = targetState;
				
				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
				return;
			}

			// add animation set in event target style declaration
			if (animation && self.supportAnimations) {
				self.crossFade(self.currentView, targetView, false, animation);
			}
			else {
				self.setViewVariables(self.currentView);
				self.hideViews();
				self.enableMediaQuery(state.rule);
				self.scaleViewIfNeeded(targetView);
				self.centerView(targetView);
				self.updateViewLabel();
				self.updateURL();
			}
		}
		else {
			var stateEvent = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(stateEvent);
		}

		event.stopImmediatePropagation();
	}

	/**
	 * Cross fade between views
	 **/
	self.crossFade = function(from, to, update, animation) {
		var targetIndex = to.parentNode
		var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
		var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

		if (from.parentNode==to.parentNode) {
			var reverse = self.getReverseAnimation(animation);
			var duration = self.getAnimationDuration(animation, true);

			// if target view is above (higher index)
			// then fade in target view 
			// and after fade in then hide previous view instantly
			if (fromIndex<toIndex) {
				self.setElementAnimation(from, null);
				self.setElementAnimation(to, null);
				self.showViewByMediaQuery(to);
				self.fadeIn(to, update, animation);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
					self.updateViewLabel();
				}, duration)
			}
			// if target view is on bottom
			// then show target view instantly 
			// and fade out current view
			else if (fromIndex>toIndex) {
				self.setElementAnimation(to, null);
				self.setElementAnimation(from, null);
				self.showViewByMediaQuery(to);
				self.fadeOut(from, update, reverse);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
				}, duration)
			}
		}
	}

	self.fadeIn = function(element, update, animation) {
		self.showViewByMediaQuery(element);

		if (update) {
			self.updateURL(element);

			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.setViewVariables(element);
				self.updateViewLabel();
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		self.setElementAnimation(element, null);
		
		element.style.animation = animation;
	}

	self.fadeOutCurrentView = function(animation, update) {
		if (self.currentView) {
			self.fadeOut(self.currentView, update, animation);
		}
		if (self.currentOverlay) {
			self.fadeOut(self.currentOverlay, update, animation);
		}
	}

	self.fadeOut = function(element, update, animation) {
		if (update) {
			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.hideView(element);
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		element.style.animationPlayState = "paused";
		element.style.animation = animation;
		element.style.animationPlayState = "running";
	}

	self.getReverseAnimation = function(animation) {
		if (animation && animation.indexOf("reverse")==-1) {
			animation += " reverse";
		}

		return animation;
	}

	/**
	 * Get duration in animation string
	 * @param {String} animation animation value
	 * @param {Boolean} inMilliseconds length in milliseconds if true
	 */
	self.getAnimationDuration = function(animation, inMilliseconds) {
		var duration = 0;
		var expression = /.+(\d\.\d)s.+/;

		if (animation && animation.match(expression)) {
			duration = parseFloat(animation.replace(expression, "$" + "1"));
			if (duration && inMilliseconds) duration = duration * 1000;
		}

		return duration;
	}

	self.setElementAnimation = function(element, animation, priority) {
		element.style.setProperty("animation", animation, "important");
	}

	self.getElement = function(id) {
		id = id ? id.trim() : id;
		var element = id ? document.getElementById(id) : null;

		return element;
	}

	self.getElementById = function(id) {
		id = id ? id.trim() : id;
		var element = id ? document.getElementById(id) : null;

		return element;
	}

	self.getElementByClass = function(className) {
		className = className ? className.trim() : className;
		var elements = document.getElementsByClassName(className);

		return elements.length ? elements[0] : null;
	}

	self.resizeHandler = function(event) {
		
		if (self.showByMediaQuery) {
			if (self.enableDeepLinking) {
				var stateName = self.getHashFragment();

				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
			}
		}
		else {
			var visibleViews = self.getVisibleViews();

			for (let index = 0; index < visibleViews.length; index++) {	
				var view = visibleViews[index];
				self.scaleViewIfNeeded(view);
			}
		}

		window.dispatchEvent(new Event(self.APPLICATION_RESIZE));
	}

	self.scaleViewIfNeeded = function(view) {

		if (self.scaleViewsOnResize) {
			if (view==null) {
				view = self.getVisibleView();
			}

			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME)=="false" ? false : true;

			if (isViewScaled) {
				self.scaleViewToFit(view, true);
			}
			else {
				self.scaleViewToActualSize(view);
			}
		}
		else if (view) {
			self.centerView(view);
		}
	}

	self.centerView = function(view) {

		if (self.scaleViewsToFit) {
			self.scaleViewToFit(view, true);
		}
		else {
			self.scaleViewToActualSize(view);  // for centering support for now
		}
	}

	self.preventDoubleClick = function(event) {
		event.stopImmediatePropagation();
	}

	self.getHashFragment = function() {
		var value = window.location.hash ? window.location.hash.replace("#", "") : "";
		return value;
	}

	self.showBlockElement = function(view) {
		view.style.display = "block";
	}

	self.hideElement = function(view) {
		view.style.display = "none";
	}

	self.showStateFunction = null;

	self.showMediaQueryViewsByState = function(state, event) {
		// browser will hide and show by media query (small, medium, large)
		// but if multiple views exists at same size user may want specific view
		// if showStateFunction is defined that is called with state fragment and user can show or hide each media matching view by returning true or false
		// if showStateFunction is not defined and state is defined and view has a defined state that matches then show that and hide other matching views
		// if no state is defined show view 
		// an viewChanging event is dispatched before views are shown or hidden that can be prevented 

		// get all matched queries
		// if state name is specified then show that view and hide other views
		// if no state name is defined then show
		var matchedViews = self.getMatchingViews();
		var matchMediaQuery = true;
		var foundViews = self.getViewsByStateName(state, matchMediaQuery);
		var showViews = [];
		var hideViews = [];

		// loop views that match media query 
		for (let index = 0; index < matchedViews.length; index++) {
			var view = matchedViews[index];
			
			// let user determine visible view
			if (self.showStateFunction!=null) {
				if (self.showStateFunction(view, state)) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// state was defined so check if view matches state
			else if (foundViews.length) {

				if (foundViews.indexOf(view)!=-1) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// if no state names are defined show view (define unused state name to exclude)
			else if (state==null || state=="") {
				showViews.push(view);
			}
		}

		if (showViews.length) {
			var viewChangingEvent = new Event(self.VIEW_CHANGING);
			viewChangingEvent.showViews = showViews;
			viewChangingEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangingEvent);

			if (viewChangingEvent.defaultPrevented==false) {
				for (var index = 0; index < hideViews.length; index++) {
					var view = hideViews[index];

					if (self.isOverlay(view)) {
						self.removeOverlay(view);
					}
					else {
						self.hideElement(view);
					}
				}

				for (var index = 0; index < showViews.length; index++) {
					var view = showViews[index];

					if (index==showViews.length-1) {
						self.clearDisplay(view);
						self.setViewOptions(view);
						self.setViewVariables(view);
						self.centerView(view);
						self.updateURLState(view, state);
					}
				}
			}

			var viewChangeEvent = new Event(self.VIEW_CHANGE);
			viewChangeEvent.showViews = showViews;
			viewChangeEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangeEvent);
		}
		
	}

	self.clearDisplay = function(view) {
		view.style.setProperty("display", null);
	}

	self.hashChangeHandler = function(event) {
		var fragment = self.getHashFragment();
		var view = self.getViewById(fragment);

		if (self.showByMediaQuery) {
			var stateName = fragment;

			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}
			self.showMediaQueryViewsByState(stateName);
		}
		else {
			if (view) {
				self.hideViews();
				self.showView(view);
				self.setViewVariables(view);
				self.updateViewLabel();
				
				window.dispatchEvent(new Event(self.VIEW_CHANGE));
			}
			else {
				window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
			}
		}
	}

	self.popStateHandler = function(event) {
		var state = event.state;
		var fragment = state ? state.name : window.location.hash;
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.updateViewLabel();
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.doubleClickHandler = function(event) {
		var view = self.getVisibleView();
		var scaleValue = view ? self.getViewScaleValue(view) : 1;
		var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
		var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
		var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
		var scaleToFitType = self.scaleToFitType;

		// Three scenarios
		// - scale to fit on double click
		// - set scale to actual size on double click
		// - switch between scale to fit and actual page size

		if (scaleToFitType=="width") {
			scaleNeededToFit = scaleNeededToFitWidth;
		}
		else if (scaleToFitType=="height") {
			scaleNeededToFit = scaleNeededToFitHeight;
		}

		// if scale and actual size enabled then switch between
		if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
			var isScaled = false;
			
			// if scale is not 1 then view needs scaling
			if (scaleNeededToFit!=1) {

				// if current scale is at 1 it is at actual size
				// scale it to fit
				if (scaleValue==1) {
					self.scaleViewToFit(view);
					isScaled = true;
				}
				else {
					// scale is not at 1 so switch to actual size
					self.scaleViewToActualSize(view);
					isScaled = false;
				}
			}
			else {
				// view is smaller than viewport 
				// so scale to fit() is scale actual size
				// actual size and scaled size are the same
				// but call scale to fit to retain centering
				self.scaleViewToFit(view);
				isScaled = false;
			}
			
			view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
			isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
		}
		else if (self.scaleToFitOnDoubleClick) {
			self.scaleViewToFit(view);
		}
		else if (self.actualSizeOnDoubleClick) {
			self.scaleViewToActualSize(view);
		}

	}

	self.scaleViewToFit = function(view) {
		return self.setViewScaleValue(view, true);
	}

	self.scaleViewToActualSize = function(view) {
		self.setViewScaleValue(view, false, 1);
	}

	self.onloadHandler = function(event) {
		self.initialize();
	}

	self.setElementHTML = function(id, value) {
		var element = self.getElement(id);
		element.innerHTML = value;
	}

	self.getStackArray = function(error) {
		var value = "";
		
		if (error==null) {
		  try {
			 error = new Error("Stack");
		  }
		  catch (e) {
			 
		  }
		}
		
		if ("stack" in error) {
		  value = error.stack;
		  var methods = value.split(/\n/g);
	 
		  var newArray = methods ? methods.map(function (value, index, array) {
			 value = value.replace(/\@.*/,"");
			 return value;
		  }) : null;
	 
		  if (newArray && newArray[0].includes("getStackTrace")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0].includes("getStackArray")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="") {
			 newArray.shift();
		  }
	 
			return newArray;
		}
		
		return null;
	}

	self.log = function(value) {
		console.log.apply(this, [value]);
	}
	
	// initialize on load
	// sometimes the body size is 0 so we call this now and again later
	window.addEventListener("load", self.onloadHandler);
	window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
}

window.application = new Application();
</script> -->
</head>

<body>
	<div id="Web_1920__1">
		<!-- <svg class="Rectangle_1_l">
			<linearGradient id="Rectangle_1_l" spreadMethod="pad" x1="0.688" x2="1.099" y1="0.483" y2="1.328">
				<stop offset="0" stop-color="#f3eadb" stop-opacity="1"></stop>
				<stop offset="1" stop-color="#f1d5bd" stop-opacity="1"></stop>
			</linearGradient>
		
		</svg> -->
		<div class="col">
			<div id="History">
				<span>History</span>
			</div>
			<div id="P_K_10">
				<span>P K 10</span>
			</div>
			<div id="Instant__Games">
				<span>Instant <br />Games</span>
			</div>
			<div id="n_D">
				<span>5D</span>
			</div>
			<div id="Mark_6">
				<span>Mark 6</span>
			</div>
			<div id="n_1_x_5">
				<span>11 x 5</span>
			</div>
			<div id="Fast_3">
				<span>Fast 3</span>
			</div>
			<div id="n_D_hf">
				<span>3D</span>
			</div>
			<div id="Happy_8">
				<span>Happy 8</span>
			</div>
			<div id="n__Color_Ball">
				<span>2 Color Ball</span>
			</div>
			<div id="n_D_hi">
				<span>4D</span>
			</div>
			<div id="North_Vietlott">
				<span>North<br />Vietlott</span>
			</div>
			<div id="Central_Vietlott">
				<span>Central<br />Vietlott</span>
			</div>
			<div id="South_Vietlott">
				<span>South<br />Vietlott</span>
			</div>
			<div id="Thailott">
				<span>Thailott</span>
			</div>
			<div id="LF_lotto">
				<span>LF lotto</span>
			</div>
		</div>
		<div class="col">

		</div>
		<div class="row">
			<ul class="quick-settings-box simple-hover">
				<li>
					<i class="fas fa-arrow-circle-left" aria-hidden="true"></i>
					<span>Back to lobby</span>
				</li>
				<li>
					<i class="fas fa-volume-up"></i>
					<span>Call of Heros</span>
				</li>
				<li>
					<i class="fas fa-user-circle"></i>
					<span>kzing00kzd9527</span>
				</li>
				<li>
					<span>Bal.</span>
					<i class="fa-solid fa-yen-sign"></i>
					<span>38.000</span>
					<span style="display: none"><i class="fa-solid fa-asterisk"></i><i
							class="fa-solid fa-asterisk"></i><i class="fa-solid fa-asterisk"></i>
					</span>
					<i class="fa-solid fa-eye"></i>
					<i class="fas fa-eye-slash" style="display: none"></i>
				</li>

				<li>
					<i class="fas fa-calendar-alt"></i>
					<span>Record</span>
				</li>
				<li>
					<i class="fa-solid fa-user-gear"></i>
					<span>Setting</span>
				</li>
				<li>
					<i class="fas fa-language"></i>
					<span>English</span>
				</li>
			</ul>
		</div>

		<div class="row status-box">
			<div id="n_02212211287__">
				<span>202212211287 </span><span style="color: rgba(112, 112, 112, 1)"> 期・截止时间</span>
			</div>

			<div class="timer-box">
				<div class="hrs">
					<span>HRS</span>
					<span>00</span>
				</div>
				<div class="hrs">
					<span>MIN</span>
					<span>00</span>
				</div>
				<div class="hrs">
					<span>SEC</span>
					<span>00</span>
				</div>
			</div>

			<div class="bet-id">
				<span>NO:</span><span style="color: rgba(207, 121, 119, 1)">20221108-246</span>
			</div>
			<div class="for-sale">
				<span>For sale</span>
			</div>
			<div class="Rectangle_93">
				<div class="Rectangle_37" style="height: 24px; width: 75%"></div>
			</div>

			<div class="draw-num-box" style="overflow: hidden;">
				<div class="balls-box" style="transition: all 50s ease-out 0s;">
					<div><img class="ball" src="balls/0.png" alt="" /></div>
					<div><img class="ball" src="balls/1.png" alt="" /></div>
					<div><img class="ball" src="balls/2.png" alt="" /></div>
					<div><img class="ball" src="balls/3.png" alt="" /></div>
					<div><img class="ball" src="balls/4.png" alt="" /></div>
					<!-- <div><img class="ball" src="balls/5.png" alt="" /></div>
					<div><img class="ball" src="balls/6.png" alt="" /></div>
					<div><img class="ball" src="balls/7.png" alt="" /></div>
					<div><img class="ball" src="balls/8.png" alt="" /></div>
					<div><img class="ball" src="balls/9.png" alt="" /></div> -->
				</div>

			</div>

		</div>



		<div id="Group_2">
			<!-- <svg class="Rectangle_4">
				<rect id="Rectangle_4" rx="62.5" ry="62.5" x="0" y="0" width="2660" height="125"></rect>
			</svg> -->
			<!-- <svg class="Rectangle_5">
				<rect id="Rectangle_5" rx="0" ry="0" x="0" y="0" width="2660" height="1515"></rect>
			</svg> -->

			<div class="work-area outline">
				<div class="work-area" style="border: px solid black;">
					<div class="game-group-nav-box">
						<ul class="simple-hover">
							<li class="active" data-points-to="all5">All 5</li>
							<li data-points-to="all4">All 4</li>
							<li data-points-to="first3">First 3</li>
							<li data-points-to="mid3">Mid 3</li>
							<li data-points-to="last3">Last 3</li>
							<li>First 2</li>
							<li>Last 2</li>
							<li>Fixed place</li>
							<li>Any Place</li>
							<li>B/S/O/E</li>
							<li>Fun</li>
							<li>Pick 2</li>
							<li>Pick 3</li>
							<li>Pick 4</li>
						</ul>
					</div>
					<div class="game-nav-box">
						<label for="">Straight:</label>
						<div class="straight">
							<div class="active-svg nav-item" data-points-to="a5-joint">
								<svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
									<path class="path-outline"
										d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
									</path>
								</svg>
								<svg class="path-fill-box" viewBox="1566.5 8196 354 52">
									<path class="path-fill"
										d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
									</path>
								</svg>
								<div class="nav-text">
									<span class="text">All 5 straight(Joint)</span>
								</div>
							</div>
							<div class="nav-item" data-points-to="a5-manual">
								<svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
									<path class="path-outline"
										d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
									</path>
								</svg>
								<svg class="path-fill-box" viewBox="1566.5 8196 354 52">
									<path class="path-fill"
										d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
									</path>
								</svg>
								<div class="nav-text">
									<span class="text">All 5 straight(manual)</span>
								</div>
							</div>
							<div class="nav-item" data-points-to="a5-combo">
								<svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
									<path class="path-outline"
										d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
									</path>
								</svg>
								<svg class="path-fill-box" viewBox="1566.5 8196 354 52">
									<path class="path-fill"
										d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
									</path>
								</svg>
								<div class="nav-text">
									<span class="text">All 5 straight(combo)</span>
								</div>
							</div>
						</div>
						<label for="">Group:</label>
						<div class="group">
							<div class="nav-item" data-points-to="a5-g120">
								<svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
									<path class="path-outline"
										d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
									</path>
								</svg>
								<svg class="path-fill-box" viewBox="1566.5 8196 354 52">
									<path class="path-fill"
										d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
									</path>
								</svg>
								<div class="nav-text">
									<span class="text">All 5 Group 120</span>
								</div>
							</div>
							<div class="nav-item" data-points-to="a5-g60">
								<svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
									<path class="path-outline"
										d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
									</path>
								</svg>
								<svg class="path-fill-box" viewBox="1566.5 8196 354 52">
									<path class="path-fill"
										d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
									</path>
								</svg>
								<div class="nav-text">
									<span class="text">All 5 Group 60</span>
								</div>
							</div>
							<div class="nav-item" data-points-to="a5-g30">
								<svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
									<path class="path-outline"
										d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
									</path>
								</svg>
								<svg class="path-fill-box" viewBox="1566.5 8196 354 52">
									<path class="path-fill"
										d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
									</path>
								</svg>
								<div class="nav-text">
									<span class="text">All 5 Group 30</span>
								</div>
							</div>
							<br>
							<div class="nav-item" data-points-to="a5-g20">
								<svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
									<path class="path-outline"
										d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
									</path>
								</svg>
								<svg class="path-fill-box" viewBox="1566.5 8196 354 52">
									<path class="path-fill"
										d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
									</path>
								</svg>
								<div class="nav-text">
									<span class="text">All 5 Group 20</span>
								</div>
							</div>
						</div>
						<div class="group">

							<div class="nav-item" data-points-to="a5-g10">
								<svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
									<path class="path-outline"
										d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
									</path>
								</svg>
								<svg class="path-fill-box" viewBox="1566.5 8196 354 52">
									<path class="path-fill"
										d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
									</path>
								</svg>
								<div class="nav-text">
									<span class="text">All 5 Group 10</span>
								</div>
							</div>
							<div class="nav-item" data-points-to="a5-g5">
								<svg class="path-outline-box" viewBox="1082.685 756.5 371.083 56">
									<path class="path-outline"
										d="M 1114.059326171875 756.5 L 1432.5771484375 756.5 L 1453.767822265625 780.3448486328125 L 1432.676025390625 812.5 L 1098.060546875 812.5 L 1082.6845703125 792.1842041015625 L 1114.059326171875 756.5 Z M 1431.610595703125 758.7105712890625 L 1424.2998046875 758.7105712890625 L 1114.059326171875 758.7105712890625 L 1098.060546875 810.1053466796875 L 1431.610595703125 810.1053466796875 L 1451.019287109375 780.5499267578125 L 1451.019287109375 780.3448486328125 L 1431.610595703125 758.7105712890625 Z">
									</path>
								</svg>
								<svg class="path-fill-box" viewBox="1566.5 8196 354 52">
									<path class="path-fill"
										d="M 1582.5 8196 L 1566.5 8248 L 1899.5 8248 L 1920.5 8218 L 1899.5 8196 L 1582.5 8196 Z">
									</path>
								</svg>
								<div class="nav-text">
									<span class="text">All 5 Group 5</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="background-color: ;">


						<div class="col active-game-box">
							<span>First 3 Straight (Joint)</span>
							<span>Prize: <span class="prize-value" style="color: red">1965.15</span></span>
						</div>

						<div class="solo-play">
							<button id="how-to-play">How to play</button>
							<button id="What_is_solo">What is solo?</button>
						</div>


						<div class="hotCold-lack col">
							<div class="hotCold-box">
								<input class="hotCold btn-c" type="radio" name="hotCold-lack" id="hotCold" /><label
									for="hotCold">Hot/Cold</label>
							</div>
							<div class="lack-box">
								<input class="lack btn-c" type="radio" name="hotCold-lack" id="lack" /><label
									for="lack">Lack</label>
							</div>
						</div>
					</div>
					<div class="num-btn-controls game-interface">
						<div class=" row1">
							<div class="col num-group row1">
							<label for="">one pair</label>
								<?php
								for ($x = 0; $x < 10; $x++) {
								?>
									<button class="btn-c num hover-shape row1 btn-circle"><span><?= $x ?></span></button><?php
								}?>
							</div>
							<div class="col num-controls row1">
								<button id="All" class="btn-c hover-shape btn-rec all-btn">All</button>
								<button id="Big" class="btn-c hover-shape btn-rec big-btn">Big</button>
								<button id="Small" class="btn-c hover-shape btn-rec small-btn">
									Small
								</button>
								<button id="Odd" class="btn-c hover-shape btn-rec odd-btn">Odd</button>
								<button id="Even" class="btn-c hover-shape btn-rec even-btn">
									Even
								</button>
								<button id="Clear" class="btn-c hover-shape btn-rec clear-btn">
									Clear
								</button>
							</div>
						</div>

						<div class="row2">
							<div class="col num-group row2">
								<label for="">four of a kind</label>
								<?php
								for ($x = 0; $x < 10; $x++) {
								?>
									<button class="btn-c num hover-shape row2 btn-circle"><span><?= $x ?></span></button><?php
								}?>
							</div>


							<div class="col num-controls row2">
								<button id="All" class="btn-c hover-shape btn-rec all-btn">All</button>
								<button id="Big" class="btn-c hover-shape btn-rec big-btn">Big</button>
								<button id="Small" class="btn-c hover-shape btn-rec small-btn">
									Small
								</button>
								<button id="Odd" class="btn-c hover-shape btn-rec odd-btn">Odd</button>
								<button id="Even" class="btn-c hover-shape btn-rec even-btn">
									Even
								</button>
								<button id="Clear" class="btn-c hover-shape btn-rec clear-btn">
									Clear
								</button>
							</div>
						</div>
					</div>
					<div class="game-interface a5_manual">
					<textarea name="" placeholder="Enter your bet manually here&#10;&#10;Example is as below. Separate your bet with semi colon (;)&#10;&#10;0,1,2,3,4;   0,4,5,6,2;   0,2,5,6,1;   0,1,3,4,2;"></textarea>
					</div>

					<div class="row">
						<div class="col period-bonus-box">
							<div class="period-box">
								<label for="">Period</label>
								<select class="period" name="">
									<option value="20221221413">20221221413</option>
									<option value="20221221414">20221221414</option>
									<option value="20221221415">20221221415</option>
								</select>
							</div>

							<div class="bonus-box">
								<label for="">Bonus</label>
								<select class="bonus" name="">
									<option value="0%">1639.999-0%</option>
									<option value="13.5%">1414.999-13.5%</option>
								</select>
							</div>
						</div>

						<div class="selections-box">
							<div class="unit-amt-select-box">
								<label for="">Unit</label>
								<div class="unit-amt-select-values">
									<button class="btn-c hover-shape unit-amt-select" value="2">
										2
									</button>
									<button class="btn-c hover-shape unit-amt-select" value="1">
										1
									</button>
									<button class="btn-c hover-shape unit-amt-select" value="0.2">
										0.2
									</button>
									<button class="btn-c hover-shape unit-amt-select" value="0.1">
										0.1
									</button>
									<button class="btn-c hover-shape unit-amt-select" value="0.02">
										0.02
									</button>
									<button class="btn-c hover-shape unit-amt-select" value="0.01">
										0.01
									</button>
									<button class="btn-c hover-shape unit-amt-select" value="0.002">
										0.002
									</button>
									<button class="btn-c hover-shape unit-amt-select" value="0.001">
										0.001
									</button>
								</div>
							</div>
							<div class="multiplier-select-box">
								<label for="">Multiplier</label>
								<div class="multiplier-select-values">
									<button class="btn-c hover-shape multiplier-select" value="1">
										x1
									</button>
									<button class="btn-c hover-shape multiplier-select" value="5">
										x5
									</button>
									<button class="btn-c hover-shape multiplier-select" value="10">
										x10
									</button>
									<button class="btn-c hover-shape multiplier-select" value="20">
										x20
									</button>
									<button class="btn-c hover-shape multiplier-select" value="30">
										x30
									</button>
									<button class="btn-c hover-shape multiplier-select" value="40">
										x40
									</button>
									<button class="btn-c hover-shape multiplier-select" value="50">
										x50
									</button>
									<button class="btn-c hover-shape multiplier-select" value="100">
										x100
									</button>
								</div>
							</div>

							<div class="model-select-box">
								<label for="">Model</label>
								<div class="model-select-values">
									<button class="btn-c hover-shape model-select" value="1/4">
										1/4
									</button>
									<button class="btn-c hover-shape model-select" value="1/3">
										1/3
									</button>
									<button class="btn-c hover-shape model-select" value="1/2">
										1/4
									</button>
									<button class="btn-c hover-shape model-select" value="1">
										All in
									</button>
								</div>
								<div class="bet-info">
							<span>selected <span class="total-bets">0</span> note, total
								<span class="actual-amt">0</span> Yuan profit
								<span class="profit">0</span> Yuan</span>
						</div>
							</div>
						</div>

						

						<div class="multiplier-bet-box">
							<div class="multiplier-input-box">
								<button type="button" class="minus">-</button>
								<input class="multiplier-input" type="text" name="" placeholder="multiplier" />
								<button type="button" class="plus">+</button>
							</div>

							<div class="bet-amt-box">
								<input class="bet-amt" type="text" name="" placeholder="Enter bet amount" />
							</div>
						</div>
					</div>

					<div class="row cart-track-bet" id="cart-track-bet">
						<div id="Group_3" class="col track">
							<svg class="Path_3" viewBox="2771.25 1959.5 314.75 76.5">
								<path id="Path_3" class="text"
									d="M 2824 1959.5 L 2805.5 1964.75 L 2783.75 1990 L 2771.25 2019.75 L 2774.25 2024 L 2825 2036 L 3033.5 2036 L 3052.5 2030.75 L 3074.25 2005.75 L 3086 1976 L 3082.5 1971.75 L 3033.5 1960.75 L 2824 1959.5 Z">
								</path>
							</svg>
							<svg class="Path_3_h" viewBox="2581.089 1959.5 68.033 77">
								<path id="Path_3_h"
									d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
								</path>
							</svg>
							<svg class="Path_3_ia" viewBox="2581.089 1959.5 68.033 77">
								<path id="Path_3_ia"
									d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
								</path>
							</svg>
							<div id="Track">
								<span class="text">Track</span>
							</div>
						</div>
						<div id="Group_5" class="col cart">
							<svg class="Path_3_ib" viewBox="2771.25 1959.5 314.75 76.5">
								<path id="Path_3_ib"
									d="M 2824 1959.5 L 2805.5 1964.75 L 2783.75 1990 L 2771.25 2019.75 L 2774.25 2024 L 2825 2036 L 3033.5 2036 L 3052.5 2030.75 L 3074.25 2005.75 L 3086 1976 L 3082.5 1971.75 L 3033.5 1960.75 L 2824 1959.5 Z">
								</path>
							</svg>
							<svg class="Path_3_ic" viewBox="2581.089 1959.5 68.033 77">
								<path id="Path_3_ic"
									d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
								</path>
							</svg>
							<svg class="Path_3_id" viewBox="2581.089 1959.5 68.033 77">
								<path id="Path_3_id"
									d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
								</path>
							</svg>
							<div id="Add_to_cart">
								<span class="text">Add to cart</span>
							</div>
						</div>
						<div id="Group_4" class="col bet-now">
							<svg class="Path_4 path" viewBox="2771.25 1959.5 314.75 76.5">
								<path id="Path_4"
									d="M 2824 1959.5 L 2805.5 1964.75 L 2783.75 1990 L 2771.25 2019.75 L 2774.25 2024 L 2825 2036 L 3033.5 2036 L 3052.5 2030.75 L 3074.25 2005.75 L 3086 1976 L 3082.5 1971.75 L 3033.5 1960.75 L 2824 1959.5 Z">
								</path>
							</svg>
							<svg class="Path_3_ig" viewBox="2581.089 1959.5 68.033 77">
								<path id="Path_3_ig"
									d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
								</path>
							</svg>
							<svg class="Path_3_ih" viewBox="2581.089 1959.5 68.033 77">
								<path id="Path_3_ih" class="path"
									d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.485107421875 L 2629.2763671875 1965.4462890625 L 2607.801513671875 1990.576416015625 L 2595.576416015625 2019.91650390625 L 2598.399169921875 2023.390625 L 2603.11572265625 2024.513549804688 L 2649.1162109375 2035.513671875 L 2649 2036.5 L 2607.761962890625 2036.5 L 2607.612060546875 2036.315307617188 L 2597.837158203125 2024.28466796875 L 2581.088623046875 2020.296997070312 L 2581.619873046875 2019.675170898438 L 2606.93896484375 1990.046508789062 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.5 L 2620.333251953125 1960.5 L 2609.05322265625 1987.572387695312 L 2628.7236328125 1964.5537109375 L 2628.878662109375 1964.514892578125 L 2644.9384765625 1960.5 Z M 2596.801513671875 2023.01025390625 L 2594.423583984375 2020.08349609375 L 2594.53857421875 2019.807739257812 L 2605.687255859375 1993.050415039062 L 2582.911376953125 2019.703002929688 L 2596.801513671875 2023.01025390625 Z M 2644.75927734375 2035.5 L 2602.8837890625 2025.486328125 L 2599.4345703125 2024.6650390625 L 2608.238037109375 2035.5 L 2644.75927734375 2035.5 Z">
								</path>
							</svg>
							<div id="Bet_now">
								<span class="text">Bet now</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="line"></div>

			<div class="row cart-area outline">
				<div class="row cart-area-head">
					<div class="history-nav-box">
						<ul class="history-nav simple-hover">
							<li>number<br>basket</li>
							<li>Recent<br>bets</li>
							<li>Recently chasing<br>number</li>
							<li>Recent<br>recharge</li>
							<li>Recent<br>withdrawals</li>
							<li>Recent<br>withdrawals</li>
							<li>Recent profit and<br>loss</li>
							<li>plan<br>record</li>
							<li>Details</li>
							<li>All betting</li>
						</ul>
					</div>
					<div class="row cart-info-box">
						<ul class="cart-info-head">
							<li>Betting content</li>
							<li>unit</li>
							<li>Number of bets</li>
							<li>total amount</li>
							<li>operate</li>
						</ul>
					</div>
				</div>
				<div class="row cart-area">

				</div>
			</div>
		</div>



		<svg class="Rectangle_68">
			<rect id="Rectangle_68" rx="0" ry="0" x="0" y="0" width="273" height="1955"></rect>
		</svg>
		<svg class="Path_1_gq" viewBox="0 0 3356 3">
			<path id="Path_1_gq" d="M 0 0 L 3356 0"></path>
		</svg>
		<svg class="Path_8" viewBox="0 0 3356 3">
			<path id="Path_8" d="M 0 0 L 3356 0"></path>
		</svg>




		<svg class="Line_17" viewBox="0 0 2722 3">
			<path id="Line_17" d="M 0 0 L 2722 0"></path>
		</svg>


		<div id="Group_8">
			<svg class="Rectangle_83">
				<rect id="Rectangle_83" rx="33" ry="33" x="0" y="0" width="298" height="136"></rect>
			</svg>
			<svg class="Rectangle_17">
				<rect id="Rectangle_17" rx="0" ry="0" x="0" y="0" width="1194" height="3546"></rect>
			</svg>
			<svg class="Rectangle_82">
				<rect id="Rectangle_82" rx="0" ry="0" x="0" y="0" width="1194" height="142"></rect>
			</svg>
			<svg class="Line_18" viewBox="0 0 3 142">
				<path id="Line_18" d="M 0 0 L 0 142"></path>
			</svg>
			<svg class="Line_19" viewBox="0 0 3 142">
				<path id="Line_19" d="M 0 0 L 0 142"></path>
			</svg>
			<svg class="Line_20" viewBox="0 0 3 142">
				<path id="Line_20" d="M 0 0 L 0 142"></path>
			</svg>
			<div id="Recent_draw">
				<span>Recent draw</span>
			</div>
			<div id="Mark_No_">
				<span>Mark No. </span>
			</div>
			<div id="Fill_chart">
				<span>Fill chart</span>
			</div>
			<div id="Dragon">
				<span>Dragon</span>
			</div>
			<div id="Trend">
				<span>Trend</span>
			</div>
			<svg class="Line_21" viewBox="0 0 1194 3">
				<path id="Line_21" d="M 0 0 L 1194 0"></path>
			</svg>
			<div id="Recent_bet">
				<span>Recent bet</span>
			</div>
		</div>
		<img id="circle_ji" src="circle_ji.png" srcset="circle_ji.png 1x, circle_ji@2x.png 2x" />

		<img id="circle_jj" src="circle_jj.png" srcset="circle_jj.png 1x, circle_jj@2x.png 2x" />

		<img id="circle_jk" src="circle_jk.png" srcset="circle_jk.png 1x, circle_jk@2x.png 2x" />

		<img id="circle_jl" src="circle_jl.png" srcset="circle_jl.png 1x, circle_jl@2x.png 2x" />

		<img id="circle_jm" src="circle_jm.png" srcset="circle_jm.png 1x, circle_jm@2x.png 2x" />

		<img id="circle_jn" src="circle_jn.png" srcset="circle_jn.png 1x, circle_jn@2x.png 2x" />

		<img id="circle_jo" src="circle_jo.png" srcset="circle_jo.png 1x, circle_jo@2x.png 2x" />

		<img id="circle_jp" src="circle_jp.png" srcset="circle_jp.png 1x, circle_jp@2x.png 2x" />

		<img id="circle_jq" src="circle_jq.png" srcset="circle_jq.png 1x, circle_jq@2x.png 2x" />

		<img id="circle_jr" src="circle_jr.png" srcset="circle_jr.png 1x, circle_jr@2x.png 2x" />

		<img id="circle_js" src="circle_js.png" srcset="circle_js.png 1x, circle_js@2x.png 2x" />

		<img id="circle_jt" src="circle_jt.png" srcset="circle_jt.png 1x, circle_jt@2x.png 2x" />

		<img id="circle_ju" src="circle_ju.png" srcset="circle_ju.png 1x, circle_ju@2x.png 2x" />

		<img id="circle_jv" src="circle_jv.png" srcset="circle_jv.png 1x, circle_jv@2x.png 2x" />

		<img id="circle_jw" src="circle_jw.png" srcset="circle_jw.png 1x, circle_jw@2x.png 2x" />

		<img id="circle_jx" src="circle_jx.png" srcset="circle_jx.png 1x, circle_jx@2x.png 2x" />

		<img id="circle_jy" src="circle_jy.png" srcset="circle_jy.png 1x, circle_jy@2x.png 2x" />

		<img id="circle_jz" src="circle_jz.png" srcset="circle_jz.png 1x, circle_jz@2x.png 2x" />

		<img id="circle_j" src="circle_j.png" srcset="circle_j.png 1x, circle_j@2x.png 2x" />

		<img id="circle_ka" src="circle_ka.png" srcset="circle_ka.png 1x, circle_ka@2x.png 2x" />

		<img id="circle_kb" src="circle_kb.png" srcset="circle_kb.png 1x, circle_kb@2x.png 2x" />

		<img id="circle_kc" src="circle_kc.png" srcset="circle_kc.png 1x, circle_kc@2x.png 2x" />

		<img id="circle_kd" src="circle_kd.png" srcset="circle_kd.png 1x, circle_kd@2x.png 2x" />

		<img id="circle_ke" src="circle_ke.png" srcset="circle_ke.png 1x, circle_ke@2x.png 2x" />

		<img id="circle_kf" src="circle_kf.png" srcset="circle_kf.png 1x, circle_kf@2x.png 2x" />

		<img id="circle_kg" src="circle_kg.png" srcset="circle_kg.png 1x, circle_kg@2x.png 2x" />

		<img id="circle_kh" src="circle_kh.png" srcset="circle_kh.png 1x, circle_kh@2x.png 2x" />

		<img id="circle_ki" src="circle_ki.png" srcset="circle_ki.png 1x, circle_ki@2x.png 2x" />

		<img id="circle_kj" src="circle_kj.png" srcset="circle_kj.png 1x, circle_kj@2x.png 2x" />

		<img id="circle_kk" src="circle_kk.png" srcset="circle_kk.png 1x, circle_kk@2x.png 2x" />

		<img id="circle_kl" src="circle_kl.png" srcset="circle_kl.png 1x, circle_kl@2x.png 2x" />

		<img id="circle_km" src="circle_km.png" srcset="circle_km.png 1x, circle_km@2x.png 2x" />

		<img id="circle_kn" src="circle_kn.png" srcset="circle_kn.png 1x, circle_kn@2x.png 2x" />

		<img id="circle_ko" src="circle_ko.png" srcset="circle_ko.png 1x, circle_ko@2x.png 2x" />

		<img id="circle_kp" src="circle_kp.png" srcset="circle_kp.png 1x, circle_kp@2x.png 2x" />

		<img id="circle_kq" src="circle_kq.png" srcset="circle_kq.png 1x, circle_kq@2x.png 2x" />

		<img id="circle_kr" src="circle_kr.png" srcset="circle_kr.png 1x, circle_kr@2x.png 2x" />

		<img id="circle_ks" src="circle_ks.png" srcset="circle_ks.png 1x, circle_ks@2x.png 2x" />

		<img id="circle_kt" src="circle_kt.png" srcset="circle_kt.png 1x, circle_kt@2x.png 2x" />

		<img id="circle_ku" src="circle_ku.png" srcset="circle_ku.png 1x, circle_ku@2x.png 2x" />

		<img id="circle_kv" src="circle_kv.png" srcset="circle_kv.png 1x, circle_kv@2x.png 2x" />

		<img id="circle_kw" src="circle_kw.png" srcset="circle_kw.png 1x, circle_kw@2x.png 2x" />

		<img id="circle_kx" src="circle_kx.png" srcset="circle_kx.png 1x, circle_kx@2x.png 2x" />

		<img id="circle_ky" src="circle_ky.png" srcset="circle_ky.png 1x, circle_ky@2x.png 2x" />

		<img id="circle_kz" src="circle_kz.png" srcset="circle_kz.png 1x, circle_kz@2x.png 2x" />

		<img id="circle_k" src="circle_k.png" srcset="circle_k.png 1x, circle_k@2x.png 2x" />

		<img id="circle_la" src="circle_la.png" srcset="circle_la.png 1x, circle_la@2x.png 2x" />

		<img id="circle_lb" src="circle_lb.png" srcset="circle_lb.png 1x, circle_lb@2x.png 2x" />

		<img id="circle_lc" src="circle_lc.png" srcset="circle_lc.png 1x, circle_lc@2x.png 2x" />

		<img id="circle_ld" src="circle_ld.png" srcset="circle_ld.png 1x, circle_ld@2x.png 2x" />

		<img id="circle_le" src="circle_le.png" srcset="circle_le.png 1x, circle_le@2x.png 2x" />

		<img id="circle_lf" src="circle_lf.png" srcset="circle_lf.png 1x, circle_lf@2x.png 2x" />

		<img id="circle_lg" src="circle_lg.png" srcset="circle_lg.png 1x, circle_lg@2x.png 2x" />

		<img id="circle_lh" src="circle_lh.png" srcset="circle_lh.png 1x, circle_lh@2x.png 2x" />

		<img id="circle_li" src="circle_li.png" srcset="circle_li.png 1x, circle_li@2x.png 2x" />

		<img id="circle_lj" src="circle_lj.png" srcset="circle_lj.png 1x, circle_lj@2x.png 2x" />

		<img id="circle_lk" src="circle_lk.png" srcset="circle_lk.png 1x, circle_lk@2x.png 2x" />

		<img id="circle_ll" src="circle_ll.png" srcset="circle_ll.png 1x, circle_ll@2x.png 2x" />

		<img id="circle_lm" src="circle_lm.png" srcset="circle_lm.png 1x, circle_lm@2x.png 2x" />

		<img id="circle_ln" src="circle_ln.png" srcset="circle_ln.png 1x, circle_ln@2x.png 2x" />

		<img id="circle_lo" src="circle_lo.png" srcset="circle_lo.png 1x, circle_lo@2x.png 2x" />

		<img id="circle_lp" src="circle_lp.png" srcset="circle_lp.png 1x, circle_lp@2x.png 2x" />

		<img id="circle_lq" src="circle_lq.png" srcset="circle_lq.png 1x, circle_lq@2x.png 2x" />

		<img id="circle_lr" src="circle_lr.png" srcset="circle_lr.png 1x, circle_lr@2x.png 2x" />

		<img id="circle_ls" src="circle_ls.png" srcset="circle_ls.png 1x, circle_ls@2x.png 2x" />

		<img id="circle_lt" src="circle_lt.png" srcset="circle_lt.png 1x, circle_lt@2x.png 2x" />

		<img id="circle_lu" src="circle_lu.png" srcset="circle_lu.png 1x, circle_lu@2x.png 2x" />

		<img id="circle_lv" src="circle_lv.png" srcset="circle_lv.png 1x, circle_lv@2x.png 2x" />

		<img id="circle_lw" src="circle_lw.png" srcset="circle_lw.png 1x, circle_lw@2x.png 2x" />

		<img id="circle_lx" src="circle_lx.png" srcset="circle_lx.png 1x, circle_lx@2x.png 2x" />

		<img id="circle_ly" src="circle_ly.png" srcset="circle_ly.png 1x, circle_ly@2x.png 2x" />

		<img id="circle_lz" src="circle_lz.png" srcset="circle_lz.png 1x, circle_lz@2x.png 2x" />

		<img id="circle_l" src="circle_l.png" srcset="circle_l.png 1x, circle_l@2x.png 2x" />

		<img id="circle_ma" src="circle_ma.png" srcset="circle_ma.png 1x, circle_ma@2x.png 2x" />

		<img id="circle_mb" src="circle_mb.png" srcset="circle_mb.png 1x, circle_mb@2x.png 2x" />

		<img id="circle_mc" src="circle_mc.png" srcset="circle_mc.png 1x, circle_mc@2x.png 2x" />

		<img id="circle_md" src="circle_md.png" srcset="circle_md.png 1x, circle_md@2x.png 2x" />

		<img id="circle_me" src="circle_me.png" srcset="circle_me.png 1x, circle_me@2x.png 2x" />

		<img id="circle_mf" src="circle_mf.png" srcset="circle_mf.png 1x, circle_mf@2x.png 2x" />

		<img id="circle_mg" src="circle_mg.png" srcset="circle_mg.png 1x, circle_mg@2x.png 2x" />

		<svg class="Path_6" viewBox="0 0 1190.333 78">
			<path id="Path_6" d="M 0 0 L 1190.33349609375 0 L 1190.33349609375 78 L 0 78 L 0 0 Z"></path>
		</svg>
		<svg class="Line_22" viewBox="0 0 1 78">
			<path id="Line_22" d="M 0 0 L 0 78"></path>
		</svg>
		<svg class="Line_23" viewBox="0 0 1 78">
			<path id="Line_23" d="M 0 0 L 0 78"></path>
		</svg>
		<svg class="Line_24" viewBox="0 0 606 1">
			<path id="Line_24" d="M 0 0 L 606 0"></path>
		</svg>
		<svg class="Line_25" viewBox="0 0 1 38">
			<path id="Line_25" d="M 0 0 L 0 38"></path>
		</svg>
		<svg class="Line_26" viewBox="0 0 1 38">
			<path id="Line_26" d="M 0 0 L 0 38"></path>
		</svg>
		<svg class="Line_27" viewBox="0 0 1 38">
			<path id="Line_27" d="M 0 0 L 0 38"></path>
		</svg>
		<svg class="Line_28" viewBox="0 0 1 38">
			<path id="Line_28" d="M 0 0 L 0 38"></path>
		</svg>
		<svg class="Line_29" viewBox="0 0 1 38">
			<path id="Line_29" d="M 0 0 L 0 38"></path>
		</svg>
		<div id="Draw">
			<span>Draw</span>
		</div>
		<div id="n_1217">
			<span>21217</span>
		</div>
		<div id="n_1216">
			<span>21216</span>
		</div>
		<div id="n_1215">
			<span>21215</span>
		</div>
		<div id="n_1214">
			<span>21214</span>
		</div>
		<div id="n_1213">
			<span>21213</span>
		</div>
		<div id="n_1212">
			<span>21212</span>
		</div>
		<div id="n_1211">
			<span>21211</span>
		</div>
		<div id="n_1210">
			<span>21210</span>
		</div>
		<div id="n_1215_l">
			<span>21215</span>
		</div>
		<div id="n_1215_ma">
			<span>21215</span>
		</div>
		<div id="n_1215_mb">
			<span>21215</span>
		</div>
		<div id="n_1215_mc">
			<span>21215</span>
		</div>
		<div id="n_1215_md">
			<span>21215</span>
		</div>
		<div id="n_1215_me">
			<span>21215</span>
		</div>
		<div id="n_1215_mf">
			<span>21215</span>
		</div>
		<div id="n_1215_mg">
			<span>21215</span>
		</div>
		<div id="n__mg">
			<span>2</span>
		</div>
		<div id="n__mh">
			<span>2</span>
		</div>
		<div id="G120">
			<span>G120</span>
		</div>
		<div id="G120_mj">
			<span>G120</span>
		</div>
		<div id="G120_mk">
			<span>G120</span>
		</div>
		<div id="G120_ml">
			<span>G120</span>
		</div>
		<div id="G120_mm">
			<span>G120</span>
		</div>
		<div id="G120_mn">
			<span>G120</span>
		</div>
		<div id="G120_mo">
			<span>G120</span>
		</div>
		<div id="G120_mp">
			<span>G120</span>
		</div>
		<div id="G120_mq">
			<span>G120</span>
		</div>
		<div id="G120_mr">
			<span>G120</span>
		</div>
		<div id="G120_ms">
			<span>G120</span>
		</div>
		<div id="G120_mt">
			<span>G120</span>
		</div>
		<div id="G120_mu">
			<span>G120</span>
		</div>
		<div id="G120_mv">
			<span>G120</span>
		</div>
		<div id="n__mw">
			<span>1</span>
		</div>
		<div id="G60">
			<span>G60</span>
		</div>
		<div id="G60_my">
			<span>G60</span>
		</div>
		<div id="G60_mz">
			<span>G60</span>
		</div>
		<div id="G60_m">
			<span>G60</span>
		</div>
		<div id="G60_na">
			<span>G60</span>
		</div>
		<div id="G60_nb">
			<span>G60</span>
		</div>
		<div id="G60_nc">
			<span>G60</span>
		</div>
		<div id="G60_nd">
			<span>G60</span>
		</div>
		<div id="G60_ne">
			<span>G60</span>
		</div>
		<div id="G60_nf">
			<span>G60</span>
		</div>
		<div id="G60_ng">
			<span>G60</span>
		</div>
		<div id="G60_nh">
			<span>G60</span>
		</div>
		<div id="G60_ni">
			<span>G60</span>
		</div>
		<div id="G60_nj">
			<span>G60</span>
		</div>
		<div id="G60_nk">
			<span>G60</span>
		</div>
		<div id="n__nc">
			<span>5</span>
		</div>
		<div id="n__nd">
			<span>5</span>
		</div>
		<div id="n__ne">
			<span>5</span>
		</div>
		<div id="n__nf">
			<span>5</span>
		</div>
		<div id="n__ng">
			<span>5</span>
		</div>
		<div id="n__nh">
			<span>5</span>
		</div>
		<div id="n__ni">
			<span>5</span>
		</div>
		<div id="n__nj">
			<span>5</span>
		</div>
		<div id="n__nk">
			<span>5</span>
		</div>
		<div id="n__nl">
			<span>5</span>
		</div>
		<div id="n__nm">
			<span>5</span>
		</div>
		<div id="n__nn">
			<span>5</span>
		</div>
		<div id="n__no">
			<span>5</span>
		</div>
		<div id="n__np">
			<span>5</span>
		</div>
		<div id="n__nq">
			<span>5</span>
		</div>
		<div id="n__nr">
			<span>5</span>
		</div>
		<div id="n__ns">
			<span>9</span>
		</div>
		<div id="n__nt">
			<span>9</span>
		</div>
		<div id="n__nu">
			<span>9</span>
		</div>
		<div id="n__nv">
			<span>9</span>
		</div>
		<div id="n__nw">
			<span>9</span>
		</div>
		<div id="n__nx">
			<span>9</span>
		</div>
		<div id="n__ny">
			<span>9</span>
		</div>
		<div id="n__nz">
			<span>9</span>
		</div>
		<div id="n__n">
			<span>9</span>
		</div>
		<div id="n__oa">
			<span>9</span>
		</div>
		<div id="n__ob">
			<span>9</span>
		</div>
		<div id="n__oc">
			<span>9</span>
		</div>
		<div id="n__od">
			<span>9</span>
		</div>
		<div id="n__oe">
			<span>9</span>
		</div>
		<div id="n__of">
			<span>9</span>
		</div>
		<div id="n__og">
			<span>9</span>
		</div>
		<div id="G10">
			<span>G10</span>
		</div>
		<div id="G10_n">
			<span>G10</span>
		</div>
		<div id="G10_oa">
			<span>G10</span>
		</div>
		<div id="G10_ob">
			<span>G10</span>
		</div>
		<div id="G10_oc">
			<span>G10</span>
		</div>
		<div id="G10_od">
			<span>G10</span>
		</div>
		<div id="G10_oe">
			<span>G10</span>
		</div>
		<div id="G10_of">
			<span>G10</span>
		</div>
		<div id="G10_og">
			<span>G10</span>
		</div>
		<div id="G10_oh">
			<span>G10</span>
		</div>
		<div id="G10_oi">
			<span>G10</span>
		</div>
		<div id="G10_oj">
			<span>G10</span>
		</div>
		<div id="G10_ok">
			<span>G10</span>
		</div>
		<div id="G10_ol">
			<span>G10</span>
		</div>
		<div id="G10_om">
			<span>G10</span>
		</div>
		<div id="G10_on">
			<span>G10</span>
		</div>
		<div id="n_0_oo">
			<span>50</span>
		</div>
		<div id="n_0_op">
			<span>50</span>
		</div>
		<div id="n_0_oq">
			<span>50</span>
		</div>
		<div id="n_0_or">
			<span>50</span>
		</div>
		<div id="n_0_os">
			<span>50</span>
		</div>
		<div id="n_0_ot">
			<span>50</span>
		</div>
		<div id="n_0_ou">
			<span>50</span>
		</div>
		<div id="n_0_ov">
			<span>50</span>
		</div>
		<div id="n_0_ow">
			<span>50</span>
		</div>
		<div id="n_0_ox">
			<span>50</span>
		</div>
		<div id="n_0_oy">
			<span>50</span>
		</div>
		<div id="n_0_oz">
			<span>50</span>
		</div>
		<div id="n_0_o">
			<span>50</span>
		</div>
		<div id="n_0_pa">
			<span>50</span>
		</div>
		<div id="n_0_pb">
			<span>50</span>
		</div>
		<div id="n_0_pc">
			<span>50</span>
		</div>
		<div id="n__o">
			<span>6</span>
		</div>
		<div id="n__pa">
			<span>6</span>
		</div>
		<div id="n__pb">
			<span>6</span>
		</div>
		<div id="n__pc">
			<span>6</span>
		</div>
		<div id="n__pd">
			<span>6</span>
		</div>
		<div id="n__pe">
			<span>6</span>
		</div>
		<div id="n__pf">
			<span>6</span>
		</div>
		<div id="n__pg">
			<span>6</span>
		</div>
		<div id="n__ph">
			<span>6</span>
		</div>
		<div id="n__pi">
			<span>6</span>
		</div>
		<div id="n__pj">
			<span>6</span>
		</div>
		<div id="n__pk">
			<span>6</span>
		</div>
		<div id="n__pl">
			<span>6</span>
		</div>
		<div id="n__pm">
			<span>6</span>
		</div>
		<div id="n__pn">
			<span>6</span>
		</div>
		<div id="n__po">
			<span>6</span>
		</div>
		<div id="n__pp">
			<span>0</span>
		</div>
		<div id="n__pq">
			<span>0</span>
		</div>
		<div id="n__pr">
			<span>0</span>
		</div>
		<div id="n__ps">
			<span>0</span>
		</div>
		<div id="n__pt">
			<span>0</span>
		</div>
		<div id="n__pu">
			<span>0</span>
		</div>
		<div id="n__pv">
			<span>0</span>
		</div>
		<div id="n__pw">
			<span>0</span>
		</div>
		<div id="n__px">
			<span>0</span>
		</div>
		<div id="n__py">
			<span>0</span>
		</div>
		<div id="n__pz">
			<span>0</span>
		</div>
		<div id="n__p">
			<span>0</span>
		</div>
		<div id="n__qa">
			<span>0</span>
		</div>
		<div id="n__qb">
			<span>0</span>
		</div>
		<div id="n__qc">
			<span>0</span>
		</div>
		<div id="n__qd">
			<span>0</span>
		</div>
		<div id="n__qe">
			<span>7</span>
		</div>
		<div id="n__qf">
			<span>7</span>
		</div>
		<div id="n__qg">
			<span>7</span>
		</div>
		<div id="n__qh">
			<span>7</span>
		</div>
		<div id="n__qi">
			<span>7</span>
		</div>
		<div id="n__qj">
			<span>7</span>
		</div>
		<div id="n__qk">
			<span>7</span>
		</div>
		<div id="n__ql">
			<span>7</span>
		</div>
		<div id="n__qm">
			<span>7</span>
		</div>
		<div id="n__qn">
			<span>7</span>
		</div>
		<div id="n__qo">
			<span>7</span>
		</div>
		<div id="n__qp">
			<span>7</span>
		</div>
		<div id="n__qq">
			<span>7</span>
		</div>
		<div id="n__qr">
			<span>7</span>
		</div>
		<div id="n__qs">
			<span>7</span>
		</div>
		<div id="n__qt">
			<span>7</span>
		</div>
		<div id="n__qu">
			<span>0</span>
		</div>
		<div id="n__qv">
			<span>0</span>
		</div>
		<div id="n__qw">
			<span>0</span>
		</div>
		<div id="n__qx">
			<span>0</span>
		</div>
		<div id="n__qy">
			<span>0</span>
		</div>
		<div id="n__qz">
			<span>0</span>
		</div>
		<div id="n__q">
			<span>0</span>
		</div>
		<div id="n__ra">
			<span>0</span>
		</div>
		<div id="n__rb">
			<span>0</span>
		</div>
		<div id="n__rc">
			<span>0</span>
		</div>
		<div id="n__rd">
			<span>0</span>
		</div>
		<div id="n__re">
			<span>0</span>
		</div>
		<div id="n__rf">
			<span>0</span>
		</div>
		<div id="n__rg">
			<span>0</span>
		</div>
		<div id="n__rh">
			<span>0</span>
		</div>
		<div id="n__ri">
			<span>0</span>
		</div>
		<div id="n__rj">
			<span>8</span>
		</div>
		<div id="n__rk">
			<span>8</span>
		</div>
		<div id="n__rl">
			<span>8</span>
		</div>
		<div id="n__rm">
			<span>8</span>
		</div>
		<div id="n__rn">
			<span>8</span>
		</div>
		<div id="n__ro">
			<span>8</span>
		</div>
		<div id="n__rp">
			<span>8</span>
		</div>
		<div id="n__rq">
			<span>8</span>
		</div>
		<div id="n__rr">
			<span>8</span>
		</div>
		<div id="n__rs">
			<span>8</span>
		</div>
		<div id="n__rt">
			<span>8</span>
		</div>
		<div id="n__ru">
			<span>8</span>
		</div>
		<div id="n__rv">
			<span>8</span>
		</div>
		<div id="n__rw">
			<span>8</span>
		</div>
		<div id="n__rx">
			<span>8</span>
		</div>
		<div id="n__ry">
			<span>8</span>
		</div>
		<div id="Winning_No">
			<span>Winning No.</span>
		</div>
		<div id="All5_Group">
			<span>All5 Group</span>
		</div>
		<div id="G120_re">
			<span>G120</span>
		</div>
		<div id="G60_rf">
			<span>G60</span>
		</div>
		<div id="G30">
			<span>G30</span>
		</div>
		<div id="G20">
			<span>G20</span>
		</div>
		<div id="G10_ri">
			<span>G10</span>
		</div>
		<div id="G5">
			<span>G5</span>
		</div>
		<svg class="Line_30" viewBox="0 0 1194 1">
			<path id="Line_30" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_31" viewBox="0 0 1194 1">
			<path id="Line_31" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_32" viewBox="0 0 1194 1">
			<path id="Line_32" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_33" viewBox="0 0 1194 1">
			<path id="Line_33" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_34" viewBox="0 0 1194 1">
			<path id="Line_34" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_35" viewBox="0 0 1194 1">
			<path id="Line_35" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_36" viewBox="0 0 1194 1">
			<path id="Line_36" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_37" viewBox="0 0 1194 1">
			<path id="Line_37" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_39" viewBox="0 0 1194 1">
			<path id="Line_39" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_40" viewBox="0 0 1194 1">
			<path id="Line_40" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_41" viewBox="0 0 1194 1">
			<path id="Line_41" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_42" viewBox="0 0 1194 1">
			<path id="Line_42" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_43" viewBox="0 0 1194 1">
			<path id="Line_43" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_44" viewBox="0 0 1194 1">
			<path id="Line_44" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_45" viewBox="0 0 1194 1">
			<path id="Line_45" d="M 0 0 L 1194 0"></path>
		</svg>
		<svg class="Line_46" viewBox="0 0 1194 1">
			<path id="Line_46" d="M 0 0 L 1194 0"></path>
		</svg>
		<div id="Group_9">
			<svg class="Rectangle_84">
				<rect id="Rectangle_84" rx="0" ry="0" x="0" y="0" width="1188" height="96"></rect>
			</svg>
			<svg class="Rectangle_86">
				<rect id="Rectangle_86" rx="0" ry="0" x="0" y="0" width="1188" height="26"></rect>
			</svg>
			<svg class="Rectangle_85">
				<rect id="Rectangle_85" rx="0" ry="0" x="0" y="0" width="1188" height="96"></rect>
			</svg>
			<div id="Road">
				<span>Road</span>
			</div>
			<div id="Sum">
				<span>Sum</span>
			</div>
			<div id="n_st_r">
				<span>1st</span>
			</div>
			<div id="n_nd">
				<span>2nd</span>
			</div>
			<div id="n_rd">
				<span>3rd</span>
			</div>
			<div id="n_th">
				<span>4th</span>
			</div>
			<div id="n_th_sa">
				<span>5th</span>
			</div>
			<div id="Road_bet">
				<span>Road bet</span>
			</div>
			<svg class="Line_38" viewBox="0 0 1188 1">
				<path id="Line_38" d="M 0 0 L 1188 0"></path>
			</svg>
			<svg class="Ellipse_54">
				<ellipse id="Ellipse_54" rx="25" ry="25" cx="25" cy="25"></ellipse>
			</svg>
			<img id="arrow_2" src="arrow_2.png" srcset="arrow_2.png 1x, arrow_2@2x.png 2x" />
		</div>
		<div id="Group_10">
			<svg class="Path_4_sg" viewBox="2771.25 1959.5 259.717 68.5">
				<path id="Path_4_sg"
					d="M 2814.777099609375 1959.5 L 2799.511474609375 1964.201049804688 L 2781.564453125 1986.810424804688 L 2771.250244140625 2013.449340820312 L 2773.725341796875 2017.2548828125 L 2815.601806640625 2028 L 2987.646484375 2028 L 3003.32470703125 2023.299072265625 L 3021.27197265625 2000.913452148438 L 3030.967529296875 1974.274536132812 L 3028.07958984375 1970.468994140625 L 2987.646484375 1960.619262695312 L 2814.777099609375 1959.5 Z">
				</path>
			</svg>
			<svg class="Path_3_sh" viewBox="2581.089 1959.5 68.033 69">
				<path id="Path_3_sh"
					d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.3828125 L 2629.2763671875 1964.82861328125 L 2607.801513671875 1987.34765625 L 2595.576416015625 2013.639404296875 L 2598.399169921875 2016.752685546875 L 2603.11572265625 2017.759033203125 L 2649.1162109375 2027.6162109375 L 2649 2028.5 L 2607.761962890625 2028.5 L 2607.612060546875 2028.33447265625 L 2597.837158203125 2017.553955078125 L 2581.088623046875 2013.98046875 L 2581.619873046875 2013.42333984375 L 2606.93896484375 1986.872802734375 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.396240234375 L 2620.333251953125 1960.396240234375 L 2609.05322265625 1984.65576171875 L 2628.7236328125 1964.02880859375 L 2628.878662109375 1963.993896484375 L 2644.9384765625 1960.396240234375 Z M 2596.801513671875 2016.411865234375 L 2594.423583984375 2013.7890625 L 2594.53857421875 2013.5419921875 L 2605.687255859375 1989.564697265625 L 2582.911376953125 2013.4482421875 L 2596.801513671875 2016.411865234375 Z M 2644.75927734375 2027.60400390625 L 2602.8837890625 2018.630615234375 L 2599.4345703125 2017.894775390625 L 2608.238037109375 2027.60400390625 L 2644.75927734375 2027.60400390625 Z">
				</path>
			</svg>
			<svg class="Path_3_si" viewBox="0 0 68.033 69">
				<path id="Path_3_si"
					d="M 38.578125 0 L 67.911376953125 0 L 68.03271484375 0.882758617401123 L 48.187744140625 5.328493118286133 L 26.712890625 27.84769821166992 L 14.48779296875 54.13946533203125 L 17.310546875 57.25263977050781 L 22.027099609375 58.25889587402344 L 68.027587890625 68.11614990234375 L 67.911376953125 69 L 26.67333984375 69 L 26.5234375 68.83449554443359 L 16.74853515625 58.05379486083984 L 0 54.48042678833008 L 0.53125 53.9232063293457 L 25.850341796875 27.37284660339355 L 38.578125 0 Z M 63.849853515625 0.8961039185523987 L 39.24462890625 0.8961039185523987 L 27.964599609375 25.15577697753906 L 47.635009765625 4.528650283813477 L 47.7900390625 4.493865013122559 L 63.849853515625 0.8961039185523987 Z M 15.712890625 56.91178894042969 L 13.3349609375 54.28910827636719 L 13.449951171875 54.04199981689453 L 24.5986328125 30.06465911865234 L 1.82275390625 53.94814682006836 L 15.712890625 56.91178894042969 Z M 63.670654296875 68.10389709472656 L 21.795166015625 59.13060760498047 L 18.345947265625 58.39464569091797 L 27.1494140625 68.10389709472656 L 63.670654296875 68.10389709472656 Z">
				</path>
			</svg>
			<div id="BigSmall">
				<span>Big/Small</span>
			</div>
		</div>
		<div id="Group_11">
			<svg class="Path_4_sl" viewBox="2771.25 1959.5 273.217 68.5">
				<path id="Path_4_sl"
					d="M 2817.039306640625 1959.5 L 2800.980224609375 1964.201049804688 L 2782.100341796875 1986.810424804688 L 2771.25 2013.449340820312 L 2773.853759765625 2017.2548828125 L 2817.906982421875 2028 L 2998.894287109375 2028 L 3015.387451171875 2023.299072265625 L 3034.267333984375 2000.913452148438 L 3044.467041015625 1974.274536132812 L 3041.428955078125 1970.468994140625 L 2998.894287109375 1960.619262695312 L 2817.039306640625 1959.5 Z">
				</path>
			</svg>
			<svg class="Path_3_sm" viewBox="2581.089 1959.5 68.033 69">
				<path id="Path_3_sm"
					d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.3828125 L 2629.2763671875 1964.82861328125 L 2607.801513671875 1987.34765625 L 2595.576416015625 2013.639404296875 L 2598.399169921875 2016.752685546875 L 2603.11572265625 2017.759033203125 L 2649.1162109375 2027.6162109375 L 2649 2028.5 L 2607.761962890625 2028.5 L 2607.612060546875 2028.33447265625 L 2597.837158203125 2017.553955078125 L 2581.088623046875 2013.98046875 L 2581.619873046875 2013.42333984375 L 2606.93896484375 1986.872802734375 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.396240234375 L 2620.333251953125 1960.396240234375 L 2609.05322265625 1984.65576171875 L 2628.7236328125 1964.02880859375 L 2628.878662109375 1963.993896484375 L 2644.9384765625 1960.396240234375 Z M 2596.801513671875 2016.411865234375 L 2594.423583984375 2013.7890625 L 2594.53857421875 2013.5419921875 L 2605.687255859375 1989.564697265625 L 2582.911376953125 2013.4482421875 L 2596.801513671875 2016.411865234375 Z M 2644.75927734375 2027.60400390625 L 2602.8837890625 2018.630615234375 L 2599.4345703125 2017.894775390625 L 2608.238037109375 2027.60400390625 L 2644.75927734375 2027.60400390625 Z">
				</path>
			</svg>
			<svg class="Path_3_sn" viewBox="0 0 68.033 69">
				<path id="Path_3_sn"
					d="M 38.578125 0 L 67.911376953125 0 L 68.03271484375 0.882758617401123 L 48.187744140625 5.328493118286133 L 26.712890625 27.84769821166992 L 14.48779296875 54.13946533203125 L 17.310546875 57.25263977050781 L 22.027099609375 58.25889587402344 L 68.027587890625 68.11614990234375 L 67.911376953125 69 L 26.67333984375 69 L 26.5234375 68.83449554443359 L 16.74853515625 58.05379486083984 L 0 54.48042678833008 L 0.53125 53.9232063293457 L 25.850341796875 27.37284660339355 L 38.578125 0 Z M 63.849853515625 0.8961039185523987 L 39.24462890625 0.8961039185523987 L 27.964599609375 25.15577697753906 L 47.635009765625 4.528650283813477 L 47.7900390625 4.493865013122559 L 63.849853515625 0.8961039185523987 Z M 15.712890625 56.91178894042969 L 13.3349609375 54.28910827636719 L 13.449951171875 54.04199981689453 L 24.5986328125 30.06465911865234 L 1.82275390625 53.94814682006836 L 15.712890625 56.91178894042969 Z M 63.670654296875 68.10389709472656 L 21.795166015625 59.13060760498047 L 18.345947265625 58.39464569091797 L 27.1494140625 68.10389709472656 L 63.670654296875 68.10389709472656 Z">
				</path>
			</svg>
			<div id="OddEeven">
				<span>Odd/Eeven</span>
			</div>
		</div>
		<div id="Group_13">
			<svg class="Path_4_sq" viewBox="2771.25 1959.5 273.217 68.5">
				<path id="Path_4_sq"
					d="M 2817.039306640625 1959.5 L 2800.980224609375 1964.201049804688 L 2782.100341796875 1986.810424804688 L 2771.25 2013.449340820312 L 2773.853759765625 2017.2548828125 L 2817.906982421875 2028 L 2998.894287109375 2028 L 3015.387451171875 2023.299072265625 L 3034.267333984375 2000.913452148438 L 3044.467041015625 1974.274536132812 L 3041.428955078125 1970.468994140625 L 2998.894287109375 1960.619262695312 L 2817.039306640625 1959.5 Z">
				</path>
			</svg>
			<svg class="Path_3_sr" viewBox="2581.089 1959.5 68.033 69">
				<path id="Path_3_sr"
					d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.3828125 L 2629.2763671875 1964.82861328125 L 2607.801513671875 1987.34765625 L 2595.576416015625 2013.639404296875 L 2598.399169921875 2016.752685546875 L 2603.11572265625 2017.759033203125 L 2649.1162109375 2027.6162109375 L 2649 2028.5 L 2607.761962890625 2028.5 L 2607.612060546875 2028.33447265625 L 2597.837158203125 2017.553955078125 L 2581.088623046875 2013.98046875 L 2581.619873046875 2013.42333984375 L 2606.93896484375 1986.872802734375 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.396240234375 L 2620.333251953125 1960.396240234375 L 2609.05322265625 1984.65576171875 L 2628.7236328125 1964.02880859375 L 2628.878662109375 1963.993896484375 L 2644.9384765625 1960.396240234375 Z M 2596.801513671875 2016.411865234375 L 2594.423583984375 2013.7890625 L 2594.53857421875 2013.5419921875 L 2605.687255859375 1989.564697265625 L 2582.911376953125 2013.4482421875 L 2596.801513671875 2016.411865234375 Z M 2644.75927734375 2027.60400390625 L 2602.8837890625 2018.630615234375 L 2599.4345703125 2017.894775390625 L 2608.238037109375 2027.60400390625 L 2644.75927734375 2027.60400390625 Z">
				</path>
			</svg>
			<svg class="Path_3_ss" viewBox="0 0 68.033 69">
				<path id="Path_3_ss"
					d="M 38.578125 0 L 67.911376953125 0 L 68.03271484375 0.882758617401123 L 48.187744140625 5.328493118286133 L 26.712890625 27.84769821166992 L 14.48779296875 54.13946533203125 L 17.310546875 57.25263977050781 L 22.027099609375 58.25889587402344 L 68.027587890625 68.11614990234375 L 67.911376953125 69 L 26.67333984375 69 L 26.5234375 68.83449554443359 L 16.74853515625 58.05379486083984 L 0 54.48042678833008 L 0.53125 53.9232063293457 L 25.850341796875 27.37284660339355 L 38.578125 0 Z M 63.849853515625 0.8961039185523987 L 39.24462890625 0.8961039185523987 L 27.964599609375 25.15577697753906 L 47.635009765625 4.528650283813477 L 47.7900390625 4.493865013122559 L 63.849853515625 0.8961039185523987 Z M 15.712890625 56.91178894042969 L 13.3349609375 54.28910827636719 L 13.449951171875 54.04199981689453 L 24.5986328125 30.06465911865234 L 1.82275390625 53.94814682006836 L 15.712890625 56.91178894042969 Z M 63.670654296875 68.10389709472656 L 21.795166015625 59.13060760498047 L 18.345947265625 58.39464569091797 L 27.1494140625 68.10389709472656 L 63.670654296875 68.10389709472656 Z">
				</path>
			</svg>
			<div id="Next_B">
				<span>Next B</span>
			</div>
			<svg class="Ellipse_47">
				<ellipse id="Ellipse_47" rx="14" ry="14" cx="14" cy="14"></ellipse>
			</svg>
			<svg class="Ellipse_48">
				<ellipse id="Ellipse_48" rx="14" ry="14" cx="14" cy="14"></ellipse>
			</svg>
			<svg class="Line_164" viewBox="0 0 22 22">
				<path id="Line_164" d="M 22 0 L 0 22"></path>
			</svg>
		</div>
		<div id="Group_14">
			<svg class="Path_4_sy" viewBox="2771.25 1959.5 273.217 68.5">
				<path id="Path_4_sy"
					d="M 2817.039306640625 1959.5 L 2800.980224609375 1964.201049804688 L 2782.100341796875 1986.810424804688 L 2771.25 2013.449340820312 L 2773.853759765625 2017.2548828125 L 2817.906982421875 2028 L 2998.894287109375 2028 L 3015.387451171875 2023.299072265625 L 3034.267333984375 2000.913452148438 L 3044.467041015625 1974.274536132812 L 3041.428955078125 1970.468994140625 L 2998.894287109375 1960.619262695312 L 2817.039306640625 1959.5 Z">
				</path>
			</svg>
			<svg class="Path_3_sz" viewBox="2581.089 1959.5 68.033 69">
				<path id="Path_3_sz"
					d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.3828125 L 2629.2763671875 1964.82861328125 L 2607.801513671875 1987.34765625 L 2595.576416015625 2013.639404296875 L 2598.399169921875 2016.752685546875 L 2603.11572265625 2017.759033203125 L 2649.1162109375 2027.6162109375 L 2649 2028.5 L 2607.761962890625 2028.5 L 2607.612060546875 2028.33447265625 L 2597.837158203125 2017.553955078125 L 2581.088623046875 2013.98046875 L 2581.619873046875 2013.42333984375 L 2606.93896484375 1986.872802734375 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.396240234375 L 2620.333251953125 1960.396240234375 L 2609.05322265625 1984.65576171875 L 2628.7236328125 1964.02880859375 L 2628.878662109375 1963.993896484375 L 2644.9384765625 1960.396240234375 Z M 2596.801513671875 2016.411865234375 L 2594.423583984375 2013.7890625 L 2594.53857421875 2013.5419921875 L 2605.687255859375 1989.564697265625 L 2582.911376953125 2013.4482421875 L 2596.801513671875 2016.411865234375 Z M 2644.75927734375 2027.60400390625 L 2602.8837890625 2018.630615234375 L 2599.4345703125 2017.894775390625 L 2608.238037109375 2027.60400390625 L 2644.75927734375 2027.60400390625 Z">
				</path>
			</svg>
			<svg class="Path_3_s" viewBox="0 0 68.033 69">
				<path id="Path_3_s"
					d="M 38.578125 0 L 67.911376953125 0 L 68.03271484375 0.882758617401123 L 48.187744140625 5.328493118286133 L 26.712890625 27.84769821166992 L 14.48779296875 54.13946533203125 L 17.310546875 57.25263977050781 L 22.027099609375 58.25889587402344 L 68.027587890625 68.11614990234375 L 67.911376953125 69 L 26.67333984375 69 L 26.5234375 68.83449554443359 L 16.74853515625 58.05379486083984 L 0 54.48042678833008 L 0.53125 53.9232063293457 L 25.850341796875 27.37284660339355 L 38.578125 0 Z M 63.849853515625 0.8961039185523987 L 39.24462890625 0.8961039185523987 L 27.964599609375 25.15577697753906 L 47.635009765625 4.528650283813477 L 47.7900390625 4.493865013122559 L 63.849853515625 0.8961039185523987 Z M 15.712890625 56.91178894042969 L 13.3349609375 54.28910827636719 L 13.449951171875 54.04199981689453 L 24.5986328125 30.06465911865234 L 1.82275390625 53.94814682006836 L 15.712890625 56.91178894042969 Z M 63.670654296875 68.10389709472656 L 21.795166015625 59.13060760498047 L 18.345947265625 58.39464569091797 L 27.1494140625 68.10389709472656 L 63.670654296875 68.10389709472656 Z">
				</path>
			</svg>
			<div id="Next_S">
				<span>Next S</span>
			</div>
			<svg class="Ellipse_49">
				<ellipse id="Ellipse_49" rx="14" ry="14" cx="14" cy="14"></ellipse>
			</svg>
			<svg class="Ellipse_50">
				<ellipse id="Ellipse_50" rx="14" ry="14" cx="14" cy="14"></ellipse>
			</svg>
			<svg class="Line_165" viewBox="0 0 21 21">
				<path id="Line_165" d="M 21 0 L 0 21"></path>
			</svg>
		</div>
		<div id="Group_12">
			<svg class="Path_4_s" viewBox="2771.25 1959.5 258.717 68.5">
				<path id="Path_4_s"
					d="M 2814.609375 1959.5 L 2799.40283203125 1964.201049804688 L 2781.52490234375 1986.810424804688 L 2771.25 2013.449340820312 L 2773.7158203125 2017.2548828125 L 2815.43115234375 2028 L 2986.81298828125 2028 L 3002.43115234375 2023.299072265625 L 3020.30908203125 2000.913452148438 L 3029.96728515625 1974.274536132812 L 3027.09033203125 1970.468994140625 L 2986.81298828125 1960.619262695312 L 2814.609375 1959.5 Z">
				</path>
			</svg>
			<div id="DragonTiger">
				<span>Dragon/Tiger</span>
			</div>
			<svg class="Path_3_ta" viewBox="2581.089 1959.5 68.033 69">
				<path id="Path_3_ta"
					d="M 2619.666748046875 1959.5 L 2649 1959.5 L 2649.121337890625 1960.3828125 L 2629.2763671875 1964.82861328125 L 2607.801513671875 1987.34765625 L 2595.576416015625 2013.639404296875 L 2598.399169921875 2016.752685546875 L 2603.11572265625 2017.759033203125 L 2649.1162109375 2027.6162109375 L 2649 2028.5 L 2607.761962890625 2028.5 L 2607.612060546875 2028.33447265625 L 2597.837158203125 2017.553955078125 L 2581.088623046875 2013.98046875 L 2581.619873046875 2013.42333984375 L 2606.93896484375 1986.872802734375 L 2619.666748046875 1959.5 Z M 2644.9384765625 1960.396240234375 L 2620.333251953125 1960.396240234375 L 2609.05322265625 1984.65576171875 L 2628.7236328125 1964.02880859375 L 2628.878662109375 1963.993896484375 L 2644.9384765625 1960.396240234375 Z M 2596.801513671875 2016.411865234375 L 2594.423583984375 2013.7890625 L 2594.53857421875 2013.5419921875 L 2605.687255859375 1989.564697265625 L 2582.911376953125 2013.4482421875 L 2596.801513671875 2016.411865234375 Z M 2644.75927734375 2027.60400390625 L 2602.8837890625 2018.630615234375 L 2599.4345703125 2017.894775390625 L 2608.238037109375 2027.60400390625 L 2644.75927734375 2027.60400390625 Z">
				</path>
			</svg>
			<svg class="Path_3_tb" viewBox="0 0 68.033 69">
				<path id="Path_3_tb"
					d="M 38.578125 0 L 67.911376953125 0 L 68.03271484375 0.882758617401123 L 48.187744140625 5.328493118286133 L 26.712890625 27.84769821166992 L 14.48779296875 54.13946533203125 L 17.310546875 57.25263977050781 L 22.027099609375 58.25889587402344 L 68.027587890625 68.11614990234375 L 67.911376953125 69 L 26.67333984375 69 L 26.5234375 68.83449554443359 L 16.74853515625 58.05379486083984 L 0 54.48042678833008 L 0.53125 53.9232063293457 L 25.850341796875 27.37284660339355 L 38.578125 0 Z M 63.849853515625 0.8961039185523987 L 39.24462890625 0.8961039185523987 L 27.964599609375 25.15577697753906 L 47.635009765625 4.528650283813477 L 47.7900390625 4.493865013122559 L 63.849853515625 0.8961039185523987 Z M 15.712890625 56.91178894042969 L 13.3349609375 54.28910827636719 L 13.449951171875 54.04199981689453 L 24.5986328125 30.06465911865234 L 1.82275390625 53.94814682006836 L 15.712890625 56.91178894042969 Z M 63.670654296875 68.10389709472656 L 21.795166015625 59.13060760498047 L 18.345947265625 58.39464569091797 L 27.1494140625 68.10389709472656 L 63.670654296875 68.10389709472656 Z">
				</path>
			</svg>
		</div>
		<svg class="Line_47" viewBox="0 0 1191 1">
			<path id="Line_47" d="M 0 0 L 1191 0"></path>
		</svg>
		<svg class="Line_48" viewBox="0 0 1191 1">
			<path id="Line_48" d="M 0 0 L 1191 0"></path>
		</svg>
		<svg class="Line_49" viewBox="0 0 1191 1">
			<path id="Line_49" d="M 0 0 L 1191 0"></path>
		</svg>
		<svg class="Line_50" viewBox="0 0 1191 1">
			<path id="Line_50" d="M 0 0 L 1191 0"></path>
		</svg>
		<svg class="Line_51" viewBox="0 0 1191 1">
			<path id="Line_51" d="M 0 0 L 1191 0"></path>
		</svg>
		<svg class="Line_52" viewBox="0 0 1191 1">
			<path id="Line_52" d="M 0 0 L 1191 0"></path>
		</svg>
		<svg class="Line_53" viewBox="0 0 1 305">
			<path id="Line_53" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_54" viewBox="0 0 1 305">
			<path id="Line_54" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_55" viewBox="0 0 1 305">
			<path id="Line_55" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_56" viewBox="0 0 1 305">
			<path id="Line_56" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_57" viewBox="0 0 1 305">
			<path id="Line_57" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_58" viewBox="0 0 1 305">
			<path id="Line_58" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_59" viewBox="0 0 1 305">
			<path id="Line_59" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_60" viewBox="0 0 1 305">
			<path id="Line_60" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_61" viewBox="0 0 1 305">
			<path id="Line_61" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_62" viewBox="0 0 1 305">
			<path id="Line_62" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_63" viewBox="0 0 1 305">
			<path id="Line_63" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_64" viewBox="0 0 1 305">
			<path id="Line_64" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_65" viewBox="0 0 1 305">
			<path id="Line_65" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_66" viewBox="0 0 1 305">
			<path id="Line_66" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_67" viewBox="0 0 1 305">
			<path id="Line_67" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_68" viewBox="0 0 1 305">
			<path id="Line_68" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_69" viewBox="0 0 1 305">
			<path id="Line_69" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_70" viewBox="0 0 1 305">
			<path id="Line_70" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Line_71" viewBox="0 0 1 305">
			<path id="Line_71" d="M 0 0 L 0 305"></path>
		</svg>
		<svg class="Rectangle_87">
			<rect id="Rectangle_87" rx="0" ry="0" x="0" y="0" width="541" height="315"></rect>
		</svg>
		<svg class="Rectangle_91">
			<rect id="Rectangle_91" rx="0" ry="0" x="0" y="0" width="541" height="315"></rect>
		</svg>
		<svg class="Rectangle_90">
			<rect id="Rectangle_90" rx="0" ry="0" x="0" y="0" width="561" height="315"></rect>
		</svg>
		<svg class="Line_83" viewBox="0 0 1 314.5">
			<path id="Line_83" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_124" viewBox="0 0 1 314.5">
			<path id="Line_124" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_109" viewBox="0 0 1 314.5">
			<path id="Line_109" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_75" viewBox="0 0 1 314.5">
			<path id="Line_75" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_120" viewBox="0 0 1 314.5">
			<path id="Line_120" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_105" viewBox="0 0 1 314.5">
			<path id="Line_105" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_81" viewBox="0 0 1 314.5">
			<path id="Line_81" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_126" viewBox="0 0 1 314.5">
			<path id="Line_126" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_111" viewBox="0 0 1 314.5">
			<path id="Line_111" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_77" viewBox="0 0 1 314.5">
			<path id="Line_77" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_122" viewBox="0 0 1 314.5">
			<path id="Line_122" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_107" viewBox="0 0 1 314.5">
			<path id="Line_107" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_79" viewBox="0 0 1 314.5">
			<path id="Line_79" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_127" viewBox="0 0 1 314.5">
			<path id="Line_127" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_112" viewBox="0 0 1 314.5">
			<path id="Line_112" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_73" viewBox="0 0 1 314.5">
			<path id="Line_73" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_119" viewBox="0 0 1 314.5">
			<path id="Line_119" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_104" viewBox="0 0 1 314.5">
			<path id="Line_104" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_82" viewBox="0 0 1 314.5">
			<path id="Line_82" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_125" viewBox="0 0 1 314.5">
			<path id="Line_125" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_110" viewBox="0 0 1 314.5">
			<path id="Line_110" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_74" viewBox="0 0 1 314.5">
			<path id="Line_74" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_121" viewBox="0 0 1 314.5">
			<path id="Line_121" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_106" viewBox="0 0 1 314.5">
			<path id="Line_106" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_80" viewBox="0 0 1 314.5">
			<path id="Line_80" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_129" viewBox="0 0 1 314.5">
			<path id="Line_129" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_128" viewBox="0 0 1 314.5">
			<path id="Line_128" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_161" viewBox="0 0 1 314.5">
			<path id="Line_161" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_162" viewBox="0 0 1 314.5">
			<path id="Line_162" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_113" viewBox="0 0 1 314.5">
			<path id="Line_113" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_76" viewBox="0 0 1 314.5">
			<path id="Line_76" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_123" viewBox="0 0 1 314.5">
			<path id="Line_123" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_108" viewBox="0 0 1 314.5">
			<path id="Line_108" d="M 0 0 L 0 314.5"></path>
		</svg>
		<svg class="Line_94" viewBox="0 0 584 1">
			<path id="Line_94" d="M 0 0 L 584 0"></path>
		</svg>
		<svg class="Line_131" viewBox="0 0 584 1">
			<path id="Line_131" d="M 0 0 L 584 0"></path>
		</svg>
		<svg class="Line_118" viewBox="0 0 631.5 1">
			<path id="Line_118" d="M 0 0 L 631.5 0"></path>
		</svg>
		<svg class="Line_103" viewBox="0 0 561.5 1">
			<path id="Line_103" d="M 0 0 L 561.5 0"></path>
		</svg>
		<svg class="Line_95" viewBox="0 0 584 1">
			<path id="Line_95" d="M 0 0 L 584 0"></path>
		</svg>
		<svg class="Line_117" viewBox="0 0 631.5 1">
			<path id="Line_117" d="M 0 0 L 631.5 0"></path>
		</svg>
		<svg class="Line_102" viewBox="0 0 561.5 1">
			<path id="Line_102" d="M 0 0 L 561.5 0"></path>
		</svg>
		<svg class="Line_96" viewBox="0 0 584 1">
			<path id="Line_96" d="M 0 0 L 584 0"></path>
		</svg>
		<svg class="Line_116" viewBox="0 0 631.5 1">
			<path id="Line_116" d="M 0 0 L 631.5 0"></path>
		</svg>
		<svg class="Line_101" viewBox="0 0 561.5 1">
			<path id="Line_101" d="M 0 0 L 561.5 0"></path>
		</svg>
		<svg class="Line_97" viewBox="0 0 584 1">
			<path id="Line_97" d="M 0 0 L 584 0"></path>
		</svg>
		<svg class="Line_114" viewBox="0 0 631.5 1">
			<path id="Line_114" d="M 0 0 L 631.5 0"></path>
		</svg>
		<svg class="Line_100" viewBox="0 0 561.5 1">
			<path id="Line_100" d="M 0 0 L 561.5 0"></path>
		</svg>
		<svg class="Line_98" viewBox="0 0 584 1">
			<path id="Line_98" d="M 0 0 L 584 0"></path>
		</svg>
		<svg class="Line_130" viewBox="0 0 584 1">
			<path id="Line_130" d="M 0 0 L 584 0"></path>
		</svg>
		<svg class="Line_115" viewBox="0 0 631.5 1">
			<path id="Line_115" d="M 0 0 L 631.5 0"></path>
		</svg>
		<svg class="Line_163" viewBox="0 0 631.5 1">
			<path id="Line_163" d="M 0 0 L 631.5 0"></path>
		</svg>
		<svg class="Line_99" viewBox="0 0 561.5 1">
			<path id="Line_99" d="M 0 0 L 561.5 0"></path>
		</svg>
		<div id="B">
			<span>B</span>
		</div>
		<div id="B_vi">
			<span>B</span>
		</div>
		<div id="B_vj">
			<span>B</span>
		</div>
		<div id="B_vk">
			<span>B</span>
		</div>
		<div id="B_vl">
			<span>B</span>
		</div>
		<div id="B_vm">
			<span>B</span>
		</div>
		<div id="B_vn">
			<span>B</span>
		</div>
		<div id="B_vo">
			<span>B</span>
		</div>
		<div id="B_vp">
			<span>B</span>
		</div>
		<div id="B_vq">
			<span>B</span>
		</div>
		<div id="B_vr">
			<span>B</span>
		</div>
		<div id="B_vs">
			<span>B</span>
		</div>
		<div id="B_vt">
			<span>B</span>
		</div>
		<div id="B_vu">
			<span>B</span>
		</div>
		<div id="B_vv">
			<span>B</span>
		</div>
		<div id="B_vw">
			<span>B</span>
		</div>
		<div id="B_vx">
			<span>B</span>
		</div>
		<div id="B_vy">
			<span>B</span>
		</div>
		<div id="S">
			<span>S</span>
		</div>
		<div id="S_v">
			<span>S</span>
		</div>
		<div id="S_wa">
			<span>S</span>
		</div>
		<div id="S_wb">
			<span>S</span>
		</div>
		<div id="S_wc">
			<span>S</span>
		</div>
		<div id="S_wd">
			<span>S</span>
		</div>
		<div id="S_we">
			<span>S</span>
		</div>
		<div id="S_wf">
			<span>S</span>
		</div>
		<div id="S_wg">
			<span>S</span>
		</div>
		<div id="S_wh">
			<span>S</span>
		</div>
		<div id="S_wi">
			<span>S</span>
		</div>
		<div id="S_wj">
			<span>S</span>
		</div>
		<div id="S_wk">
			<span>S</span>
		</div>
		<div id="S_wl">
			<span>S</span>
		</div>
		<div id="S_wm">
			<span>S</span>
		</div>
		<div id="S_wn">
			<span>S</span>
		</div>
		<div id="S_wo">
			<span>S</span>
		</div>
		<svg class="Ellipse_6">
			<ellipse id="Ellipse_6" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_10">
			<ellipse id="Ellipse_10" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_19">
			<ellipse id="Ellipse_19" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_23">
			<ellipse id="Ellipse_23" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_27">
			<ellipse id="Ellipse_27" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_16">
			<ellipse id="Ellipse_16" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_8">
			<ellipse id="Ellipse_8" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_25">
			<ellipse id="Ellipse_25" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_12">
			<ellipse id="Ellipse_12" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_17">
			<ellipse id="Ellipse_17" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_21">
			<ellipse id="Ellipse_21" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_14">
			<ellipse id="Ellipse_14" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_7">
			<ellipse id="Ellipse_7" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_29">
			<ellipse id="Ellipse_29" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_31">
			<ellipse id="Ellipse_31" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_37">
			<ellipse id="Ellipse_37" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_33">
			<ellipse id="Ellipse_33" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_39">
			<ellipse id="Ellipse_39" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_40">
			<ellipse id="Ellipse_40" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_41">
			<ellipse id="Ellipse_41" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_35">
			<ellipse id="Ellipse_35" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_45">
			<ellipse id="Ellipse_45" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_11">
			<ellipse id="Ellipse_11" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_18">
			<ellipse id="Ellipse_18" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_22">
			<ellipse id="Ellipse_22" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_26">
			<ellipse id="Ellipse_26" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_20">
			<ellipse id="Ellipse_20" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_9">
			<ellipse id="Ellipse_9" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_28">
			<ellipse id="Ellipse_28" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_30">
			<ellipse id="Ellipse_30" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_32">
			<ellipse id="Ellipse_32" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_38">
			<ellipse id="Ellipse_38" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_34">
			<ellipse id="Ellipse_34" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_36">
			<ellipse id="Ellipse_36" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_46">
			<ellipse id="Ellipse_46" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_42">
			<ellipse id="Ellipse_42" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_43">
			<ellipse id="Ellipse_43" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_44">
			<ellipse id="Ellipse_44" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_24">
			<ellipse id="Ellipse_24" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_13">
			<ellipse id="Ellipse_13" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Ellipse_15">
			<ellipse id="Ellipse_15" rx="13" ry="13" cx="13" cy="13"></ellipse>
		</svg>
		<svg class="Line_132" viewBox="0 0 26 26">
			<path id="Line_132" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_148" viewBox="0 0 26 26">
			<path id="Line_148" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_151" viewBox="0 0 26 26">
			<path id="Line_151" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_158" viewBox="0 0 26 26">
			<path id="Line_158" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_142" viewBox="0 0 26 26">
			<path id="Line_142" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_140" viewBox="0 0 26 26">
			<path id="Line_140" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_147" viewBox="0 0 26 26">
			<path id="Line_147" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_149" viewBox="0 0 26 26">
			<path id="Line_149" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_134" viewBox="0 0 26 26">
			<path id="Line_134" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_157" viewBox="0 0 26 26">
			<path id="Line_157" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_143" viewBox="0 0 26 26">
			<path id="Line_143" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_160" viewBox="0 0 26 26">
			<path id="Line_160" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_150" viewBox="0 0 26 26">
			<path id="Line_150" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_141" viewBox="0 0 26 26">
			<path id="Line_141" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_135" viewBox="0 0 26 26">
			<path id="Line_135" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_156" viewBox="0 0 26 26">
			<path id="Line_156" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_144" viewBox="0 0 26 26">
			<path id="Line_144" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_159" viewBox="0 0 26 26">
			<path id="Line_159" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_136" viewBox="0 0 26 26">
			<path id="Line_136" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_155" viewBox="0 0 26 26">
			<path id="Line_155" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_145" viewBox="0 0 26 26">
			<path id="Line_145" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_137" viewBox="0 0 26 26">
			<path id="Line_137" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_154" viewBox="0 0 26 26">
			<path id="Line_154" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_146" viewBox="0 0 26 26">
			<path id="Line_146" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_138" viewBox="0 0 26 26">
			<path id="Line_138" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_153" viewBox="0 0 26 26">
			<path id="Line_153" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_139" viewBox="0 0 26 26">
			<path id="Line_139" d="M 26 0 L 0 26"></path>
		</svg>
		<svg class="Line_152" viewBox="0 0 26 26">
			<path id="Line_152" d="M 26 0 L 0 26"></path>
		</svg>
		<div id="Road_intro">
			<span>Road intro.</span>
		</div>
		<svg class="Ellipse_51">
			<ellipse id="Ellipse_51" rx="14.5" ry="14.5" cx="14.5" cy="14.5"></ellipse>
		</svg>
		<div id="Text_yf">
			<span>?</span>
		</div>
		<div id="Group_15">
			<svg class="Path_1_yh" viewBox="1082.684 756.5 374.095 121.97">
				<path id="Path_1_yh"
					d="M 1114.31396484375 756.5001220703125 L 1435.416259765625 756.5001220703125 L 1456.779052734375 808.4349365234375 L 1435.51611328125 878.4699096679688 L 1098.185302734375 878.4699096679688 L 1082.684326171875 834.2213745117188 L 1114.31396484375 756.5001220703125 Z M 1434.441650390625 761.314453125 L 1427.072021484375 761.314453125 L 1114.31396484375 761.314453125 L 1098.185302734375 873.2539672851562 L 1434.441650390625 873.2539672851562 L 1454.008056640625 808.8814697265625 L 1454.008056640625 808.4349365234375 L 1434.441650390625 761.314453125 Z">
				</path>
			</svg>
			<div id="H_O_T">
				<span>H<br />O<br />T</span>
			</div>
		</div>
		<div id="Group_16">
			<svg class="Path_1_yk" viewBox="1082.684 756.5 374.095 121.97">
				<path id="Path_1_yk"
					d="M 1114.31396484375 756.5001220703125 L 1435.416259765625 756.5001220703125 L 1456.779052734375 808.4349365234375 L 1435.51611328125 878.4699096679688 L 1098.185302734375 878.4699096679688 L 1082.684326171875 834.2213745117188 L 1114.31396484375 756.5001220703125 Z M 1434.441650390625 761.314453125 L 1427.072021484375 761.314453125 L 1114.31396484375 761.314453125 L 1098.185302734375 873.2539672851562 L 1434.441650390625 873.2539672851562 L 1454.008056640625 808.8814697265625 L 1454.008056640625 808.4349365234375 L 1434.441650390625 761.314453125 Z">
				</path>
			</svg>
			<div id="A_L_L">
				<span>A<br />L<br />L</span>
			</div>
		</div>
		<div id="Group_17">
			<svg class="Path_1_yn" viewBox="1082.684 756.5 374.095 121.97">
				<path id="Path_1_yn"
					d="M 1114.31396484375 756.5001220703125 L 1435.416259765625 756.5001220703125 L 1456.779052734375 808.4349365234375 L 1435.51611328125 878.4699096679688 L 1098.185302734375 878.4699096679688 L 1082.684326171875 834.2213745117188 L 1114.31396484375 756.5001220703125 Z M 1434.441650390625 761.314453125 L 1427.072021484375 761.314453125 L 1114.31396484375 761.314453125 L 1098.185302734375 873.2539672851562 L 1434.441650390625 873.2539672851562 L 1454.008056640625 808.8814697265625 L 1454.008056640625 808.4349365234375 L 1434.441650390625 761.314453125 Z">
				</path>
			</svg>
			<div id="n__2____S__I___D__E__S">
				<span>
					2<br /><br />
					S<br />
					I<br />
					D<br />
					E<br />
					S</span>
			</div>
		</div>
		<div id="Group_18">
			<svg class="Path_1_yq" viewBox="1082.684 756.5 374.095 121.97">
				<path id="Path_1_yq"
					d="M 1114.31396484375 756.5001220703125 L 1435.416259765625 756.5001220703125 L 1456.779052734375 808.4349365234375 L 1435.51611328125 878.4699096679688 L 1098.185302734375 878.4699096679688 L 1082.684326171875 834.2213745117188 L 1114.31396484375 756.5001220703125 Z M 1434.441650390625 761.314453125 L 1427.072021484375 761.314453125 L 1114.31396484375 761.314453125 L 1098.185302734375 873.2539672851562 L 1434.441650390625 873.2539672851562 L 1454.008056640625 808.8814697265625 L 1454.008056640625 808.4349365234375 L 1434.441650390625 761.314453125 Z">
				</path>
			</svg>
			<div id="s_t_a_n_d_a_r_d">
				<span>s<br />t<br />a<br />n<br />d<br />a<br />r<br />d</span>
			</div>
		</div>

		<svg class="Polygon_1" viewBox="0 0 59 51">
			<path id="Polygon_1" d="M 29.49999809265137 0 L 59 51 L 0 51 Z"></path>
		</svg>
		<svg class="Polygon_6" viewBox="0 0 59 51">
			<path id="Polygon_6" d="M 29.49999809265137 0 L 59 51 L 0 51 Z"></path>
		</svg>
		<svg class="Polygon_2" viewBox="0 0 59 51">
			<path id="Polygon_2" d="M 29.49999809265137 0 L 59 51 L 0 51 Z"></path>
		</svg>
		<svg class="Polygon_3" viewBox="0 0 59 51">
			<path id="Polygon_3" d="M 29.49999809265137 0 L 59 51 L 0 51 Z"></path>
		</svg>
		<svg class="Polygon_5" viewBox="0 0 59 51">
			<path id="Polygon_5" d="M 29.49999809265137 0 L 59 51 L 0 51 Z"></path>
		</svg>
		<svg class="Polygon_4" viewBox="0 0 59 51">
			<path id="Polygon_4" d="M 29.49999809265137 0 L 59 51 L 0 51 Z"></path>
		</svg>
		<svg class="Rectangle_96">
			<rect id="Rectangle_96" rx="8" ry="8" x="0" y="0" width="74" height="190"></rect>
		</svg>
		<img id="arrow" src="arrow.png" srcset="arrow.png 1x, arrow@2x.png 2x" />

		<img id="n_134065" src="n_134065.png" srcset="n_134065.png 1x, n_134065@2x.png 2x" />
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<script>
		setTimeout(function(){
			$(".game-interface").hide();
			$(".game-interface.a5_manual").show();
		},3000)
		// $(".bet-now").click(function () {
		// 	alert("clicked");
		// });
		// const el = document.querySelector('.draw-num-box');
		// const machine = new SlotMachine(el, {
		// 	active: 0,
		// 	delay: 800,
		// 	direction: 'down'
		// });
		// machine.shuffle();
		// machine.stop(2);
// 		let promise = new Promise((resolve , reject) => {
// 			machine.stop(20)
//     .then((res) => {
//       // successfully got data
//       resolve(res);
//     })
//     .catch((err) => {
//       // an error occured
//       reject(err);
//     });          
// });
		// console.log(machine.nextActive);
	</script>
</body>

</html>