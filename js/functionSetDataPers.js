// Функции заполнения листа персонажа
// установка набора данных в select
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
function CalculeteSkillsAndSpasbrosoks() {
    arrSkills = [
        new Skill(ESkillType.forces, "forcesSpasbrosok", "forcesSpasbrosok"),
        new Skill(ESkillType.dexterity, "dexteritySpasbrosok", "dexteritySpasbrosok"),
        new Skill(ESkillType.endurance, "enduranceSpasbrosok", "enduranceSpasbrosok"),
        new Skill(ESkillType.intelligence, "intelligenceSpasbrosok", "intelligenceSpasbrosok"),
        new Skill(ESkillType.wisdom, "wisdomSpasbrosok", "wisdomSpasbrosok"),
        new Skill(ESkillType.charisma, "charismaSpasbrosok", "charismaSpasbrosok"),

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
    bonus = input.value;

    for (indexSkills = 0; indexSkills < arrSkills.length; indexSkills++) {
        var radio = document.getElementById(arrSkills[indexSkills].Tag + "Radio");
        radio.checked = (localStorage.getItem(arrSkills[indexSkills].Tag + "Radio") == 1) ? true : false;
        var input = document.getElementById(arrSkills[indexSkills].Type);
        resultValue = Math.floor((input.value - 10) / 2);
        if (radio.checked == true) {
            resultValue = resultValue + bonus * 1;
        }
        localStorage.setItem(arrSkills[indexSkills].Tag, resultValue);
        SetInput(arrSkills[indexSkills].Tag);
    }

    var input = document.getElementById(ESkillType.intelligence);
    var resultValue = Math.floor((input.value - 10) / 2);
    localStorage.setItem("passive_attention", 10 + resultValue);
    SetInput("passive_attention");
}