
var x=document.forms['sform']['name'].value;
var y=document.forms['sform']['lname'].value;
var zip=document.forms['sform']['zip'].value;
var z=document.forms['sform']['pass'].value;

function formvali(){
    var x=document.forms['sform']['name'].value;
if(x==""||x===" ")
{
    window.alert("Name field mustbe required")
    
}
else if( y==""||y===" ")
{
    window.alert("Last Name field mustbe required")
    //return true;
}
else if( zip==""||zip===" ")
{
    window.alert("zip  mustbe required")
    //return true;
}
else if( z==""||z===" ")
{
    window.alert("Password field mustbe required")
    //return true;      
}
return true;

}

function email(){



}
function zipcode(){
    length=length.zip
    if(length!=4)
    {
        window.alert("Zip code mustbe foru digits");
    }
    return true;


}

function checkName(){
    var x=document.forms['sform']['name'].value;
    RegExp = /[A-Z a-z]/;
    input=RegExp.test(x);
    if(input==false)
    {
        Window.alert( "Name must be small charecter a-z");
    }
    return false;
}

