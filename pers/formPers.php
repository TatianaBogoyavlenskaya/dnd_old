<!-- Формирование формы с данными о персонаже -->
<form method="post">
    <?php include_once "../allPanels/selectedPers.php";?>
    <!-- Основные параметры персонажа -->
    <div class="generalInfo">
        <div class = "name">
            <div class="nameDiv"><input type="text" name="namePers" id="namePers" class="generalInfoElement namePers"></div>
        </div>
        <div class="generalInfoRow1">
            <div class="generalInfoLabel">
                <div class="generalInfoDiv">Класс</div>
                <div class="dataDiv"><select name="class" id = "class_pers" class="generalInfoElement"></select></div>
            </div>
            <div class="generalInfoLabel">
                <div class="generalInfoDiv">Уровень</div>
                <div class="dataDiv"><input type="text" name="level" id = "level" class="generalInfoElement"></div>
            </div>
        </div>
        <div class="generalInfoRow2">
            <div class="generalInfoLabel">
                <div class="generalInfoDiv">Расса</div>
                <div class="dataDiv"><select name="race" id = "race" class="generalInfoElement"></select></div>
            </div>
            <div class="generalInfoLabel">
                <div class="generalInfoDiv">Мировоззрение</div>
                <div class="dataDiv"><select name="outlook" id = "outlook" class="generalInfoElement"></select></div>
            </div>
            <div class="generalInfoLabel">
                <div class="generalInfoDiv">Опыт</div>
                <div class="dataDiv"><input type="text" name="experience" id = "experience" class="generalInfoElement"></div>
            </div>   
        </div>
    </div>

        <!-- Основные характеристики -->
    <div class="columnCharacteristic1_2">
        <!-- характеристики -->
        <div class ="columnCharacteristic1">
            <div class="groupCharacteristicsElement clickableDiv" onclick="OnChangedCube(20,'Сила','forcesResult');">Сила<br>
                <input readonly type="text" name="forcesResult" id="forcesResult" class="characteristicsResultElement clickableInput">
                <input readonly type="text" name="forces" id="forces" class="characteristicsElement clickableInput">
            </div>
            <div class="groupCharacteristicsElement clickableDiv" onclick="OnChangedCube(20,'Ловкость','dexterityResult');">Ловкость<br>
                <input readonly type="text" name="dexterityResult" id="dexterityResult" class="characteristicsResultElement clickableInput">
                <input readonly type="text" name="dexterity" id="dexterity" class="characteristicsElement clickableInput">
            </div>
            <div class="groupCharacteristicsElement clickableDiv" onclick="OnChangedCube(20,'Выносливость','enduranceResult');">Выносливость<br>
                <input readonly type="text" name="enduranceResult" id="enduranceResult" class="characteristicsResultElement clickableInput">
                <input readonly type="text" name="endurance" id="endurance" class="characteristicsElement clickableInput">
            </div>
            <div class="groupCharacteristicsElement clickableDiv" onclick="OnChangedCube(20,'Интеллект','intelligenceResult');">Интеллект<br>
                <input readonly type="text" name="intelligenceResult" id="intelligenceResult" class="characteristicsResultElement clickableInput">
                <input readonly type="text" name="intelligence" id="intelligence" class="characteristicsElement clickableInput">
            </div>
            <div class="groupCharacteristicsElement clickableDiv" onclick="OnChangedCube(20,'Мудрость','wisdomResult');">Мудрость<br>
                <input readonly type="text" name="wisdomResult" id="wisdomResult" class="characteristicsResultElement clickableInput">
                <input readonly type="text" name="wisdom" id="wisdom" class="characteristicsElement clickableInput">
            </div>
            <div class="groupCharacteristicsElement clickableDiv" onclick="OnChangedCube(20,'Харизма','charismaResult');">Харизма<br>
                <input readonly type="text" name="charismaResult" id="charismaResult" class="characteristicsResultElement clickableInput">
                <input readonly type="text" name="charisma" id="charisma" class="characteristicsElement clickableInput">
            </div>
        </div>

        <!-- спасброски и навыки -->
        <div class ="columnCharacteristic2">
            <!-- Вдохновение и Бонус умения -->
            <div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic headerFooter">Вдохновение</label>
                    <input readonly type="text" name="inspiration" id="inspiration" class="inspiration">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic headerFooter">Бонус умения</label>
                    <input readonly type="text" name="bonus" id="bonus" class="bonus">
                </div>
            </div>
            <hr>
            <!-- спасброски -->
            <div>
                <p>Спасброски</p>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Спасбросок (Сила)','forcesSpasbrosok');">
                    <input readonly type="radio" class="radioSpasbrosok" name = "forcesSpasbrosokRadio" id="forcesSpasbrosokRadio">
                    <label class="nameCharacteristic clickable">Сила</label>
                    <input readonly type="text" name="forcesSpasbrosok" id="forcesSpasbrosok" class="spasbrosokElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Спасбросок (Ловкость)','dexteritySpasbrosok');">                   
                    <input readonly type="radio" class="radioSpasbrosok" name = "dexteritySpasbrosokRadio" id="dexteritySpasbrosokRadio">
                    <label class="nameCharacteristic clickable">Ловкость</label>
                    <input readonly type="text" name="dexteritySpasbrosok" id="dexteritySpasbrosok" class="spasbrosokElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Спасбросок (Выносливость)','enduranceSpasbrosok');">
                    <input readonly type="radio" class="radioSpasbrosok" name = "enduranceSpasbrosokRadio" id="enduranceSpasbrosokRadio">
                    <label class="nameCharacteristic clickable">Выносливость</label>
                    <input readonly type="text" name="enduranceSpasbrosok" id="enduranceSpasbrosok" class="spasbrosokElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Спасбросок (Интеллект)','intelligenceSpasbrosok');">
                    <input readonly type="radio" class="radioSpasbrosok" name = "intelligenceSpasbrosokRadio" id="intelligenceSpasbrosokRadio">
                    <label class="nameCharacteristic clickable">Интеллект</label>
                    <input readonly type="text" name="intelligenceSpasbrosok" id="intelligenceSpasbrosok" class="spasbrosokElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Спасбросок (Мудрость)','wisdomSpasbrosok');">
                    <input readonly type="radio" class="radioSpasbrosok" name = "wisdomSpasbrosokRadio" id="wisdomSpasbrosokRadio">
                    <label class="nameCharacteristic clickable">Мудрость</label>
                    <input readonly type="text" name="wisdomSpasbrosok" id="wisdomSpasbrosok" class="spasbrosokElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Спасбросок (Харизма)','charismaSpasbrosok');">
                    <input readonly type="radio" class="radioSpasbrosok" name = "charismaSpasbrosokRadio" id="charismaSpasbrosokRadio">
                    <label class="nameCharacteristic clickable">Харизма</label>
                    <input readonly type="text" name="charismaSpasbrosok" id="charismaSpasbrosok" class="spasbrosokElement clickableInput">
                </div>
            </div>
            <hr>
            <!-- Навыки -->
            <div>
                <p>Навыки</p>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Акробатика','acrobatics');">
                    <input readonly type="radio" class="radioCharacteristic" name = "acrobaticsRadio" id="acrobaticsRadio">
                    <label class="nameCharacteristic clickableLabel">Акробатика</label>
                    <input readonly type="text" name="acrobatics" id="acrobatics" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Атлетика','athletics');">
                    <input readonly type="radio" class="radioCharacteristic" name = "athleticsRadio" id="athleticsRadio">
                    <label class="nameCharacteristic clickableLabel">Атлетика</label>
                    <input readonly type="text" name="athletics" id="athletics" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Внимание','attention');">
                    <input readonly type="radio" class="radioCharacteristic" name = "attentionRadio" id="attentionRadio">
                    <label class="nameCharacteristic clickableLabel">Внимание</label>
                    <input readonly type="text" name="attention" id="attention" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Выживание','survival');">
                    <input readonly type="radio" class="radioCharacteristic" name = "survivalRadio" id="survivalRadio">
                    <label class="nameCharacteristic clickableLabel">Выживание</label>
                    <input readonly type="text" name="survival" id="survival" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Дрессировка','training');">
                    <input readonly type="radio" class="radioCharacteristic" name = "trainingRadio" id="trainingRadio">
                    <label class="nameCharacteristic clickableLabel">Дрессировка</label>
                    <input readonly type="text" name="training" id="training" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Запугивание','intimidation');">
                    <input readonly type="radio" class="radioCharacteristic" name = "intimidationRadio" id="intimidationRadio">
                    <label class="nameCharacteristic clickableLabel">Запугивание</label>
                    <input readonly type="text" name="intimidation" id="intimidation" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Исполнение','execution');">
                    <input readonly type="radio" class="radioCharacteristic" name = "executionRadio" id="executionRadio">
                    <label class="nameCharacteristic clickableLabel">Исполнение</label>
                    <input readonly type="text" name="execution" id="execution" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'История','history');">
                    <input readonly type="radio" class="radioCharacteristic" name = "historyRadio" id="historyRadio">
                    <label class="nameCharacteristic clickableLabel">История</label>
                    <input readonly type="text" name="history" id="history" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Ловкость рук','sleight_hand');">
                    <input readonly type="radio" class="radioCharacteristic" name = "sleight_handRadio" id="sleight_handRadio">
                    <label class="nameCharacteristic clickableLabel">Ловкость рук</label>
                    <input readonly type="text" name="sleight_hand" id="sleight_hand" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Магия','magic');">
                    <input readonly type="radio" class="radioCharacteristic" name = "magicRadio" id="magicRadio">
                    <label class="nameCharacteristic clickableLabel">Магия</label>
                    <input readonly type="text" name="magic" id="magic" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Медецина','medicine');">
                    <input readonly type="radio" class="radioCharacteristic" name = "medicineRadio" id="medicineRadio">
                    <label class="nameCharacteristic clickableLabel">Медецина</label>
                    <input readonly type="text" name="medicine" id="medicine" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Обман','deception');">
                    <input readonly type="radio" class="radioCharacteristic" name = "deceptionRadio" id="deceptionRadio">
                    <label class="nameCharacteristic clickableLabel">Обман</label>
                    <input readonly type="text" name="deception" id="deception" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Природа','nature');">
                    <input readonly type="radio" class="radioCharacteristic" name = "natureRadio" id="natureRadio">
                    <label class="nameCharacteristic clickableLabel">Природа</label>
                    <input readonly type="text" name="nature" id="nature" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Проницательность','insight');">
                    <input readonly type="radio" class="radioCharacteristic" name = "insightRadio" id="insightRadio">
                    <label class="nameCharacteristic clickableLabel">Проницательность</label>
                    <input readonly type="text" name="insight" id="insight" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Расследование','investigation');">
                    <input readonly type="radio" class="radioCharacteristic" name = "investigationRadio" id="investigationRadio">
                    <label class="nameCharacteristic clickableLabel">Расследование</label>
                    <input readonly type="text" name="investigation" id="investigation" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Религия','religion');">
                    <input readonly type="radio" class="radioCharacteristic" name = "religionRadio" id="religionRadio">
                    <label class="nameCharacteristic clickableLabel">Религия</label>
                    <input readonly type="text" name="religion" id="religion" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Скрытность','reserve');">
                    <input readonly type="radio" class="radioCharacteristic" name = "reserveRadio" id="reserveRadio">
                    <label class="nameCharacteristic clickableLabel">Скрытность</label>
                    <input readonly type="text" name="reserve" id="reserve" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Убеждение','belief');">
                    <input readonly type="radio" class="radioCharacteristic" name = "beliefRadio" id="beliefRadio">
                    <label class="nameCharacteristic clickableLabel">Убеждение</label>
                    <input readonly type="text" name="belief" id="belief" class="skillsElement clickableInput">
                </div>
            </div>
        </div>
        <!-- Пассивное внимание -->
        <div>
            <div  class="groupPassiveAttention">
                <label class="passiveAttention">Пассивное внимание</label>
                <input readonly type="text" name="passive_attention" id="passive_attention" class="passive_attention">
            </div>
        </div>
    </div>

<!-- броня, здоровье, оружие  -->
    <div class ="columnCharacteristic3"> 
        <!-- броня -->
        <div class="classArmorInitiativeSpeed">
            <div class="divInfoElement">
                <div class="nameInfoElement"> Класс брони</div>
                <input readonly type="text" name="class_armor" id="class_armor" class="infoElement">
            </div>
            <div class="divInfoElement clickableDiv" onclick="OnChangedCube(20,'Инициатива','initiative');">
                <div class="nameInfoElement clickableDiv"> Инициатива</div>
                <input readonly type="text" name="initiative" id="initiative" class="infoElement clickableDiv">
            </div>
            <div class="divInfoElement">
                <div class="nameInfoElement"> Скорость</div>
                <input readonly type="text" name="speed" id="speed" class="infoElement">
            </div>
        </div>
        <hr>
        <!-- здоровье -->
        <div class="health">
            <div class= "healthBonesTestsDeath">
                <div class="nameHealth"><p>Здоровье</p></div>
                <label class="nameBonesHealthElement"><p>Максимум здоровья</p></label>
                <input readonly type="text" name="health_max" id="health_max" class="healthMaxElement">
                <div class="healthBones">
                    <div class="nameHealthElement"><p>Текущие пункты <br>здоровья</p></div>
                    <input type="text" name="health_current" id="health_current" class="healthElement">
                </div>
                <div class="healthBones">
                    <div class="nameHealthElement"><p>Временные пункты здоровья</p></div>
                    <input readonly type="text" name="health_temporarily" id="health_temporarily" class="healthElement">
                </div>
                <div class="chengedHealthGroup">
                    <div class="chengedHealth">
                        <input type="text" name="addHealth" id="addHealth" class="chengedHealthInput">
                        <input type="button" name="chengedHealthButton" id="addHealthButton"  class="chengedHealthButton" value="Лечение" 
                        onclick="ChengedHealth(addHealth.value,'Здоровье + ','health_current')">
                    </div>
                    <!-- <div class="chengedHealth">
                        <input type="text" name="reduceHealth" id="reduceHealth" class="chengedHealthInput">
                        <input type="button" name="chengedHealthButton" id = "reduceHealthButton" class="chengedHealthButton" value="Урон" 
                        onclick="ChengedHealth(addHealth.value, 'Здоровье - ','health_current', 'reduce')">                    
                    </div> -->
                </div>
            </div>
            <hr>
            <div class= "healthBonesTestsDeath">
                <div class="healthBones">
                    <div class="nameHealth"><p>Кости здоровья</p></div>
                    <div class="groupBonesHealthElement">
                        <label class="nameBonesHealthElement">Всего</label>
                        <input readonly type="text" name="health_bones" id="health_bones" class="bonesHealthElement">
                    </div>
                    <div class="groupBonesHealthElement">
                        <label class="nameHealthElement">Текущие кости здоровья</label>
                        <input readonly type="text" name="health_bones_curent" id="health_bones_curent" class="healthElement">
                    </div>
                </div>
                <div class="healthBones">
                    <div class="nameHealth"><p>Испытания против смерти</p></div>
                    <div>
                        <fieldset><p>Успехи</p>
                            <input type="radio" name="success1" id="tests_death_success1" class="successHealthElement" value="success1">
                            <input type="radio" name="success2" id="tests_death_success2" class="successHealthElement" value="success2">
                            <input type="radio" name="success3" id="tests_death_success3" class="successHealthElement" value="success3">
                        </fieldset>
                        <fieldset><p>Провалы</p>
                            <input type="radio" name="failure1" id="tests_death_failure1" class="successHealthElement" value="failure1">
                            <input type="radio" name="failure2" id="tests_death_failure2" class="successHealthElement" value="failure2">
                            <input type="radio" name="failure3" id="tests_death_failure3" class="successHealthElement" value="failure3">
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>    
        <hr>
        <!-- оружие -->
        <div class="weapon">
            <div class="groupWeaponStock">
                <div class="weaponText">Оружие</div>
                <div class = "stock" title="Инвентарь" onclick="OpenStock()"></div>
            </div>
            <div> </div>
        </div>    
    </div>

    <!-- Атаки -->
    <div class ="columnCharacteristic4"> 
        <?php
            include "attackWeapon.php";
            if (GetClassPers() == TypePers::magic):
                include "attackMagic.php";
            endif;
        ?>
    </div>
    <!-- Навыки, свойства -->
    <div class ="columnCharacteristic5">
        <div class = "abilitiesAndLanguages">
            <div class="nameAbilitiesAndLanguages"><p>Умения и языки<p></div>
            <div class ="abilitiesAndLanguagesGroup">
                <div class="abilitiesPers">
                    <label class="abilities">Внимательность</label>
                    <img class ="picture" src="../icon/ask.png" alt="Описание" title="Описание заклинания">
                </div>
            </div>
            <div class ="abilitiesAndLanguagesGroup">
                <div class="languagesPers">
                    <label class="languages">Эльфийский</label>
                    <img class ="picture" src="../icon/ask.png" alt="Описание" title="Описание заклинания">
                </div>
            </div>
        </div>
    </div>
    <?php
        include_once "../allPanels/rightPanel.php";
    ?>
</form>