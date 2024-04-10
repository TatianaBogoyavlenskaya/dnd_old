<!-- Формирование формы с данными о персонаже -->
<form method="post">
    <!-- выбор персонажа -->
    <div class = "selectPers">
        <div>Персонаж
            <select name="namePerses" id = "namePerses" onchange="OnChangedPers(this.value);" class = "namePerses"></select>
            <input type="button" value="Создать нового" onclick="ClearForm();" class = "newPers"><br>
        </div>
    </div>

    <!-- Основные параметры персонажа -->
    <div class="generalInfo">
        <div class = "name">
            <div class="generalInfoDiv">Имя</div>
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
            <div class="groupCharacteristicsElement">Сила<br>
                <input type="text" name="forcesResult" id="forcesResult" class="characteristicsResultElement">
                <input type="text" name="forces" id="forces" class="characteristicsElement">
            </div>
            <div class="groupCharacteristicsElement">Ловкость<br>
                <input type="text" name="dexterityResult" id="dexterityResult" class="characteristicsResultElement">
                <input type="text" name="dexterity" id="dexterity" class="characteristicsElement">
            </div>
            <div class="groupCharacteristicsElement">Выносливость<br>
                <input type="text" name="enduranceResult" id="enduranceResult" class="characteristicsResultElement">
                <input type="text" name="endurance" id="endurance" class="characteristicsElement">
            </div>
            <div class="groupCharacteristicsElement">Интеллект<br>
                <input type="text" name="intelligenceResult" id="intelligenceResult" class="characteristicsResultElement">
                <input type="text" name="intelligence" id="intelligence" class="characteristicsElement">
            </div>
            <div class="groupCharacteristicsElement">Мудрость<br>
                <input type="text" name="wisdomResult" id="wisdomResult" class="characteristicsResultElement">
                <input type="text" name="wisdom" id="wisdom" class="characteristicsElement">
            </div>
            <div class="groupCharacteristicsElement">Харизма<br>
                <input type="text" name="charismaResult" id="charismaResult" class="characteristicsResultElement">
                <input type="text" name="charisma" id="charisma" class="characteristicsElement">
            </div>
        </div>

        <!-- спасброски и навыки -->
        <div class ="columnCharacteristic2">
            <!-- Вдохновение и Бонус умения -->
            <div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Вдохновение</label>
                    <input type="text" name="inspiration" id="inspiration" class="inspiration">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Бонус умения</label>
                    <input type="text" name="bonus" id="bonus" class="bonus">
                </div>
            </div>
            <hr>
            <!-- спасброски -->
            <div>
                <p>Испытания</p>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Сила</label>
                    <input type="text" name="forcesSpasbrosok" id="forcesSpasbrosok" class="spasbrosokElement">
                </div>
                <div class="groupCharacteristic">                   
                    <label class="nameCharacteristic">Ловкость</label>
                    <input type="text" name="dexteritySpasbrosok" id="dexteritySpasbrosok" class="spasbrosokElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Выносливость</label>
                    <input type="text" name="enduranceSpasbrosok" id="enduranceSpasbrosok" class="spasbrosokElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Интеллект</label>
                    <input type="text" name="intelligenceSpasbrosok" id="intelligenceSpasbrosok" class="spasbrosokElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Мудрость</label>
                    <input type="text" name="wisdomSpasbrosok" id="wisdomSpasbrosok" class="spasbrosokElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Харизма</label>
                    <input type="text" name="charismaSpasbrosok" id="charismaSpasbrosok" class="spasbrosokElement">
                </div>
            </div>
            <hr>
            <!-- Навыки -->
            <div>
                <p>Навыки</p>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Акробатика</label>
                    <input type="text" name="acrobatics" id="acrobatics" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Атлетика</label>
                    <input type="text" name="athletics" id="athletics" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Внимание</label>
                    <input type="text" name="attention" id="attention" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Выживание</label>
                    <input type="text" name="survival" id="survival" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Дрессировка</label>
                    <input type="text" name="training" id="training" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Запугивание</label>
                    <input type="text" name="intimidation" id="intimidation" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Исполнение</label>
                    <input type="text" name="execution" id="execution" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">История</label>
                    <input type="text" name="history" id="history" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Ловкость рук</label>
                    <input type="text" name="sleight_hand" id="sleight_hand" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Магия</label>
                    <input type="text" name="magic" id="magic" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Медецина</label>
                    <input type="text" name="medicine" id="medicine" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Обман</label>
                    <input type="text" name="deception" id="deception" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Природа</label>
                    <input type="text" name="nature" id="nature" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Проницательность</label>
                    <input type="text" name="insight" id="insight" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Расследование</label>
                    <input type="text" name="investigation" id="investigation" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Религия</label>
                    <input type="text" name="religion" id="religion" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Скрытность</label>
                    <input type="text" name="reserve" id="reserve" class="skillsElement">
                </div>
                <div class="groupCharacteristic">
                    <label class="nameCharacteristic">Убеждение</label>
                    <input type="text" name="belief" id="belief" class="skillsElement">
                </div>
            </div>
        </div>
        <!-- Пассивное внимание -->
        <div>
            <div  class="groupPassiveAttention">
                <label class="passiveAttention">Пассивное внимание</label>
                <input type="text" name="passive_attention" id="passive_attention" class="passive_attention">
            </div>
        </div>
    </div>

<!-- броня, здоровье, оружие  -->
    <div class ="columnCharacteristic3"> 
        <!-- броня -->
        <div class="classArmorInitiativeSpeed">
            <div class="divInfoElement">
                <div class="nameInfoElement"> Класс брони</div>
                <div><input type="text" name="class_armor" id="class_armor" class="infoElement"></div>
            </div>
            <div class="divInfoElement">
                <div class="nameInfoElement"> Инициатива</div>
                <div><input type="text" name="initiative" id="initiative" class="infoElement"></div>
            </div>
            <div class="divInfoElement">
                <div class="nameInfoElement"> Скорость</div>
                <div><input type="text" name="speed" id="speed" class="infoElement"></div>
            </div>
        </div>
        <hr>
        <!-- здоровье -->
        <div class="health">
            <div class= "healthBonesTestsDeath">
                <label class="maxHealth"><p>Максимум здоровья</p></label>
                <input type="text" name="health_max" id="health_max" class="healthMaxElement">
                <div class="healthBones">
                    <div class="nameHealthElement"><p>Текущие пункты здоровья</p></div>
                    <div><input type="text" name="health_current" id="health_current" class="healthElement"></div>
                </div>
                <div class="healthBones">
                    <div class="nameHealthElement"><p>Временные пункты здоровья</p></div>
                    <div><input type="text" name="health_temporarily" id="health_temporarily" class="healthElement"></div>
                </div>
            </div>
            <div class= "healthBonesTestsDeath">
                <div class="healthBones">
                    <div class="nameHealthElement"><p>Кости здоровья</p></div>
                    <div class="groupBonesHealthElement">
                        <label class="nameBonesHealthElement">Всего</label>
                        <input type="text" name="health_bones" id="health_bones" class="bonesHealthElement">
                    </div>
                    <div class="groupBonesHealthElement">
                        <input type="text" name="health_bones_curent" id="health_bones_curent" class="healthElement">
                    </div>
                </div>
                <div class="healthBones">
                    <div><p>Испытания против смерти</p></div>
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
            <div class="weaponText">Оружие</div>
            <div> </div>
        </div>    
    </div>

    <!-- Атаки -->
    <div class ="columnCharacteristic4"> 
        <?php
            if (GetClassPers() == TypePers::magic):
                include_once "attackMagic.php";
            else:
                include_once "attackWeapon.php";
            endif;
        ?>
    </div>
</form>