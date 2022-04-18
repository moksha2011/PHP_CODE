function getpattern(n,pattern_no)
{
 if(pattern_no==1 )
 {
    var totalNumberofRows = 5;
     
     var output = '';
    
     for (var i = 1; i <= totalNumberofRows; i++) 
    
     {
        for (var j = 1; j <= i; j++) {
            output += j + ' ';
        }
        
        console.log(output);
        output = '';
    }
}

else if(pattern_no == 2)
{
    var totalNumberofRaws = 5;
    
    var output_1= '';
   
    for (var x = 1; x <= totalNumberofRaws; x++) {
        
        for (var y = 0; y <= x; y++) {
            
            output_1 += y + ' ';
        }
        
        console.log(output_1);
        
        output_1 = '';
    }

    
}
else if(pattern_no == 3)
{
    var totalNumberofraws = 4;
    
    var output_2 = '';
    
    for (var z = 0; z <= totalNumberofraws; z++) 
    {
        for (var k = 0; k <= z; k++) {
            
            output_2 += '*';
        }
        
        console.log(output_2);
        
        output_2 = '';
    }


}  
else
{
    console.log("enter number between 1 to 3"); 
}
   //driver code
}
n=5;pattern_no=3;
getpattern(n,pattern_no);
