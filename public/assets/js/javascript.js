$(document).ready(function(){
  var base_url = "http://localhost:8080"
  var countries_url = base_url + '/countries.json';
  var cities_url = base_url + '/cities.json';
  $('#tableData').DataTable();
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
    $('#donatingAmount').on('keyup', function(){
      var amount = parseFloat($(this).val());
      $('#donateAmount').text(amount.toFixed(2));
      var tip = amount*0.15;
      $('#tipAmount').text(tip.toFixed(2));
      var total = (amount + tip);
      $('#totalAmount').text(total.toFixed(2));
    })
    //card
    $('#fund-card').on('click', function(e){
      var href = $(e.currentTarget).data('href');
      window.location = href;
    });
});

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }

  function togglePassword(){
    const toggleIcon = document.querySelector('#togglePassword');
    var passwordValue = document.getElementById("password");
    const type = passwordValue.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordValue.setAttribute('type', type);
    toggleIcon.classList.toggle("fa-eye");
}

function onFileUpload(input, id) {
  id = id || '#ajaxImgUpload';
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $(id).attr('src', e.target.result).width(210).height(210)
      };
      reader.readAsDataURL(input.files[0]);
  }
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("fa-bars" ,"fa-list");
}else
  sidebarBtn.classList.replace("fa-list", "fa-bars");
  
}
