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
        "nature", "insight", "investigation", "religion", "reserve", "belief", "experience", "health_temporarily"];
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