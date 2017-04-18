<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Plantilla de descarga</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
  </head>
  <body>

    <header class="clearfix">
      <div id="logo">
        <img src="images/logito.png" width="100px" height="250px">
      </div>
      <div id="company">
        <p>SECRETARÍA DE SEGURIDAD PÚBLICA DE OAXACA DIRECCIÓN GENERAL DE LA POLICÍA AUXILIAR, BANCARIA, INDUSTRIAL, Y COMERCIAL SERVICIOS GENERALES Y RECURSOS MATERIALES KARDEX GENERAL DE ENTRADA ALMACEN</p>
      </div>
      </div>
    </header>

    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <center><div class="to">ORDEN DE SALIDA</div></center>
          <h2 class="name">No de Pedido</h2>
          <div class="name">Recurso:</div>
          <div class="name">Folio</div>
        </div>
        <div id="invoice">
          <h1>INVOICE 3-2-1</h1>
          <div class="date">Date of Invoice: 01/06/2014</div>
          <div class="date">Due Date: 30/06/2014</div>
        </div>
        
      </div>

        <div id="cabeza">
            <table border="1">
          <thead>
            <tr>
              <th>Clave</th>
              <th>dias</th>
            </tr>
          </thead>
          
        </table><br><br>  
        </div>  
      <table border="1" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="unit">$40.00</td>
            <td class="qty">30</td>
            <td class="total">$1,200.00</td>
          </tr>
          <tr>
            <td class="no">02</td>
            <td class="desc"><h3>Website Development</h3>Developing a Content Management System-based Website</td>
            <td class="unit">$40.00</td>
            <td class="qty">80</td>
            <td class="total">$3,200.00</td>
          </tr>
          <tr>
            <td class="no">03</td>
            <td class="desc"><h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
            <td class="unit">$40.00</td>
            <td class="qty">20</td>
            <td class="total">$800.00</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>$5,200.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 25%</td>
            <td>$1,300.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>$6,500.00</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Gracias</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>

    <footer>
      aqui va la parte de firmas
    </footer>
  </body>
</html>