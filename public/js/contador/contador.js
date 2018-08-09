window.onload=function(){
  fetch('http://localhost:8000/api/contador')
    .then(function (response) {
      return response.json();
    })
    .then(function (respFinal) {
      var span=document.getElementById('contador')
      span.innerHTML = respFinal
      console.log(respFinal);
    })
    .catch(function (error) {
      console.error(error);
    })
  var intervalo = setInterval(function(){
    fetch('http://localhost:8000/api/contador')
      .then(function (response) {
        return response.json();
      })
      .then(function (respFinal) {
        var span=document.getElementById('contador')
        span.innerHTML = respFinal
        console.log(respFinal);
      })
      .catch(function (error) {
        console.error(error);
      })
  },30000);
}
