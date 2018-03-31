%(document).ready{

    function(){

      // var globais
      var cont = 0;

     // array
      var passador = new Array();

      tenis [0] = "images/tenis01.jpg";
      tenis [1] = "images/tenis02.jpg";
      tenis [2] = "images/tenis03.jpg";
      tenis [3] = "images/tenis04.jpg";
      tenis [4] = "images/tenis05.jpg";
      tenis [5] = "images/tenis06.jpg";
      tenis [6] = "images/tenis07.jpg";
      tenis [7] = "images/tenis08.jpg";
      tenis [8] = "images/tenis09.jpg";

      carregaPassador(cont);

      // carregaPassador
      function carregaPassador(idx) {
       $().hide().attr("src", moda[idx]).fadeIn();
      var auxilia = passador[idx].split("/");
      var nomePassador = aux[1].split(".");
      }
      // clicar na foto
      $("").click()
        function(){
          cont = cont +1;
          carregaPassador(cont);
        }
    }
}
