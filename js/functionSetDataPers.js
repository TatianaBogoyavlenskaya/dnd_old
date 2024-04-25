// Функции заполнения листа персонажа

function SetOption(select, checked, value) {
    let selectName = document.getElementById(select);
    for (let indexElement = 0; indexElement < value.length; indexElement++) {
        let ob = document.createElement('Option');
        ob.setAttribute('value', value[indexElement]);
        ob.appendChild(document.createTextNode(value[indexElement]));
        selectName.appendChild(ob);
    }
    selectName.value = checked;
}

//Установка данных в текстовые поля input
function SetInput(id, text) {
    let input = document.getElementById(id);
    input.value = text;
}

//Расчет и установка значений модификаторов характеристик
function GetResultCharacteristic() {
    let arrType = ["forces", "dexterity", "endurance", "intelligence", "wisdom", "charisma"];
    for (let indexElementCharacteristic = 0; indexElementCharacteristic < arrType.length; indexElementCharacteristic++) {
        let getElement = document.getElementById(arrType[indexElementCharacteristic]);
        let setElement = document.getElementById(arrType[indexElementCharacteristic] + "Result");
        setElement.value = Math.floor((getElement.value - 10) / 2);
    }
}

//основные характеристики
const ESkillType = {
    forces: 'forces',
    dexterity: 'dexterity',
    endurance: 'endurance',
    intelligence: 'intelligence',
    wisdom: 'wisdom',
    charisma: 'charisma'
}

//класс навыков и спасбросков
class Skill {
    constructor(type, name, tag) {
        this.Type = type;
        this.Name = name;
        this.Tag = tag;
    }
}

//Расчет характеристик
async function CalculeteSkillsAndSpasbrosoks() {
    let arrSkills = [
        new Skill(ESkillType.forces, "forces", "forcesSpasbrosok"),
        new Skill(ESkillType.dexterity, "dexterity", "dexteritySpasbrosok"),
        new Skill(ESkillType.endurance, "endurance", "enduranceSpasbrosok"),
        new Skill(ESkillType.intelligence, "intelligence", "intelligenceSpasbrosok"),
        new Skill(ESkillType.wisdom, "wisdom", "wisdomSpasbrosok"),
        new Skill(ESkillType.charisma, "charisma", "charismaSpasbrosok")
    ];
    let arrSkills2 = [
        new Skill(ESkillType.dexterity, "acrobatics", "acrobatics"),
        new Skill(ESkillType.endurance, "athletics", "athletics"),
        new Skill(ESkillType.intelligence, "attention", "attention"),
        new Skill(ESkillType.forces, "survival", "survival"),
        new Skill(ESkillType.charisma, "training", "training"),
        new Skill(ESkillType.forces, "intimidation", "intimidation"),
        new Skill(ESkillType.charisma, "execution", "execution"),
        new Skill(ESkillType.wisdom, "history", "history"),
        new Skill(ESkillType.dexterity, "sleight_hand", "sleight_hand"),
        new Skill(ESkillType.intelligence, "magic", "magic"),
        new Skill(ESkillType.wisdom, "medicine", "medicine"),
        new Skill(ESkillType.charisma, "deception", "deception"),
        new Skill(ESkillType.wisdom, "nature", "nature"),
        new Skill(ESkillType.wisdom, "insight", "insight"),
        new Skill(ESkillType.intelligence, "investigation", "investigation"),
        new Skill(ESkillType.wisdom, "religion", "religion"),
        new Skill(ESkillType.dexterity, "reserve", "reserve"),
        new Skill(ESkillType.charisma, "belief", "belief")
    ];
    input = document.getElementById("bonus");
    let bonus = input.value;
    let table = ["spasbrosok", "skills"];

    let params = new URLSearchParams();
    params.set("idSelect", "5");
    params.set("table", table[0]);
    params.set("idPers", localStorage.getItem('idPers'));
    let newValue = await SendServer("http://localhost/DND/server/workWithServer.php", params);

    for (let indexSkills = 0; indexSkills < arrSkills.length; indexSkills++) {
        let radio = document.getElementById(arrSkills[indexSkills].Tag + "Radio");
        radio.checked = (newValue[arrSkills[indexSkills].Name] == 1) ? true : false;
        let input = document.getElementById(arrSkills[indexSkills].Type);
        resultValue = Math.floor((input.value - 10) / 2);
        if (radio.checked) {
            resultValue = resultValue + bonus * 1;
        }
        SetInput(arrSkills[indexSkills].Tag, resultValue);
    }
    params.set("table", table[1]);
    newValue = await SendServer("http://localhost/DND/server/workWithServer.php", params);
    for (let indexSkills = 0; indexSkills < arrSkills2.length; indexSkills++) {
        let radio = document.getElementById(arrSkills2[indexSkills].Tag + "Radio");
        radio.checked = (newValue[arrSkills2[indexSkills].Name] == 1) ? true : false;
        let input = document.getElementById(arrSkills2[indexSkills].Type);
        resultValue = Math.floor((input.value - 10) / 2);
        if (radio.checked) {
            resultValue = resultValue + bonus * 1;
        }
        SetInput(arrSkills2[indexSkills].Tag, resultValue);
    }
    var input = document.getElementById(ESkillType.intelligence);
    var resultValue = Math.floor((input.value - 10) / 2);
    SetInput("passive_attention", 10 + resultValue);
}
