<!--
    Descripción: Página para consultar las categorías de productos. Muestra todas las categorías existentes en una tabla.
    Autor: Irma Mireya Castro Carranza
-->
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Consultar Categorías</title>

  @vite(['../resources/css/nicepage.css', '../resources/css/catalogos/consultarCategoria.css'])
  <script class="u-script" type="text/javascript" src="../../jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../../nicepage.js" defer=""></script>

  <meta name="theme-color" content="#478ac9">
</head>
<body data-path-to-root="../../" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
  @include('components.pageHeader')

  <section class="u-clearfix u-image u-section-1" id="sec-7822" data-image-width="626" data-image-height="391">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="{{ route('catalogoCategoria') }}" class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar </a>

      <!-- Mostrar mensaje de error si no se encuentra la categoría -->
      @if(session('error'))
        <p style="color: black;">{{ session('error') }}</p>
      @endif

      <!-- Mostrar todas las categorías en una tabla -->
      <div style="margin-top: 20px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 16px; background-color: #333; color: white;">
          <thead>
            <tr style="background-color: #222;">
              <th style="border: 1px solid #ddd; padding: 8px;">ID</th>
              <th style="border: 1px solid #ddd; padding: 8px;">Nombre</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categorias as $categoria)
              <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $categoria->id_categoria}}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $categoria->nom_categoria }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>

  @include('components.pageFooter')  
</body>
</html>
