function generatePyramid() {
    var totalNumberofRows = 5;
    var output = '';
    for (var i = 1; i <= totalNumberofRows; i++) {
        for (var j = 1; j <= i; j++) {
            output += j + ' ';
        }
        console.log(output);
        output = '';
    }
}

function generatePyramid1() {
    var totalNumberofRows = 5;
    var output = '';
    for (var i = 1; i <= totalNumberofRows; i++) {
        for (var j = 0; j <= i; j++) {
            output += j + ' ';
        }
        console.log(output);
        output = '';
    }
}


function generatePyramid2() {
    var totalNumberofRows = 5;
    var output = '';
    for (var i = 1; i <= totalNumberofRows; i++) {
        for (var j = 0; j <= i; j++) {
            output += '*';
        }
        console.log(output);
        output = '';
    }
}







generatePyramid();
console.log("\n");
generatePyramid1();
console.log("\n");
generatePyramid2();


