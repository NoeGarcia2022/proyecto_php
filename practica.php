<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body {
    font-family: Arial, Helvetica, Verdana;
  }
    </style>
  </head>
  <body>
    <form action="procesar.php" method="post">
        <div class="container">
            <div class="row">
              <div class="col">
                <p class="text-center" ><b>LA EMPRESA, S.A. DE C.V</b><br>
               <b>ACTIVIDADES DE ASESORAMIENTO EMPRESARIAL</b><br>
              Departamento de San Salvador*El Salvador*Centroamerica <br>
              Telefono: (503)2222-1111*Fax: (503)2222-1111</p><br><br><br>
                <label class="fw-bold">Cliente: <input type="text" id="Nc" name="Nc" size="50" maxlength="40" required></label><br><br>
                <label for="direc" class="fw-bold">Direccion: <input type="text" name="direc" id="direc" size="47" required></label><br><br>
                <label for="depto" class="fw-bold">Departamento:</label>
                <input list="depto" name="depto" size="40" required>
                <datalist id="depto">
                    <option value="San Salvador">
                    <option value="La Paz">
                    <option value="San Vicente">
                    <option value="Sonsonate">
                    <option value="San Miguel">
                </datalist>
              </div>
              <div class="col">
                <p class="text-center"><b>COMPROBANTE DE CREDITO FISCAL</b><br>
              <b>Nª 00001</b> <br>
            <b>REGISTRO Nª 100001-1</b> <br>
          <b>NIT: 0614-290209-000-0</b> </p><br><br><br>
                <label for="fecha" class="fw-bold">Fecha: <input type="datetime-local" id="fecha" name="fecha" required></label><br><br>
                <label for="regist" class="fw-bold">Registro N°: <input type="number" name="regist" id="regist" required></label><br><br>
                <label for="nit" class="fw-bold">NIT: <input type="number" name="nit" id="nit" placeholder="0000-000000-000-0" required></label><br><br>
                <label for="giro" class="fw-bold">Giro: <input type="text" name="giro" id="giro" size="40" required></label><br><br>
                <label for="c_pago" class="fw-bold">Condiciones de Pago:</label>
                <input list="c_pago" name="c_pago" size="40" required>
                <datalist id="c_pago">
                    <option value="Pago al contado">
                    <option value="Pago anticipado">
                    <option value="Pago aplazado">
              </div>
            </div><br><br>
            <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col" class="text-center">CANTIDAD</th>
                    <th scope="col" class="text-center">DESCRIPCION</th>
                    <th scope="col" class="text-center">PRECIO UNITARIO</th>
                    <th scope="col" class="text-center">VENTAS EXENTAS</th>
                    <th scope="col" class="text-center">VENTAS EFECTAS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><input type="number" name="cantidad" id="cantidad" size="15" required></th>
                    <td><input type="text" name="descr" id="descr" size="50" required></td>
                    <td><input type="number" name="pU" id="pU" size="15" required></td>
                    <td><input type="number" name="vE" id="vE" size="15" required></td>
                    <td><input type="number" name="vEF" id="vEF" size="15" required></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="" id="" size="15"></th>
                    <td><input type="text" name="" id="" size="50"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="" id="" size="15"></th>
                    <td><input type="text" name="" id="" size="50"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="" id="" size="15"></th>
                    <td><input type="text" name="" id="" size="50"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="" id="" size="15"></th>
                    <td><input type="text" name="" id="" size="50"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                    <td><input type="text" name="" id="" size="15"></td>
                  </tr>
                </tbody>
              </table>
              <div class="container">
                <div class="row">
                  <div class="col ">
                    <p class="text-start">IMPRESOS SALVADOREÑOS - NIT: 0614-311208-001-1 <br>
                        Reg. N° 00001-1-Calle Principal N°1, san Salvador - Telefax: 2222-2223 <br>
                        Autorizacion Imprenta N° 001 - D.G.I.I. de Fecha: 31/12/2008
                    </p>
                  </div>
                  <div class="col order-5">
                    <p class="text-center">ORIGINAL: Cliente(blanco) <br>
                        Duplicado: Emisor(rosado) <br>
                        TRIPLICADO: Cliente(verde)
                    </p>
                  </div>
                  <div class="col order-1">
                    <p class="text-end">Fecha de Impresion: 01/01/2009 <br>
                        Resolucion N° <br>
                        Serie
                    </p>
                  </div>
                </div>
              </div> <br>
              <input type="submit" name="boton" value="ENVIAR" class="btn btn-primary"> 
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>