function dodajUKosaricu(id) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    alert("Artikl added!");
  }

  xhttp.open("GET", "index.php?page=cart&action=add&&id="+id); 
  xhttp.send();  
}

function izbrisiIzKosarice(id, elem) {
  const x = new XMLHttpRequest();
  x.onload = function () {
    alert("Article removed!");
    var sec = elem.parentElement.parentElement.parentElement.parentElement;
    sec.remove();
  }
  x.open("GET", "index.php?action=delete&id="+id);
  x.send();
}

function logout() {
  const y = new XMLHttpRequest();
  y.onload = function() {
    alert("You have logged out!");
    window.location.href = 'index.php?page=home';
  }
  y.open("GET", "index.php?page=login&action=logout");
  y.send();
}
