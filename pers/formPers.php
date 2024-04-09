<!-- Формирование формы с данными о персонаже -->
<form method="post">
    <div class = "selectPers">
        <label>Персонаж
            <select name="namePerses" id = "namePerses" onchange="OnChangedPers(this.value);" class = "namePerses">
            </select>
        </label>
    <input type="button" value="Создать нового" onclick="ClearForm();" class = "newPers"><br>
    </div>
    <div class="generalInfo">
        <div class = "name">
            <label>Имя
                <input type="text" name="namePers" id="namePers" class="generalInfoElement namePers">
            </label>
        </div>
        <div class="generalInfoRow1">
            <label class="generalInfoLabel">Класс
                <select name="class" id = "class_pers" class="generalInfoElement">
                </select>
            </label>
            <label class="generalInfoLabel">Уровень
                <input type="text" name="level" id = "level" class="generalInfoElement">
            </label>
        </div>
        <div class="generalInfoRow2">
            <label>Расса
                <select name="race" id = "race" class="generalInfoElement">
                </select>
            </label>
            <label>Мировоззрение
                <select name="outlook" id = "outlook" class="generalInfoElement">
                </select>
            </label>
            <label>Опыт
                <input type="text" name="experience" id = "experience" class="generalInfoElement">
                </select>
            </label>   
        </div>
    </div>
    <table class = "tableInfo">
        <tr>
            <td rowspan="3" class ="columnCharacteristic1">
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
            </td>
            <td class = "inspirationBonus">
                <table class="inspirationBonusTable">
                    <tr>
                        <td> Вдохновение</td>
                        <td> 
                            <input type="text" name="inspiration" id="inspiration" class="inspiration">                           
                        </td>
                    </tr>
                    <tr>
                        <td> Бонус умения</td>
                        <td> 
                            <input type="text" name="bonus" id="bonus" class="bonus">                          
                        </td>
                    </tr>
                </table>
            </td>
            <td class="columnCharacteristic3">
                <table class="infoElementTable">
                    <tr>
                        <td>Класс брони</td>
                        <td>Инициатива</td>
                        <td>Скорость</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="class_armor" id="class_armor" class="infoElement"></td>
                        <td><input type="text" name="initiative" id="initiative" class="infoElement"></td>
                        <td><input type="text" name="speed" id="speed" class="infoElement"></td>
                    </tr>
                </table>
            </td>
            <td class="columnCharacteristic4" rowspan=3>
                <table class="equipmentTable">
                </table>
            </td>
        </tr>
        <tr>
            <td class ="spasbrosk">
                <p>Испытания</p>
                <table class="spasbroskTable">
                    <tr>
                        <td> Сила</td>
                        <td> 
                            <input type="text" name="forcesSpasbrosok" id="forcesSpasbrosok" class="spasbrosokElement">                            
                        </td>
                    </tr>
                    <tr>
                        <td> Ловкость</td>
                        <td> 
                            <input type="text" name="dexteritySpasbrosok" id="dexteritySpasbrosok" class="spasbrosokElement">                     
                        </td>
                    </tr>
                    <tr>
                        <td> Выносливость</td>
                        <td> 
                            <input type="text" name="enduranceSpasbrosok" id="enduranceSpasbrosok" class="spasbrosokElement">                    
                        </td>
                    </tr>
                    <tr>
                        <td> Интеллект</td>
                        <td> 
                            <input type="text" name="intelligenceSpasbrosok" id="intelligenceSpasbrosok" class="spasbrosokElement">                   
                        </td>
                    </tr>
                    <tr>
                        <td> Мудрость</td>
                        <td> 
                            <input type="text" name="wisdomSpasbrosok" id="wisdomSpasbrosok" class="spasbrosokElement">                 
                        </td>
                    </tr>
                    <tr>
                        <td> Харизма</td>
                        <td> 
                            <input type="text" name="charismaSpasbrosok" id="charismaSpasbrosok" class="spasbrosokElement">                     
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="healthElementTable">
                    <tr>
                        <td>Текущие пункты здоровья</td></tr>
                        <tr><td>
                            <div class="groupHealthElement">
                                <label><br>
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
                        </td>
                    </tr>
                </table>
            
            </td>
        </tr>
        <tr>
            <td class="skills">
                <p>Навыки</p>
                <table class="skillsTable">
                    <tr>
                        <td> Акробатика</td>
                        <td> 
                            <input type="text" name="acrobatics" id="acrobatics" class="skillsElement">                        
                        </td>
                    </tr>
                    <tr>
                        <td> Атлетика</td>
                        <td> 
                            <input type="text" name="athletics" id="athletics" class="skillsElement">                      
                        </td>
                    </tr>
                    <tr>
                        <td> Внимание</td>
                        <td> 
                            <input type="text" name="attention" id="attention" class="skillsElement">                     
                        </td>
                    </tr>
                    <tr>
                        <td> Выживание</td>
                        <td> 
                            <input type="text" name="survival" id="survival" class="skillsElement">                   
                        </td>
                    </tr>
                    <tr>
                        <td> Дрессировка</td>
                        <td> 
                            <input type="text" name="training" id="training" class="skillsElement">          
                        </td>
                    </tr>
                    <tr>
                        <td> Запугивание</td>
                        <td> 
                            <input type="text" name="intimidation" id="intimidation" class="skillsElement">          
                        </td>
                    </tr>
                    <tr>
                        <td> Исполнение</td>
                        <td> 
                            <input type="text" name="execution" id="execution" class="skillsElement">              
                        </td>
                    </tr>
                    <tr>
                        <td> История</td>
                        <td> 
                            <input type="text" name="history" id="history" class="skillsElement">    
                        </td>
                    </tr>
                    <tr>
                        <td> Ловкость рук</td>
                        <td> 
                            <input type="text" name="sleight_hand" id="sleight_hand" class="skillsElement">          
                        </td>
                    </tr>
                    <tr>
                        <td> Магия</td>
                        <td> 
                            <input type="text" name="magic" id="magic" class="skillsElement">         
                        </td>
                    </tr>
                    <tr>
                        <td> Медецина</td>
                        <td> 
                            <input type="text" name="medicine" id="medicine" class="skillsElement">             
                        </td>
                    </tr>

                    <tr>
                        <td> Обман</td>
                        <td> 
                            <input type="text" name="deception" id="deception" class="skillsElement">            
                        </td>
                    </tr>
                    <tr>
                        <td> Природа</td>
                        <td> 
                            <input type="text" name="nature" id="nature" class="skillsElement">     
                        </td>
                    </tr>
                    <tr>
                        <td> Проницательность</td>
                        <td> 
                            <input type="text" name="insight" id="insight" class="skillsElement">           
                        </td>
                    </tr>
                    <tr>
                        <td> Расследование</td>
                        <td> 
                            <input type="text" name="investigation" id="investigation" class="skillsElement">        
                        </td>
                    </tr>
                    <tr>
                        <td> Религия</td>
                        <td> 
                            <input type="text" name="religion" id="religion" class="skillsElement">
                        </td>
                    </tr>
                    <tr>
                        <td> Скрытность</td>
                        <td> 
                            <input type="text" name="reserve" id="reserve" class="skillsElement">        
                        </td>
                    </tr>
                    <tr>
                        <td> Убеждение</td>
                        <td> 
                            <input type="text" name="belief" id="belief" class="skillsElement">       
                        </td>
                    </tr>
                </table>
            </td>
                <td rowspan="2">
                <table class="infoTable">
                    <tr>
                        <td>Свойства личности<br>
                        <textarea></textarea></td>
                    </tr>
                    <tr>
                        <td>Идеалы<br>
                        <textarea></textarea></td>
                    </tr>
                    <tr>
                        <td>Узы<br>
                        <textarea></textarea></td>
                    </tr>
                    <tr>
                        <td>Изъяны<br>
                        <textarea></textarea></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="passiveAttention">
                <table class = "passiveAttentionTable">
                    <tr>
                        <td>Пассивное внимание</td>
                        <td>
                            <input type="text" name="passive_attention" id="passive_attention" class="passive_attention">                            
                        </td>
                    </tr>
                </table>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr></tr>
    </table>

    
    <input type="submit" value="Сохранить изменения"><br>
</form>