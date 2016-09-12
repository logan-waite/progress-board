$('document').ready(function() {

});

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
	console.log(ev.dataTransfer.setData("text", ev.target.id));
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    console.log(data);
    ev.target.appendChild(document.getElementById(data));
}