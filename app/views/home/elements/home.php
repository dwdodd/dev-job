        
        <div id="main">
            <h1>Home {{ cnt }}</h1>
        </div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        $('.autoplay').slick({
            slidesToShow: 6,
            autoplay: true,
            autoplaySpeed: 2500,
            // variableWidth: true,
        });

        if( screen.width < 1024 ){
            $('.carousel-doctor').slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 3000,
            });
        }
        else{
            $('.carousel-doctor').slick({
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 3000,
            });
        }
    });
</script>