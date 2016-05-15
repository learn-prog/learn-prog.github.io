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

    <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--6-col-tablet mdl-cell--8-col-desktop mdl-cell--4-col-phone">

        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Titulo del Tema</h2>
        </div>

        <div class="mdl-card__supporting-text">
            Las iteraciones, mejor conocidas como bucles son un tipo de estructura muy útiles en programación, consisten
            en hacer que una instrucción o bloque de instrucciones se repita constantemente, hasta llegar a un fin que
            hayamos definido, ésta ultima parte es muy importante ya que sí, no establecemos bien la condición para qué
            en un determinado momento el bucle se detenga, obtendremos lo que se conoce como un "bucle infinito" y
            nuestro programa no funcionará de forma correcta. <br><br>

            Por ejemplo, si queremos que nuestro programa muestre el mensaje "Hola, buenos días" 10 veces, lo que
            haríamos en nuestro algoritmo seria algo así:<br><br>
<pre class="sh_cpp">
0- Inicio
 1- Escribir "Hola, buenos días";
 2- Escribir "Hola, buenos días";
 3- Escribir "Hola, buenos días";
 4- Escribir "Hola, buenos días";
 5- Escribir "Hola, buenos días";
 6- Escribir "Hola, buenos días";
 7- Escribir "Hola, buenos días";
 8- Escribir "Hola, buenos días";
 9- Escribir "Hola, buenos días";
 10- Escribir "Hola, buenos días";
11- Fin
  </pre>
            <br><br>

            Sencillamente copiamos y pegamos lo mismo varias veces, pero a nivel de código y programación en general,
            esto es muy poco eficiente, imagínate si necesitamos que el mensaje se muestre mil veces o más. Para eso
            sirven las estructuras de repetición y en este caso se utilizan así:<br><br>

            0- Inicio
            1- Declarar i;
            2-Repita para (i=1; i<=10; i++)
            2.1 Escribir "Hola, buenos días";
            3- Fin del Repita
            4-Fin

            <p>Mucho más corto y sencillo, incluso si necesitamos que se repita mil veces tan solo bastaría con cambiar
                el 10 por 1000.</p>

            <p>También podemos apreciar un principio de la programación y es el automatizar los procesos de manera que
                la computadora haga el mayor trabajo por nosotros.</p>

            Existen 3 tipos de estructuras de repetición:

            Las estructuras serán escritas en código javascript (un lenguaje de programación derivado de C y C++
            utilizado en la mayoría de paginas web)

            Repita Para (for): Fue la estructura utilizada en el ejemplo anterior.
            var i;
            for (i=1;i<=10;i++)
            {
            //Bloque de instrucciones
            }
            Primero se declara una variable de control que usualmente se le llama "i", luego dentro de los parámetros
            del bucle se le asigna un número, se establece la condición y se incrementa o decrementa la variable en
            tantas unidades como sea necesario, después dentro de los corchetes escribimos las instrucciones.
            En el ejemplo se le asigna el número 1 a la variable "i", la condición establece que el bloque de
            instrucciones de repetirá cuando el valor de "i" sea menor o igual a 10 e "i" irá incrementando una unidad
            en cada repetición, de manera que cuando la variable "i" valga 11 ya no se ejecutará y nuestro programa
            finalizará.
            Código para demostración:
            var i;
            for (i=1;i<=10;i++)
            {
            alert("Hola, buenos días\nLa variable i vale "+i)
            }
            La estructura Repita para, es las más utilizada para realizar bucles cuya cantidad de repeticiones conocemos
            de antemano como programadores, a diferencia de las estructuras Repita Mientras y Repita Hasta, que son de
            gran ayuda para cuando no sabemos cuantas repeticiones hará el bucle.

            Repita Mientras (while): Esta estructura tan solo tiene un parámetro, la "condición" que se evalúa al inicio
            de cada repetición al igual que el Repita para.
            while (condición)
            {
            //Bloque de instrucciones
            }
            Por ejemplo un programa que pida un número repetidas veces y tan solo sí ese número es 0 el bucle finaliza,
            luciría entonces así:

            var n;
            n = prompt("Introduzca un número:","");
            while (n!=0)
            {
            n = prompt("Introduzca un número:","");
            }

            Primero se declara la variable que guardará el número por ejemplo "n" y luego se pide que se introduzca
            dicho número , la condición establece qué el bucle se ejecutará mientras que el valor de "n" sea distinto de
            0, la instrucción adentro pide un número y este se guardará en "n" entonces la condición vuelve a ser
            evaluada y así seguirá hasta que se introduzca 0.

            Repita Hasta (do... while): Esta estructura es muy parecida a la anterior, ya que solo tiene un parámetro
            (la condición), la diferencia está en que dicha condición se evalúa al final del bucle, lo cual permite que
            aunque la condición no se cumpla, el bloque de instrucciones se ejecutará al menos una vez.
            do
            {
            //Bloque de instrucciones
            }
            while (condición)

            Esta estructura es útil en ciertos casos para no tener que repetir lineas de código, comparemos éste ejemplo
            con el anterior:
            var n;
            do
            {
            n = prompt("Introduzca un número:","");
            }
            while (n!=0)
            Como podemos apreciar en el ejemplo anterior (Repita Mientras), primero se pide un número para poder evaluar
            la condición y así entrar o no en el bucle y luego se volvía a pedir el número dentro del bucle, pero con la
            estructura (Repita Hasta) no es necesario ya que entramos directamente al bucle sin importar el valor de
            "n", se pide el número y al final se evalúa la condición.
            En resumen podemos afirmar que la estructura Repita Para (for) es la mejor en la mayoría de casos para
            cuando conocemos cuantas veces se debe repetir el bucle, y las estructuras Repita Mientras (while) y Repita
            Hasta (do... while) para cuando lo desconocemos como programadores, aún así podemos lograr que éstas dos
            ultimas estructuras se comporten como la Primera, de la siguiente forma, por ejemplo:

            Repita Para (for):
            var i; //Declaración
            for (i=1;i<=10;i++) //Asignación, Condición, Incremento
            {
            //Bloque de instrucciones
            }
            Repita Mientras (while):
            var i=1; //Declaración y Asignación

            while (i<=10) //Condición
            {
            //Bloque de instrucciones
            i++; //Incremento
            }
            Repita Hasta (do... while):
            var i=0; //Declaración y Asignación
            do
            {
            i++; //Incremento
            //Bloque de instrucciones
            }
            while(i<=10) //Condición
            Eso es todo por éste tema en general, cualquier duda o pregunta pueden dejarla en los comentarios, recuerden
            apoyar la continuación de este blog haciendo clic en los banners de publicidad, Saludos!

            Autor: Cristian Rivas.
            Derechos Reservados.

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
