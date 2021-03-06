var createCard = document.getElementById("create-card");

function showCreate() {
  createCard.style.display = "block";
  document.getElementById("noteTitle").focus();
}

function closeCreate() {
  createCard.style.display = "none";
}

//to-do-list dodawanie i usuwanie
let todoList = null;
let todoForm = null;

todoList = document.querySelector("#todoList");
lastItem = document.querySelector("#lastItem");
todoForm = document.querySelector("#todoForm");


//addTask
function addTask() {

  var noteTitle = document.getElementById("noteTitle");
  var noteDesc = document.getElementById("noteDesc");

  //element container bootstrap
  const bootstrapCont = document.createElement("div");
  bootstrapCont.classList.add("col-lg-4", "col-md-6", "col-sm-12");

  //card
  const card = document.createElement("div");
  card.classList.add("card");

  //deletecard
  const deleteCard = document.createElement("button");
  deleteCard.classList.add("card-close");
  deleteCard.id = "deleteCard";
  deleteCard.innerText = "×";

  //cardtitle
  const cardTitle = document.createElement("div");
  cardTitle.classList.add("card-title");
  cardTitle.innerText = noteTitle.value;

  //cardDesc
  const cardDesc = document.createElement("div");
  cardDesc.classList.add("card-desc");
  cardDesc.innerText = noteDesc.value;

  //cardFooter
  const cardFooter = document.createElement("div");
  cardFooter.classList.add("card-footer", "d-flex", "justify-content-between");

  //cardStatus undone
  const cardStatus = document.createElement("button");
  cardStatus.classList.add("card-icon", "undone");

  //data
  const date = new Date();
  const dateText = `${date.getDate()}.${date.getMonth()+1}.${date.getFullYear()}`;

  const cardDate = document.createElement("div");
  cardDate.classList.add("card-date");
  cardDate.id = "cardDate";
  cardDate.innerText = dateText;

  //child & parents
  bootstrapCont.appendChild(card);
  card.appendChild(deleteCard);
  card.appendChild(cardTitle);
  card.appendChild(cardDesc);
  card.appendChild(cardFooter);
  cardFooter.appendChild(cardStatus);
  cardFooter.appendChild(cardDate);

  //join in all
  todoList.appendChild(bootstrapCont);

  //create button is last
  todoList.appendChild(lastItem);

  //reset
  noteDesc.value = "";
  noteTitle.value = "";
}

todoForm.addEventListener("submit", function (e) {
  e.preventDefault();

  //addTask function
  addTask();

  //refresh ↓
  //deleteTaskRefresh
  deleteTask = document.querySelectorAll(".card-close");
  deleteTask.forEach(obj => {
    obj.addEventListener("click", () => {
      obj.parentNode.parentNode.remove()
    })
  });

  //cardStatusRefresh
  cardStatus = document.querySelectorAll(".card-icon");
  cardStatus.forEach(obj => {
    obj.addEventListener("click", () => {

      if (obj.classList.contains("undone")) {
        obj.classList.remove("undone");
        obj.classList.add("done");

        obj.parentNode.parentNode.classList.add("finished");

      } else if (obj.classList.contains("done")) {
        obj.classList.remove("done");
        obj.classList.add("undone");
        obj.parentNode.parentNode.classList.remove("finished");
      }
    })
  });
});

//deleteTask
var deleteTask = document.querySelectorAll(".card-close");
deleteTask.forEach(obj => {
  obj.addEventListener("click", () => {
    obj.parentNode.parentNode.remove()
  })
});

//changeStatus
var cardStatus = document.querySelectorAll(".card-icon");
cardStatus.forEach(obj => {
  obj.addEventListener("click", () => {

    if (obj.classList.contains("undone")) {
      obj.classList.remove("undone");
      obj.classList.add("done");

      obj.parentNode.parentNode.classList.add("finished");

    } else if (obj.classList.contains("done")) {
      obj.classList.remove("done");
      obj.classList.add("undone");
      obj.parentNode.parentNode.classList.remove("finished");
    }
  })
});

//click outside div create-card
$(document).mouseup(function (e) {
  var container = $("#noteCreate");

  if (!container.is(e.target) && container.has(e.target).length === 0 && container.is(':visible')) {
    $("#create-card").hide();
  }
});

//esc key close create window
document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
        createCard.style.display = "none";
    }
};
