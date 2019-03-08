// Declare variables
var last_day;
var week;


// Assigning an empty array to a variable
week = new Array();   // longer way

// Shorter way: week = [];


// Assign values to the table.
week[0] = 'Monday';
week[1] = 'Tuesday';
week[2] = 'Wednesday';
week[3] = 'Thursday';
week[4] = 'Friday';
week[5] = 'Saturday';
week[6] = 'Sunday';

// Assign a value to the variable.
last_day = 6;


/*
 * Output first and last days of the week to HTML.
 *
 * The last_day variable is used as an index in week array.
 */
document.write('The first day of the week is ' + week[0] + ' ');
document.write('The last day of the week is the ' + week[last_day] + '.');