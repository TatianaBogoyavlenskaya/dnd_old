//выбор персонажа из подменю
function OnChangedPers(value) {
    id = localStorage.getItem(value);
    document.cookie = "idPers = " + id;
    location.reload();
}
//Очиства формы для нового персонажа
function ClearForm() {
    var inputName = document.getElementById("name");
    inputName.value = "";
}