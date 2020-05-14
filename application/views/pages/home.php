<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bathik Co.</title>
    <?php
        echo $css;
    ?>
	<style type="text/css">

.slider {
	border: 5px solid #efefef;
	position: relative;
	overflow: hidden;
	background: #efefef;
}

.slider {
	margin:20px auto;
	width: 768px;
	height: 450px;
}

.image-slider img {
	width: 768px;
	height: 450px;
	float: left;
}

.image-slider {
	position: absolute;
	width:3900px;

	/*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
	animation-name:slider;
	animation-duration:16s;
	animation-timing-function: ease-in-out;
	animation-iteration-count:infinite;
	-webkit-animation-name:slider;
	-webkit-animation-duration:16s;
	-webkit-animation-timing-function: ease-in-out;
	-webkit-animation-iteration-count:infinite;
	-moz-animation-name:slider;
	-moz-animation-duration:16s;
	-moz-animation-timing-function: ease-in-out;
	-moz-animation-iteration-count:infinite;
	-o-animation-name:slider;
	-o-animation-duration:16s;
	-o-animation-timing-function: ease-in-out;
	-o-animation-iteration-count:infinite;
}


/*saat gambar di hover oleh cursor mouse maka berhenti slide*/
.image-slider:hover {
	-webkit-animation-play-state:paused;
	-moz-animation-play-state:paused;
	-o-animation-play-state:paused;
	animation-play-state:paused; }
}

.image-slider img {
	float: right;
}

.slider:after {
	font-size: 150px;
	position: absolute;
	z-index: 12;
	color: rgba(255,255,255, 0);
	left: 300px;
	top: 80px;
	-webkit-transition: 1s all ease-in-out;
	-moz-transition: 1s all ease-in-out;
	transition: 1s all ease-in-out;
}

.slider:hover:after {
	color: rgba(255,255,255, 0.6);
}



@-moz-keyframes slider {
	0% {
		left: 0; opacity: 0;
	}
	2% {
		opacity: 1;
	}
	20% {
		left: 0; opacity: 1;
	}
	21% {
		opacity: 0;
	}
	24% {
		opacity: 0;
	}
	25% {
		left: -768px; opacity: 1;
	}
	45% {
		left: -768px; opacity: 1;
	}
	46% {
		opacity: 0;
	}
	48% {
		opacity: 0;
	}
	50% {
		left: -1536px; opacity: 1;
	}
	70% {
		left: -1536px; opacity: 1;
	}
	72% {
		opacity: 0;
	}
	74% {
		opacity: 0;
	}
	75% {
		left: -2304px; opacity: 1;
	}
	95% {
		left: -2304px; opacity: 1;
	}
	97% {
		left: -2304px; opacity: 0;
	}
	100% {
		left: 0; opacity: 0;
	}
}

@-webkit-keyframes slider {
	0% {
		left: 0; opacity: 0;
	}
	2% {
		opacity: 1;
	}
	20% {
		left: 0; opacity: 1;
	}
	21% {
		opacity: 0;
	}
	24% {
		opacity: 0;
	}
	25% {
		left: -768px; opacity: 1;
	}
	45% {
		left: -768px; opacity: 1;
	}
	46% {
		opacity: 0;
	}
	48% {
		opacity: 0;
	}
	50% {
		left: -1536px; opacity: 1;
	}
	70% {
		left: -1536px; opacity: 1;
	}
	72% {
		opacity: 0;
	}
	74% {
		opacity: 0;
	}
	75% {
		left: -2304px; opacity: 1;
	}
	95% {
		left: -2304px; opacity: 1;
	}
	97% {
		left: -2304px; opacity: 0;
	}
	100% {
		left: 0; opacity: 0;
	}
}


@keyframes slider {
	0% {
		left: 0; opacity: 0;
	}
	2% {
		opacity: 1;
	}
	20% {
		left: 0; opacity: 1;
	}
	21% {
		opacity: 0;
	}
	24% {
		opacity: 0;
	}
	25% {
		left: -768px; opacity: 1;
	}
	45% {
		left: -768px; opacity: 1;
	}
	46% {
		opacity: 0;
	}
	48% {
		opacity: 0;
	}
	50% {
		left: -1536px; opacity: 1;
	}
	70% {
		left: -1536px; opacity: 1;
	}
	72% {
		opacity: 0;
	}
	74% {
		opacity: 0;
	}
	75% {
		left: -2304px; opacity: 1;
	}
	95% {
		left: -2304px; opacity: 1;
	}
	97% {
		left: -2304px; opacity: 0;
	}

	100% {
		left: 0; opacity: 0;
	}
}

	</style>
</head>
<body>
<div class="header">
    <?php
        echo $header_home;
    ?>
</div>
<div class="body">
	<div class="slider">
      <div class="image-slider">
        <img src="<?php echo base_url('/assets/images/sale.png'); ?>" alt="Image 1">
        <img src="<?php echo base_url('/assets/images/sale.png'); ?>" alt="Image 2">
        <img src="<?php echo base_url('/assets/images/sale.png'); ?>" alt="Image 3">
        <img src="<?php echo base_url('/assets/images/sale.png'); ?>" alt="Image 4">
        <img src="<?php echo base_url('/assets/images/sale.png'); ?>" alt="Image 5">
      </div>
    </div>
</div>
</body>
</html>