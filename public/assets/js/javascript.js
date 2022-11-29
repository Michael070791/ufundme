$(document).ready(function(){
  var base_url = "http://localhost:8080"
  var countries_url = base_url + '/countries.json';
  var cities_url = base_url + '/cities.json';

  var cities_data = {};
  fetch(countries_url)
    .then(res => res.json())
    .then((out) => {
        $.each(out, function(i,f) {
          //console.log(f);
          $('#inputCountry').append(`<option value="${f.name}">${f.name}</option>`)  
         })
    })
    .catch(err => { throw err });

    fetch(cities_url)
    .then(res => res.json())
    .then((out) => {
      cities_data = out;
    })
    .catch(err => { throw err });

    $('#inputCountry').on('change',function(){

      var country_name = $(this).val();
      
      var result = $.grep(cities_data, function(e){ 
        
        return e.country_name == country_name; 
      });
     if(result !== null){
      $('#inputCity').empty();
      $.each(result, function(e, v) {

        $('#inputCity').append(`<option value="${v.name}">${v.name}</option>`);
       
       })
     }
      
    });

  
});

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  function togglePassword(){
    const toggleIcon = document.querySelector('#togglePassword');
    var passwordValue = document.getElementById("password");
    const type = passwordValue.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordValue.setAttribute('type', type);
    toggleIcon.classList.toggle("fa-eye");
}
