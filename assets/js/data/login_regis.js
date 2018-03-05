/* login
* costomer login
*/

function myvalid(){
	var elements = document.getElementsByTagName("INPUT");
	for (var i = 0; i < elements.length; i++) {
	    elements[i].oninvalid = function(e) {
	        e.target.setCustomValidity("");
	        if (e.target.validity.valueMissing) {
						war="Tidak boleh kosong.";
	        }else if(e.target.validity.typeMismatch){
						war="Tipe tidak sesuai.";
          }else if(e.target.validity.patternMismatch){
						war="Pola tidak sesuai.";
          }else if(e.target.validity.rangeOverflow){
						war="Nilai lebih dari batas maksimal.";
          }else if(e.target.validity.rangeUnderflow){
						war="Nilai kurang dari batas minimum.";
          }else{
						war="Coba koreksi inputan ini.";
					}
					e.target.setCustomValidity(war);
	    };
	    elements[i].oninput = function(e) {
	        e.target.setCustomValidity("");
	    };
	}
}

//Function costomer login
function loginCustomer() {
  $("#userloginform")[0].checkValidity() ?

    $('#userlogin').val()!='' || $('#userpass').val()!='' ?
      $.ajax({
          url: '../public/customer/login',
          data: $('#userloginform').serialize(),
          type: 'POST',
          dataType: 'json',
          success: function(data){
            window.localStorage["datalogin"] = JSON.stringify(data);
          }
      }) : console.log('Tidak boleh kosong!')

  : myvalid(), $('#userloginform')[0].reportValidity();
}

//Function costomer login
function regisCustomer() {
  $("#regisloginform")[0].checkValidity() ?

    $('#regislogin').val()!='' || $('#regispass').val()!='' ?
      $.ajax({
          url: '../public/customer/regis',
          data: $('#regisloginform').serialize(),
          type: 'POST',
          dataType: 'json',
          success: function(data){
            console.log(data);
          }
      }) : console.log('Tidak boleh kosong!')

  : myvalid(), $('#regisloginform')[0].reportValidity();
}
