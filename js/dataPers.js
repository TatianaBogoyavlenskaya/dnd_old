// Заполнение данными листа персонажа
//Получить данные о персонаже
function GetDataPers() {
    GetNamePers();
}

async function GetNamePers(){
    let params = new URLSearchParams();
    params.set("idSelect", "3");
    params.set("table", "pers");
    params.set("nameColumn", "namePers");
    params.set("idPers", localStorage.getItem('idPers'));
    const newValue = await SendServer("http://localhost/DND/server/workWithServer.php", params);
    SetOption("namePerses", newValue["select"], newValue["value"]);
    SetInput("namePers", newValue["select"]);
    GetSelectList();
}

async function GetSelectList() {
    let params = new URLSearchParams();
    params.set("idSelect", "4");
    params.set("idPers", localStorage.getItem('idPers'));
    let arrTableSelect = ["class_pers", "race", "outlook"];
    let arrColumnSelect = ["nameClass", "nameRace", "nameOutlook"];
    for (let index = 0; index < arrTableSelect.length; index++) {
        params.set("table", arrTableSelect[index]);
        params.set("nameColumn", arrColumnSelect[index]);
        const newValue = await SendServer("http://localhost/DND/server/workWithServer.php", params);
        SetOption(arrTableSelect[index], newValue["select"], newValue["value"]);
    }
    GetDataInput();
}

async function GetDataInput() {
    let params = new URLSearchParams();
    params.set("idSelect", "5");
    params.set("idPers", localStorage.getItem('idPers'));
    let arrTable = ["pers", "characteristics"];
    let arrColumnPers = ["level", "bonus", "initiative", "inspiration", "class_armor", "speed", "health_max", "health_current",
        "health_bones", "health_temporarily", "health_bones_curent", "experience"];
    params.set("table", arrTable[0]);
    let newValue = await SendServer("http://localhost/DND/server/workWithServer.php", params);
    for (let index = 0; index < arrColumnPers.length; index++) {
        SetInput(arrColumnPers[index], newValue[arrColumnPers[index]]);
    }
    let arrRadio = ["tests_death_success", "tests_death_failure"];
    for (let index = 0; index < arrRadio.length; index++) {
        for (let setValue = 1; setValue <= 3; setValue++) {
            let radio = document.getElementById(arrRadio[index] + setValue);
            let countChecked = newValue[arrRadio[index]];
            if (countChecked < setValue) continue;
            radio.checked = true;
        }
    }
    let arrColumnCharacteristics = ["forces", "dexterity", "endurance", "intelligence", "wisdom", "charisma"];
    params.set("table", arrTable[1]);
    newValue = await SendServer("http://localhost/DND/server/workWithServer.php", params);
    for (let index = 0; index < arrColumnCharacteristics.length; index++) {
        SetInput(arrColumnCharacteristics[index], newValue[arrColumnCharacteristics[index]]);
    }
    GetResultCharacteristic();
    CalculeteSkillsAndSpasbrosoks();
}

