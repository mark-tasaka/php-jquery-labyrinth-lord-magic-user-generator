
function mageAbilities (level)
{
    let message = "";
    
    if(level >= 9 && level <= 10)
        {
            message = "Ability to create spells and magic items.";
        }
    else if(level >= 11)
        {
            message = "Ability to create spells and magic items.<br/>Can build a stronghold (i.e. wizard’s tower); attract 1d6 magic-user<br/> apprentices (levels 1-3).";
        }
    
    return message;
}