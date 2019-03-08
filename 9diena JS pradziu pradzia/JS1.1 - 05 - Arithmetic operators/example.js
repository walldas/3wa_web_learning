// Constant declaration
const VAT_Rate = 21.0;

// Declaring a variable
var myAmountTF;
var myAmountATI;
var myAmountVAT;


// Assigns a value to the variable.
myAmountTF = 100;


// Incrementating the variable.
myAmountTF++;                         // Same as myAmountTF = myAmountTF + 1;

/*  myAmountTF now equals 101. */


// Decrementing a variable.
myAmountTF--;                         // Same as myAmountTF = myAmountTF - 1;

/* myAmountTF now equals 100 again. */


// Calculation of the VAT amount and final ATI amount.
myAmountVAT = myAmountTF * VAT_Rate / 100;
myAmountATI = myAmountTF + myAmountVAT;

// Display the result directly in HTML page.
document.write(myAmountATI);