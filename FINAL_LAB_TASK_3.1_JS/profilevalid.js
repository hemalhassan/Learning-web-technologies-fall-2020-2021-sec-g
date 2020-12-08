"use strict"

function validateName()
{
    let name = document.getElementById("name").value;

    if (name == "")
    {
        alert("Field cannot be empty");
    }
        
    else
    {
        if (typeof name == "string")
        {
            alert("not string");
        }
    }

    
}