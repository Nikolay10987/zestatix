<?php if ( !defined( 'ABSPATH' ) ) exit ?>
<style>
	#wpcontent {
		background: #e3e6ea;
	}
	#preloader-zestatix {
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: 999999;
		left: 0;
		top: 0;
		background-color: rgb(0, 0, 0, 50%);
	}
	#infinity-preloader-zestatix {
		width: 130px;
		height: 70px;
		z-index: 2;
	}
	#infinity-preloader-zestatix .bg-zestatix div,
	#infinity-preloader-zestatix > .fg-zestatix > div > div {
		width: 70px;
		height: 70px;
		border: 10px solid #aaa;
		-webkit-box-sizing: border-box;
    box-sizing: border-box;
		-webkit-border-radius: 50%;
    border-radius: 50%;
		position: absolute;
	}
	#infinity-preloader-zestatix .right-bg-zestatix {
		-webkit-transform: translate( 100%, 0 );
    -ms-transform: translate( 100%, 0 );
    transform: translate( 100%, 0 );
		left: -10px;
	}
	#infinity-preloader-zestatix > .fg-zestatix > div > div {
		border-color: red red transparent transparent;
		-webkit-transform: rotate( 135deg );
    -ms-transform: rotate( 135deg );
    transform: rotate( 135deg );
		-webkit-animation: spin-zestatix 1s linear infinite;
    animation: spin-zestatix 1s linear infinite;
		position: static;
	}
	#infinity-preloader-zestatix > .fg-zestatix > div {
		clip: rect( 0, 70px, 35px, 0 );
		position: absolute;
	}
	#infinity-preloader-zestatix > .fg-zestatix > .bottom-right-rect-zestatix {
		left: -10px;
		-webkit-transform: translateX( 100% ) scale( 1, -1 );
    -ms-transform: translateX( 100% ) scale( 1, -1 );
    transform: translateX( 100% ) scale( 1, -1 );
	}
	#infinity-preloader-zestatix > .fg-zestatix > .bottom-right-rect-zestatix > div {
		-webkit-animation-delay: 0.25s;
    animation-delay: 0.25s;
	}
	#infinity-preloader-zestatix > .fg-zestatix > .top-right-rect-zestatix {
		left: -10px;
		-webkit-transform: translateX( 100% ) scale( -1, 1 );
    -ms-transform: translateX( 100% ) scale( -1, 1 );
    transform: translateX( 100% ) scale( -1, 1 );
	}
	#infinity-preloader-zestatix > .fg-zestatix > .top-right-rect-zestatix > div {
		-webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
	}
	#infinity-preloader-zestatix > .fg-zestatix > .bottom-left-rect-zestatix {
		-webkit-transform: scale( -1 );
    -ms-transform: scale( -1 );
    transform: scale( -1 );
	}
	#infinity-preloader-zestatix > .fg-zestatix > .bottom-left-rect-zestatix > div {
		-webkit-animation-delay: 0.75s;
    animation-delay: 0.75s;
	}
	#infinity-preloader-zestatix > .fg-zestatix {
		-webkit-filter: drop-shadow( 0 0 6px red );
    filter: drop-shadow( 0 0 6px red );
	}
	@-webkit-keyframes spin-zestatix {
		50%,
		100% {
	    	-webkit-transform: rotate( 495deg );
        transform: rotate( 495deg );
		}
	}
	@keyframes spin-zestatix {
		50%,
		100% {
	    	-webkit-transform: rotate( 495deg );
        transform: rotate( 495deg );
		}
	}
	#zeStatix input, #zeStatix input[type=text]:focus {
		border:none;
		background-image:none;
		background-color:transparent;
		-webkit-box-shadow: none;
		-moz-box-shadow: none;
		box-shadow: none;
	}
	#zeStatix input::-webkit-input-placeholder, #zeStatix textarea::-webkit-input-placeholder {
		opacity: .4;
		-webkit-transition: 150ms opacity ease-in-out;
		-o-transition: 150ms opacity ease-in-out;
		transition: 150ms opacity ease-in-out;
	}
	#zeStatix input::-ms-input-placeholder, #zeStatix textarea::-ms-input-placeholder {
		opacity: .4;
		-webkit-transition: 150ms opacity ease-in-out;
		-o-transition: 150ms opacity ease-in-out;
		-ms-transition: 150ms opacity ease-in-out;
		transition: 150ms opacity ease-in-out;
	}
	#zeStatix input::-moz-placeholder, #zeStatix textarea::-moz-placeholder {
		opacity: .4;
		-webkit-transition: 150ms opacity ease-in-out;
		-o-transition: 150ms opacity ease-in-out;
		-moz-transition: 150ms opacity ease-in-out;
		transition: 150ms opacity ease-in-out;
	}
	#zeStatix input:-ms-input-placeholder, #zeStatix textarea:-ms-input-placeholder {
		opacity: .4;
		-webkit-transition: 150ms opacity ease-in-out;
		-o-transition: 150ms opacity ease-in-out;
		-ms-transition: 150ms opacity ease-in-out;
		transition: 150ms opacity ease-in-out;
	}
	#zeStatix input::placeholder, #zeStatix textarea::placeholder {
		opacity: .4;
		-webkit-transition: 150ms opacity ease-in-out;
		-o-transition: 150ms opacity ease-in-out;
		transition: 150ms opacity ease-in-out;
	}
	#zeStatix input:focus::-webkit-input-placeholder, #zeStatix textarea:focus::-webkit-input-placeholder {
		opacity: 0;
		-webkit-transition: 150ms opacity ease-in-out;
		-o-transition: 150ms opacity ease-in-out;
		transition: 150ms opacity ease-in-out;
	}
	#zeStatix input:focus::-moz-placeholder, #zeStatix textarea:focus::-moz-placeholder {
		opacity: 0;
		-webkit-transition: 150ms opacity ease-in-out;
		-o-transition: 150ms opacity ease-in-out;
		-moz-transition: 150ms opacity ease-in-out;
		transition: 150ms opacity ease-in-out;
	}
	#zeStatix {
		margin-right: 20px;
	}
	#zeStatix *:not( .dashicons ) {
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
		font-size: 14px;
		color: #2f2f2f;
	}
	button.button-zestatix {
		text-align: center;
		background-color: #fff;
		color: #454749;
		border: solid 1px #808288;
    border-radius: 2px;
	}
	button.button-zestatix:not( #sticky-zestatix button ) {
		width: 220px;
		height: 40px;
	}
	#zeStatix label {
		cursor: default;
	}
	#card-header-zestatix {
		height: 100px;
		position: relative;
		background-color: #fff;
		z-index: 1;
	}
	#parent-toggler-zestatix {
		max-width: 700px;
		width: 100%;
		position: relative;
		min-width: 440px;
		height: 100%;
	}
	#toggler-zestatix {
    cursor: pointer;
		left: 10px;
	}
	.toggler-zestatix-on {
		background-image: url( '<?= plugins_url( 'zestatix/img/toggle.png' ) ?>' );
		background-repeat: no-repeat;
    background-size: 600%;
    height: 0;
    width: 20%;
		padding-bottom: 7.5%;
    -webkit-animation: toggle-on-zestatix .3s steps( 5 );
    animation: toggle-on-zestatix .3s steps( 5 );
		background-position: 0% 0%;
	}
	.toggler-zestatix-off {
		-webkit-animation: toggle-off-zestatix .3s steps( 5 );
    animation: toggle-off-zestatix .3s steps( 5 );
		background-position: 100% 0%;
	}
	@-webkit-keyframes toggle-on-zestatix {
	    from { background-position: 100%; }
	    to { background-position:    0%; }
	}
	@keyframes toggle-on-zestatix {
	    from { background-position: 100%; }
	    to { background-position:    0%; }
	}
	@-webkit-keyframes toggle-off-zestatix {
	    from { background-position:    0%; }
	    to { background-position: 100%; }
	}
	@keyframes toggle-off-zestatix {
	    from { background-position:    0%; }
	    to { background-position: 100%; }
	}
	#logo-zestatix a {
    height: 145px;
  	width: 180px;
  	z-index: 3;
  	display: inline-block;
  	position: relative;
	}
	#logo-zestatix a:focus {
    box-shadow: none;
	}
	#logo-img-zestatix {
		background-image: url( '<?= plugins_url( 'zestatix/img/logo.png' ) ?>' );
		background-repeat: no-repeat;
    background-size: 900px 145px;
    background-position: -720px 0px;
    height: 145px;
    width: 180px;
    z-index: 1;
	}
	#logo-img-zestatix.logo-anim-on-zestatix {
		-webkit-animation: on-zestatix .3s steps( 4 );
    animation: on-zestatix .3s steps( 4 );

	}
	@-webkit-keyframes on-zestatix {
    from { background-position: 0px; }
    to { background-position: -720px; }
	}
	@keyframes on-zestatix {
    from { background-position: 0px; }
    to { background-position: -720px; }
	}
	#logo-img-zestatix.logo-anim-off-zestatix {
		-webkit-animation: off-zestatix .3s steps( 4 );
    animation: off-zestatix .3s steps( 4 );
		background-position: 0px 0px;
	}
	@-webkit-keyframes off-zestatix {
    from { background-position: -720px; }
    to { background-position: 0px; }
	}
	@keyframes off-zestatix {
    from { background-position: -720px; }
    to { background-position: 0px; }
	}
	#text-version-zestatix {
		margin-top: 10px;
		line-height: 22px;
		z-index: 2;
		-webkit-user-select: none;
		-moz-user-select: none;
	}
	#zeStatix #text-zestatix {
		font-size: 30px;
		color: #fff;
	}
	#zeStatix #version-zestatix {
    font-size: 12px;
    float: right;
		color: #fff;
	}
	#card-control-zestatix {
		text-align: center;
		padding: 35px;
		background-color: #eff2f5;
	}
	#card-control-zestatix button + button, .control-history-zestatix button + button {
    margin-left: 10px;
	}
	#zeStatix input.id-element-zestatix {
		text-align: center;
		width: 100%;
		height: 34px;
	}
	#zeStatix .correct-this-zestatix {
		margin-left: 10px;
	}
	#sticky-zestatix {
		display: inline-block;
		float: right;
		position: -webkit-sticky;
		position: sticky;
		margin: 5px 10px 0px 0px;
		z-index: 10;
	}
	#sticky-zestatix button {
		position: relative;
		width: 40px;
		height: 40px;
		vertical-align: middle;
	}
	#zeStatix #sticky-zestatix button span {
		font-size: 20px;
	}
	#sticky-zestatix > *:not( :last-child ) {
		margin-right: 5px;
	}
	#card-zestatix {
		display: block;
		padding: 0px;
		margin: 20px 10px 0px 10px;
		max-width: 100%;
		opacity: 0;
		transition: opacity .4s;
	}
	.on-opacity-zestatix {
		opacity: 1 !important;
	}
	.card-body-zestatix {
		overflow: hidden;
		border-bottom: 1px solid #d7d7d7;
		position: relative;
		padding: 45px 25px 25px 25px;
		-webkit-transition: background-color .7s ease-out;
    -o-transition: background-color .7s ease-out;
    transition: background-color .7s ease-out;
	}
	.card-body-zestatix.wrong-zestatix {
    background-color: #f8d7da59 !important;
	}
	.control-element-zestatix {
		max-width: 1000px;
		min-width: 500px;
		width: 100%;
		position: absolute;
		left: 10px;
		top: 10px;
	}
	.control-element-zestatix > .dashicons {
		font-size: 25px;
		color: #fff;
		line-height: 35px;
		cursor: pointer;
		background-color: #646c74;
		width: 35px;
		height: 35px;
		-webkit-border-radius: 20px;
		border-radius: 20px;
		transition: background-color .3s;
	}
	.control-element-zestatix > .dashicons:not( :last-child ) {
		margin-right: 1%;
	}
	#zeStatix .control-element-zestatix .dashicons.active-zestatix {
		background-color: #31bcfb;
		color: #fff;
	}
	.name-element-zestatix {
		margin-top: 10px;
		margin-bottom: 25px;
	}
	.setting-zestatix > *:not(:last-child) {
		margin-bottom: 25px;
	}
	.setting-zestatix {
		padding: 0px 0px 20px 20px;
	}
	#zeStatix input.border-bottom-zestatix, #zeStatix textarea.border-bottom-zestatix {
		background-color: transparent;
    border: none;
    -webkit-border-radius: 0px;
    border-radius: 0px;
    border-bottom: 2px solid #ced4da;
	}
	#zeStatix input.border-bottom-zestatix:focus, #zeStatix textarea.border-bottom-zestatix:focus {
		border: none;
		border-bottom: 2px solid #ced4da;
	}
	#zeStatix textarea {
		resize: none;
		word-break: break-all;
		-webkit-box-shadow: none;
    box-shadow: none;
    height: 46px;
		border-top-left-radius: 4px;
    border-top-right-radius: 4px;
		padding: 6px;
	}
	select.select-width-zestatix {
		height: 40px;
		width: 170px;
	}
	.custom-width-zestatix {
		margin-left: 20px;
	}
	.custom-width-zestatix > *:not( :last-child ) {
		margin-bottom: 10px;
	}
	.unit-zestatix {
		position: relative;
    width: 100%;
	}
	#zeStatix label.unit-label-zestatix {
		display: block;
    font-weight: 700;
		font-size: 16px;
  	color: #505152;
		margin-bottom: 15px;
	}
	.unit-content-zestatix {
		padding-left: 20px;
	}
	.unit-content-zestatix > *:not(:last-child) {
		margin-bottom: 10px !important;
	}
	.unit-track-on-zestatix {
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-orient: horizontal;
		-webkit-box-direction: normal;
    -webkit-box-align: baseline;
  	-webkit-align-items: baseline;
    -ms-flex-align: baseline;
    align-items: baseline;
    margin-bottom: 5px;
	}
	#zeStatix .unit-track-on-zestatix > span {
		-webkit-align-self: flex-end;
    -ms-flex-item-align: flex-end;
    -ms-grid-row-align: flex-end;
    align-self: flex-end;
		cursor: pointer;
	}
	#zeStatix .unit-track-on-zestatix span + span {
		margin-left: 8px;
	}
	#zeStatix .input-track-on-zestatix {
		width: 100%;
		margin-right: 15px;
		padding: 1px;
		height: 26px;
	}
	.selector-element-zestatix {
		width: 100%;
		border: 2px solid #ced4da;
	}
	.wrong-selector-zestatix {
		border-color: #f5c6cb !important;
	}
	.perfect-selector-zestatix {
		border-color: #b8daff !important;
	}
	.control-selector-zestatix {
		height: 35px;
		text-align: center;
    background-color: #dde3e8;
    border-radius: 4px;
	}
	.control-selector-zestatix > span {
		line-height: 35px;
	}
	.control-selector-zestatix .dashicons-trash {
		cursor: pointer;
	}
	#zeStatix .alert-danger-zestatix {
		color: red;
    padding: 5px;
    background-color: #f9aeae;
    border-radius: 4px;
	}
	.table-zestatix {
		width: 100%;
		border-collapse: collapse;
		border: none;
	}
	.table-zestatix td {
    word-break: break-word;
		padding: 5px;
	}
	.table-zestatix tbody tr:nth-of-type(odd) {
	  background-color: #cbd2d4;
	}
	.table-example-zestatix {
		table-layout: fixed;
		margin-top: 10px;
	}
	.table-details td:nth-child( 2 ) {
		width: 50%
	}
	.table-details, .table-details-click {
		table-layout: auto;
	}
	.table-details-click {
		margin-top: 15px;
	}
	.table-details-click tr td {
    text-align: center;
	}
	.table-details-click tr td:nth-child( 7 ) {
		word-break: break-word;
	}
	.table-details-click tr:last-of-type {
		border-bottom: 1px solid #dee2e6;
	}
	td.control-history-zestatix {
		height: 60px;
		margin: 10px 0px;
		text-align: center;
	}
	.tr-del-zestatix {
    text-align: center;
	}
	.del-detail-zestatix label {
    display: block;
		margin: 10px 0px;
	}
	.table-zestatix td.charts-zestatix {
		padding: 15px;
	}
	.parent-charts-zestatix {
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
		-webkit-box-pack: center;
		-webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
		word-break: break-all;
	}
	.parent-charts-zestatix > * {
		text-align: center;
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
		-webkit-box-align: center;
		-webkit-align-items: center;
    -ms-flex-align: center;
	}
	.parent-charts-zestatix > *:not( :last-child ) {
		margin-bottom: 20px;
	}
	.parent-charts-zestatix canvas {
		width: 300px;
		height: auto;
	}
	.url-chart-zestatix {
		width: 100%;
	}
	.unit-legend-zestatix {
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-align: center;
		-webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
		padding: 5px;
		line-height: 1.5;
	}
	.color-legend-zestatix {
		-webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
		width: 20px;
		height: 20px;
	}
	.legend-stat-zestatix {
		-webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
		margin: 0px 10px;
	}
	.legend-key-zestatix {
		-webkit-flex-shrink: 1;
    -ms-flex-negative: 1;
    flex-shrink: 1;
	}
	.unit-legend-zestatix + .unit-legend-zestatix {
		border-top: 1px solid #dee2e6;
	}
	.parent-toggle-legend-zestatix {
		text-align: center;
		border-top: 1px solid #dee2e6;
		-webkit-border-radius: 0px 0px 5px 5px;
    border-radius: 0px 0px 5px 5px;
		cursor: pointer;
		-webkit-transition: all .2s linear;
		-o-transition: all .2s linear;
		transition: all .2s linear;
	}
	.parent-toggle-legend-zestatix:hover {
		background: #e5e5ea;
	}
	.toggle-legend-zestatix {
		-webkit-transition: all .3s linear;
		-o-transition: all .3s linear;
		transition: all .3s linear;
	}
	.active-arrow-zestatix {
		-webkit-transform: rotate( 180deg );
    -ms-transform: rotate( 180deg );
    transform: rotate( 180deg );
	}
	.popup-zestatix {
		background-color: #e3e7ec;
		overflow-y: auto;
		z-index: 999999;
		position: fixed;
		transform: translate( -50%, -50% );
    left: 50%;
    top: 50%;
		max-width: 500px;
		width: 100%;
		height: 80%;
		max-height: 500px;
	}
	.popup-header-zestatix {
		padding: 10px 15px;
		background-color: #dadde2;
		position: sticky;
    top: 0;
	}
	#zeStatix .popup-header-zestatix > * {
		font-size: 16px;
		font-weight: 600;
		user-select: none;
	}
	.popup-close-zestatix {
    float: right;
    cursor: pointer;
	}
	.popup-body-zestatix {
		padding: 15px 30px;
	}
	.popup-tema-zestatix:not(:last-child) {
		margin-bottom: 10px;
	}
	.popup-descript-img {
		width: 100%
	}
	#zeStatix .description-name-zestatix {
		display: block;
		text-align: center;
		cursor: pointer;
	}
	#zeStatix .active-description-name-zestatix {
		color: #222;
		font-weight: 500;
	}
	.parent-img-d-zestatix {
		text-align: center;
	}
	.parent-img-d-zestatix span {
		display: block;
		margin-top: 5px;
		font-weight: 500;
	}
	.description-zestatix > *:not(:last-child) {
		margin-bottom: 10px;
	}
	.parent-img-d-zestatix {
		margin-top: 10px;
	}
	.text-description-zestatix {
		line-height: 1.5;
		margin-left: 20px;
	}
	.text-description-zestatix p {
		margin: 10px 0px;
	}
	.text-description-zestatix ul {
		list-style: none;
		margin-top: 10px;
	}
	.text-description-zestatix ul ul {
		margin-left: 20px;
	}
	.text-description-zestatix li::before {
		content: '-';
		margin-right: 5px;
	}
	.number-d-zestatix {
		display: inline-block;
    text-align: center;
    min-width: 26px;
    line-height: 26px;
    background: #6fff00;
    margin-right: 5px;
	}
	#zeStatix .navg-label-zestatix {
    display: block;
    font-size: 16px;
    line-height: 1.5;
		cursor: pointer;
	}
	.overley-zestatix {
		position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    z-index: 99999;
    background-color: rgba( 0, 0, 0, 50% );
	}
	#zeStatix span.blink-cursor-zestatix {
		font-size: 14px;
		opacity: 1;
		-webkit-animation: blink-zestatix 0.7s infinite;
		-moz-animation: blink-zestatix 0.7s infinite;
		animation: blink-zestatix 0.7s infinite;
	}
	@keyframes blink-zestatix {
		0% { opacity: 1; }
		50% { opacity: 0; }
		100% { opacity: 1; }
	}
	@-webkit-keyframes blink-zestatix {
		0% { opacity: 1; }
		50% { opacity: 0; }
		100% { opacity: 1; }
	}
	.visible-charts-zestatix, .custom-width-zestatix, .alert-danger-zestatix, .tr-del-zestatix, .description-zestatix, #wpfooter, .table-example-zestatix, #navigator-popup-zestatix, #description-popup-zestatix {
		display: none;
	}
	.active-zestatix {
		color: #007bff;
	}
	.center-y-zestatix {
		position: absolute;
		top: 50%;
		-webkit-transform: translateY( -50% );
		-ms-transform: translateY( -50% );
		transform: translateY( -50% );
	}
	#zeStatix .center-x-y-zestatix {
		position: absolute;
		top: 50%;
		left: 50%;
		-webkit-transform: translate( -50%,-50% );
		-ms-transform: translate( -50%,-50% );
		transform: translate( -50%,-50% );
	}
	@media ( max-width: 600px ) {
    #logo-zestatix {
			display: none;
		}
		.table-zestatix td {
			padding: 10px 5px;
		}
		#card-header-zestatix {
			height: 50px;
		}
    #card-control-zestatix button + button, .control-history-zestatix button + button {
			display: block;
			margin-left: auto;
			margin-right: auto;
			margin-top: 10px;
		}
	}
	@media ( max-width: 500px ) {
		#zeStatix {
			margin-right: 0px;
		}
		#zeStatix div.card-body-zestatix {
			padding: 45px 10px 25px 10px;
		}
		.setting-zestatix {
			padding-left: 10px;
		}
		.unit-content-zestatix {
			padding-left: 10px;
		}
		#card-control-zestatix {
			padding: 20px;
		}
	}
	@media (max-width: 375px) {
		.auto-fold #wpcontent {
			padding-left: 0px;
		}
		#sticky-zestatix {
			margin-right: 5px;
		}
		#zeStatix .input-track-on-zestatix::-webkit-input-placeholder {
			opacity: 0;
    }
    #zeStatix .input-track-on-zestatix::-ms-input-placeholder {
    	opacity: 0;
    }
    #zeStatix .input-track-on-zestatix::-moz-placeholder {
    	opacity: 0;
    }
    #zeStatix .input-track-on-zestatix:-ms-input-placeholder {
    	opacity: 0;
    }
    #zeStatix .input-track-on-zestatix::placeholder {
    	opacity: 0;
    }
		.parent-charts-zestatix canvas {
			width: 100%;
		}
		.text-description-zestatix {
			margin-left: 0rem;
		}
		#zeStatix button:not( #sticky-zestatix button ) {
			width: 100%;
		}
		#zeStatix button:not( #sticky-zestatix button ) * {
			font-size: 12px;
		}
	}
</style>

<div id="zeStatix">
	<div id="preloader-zestatix">
		<div id="infinity-preloader-zestatix" class="center-x-y-zestatix">
			<div class="bg-zestatix">
		    	<div class="left-bg-zestatix"></div>
		    	<div class="right-bg-zestatix"></div>
			</div>
			<div class="fg-zestatix">
		    	<div class="top-left-rect-zestatix">
		        	<div></div>
		    	</div>
		    	<div class="bottom-right-rect-zestatix">
		        	<div></div>
		    	</div>
		    	<div class="top-right-rect-zestatix">
		        	<div></div>
		    	</div>
		    	<div class="bottom-left-rect-zestatix">
		        	<div></div>
		    	</div>
			</div>
		</div>
	</div>
	<div id="navigator-popup-zestatix" class="parent-popup-zestatix">
  	<div class="popup-zestatix">
			<div class="popup-header-zestatix">
        <span class="popup-title-zestatix">NAVIGATOR</span>
        <span class="popup-close-zestatix">&times;</span>
  		</div>
    	<div class="popup-body-zestatix"></div>
    </div>
		<div class="overley-zestatix"></div>
	</div>
	<div id="description-popup-zestatix" class="parent-popup-zestatix">
		<div class="popup-zestatix">
			<div class="popup-header-zestatix">
        <span class="popup-title-zestatix">DESCRIPTION</span>
				<span class="popup-close-zestatix">&times;</span>
  		</div>
  		<div class="popup-body-zestatix">
    		<div class="popup-tema-zestatix">
    			<label class="description-name-zestatix">ABOUT zeStatix</label>
    			<div class="description-zestatix">
    				<div class="text-description-zestatix">
    					<p>zeStatix is counter clicks for the specified HTML elements.</p>
      					<p><b>Features</b></p>
								<ul>
									<li>No additional servers are used.</li>
									<li>It is possible to select any item on the page.</li>
									<li>Statistics of elements are kept by the number of clicks:
										<ul>
											<li>click</li>
											<li>views</li>
											<li>click time</li>
											<li>location</li>
											<li>IP</li>
											<li>device</li>
											<li>width device</li>
											<li>width browser</li>
										</ul>
									</li>
								</ul>
      					<p><b>Why track click statistics</b></p>
								<ul>
									<li>Proper Design page.</li>
									<li>Web analytics.</li>
								</ul>
      					<p><b>Involved</b></p>
								<ul>
									<li>WordPress</li>
									<li>jQuery</li>
									<li>geoPlugin</li>
								</ul>
					   </div>
					</div>
				</div>
				<div class="popup-tema-zestatix">
  				<label class="description-name-zestatix">CREATE FIRST ELEMENT</label>
      		<div class="description-zestatix">
	    			<div class="text-description-zestatix">
							<p>To start tracking element statistics, use the "SELECT ELEMENT" button (section a. Image 1.2 item 1) or the "PRINT ELEMENT" button (section a. Image 1.2 item 2).</p>
							<p>If selected "SELECT ELEMENT".
							Hover over the desired element in PREVIEWER (section b. Image 2.1, item 2) to confirm the selection, leave the mouse cursor on the element (2.5 sec) and confirm the selection with the "YES" button.</p>
							<p>An element needs to be observed only on certain pages, use the "TRACK ON" menu (section b. Image 2.1, item 8).</p>
							<p>You need to refine an element, use the optional jQuery selectors.</p>
							<p>You need to track an element only on devices with a certain width, use the "BROWSER WIDTH" menu.</p>
							<p>If the item is added by "PRINT ELEMENT".
							Enter the jQuery selector in the text box (section c. Image 3.1, item 10).</p>
							<p>If an element needs to be observed only on certain pages, use the “TRACK ON” menu (section c. Image 3.1, item 2).</p>
							<p>If you need to track an element only on devices with a certain width, use the "BROWSER WIDTH" menu (section c. Image 3.1, item 7).</p>
  					</div>
					</div>
				</div>
				<div class="popup-tema-zestatix">
	  			<label class="description-name-zestatix">a. MAIN SETTINGS</label>
	  			<div class="description-zestatix">
	  				<div class="parent-img-d-zestatix">
	  					<img src="<?= plugins_url( 'zestatix/img/description/main-settings-1.jpg' ) ?>" class="popup-descript-img">
	  					<span>1.1</span>
						</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">1</span>Toggle enable or disable plugin.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">2</span>Save settings button.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">3</span>Description.
	  				</div>
	  			</div>
	  			<div class="description-zestatix">
	  				<div class="parent-img-d-zestatix">
	  					<img src="<?= plugins_url( 'zestatix/img/description/main-settings-2.jpg' ) ?>" class="popup-descript-img">
	  					<span>1.2</span>
						</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">1</span>
	  					Go in menu of selection element. (section b).
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">2</span>
	  					Add form to element (section c).
	  				</div>
					</div>
	  		</div>
	  		<div class="popup-tema-zestatix">
	  			<label class="description-name-zestatix">b. SELECT ELEMENT</label>
	  			<div class="description-zestatix">
	  				<div class="parent-img-d-zestatix">
	    				<img src="<?= plugins_url( 'zestatix/img/description/select-element-1.jpg' ) ?>" class="popup-descript-img">
	    				<span>2.1</span>
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">1</span>PANEL.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">2</span>PREVIEWER.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">3</span>Go back to settings page.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">4</span>Save settings button.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">5</span>Name for element. Optional setting.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">6</span>
							Add or remove identification items for more correct results.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">7</span>
							Selector (jQuery) of the selected element (10).
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">8</span>
							Selection of pages on which the element will be monitored.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">9</span>
							Choose browser width at which to fix click.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">10</span>
							Selected element. To select an element, hover over  and click.
	  				</div>
	  			</div>
	  		</div>
	  		<div class="popup-tema-zestatix">
	  			<label class="description-name-zestatix">c. FORM FOR ELEMENT</label>
	  			<div class="description-zestatix">
	  				<div class="parent-img-d-zestatix">
	  					<img src="<?= plugins_url( 'zestatix/img/description/card-element-1.jpg' ) ?>" class="popup-descript-img">
	  					<span>3.1</span>
						</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">1</span>
							Delete form.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">2</span>
							Toggle pause or tracking.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">3</span>
							Toggle show or hide settings.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">4</span>
							Toggle show or hide charts.
	  				</div>
	  			</div>
	  			<div class="description-zestatix">
	  				<div class="parent-img-d-zestatix">
	  					<img src="<?= plugins_url( 'zestatix/img/description/card-element-2.jpg' ) ?>" class="popup-descript-img">
	  					<span>3.2</span>
						</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">1</span>
							Name for element. Optional setting.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">2</span>
							Tracking settings.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">3</span>
							Address page on which to monitor element.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">4</span>
							Button allows you to add all subdirectories to the list of monitored.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">5</span>
							Remove page from list.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">6</span>
							Add page to tracking list.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">7</span>
							Choose browser width at which to fix click.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">8</span>
							Any width - fixation at any width<br>
					Custom width - you can specify the width of the browser window.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">9</span>
							min width - browser window width not less than specified.<br>
							max width - browser window width no more than specified.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">10</span>
							Selector (jQuery) needed for element identification.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">11</span>
							The number of characters of the selector and the maximum number of characters. Trash can icon used to clear selector.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">12</span>
							Show or hide auxiliary table.
	  				</div>
	  			</div>
	  			<div class="description-zestatix">
	  				<div class="parent-img-d-zestatix">
	    				<img src="<?= plugins_url( 'zestatix/img/description/card-element-3.jpg' ) ?>" class="popup-descript-img">
	    				<span>3.3</span>
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">1</span>
							Status tracked or paused. Switches see image 3.1 [ 2 ].
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">2</span>
							Total clicks.
	  				</div>
	  				<div class="text-description-zestatix">
	  					<span class="number-d-zestatix">3</span>
							Number of clicks of users with different IP.
    				</div>
    				<div class="text-description-zestatix">
    					<span class="number-d-zestatix">4</span>
							Element creation date.
    				</div>
    				<div class="text-description-zestatix">
    					<span class="number-d-zestatix">5</span>
							Ring chart for visitor countries.
    					</div>
    				<div class="text-description-zestatix">
    					<span class="number-d-zestatix">6</span>
							Legend for a pie chart - color on the chart, quantity, percentage, location.
    				</div>
    				<div class="text-description-zestatix">
    					<span class="number-d-zestatix">7</span>
							Ring chart for visitor device.
    				</div>
    				<div class="text-description-zestatix">
    					<span class="number-d-zestatix">8</span>
							Ring chart for pages click event.
    				</div>
    				<div class="text-description-zestatix">
    					<span class="number-d-zestatix">9</span>
							Switch show or hide statistics details table.
    				</div>
    				<div class="text-description-zestatix">
    					<span class="number-d-zestatix">10</span>
							Clear statistics history.
    				</div>
  				</div>
    		</div>
    	</div>
		</div>
		<div class="overley-zestatix"></div>
	</div>
	<div id="card-zestatix">
		<div id="sticky-zestatix">
			<button id="save-btn-zestatix" class="button-zestatix" title="<?php esc_html_e( 'SAVE', 'zestatix' ) ?>">
				<span class="center-x-y-zestatix dashicons dashicons-yes"></span>
			</button>
			<button id="navg-btn-zestatix" class="button-zestatix" title="<?php esc_html_e( 'NAVIGATOR', 'zestatix' ) ?>">
				<span class="center-x-y-zestatix dashicons dashicons-location"></span>
			</button>
			<button id="descrption-btn-zestatix" class="button-zestatix" title="<?php esc_html_e( 'DESCRIPTION', 'zestatix' ) ?>">
				<span class="center-x-y-zestatix">?</span>
			</button>
		</div>
		<div id="card-header-zestatix">
			<div id="parent-toggler-zestatix">
				<div id="toggler-zestatix" class="toggler-zestatix-on center-y-zestatix" alt="toggler"></div>
			</div>
			<input type="hidden" id="toggler-value-zestatix" value="<?= get_option( 'zestatix_toggle' ) ?>">
			<div id="logo-zestatix" class="center-x-y-zestatix">
				<div class="center-x-y-zestatix" id="logo-img-zestatix"></div>
				<div id="text-version-zestatix" class="center-x-y-zestatix">
					<span id="text-zestatix">zeStatix</span>
					<br><span id="version-zestatix"><?php esc_html_e( 'version', 'zestatix' ) ?> 1.1.0.1</span>
				</div>
				<a href="http://x9618502.beget.tech/" target="_blank"></a>
			</div>
		</div>
		<div id="card-control-zestatix">
			<button id="btn-select-element-zestatix" class="button-zestatix"><span><?php esc_html_e( 'SELECT ELEMENT', 'zestatix' ) ?></span></button><button id="btn_add_element_zestatix" class="button-zestatix"><span><?php esc_html_e( 'PRINT ELEMENT', 'zestatix' ) ?></span></button>
		</div>
	</div>
</div>

<?php
	require_once( INCLUDES_DIR_ZESTATIX . 'table_example.php' );

	$select_zestatix = get_option( 'zestatix_data_select' );

	( $select_zestatix ) ? exit_select_zestatix() : $select_zestatix = 'false';
?>

<script> jQuery( document ).ready( function( $ ) {
	'use strict';

	class DonutChart {
		constructor( options ) {
			this.canvas = options.canvas;

			this.text = options.text.toUpperCase();

			this.total_value = options.data.reduce( ( acc, val ) => acc + val[ Object.keys( val )[ 0 ] ], 0 );

			this.options = options;

			this.ctx = this.canvas.getContext( '2d' );

			this.colors = ['#e5431a', '#fd6724', '#fefa3a', '#69f533', '#58cd2b', '#20b58a', '#44b4da', '#1721d3', '#722cf6', '#dc35d9', '#e22f96'];

			this.limiter = 10;

			this.init();
		}

    init() {
			if ( this.options.data.length > this.limiter ) {
				let other = this.options.data.splice( this.limiter );

				// добавить сумму значений оставшихся частей кольца
				this.options.data.push( { other: other.reduce( ( acc, val ) => acc + val[ Object.keys( val )[ 0 ] ], 0 ) } )
			}

    	this.draw();

      if ( this.options.hole_size ) {
        this.draw_value_ring(
          this.ctx,

          this.canvas.width / 2,

          this.canvas.height / 2,

          this.options.hole_size * Math.min( this.canvas.width / 2, this.canvas.height / 2 ),

          0,

          2 * Math.PI,

          '#fff')
      }

    	if ( this.text ) this.add_text();
    }

    draw() {
      let color_index = 0,

      	start_angle = Math.PI * 1.5;

      for ( let data of this.options.data ) {
				let val = data[ Object.keys( data )[ 0 ] ],

        	slice_angle = 2 * Math.PI * val / this.total_value;

				this.draw_value_ring(
          this.ctx,

          this.canvas.width / 2,

          this.canvas.height / 2,

          Math.min( this.canvas.width / 2, this.canvas.height / 2 ),

          start_angle,

          start_angle + slice_angle,

          this.colors[ color_index ] );

				this.legend( data, color_index );

        start_angle += slice_angle;

				( this.colors.length == color_index + 1 ) ? color_index = 1 : color_index ++;
      }
    }

		draw_value_ring( ctx, centerX, centerY, radius, startAngle, endAngle, color ) {
	    ctx.fillStyle = color;

	    ctx.beginPath();

	    ctx.moveTo( centerX, centerY );

	    ctx.arc( centerX, centerY, radius, startAngle, endAngle );

	    ctx.closePath();

	    ctx.fill();
		}

		legend( data, color_index ) {
			let html = '',

				percentage = Math.round( 100 * data[ Object.keys( data )[ 0 ] ] / this.total_value );

      html += '<div class="unit-legend-zestatix"><span class="color-legend-zestatix" style="background-color:' + this.colors[ color_index ] + ';"></span><span class="legend-stat-zestatix">' + data[ Object.keys( data )[ 0 ] ] + ' / ' + percentage + '\%</span><span class="legend-key-zestatix">' + Object.keys( data )[ 0 ] + '</span></div>';

			$( this.options.legend ).append( html )
    }

    add_text() {
    	this.ctx.font = '13px Roboto';

    	this.ctx.textAlign = 'center';

    	this.ctx.textBaseline = 'middle';

    	this.ctx.fillStyle = '#454749';

    	this.ctx.fillText( this.text, this.canvas.width / 2, this.canvas.height / 2 );
    }
  }

	const setting_zestatix = <?= json_encode( get_option( 'zestatix' ) ) ?> || [],

		data_select_zestatix = <?= $select_zestatix ?>,

		home_url = '<?= home_url( '/' ) ?>',

		clean_url_home = home_url.split( '://' )[1];

	let obj_details = <?= json_encode( DB_zeStatix::get_details_click() ) ?>;

	$( document.body )
		.on( 'click', '#zeStatix button', function( e ) {
			e.preventDefault()
		} )

		.on( 'click', '#save-btn-zestatix', function() {
				toggle_preloader();

				setTimeout( toggle_preloader, 1000 );

				save_data()
			}
		)

		.on( 'click', '#navg-btn-zestatix', function() {
			$( '#navigator-popup-zestatix' ).fadeToggle( 300 );

			let data = [];

	    $( '.id-element-zestatix:visible' ).each( function() {
	        if ( $( this ).val().length > 0 ) {
	          data.push( {
	            'elem': $( this ).val(),
	      			'elem_scroll': $( this ).parents( '.card-body-zestatix' ).offset().top
	        	} )
	        }
	    } );

			let html = '';

	    if ( data.length ) {
	      $.each( data, function( key, val ) {
	        html += '<label class="navg-label-zestatix" data-scroll="' + val.elem_scroll + '">' + val.elem + '</label>'
	      } )
	    } else {
				html = '<label id="not-name-element-zestatix"><?php esc_html_e( 'There are no names for navigation', 'zestatix' ) ?></label>'
			}

			$( '#navigator-popup-zestatix' ).find( '.popup-body-zestatix' ).html( html )
		} )

		.on( 'click', '.navg-label-zestatix', function() {
	    let scroll_height = $( this ).attr( 'data-scroll' );

	    $( 'html, body' ).animate( {
      	scrollTop: scroll_height
      }, 1000 );

      $( '#navigator-popup-zestatix' ).hide();
  	} )

		.on( 'click', '#descrption-btn-zestatix', function() {
			$( '#description-popup-zestatix' ).fadeToggle( 300 )
		} )

		.on( 'click', '.popup-close-zestatix', function() {
			$( this ).parents( '.parent-popup-zestatix' ).fadeOut( 300 )
		} )

		.on( 'click', '.overley-zestatix', function() {
			$( this ).parent().fadeOut( 300 )
		} )

		.on( 'click', '.btn-remove-element-zestatix', function() {
			$( this ).parents( 'div.card-body-zestatix' ).fadeOut( 600, function() {
				bg_color_body_card()
			} )
		} )

		.on( 'click', '.visible-setting-zestatix', function() {
			let elem_toggle_visible = $( this ).parents( '.card-body-zestatix' ).children( '.setting-zestatix' );

			setting_control_element( $( this ), elem_toggle_visible );

			height_textarea( elem_toggle_visible.find( '.selector-element-zestatix' ) );
		} )

		.on( 'click', '.visible-charts-zestatix', function() {
			let elem_toggle_visible = $( this ).parents( '.card-body-zestatix' ).children( '.details-zestatix' );

			setting_control_element( $( this ), elem_toggle_visible )
		} )

		.on( 'click', '.pause-zestatix', function() {
			let paste_state = $( this ).parents( '.card-body-zestatix' ).find( '.status-element-zestatix' ),

				state = $( this ).toggleClass( 'active-zestatix' ).hasClass( 'active-zestatix' ),

				text_state = ( state ) ? '<?php esc_html_e( 'tracked', 'zestatix' ) ?>' : '<?php esc_html_e( 'paused', 'zestatix' ) ?>';

			paste_state.fadeOut( 300, function() {
				$( this ).text( text_state ).fadeIn( 300 )
			} );

			$( this ).attr( 'title', text_state );

			$( this ).removeClass( 'dashicons-controls-pause dashicons-controls-play' ).addClass( () =>
				( state ) ? 'dashicons-controls-pause' : 'dashicons-controls-play'
			);

			$( this ).children( 'input[type=hidden]' ).val( Number( state ) )
		} )

		.on( 'click', '#btn-select-element-zestatix', function() {
				toggle_preloader();

				save_data( { select: 1 }, function( echo ) {
					if ( echo ) location.href = home_url
				} )
		} )

		.on( 'click', '#btn_add_element_zestatix', function() {
			add_card( create_card_settings(), 800 );

			bg_color_body_card()
		} )

		.on( 'keydown', '.input-number-valid-zestatix', function( e ) {
			if ( !( e.keyCode == 8 || e.keyCode > 47 && e.keyCode < 58 ) ) {
		 		e.preventDefault();
			}
		} )

		.on( 'input', '.input-track-on-zestatix', function() {
			height_textarea( $( this ) )
		} )

		.on( 'click', '.subdirectories-zestatix', function() {
			let input_track_on = $( this ).siblings( '.input-track-on-zestatix' ),

				check_class = $( this ).toggleClass( 'active-zestatix' ).hasClass( 'active-zestatix' );

			if ( check_class ) {
				$( this ).prop( 'title', '<?php esc_html_e( 'SUBDIRECTORIES: ENABLED', 'zestatix' ) ?>' );

				input_track_on.prop( 'placeholder', ' <?php esc_html_e( ' selected all pages', 'zestatix' ) ?>' )
			} else {
				$( this ).prop( 'title', '<?php esc_html_e( 'SUBDIRECTORIES: DISABLED', 'zestatix' ) ?>' );

				input_track_on.prop( 'placeholder', ' <?php esc_html_e( ' only home page', 'zestatix' ) ?>' )
			}
		} )

		.on( 'click', '.btn-add-unit-track-on', function() {
				$( unit_track_on() ).insertBefore( $( this ) ).hide().fadeIn( 300 );
		} )

		.on( 'change', '.select-width-zestatix', function() {
			let custom_width =  $( this ).siblings( '.custom-width-zestatix' ),

				input = $( this ).parent( '.unit-content-zestatix' ).find( 'input[ name ]' );

			if ( $( this ).val() == 'custom width' ) {
				custom_width.fadeIn( 300 );

				input.removeClass( 'removed_element_zestatix' )
			} else {
				custom_width.fadeOut( 300 );

				input.addClass( 'removed_element_zestatix' )
			}
	 	} )

		.on( 'input', '.selector-element-zestatix', function() {
			setting_selector( $( this ) )
		} )

		.on( 'click', '.btn-remove-unit-track-on-zestatix', function() {
			if ( $( this ).parents( '.unit-content-zestatix' ).find( '.unit-track-on-zestatix:visible' ).length > 1 ) {
				let parent = $( this ).parents( '.unit-track-on-zestatix' );

				parent.children( 'textarea[ name ]' ).addClass( 'removed_element_zestatix' );

				parent.fadeOut( 300 )
			}
		} )

		.on( 'click', '.correct-this-zestatix', function() {
			let input_selector = $( this ).parents( '.unit-zestatix' ).find( '.selector-element-zestatix' ),

			// заменить \' или ' на  \'
			replace_val = input_selector.val().replace( /\\'|'/g, "\\'" );

			input_selector.val( replace_val );

			setting_selector( input_selector )
		} )

		.on( 'click', '.control-selector-zestatix .dashicons-trash', function() {
			let input = $( this ).parents( '.unit-content-zestatix' ).find( '.selector-element-zestatix' );

			input.val( '' );

			height_textarea( input );

			control_textarea( input )
		} )

		.on( 'click', '.btn-example-zestatix', function() {
			if ( !$( this ).siblings( '.table-example-zestatix' ).length ) {
				let table = $( '.table-example-zestatix:first' ).clone();

				$( table ).hide().insertAfter( $( this ) )
			}

			$( this ).siblings( '.table-example-zestatix' ).fadeToggle( 400, 'linear' );

			animate_text( $( this ) )
		} )

		.on( 'click', '.parent-toggle-legend-zestatix', function() {
			let arrow = $( this ).children( 'span.toggle-legend-zestatix' );

			arrow.toggleClass( 'active-arrow-zestatix' );

			if ( arrow.hasClass( 'active-arrow-zestatix' ) ) {
				$( this ).parents( '.legend-zestatix' ).find( '.unit-legend-zestatix:hidden' ).slideDown( 500 )
			} else {
				$( this ).parents( '.legend-zestatix' ).find( '.unit-legend-zestatix:nth-child( 1n+5 )' ).slideUp( 500 )
			}
		} )

		.on( 'click', '.btn-details-zestatix', function() {

			let parent_div = $( this ).parents( '.card-body-zestatix' ),

				key = encode_href( parent_div.find( '.selector-element-zestatix' ).val() ),

				parent_table = parent_div.find( '.table-details-click' ),

				data = obj_details[ key ]['clicks'];

			if ( typeof data == 'undefined' ) return;

			let check_class = $( this ).toggleClass( 'active-zestatix' ).hasClass( 'active-zestatix' );

			if ( check_class ) {
				if ( !parent_table.length ) {
					let table = '<table class="table-zestatix table-details-click"><tr scope="row"><td>#</td><td><?php esc_html_e( 'LOGIN', 'zestatix' ) ?></td><td><?php esc_html_e( 'URL', 'zestatix' ) ?></td><td class="device-zestatix"><?php esc_html_e( 'DEVICE', 'zestatix' ) ?></td><td title="<?php esc_html_e( 'DISPLAY', 'zestatix' ) ?> / <?php esc_html_e( 'BROWSER', 'zestatix' ) ?>"><?php esc_html_e( 'D / B', 'zestatix' ) ?></td><td><?php esc_html_e( 'LOCATION', 'zestatix' ) ?></td><td><?php esc_html_e( 'DATE', 'zestatix' ) ?></td></tr>';

					for ( let i = data.length - 1; i >= 0; i -- ) {
						let device = ( data[ i ][ 'device' ] == 'mobile' ) ? '<span class="dashicons dashicons-smartphone" title="<?php esc_html_e( 'mobile', 'zestatix' ) ?>"></span>' : '<span class="dashicons dashicons-laptop" title="<?php esc_html_e( 'PC', 'zestatix' ) ?>"></span>',

							url = data[ i ][ 'url' ].replace( clean_url_home, 'home/' );

						table += '<tr scope="row"><td>' + [ i + 1 ] + '</td><td>' + data[ i ][ 'login' ] + '</td><td>' + url + '</td><td>' + device + '</td><td title="<?php esc_html_e( 'DISPLAY', 'zestatix' ) ?> / <?php esc_html_e( 'BROWSER', 'zestatix' ) ?>">' +  data[ i ][ 'width' ] + '</td><td title="' + data[ i ][ 'ip' ] + '">' + data[ i ][ 'location' ] + '<br>' + data[ i ][ 'ip' ] + '</td><td>' + data[ i ][ 'date' ] + '</td></tr>'
					}

					table += '</table>';

					$( table ).hide().insertAfter( parent_div.find( '.table-details' ) ).fadeIn( 600 )
				} else {
					parent_table.fadeIn( 600 )
				}
			} else {
				parent_table.fadeOut( 600 );
			}

			animate_text( $( this ) )
		} )

		.on( 'click', '.btn-c-h-zestatix', function() {
	 		$( this ).parents( '.table-control-history-zestatix' ).siblings( '.tr-del-zestatix' ).toggle( 'slow', 'linear' );

			animate_text( $( this ) )
	 	} )

	 	.on( 'click', '.btn-del-ok-zestatix', function() {
			toggle_preloader();

 	    let card = $( this ).parents( '.card-body-zestatix' ),

				selector = encode_href( card.find( '.selector-element-zestatix' ).val() );

	 		$.post( ajaxurl, {
				action: 'del_data_element_zestatix',
				selector_zestix: selector },
				function( echo ) {
					delete obj_details[ selector ];

					let html_card = create_card_settings( create_setting( card )[0] );

					$( html_card ).insertBefore( card );

					card.remove();

					bg_color_body_card();

					toggle_preloader()
				}
			)
	 	} )

	 	.on( 'click', '#toggler-zestatix', function() {
			let check_class = $( this ).toggleClass( 'toggler-zestatix-off' ).hasClass( 'toggler-zestatix-off' );

			$( '#logo-img-zestatix' ).removeClass( 'logo-anim-on-zestatix logo-anim-off-zestatix' ).addClass( function() {
				if ( check_class ) {
					$( '#toggler-value-zestatix' ).val( '0' );

					return 'logo-anim-off-zestatix'
				} else {
					$( '#toggler-value-zestatix' ).val( '1' );

					return 'logo-anim-on-zestatix'
				}
			} )
		 } )

		.on( 'click', '.description-name-zestatix', function() {
 			$( this ).toggleClass( 'active-description-name-zestatix' ).siblings( '.description-zestatix' ).fadeToggle( 400 )
		} )

		.on( 'input', 'input[name ^= "browser_width/"]', function() {
			let str_length = $( this ).val().length,

				size = ( str_length <= 5 ) ? 5 : 1 + str_length;

			$( this ).attr( 'size', size )
		}
	);

	if ( Object.keys( setting_zestatix ).length ) {
		$.each( setting_zestatix, function( key, data ) {
			add_card( create_card_settings( data ) );

			if ( typeof obj_details[ data.selector ] != 'undefined' ) {
				$( '.visible-charts-zestatix:first' ).css( 'display', 'inline-block' );

				$( '.card-body-zestatix:first' ).append( details( obj_details[ data.selector ] ) )

				if ( typeof obj_details[ data.selector ][ 'clicks' ] !== 'undefined' ) {
					add_charts( obj_details[ data.selector ][ 'clicks' ] )
				}
			}

			setting_card( data )
		} );
	}

	if ( Object.keys( data_select_zestatix ).length ) {
		add_card( create_card_settings( data_select_zestatix ) );

		setting_card( data_select_zestatix );

		save_data()
	}

	function create_card_settings( data = {} ) {
		return `<div class="card-body-zestatix">${ control_element() + name_element( data.name || '' ) }<div class="setting-zestatix"> ${ selector_element( data.selector || '' ) + track_on( data.track_on || '' ) + browser_width( data.browser_width || '' ) }</div></div>`
	}

	function setting_card( data ) {
		if ( data.tracked == '0' ) $( '.pause-zestatix:first' ).trigger( 'click' );

		if ( data.visible?.charts == '0' ) $( '.visible-charts-zestatix:first' ).trigger( 'click' );

		if ( data.visible?.setting == '0' ) $( '.visible-setting-zestatix:first' ).trigger( 'click' );

		if ( data.browser_width?.type == 'custom width' ) $( '.select-width-zestatix:first' ).val( 'custom width' ).trigger( 'change' );

		if ( $( '.selector-element-zestatix:first' ).val().length ) setting_selector( $( '.selector-element-zestatix:first' ) )
	}

	function add_card( data, duration = 0 ) {
		$( data ).hide().insertAfter( '#card-control-zestatix' ).slideDown( duration )
	}

	function add_charts( data ) {
		let charts = [ 'login', 'location', 'width', 'device', 'url' ],

			data_charts = create_data_charts( data, charts ),

			add_row = '<tr scope="row"><td colspan="2" class="charts-zestatix"><div class="parent-charts-zestatix"></div></td></tr>';

		$( add_row ).insertBefore( '.table-details tr.table-control-history-zestatix:first' );

		if ( Object.keys( data_charts ).length ) {
			$.each( data_charts, function( chart, data ) {
				$( '<div class="unit-chart-zestatix ' + chart + '-chart-zestatix"><canvas class="canvas-charts-' + chart + '-zestatix"></canvas><div class="legend-zestatix legend-' + chart + '-zestatix"></div></div>' ).appendTo( '.parent-charts-zestatix:first' );

				let pie_chart = new DonutChart( {
	        canvas: 		  $( '.canvas-charts-' + chart + '-zestatix:first' ).get()[0],
	        data: 			  data,
	        hole_size: 		0.5,
	        text: 			  chart,
      	  legend: 	    $( '.legend-' + chart + '-zestatix:first' ).get()[0]
		    } )
			} );
		}
	}

	function create_data_charts( data, charts ) {
		let return_obj = {};

		$.each( charts, function( i, chart ) {
			let arr_chart = data.map( obj => obj[chart] );

			return_obj[chart] = sorting_desc( value_volume( arr_chart ) )
		} );

    return return_obj
	}

	function value_volume( arr ) {
		return arr.reduce( ( acc, val ) => {
			acc[ val ] = ( acc[ val ] || 0 ) + 1;

			return acc
		}, {} )
	}

	function sorting_desc( obj ) {
		let return_arr = [],

			sort_key = Object.keys( obj ).sort( ( a, b ) => obj[ b ] - obj[ a ] );

		for ( let i = 0; i < sort_key.length; i ++ ) {
			return_arr.push( { [ sort_key [ i ] ]: obj[ sort_key[ i ] ] } )
		}

		return return_arr
	}

	$( '.legend-zestatix .unit-legend-zestatix:nth-child( 1n+5 )' ).hide().parents( '.legend-zestatix' ).append( function() {
		if ( !$( this ).siblings( 'div.parent-toggle-legend-zestatix' ).length ) {
			return '<div class="parent-toggle-legend-zestatix"><span class="toggle-legend-zestatix dashicons dashicons-arrow-down-alt2"></span></div>'
		}
	} );

	function control_element() {
		return `<div class="control-element-zestatix">
			<span class="dashicons dashicons-trash btn-remove-element-zestatix" title="<?php esc_html_e( 'REMOVE', 'zestatix' ) ?>"></span>
			<span class="dashicons pause-zestatix active-zestatix dashicons-controls-pause" title="<?php esc_html_e( 'TRACKED', 'zestatix' ) ?>">
				<input type="hidden" name="tracked" value="1"/>
			</span>
			<span class="dashicons dashicons-admin-settings visible-setting-zestatix active-zestatix" title="<?php esc_html_e( 'SETTINGS', 'zestatix' ) ?>">
				<input type="hidden" name="visible/setting" value="1"/>
			</span>
			<span class="dashicons dashicons-chart-pie visible-charts-zestatix active-zestatix" title="<?php esc_html_e( 'STATISTICS', 'zestatix' ) ?>">
				<input type="hidden" name="visible/charts" value="1"/>
			</span>
		</div>`
	}

	function name_element( name = '' ) {
		return `<div class="name-element-zestatix">
			<input type="text" name="name" class="id-element-zestatix border-bottom-zestatix" value="${ escape_html( name ) }" placeholder="<?php esc_html_e( 'name', 'zestatix' ) ?>">
		</div>`
	}

	function track_on( data = {} ) {
		let html = `<div class="unit-zestatix">
			<label class="unit-label-zestatix">
				<?php esc_html_e( 'TRACK ON', 'zestatix' ) ?>
			</label>
			<div class="unit-content-zestatix">`;

		if ( Object.keys( data ).length ) {
			$.each( data, function( href, value ) {
				html += unit_track_on( +value.subdirectories, escape_html( href ) )
			} )
		} else {
			html += unit_track_on()
		}

		html += `<button class="button-zestatix btn-add-unit-track-on">
			<span class="not-toggle-class-zestatix">
				<?php esc_html_e( 'ADD PAGE', 'zestatix' ) ?>
			</span>
		</button>
		</div></div>`;

		return html;
	}

	function unit_track_on( subdirectories = 1, href = '' ) {
		return `<div class="unit-track-on-zestatix">
			<label>home/</label>
			<textarea name="track_on" class="border-bottom-zestatix input-track-on-zestatix" placeholder="${ ( subdirectories ) ? ' <?php esc_html_e( ' selected all pages', 'zestatix' ) ?>' : '<?php esc_html_e( ' only home page', 'zestatix' ) ?>' }">${ decodeURI( href.replace( clean_url_home, '' ) ) }</textarea>
			<span class="dashicons dashicons-editor-break subdirectories-zestatix ${ ( subdirectories ) ? 'active-zestatix' : '' }" title="${ ( subdirectories ) ? '<?php esc_html_e( 'SUBDIRECTORIES: ENABLED', 'zestatix' ) ?>' : '<?php esc_html_e( 'SUBDIRECTORIES: DISABLED', 'zestatix' ) ?>' }"></span>
			<span class="dashicons dashicons-trash btn-remove-unit-track-on-zestatix" title="<?php esc_html_e( 'REMOVE', 'zestatix' ) ?>"></span>
		</div>`
	}

	function selector_element( selector = '' ) {
		return `<div class="unit-zestatix">
			<label class="unit-label-zestatix"><?php esc_html_e( 'SELECTOR', 'zestatix' ) ?> jQuery( '</label>
			<div class="unit-content-zestatix selector-zestatix">
				<div style="position:relative;">
					<textarea name="selector" class="selector-element-zestatix" placeholder="<?php esc_html_e( 'enter element selector', 'zestatix' ) ?>">${ ( escape_html( decode_href( selector ) ) ) }</textarea>
					<div class="control-selector-zestatix">
						<span class="characters-zestatix">${ selector.length }</span>
						<span class="max-characters-zestatix"> / 255</span>
						<span class="dashicons dashicons-trash" title="<?php esc_html_e( 'clear selector', 'zestatix' ) ?>"></span>
					</div>
				</div>
				<div class="alert-danger-zestatix"></div>
				<div class="example-selector-zestatix">
					<button class="button-zestatix btn-example-zestatix">
						<span><?php esc_html_e( 'SHOW EXAMPLE', 'zestatix' ) ?></span>
						<span style="display:none"><?php esc_html_e( 'HIDE EXAMPLE', 'zestatix' ) ?></span>
					</button>
				</div>
			</div>
		</div>`
	}

	function browser_width( data = {} ) {
		let width_options = {
	    'any width': '<?php esc_html_e( 'any width', 'zestatix' ) ?>',
	    'custom width': '<?php esc_html_e( 'custom width', 'zestatix' ) ?>'
	    },

			html = `<div class="width-zestatix unit-zestatix">
				<label class="unit-label-zestatix"><?php esc_html_e( 'BROWSER WIDTH', 'zestatix' ) ?></label>
				<div class="unit-content-zestatix">
					<select name="browser_width/type" class="select-width-zestatix">`,

			data_length = ( Object.keys( data ).length ) ? true : false,

			min_width = ( data_length && typeof data.min !== 'undefined' ) ? data.min : '',

			max_width = ( data_length && typeof data.max !== 'undefined' ) ? data.max : '';

		$.each( width_options, function( key, val ) {
	    let selected = ( key == data.type || key == 'any width' ) ? 'selected' : '';
	    html += '<option value="' + key + '" ' + selected + '>' + val + '</option>'
	  } );

		html += `</select>
		<div class="custom-width-zestatix">
			<div>
				<label>min</label>
				<input type="text" size="5" name="browser_width/min" class="input-number-valid-zestatix border-bottom-zestatix removed_element_zestatix" value="${ min_width }">
				<label>px</label>
			</div>
			<div>
				<label>max</label>
				<input type="text" size="5" name="browser_width/max" class="input-number-valid-zestatix border-bottom-zestatix removed_element_zestatix" value="${ max_width }">
				<label>px</label>
			</div>
		</div></div>`;

		return html
	}

	function details( data ) {
		let btn_detail = ( data?.clicks ) ? '<button type="button" class="button-zestatix btn-details-zestatix"><span>' + '<?php esc_html_e( 'CLICKS DETAILS', 'zestatix' ) ?>' + '</span><span style="display:none">' + '<?php esc_html_e( 'HIDE DETAILS', 'zestatix' ) ?>' + '</span></button>' : '';

  	return `<div class="details-zestatix unit-zestatix">
			<table class="table-zestatix table-details">
				<tr scope="row">
					<td><?php esc_html_e( 'status', 'zestatix' ) ?>:</td>
					<td class="status-element-zestatix"><?php esc_html_e( 'tracked', 'zestatix' ) ?></td>
				</tr>
				<tr scope="row">
					<td><?php esc_html_e( 'date of creation', 'zestatix' ) ?>:</td>
					<td>${ data.created }</td>
				</tr>
				<tr scope="row">
					<td><?php esc_html_e( 'loaded', 'zestatix' ) ?>:</td>
					<td>
						<span>
							${ ( data?.count_loaded ) ? data.count_loaded : 0 } <?php esc_html_e( 'times', 'zestatix' ) ?>
						</span>
						<span>
							/ ${ ( data?.unique_url ) ? data.unique_url.length : 0 } <?php esc_html_e( 'pages', 'zestatix' ) ?>
						</span>
						<span>
							/ ${ ( data?.unique_user ) ? data.unique_user.length : 0 } <?php esc_html_e( 'visitors', 'zestatix' ) ?>
						</span>
					</td>
				</tr>
				<tr scope="row">
					<td><?php esc_html_e( 'clicks', 'zestatix' ) ?>:</td>
					<td>
						<span>
							${ ( data?.clicks ) ? data.clicks.length : 0 } <?php esc_html_e( 'times', 'zestatix' ) ?>
						</span>
						<span>
							/ ${ ( data?.clicks ) ? count_unique( data.clicks.map( obj => obj.url ) ) : 0 } <?php esc_html_e( 'pages', 'zestatix' ) ?>
						</span>
						<span>
							 / ${ ( data?.clicks ) ? count_unique( data.clicks.map( obj => { return ( obj.login.length ) ? obj.login : obj.ip } ) ) : 0 } <?php esc_html_e( 'visitors', 'zestatix' ) ?>
						</span>
					</td>
				</tr>
				<tr scope="row" class="table-control-history-zestatix">
					<td colspan="2" class="control-history-zestatix">
						${ btn_detail }
						<button type="button" class="button-zestatix btn-c-h-zestatix">
							<span><?php esc_html_e( 'CLEAR HISTORY', 'zestatix' ) ?></span>
							<span style="display:none"><?php esc_html_e( 'CANCEL', 'zestatix' ) ?></span>
						</button>
					</td>
				</tr>
				<tr class="tr-del-zestatix">
					<td colspan="2">
						<div class="del-detail-zestatix">
							<label class="del-label-zestatix"><?php esc_html_e( 'HISTORY WILL BE DELETED', 'zestatix' ) ?></label>
							<button type="button" class="button-zestatix btn-del-ok-zestatix">OK</button>
						</div>
					</td>
				</tr>
			</table>
		</div>`
	}

	function setting_selector( input ) {
		let alert_danger = input.parents( '.unit-content-zestatix' ).find( '.alert-danger-zestatix' ),

			card_element = input.parents( '.card-body-zestatix' ),

			valid = valid_selector( input.val(), alert_danger );

		input.removeClass( 'wrong-selector-zestatix perfect-selector-zestatix' ).addClass( () => {
			if ( valid ) {
				card_element.removeClass( 'wrong-zestatix' );

				if ( input.val() ) return 'perfect-selector-zestatix'
			} else {
				card_element.addClass( 'wrong-zestatix' );

				return 'wrong-selector-zestatix wrong-zestatix'
			}
		} );

		height_textarea( input );

		control_textarea( input )
	}

	function height_textarea( element ) {
		element.height( 5 ).height( element.prop( 'scrollHeight' ) )
	}

	function control_textarea( element ) {
		let control = element.siblings( '.control-selector-zestatix' ),

			counter = control.children( '.characters-zestatix' );

		counter.text( element.val().length )
	}

	function escape_html( text ) {
		if ( typeof text == 'undefined' || !text.length ) {
			return '';
		} else {
			return text
			  .replace( /&/g, '&amp;' )
			  .replace( /</g, '&lt;' )
			  .replace( />/g, '&gt;' )
			  .replace( /"/g, '&quot;' )
			  .replace( /'/g, '&#039;' )
	  	}
	}

	function valid_selector( value, alert_danger ) {
		value = $.trim( value );

		if ( !value.length ) {
			if ( alert_danger.is( ':visible' ) ) alert_danger.fadeOut( 300 );

			return true
		}

		if ( value.length > 255 ) {
			alert_danger.text( '<?php esc_html_e( 'maximum number of characters 255', 'zestatix' ) ?>' ).fadeIn( 300 );

			return false
		}

		if ( /[^\\]'/.test( value ) ) {
			alert_danger.html( '<?php esc_html_e( 'insert \ character before \'', 'zestatix' ) ?>' + '<button class="button-zestatix correct-this-zestatix">correct this</button>' ).fadeIn( 300 );

			return false
		}

		try {
      let selector = $( value )
    } catch( error ) {
    	return false
    }

    alert_danger.fadeOut( 300 );

    return true
	}

	function bg_color_body_card() {
		$( '#zeStatix .card-body-zestatix:not( .wrong-zestatix ):visible:odd' ).css( 'background-color', '#eff2f5' )
		$( '#zeStatix .card-body-zestatix:not( .wrong-zestatix ):visible:even' ).css( 'background-color', '#fff' );
	}

	function count_unique( arr ) {
		return arr.filter( ( item, pos, arr ) => arr.indexOf( item ) === pos ).length
	}

	function position_sticky() {
		let position_adminbar = $( '#wpadminbar' ).css( 'position' ),
			height_adminbar = $( '#wpadminbar' ).height();

		if ( position_adminbar == 'fixed' ) $( '#sticky-zestatix' ).css( 'top', height_adminbar + 5 )
		else $( '#sticky-zestatix' ).css( 'top', 5 )
	}

	function animate_text( element ) {
		element.attr( 'disabled', true );

		let parent_letter_default = element.children( 'span:visible' ),

			letter_default = parent_letter_default.html( parent_letter_default.text().replace( /(\s)|(.)/g, ( match, p1, p2 ) => { if ( p1 ) return '<span>&nbsp</span>'; else return '<span>'+p2+'</span>' }  ) ).find( 'span' ),

			delay = 1,

			clean_old_text = false;

		$( '<span class="blink-cursor-zestatix">|</span>' ).appendTo( element );

		for ( let i = letter_default.length; i >= 0; i -- ) {
			setTimeout( function() {
				$( letter_default[ i ] ).css( { display: 'none' } );

				if ( i == 0 ) clean_old_text = true;
			}, 50 * delay );

			delay ++
		}

		let add_new_text = setInterval( function() {
			if ( clean_old_text ) {
				clearInterval( add_new_text );

				let parent_letter_second = element.children( 'span:hidden' ),

					letter_second = parent_letter_second.html( parent_letter_second.text().replace( /(\s)|(.)/g, ( match, p1, p2 ) => { if ( p1 ) return '<span style="display: none">&nbsp</span>'; else return '<span style="display: none">'+p2+'</span>' }  ) ).find( 'span' );

				parent_letter_default.css( { display: 'none' } );

				parent_letter_second.css( { display: 'inline-block' } );

				delay = 1;

				$( letter_second ).each( function( i, letter ) {
					setTimeout( function() {
						$( letter ).css( { display: 'inline-block' } );

						if ( i == letter_second.length - 1 ) {
							element.find( '.blink-cursor-zestatix' ).remove();

							element.attr( 'disabled', false )
						}
					}, 50 * delay );

					delay++
				} )

			}
		}, 300 )
	}

	function create_setting( jq_obj = {} ) {
		let arr_obj_setting = [];

		if ( Object.keys( jq_obj ).length ) {
			jq_obj.each( function() {
			if ( !$.trim( $( this ).find( '[name="selector"]' ).val() ).length ) return;

			let unit_card = {};

			$( this ).find( '[ name ]:not( .removed_element_zestatix ), .control-element-zestatix input:hidden' ).map( function() {
				let path = $( this ).prop( 'name' ).split( '/' ),

					val = $.trim( $( this ).val() ),

					last_key = path.pop(),

					temp = path.reduce( ( acc, key ) => ( key in acc ) ? acc[ key ] : acc[ key ] = {}, unit_card );

					if ( last_key == 'track_on' ) {
						if ( typeof temp[ last_key ] !== 'object' ) temp[ last_key ] = {};

						Object.assign( temp[ last_key ], {
							// переменная "clean_url_home" используется что бы предотвротить пустую строку
							[ clean_url_home + val.replace( /\s+/gm, '' ) ]: {
								'subdirectories': ( $( this ).parents( '.unit-track-on-zestatix' ).find( '.subdirectories-zestatix' ).hasClass( 'active-zestatix' ) ) ? 1 : 0
							}
						} )
					} else if ( last_key == 'selector' ) {
						temp[ last_key ] = encode_href( val )
					} else {
						temp[ last_key ] = val
					}
			} );

			arr_obj_setting.unshift( unit_card )
		} )
		}

		return arr_obj_setting
	}

	function setting_control_element( element, elem_toggle_visible ) {
		let state = element.toggleClass( 'active-zestatix' ).hasClass( 'active-zestatix' );

		element.children( 'input[type=hidden]' ).val( Number( state ) );

		elem_toggle_visible.fadeToggle( 400 )
	}

	function toggle_preloader() {
		( $( '#preloader-zestatix' ).is( ':visible' ) ) ? $( '#card-zestatix' ).addClass( 'on-opacity-zestatix' ) : $( '#card-zestatix' ).removeClass( 'on-opacity-zestatix' );

		$( '#preloader-zestatix' ).fadeToggle( 800, 'linear' )
	}

	$( window ).resize( function() {
		position_sticky();

		setTimeout(
			function() {
				$( '.selector-element-zestatix:visible, .input-track-on-zestatix:visible' ).each( function() {
					height_textarea( $( this ) )
				} )
			},
		300 )
	} );

	function save_data( data, callback ) {
		$.post( ajaxurl, {
			action: 'setting_zestatix',
			arr_obj_setting_zestatix: create_setting( $( '#card-zestatix .card-body-zestatix:visible:not( .wrong-zestatix )' ) ),
			toggle_zestatix: $( '#toggler-value-zestatix' ).val(),
		 	...data },

			function( echo ) {
				if ( echo && callback ) callback( echo )
			}
		)
	}

	function decode_href( str ) {
		// [href="(this decode)"]
		let reg_ex = /(\[href=")(.+?)("\])/;

		if ( reg_ex.test( str ) ) {
			 str = str.replace( reg_ex, ( match, p1, p2, p3 ) => p1 + decodeURI( p2 ) + p3 )
		}

		return str
	}

	function encode_href( str ) {
		// [href="(this encode)"]
		let reg_ex = /(\[href=")(.+?)("\])/;

		if ( reg_ex.test( str ) ) {
			 str = str.replace( reg_ex, ( match, p1, p2, p3 ) => p1 + encodeURI( p2 ).toLowerCase() + p3 )
		}

		return str
	}

	bg_color_body_card();

	position_sticky();

	if ( $( '#toggler-value-zestatix' ).val() == '0' ) {
		$( '#toggler-zestatix' ).addClass( 'toggler-zestatix-off' );

		$( '#logo-img-zestatix' ).addClass( 'logo-anim-off-zestatix' )
	}

	toggle_preloader();
} ) </script>
