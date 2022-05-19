function calculateExponent(num, exp) {
	let newnum = 1;
	for(let o=0; o<exp; o++){
		newnum = newnum*num;
	}
return newnum;	
};

console.log(calculateExponent(2, 2));
console.log(calculateExponent(2, 4));
console.log(calculateExponent(2, 5));