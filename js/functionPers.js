// Обработчики событий листа перонажа

//выбор персонажа из подменю
async function OnChangedPers(value) {
    id = localStorage.getItem(value);
    document.cookie = "idPers = " + id + "; path = /";
    localStorage.setItem('namePers', value);
    location.reload();
}
//Очиства формы для нового персонажа
function ClearForm() {
    arrType = ["namePers", "level", "passive_attention", "bonus", "initiative", "class_armor", "speed", "health_max", "health_current", "health_bones",
        "forces", "dexterity", "endurance", "intelligence", "wisdom", "charisma",
        "forcesResult", "dexterityResult", "enduranceResult", "intelligenceResult", "wisdomResult", "charismaResult",
        "forcesSpasbrosok", "dexteritySpasbrosok", "enduranceSpasbrosok", "intelligenceSpasbrosok", "wisdomSpasbrosok", "charismaSpasbrosok",
        "acrobatics", "athletics", "attention", "survival", "training", "intimidation", "execution", "history", "sleight_hand", "magic", "medicine", "deception",
        "nature", "insight", "investigation", "religion", "reserve", "belief", "experience", "health_temporarily", "health_bones_curent"];
    for (index = 0; index < arrType.length; index++) {
        ClearInput(arrType[index]);
    }
    arrRadio = ["tests_death_success", "tests_death_failure"];
    for (index = 0; index < arrRadio.length; index++) {
        for (setValue = 1; setValue <= 3; setValue++) {
            var radio = document.getElementById(arrRadio[index] + setValue);
            radio.checked = false;
        }
    }
}

//Очистка инпутов
function ClearInput(name) {
    var inputName = document.getElementById(name);
    inputName.value = null;
}

//бросок кубика
function OnChangedCube(cube, label = null, nameParametr = null) {
    var input = document.getElementById("namePers");
    value = Math.floor(Math.random() * cube);
    result = value;
    var text = document.getElementById("textareaChat");
    text.value += input.value + " => ";
    if (nameParametr != null) {
        var inputParameter = document.getElementById(nameParametr);
        result += inputParameter.value * 1;
        text.value += label + ": \n\t" + value + " + (" + inputParameter.value + ") = ";
    }
    else {
        text.value += "d" + cube + " = ";
    }
    text.value += result + "\n";
    text.scrollBy(0, 30);
}

//действия над здоровьем
async function ChengedHealth(value, label, nameColumn) {
    if (value == 0) return;
    var input = document.getElementById(nameColumn);
    input.value = value;
    const newValue = await CreateSelect(null, nameColumn, null, label, 1, input.value);
    input.value = newValue;

    var input = document.getElementById("namePers");
    var text = document.getElementById("textareaChat");
    text.value += input.value + " => " + label + value + " = " + newValue + "\n";
}

function KeyDown(e) {
    // console.log(e.code);
    //TODO: сделать проверку нажатой клавишы
}

//создание запроса
function CreateSelect(table, nameColumn, cube, label, idSelect, value = null) {
    id = localStorage.getItem('idPers');
    params = new URLSearchParams();
    params.set("idPers", id);
    params.set("table", table);
    params.set("nameColumn", nameColumn);
    params.set("cube", cube);
    params.set("value", value);
    params.set("idSelect", idSelect);
    return SendServer("http://localhost/DND/server/workWithServer.php", params, label);
}

//отправка данных на сервер
async function SendServer(addres, params, label) {
    return await fetch(addres, {
        method: "POST",
        body: params
    }).then(responce => responce.json())
        .then((data) => {
            return data["value"];
        });
}

function OpenStock() {
    location.assign("../stock/stockPers.php");
    // Открыть в новой вкладке
}
function OpenListPers() {
    location.assign("../pers/pers.php");
}

//добавление персов в выпадающий список
function SetSelectPers() {
    SetOption("namePerses", "allPers", "namePers");
}

//получение инвентаря
function GetStock() {
    GetDataMoney();
    GetDataWaight();
}

//получение количества денег
function GetDataMoney() {
    arrMoney = ["platinum", "gold", "silver", "bronze"];
    for (index = 0; index < arrMoney.length; index++) {
        SetInput(arrMoney[index]);
    }
}
//вывод веса в инвентаре
function GetDataWaight() {
    arrWaight = ["curentWeight", "maxWeight"];
    maxWeight = localStorage.getItem("forces") * 10; //TODO: поставить правильную формулу расчета
    localStorage.setItem('maxWeight', maxWeight);
    for (index = 0; index < arrWaight.length; index++) {
        SetInput(arrWaight[index]);
    }
}
//вывод описания предмета
async function GetDiscriptionSubject(id) {
    //await CreateSelect(null, nameColumn, null, type, label, "updateSelect", input.value);
}