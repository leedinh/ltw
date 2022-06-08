<?php
  $path = '../app/views/';
	include($path.'header.php');
  include($path.'navbar.php');
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap');


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

section {
    width: 100vw;
    height: 100vh;
    color: #fff;
    background: linear-gradient(-45deg, #33a6cc, #80b3ff, #33cca6, #8585e0);
    background-size: 400vw 400vh;
    position: relative;
    animation: change 10s ease-in-out infinite;
}
@keyframes change {
    0% {
        background-position: 0 50%;
    }

    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0 50%;
    }
}

.news {
    width: 75vw;
    padding: 2rem;
    background: rgba(255,255,255,0.3);
    border-radius: 50px;
}
.news h1 {
    font-family: 'Pacifico', cursive;
}
.news p {
    font-family: 'Roboto Mono', monospace;
}

.curve {
    position: absolute;
    height: 225px;
    width: 100%;
    bottom: 0;
}

.curve::before {
    content: '';
    display: block;
    position: absolute;
    border-radius: 100% 50%;
    width: 55%;
    height: 100%;
    background-color: white;
    transform: translate(85%, 60%);
}
.curve::after {
    content: '';
    display: block;
    position: absolute;
    border-radius: 100% 50%;
    width: 55%;
    height: 100%;
    background-color: linear-gradient(-45deg, #33a6cc, #80b3ff, #33cca6, #8585e0);
    animation: change 10s ease-in-out infinite;
    transform: translate(-4%, 40%);
    z-index: -1;
}

.custom-shape-divider-bottom-1653630899 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-bottom-1653630899 svg {
    position: relative;
    display: block;
    width: calc(129% + 1.3px);
    height: 138px;
}

.custom-shape-divider-bottom-1653630899 .shape-fill {
    fill: #FFFFFF;
}

</style>
    <section>
        <div class="row position-absolute top-50 start-50 translate-middle">
                <div class="col-6 message-container">
                    <h1 class="message mt-0 display-1 p-4">Every choice is a journey</h1>
                    <p class="message lead p-4">Let us be your backpacker.</p>
                    <a href="/home/products/all"></a>
                </div>
                <div class="col-6 img-laptop">
                    <img src="/assets/laptop.png" alt="">
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1653630899">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
    
</div>
    </section>




<?php
	include($path.'footer.php');

?>