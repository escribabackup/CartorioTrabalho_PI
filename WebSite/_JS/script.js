$(document).ready(
    function() {

        // variáveis globais
        var cont = 0;
        // arrays (vetores) para as motos
        var moda  = new Array();


        moda [0] = "images/moda01.jpg";
        moda [1] = "images/moda02.jpg";
        moda [2] = "images/moda03.jpg";
        moda [3] = "images/moda04.png";
        moda [4] = "images/moda05.jpg";
        carregaModa(cont);

        // carregaMoto
        function carregaModa(idx) {
            $("#imgGde").hide().attr("src", moda[idx]).fadeIn();
            var aux      = moda[idx].split("/");
            var nomeMoto = aux[1].split(".");
        }
        // clicar na flecha da direita
        $("#flechaDir").click(
            function() {
                cont = cont + 1;
                if (cont > 4) cont = 0;
                carregaModa(cont);
            }
        )
        // clicar na flecha da esquerda
        $("#flechaEsq").click(
            function() {
                cont = cont - 1;
                if (cont < 0) cont = 4;
                carregaModa(cont);
            }
        )

    }
);
