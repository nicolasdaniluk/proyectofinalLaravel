window.addEventListener('load',function(){

  var boton=document.querySelector('[name="boton"]');
  var css=document.querySelector('[name="css"]');
  //var appcss=document.querySelector('[name="appcss"]');
  //var actual=0;
  var elcss=css.getAttribute("href")
  boton.onclick=function(){
    if (elcss=="/css/styles.css") {
      css.setAttribute("href","/css/styles2.css");
      //appcss.setAttribute("href","/css/app2.css");
      //actual=1;
      document.cookie="css=/css/styles2.css";
      //document.cookie="apcss=/css/app2.css";
    }else {
      css.setAttribute("href","/css/styles.css");
      //appcss.setAttribute("href","/css/app.css");
      //actual=0;
      document.cookie="css=/css/styles.css";
    //  document.cookie="apcss=/css/app.css";
    }
  }
});
