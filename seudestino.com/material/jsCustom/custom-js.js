// <script type="text/javascript">
//     (function() {'use strict';

//         var anterior = document.querySelector('#ant');
//         var proximo = dialog.querySelector('#prox');

//         var dialog = document.querySelector('#mdl-dialog-meus-destinos');

//         // var showButton = document.querySelector('#show-modal-meus-destino');

//         if (! dialog.showModal) {
//           dialogPolyfill.registerDialog(dialog);
//         }
//         var closeClickHandler = function(event) {
//           dialog.close();
//         };
//         var showClickHandler = function(event) {
//           dialog.showModal();
//         };
        
//         anterior.addEventListener('click', showClickHandler);
//         proximo.addEventListener('click', showClickHandler);
//         closeButton.addEventListener('click', closeClickHandler);

//       }());
    
//     (function() {
//       'use strict';
      
//       var dialog = document.querySelector('#mdl-dialog-meu-sonho');
//       var closeButton = dialog.querySelector('button');
//       var showButton = document.querySelector('#show-modal-siri');

//       if(!dialog){
//         $('#destino').val('SIRI LANK - PRAIA');
//       }

//       if (! dialog.showModal) {
//         dialogPolyfill.registerDialog(dialog);
//       }
//       var closeClickHandler = function(event) {
//         dialog.close();
//       };
//       var showClickHandler = function(event) {
//         dialog.showModal();
//       };
//         showButton.addEventListener('click', showClickHandler);
//         closeButton.addEventListener('click', closeClickHandler);
//       }());
 
//       (function() {
//       'use strict';
      
//       var dialog = document.querySelector('#mdl-dialog-meus-destinos');
//       var closeButton = dialog.querySelector('button');
//       var showButton = document.querySelector('#show-modal-meus-destino');
      
//       if (! dialog.showModal) {
//         dialogPolyfill.registerDialog(dialog);
//       }
//       var closeClickHandler = function(event) {
//         dialog.close();
//       };
//       var showClickHandler = function(event) {
//         dialog.showModal();
//       };
//         showButton.addEventListener('click', showClickHandler);
//         closeButton.addEventListener('click', closeClickHandler);
//       }());
    
//     (function() {
//     'use strict';
    
//     var dialog = document.querySelector('#mdl-dialog-meu-sonho');
//     var closeButton = dialog.querySelector('button');
//     var showButton = document.querySelector('#show-modal-destino-sonho');
    
//     if (! dialog.showModal) {
//       dialogPolyfill.registerDialog(dialog);
//     }
//     var closeClickHandler = function(event) {
//       dialog.close();
//     };
//     var showClickHandler = function(event) {
//       dialog.showModal();
//     };
//       showButton.addEventListener('click', showClickHandler);
//       closeButton.addEventListener('click', closeClickHandler);
//     }());
    
    
//       (function() {
//       'use strict';
//         var dialog = document.querySelector('#mdl-dialog-meu-perfil');
//         var closeButton = dialog.querySelector('button');
//         var showButton = document.querySelector('#show-modal-meu-perfil');
//         if (! dialog.showModal) {
//           dialogPolyfill.registerDialog(dialog);
//         }
//         var closeClickHandler = function(event) {
//           dialog.close();
//         };
//         var showClickHandler = function(event) {
//           dialog.showModal();
//         };
//           showButton.addEventListener('click', showClickHandler);
//           closeButton.addEventListener('click', closeClickHandler);
//         }());
   
//     $(document).ready(function(){

//       $(document).change(function(){

//       var _tipoTransporte = $("#tipoTransporte").val();
//       var _translado = $(document).find("input[name='translado']:checked").length > 0;
//       var _hospedagem = $("#hospedagem").val();
//       var _diaria = $("#diaria").val();

//       var tarifaTransporte;
//       var tarifaHospedagem;
//       var tarifaTranslado;

//       var total;

//       if(_tipoTransporte === ""){
//         tarifaTransporte = 0;
//       }else if(_tipoTransporte === "Aviao"){
//       totalarifaTransporte = 1250;
//       }else if(_tipoTransporte === "Trem"){
//         tarifaTransporte = 50;
//       }else if(_tipoTransporte === "Navio"){
//         tarifaTransporte = 3500;
//       }else if(_tipoTransporte === "Espaco Nave"){
//         tarifaTransporte = 10;
//       }else if(_tipoTransporte === "Moto"){
//         tarifaTransporte = 100;
//       }else if(_tipoTransporte === "Mochilando"){
//         tarifaTransporte = 0;
//       }


//       if(_hospedagem === "" || _hospedagem === null){
//         tarifaHospedagem = 0;
//       }else if(_hospedagem === "1 Estrela"){
//         tarifaHospedagem = 50 * _diaria;
//       }else if(_hospedagem === "2 Estrelas"){
//         tarifaHospedagem = 100 * _diaria;
//       }else if(_hospedagem === "3 Estrelas"){
//         tarifaHospedagem = 150 * _diaria;
//       }else if(_hospedagem === "4 Estrelas"){
//         tarifaHospedagem = 200 * _diaria;
//       }else if(_hospedagem === "5 Estrelas"){
//         tarifaHospedagem = 250 * _diaria;
//       }

//       console.log(tarifaHosp  edagem);

//       if(_translado === true){
//         tarifaTranslado = 50;
//       }else{
//         tarifaTranslado = 0;
//       }

//       total = tarifaTransporte + tarifaHospedagem + tarifaTranslado;

//       $("#custo").val(total);

//       });

//     });
