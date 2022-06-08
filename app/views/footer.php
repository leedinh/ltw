<footer>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <h3>Location<div class="underline"><span></span></div>
                </h3>
                <div class="edit-location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.494668100784!2d106.65843061458902!3d10.773374292323592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec3c161a3fb%3A0xef77cd47a1cc691e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIC0gxJDhuqFpIGjhu41jIFF14buRYyBnaWEgVFAuSENN!5e0!3m2!1svi!2s!4v1653629953688!5m2!1svi!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

                </div>
            </div>
            <div class="col">
                <h3>Office <div class="underline"><span></span></div>
                </h3>
                <p class="clickmap" data-place='<iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.494668100784!2d106.65843061458902!3d10.773374292323592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec3c161a3fb%3A0xef77cd47a1cc691e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIC0gxJDhuqFpIGjhu41jIFF14buRYyBnaWEgVFAuSENN!5e0!3m2!1svi!2s!4v1653629953688!5m2!1svi!2s"
                width="400" height="140" style="border-radius:25px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>'> <i class="fa fa-map-marker" style="color:red"></i> 268 Ly Thuong Kiet Road, Ward 14, District 10 Ho Chi Minh City, Viet Nam</p>
                <p class="clickmap" data-place='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15677.976729923867!2d106.7270603!3d10.7734116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x66c7d73f6e1a8188!2sInspire%20Lab%20Technology!5e0!3m2!1svi!2s!4v1654628281382!5m2!1svi!2s" width="400" height="140" style="border-radius:25px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>' style="padding-top:10px"> <i class="fa fa-map-marker" style="color:red"></i> 42 B2 Sala Urban Area, An Loi Dong Ward, Thu Duc City, Viet Nam</p>
                <p style="padding-top:10px"> <i class="fa fa-phone" style="color:green"></i> (+84) 814-726-878 </p>

            </div>
            <div class="col">
                <h3>Newsletter <div class="underline"><span></span></div>
                </h3>
                <form class="mail-form">
                    <span class="material-symbols-outlined" id="mail">mail</span>
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit"><span class="material-symbols-outlined" id="arrow">arrow_forward</span></button>
                </form>
                <div class="social-icon">
                    <i class="fa fa-facebook-f" style="background: #3b5998;"></i>
                    <i class="fa fa-twitter" style="background: #00aced;"></i>
                    <i class="fa fa-whatsapp" style="background: #34bf49;"></i>
                    <i class="fa fa-pinterest" style="background: #cb2027;"></i>
                </div>
            </div>

        </div>
    </div>


</footer>
<style>
    body {
        min-height: 100vh;
    }

    .mail-form {
        padding-bottom: 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #ccc;
        margin-bottom: 50px;
    }

    .material-symbols-outlined {
        font-size: 25px;
        margin-right: 10px;
    }

    .mail-form input {
        width: 100%;
        background: transparent;
        color: #000;
        border: 0;
        outline: none;
    }

    .mail-form button {
        background: transparent;
        border: 0;
        outline: none;
        cursor: pointer;
    }

    .underline {
        margin-top: 0.5rem;
        width: 100%;
        height: 5px;
        background: #767676;
        border-radius: 3px;
        position: absolute;
        top: 25px;
        left: 0;
        overflow: hidden;
    }

    .underline span {
        width: 15px;
        height: 100%;
        background: #fff;
        border-radius: 3px;
        position: absolute;
        top: 0;
        left: 10px;
        animation: moving 2s linear infinite;
    }

    @keyframes moving {
        0% {
            left: -20px;
        }

        100% {
            left: 100%;
        }
    }

    .social-icon .fa {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        font-size: 20px;
        color: #fff;
        background: #000;
        margin-right: 15px;
        cursor: pointer;

    }


    footer {
        position: sticky;
        top: 100%;
        width: 100%;
        bottom: 0;
        /* background: linear-gradient(-30deg, #00093c, #2d0b00); */
        /* background: rgba(97, 180, 159,1); */
        color: #000;
        /* border-top-left-radius: 125px; */
        font-size: 13px;
        line-height: 10px;
        font-weight: 450;
    }

    footer .map {
        border-radius: 25px;
        height: 140px;

    }

    footer .row {
        width: 85%;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        justify-content: space-between;
        line-height: 1;

    }

    footer .col {
        flex-basis: 25%;
        margin: 2rem;
        line-height: 1.5;
    }

    footer i {
        position: relative;

    }

    footer .row p {
        font-size: 1rem;
        font-weight: 200px;
    }
    footer .clickmap{
        cursor: pointer;
    }
    footer .col h3 {
        width: fit-content;
        margin-bottom: 40px;
        position: relative;
    }

    footer .col {
        flex-basis: 25%;
        padding: 10px;
    }

    /* footer .col:nth-child(2), footer .col:nth-child(3){
    flex-basis: 15%;
} */
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.clickmap').click(function() {
            var place = $(this).attr('data-place');
            $('.edit-location').html(place);
        });
    });
</script>
</body>

</html>