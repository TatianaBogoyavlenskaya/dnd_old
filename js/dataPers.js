// Заполнение данными листа персонажа
//Получить данные о персонаже
function GetDataPers() {
    GetNamePers();
}

async function GetNamePers() {
    params = new URLSearchParams();
    params.set("idSelect", 3);
    params.set("table", "pers");
    params.set("nameColumn", "namePers");
    params.set("idPers", localStorage.getItem('idPers'));
    const newValue = await SendServer("http://localhost/DND/server/workWithServer.php", params);
    SetOption("namePerses", newValue["select"], newValue["value"]);
    SetInput("namePers", newValue["select"]);
    GetSelectList();
}

async function GetSelectList() {
    params = new URLSearchParams();
    params.set("idSelect", 4);
    params.set("idPers", localStorage.getItem('idPers'));
    arrTableSelect = ["class_pers", "race", "outlook"];
    arrColumnSelect = ["nameClass", "nameRace", "nameOutlook"];
    for (index = 0; index < arrTableSelect.length; index++) {
        params.set("table", arrTableSelect[index]);
        params.set("nameColumn", arrColumnSelect[index]);
        const newValue = await SendServer("http://localhost/DND/server/workWithServer.php", params);
        SetOption(arrTableSelect[index], newValue["select"], newValue["value"]);
    }
    GetDataInput();
}

async function GetDataInput() {
    params = new URLSearchParams();
    params.set("idSelect", 5);
    params.set("idPers", localStorage.getItem('idPers'));
    arrTable = ["pers", "characteristics"];
    arrColumnPers = ["level", "bonus", "initiative", "inspiration", "class_armor", "speed", "health_max", "health_current",
        "health_bones", "health_temporarily", "health_bones_curent", "experience"];
    params.set("table", arrTable[0]);
    newValue = await SendServer("http://localhost/DND/server/workWithServer.php", params);
    for (index = 0; index < arrColumnPers.length; index++) {
        SetInput(arrColumnPers[index], newValue[arrColumnPers[index]]);
    }
    arrRadio = ["tests_death_success", "tests_death_failure"];
    for (index = 0; index < arrRadio.length; index++) {
        for (setValue = 1; setValue <= 3; setValue++) {
            var radio = document.getElementById(arrRadio[index] + setValue);
            countChecked = newValue[arrRadio[index]];
            if (countChecked < setValue) continue;
            radio.checked = true;
        }
    }
    arrColumnCharacteristics = ["forces", "dexterity", "endurance", "intelligence", "wisdom", "charisma"];
    params.set("table", arrTable[1]);
    newValue = await SendServer("http://localhost/DND/server/workWithServer.php", params);
    for (index = 0; index < arrColumnCharacteristics.length; index++) {
        SetInput(arrColumnCharacteristics[index], newValue[arrColumnCharacteristics[index]]);
    }
    GetResultCharacteristic();
    CalculeteSkillsAndSpasbrosoks();
}

