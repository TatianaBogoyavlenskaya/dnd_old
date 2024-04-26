<!-- Правая панелька (чат и описания) -->
<div class="columnCharacteristic6">
    <div class="description"></div>
    <div class="chat">
        <div class="throwCube">
            <input type="button" name="cube" class="cube" onclick="OnChangedCube(4);" value="d4">
            <input type="button" name="cube" class="cube" onclick="OnChangedCube(6);" value="d6">
            <input type="button" name="cube" class="cube" onclick="OnChangedCube(8);" value="d8">
            <input type="button" name="cube" class="cube" onclick="OnChangedCube(10);" value="d10">
            <input type="button" name="cube" class="cube" onclick="OnChangedCube(12);" value="d12">
            <input type="button" name="cube" class="cube" onclick="OnChangedCube(20);" value="d20">
            <input type="button" name="cube" class="cube" onclick="OnChangedCube(100);" value="d100">
        </div>
        <label for="textareaChat"></label>
        <textarea id="textareaChat" class="textareaChat" rows="20"></textarea>
    </div>
</div>