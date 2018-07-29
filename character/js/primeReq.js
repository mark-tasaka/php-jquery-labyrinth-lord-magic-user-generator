/*Ability Score Prime Requisite XP Bonus/Penality*/

function primeReq(abilityScore)
{
    let message = "";
    
    if(abilityScore >= 3 && abilityScore <=5)
        {
            message = "-10% Experience Point Adjustment (Prime Requisite)";
        }
    else if(abilityScore >= 6 && abilityScore <=8)
        {
            message = "-5% Experience Point Adjustment (Prime Requisite)";
        }
    else if(abilityScore >= 13 && abilityScore <=15)
        {
            message = "+5% Experience Point Adjustment (Prime Requisite)";
        }
    else if(abilityScore >= 16 && abilityScore <=18)
        {
            message = "+10% Experience Point Adjustment (Prime Requisite)";
        }
    
    return message;
}


function secondAttack(level)
{
    let message = "";
    
    if(level === 15)
        {
            message = "Fighter has 2 attacks per round.";
        }
    
    return message;
}