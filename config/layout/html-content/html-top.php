<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ description }}" />
    <meta name="keywords" content="{{ keyword }}" />
    <title>{{ title }}</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="{{ host }}app/assets/css/loader.css"/>
    <link rel="stylesheet" href="{{ host }}app/assets/css/share-button.css"/>
</head>
<body>
    
        <div id="myloader-receta" style="display:none;">
            <div id="myloader2-receta" class="text-center">
                <div class="loader-receta"></div>
                <div id="myloadermsg-receta">Por favor espere...</div>
            </div>
        </div>
        <div class="icon-container">
            <input type="checkbox" id="btn-mas">
            <div class="social-em redes">
                <a href="#" class="fa fa-share-alt size-icon" style="font-size:26px;"></a>
            </div>
            <div class="social-wa redes">
                <a href="#" class="fa fa-whatsapp size-icon"></a>
            </div>
            <div class="btn-mas">
                <label for="btn-mas" class="fa fa-plus"></label>
            </div>
        </div>
   

    <div class="main">