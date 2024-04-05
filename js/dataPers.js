//установка набора данных в select
function SetOption(select, nameLocalStorage, checked) {
    var selectName = document.getElementById(select);
    value = localStorage.getItem(nameLocalStorage);
    all = JSON.parse(value);
    for (indexElement = 0; indexElement < all.length; indexElement++) {
        ob = document.createElement('Option');
        ob.setAttribute('value', all[indexElement]);
        ob.appendChild(document.createTextNode(all[indexElement]));
        selectName.appendChild(ob);
    };
    selectName.value = localStorage.getItem(checked);
}

//Установка данных в текстовые поля input
function SetInput(text) {
    var input = document.getElementById(text);
    input.value = localStorage.getItem(text);
}

//Расчет и установка значений модификаторов характеристик
function GetResultCharacteristic() {
    arrType = ["forces", "dexterity", "endurance", "intelligence", "wisdom", "charisma"];
    for (indexElementCharacteristic = 0; indexElementCharacteristic < arrType.length; indexElementCharacteristic++) {
        var getElement = document.getElementById(arrType[indexElementCharacteristic]);
        value = Math.floor((getElement.value - 10) / 2);
        var setElement = document.getElementById(arrType[indexElementCharacteristic] + "Result");
        setElement.value = value;
    }
}

arrSelect = ["namePerses", "race", "class_pers", "outlook"];
arrChecked = ["namePers", "race", "class_pers", "outlook"];
arrNameLocalStorage = ["allPers", "allRace", "allClass", "allOutlook"];
for (index = 0; index < arrSelect.length; index++) {
    SetOption(arrSelect[index], arrNameLocalStorage[index], arrChecked[index]);
}

arrType = ["namePers", "level", "passive_attention", "bonus", "initiative", "class_armor", "speed", "health_max", "health_current", "health_bones",
    "forces", "dexterity", "endurance", "intelligence", "wisdom", "charisma",
    "forcesSpasbrosok", "dexteritySpasbrosok", "enduranceSpasbrosok", "intelligenceSpasbrosok", "wisdomSpasbrosok", "charismaSpasbrosok",
    "acrobatics", "athletics", "attention", "survival", "training", "intimidation", "execution", "history", "sleight_hand", "magic", "medicine", "deception",
    "nature", "insight", "investigation", "religion", "reserve", "belief", "experience"];
for (index = 0; index < arrType.length; index++) {
    SetInput(arrType[index]);
}
GetResultCharacteristic();

