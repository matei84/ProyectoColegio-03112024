function nota(){
    var nota1=0;
    var nota2=0;
    var nota3=0;
    var resultado=0;

    nota1=prompt("Nota Acumulada de MF0950_2: Construccion de paginas Web: ");
    document.getElementById("demo1").innerHTML=nota1;

    nota2=prompt("Nota Acumulada de MF0950_2: Integracion componentes de software: ");
    document.getElementById("demo2").innerHTML=nota2;

    nota3=prompt("Nota Acumulada de MF0950_2: Publicacion de paginas Web: ");
    document.getElementById("demo3").innerHTML=nota3;

    resultado=(Number(nota1)+Number(nota2)+Number(nota3))/3;
    document.getElementById("demo").innerHTML=resultado;

}