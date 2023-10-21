var idContent = 0;

document.querySelector("#add").onclick = function () {
  if (document.querySelector("#area1").value.length == 0) {
    alert("Must Insert a Value!");
  } else {
    var text = document.querySelector("#area1").value;
    var content = document.querySelector("#bts");
    var newc = `<div class="content" style="padding-top: 15px;"  id="content-${idContent}">
                        <input type="text" disabled class="area2" id="area2-${idContent}" value="${text}">  <br><br>
                        <div class="tombol col">
                            <a class="edit" href="#" onclick="edit(${idContent})">
                            Edit
                            </a>
                            <a class="delete" href="#" onclick="deleted(${idContent})">
                            Delete
                            </a>
                            <a class="check" href="#" onclick="done(${idContent})">
                            Done
                            </a>
                        </div>
                    </div>`;

    idContent += 1;
    content.innerHTML += newc;
    document.querySelector("#area1").value = "";
  }
};

function deleted(id) {
  const element = document.getElementById(`content-${id}`);
  element.remove();
}

function edit(id) {
  var area2 = document.getElementById(`area2-${id}`);
  area2.disabled = false;
}

function done(id) {
  var newvalue = document.getElementById(`area2-${id}`).value;
  var area2 = document.getElementById(`area2-${id}`);
  area2.disabled = true;
  area2.style.textDecoration = "line-through";
}
