<!-- Формирование формы с данными о персонаже -->
<form method="post">
    <?php include_once "../allPanels/selectedPers.php"; ?>
    <!-- Основные параметры персонажа -->
    <div class="generalInfo">
        <div class="name">
            <div class="nameDiv">
                <label for="namePers"></label>
                <input type="text" name="namePers" id="namePers" class="generalInfoElement namePers">
            </div>
        </div>
        <div class="generalInfoRow1">
            <div class="generalInfoLabel">
                <div class="generalInfoDiv">Класс</div>
                <div class="dataDiv">
                    <label for="class_pers"></label>
                    <select name="class" id="class_pers" class="generalInfoElement"></select>
                </div>
            </div>
            <div class="generalInfoLabel">
                <div class="generalInfoDiv">Уровень</div>
                <div class="dataDiv">
                    <label for="level"></label>
                    <input type="text" name="level" id="level" class="generalInfoElement">
                </div>
            </div>
        </div>
        <div class="generalInfoRow2">
            <div class="generalInfoLabel">
                <div class="generalInfoDiv">Расса</div>
                <div class="dataDiv">
                    <label for="race"></label>
                    <select name="race" id="race" class="generalInfoElement"></select>
                </div>
            </div>
            <div class="generalInfoLabel">
                <div class="generalInfoDiv">Мировоззрение</div>
                <div class="dataDiv">
                    <label for="outlook"></label>
                    <select name="outlook" id="outlook" class="generalInfoElement"></select>
                </div>
            </div>
            <div class="generalInfoLabel">
                <div class="generalInfoDiv">Опыт</div>
                <div class="dataDiv">
                    <label for="experience"></label>
                    <input type="text" name="experience" id="experience" class="generalInfoElement">
                </div>
            </div>
        </div>
    </div>

    <!-- Основные характеристики -->
    <div class="columnCharacteristic1_2">
        <!-- характеристики -->
        <div class="columnCharacteristic1">
            <div class="groupCharacteristicsElement clickableDiv" onclick="OnChangedCube(20,'Сила','forces');">Сила<br>
                <label for="forcesResult"></label>
                <input readonly type="text" name="forcesResult" id="forcesResult"
                       class="characteristicsResultElement clickableInput">
                <label for="forces"></label>
                <input readonly type="text" name="forces" id="forces" class="characteristicsElement clickableInput">
            </div>
            <div class="groupCharacteristicsElement clickableDiv" onclick="OnChangedCube(20,'Ловкость','dexterity');">
                Ловкость<br>
                <label for="dexterityResult"></label>
                <input readonly type="text" name="dexterityResult" id="dexterityResult"
                       class="characteristicsResultElement clickableInput">
                <label for="dexterity"></label>
                <input readonly type="text" name="dexterity" id="dexterity"
                       class="characteristicsElement clickableInput">
            </div>
            <div class="groupCharacteristicsElement clickableDiv"
                 onclick="OnChangedCube(20,'Выносливость','endurance');">Выносливость<br>
                <label for="enduranceResult"></label>
                <input readonly type="text" name="enduranceResult" id="enduranceResult"
                       class="characteristicsResultElement clickableInput">
                <label for="endurance"></label>
                <input readonly type="text" name="endurance" id="endurance"
                       class="characteristicsElement clickableInput">
            </div>
            <div class="groupCharacteristicsElement clickableDiv"
                 onclick="OnChangedCube(20,'Интеллект','intelligence');">Интеллект<br>
                <label for="intelligenceResult"></label>
                <input readonly type="text" name="intelligenceResult" id="intelligenceResult"
                       class="characteristicsResultElement clickableInput">
                <label for="intelligence"></label>
                <input readonly type="text" name="intelligence" id="intelligence"
                       class="characteristicsElement clickableInput">
            </div>
            <div class="groupCharacteristicsElement clickableDiv" onclick="OnChangedCube(20,'Мудрость','wisdom');">
                Мудрость<br>
                <label for="wisdomResult"></label>
                <input readonly type="text" name="wisdomResult" id="wisdomResult"
                       class="characteristicsResultElement clickableInput">
                <label for="wisdom"></label>
                <input readonly type="text" name="wisdom" id="wisdom" class="characteristicsElement clickableInput">
            </div>
            <div class="groupCharacteristicsElement clickableDiv" onclick="OnChangedCube(20,'Харизма','charisma');">
                Харизма<br>
                <label for="charismaResult"></label>
                <input readonly type="text" name="charismaResult" id="charismaResult"
                       class="characteristicsResultElement clickableInput">
                <label for="charisma"></label>
                <input readonly type="text" name="charisma" id="charisma" class="characteristicsElement clickableInput">
            </div>
        </div>

        <!-- спасброски и навыки -->
        <div class="columnCharacteristic2">
            <!-- Вдохновение и Бонус умения -->
            <div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic headerFooter">Вдохновение</label>
                    <label for="inspiration"></label>
                    <input readonly type="text" name="inspiration" id="inspiration" class="inspiration">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic headerFooter">Бонус умения</label>
                    <label for="bonus"></label>
                    <input readonly type="text" name="bonus" id="bonus" class="bonus">
                </div>
            </div>
            <hr>
            <!-- спасброски -->
            <div>
                <p>Спасброски</p>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Спасбросок (Сила)','forces','spasbrosok');">
                    <label for="forcesSpasbrosokRadio"></label>
                    <input readonly type="radio" class="radioSpasbrosok" name="forcesSpasbrosokRadio"
                           id="forcesSpasbrosokRadio">
                    <!--                    TODO: readonly для радиобутона не работает - все также дает ставить точку-->
                    <label for="forcesSpasbrosok" class="nameCharacteristic clickableLabel">Сила</label>
                    <!--                    TODO: При связывании label выше с инпутом и нажатии на строку для броска кубика - вызывает функцию OnChangedCube 2 раза-->
                    <input readonly type="text" name="forcesSpasbrosok" id="forcesSpasbrosok"
                           class="spasbrosokElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Спасбросок (Ловкость)','dexterity','spasbrosok');">
                    <label for="dexteritySpasbrosokRadio"></label>
                    <input readonly type="radio" class="radioSpasbrosok" name="dexteritySpasbrosokRadio"
                           id="dexteritySpasbrosokRadio">
                    <label for="dexteritySpasbrosok" class="nameCharacteristic clickableLabel">Ловкость</label>
                    <input readonly type="text" name="dexteritySpasbrosok" id="dexteritySpasbrosok"
                           class="spasbrosokElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Спасбросок (Выносливость)','endurance','spasbrosok');">
                    <label for="enduranceSpasbrosokRadio"></label>
                    <input readonly type="radio" class="radioSpasbrosok" name="enduranceSpasbrosokRadio"
                           id="enduranceSpasbrosokRadio">
                    <label for="enduranceSpasbrosok" class="nameCharacteristic clickableLabel">Выносливость</label>
                    <input readonly type="text" name="enduranceSpasbrosok" id="enduranceSpasbrosok"
                           class="spasbrosokElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Спасбросок (Интеллект)','intelligence','spasbrosok');">
                    <label for="intelligenceSpasbrosokRadio"></label>
                    <input readonly type="radio" class="radioSpasbrosok" name="intelligenceSpasbrosokRadio"
                           id="intelligenceSpasbrosokRadio">
                    <label for="intelligenceSpasbrosok" class="nameCharacteristic clickableLabel">Интеллект</label>
                    <input readonly type="text" name="intelligenceSpasbrosok" id="intelligenceSpasbrosok"
                           class="spasbrosokElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Спасбросок (Мудрость)','wisdom','spasbrosok');">
                    <label for="wisdomSpasbrosokRadio"></label>
                    <input readonly type="radio" class="radioSpasbrosok" name="wisdomSpasbrosokRadio"
                           id="wisdomSpasbrosokRadio">
                    <label for="wisdomSpasbrosok" class="nameCharacteristic clickableLabel">Мудрость</label>
                    <input readonly type="text" name="wisdomSpasbrosok" id="wisdomSpasbrosok"
                           class="spasbrosokElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Спасбросок (Харизма)','charisma','spasbrosok');">
                    <label for="charismaSpasbrosokRadio"></label>
                    <input readonly type="radio" class="radioSpasbrosok" name="charismaSpasbrosokRadio"
                           id="charismaSpasbrosokRadio">
                    <label for="charismaSpasbrosok" class="nameCharacteristic clickableLabel">Харизма</label>
                    <input readonly type="text" name="charismaSpasbrosok" id="charismaSpasbrosok"
                           class="spasbrosokElement clickableInput">
                </div>
            </div>
            <hr>
            <!-- Навыки -->
            <div>
                <p>Навыки</p>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Акробатика','acrobatics','skill');">
                    <label for="acrobaticsRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="acrobaticsRadio"
                           id="acrobaticsRadio">
                    <label for="acrobatics" class="nameCharacteristic clickableLabel">Акробатика</label>
                    <input readonly type="text" name="acrobatics" id="acrobatics" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Атлетика','athletics','skill');">
                    <label for="athleticsRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="athleticsRadio" id="athleticsRadio">
                    <label for="athletics" class="nameCharacteristic clickableLabel">Атлетика</label>
                    <input readonly type="text" name="athletics" id="athletics" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Внимание','attention','skill');">
                    <label for="attentionRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="attentionRadio" id="attentionRadio">
                    <label for="attention" class="nameCharacteristic clickableLabel">Внимание</label>
                    <input readonly type="text" name="attention" id="attention" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Выживание','survival','skill');">
                    <label for="survivalRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="survivalRadio" id="survivalRadio">
                    <label for="survival" class="nameCharacteristic clickableLabel">Выживание</label>
                    <input readonly type="text" name="survival" id="survival" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Дрессировка','training','skill');">
                    <label for="trainingRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="trainingRadio" id="trainingRadio">
                    <label for="training" class="nameCharacteristic clickableLabel">Дрессировка</label>
                    <input readonly type="text" name="training" id="training" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Запугивание','intimidation','skill');">
                    <label for="intimidationRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="intimidationRadio"
                           id="intimidationRadio">
                    <label for="intimidation" class="nameCharacteristic clickableLabel">Запугивание</label>
                    <input readonly type="text" name="intimidation" id="intimidation"
                           class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Исполнение','execution','skill');">
                    <label for="executionRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="executionRadio" id="executionRadio">
                    <label for="execution" class="nameCharacteristic clickableLabel">Исполнение</label>
                    <input readonly type="text" name="execution" id="execution" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'История','history','skill');">
                    <label for="historyRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="historyRadio" id="historyRadio">
                    <label for="history" class="nameCharacteristic clickableLabel">История</label>
                    <input readonly type="text" name="history" id="history" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Ловкость рук','sleight_hand','skill');">
                    <label for="sleight_handRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="sleight_handRadio"
                           id="sleight_handRadio">
                    <label for="sleight_hand" class="nameCharacteristic clickableLabel">Ловкость рук</label>
                    <input readonly type="text" name="sleight_hand" id="sleight_hand"
                           class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Магия','magic','skill');">
                    <label for="magicRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="magicRadio" id="magicRadio">
                    <label for="magic" class="nameCharacteristic clickableLabel">Магия</label>
                    <input readonly type="text" name="magic" id="magic" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Медецина','medicine','skill');">
                    <label for="medicineRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="medicineRadio" id="medicineRadio">
                    <label for="medicine" class="nameCharacteristic clickableLabel">Медецина</label>
                    <input readonly type="text" name="medicine" id="medicine" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Обман','deception','skill');">
                    <label for="deceptionRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="deceptionRadio" id="deceptionRadio">
                    <label for="deception" class="nameCharacteristic clickableLabel">Обман</label>
                    <input readonly type="text" name="deception" id="deception" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Природа','nature','skill');">
                    <label for="natureRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="natureRadio" id="natureRadio">
                    <label for="nature" class="nameCharacteristic clickableLabel">Природа</label>
                    <input readonly type="text" name="nature" id="nature" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Проницательность','insight','skill');">
                    <label for="insightRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="insightRadio" id="insightRadio">
                    <label for="insight" class="nameCharacteristic clickableLabel">Проницательность</label>
                    <input readonly type="text" name="insight" id="insight" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Расследование','investigation','skill');">
                    <label for="investigationRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="investigationRadio"
                           id="investigationRadio">
                    <label for="investigation" class="nameCharacteristic clickableLabel">Расследование</label>
                    <input readonly type="text" name="investigation" id="investigation"
                           class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Религия','religion','skill');">
                    <label for="religionRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="religionRadio" id="religionRadio">
                    <label for="religion" class="nameCharacteristic clickableLabel">Религия</label>
                    <input readonly type="text" name="religion" id="religion" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv"
                     onclick="OnChangedCube(20,'Скрытность','reserve','skill');">
                    <label for="reserveRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="reserveRadio" id="reserveRadio">
                    <label for="reserve" class="nameCharacteristic clickableLabel">Скрытность</label>
                    <input readonly type="text" name="reserve" id="reserve" class="skillsElement clickableInput">
                </div>
                <div class="groupCharacteristic clickableDiv" onclick="OnChangedCube(20,'Убеждение','belief','skill');">
                    <label for="beliefRadio"></label>
                    <input readonly type="radio" class="radioCharacteristic" name="beliefRadio" id="beliefRadio">
                    <label for="belief" class="nameCharacteristic clickableLabel">Убеждение</label>
                    <input readonly type="text" name="belief" id="belief" class="skillsElement clickableInput">
                </div>
            </div>
        </div>
        <!-- Пассивное внимание -->
        <div class="groupPassiveAttention">
            <label for="passive_attention" class="passiveAttention">Пассивное внимание</label>
            <input readonly type="text" name="passive_attention" id="passive_attention" class="passive_attention">
        </div>
    </div>

    <!-- броня, здоровье, оружие  -->
    <div class="columnCharacteristic3">
        <!-- броня -->
        <div class="classArmorInitiativeSpeed">
            <div class="divInfoElement">
                <div class="nameInfoElement"> Класс брони</div>
                <label for="class_armor"></label>
                <input readonly type="text" name="class_armor" id="class_armor" class="infoElement">
            </div>
            <div class="divInfoElement clickableDiv"
                 onclick="OnChangedCube(20,'Инициатива','initiative','initiative');">
                <div class="nameInfoElement clickableDiv"> Инициатива</div>
                <label for="initiative"></label>
                <input readonly type="text" name="initiative" id="initiative" class="infoElement clickableDiv">
            </div>
            <div class="divInfoElement">
                <div class="nameInfoElement"> Скорость</div>
                <label for="speed"></label>
                <input readonly type="text" name="speed" id="speed" class="infoElement">
            </div>
        </div>
        <hr>
        <!-- здоровье -->
        <div class="health">
            <div class="healthBonesTestsDeath">
                <div class="nameHealth"><p>Здоровье</p></div>
                <label for="health_max" class="nameBonesHealthElement">Максимум здоровья</label>
                <input readonly type="text" name="health_max" id="health_max" class="healthMaxElement">
                <div class="healthBones">
                    <div class="nameHealthElement"><p>Текущие пункты <br>здоровья</p></div>
                    <label for="health_current"></label>
                    <input type="text" name="health_current" id="health_current" class="healthElement">
                </div>
                <div class="healthBones">
                    <div class="nameHealthElement"><p>Временные пункты здоровья</p></div>
                    <label for="health_temporarily"></label>
                    <input readonly type="text" name="health_temporarily" id="health_temporarily" class="healthElement">
                </div>
                <div class="chengedHealthGroup">
                    <div class="chengedHealth">
                        <label for="addHealth"></label>
                        <input type="text" name="addHealth" id="addHealth" class="chengedHealthInput">
                        <input type="button" name="chengedHealthButton" id="addHealthButton" class="chengedHealthButton"
                               value="Изменить здоровье"
                               onclick="ChengedHealth(addHealth.value,'Здоровье + ','health_current')">
                    </div>
                </div>
            </div>
            <hr>
            <div class="healthBonesTestsDeath">
                <div class="healthBones">
                    <div class="nameHealth"><p>Кости здоровья</p></div>
                    <div class="groupBonesHealthElement">
                        <label for="health_bones" class="nameBonesHealthElement">Всего</label>
                        <input readonly type="text" name="health_bones" id="health_bones" class="bonesHealthElement">
                    </div>
                    <div class="groupBonesHealthElement">
                        <label for="health_bones_curent" class="nameHealthElement">Текущие кости здоровья</label>
                        <input readonly type="text" name="health_bones_curent" id="health_bones_curent"
                               class="healthElement">
                    </div>
                </div>
                <div class="healthBones">
                    <div class="nameHealth"><p>Испытания против смерти</p></div>
                    <div>
                        <fieldset><p>Успехи</p>
                            <label for="tests_death_success1"></label>
                            <input type="radio" name="success1" id="tests_death_success1" class="successHealthElement"
                                   value="success1">
                            <label for="tests_death_success2"></label>
                            <input type="radio" name="success2" id="tests_death_success2" class="successHealthElement"
                                   value="success2">
                            <label for="tests_death_success3"></label>
                            <input type="radio" name="success3" id="tests_death_success3" class="successHealthElement"
                                   value="success3">
                        </fieldset>
                        <fieldset><p>Провалы</p>
                            <label for="tests_death_failure1"></label>
                            <input type="radio" name="failure1" id="tests_death_failure1" class="successHealthElement"
                                   value="failure1">
                            <label for="tests_death_failure2"></label>
                            <input type="radio" name="failure2" id="tests_death_failure2" class="successHealthElement"
                                   value="failure2">
                            <label for="tests_death_failure3"></label>
                            <input type="radio" name="failure3" id="tests_death_failure3" class="successHealthElement"
                                   value="failure3">
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
                <div class="stock" title="Инвентарь" onclick="OpenStock()"></div>
            </div>
            <div></div>
        </div>
    </div>

    <!-- Атаки -->
    <div class="columnCharacteristic4">
        <?php
        include "attackWeapon.php";
        if (GetClassPers() == TypePers::magic):
            include "attackMagic.php";
        endif;
        ?>
    </div>
    <!-- Навыки, свойства -->
    <div class="columnCharacteristic5">
        <div class="abilitiesAndLanguages">
            <div class="nameAbilitiesAndLanguages"><p>Умения и языки
                <p></div>
            <div class="abilitiesAndLanguagesGroup">
                <div class="abilitiesPers">
                    <label class="abilities">Внимательность</label>
                    <img class="picture" src="../icon/ask.png" alt="Описание" title="Описание заклинания">
                </div>
            </div>
            <div class="abilitiesAndLanguagesGroup">
                <div class="languagesPers">
                    <label class="languages">Эльфийский</label>
                    <img class="picture" src="../icon/ask.png" alt="Описание" title="Описание заклинания">
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once "../allPanels/rightPanel.php";
    ?>
</form>