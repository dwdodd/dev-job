        
        <div id="main">
            <table class="table">
                <thead>
                    <tr class="info">
                        <th>Usuario</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                    {{ data }}
                </tbody>
            </table>
        </div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        if( screen.width < 1024 ){
            $('.carousel-01').slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                // variableWidth: true,
            });
        }
        else{
            $('.carousel-01').slick({
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 3000,
            });
        }
    });
</script>