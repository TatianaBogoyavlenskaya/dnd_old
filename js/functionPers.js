// Обработчики событий листа перонажа

//выбор персонажа из подменю
function OnChangedPers(value) {
    id = localStorage.getItem(value);
    document.cookie = "idPers = " + id;
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
        console.log(text);
        text.value += label + ": \n\t" + value + " + (" + inputParameter.value + ") = ";
    }
    else {
        text.value += "d" + cube + " = ";
    }
    text.value += result + "\n";
    text.scrollBy(0, 30);
}

//действия над здоровьем
function ChengedHealth(value, label, nameColumn, type) {
    var input = document.getElementById(text);
    input.value = value;
    CreateSelect(null, nameColumn, null, type, true, label, input.value);
}

//создание запроса
function CreateSelect(table, nameColumn, cube, type, isUpdate, label, value = null) {
    cookie = document.cookie;
    cookieParts = cookie.split("=");
    index = 0;
    while (cookieParts[index] != "idPers") {
        index += 2;
        if (index > cookieParts.length) {
            return;
        }
    }
    id = cookieParts[index + 1];
    params = new URLSearchParams();
    params.set("idPers", id);
    params.set("table", table);
    params.set("nameColumn", nameColumn);
    params.set("cube", cube);
    params.set("value", value);
    params.set("type", type);
    params.set("typeSelect", ESelectType.updateSelect);
    SendServer("http://localhost/DND/pers/server/workWithServer.php", params, label);
}

//основные характеристики
const ESelectType = {
    update: 'update',
    select: 'select',
    updateSelect: 'updateSelect',
    delete: 'delete'
}

//отправка данных на сервер
async function SendServer(addres, params, label) {
    await fetch(addres, {
        method: "POST",
        body: params
    }).then(responce => responce.json())
        .then((data) => {
            var text = document.getElementById("textareaChat");
            text.value += data["namePers"] + " => " + label + ": \n\t" + data["value"] + "\n";
            text.scrollBy(0, 30);
        });
}

function OpenStock() {
    //TODO: открыть другой файл во 2 окне
}