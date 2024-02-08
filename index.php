<?php

    require_once ( "core.php" );
    
    $lab = new Adaptowebs;
    
    $lab -> errors ();

    require_once ( "config.php" );
    
    if (peticion () == 0) {
        
        http_response_code ( 404 );
    
        page (
            
                $lab 
            
            ,
        
                Element::get ( "title" , "adaptowebs" ) 
            
            ,
            
                Element::get ( "h1" , "404 !" ) .
                
                Element::get ( "h2" , "Not Found." ) .
                
                Element::get ( "h2" , "This is all you need to know." ) .
                
                Element::get ( "p" , "
                    Why do I get the 404 not found error? Don't worry, this is 
                    the default message to tell you that everything is fine and 
                    no request has been made yet.
                " ) .
                
                Element::get ( "p" , "
                    Welcome to my api. this api is different ,
                    why ?! because you didn't expect that i was
                    capable to do it.<br>
                    not hard feelings i am talking to my self.
                    here i am going to show you a list of links
                    with the corresponding button to click it
                    and get the data that the endpoint indicates.
                " ) .
                
                Element::get ( "p" , "
                    This data is from a course about 
                    creating administrative systems. i pay for it so dont 
                    worry about it you can use this data for free.
                " ) .
                
                '   <h2>Peticiones a la api , el orden de las variables que
                    envies por el metodo get no importa seguira funcionando
                    una vez que ya hayas definido la tabla , solo resta
                    seguir las indicaciones para las consultas.</h2>
                    <table>
                      <thead>
                        <tr>
                          <th>Tipo de peticion</th>
                          <th>Sentencia</th>
                          <th>Endpoint</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-title="Columna 1">
                            Seleccionar Dato Especifico
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona todos los cursos de la tabla cursos 
                            y muestrame solamente el id de cada curso.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/courses?select=id_course"><i>https://api.adaptowebs.com/courses?select=id_course</i></a>
                          </td>
                        </tr>
                        <!-- Repetir filas según sea necesario -->
                        <tr>
                          <td data-title="Columna 1">
                            Filtro de Un Solo valor
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona el id del curso, el titulo y
                            la descripcion donde el titulo es igual a 
                            Desarrollo Web Completo con HTML5, CSS3, JS AJAX PHP y MySQL.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/courses?select=id_course,title_course,description_course&key=title_course&value=Desarrollo Web Completo con HTML5, CSS3, JS AJAX PHP y MySQL">
                              <i>https://api.adaptowebs.com/courses?select=id_course,title_course,description_course&key=title_course&value=Desarrollo Web Completo con HTML5, CSS3, JS AJAX PHP y MySQL</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Filtros de Varios valores
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona el id del curso, el titulo ,
                            la descripcion y el id del instructor donde el titulo es igual a 
                            Desarrollo Web Completo con HTML5, CSS3, JS AJAX PHP y MySQL y el id del instructor del curso es igual a 2.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/courses?select=id_course,title_course,description_course,id_instructor_course&key=title_course|id_instructor_course&value=Desarrollo Web Completo con HTML5, CSS3, JS AJAX PHP y MySQL|2">
                              <i>https://api.adaptowebs.com/courses?select=id_course,title_course,description_course,id_instructor_course&key=title_course|id_instructor_course&value=Desarrollo Web Completo con HTML5, CSS3, JS AJAX PHP y MySQL|2</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Ordenar Datos (<i>este metodo sirve tambien 
                            para ordenar por otras columnas por ejemplo
                            el titulo en orden alfabetico</i>)
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona todos los campos de la tabla courses
                            y ordena los datos de forma descendente por el id
                            del curso.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/courses?select=*&orderby=id_course&ordermode=DESC">
                              <i>https://api.adaptowebs.com/courses?select=*&orderby=id_course&ordermode=DESC</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Ordenar Datos con filtro
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona todos los campos de la tabla courses
                            y ordena los datos de forma descendente por el titulo
                            del curso donde el id del instructor es igual a 2.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/courses?key=id_instructor_course&value=2&select=*&orderby=title_course&ordermode=DESC">
                              <i>https://api.adaptowebs.com/courses?key=id_instructor_course&value=2&select=*&orderby=title_course&ordermode=DESC</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Limitar Datos
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona todos los campos de la tabla courses y
                            limita el resultado a 5 registros.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/courses?startat=0&endat=5&select=*">
                              <i>https://api.adaptowebs.com/courses?startat=0&endat=5&select=*</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Limitar Datos y Ordenar
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona todos los campos de la tabla courses ,
                            limita el resultado a 5 registros
                            y ordena los datos de forma descendente por el id del curso.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/courses?startat=0&endat=5&select=*&orderby=id_course&ordermode=DESC">
                              <i>https://api.adaptowebs.com/courses?startat=0&endat=5&select=*&orderby=id_course&ordermode=DESC</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Limitar Datos y Ordenar con Filtro
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona todos los campos de la tabla courses ,
                            limita el resultado a 2 registros
                            y ordena los datos de forma descendente por el titulo del curso
                            donde el id del instructor es igual a 2.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/courses?startat=0&endat=2&select=*&orderby=title_course&ordermode=DESC&key=id_instructor_course&value=2">
                              <i>https://api.adaptowebs.com/courses?startat=0&endat=2&select=*&orderby=title_course&ordermode=DESC&key=id_instructor_course&value=2</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Relaciones entre tablas sin filtros
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona todos los campos de la tabla courses y
                            de la tabla instructor.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/relations?rel=courses|instructors&type=course|instructor">
                              <i>https://api.adaptowebs.com/relations?rel=courses|instructors&type=course|instructor</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Relaciones entre tablas por campos especificos
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona el nombre del instructor y el titulo del curso
                            para crear una relacion entre tablas con esos campos.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/relations?rel=courses|instructors&type=course|instructor&select=name_instructor,title_course">
                              <i>https://api.adaptowebs.com/relations?rel=courses|instructors&type=course|instructor&select=name_instructor,title_course</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Relaciones entre tablas con ordenamiento y campos especificos
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona el nombre del instructor , el titulo del curso y id
                            para crear una relacion entre tablas con esos campos
                            y ordena los resultados por el id del curso
                            de forma ascendente..</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/relations?rel=courses|instructors&type=course|instructor&select=name_instructor,title_course,id_course&orderby=id_course&ordermode=ASC">
                              <i>https://api.adaptowebs.com/relations?rel=courses|instructors&type=course|instructor&select=name_instructor,title_course,id_course&orderby=id_course&ordermode=ASC</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Relaciones entre tablas con ordenamiento , campos especificos y limites
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona el nombre del instructor , el titulo del curso y id
                            para crear una relacion entre tablas con esos campos
                            y ordena los resultados por el id del curso
                            de forma ascendente y limita los resultados a 6.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://api.adaptowebs.com/relations?rel=courses|instructors&type=course|instructor&select=name_instructor,title_course,id_course&orderby=id_course&ordermode=ASC&startat=0&endat=6">
                              <i>https://api.adaptowebs.com/relations?rel=courses|instructors&type=course|instructor&select=name_instructor,title_course,id_course&orderby=id_course&ordermode=ASC&startat=0&endat=6</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Relacion de 3 tablas
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona todos los campos de las tablas
                            countries,codes y dialcodes.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://database3.adaptowebs.com/relations?rel=countries|codes|dialcodes&type=country|code|dialcode">
                              <i>https://database3.adaptowebs.com/relations?rel=countries|codes|dialcodes&type=country|code|dialcode</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Relacion de 3 tablas con datos especificos
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona los campos name_country,initial_code y digit_dialcode de las tablas
                            countries,codes y dialcodes.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://database3.adaptowebs.com/relations?rel=countries|codes|dialcodes&type=country|code|dialcode&select=name_country,initial_code,digit_dialcode">
                              <i>https://database3.adaptowebs.com/relations?rel=countries|codes|dialcodes&type=country|code|dialcode&select=name_country,initial_code,digit_dialcode</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Relacion de 3 tablas con datos especificos
                          </td>
                          <td data-title="Columna 2">
                            <i>Selecciona los campos name_country,initial_code y digit_dialcode de las tablas
                            countries,codes y dialcodes despues ordena los datos por el id del country
                            y limita los resultados a 6.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://database3.adaptowebs.com/relations?rel=countries|codes|dialcodes&type=country|code|dialcode&select=name_country,initial_code,digit_dialcode&orderby=id_country&ordermode=ASC&startat=0&endat=6">
                              <i>https://database3.adaptowebs.com/relations?rel=countries|codes|dialcodes&type=country|code|dialcode&select=name_country,initial_code,digit_dialcode&orderby=id_country&ordermode=ASC&startat=0&endat=6</i>
                              </a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            Relacion de 3 tablas con filtro
                          </td>
                          <td data-title="Columna 2">
                            <i>Muestrame la relacion de las 3 tablas
                            seleccionando los campos name_country,initial_code,digit_dialcode 
                            donde el nombre del pais es colombia.</i>
                          </td>
                          <td data-title="Columna 3">
                              <a href="https://database3.adaptowebs.com/relations?rel=countries|codes|dialcodes&type=country|code|dialcode&select=name_country,initial_code,digit_dialcode&key=name_country&value=colombia">
                              <i>https://database3.adaptowebs.com/relations?rel=countries|codes|dialcodes&type=country|code|dialcode&select=name_country,initial_code,digit_dialcode&key=name_country&value=colombia</i>
                              </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                
                ' .
                
                '   <h2>Practicas Javascript y M&aacute;s.</h2>
                    <table>
                      <thead>
                        <tr>
                          <th>Dia</th>
                          <th>Curso</th>
                          <th>Profesor</th>
                          <th>Link</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-title="Columna 1">
                            1 - Feb 5 3:00 PM 2024
                          </td>
                          <td data-title="Columna 2">
                            JavaScript TOTAL - De Cero a Programador Web en 18 Días
                          </td>
                          <td data-title="Columna 3">
                            Federico Garay (origin) + Ramiro Garc&iacute;a Gonz&aacute;lez (i did what you see on the screen)
                          </td>
                          <td data-title="Columna 4">
                              <a href="jsPractica1.php">JsPractica1</a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            1 - Feb 7 3:34 PM 2024
                          </td>
                          <td data-title="Columna 2">
                            JavaScript TOTAL - De Cero a Programador Web en 18 Días
                          </td>
                          <td data-title="Columna 3">
                            Federico Garay (origin) + Ramiro Garc&iacute;a Gonz&aacute;lez (i did what you see on the screen)
                          </td>
                          <td data-title="Columna 4">
                              <a href="jsPractica2.php">JsPractica2</a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            1 - Feb 5 3:26 PM 2024
                          </td>
                          <td data-title="Columna 2">
                            Adaptowebs Portafolio
                          </td>
                          <td data-title="Columna 3">
                            Ramiro Garc&iacute;a Gonz&aacute;lez
                          </td>
                          <td data-title="Columna 4">
                              <a href="https://efecto.adaptowebs.com/index.html">Databases info , endpoints and more.</a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td data-title="Columna 1">
                            1 - Feb 5 3:28 PM 2024
                          </td>
                          <td data-title="Columna 2">
                            Adaptowebs Portafolio - Versoftly concepts and ideas
                          </td>
                          <td data-title="Columna 3">
                            Ramiro Garc&iacute;a Gonz&aacute;lez
                          </td>
                          <td data-title="Columna 4">
                              <a href="https://laboratory.adaptowebs.com/">classes ,  methods and functions.</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                
                '
                , 'en',''
            
        );
    
    } else {
        
        if ( 
            
            tipo_peticion ( peticion () ) == "GET" ||
            
            tipo_peticion ( peticion () ) == "POST" ||
            
            tipo_peticion ( peticion () ) == "PUT" ||
            
            tipo_peticion ( peticion () ) == "DELETE" 
            
        ) {
            
            switch ( tipo_peticion ( peticion () ) ) {
                
                case "POST" : $tabla = peticion ()[1]; echo "post"; break;
                
                case "PUT" : $tabla = peticion ()[1]; echo "put"; break;
                
                case "DELETE" : $tabla = peticion ()[1]; echo "delete"; break;
                
                default:
                    
                    $tabla = explode ( "?" , peticion ()[1] )[0];
                    
                    if ( isset ( $_GET['key'] ) && isset ( $_GET['value'] ) && !isset ( $_GET['rel'] ) && !isset ( $_GET['type'] )) {
                        
                        $lab -> getDataFilter ( $tabla , select () , $_GET['key'] , $_GET['value'] , orderby () , ordermode () , startat () , endat () , $conexion );
                        
                    } else if ( isset ( $_GET['rel'] ) && isset ( $_GET['type'] ) && $tabla == "relations" && !isset ( $_GET['key'] ) && !isset ( $_GET['value'] )) {
                        
                        $lab -> getTablesData ( $_GET['rel'] , $_GET['type'] , select () , orderby () , ordermode () , startat () , endat () , $conexion );
                        
                    } else if ( isset ( $_GET['rel'] ) && isset ( $_GET['type'] ) && $tabla == "relations" && isset ( $_GET['key'] ) && isset ( $_GET['value'] )) {
                        
                        $lab -> getTablesDataFilter ( $_GET['rel'] , $_GET['type'] , select () , $_GET['key'] , $_GET['value'] , orderby () , ordermode () , startat () , endat () , $conexion );
                        
                    }else if (isset ( $_GET['key'] ) && isset ( $_GET['search'] )) {
                        
                        $lab -> getDataSearch ( $tabla , select () , $_GET['key'] , $_GET['search'] , orderby () , ordermode () , startat () , endat () , $conexion );
                        
                    } else {
                        
                        $lab -> getData ( $tabla , select () , orderby () , ordermode () , startat () , endat () , $conexion );   
                        
                    }
                
            }
            
        } else {
            
            http_response_code ( 404 );
            
            echo "404 METHOD NOT FOUND.";
            
        }
        
    }

?>
