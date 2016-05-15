<?php
include('../cabecera.php');
?>
<link type="text/css" rel="stylesheet" href="../../shjs-0.6/css/sh_golden.css">
            <!-- Main Content-->
            <!--Principal Grid-->
            <div class="mdl-grid">
                <!--Spacer-->
                <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-phone"></div>
                <!--Spacer-->

                <!--Margin-->
                <div class="mdl-cell mdl-cell--1-col-tablet mdl-cell--2-col-desktop mdl-cell--hide-phone"></div>
                <!--Margin-->

                <!--Card-->

                <div
                    class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--6-col-tablet mdl-cell--8-col-desktop mdl-cell--4-col-phone">

                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"><b>Variable</b></h2>
                    </div>

                    <div class="mdl-card__supporting-text">
                        Una variable es un espacio de memoria reservado para almacenar un valor que corresponde a
                        un tipo de dato soportado por un lenguaje de programación. Una variable es representada y usada
                        a través de un nombre que le asigna un programador o que ya viene predefinida.<br><br>

                        Una variable, por lo general, como su nombre lo indica, puede variar su valor durante la
                        ejecución del programa y también puede cambiar el tipo de dato que almacena estos lo veremos más
                        adelante.<br><br>

                        Las variables pueden ser del tipo boleano, entero, decimal de coma flotante, carácter, cadena de
                        texto, arreglo, matriz, tipo definido por el usuario, etc. Estos son tipos de datos los cuales
                        nos centraremos en ellos más adelante.<br>

                        <h6>Las variables tienen las siguientes características:</h6>
                        <ul>
                            <li>Un nombre o identificador con el que nos referimos en el código a la variable. Mientras
                                más sencillo el nombre y comprensible es mucho mejor para el programador.
                            </li>
                            <li>Un tipo, que indica los posibles valores que puede tomar la variable y las acciones que
                                son posibles con ella.
                            </li>
                            <li>Un valor predeterminado por el programador.
                            </li>
                        </ul>
                      <pre class="sh_cpp">
 Ejemplo: int: a=0;
                          </pre>

                        En el ejemplo, se puede observar la declaración de una variable llamada por el programador a y
                        el tipo es un número entero (<b>int</b> es la expresión para definir un <b>integer (entero)</b>
                        en C++), en el
                        cual su valor inicial o predeterminado por el programador es cero (0).
                        <br>

                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text"><b>Algoritmo</b></h2>
                        </div>

                        Para cualquier tarea que desee realizarse es necesario, en primer lugar, entender qué hay que
                        hacer. En este sentido, la inteligencia humana es capaz de interpretar instrucciones vagas o
                        incompletas y hacerse cargo de qué hay que hacer realmente, observando el contexto.<br><br>

                        Una vez entendida la tarea, hay que establecer los pasos a seguir para llegar al objetivo
                        propuesto. Un algoritmo es un conjunto de pasos que al ser seguidos se consigue realizar una
                        tarea o resolver un problema. Para realizar algoritmos fácilmente entendibles los programadores
                        utilizan diagramas de flujo. Los diagramas de flujo son diagramas para expresar los pasos de un
                        algoritmo por medio de símbolos conectados por líneas. Es como un mapa donde aparecen
                        simultáneamente las rutas que puede seguir el flujo de datos al ejecutar un algoritmo.<br><br>

                        Para la realización de un algoritmo es necesario realizar una secuencia de pasos para llegar a
                        cumplir con la resolución de un problema dado. Para ello, definiremos los siguientes pasos:<br>

                        <ol>
                            <li><b>Análisis previo del Problema:</b> Se debe realizar un análisis del funcionamiento del
                                problema antes que se realice cualquier algoritmo.
                            </li>
                            <li><b>Definición de Requerimientos:</b> Los problemas a solucionar, esto es, por ejemplo,
                                el sumar dos números, multiplicar dos matrices, ordenar una lista de números, generar un
                                reporte, etc.
                            </li>
                            <li><b>Identificación de los Módulos:</b> La identificación de los módulos es tan importante
                                como la identificación correcta de los requerimientos, esto porque la correcta
                                identificación de los módulos simplifica considerablemente la realización de los
                                algoritmos que darán solución a los requerimientos identificados en el paso anterior.
                            </li>
                            <li><b>Implementación de los Algoritmos:</b> La implementación de los algoritmos se debe
                                realizar en un lenguaje de programación para que una computadora pueda comprender las
                                instrucciones que el algoritmo modela para así poder ejecutarlas y lograr el resultado
                                esperado.
                            </li>
                            <li><b>Análisis previo del Problema:</b> Se debe realizar un análisis del funcionamiento del
                                problema antes que se realice cualquier algoritmo.
                            </li>
                        </ol>
                        En el último paso ya podemos hablar de una aplicación o programa de computadora, que estará
                        compuesto por una serie de instrucciones que ordenadas una tras otra logran representar los
                        algoritmos diseñados y dar así solución a los requerimientos identificados.<br><br>

                        <b>Partes de un Algoritmo.</b><br>
                        Todo algoritmo debe obedecer a la estructura básica de un sistema, es decir: entrada, proceso y
                        salida.<br><br>

                       <b> ENTRADA:</b> Corresponde a los datos necesarios que requiere el proceso para ofrecer los resultados
                        esperados, la declarión de las variables.<br><br>

                        <b> PROCESO:</b> Pasos necesarios para obtener la solución del problema o la situación planteada.<br><br>

                        <b> SALIDA:</b> Resultados arrojados por el proceso como solución.<br><br>

                        <pre class="sh_cpp">
Ejemplo de algoritmo:
 Algoritmo que determine la suma de dos números enteros.
0-Inicio -------------------------------------->INICIO
 1- Declarar: a, b, sum;------------------------------------------------
 2- Escribir “Ingresa un numero:” ;
 3- Leer: a;
 4- Escribir “Ingresa un numero:” ;             PROCESO
 5- Leer: b;
 6- sum= a + b;
 7- Escribir “El resultado de la suma es: ”,a,” ;-----------------------
8-Fin;----------------------------------------->SALIDA
                        </pre>

                    </div>
                </div>

                <!--Card-->

                <!--Margin-->
                <div class="mdl-cell mdl-cell--1-col-tablet mdl-cell--2-col-desktop mdl-cell--hide-phone"></div>
                <!--Margin-->
                <!--Spacer-->
                <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-phone"></div>
                <!--Spacer-->
            </div>
            <!--Principal Grid-->
    </main>
</div>


</body>
</html>
