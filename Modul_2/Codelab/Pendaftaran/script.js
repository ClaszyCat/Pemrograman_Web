document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault();

  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var alamat = document.getElementById("alamat").value;

  if (name === "" || email === "" || alamat === "") {
    alert("Tolong diisi semua bagian");
  } else {
    alert("Pesan telah dikirim");
  }
});
