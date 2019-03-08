/*************************************
	Utilities
**************************************/


function timeToDegree(time,max) {
	var kampas=360/max;
	var ats=Math.round(kampas*time);
	return ats;
}

