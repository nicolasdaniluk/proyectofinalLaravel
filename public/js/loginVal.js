window.addEventListener('load',function(){
  var form = document.getElementById('login')
  var elements = form.elements
  const regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
  var formOk = []

  function valid(elem, text){
    elem.classList.remove('is-invalid')
    elem.classList.add('is-valid')
    let div = elem.parentNode.querySelector('div')
    div.classList.remove('invalid-feedback')
    div.classList.add('valid-feedback')
    div.innerHTML = text
    formOk.map(function(i){
      if(i.name == elem.name) return { name: elem.name, valid: true}
      else return i
    })
  }

  function invalid(elem, text){
    elem.classList.remove('is-valid')
    elem.classList.add('is-invalid')
    let div = elem.parentNode.querySelector('div')
    div.classList.remove('valid-feedback')
    div.classList.add('invalid-feedback')
    div.innerHTML = text
    formOk.map(function(i){
      if(i.name == elem.name) return { name: elem.name, valid: false}
      else return i
    })
  }

  for (var elem of elements){
    if(elem.nodeName == 'BUTTON') continue;
    let obj = {}
    obj.name = elem.name
    obj.valid = false
    formOk.push(obj)

    elem.addEventListener('blur', function(){

      if (this.name === 'email'){
        if (this.value.trim() == '' || !regexEmail.test(this.value)) invalid(this, 'Ingresa un correo válido')
        else valid(this, 'Dato correcto')
      } else if (this.name==='password') {
        if (this.value.trim() == '') {
          invalid(this, 'Completá el campo')
        }else {
          valid(this, 'Dato correcto')
        }
      }else if (this.name === 'cpassword'){
        let password = form.querySelector('input[name="password"]')
        if (this.value.trim() == '') {
          invalid(this, 'Completá el campo')
        }else {
          valid(this, 'OK')
          valid(password, 'OK')
        }
      } else if (this.value.trim() === ''){
        invalid(this, 'Completá el campo')
      } else {
        valid(this, 'Dato correcto')
      }
    })
  }


  form.addEventListener('submit', function(e){
    var err = formOk.reduce(function(acc, i){
      if(i.valid == false) return acc + 1
      else return acc
    }, 0)
    if(err) e.preventDefault()
  })
});
