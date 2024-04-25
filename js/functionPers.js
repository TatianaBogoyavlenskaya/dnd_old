// Обработчики событий листа перонажа

//выбор персонажа из подменю
async function OnChangedPers(value) {
    let id = localStorage.getItem(value);
    document.cookie = "idPers = " + id + "; path = /";
    localStorage.setItem('namePers', value);
    localStorage.setItem('idPers', id);
    location.reload();
}
//Очистка формы для нового персонажа
function ClearForm() {
    let arrType = ["namePers", "level", "passive_attention", "bonus", "initiative", "class_armor", "speed", "health_max", "health_current", "health_bones",
        "forces", "dexterity", "endurance", "intelligence", "wisdom", "charisma",
        "forcesResult", "dexterityResult", "enduranceResult", "intelligenceResult", "wisdomResult", "charismaResult",
        "forcesSpasbrosok", "dexteritySpasbrosok", "enduranceSpasbrosok", "intelligenceSpasbrosok", "wisdomSpasbrosok", "charismaSpasbrosok",
        "acrobatics", "athletics", "attention", "survival", "training", "intimidation", "execution", "history", "sleight_hand", "magic", "medicine", "deception",
        "nature", "insight", "investigation", "religion", "reserve", "belief", "experience", "health_temporarily", "health_bones_curent"];
    for (let index = 0; index < arrType.length; index++) {
        ClearInput(arrType[index]);
    }
    let arrRadio = ["tests_death_success", "tests_death_failure"];
    for (let index = 0; index < arrRadio.length; index++) {
        for (let setValue = 1; setValue <= 3; setValue++) {
            let radio = document.getElementById(arrRadio[index] + setValue);
            radio.checked = false;
        }
    }
}

//Очистка инпутов
function ClearInput(name) {
    let inputName = document.getElementById(name);
    inputName.value = null;
}

//бросок кубика
async function OnChangedCube(cube, label = null, nameParametr = null, select = null) {
    console.log("!");
    let input = document.getElementById("namePers");
    let value = Math.floor(Math.random() * cube);
    let result = value;
    let text = document.getElementById("textareaChat");
    text.value += input.value + " => ";
    if (nameParametr != null) {
        let newValue;
        switch (select)
        {
            case "spasbrosok": {
                let input = document.getElementById(nameParametr + "Spasbrosok");
                newValue = input.value * 1;
                break;
            }
            case "skill":
            case 'initiative':{
                let input = document.getElementById(nameParametr);
                newValue = input.value * 1;
                break;
            }
            default: {
                let input = document.getElementById(nameParametr);
                newValue = Math.floor((input.value -10)/2);
                break;
            }
        }

        text.value += label + ": \n\t" + value + " + (" + newValue + ") = ";
        result = value + newValue;
    }
    else {
        text.value += "d" + cube + " = ";
    }
    //TODO: При спасбросках вылетает, проверить работу с бд, поля для запросов и т.д.
    text.value += result + "\n";
    text.scrollBy(0, 30);
}

//действия над здоровьем
async function ChengedHealth(value, label, nameColumn) {
    if (value == 0) return;
    let input = document.getElementById(nameColumn);
    let params = new URLSearchParams();
    params.set("idSelect", "1");
    params.set("idPers",  localStorage.getItem('idPers'));
    params.set("nameColumn", nameColumn);
    params.set("value", value);
    const newValue = await SendServer("http://localhost/DND/server/workWithServer.php", params);
    input.value = newValue["value"];
    input = document.getElementById("namePers");
    let text = document.getElementById("textareaChat");
    text.value += input.value + " => " + label + value + " = " + newValue["value"] + "\n";
    text.scrollBy(0, 30);
}

function KeyDown(e) {
    // console.log(e.code);
    //TODO: сделать проверку нажатой клавишы
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
    let  arrMoney = ["platinum", "gold", "silver", "bronze"];
    for (let index = 0; index < arrMoney.length; index++) {
        SetInput(arrMoney[index]);
    }
}
//вывод веса в инвентаре
function GetDataWaight() {
    let arrWaight = ["curentWeight", "maxWeight"];
    localStorage.setItem('maxWeight', localStorage.getItem("forces") * 10);//TODO: поставить правильную формулу расчета
    for (let index = 0; index < arrWaight.length; index++) {
        SetInput(arrWaight[index]);
    }
}
//вывод описания предмета
async function GetDiscriptionSubject(id) {
    //await CreateSelect(null, nameColumn, null, type, label, "updateSelect", input.value);
}