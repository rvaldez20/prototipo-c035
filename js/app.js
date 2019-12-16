/* <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
/* Funciones main() para mostrar u ocultar preguntas en categorias 14, 16, 30 y 32 */
/* <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */

function main() {

   // Seleccionamos los contenedores y los input radio si/no 
   const containerCategoria14 = document.querySelector(".subcategory14");
   const inputRadio14si = document.getElementById("307");
   const inputRadio14no = document.getElementById("308");

   const containerCategoria16 = document.querySelector(".subcategory16");
   const inputRadio16si = document.getElementById("324");
   const inputRadio16no = document.getElementById("325");

   const containerCategoria30 = document.querySelector(".subcategory30");
   const inputRadio30si = document.getElementById("661");
   const inputRadio30no = document.getElementById("662");

   const containerCategoria32 = document.querySelector(".subcategory32");
   const inputRadio32si = document.getElementById("683");
   const inputRadio32no = document.getElementById("684");


   // metodos click addEventListener categoria 14
   if(inputRadio14si){
      inputRadio14si.addEventListener('click', () => {   
         console.log('Diste clic en SI cat 14');

         if(inputRadio14si.checked){
            containerCategoria14.classList.remove("hiden-subcategory");
         }
      })
   }   
   if(inputRadio14no){
      inputRadio14no.addEventListener('click', () => {   
         console.log('Diste clic en NO cat 14');

         if(inputRadio14no.checked){
            containerCategoria14.classList.add("hiden-subcategory");
         }
      })
   }   

   // metodos click addEventListener categoria 16
   if(inputRadio16si){
      inputRadio16si.addEventListener('click', () => {   
         console.log('Diste clic en SI cat 16');

         if(inputRadio16si.checked){
            containerCategoria16.classList.remove("hiden-subcategory");
         }
      })
   }
   if(inputRadio16no){
      inputRadio16no.addEventListener('click', () => {   
         console.log('Diste clic en NO cat 16');

         if(inputRadio16no.checked){
            containerCategoria16.classList.add("hiden-subcategory");
         }
      })
   }   

   // metodos click addEventListener categoria 30
   if(inputRadio30si){
      inputRadio30si.addEventListener('click', () => {   
         console.log('Diste clic en SI cat 30');

         if(inputRadio30si.checked){
            containerCategoria30.classList.remove("hiden-subcategory");
         }
      })
   }   
   if(inputRadio30no){
      inputRadio30no.addEventListener('click', () => {   
         console.log('Diste clic en NO cat 30');

         if(inputRadio30no.checked){
            containerCategoria30.classList.add("hiden-subcategory");
         }
      })
   }
   
   // metodos click addEventListener categoria 32
   if(inputRadio32si){
      inputRadio32si.addEventListener('click', () => {   
         console.log('Diste clic en SI cat 32');

         if(inputRadio32si.checked){
            containerCategoria32.classList.remove("hiden-subcategory");
         }
      })
   }   
   if(inputRadio32no){
      inputRadio32no.addEventListener('click', () => {   
         console.log('Diste clic en NO cat 32');

         if(inputRadio32no.checked){
            containerCategoria32.classList.add("hiden-subcategory");
         }
      })
   }   

}  // cierre funcion main()

/* <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
/* <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */

// ejecutamos la función main()
main();

