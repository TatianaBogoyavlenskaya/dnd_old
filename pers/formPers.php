<!-- Формирование формы с данными о персонаже -->
<form method="post">
    <label>Персонаж
        <select name="namePerses" id = "namePerses" onchange="OnChangedPers(this.value);">
        </select>
    </label>
    <input type="button" value="Создать нового" onclick="ClearForm();"><br>
    <div class="generalInfo">
        <label>Имя
            <input type="text" name="namePers" id="namePers" class="generalInfoElement">
        </label>
        <label>Расса
            <select name="race" id = "race" class="generalInfoElement">
            </select>
        </label>
        <label>Класс
            <select name="class" id = "class_pers" class="generalInfoElement">
            </select>
        </label>
        <label>Уровень
            <input type="text" name="level" id = "level" class="generalInfoElement">
        </label>
        <label>Мировоззрение
            <select name="outlook" id = "outlook" class="generalInfoElement">
            </select>
        </label>
    </div>
    <div class ="characteristics">
        <div class="groupCharacteristicsElement">
            <label>Сила<br>
                <input type="text" name="forcesResult" id="forcesResult" class="characteristicsResultElement">
                <input type="text" name="forces" id="forces" class="characteristicsElement">
            </label>
        </div>
        <div class="groupCharacteristicsElement">
        <label>Ловкость<br>
            <input type="text" name="dexterityResult" id="dexterityResult" class="characteristicsResultElement">
                <input type="text" name="dexterity" id="dexterity" class="characteristicsElement">
            </label>
        </div>
        <div class="groupCharacteristicsElement">
            <label>Выносливость<br>
                <input type="text" name="enduranceResult" id="enduranceResult" class="characteristicsResultElement">
                <input type="text" name="endurance" id="endurance" class="characteristicsElement">
            </label>
        </div>
        <div class="groupCharacteristicsElement">
            <label>Интеллект<br>
                <input type="text" name="intelligenceResult" id="intelligenceResult" class="characteristicsResultElement">
                <input type="text" name="intelligence" id="intelligence" class="characteristicsElement">
            </label>
        </div>
        <div class="groupCharacteristicsElement">
            <label>Мудрость<br>
                <input type="text" name="wisdomResult" id="wisdomResult" class="characteristicsResultElement">
                <input type="text" name="wisdom" id="wisdom" class="characteristicsElement">
            </label>
        </div>
        <div class="groupCharacteristicsElement">
            <label>Харизма<br>
                <input type="text" name="charismaResult" id="charismaResult" class="characteristicsResultElement">
                <input type="text" name="charisma" id="charisma" class="characteristicsElement">
            </label>
        </div>
    </div>
    <div class ="spasbrosk">
        <label>Сила
            <input type="text" name="forcesSpasbrosok" id="forcesSpasbrosok" class="spasbrosokElement">
        </label>
        <label>Ловкость
            <input type="text" name="dexteritySpasbrosok" id="dexteritySpasbrosok" class="spasbrosokElement">
        </label>
        <label>Выносливость
            <input type="text" name="enduranceSpasbrosok" id="enduranceSpasbrosok" class="spasbrosokElement">
        </label>
        <label>Интеллект
            <input type="text" name="intelligenceSpasbrosok" id="intelligenceSpasbrosok" class="spasbrosokElement">
        </label>
        <label>Мудрость
            <input type="text" name="wisdomSpasbrosok" id="wisdomSpasbrosok" class="spasbrosokElement">
        </label>
        <label>Харизма
            <input type="text" name="charismaSpasbrosok" id="charismaSpasbrosok" class="spasbrosokElement">
        </label>
    </div>
    <label>Пассивное внимание
            <input type="text" name="passive_attention" id="passive_attention" class="passive_attention">
    </label>
    <div class = "experienceBonus">
        <label>Вдохновение
                <input type="text" name="experience" id="experience" class="experience">
        </label>
        <label>Бонус умения
                <input type="text" name="bonus" id="bonus" class="bonus">
        </label>
    </div>
    <div class ="skills">
        <label>Акробатика
            <input type="text" name="acrobatics" id="acrobatics" class="skillsElement">
        </label>
        <label>Атлетика
            <input type="text" name="athletics" id="athletics" class="skillsElement">
        </label>
        <label>Внимание
            <input type="text" name="attention" id="attention" class="skillsElement">
        </label>
        <label>Выживание
            <input type="text" name="survival" id="survival" class="skillsElement">
        </label>
        <label>Дрессировка
            <input type="text" name="training" id="training" class="skillsElement">
        </label>
        <label>Запугивание
            <input type="text" name="intimidation" id="intimidation" class="skillsElement">
        </label>
        <label>Исполнение
            <input type="text" name="execution" id="execution" class="skillsElement">
        </label>
        <label>История
            <input type="text" name="history" id="history" class="skillsElement">
        </label>
        <label>Ловкость рук
            <input type="text" name="sleight_hand" id="sleight_hand" class="skillsElement">
        </label>
        <label>Магия
            <input type="text" name="magic" id="magic" class="skillsElement">
        </label>
        <label>Медецина
            <input type="text" name="medicine" id="medicine" class="skillsElement">
        </label>
        <label>Обман
            <input type="text" name="deception" id="deception" class="skillsElement">
        </label>
        <label>Природа
            <input type="text" name="nature" id="nature" class="skillsElement">
        </label>
        <label>Проницательность
            <input type="text" name="insight" id="insight" class="skillsElement">
        </label>
        <label>Расследование
            <input type="text" name="investigation" id="investigation" class="skillsElement">
        </label>
        <label>Религия
            <input type="text" name="religion" id="religion" class="skillsElement">
        </label>
        <label>Скрытность
            <input type="text" name="reserve" id="reserve" class="skillsElement">
        </label>
        <label>Убеждение
            <input type="text" name="belief" id="belief" class="skillsElement">
        </label>        
    </div>
    <div class ="info">
        <div class = "class_armorInitiativeSpeed">
            <div class="groupInfoElement">
                <label>Класс брони<br>
                    <input type="text" name="class_armor" id="class_armor" class="infoElement">
                </label>  
            </div>
            <div class="groupInfoElement">
                <label>Инициатива<br>
                    <input type="text" name="initiative" id="initiative" class="infoElement">
                </label>  
            </div>
            <div class="groupInfoElement">      
                <label>Скорость<br>
                    <input type="text" name="speed" id="speed" class="infoElement">
                </label>  
            </div>
        </div>
        <div class="groupHealthElement">
            <label>Текущие пункты здоровья<br>
                <input type="text" name="health_current" id="health_current" class="healthElement">
            </label> <br>
            <label>Временные пункты здоровья<br>
                    <input type="text" name="health_max" id="health_max" class="healthElement">
            </label> <br>
            <label>Кости здоровья<br>
                <input type="text" name="health_bones" id="health_bones" class="healthElement">
            </label> 
            <div class="groupTestsDeath">Испытания против смерти
                <label>Успехи 
                                      
                </label> 
                <label>Провалы                    
                </label> 
            </div>
        </div>
    </div>
    <input type="submit" value="Сохранить изменения"><br>
</form>