<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @include('components.pageHeader')
    <form class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" name="form" style="padding: 10px;">
        <div class="u-form-group u-form-partition-factor-2">
            <label class="u-label u-text-black u-label-1">ID</label>
            <input type="text" name="id_cliente" class="u-grey-75 u-input u-input-rectangle" readonly value="">
        </div>
        <div class="u-form-group u-form-partition-factor-2">
            <label class="u-label u-text-black u-label-2">Nombre</label>
            <input type="text" placeholder="Introduzca el nombre" name="nombre_cliente"
                class="u-grey-75 u-input u-input-rectangle" required value="">
        </div>
        <div class="u-form-group u-form-partition-factor-2">
            <label class="u-label u-text-black u-label-3">Apellido Paterno</label>
            <input type="text" placeholder="Introduzca el apellido paterno" name="ap_cliente"
                class="u-grey-75 u-input u-input-rectangle" value="{{ old('ap_cliente') }}">
        </div>
        <div class="u-form-group u-form-partition-factor-2">
            <label class="u-label u-text-black u-label-4">Apellido Materno</label>
            <input type="text" placeholder="Introduzca el apellido materno" name="am_cliente"
                class="u-grey-75 u-input u-input-rectangle" value="{{ old('am_cliente') }}">
        </div>
        <div class="u-form-group u-form-partition-factor-2">
            <label class="u-label u-text-black u-label-5">Teléfono</label>
            <input type="tel" placeholder="XXX XXX XXXX" name="telefono" class="u-grey-75 u-input u-input-rectangle">
        </div>
        <div class="u-form-email u-form-group u-form-partition-factor-2">
            <label class="u-label u-text-black u-label-6">Correo Electrónico</label>
            <input type="email" name="correo" class="u-grey-75 u-input u-input-rectangle"
                placeholder="correo@gmail.com">
        </div>
        <div class="u-align-center u-form-group u-form-submit">
            <button type="button" id="consultar-btn"
                class="u-black u-border-2 u-border-active-grey-40 u-border-grey-40 u-border-hover-grey-40 u-btn u-btn-submit u-button-style u-btn-2">
                Cerrar
            </button>
        </div>
    </form>
</body>

</html>