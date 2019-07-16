var employee = new Array();
var total=0;
employee.push(["Index", "No. of hours worked", "Pay"]);

function enterHour() {
    var hour = 1;
    var wage=0;
    var index=1 ;
    while(hour>0){
        var hour = prompt("Enter number of hours worked");
        if(index == 1 && hour == -1){
            prompt("You don't have any employees. Please enter -1 to quit.");
        }
        else if (hour <= 40 && hour >= 1) {
            wage= hour*15;
            total=wage+total;
            employee.push([index,hour,wage]);
        }

        else if(hour > 40){
            wage=40*15+(hour-40)*15*1.5;
            total=wage+total;
            employee.push([index,hour,wage]);
        }
        index++;
    }

    if(hour < 0){
        printTable();
    }
    
}

function printTable(){  

    var table = document.createElement("TABLE");
    var columnCount = employee[0].length;
    var row = table.insertRow(-1);
    for (var i = 0; i < columnCount; i++) {
        var headerCell = document.createElement("TH");
        headerCell.innerHTML =  employee[0][i];
        row.appendChild(headerCell);
    }
    for (var i = 1; i <  employee.length; i++) {
        row = table.insertRow(-1);
        for (var j = 0; j < columnCount; j++) {
            var cell = row.insertCell(-1);
            cell.innerHTML =  employee[i][j];
        }
    }

    var dvTable = document.getElementById("table");
    dvTable.innerHTML = "";
    dvTable.appendChild(table);
    document.getElementById("total").innerHTML ="Summary: Total amount is "+ total +".";
    
} 