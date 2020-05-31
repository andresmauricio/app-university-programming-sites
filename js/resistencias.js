function getFormResistencia() {
    const bandOne = document.getElementById('band_one').value;
    const bandTwo = document.getElementById('band_two').value;
    const bandThree = document.getElementById('band_three').value;
    calculateOhmios(bandOne, bandTwo, bandThree );
}

function calculateOhmios(bandOne, bandTwo, bandThree ) {
    const firstValue = Number(`${bandOne}${bandTwo}`);
    const secondValue = Number(bandThree);
    document.getElementById('result_calc').value = `${firstValue * secondValue} Ohmios`;
}