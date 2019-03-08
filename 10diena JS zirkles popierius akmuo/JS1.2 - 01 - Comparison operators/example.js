// Declare variables.
var age;
var aTrenteAns;
var estMajeur;
var estPasCentenaire;


// Get value from user input.
age = window.prompt('Quel est votre âge ?');

/*
 * Creation of boolean variables by comparing age entered by the user with a specific value.
 * The result will be 'true' or 'false'.
 */
aTrenteAns       = (age == 30);     // Age equal to 30?
estMajeur        = (age >= 18);     // Age more or equal than 18?
estPasCentenaire = (age != 100);    // Age not equal to 100?


// Display Boolean variables in the HTML page.
document.write('<p>You are 30 years old: ' + aTrenteAns + '.</p>');
document.write('<p>You are older than 18: ' + estMajeur + '.</p>');
document.write('<p>You are 100 years old: ' + estPasCentenaire + '.</p>');