function getForm() {
    const value = Number(document.getElementById('buy').value);
    const utility = Number(document.getElementById('utilities').value);
    const taxes = Number(document.getElementById('iva').value); 
    console.log(value);
    if (value, utility, taxes ) {
        const profitsResult = profits(value, utility);
        const taxesResult = calcTaxes(value, profitsResult, taxes);
        uiResults(value, profitsResult, taxesResult)
    } else {
        alert('Ingrese todos los campo');
    }
    
} 

function profits(value, utility) {
    let result = value * (utility / 100);
    return result;
}

function calcTaxes(value, profitsResult, taxes) {
    let taxesBuy = value * (taxes / 100);
    return taxesBuy;
}

function uiResults(value, profitsResult, taxesResult) {
    document.querySelector('#value_buy').innerHTML = `Valor de la venta: $${value + profitsResult + taxesResult }`;
    document.querySelector('#profits').innerHTML = `Ganancia $${profitsResult}`;
} 