// Заполнение данными листа персонажа
arrSelect = ["namePerses", "race", "class_pers", "outlook"];
arrChecked = ["namePers", "race", "class_pers", "outlook"];
arrNameLocalStorage = ["allPers", "allRace", "allClass", "allOutlook"];
for (index = 0; index < arrSelect.length; index++) {
    SetOption(arrSelect[index], arrNameLocalStorage[index], arrChecked[index]);
}
arrType = ["namePers", "level", "passive_attention", "bonus", "initiative", "inspiration", "class_armor", "speed", "health_max", "health_current", "health_bones",
    "forces", "dexterity", "endurance", "intelligence", "wisdom", "charisma", "experience"];
for (index = 0; index < arrType.length; index++) {
    SetInput(arrType[index]);
}

CalculeteSkillsAndSpasbrosoks();
GetResultCharacteristic();

arrRadio = ["tests_death_success", "tests_death_failure"];
for (index = 0; index < arrRadio.length; index++) {
    valueRadio = localStorage.getItem(arrRadio[index]);
    if (valueRadio == 0) continue;
    for (setValue = 1; setValue <= valueRadio; setValue++) {
        var radio = document.getElementById(arrRadio[index] + setValue);
        radio.checked = true;
    }
}
