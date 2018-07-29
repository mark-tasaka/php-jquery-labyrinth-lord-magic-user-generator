/*Labyrinth Lord character generator
designed by Mark Tasaka 2018*/

function abilityScoreModifier(abilityScore)
{
    let modifier = 0;
    
    if(abilityScore === 3)
        {
            modifier = -3;
        }
    else if(abilityScore >=4 && abilityScore <=5)
        {
            modifier = -2;
        }
    else if(abilityScore >=6 && abilityScore <=8)
        {
            modifier = -1;
        }
    else if(abilityScore >=13 && abilityScore <=15)
        {
            modifier = 1;
        }
    else if(abilityScore >=16 && abilityScore <=17)
        {
            modifier = 2;
        }
    else if(abilityScore === 18)
        {
            modifier = 3;
        }
    
    return modifier;
}

function strengthModifierDescription(abilityScore)
{
    let desc = "";
    
    if(abilityScore === 3)
        {
            desc = "-3 to hit, damage & forcing doors";
        }
    else if(abilityScore >=4 && abilityScore <=5)
        {
            desc = "-2 to hit, damage & forcing doors";
        }
    else if(abilityScore >=6 && abilityScore <=8)
        {
            desc = "-1 to hit, damage & forcing doors";
        }
    else if(abilityScore >=13 && abilityScore <=15)
        {
            desc = "+1 to hit, damage & forcing doors";
        }
    else if(abilityScore >=16 && abilityScore <=17)
        {
            desc = "+2 to hit, damage & forcing doors";
        }
    else if(abilityScore === 18)
        {
            desc = "+3 to hit, damage & forcing doors";
        }
    
    return desc;
}


function dexterityModifierDescription(abilityScore)
{
    let desc = "";
    
    if(abilityScore === 3)
        {
            desc = "+3 AC; -3 Missile Attack; -2 Optional Initiative";
        }
    else if(abilityScore >=4 && abilityScore <=5)
        {
            desc = "+2 AC; -2 Missile Attack; -1 Optional Initiative";
        }
    else if(abilityScore >=6 && abilityScore <=8)
        {
            desc = "+1 AC; -1 Missile Attack; -1 Optional Initiative";
        }
    else if(abilityScore >=13 && abilityScore <=15)
        {
            desc = "-1 AC; +1 Missile Attack; +1 Optional Initiative";
        }
    else if(abilityScore >=16 && abilityScore <=17)
        {
            desc = "-2 AC; +2 Missile Attack; +1 Optional Initiative";
        }
    else if(abilityScore === 18)
        {
            desc = "-3 AC; +3 Missile Attack; +2 Optional Initiative";
        }
    
    return desc;
}

function constitutionModifierDescription(abilityScore)
{
    let desc = "";
    
    if(abilityScore === 3)
        {
            desc = "-3 Hit Points per<br/>Hit Die";
        }
    else if(abilityScore >=4 && abilityScore <=5)
        {
            desc = "-2 Hit Points per<br/>Hit Die";
        }
    else if(abilityScore >=6 && abilityScore <=8)
        {
            desc = "-1 Hit Points per<br/>Hit Die";
        }
    else if(abilityScore >=13 && abilityScore <=15)
        {
            desc = "+1 Hit Points per<br/>Hit Die";
        }
    else if(abilityScore >=16 && abilityScore <=17)
        {
            desc = "+2 Hit Points per<br/>Hit Die";
        }
    else if(abilityScore === 18)
        {
            desc = "+3 Hit Points per<br/>Hit Die";
        }
    
    return desc;
}


function intelligenceModifierDescription(abilityScore)
{
    let desc = "Able to read and write";
    
    if(abilityScore === 3)
        {
            desc = "Unable to read or write; broken speech";
        }
    else if(abilityScore >=4 && abilityScore <=5)
        {
            desc = "Unable to read or write";
        }
    else if(abilityScore >=6 && abilityScore <=8)
        {
            desc = "Partial ability to write";
        }
    else if(abilityScore >=13 && abilityScore <=15)
        {
            desc = "+1 Languages; Able to read and write";
        }
    else if(abilityScore >=16 && abilityScore <=17)
        {
            desc = "+2 Languages; Able to read and write";
        }
    else if(abilityScore === 18)
        {
            desc = "+3 Languages; Able to read and write";
        }
    
    return desc;
}


function wisdomModifierDescription(abilityScore)
{
    let desc = "";
    
    if(abilityScore === 3)
        {
            desc = "-3 Saving Throw against all magical effects";
        }
    else if(abilityScore >=4 && abilityScore <=5)
        {
            desc = "-2 Saving Throw against all magical effects";
        }
    else if(abilityScore >=6 && abilityScore <=8)
        {
            desc = "-1 Saving Throw against all magical effects";
        }
    else if(abilityScore >=13 && abilityScore <=15)
        {
            desc = "+1 Saving Throw against all magical effects";
        }
    else if(abilityScore >=16 && abilityScore <=17)
        {
            desc = "+2 Saving Throw against all magical effects";
        }
    else if(abilityScore === 18)
        {
            desc = "+3 Saving Throw against all magical effects";
        }
    
    return desc;
}



function charismaModifierDescription(abilityScore)
{
    let desc = "+0 Reaction Ajustment; Max Retainers 4; Retainer Morale 7";
    
    if(abilityScore === 3)
        {
            desc = "+2 Reaction Ajustment; Max Retainers 1; Retainer Morale 4";
        }
    else if(abilityScore >=4 && abilityScore <=5)
        {
            desc = "+1 Reaction Ajustment; Max Retainers 2; Retainer Morale 5";
        }
    else if(abilityScore >=6 && abilityScore <=8)
        {
            desc = "+1 Reaction Ajustment; Max Retainers 3; Retainer Morale 6";
        }
    else if(abilityScore >=13 && abilityScore <=15)
        {
            desc = "-1 Reaction Ajustment; Max Retainers 5; Retainer Morale 8";
        }
    else if(abilityScore >=16 && abilityScore <=17)
        {
            desc = "-1 Reaction Ajustment; Max Retainers 6; Retainer Morale 9";
        }
    else if(abilityScore === 18)
        {
            desc = "-2 Reaction Ajustment; Max Retainers 7; Retainer Morale 10";
        }
    
    return desc;
}