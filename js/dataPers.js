var inputName = document.getElementById("name");
inputName.value = localStorage.getItem("name");

var selectNamePers = document.getElementById("namePers");
pers = localStorage.getItem("allPers");
allPers = JSON.parse(pers);
SetOption(selectNamePers, allPers, localStorage.getItem("name"));
selectNamePers.value = localStorage.getItem("name");

var selectRace = document.getElementById("race");
race = localStorage.getItem("allRace");
allRace = JSON.parse(race);
SetOption(selectRace, allRace);
selectRace.value = localStorage.getItem("race");

var selectClass = document.getElementById("class");
classP = localStorage.getItem("allClass");
allClass = JSON.parse(classP);
SetOption(selectClass, allClass);
selectClass.value = localStorage.getItem("class");

var inputLevel = document.getElementById("level");
inputLevel.value = localStorage.getItem("level");

function SetOption(selectNamePers, allPers) {
    for (index = 0; index < allPers.length; index++) {
        ob = document.createElement('Option');
        ob.setAttribute('value', allPers[index]);
        ob.appendChild(document.createTextNode(allPers[index]));
        selectNamePers.appendChild(ob);
    };
}
