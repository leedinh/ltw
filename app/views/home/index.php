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




<div class="news1 position-absolute bg-light slide1">
    <object class="position-absolute" data="/assets/bg.svg">
    </object>
    <div class="row g-0 position-relative full-height">
        <div class="col-md-6 p-4 ps-md-0 message-container">
            <h1 class="message mt-0 display-1 p-4">EVERY CHOICE IS A JOURNEY</h1>
            <p class="message lead p-4">Let us be your backpacker.</p>
        </div>
        <div class="col-md-6 mb-md-0 p-md-4 full-height">
            <div class="img-descrip d-flex justify-content-center">
                <img src="/assets/cloud.png" class="position-absolute top-50 translate-middle-y" alt="..." />
                <img src="/assets/business-3d-man-lying-with-laptop.png"
                    class="position-absolute top-50 translate-middle-y" alt="..." />
            </div>
        </div>
    </div>
</div>


<?php
	include($path.'footer.php');

?>