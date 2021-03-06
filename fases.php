<?php include("./includes/header.php") ?>
<link rel="stylesheet" href="styles/fases.css" />

    <main class="container">
      <h2>Fase Presaberes</h2>
      <hr />
      <h3>Etiquetas HTML</h3>
      <table>
        <thead>
          <tr>
            <th>Etiqueta</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>h1</td>
            <td>Define un encabezado de una sección</td>
          </tr>
          <tr>
            <td>article</td>
            <td>
              Define un bloque de contenido autónomo que puede existir en
              cualquier contexto. Puede tener su propio encabezado, pie de
              página, Útil para una lista de publicaciones de blog.
            </td>
          </tr>
          <tr>
            <td>aside</td>
            <td>
              Define un bloque de contenido relacionado con el contenido
              principal. Se muestra como una barra lateral por lo general.
            </td>
          </tr>
          <tr>
            <td>button</td>
            <td>Define un botón en el que se puede hacer clic .</td>
          </tr>
          <tr>
            <td>code</td>
            <td>Define un fragmento de código dentro de un bloque de texto.</td>
          </tr>
          <tr>
            <td>div</td>
            <td>
              Define un bloque genérico de contenido, que no tiene ningún valor
              semántico. Se utiliza para elementos de diseño como contenedores.
            </td>
          </tr>
          <tr>
            <td>footer</td>
            <td>Define el pie de página de una página web o sección.</td>
          </tr>
          <tr>
            <td>form</td>
            <td>Define un formulario interactivo con controles.</td>
          </tr>
          <tr>
            <td>header</td>
            <td>Define el encabezado de una página web o sección.</td>
          </tr>
          <tr>
            <td>input</td>
            <td>Define un control interactivo dentro de un formulario web.</td>
          </tr>
          <tr>
            <td>main</td>
            <td>
              Define el contenido principal de una página web. Se puede mostrar
              con una barra lateral.
            </td>
          </tr>
          <tr>
            <td>nav</td>
            <td>Define una sección con enlaces de navegación.</td>
          </tr>
          <tr>
            <td>img</td>
            <td>Define una imagen insertada en la página web.</td>
          </tr>
        </tbody>
      </table>
      <h3>Propiedades CSS</h3>
      <table>
        <thead>
          <tr>
            <th>Proiedad</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>align-content</td>
            <td>
              Define cómo se alinea cada línea dentro de un contenedor flexbox /
              grid. Solo se aplica si flex-wrap: wrapestá presente y si hay
              varias líneas de elementos de flexbox / grid.
            </td>
          </tr>
          <tr>
            <td>align-item</td>
            <td>
              Define cómo se alinean los elementos de flexbox según el eje
              transversal , dentro de una línea de un contenedor de flexbox.
            </td>
          </tr>
          <tr>
            <td>background-color</td>
            <td>Define el color del fondo del elemento.</td>
          </tr>
          <tr>
            <td>background-image</td>
            <td>Define una imagen como fondo del elemento.</td>
          </tr>
          <tr>
            <td>bottom</td>
            <td>
              Define la posición del elemento de acuerdo con su borde inferior.
            </td>
          </tr>
          <tr>
            <td>color</td>
            <td>Define el color del texto.</td>
          </tr>
          <tr>
            <td>dsiplay</td>
            <td>Establece el comportamiento de visualización del elemento.</td>
          </tr>
          <tr>
            <td>float</td>
            <td>
              Empuja el elemento hacia el lado izquierdo o derecho . Los
              siguientes hermanos se envolverán alrededor del elemento flotante.
            </td>
          </tr>
          <tr>
            <td>font-size</td>
            <td>Define el tamaño del texto.</td>
          </tr>
          <tr>
            <td>justify-content</td>
            <td>
              Define cómo se alinean los elementos de flexbox / grid según el
              eje principal , dentro de un contenedor de flexbox / grid.
            </td>
          </tr>
          <tr>
            <td>leter-spacing</td>
            <td>
              Define el espacio entre los caracteres de un bloque de texto.
            </td>
          </tr>
          <tr>
            <td>overflow</td>
            <td>
              Define cómo se muestra el contenido desbordado en los ejes
              horizontal y vertical.
            </td>
          </tr>
          <tr>
            <td>position</td>
            <td>Define el comportamiento de posición del elemento.</td>
          </tr>
        </tbody>
      </table>
    </main>
    <div class="container">
      <h2>Fase 2</h2>
      <hr />
      <p>
        La tienda “Osaka Electronics” se dedica a la comercialización de
        componentes electrónicos tales como: resistencias, transistores,
        circuitos integrados, sistemas embebidos, condensadores, bobinas y demás
        elementos de uso común en la industria, control y automatización
        electrónica de procesos. Pero en los últimos días ha tenido
        inconvenientes con respecto a la cantidad de productos que ofrece a sus
        clientes, ya que en existencia aparece una cantidad y cuando se verifica
        en bodega dicha cantidad de productos no coincide, este descontrol ha
        generado problemas con los clientes y con los proveedores, por lo
        anterior requiere un aplicativo web que le permita controlar las compras
        a proveedores, ventas al público, inventarios y cálculo de precio de
        venta al público incluyendo impuestos (%) y utilidad para la tienda (%).
      </p>
      <br />
      <h2>Formulación del problema</h2>
      <p>
        ¿Cómo manejar la salida y entrada de producto de la empresa y la
        facturación, control y utilidad de la empresa?
      </p>
      <br />
      <br />
      <h2>Objetivos</h2>
      <br />
      <h3>General:</h3>
      <p>
        Generar un sistema informático, que permita el control de inventario de
        productos para la empresa, que cumpla con estándares de seguridad, como
        roles administrativos y de usuarios, también que posea la funcionalidad
        de generar reportes contables que tengan las utilidades de los productos
        vendidos.
      </p>

      <br />
      <h3>Objetivos específicos:</h3>
      <ul>
        <li>
          Se desarrolla un aplicativo web, con procesos de autenticación y
          roles, para la administración e inventarios, facturación de productos
          y generación de reportes de ventas e inventarios diarios.
        </li>
        <li>
          Se realizará un levantamiento de requerimientos, para posteriormente
          asignar tareas al grupo de desarrolladores, trabajando bajo la
          metodología SCRUM, el sistema a desarrollar será un aplicativo web,
          basado el en patrón MVC.
        </li>
        <li>
          Este producto se desarrolla, con el alcance de solucionar los
          problemas de la empresa, con respecto al inventario y facturación, así
          facilitaremos el desempeño más ágil de los trabajadores.
        </li>
      </ul>
      <br />
      <br />
      <h2>Metodología de desarrollo</h2>
      <p>
        Teniendo en cuenta los requerimientos del software, se trabajará bajo la
        siguiente especificaciones.
      </p>
      <ul>
        <li>
          Diseñar la base de datos, para el sistema debidamente normalizada para
          un óptimo funcionamiento del sistema en posteriores fases.
        </li>
        <li>
          Definir el motor de base de datos (Postgres, MySql, SqlServer, etc.).
        </li>
        <li>
          Al ser un aplicativo web se escogerá un lenguaje de programación
          óptimo para este tipo de aplicativos y de ágil desarrollo, tema a
          tratar con el equipo de desarrollo. Los cuales podrían ser Ruby
          (rails), Python(Django) o php(Laravel).
        </li>
        <li>
          Implementar un sistema de control de versiones el opcionado es git,
          para usar con GitHub o GitLab.
        </li>
        <li>
          Asignar tareas a cada integrante del equipo evaluando sus habilidades
          y características potenciales, todo se trabajara bajo metodología
          SCRUM, asignando en las siguientes fases sprints, prar desarrollar
          características específicas del programa.
        </li>
      </ul>
      <br />
      <br />
      <h3>Requerimientos específicos de la aplicación.</h3>
      <h2>Módulo administrador:</h2>
      <ul>
        <li>Crear nuevos usuarios.</li>
        <li>Crear nuevos clientes.</li>
        <li>Modificar o eliminar clientes y usuarios.</li>
        <li>Generar reportes de ventas e inventarios diarios.</li>
        <li>Cargar productos al sistema.</li>
        <li>Manejar permisología de otros usuarios.</li>
        <li>Modificar precios.</li>
        <li>Consultar productos facturados por cada vendedor.</li>
      </ul>

      <h2>Modulo Empleados:</h2>
      <ul>
        <li>Buscar productos.</li>
        <li>Facturar productos.</li>
        <li>Consultar productos facturados por el usuario.</li>
        <li>Generar cantidades vendidas diarias, para cruzar inventarios.</li>
        <li>Devolución de productos.</li>
      </ul>

      <h2>Modulo contable:</h2>
      <ul>
        <li>
          Generar reportes parametrizables de ventas diarias, semanales,
          mensuales.
        </li>
        <li>Reportes de ventas por usuario.</li>
        <li>Reportes de utilidad.</li>
      </ul>
      <h2>Módulo clientes o general:</h2>
      <ul>
        <li>Ver productos.</li>
        <li>Ver cantidad y precios de productos.</li>
        <li>Registrarse como cliente.</li>
      </ul>
      <br />
      <br />
      <h2>Finalidad del proyecto</h2>

      <p>
        Este aplicativo web es capaz de sistematizar la gran mayoria de procesos
        manuales que se generan actualmente en el comercio a intervenir, puede
        gestionar inventarios de productos vendidos contra inventario, generar
        resportes de ventas y utilidades para el comercio. saber que vendedor
        tiene mejores números de ventas en diferentes periodos de tiempo,
        agilizar procesos contables repetitivos y posee con un panel
        administrativo para un super usuario para asignar permisos a cada
        usuario.
      </p>
      <h2>Recursos</h2>
      <span>Los recursos para el desarrollo del productos son: </span>
      <br />
      <ul>
        <li>
          Un equipo por cada integrante del desarrollo, que cumpla con las
          características mínimas para correr un entorno local del proyecto.
        </li>
        <li>
          Entorno local con las herramientas para desarrollar un sistemas, si es
          en php(xamp, mamp o wamp y laravel), ruby (rails, bundle), python (pip
          y djando).
        </li>

        <li>Motor de base de datos.</li>
        <li>Tablero Kanban para las actividades (Trello).</li>
        <li>
          Hosting para hospedar el aplicativo web.
        </li>
        <li>
          Dominio.
        </li>
        <li>Certificado SSL.</li>
      </ul>
      <br />
      <br />
      <h2>MVC (Modelo, Vista, Controlador).</h2>

      <h3>Model:</h3>
      <p>
        It is the representation of information or data that you want to display
        to user. Model have classes. Classes define different parts of your
        website.
      </p>
      <h3>View:</h3>
      <p>
        It is all the front end code via which the website is presented in front
        of the user (UI/UX). It includes all the CSS, HTML and JavaScript. Any
        ajax is called in view. Using view, the user interacts with the website.
      </p>
      <h3>Controller:</h3>
      <p>
        It contains all the logic of your website. Controller also has class
        with the all methods and logics. It acts as the interface between the
        Model and View.
      </p>
      <br /><br />
      <h2>Client - server</h2>
      <p>
        It is a seemingly easy design allowing us to accomplish tasks to a
        distributed user base from a single point of origin.
      </p>
      <h2>Server:</h2>
      <ul>
        <li>A server is the entity offering the service.</li>
        <li>
          It could be any service — ranging in web hosting, processing, storage
          etc.
        </li>
      </ul>
      <h2>Client:</h2>
      <ul>
        <li>A client is the one receiving the service.</li>
        <li>
          A client is usually a recipient connected to the service over the
          internet.
        </li>
      </ul>
    </div>
<?php  include("./includes/footer.php")?>
