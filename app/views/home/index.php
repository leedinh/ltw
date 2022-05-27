<?php
  $path = '../app/views/';
	include($path.'header.php');
  include($path.'navbar.php');
?>
<style>
.message-container {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.message-container .message {
    transform: translateX(5%);
}

.slideRight {
    transition: slideInFromLeft 3s ease-out;
}

@keyframes mySpinner {
    from {
        transform: rotate(0deg);
    }

    50% {
        transform: rotate(180deg);
    }

    to {
        transform: rotate(360deg);
    }
}

@keyframes slideInFromLeft {
    0% {
        transform: translateX(-100%);
    }

    100% {
        transform: translateX(0);
    }
}

@keyframes slideInFromTop {
    0% {
        transform: translateX(5%);
    }

    50% {
        transform: translateX(0%);
    }

    100% {
        transform: translateX(5%);
    }
}

.background-layer svg * {
    transition: fill 1s ease;
}

.background-layer:hover #line1 {
    fill: #404
}

.message {
    transition: transform 1s ease-in;
}

.slide1 {
    width: 100vw;
    height: 100vh;
}

.img-descip {
    height: auto;
}

.full-height {
    height: 100vh;
}
</style>







<?php
	include($path.'footer.php');

?>