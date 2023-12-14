
<?php
// Inicia la sesión 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Iconos Font Awesome -->
    <link rel="stylesheet" href="Assets/CSS/inicio.css">
    <link rel="stylesheet" href="Assets/CSS/futerheader.css">
</head>
<body>
    
  <!-- Navbar -->
  <?php
    if(isset($_SESSION["usuario"])){
      echo'<nav class = "navbar">';
      echo'<div class="logo">';
      echo'<img src="media/logo.png" alt="Logo de la empresa">';
      echo'<h1>NubeKids</h1>';
      echo'</div>';
      echo '<div class="navbar-links">';
      echo '<a href="index.php" class="nav-link">Inicio</a>';
      echo '<a href="profile.php" class="nav-link">Perfil</a>';
      echo '<button onclick="mostrarOcultarDiv()">CARRO</button>';
      echo '</div>';
      echo '</nav>';
    }else{
      echo'<nav class = "navbar">';
      echo'<div class="logo">';
      echo'<img src="media/logo.png" alt="Logo de la empresa">';
      echo'<h1>NubeKids</h1>';
      echo'</div>';
      echo '<div class="navbar-links">';
      echo '<a href="index.php" class="nav-link">Inicio</a>';
      echo '<a href="login.php" class="nav-link">Login</a>';
      echo '</div>';
      echo '</nav>';
    }
  ?>

  <div id="carro" class="carrito">
    <h2>Carrito Reserva</h2>
    <button onclick="sendmail()">Enviar Solicitud</button>
    <button onclick="dropcart()">Vaciar Carrito</button>
    <div id = "ttl" class = "ttl1"></div>
  </div>

  <div class = "cartprod">
  
  </div>

  <div class="main-cont">
     
    <!-- Slideshow -->
    <div class="sld-cont">
      <div class="sld-fade">
      </div>
      <div class="sld-fade">
      </div>
      <div class="sld-fade">
      </div>
    </div>


    <!-- Categorias de Productos -->
    <div class="cat">
      <div class="cat-links">
        <div class="cat-cont" onclick= "scrollToDiv('Toboganes')">
          <img src="media/cat1.png">
          <p>Toboganes</p>
        </div>
        <div class="cat-cont" onclick= "scrollToDiv('Castillos')">
          <img src="media/cat2.png">
          <p>Castillos</p>
        </div>
        <div class="cat-cont">
          <img src="media/cat3.png">
          <p>Tematicos</p>
        </div>
      </div>
    </div>
    
    <!-- Catalogo de productos -->

    <div class="catalog">
      <h2>Toboganes</h2>
        <div class="catalog-cat" id="Toboganes">         
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan cancha de futbol</h3>
              <div class="prod" >   
                  <img src="media/productos/9/1.jpg" onclick="openModal(productData9)">
              </div>
            <p>$95.000</p>   
            <button onclick="addtocart('Tobogan Cancha de Futbol', 95000)">Agregar al carrito</button>   
          </div>
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Doble</h3>
              <div class="prod" >   
                  <img src="media/productos/10/1.jpg" onclick="openModal(productData10)">
              </div>
            <p>$60.000</p>
            <button onclick="addtocart('Tobogan Doble', 60000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Castillo</h3>
              <div class="prod" >   
                  <img src="media/productos/11/1.jpg" onclick="openModal(productData11)">
              </div>
            <p>$80.000</p>
            <button onclick="addtocart('Tobogan Castillo', 80000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Maxi</h3>
              <div class="prod" >   
                  <img src="media/productos/12/1.jpg" onclick="openModal(productData12)">
              </div>
            <p>$65.000</p>
            <button onclick="addtocart('Tobogan Maxi', 65000)">Agregar al carrito</button>
          </div>
        </div>
        
        <div class="catalog-cat" id="Toboganes">
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Alto</h3>
              <div class="prod" >   
                  <img src="media/productos/13/1.jpg" onclick="openModal(productData13)">
              </div>
            <p>$70.000</p>
            <button onclick="addtocart('Tobogan Alto', 70000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Maxi Doble</h3>
              <div class="prod" >   
                  <img src="media/productos/14/1.jpg" onclick="openModal(productData14)">
              </div>
            <p>$90.000</p>
            <button onclick="addtocart('Tobogan Maxi Doble', 90000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Futbol</h3>
              <div class="prod" >   
                  <img src="media/productos/15/1.jpg" onclick="openModal(productData15)">
              </div>
            <p>$70.000</p>
            <button onclick="addtocart('Tobogan Futbol', 70000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Carrusel</h3>
              <div class="prod" >   
                  <img src="media/productos/16/1.jpg" onclick="openModal(productData16)">
              </div>
            <p>$60.000</p>
            <button onclick="addtocart('Tobogan Carrusel', 60000)">Agregar al carrito</button>
          </div>
        </div>
       
        <div class="catalog-cat" id="Toboganes">
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Mickey</h3>
              <div class="prod" >   
                  <img src="media/productos/17/1.jpg" onclick="openModal(productData17)">
              </div>
            <p>$50.000</p>
            <button onclick="addtocart('Tobogan Mickey', 50000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Piscina</h3>
              <div class="prod" >   
                  <img src="media/productos/19/1.jpg" onclick="openModal(productData18)">
              </div>
            <p>$80.000</p>
            <button onclick="addtocart('Tobogan Piscina',  80000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Spiderman</h3>
              <div class="prod" >   
                  <img src="media/productos/20/1.jpg" onclick="openModal(productData19)">
              </div>
            <p>$60.000</p>
            <button onclick="addtocart('Tobogan Spiderman', 60000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Dino</h3>
              <div class="prod" >   
                  <img src="media/productos/21/1.jpg" onclick="openModal(productData20)">
              </div>
            <p>$45.000</p>
            <button onclick="addtocart('Tobogan Dino', 45000)">Agregar al carrito</button>
          </div>
        </div>

        <div class="catalog-cat" id="Toboganes">
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Deportivo</h3>
              <div class="prod" >   
                  <img src="media/productos/22/1.jpg" onclick="openModal(productData21)">
              </div>
            <p>$60.000</p>
            <button onclick="addtocart('Tobogan Deportivo', 60000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Tobogan">
            <h3>Tobogan Trebol</h3>
              <div class="prod" >   
                  <img src="media/productos/23/1.jpg" onclick="openModal(productData22)">
              </div>
            <p>$70.000</p>
            <button onclick="addtocart('Tobogan Trebol', 70000)">Agregar al carrito</button>
          </div>
        </div>
        
        <h2>Castillos</h2>

        <div class="catalog-cat" id="Castillos">
          
          <div class="catalog-prod" id="Castillo">
            <h3>Castillo Estrellitas</h3>
              <div class="prod" >   
                  <img src="media/productos/1/1.jpg" onclick="openModal(productData1)">
              </div>
            <p>$50.000</p>
            <button onclick="addtocart('Castillo Estrellitas', 50000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Castillo">
            <h3>Castillo Dragon</h3>
              <div class="prod" >   
                  <img src="media/productos/2/1.jpg" onclick="openModal(productData2)">
              </div>
            <p>$50.000</p>
            <button onclick="addtocart('Castillo Dragon', 50000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Castillo">
            <h3>Castillo Cama</h3>
              <div class="prod" >   
                  <img src="media/productos/3/1.jpg" onclick="openModal(productData3)">
              </div>
            <p>$45.000</p>
            <button onclick="addtocart('Castillo Cama', 45000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Castillo">
            <h3>Castillo Crayones</h3>
              <div class="prod" >   
                  <img src="media/productos/4/1.jpg" onclick="openModal(productData4)">
              </div>
            <p>$50.000</p>
            <button onclick="addtocart('Castillo Crayones', 50000)">Agregar al carrito</button>
          </div>
        
        </div>
        <div class="catalog-cat" id="Castillos">
          
          <div class="catalog-prod" id="Castillo">
            <h3>Castillo Avengers</h3>
              <div class="prod" >   
                  <img src="media/productos/5/1.jpg" onclick="openModal(productData5)">
              </div>
            <p>$45.000</p>
            <button onclick="addtocart('Castillo Avengers', 45000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Castillo">
            <h3>Castillo Medieval</h3>
              <div class="prod" >   
                  <img src="media/productos/6/1.jpg" onclick="openModal(productData6)">
              </div>
            <p>$50.000</p>
            <button onclick="addtocart('Castillo Medieval', 50000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Castillo">
            <h3>Castillo Pirata</h3>
              <div class="prod" >   
                  <img src="media/productos/7/1.jpg" onclick="openModal(productData7)">
              </div>
            <p>$45.000</p>
            <button onclick="addtocart('Castillo Pirata', 45000)">Agregar al carrito</button>
          </div>
          <div class="catalog-prod" id="Castillo">
            <h3>Castillo Unicornio</h3>
              <div class="prod" >   
                  <img src="media/productos/8/1.jpg" onclick="openModal(productData8)">
              </div>
            <p>$55.000</p>
            <button onclick="addtocart('Castillo Unicornio', 55000)">Agregar al carrito</button>
          </div>
          </div>
        </div>
    </div>
	</div>
  
    <!-- modales de productos -->
    <div id="detalles-pop" class="modal">
      <div class="detalles-cont">
        <span class="close" onclick="closeModal()">&times;</span>
        <div id= "prodet" class="detalles-prod"> 
            
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <a href="https://www.instagram.com/tu_empresa" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="mailto:info@tu_empresa.com"><i class="far fa-envelope"></i></a>
  </footer>


  <script src="Assets/JS/try.js"></script>
  <script src="Assets/JS/carro.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.js"></script>
</body>
</html>