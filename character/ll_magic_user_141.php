<!DOCTYPE html>
<html>
<head>
<title>Labyrinth Lord Magic-User Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Labyrinth Lord Magic-User Character Generator. Goblinoid Games.">
	<meta name="keywords" content="Labyrinth Lord, Goblinoid Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2018">
		

	<link rel="stylesheet" type="text/css" href="css/ll_magic_user.css">
	<link rel="stylesheet" type="text/css" href="css/ll_magic_user_post.css">
    
    
    <script type="text/javascript" src="./js/dieRoll.js"></script>
    <script type="text/javascript" src="./js/modifiers.js"></script>
    <script type="text/javascript" src="./js/hitPoinst.js"></script>
    <script type="text/javascript" src="./js/primeReq.js"></script>
    <script type="text/javascript" src="./js/magicUserAbilities.js"></script>
    
    
    
</head>
<body>
    
    <!--PHP-->
    <?php
    
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/coins.php';
    include 'php/encumbrance.php';
    
    
        if(isset($_POST["theCharacterName"]))
        {
            $characterName = $_POST["theCharacterName"];
    
        }
    
        if(isset($_POST["thePlayerName"]))
        {
            $playerName = $_POST["thePlayerName"];
        
        }    
    
        if(isset($_POST["theAlignment"]))
        {
            $alignment = $_POST["theAlignment"];
        }

    
        if(isset($_POST["theGold"]))
        {
            $coins = $_POST["theGold"];
        }
    
        $coinQuantity = getCoins($coins)[0];
        $coinType = getCoins($coins)[1];
    
    
         
        $weaponArray = array();
        $weaponNames = array();
        $weaponDamage = array();
        $weaponWeight = array();
    
    
        if(isset($_POST["theWeapons"]))
        {
            foreach($_POST["theWeapons"] as $weapon)
            {
                array_push($weaponArray, $weapon);
            }
        }
    
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
        
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
    $totalWeaponWeight = 0;
    
    foreach($weaponArray as $select)
    {
        array_push($weaponWeight, getWeapon($select)[2]);
        $totalWeaponWeight += getWeapon($select)[2];
    }
    
    

        $gearArray = array();
        $gearNames = array();
        $gearWeight = array();
    
    
        if(isset($_POST["theGear"]))
        {
            foreach($_POST["theGear"] as $weapon)
            {
                array_push($gearArray, $weapon);
            }
        }
    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }
        
        $totalGearWeight = 0;
    
        foreach($gearArray as $select)
        {
            array_push($gearWeight, getGear($select)[1]);
            $totalGearWeight += getGear($select)[1];
        }
    
    $totalWeightCarried = $totalWeaponWeight + $totalGearWeight + $coinQuantity;
    
    $movementTurn = turnMovement($totalWeightCarried);
    
    $movementEncounter = encounterMovement($totalWeightCarried);
    
    $movementRunning = runningMovement($totalWeightCarried);
    
    
    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
           
		<span id="strength"></span>
		<span id="dexterity"></span> 
		<span id="constitution"></span> 
		<span id="intelligence"></span>
		<span id="wisdom"></span>
       <span id="charisma"></span>
		  
       
		<span id="strengthModDesc"></span>
		<span id="dexterityModDesc"></span> 
		<span id="constitutionModDesc"></span> 
		<span id="intelligenceModDesc"></span>
		<span id="wisdomModDesc"></span>
       <span id="charismaModDesc"></span>
       
       <span id="saveBreathAttack"></span>
       <span id="savePoisonDeath"></span>
       <span id="savePetrify"></span>
       <span id="saveWands"></span>
       <span id="saveSpell"></span>
       
       <span id="dieRollMethod"></span>
       
       <span id="level"></span>
       <span id="class">Magic-User</span>
       <span id="exNextLevel"></span>
       
       <span id="meleeAc0"></span>
       <span id="meleeAc1"></span>
       <span id="meleeAc2"></span>
       <span id="meleeAc3"></span>
       <span id="meleeAc4"></span>
       <span id="meleeAc5"></span>
       <span id="meleeAc6"></span>
       <span id="meleeAc7"></span>
       <span id="meleeAc8"></span>
       <span id="meleeAc9"></span>
       
       <span id="missileAc0"></span>
       <span id="missileAc1"></span>
       <span id="missileAc2"></span>
       <span id="missileAc3"></span>
       <span id="missileAc4"></span>
       <span id="missileAc5"></span>
       <span id="missileAc6"></span>
       <span id="missileAc7"></span>
       <span id="missileAc8"></span>
       <span id="missileAc9"></span>
       
       <span id="baseAc"></span>
       <span id="hitPoints"></span>
       <span id="primeReq"></span>
       <span id="modifiedAc"></span>
       
       <span id="level1Spell"></span>
       <span id="level2Spell"></span>
       <span id="level3Spell"></span>
       <span id="level4Spell"></span>
       <span id="level5Spell"></span>
       <span id="level6Spell"></span>
       <span id="level7Spell"></span>
       <span id="level8Spell"></span>
       
       <span id="wizardNotes"></span>
       
       
       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>
       
              
       <span id="playerName">
           <?php
                echo $playerName;
           ?>
        </span>
	                 
       <span id="alignment">
           <?php
                echo $alignment;
           ?>
        </span>
   
       
       <span id="weaponsList">
           <?php
           $val1 = 0;
           $val2 = 0;
           $val3 = 0;
           
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
               $val1 = isWeaponTwoHanded($theWeapon, $val1);
               $val2 = isWeaponBastardSword($theWeapon, $val2);
           }
           
           $val3 = $val1 + $val2;
           
           $weaponNotes = weaponNotes($val3);
           
           ?>  
        </span>
       
       <span id="weaponNotes">
           <?php
                echo $weaponNotes;
           ?>
        </span>
            
       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
       

            
       <span id="weaponsList3">
           <?php
           foreach($weaponWeight as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
           }
           ?>        
        </span>
       
       <span id="totalWeaponWeight">
           <?php
           echo $totalWeaponWeight;
           ?>
       </span>

              
       <span id="gearList">
           <?php
           
           foreach($gearNames as $theGear)
           {
               echo $theGear;
               echo "<br/>";
           }
           ?>
       </span>
           
              
       <span id="gearList2">
           <?php
           
           foreach($gearWeight as $theGear)
           {
               echo $theGear;
               echo "<br/>";
           }
           ?>  
        </span>
	   	   
       
       <span id="totalGearWeight">
           <?php
           echo $totalGearWeight;
           ?>
       </span>
       
       
       
       <span id="totalWeightCarried">
           <?php
           echo $totalWeightCarried . " lbs";
           ?>
       </span>
              
       
       <span id="wealth">
           <?php
           echo ($coinQuantity * 10) . $coinType;
           ?>
       </span>
       
       <span id="coinWeight">
           <?php
           echo $coinQuantity . " lbs";
           ?>
       </span>
       
              
       <span id="turnMove">
           <?php
           echo $movementTurn;
           ?>
       </span>
       
       
       <span id="encounterMove">
           <?php
           echo $movementEncounter;
           ?>
       </span>
       
       <span id="runningMove">
           <?php
           echo $movementRunning;
           ?>
       </span>
       
       
	</section>
	

		
  <script>
      

	  
	/*
	 Character() - Magic-User Character Constructor
	*/
	function Character() {

        let strength = rollDice(6, 3, 0, 0);
        let dexterity = rollDice(6, 3, 0, 0);
        let constitution = rollDice(6, 3, 0, 0);
        let	intelligence = rollDice(6, 3, 0, 0);
        let	wisdom = rollDice(6, 3, 0, 0);
        let	charisma = rollDice(6, 3, 0, 0);
        let wisdomMod = abilityScoreModifier(wisdom);
        let strengthMod = abilityScoreModifier(strength);
        let dexterityMod = abilityScoreModifier(dexterity);
        let constitutionMod = abilityScoreModifier(constitution);
        let magic_user = getMagic_User();
		
		let magic_userCharacter = {
			"strength": strength,
			"dexterity": dexterity,
			"constitution": constitution,
			"intelligence": intelligence,
			"wisdom": wisdom,
			"charisma": charisma,
            "strengthMod": abilityScoreModifier(strength),
            "strengthModifyDes": strengthModifierDescription(strength),
            "dexterityMod": abilityScoreModifier(dexterity),
            "dexterityModifyDes": dexterityModifierDescription(dexterity),
            "constitutionMod": abilityScoreModifier(constitution),
            "constitutionModifyDes": constitutionModifierDescription(constitution),
            "intelligenceMod": abilityScoreModifier(intelligence),
            "intelligenceModifyDes": intelligenceModifierDescription(intelligence),
            "wisdomModifyDes": wisdomModifierDescription(wisdom),
            "charismaMod": abilityScoreModifier(charisma),
            "charismaModifyDes": charismaModifierDescription(charisma),
            "breathAttack": magic_user.breathAttack,
            "poisonDeath": magic_user.poisonDeath,
            "petrify": magic_user.petrify,
            "wandsSave": magic_user.wand - wisdomMod,
            "spellSave": magic_user.spell - wisdomMod,
            "level": magic_user.level,
            "nextLevelExp": magic_user.exNext,
            "meleeHitAC0": magic_user.thaco - (strengthMod),
            "meleeHitAC1": magic_user.thaco - (strengthMod) - 1,
            "meleeHitAC2": magic_user.thaco - (strengthMod) - 2,
            "meleeHitAC3": magic_user.thaco - (strengthMod) - 3,
            "meleeHitAC4": magic_user.thaco - (strengthMod) - 4,
            "meleeHitAC5": magic_user.thaco - (strengthMod) - 5,
            "meleeHitAC6": magic_user.thaco - (strengthMod) - 6,
            "meleeHitAC7": magic_user.thaco - (strengthMod) - 7,
            "meleeHitAC8": magic_user.thaco - (strengthMod) - 8,
            "meleeHitAC9": magic_user.thaco - (strengthMod) - 9,
            "missileHitAC0": magic_user.thaco - (dexterityMod),
            "missileHitAC1": magic_user.thaco - (dexterityMod) - 1,
            "missileHitAC2": magic_user.thaco - (dexterityMod) - 2,
            "missileHitAC3": magic_user.thaco - (dexterityMod) - 3,
            "missileHitAC4": magic_user.thaco - (dexterityMod) - 4,
            "missileHitAC5": magic_user.thaco - (dexterityMod) - 5,
            "missileHitAC6": magic_user.thaco - (dexterityMod) - 6,
            "missileHitAC7": magic_user.thaco - (dexterityMod) - 7,
            "missileHitAC8": magic_user.thaco - (dexterityMod) - 8,
            "missileHitAC9": magic_user.thaco - (dexterityMod) - 9,
            "acBase": 9 - dexterityMod,
            "acModified": 9 - dexterityMod,
            "hp": hitPoints(magic_user.hd, constitutionMod) + addHighLevelHp(magic_user.level),
            "primeReqBonus": primeReq(intelligence),
            "spellLevel1": magic_user.spellLevel1,
            "spellLevel2": magic_user.spellLevel2,
            "spellLevel3": magic_user.spellLevel3,
            "spellLevel4": magic_user.spellLevel4,
            "spellLevel5": magic_user.spellLevel5,
            "spellLevel6": magic_user.spellLevel6,
            "spellLevel7": magic_user.spellLevel7,
            "spellLevel8": magic_user.spellLevel8,
            "magicUserAbilities": mageAbilities(magic_user.level),
			"dieRollMethod": "Ability Score Generation: 3d6 (Old School)"
			
		
			

		};
	    if(magic_userCharacter.hitPoints <= 0 ){
			magic_userCharacter.hitPoints = 1;
		}
		return magic_userCharacter;
	  
	  }
	  

      
    /*getMagic_User() return the statistics for the Magic_User per level*/  
    function getMagic_User() {
	let magic_user = [
        
		{"level": 1,
		 "thaco": 19,
		 "breathAttack": 16,
		 "poisonDeath": 13,
		 "petrify": 13,
		 "wand": 13,
		 "spell": 14,
         "exNext": "2,501",
         "spellLevel1": "1",
         "spellLevel2": "-",
         "spellLevel3": "-",
         "spellLevel4": "-",
         "spellLevel5": "-",
         "spellLevel6": "-",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 1
        },
        
		{"level": 2,
		 "thaco": 19,
		 "breathAttack": 16,
		 "poisonDeath": 13,
		 "petrify": 13,
		 "wand": 13,
		 "spell": 14,
         "exNext": "5,001",
         "spellLevel1": "2",
         "spellLevel2": "-",
         "spellLevel3": "-",
         "spellLevel4": "-",
         "spellLevel5": "-",
         "spellLevel6": "-",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 2
        },
        
		{"level": 3,
		 "thaco": 19,
		 "breathAttack": 16,
		 "poisonDeath": 13,
		 "petrify": 13,
		 "wand": 13,
		 "spell": 14,
         "exNext": "10,001",
         "spellLevel1": "2",
         "spellLevel2": "1",
         "spellLevel3": "-",
         "spellLevel4": "-",
         "spellLevel5": "-",
         "spellLevel6": "-",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 3
        },
        
		{"level": 4,
		 "thaco": 18,
		 "breathAttack": 16,
		 "poisonDeath": 13,
		 "petrify": 13,
		 "wand": 13,
		 "spell": 14,
         "exNext": "20,001",
         "spellLevel1": "2",
         "spellLevel2": "2",
         "spellLevel3": "-",
         "spellLevel4": "-",
         "spellLevel5": "-",
         "spellLevel6": "-",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 4
        },
        
		{"level": 5,
		 "thaco": 18,
		 "breathAttack": 16,
		 "poisonDeath": 13,
		 "petrify": 13,
		 "wand": 13,
		 "spell": 14,
         "exNext": "40,001",
         "spellLevel1": "2",
         "spellLevel2": "2",
         "spellLevel3": "1",
         "spellLevel4": "-",
         "spellLevel5": "-",
         "spellLevel6": "-",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 5
        },
        
		{"level": 6,
		 "thaco": 18,
		 "breathAttack": 14,
		 "poisonDeath": 11,
		 "petrify": 11,
		 "wand": 11,
		 "spell": 12,
         "exNext": "80,001",
         "spellLevel1": "2",
         "spellLevel2": "2",
         "spellLevel3": "2",
         "spellLevel4": "-",
         "spellLevel5": "-",
         "spellLevel6": "-",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 6
        },
        
		{"level": 7,
		 "thaco": 18,
		 "breathAttack": 14,
		 "poisonDeath": 11,
		 "petrify": 11,
		 "wand": 11,
		 "spell": 12,
         "exNext": "160,001",
         "spellLevel1": "3",
         "spellLevel2": "2",
         "spellLevel3": "2",
         "spellLevel4": "1",
         "spellLevel5": "-",
         "spellLevel6": "-",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 7
        },
        
		{"level": 8,
		 "thaco": 17,
		 "breathAttack": 14,
		 "poisonDeath": 11,
		 "petrify": 11,
		 "wand": 11,
		 "spell": 12,
         "exNext": "310,001",
         "spellLevel1": "3",
         "spellLevel2": "3",
         "spellLevel3": "2",
         "spellLevel4": "2",
         "spellLevel5": "-",
         "spellLevel6": "-",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 8
        },
        
		{"level": 9,
		 "thaco": 17,
		 "breathAttack": 14,
		 "poisonDeath": 11,
		 "petrify": 11,
		 "wand": 11,
		 "spell": 12,
         "exNext": "460,001",
         "spellLevel1": "3",
         "spellLevel2": "3",
         "spellLevel3": "3",
         "spellLevel4": "2",
         "spellLevel5": "1",
         "spellLevel6": "-",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 9
        },
        
		{"level": 10,
		 "thaco": 17,
		 "breathAttack": 14,
		 "poisonDeath": 11,
		 "petrify": 11,
		 "wand": 11,
		 "spell": 12,
         "exNext": "610,001",
         "spellLevel1": "3",
         "spellLevel2": "3",
         "spellLevel3": "3",
         "spellLevel4": "3",
         "spellLevel5": "2",
         "spellLevel6": "-",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 9
        },
        
		{"level": 11,
		 "thaco": 16,
		 "breathAttack": 12,
		 "poisonDeath": 9,
		 "petrify": 9,
		 "wand": 9,
		 "spell": 8,
         "exNext": "760,001",
         "spellLevel1": "4",
         "spellLevel2": "3",
         "spellLevel3": "3",
         "spellLevel4": "3",
         "spellLevel5": "2",
         "spellLevel6": "1",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 9
        },
        
		{"level": 12,
		 "thaco": 16,
		 "breathAttack": 12,
		 "poisonDeath": 9,
		 "petrify": 9,
		 "wand": 9,
		 "spell": 8,
         "exNext": "910,001",
         "spellLevel1": "4",
         "spellLevel2": "4",
         "spellLevel3": "3",
         "spellLevel4": "3",
         "spellLevel5": "3",
         "spellLevel6": "2",
         "spellLevel7": "-",
         "spellLevel8": "-",
         "hd": 9
        },
        
		{"level": 13,
		 "thaco": 15,
		 "breathAttack": 12,
		 "poisonDeath": 9,
		 "petrify": 9,
		 "wand": 9,
		 "spell": 8,
         "exNext": "1,060,001",
         "spellLevel1": "4",
         "spellLevel2": "4",
         "spellLevel3": "4",
         "spellLevel4": "3",
         "spellLevel5": "3",
         "spellLevel6": "2",
         "spellLevel7": "1",
         "spellLevel8": "-",
         "hd": 9
        },
        
		{"level": 14,
		 "thaco": 14,
		 "breathAttack": 12,
		 "poisonDeath": 9,
		 "petrify": 9,
		 "wand": 9,
		 "spell": 8,
         "exNext": "1,210,001",
         "spellLevel1": "4",
         "spellLevel2": "4",
         "spellLevel3": "4",
         "spellLevel4": "4",
         "spellLevel5": "3",
         "spellLevel6": "3",
         "spellLevel7": "2",
         "spellLevel8": "-",
         "hd": 9
        },
        
		{"level": 15,
		 "thaco": 14,
		 "breathAttack": 12,
		 "poisonDeath": 9,
		 "petrify": 9,
		 "wand": 9,
		 "spell": 8,
         "exNext": "1,360,001",
         "spellLevel1": "5",
         "spellLevel2": "4",
         "spellLevel3": "4",
         "spellLevel4": "4",
         "spellLevel5": "4",
         "spellLevel6": "3",
         "spellLevel7": "2",
         "spellLevel8": "1",
         "hd": 9
        }
        

		
	];
	
	
	return magic_user[13]; 
}

  
       let imgData = "images/magic_user_character_sheet.png";
      
        $("#character_sheet").attr("src", imgData);
      

	  let data = Character();
		 
      $("#strength").html(data.strength);
      
      $("#dexterity").html(data.dexterity);
      
      $("#constitution").html(data.constitution);
      
      $("#intelligence").html(data.intelligence);
      
      $("#wisdom").html(data.wisdom);
      
      $("#charisma").html(data.charisma);
      
      $("#strengthModDesc").html(data.strengthModifyDes);
      $("#dexterityModDesc").html(data.dexterityModifyDes);
      $("#constitutionModDesc").html(data.constitutionModifyDes);
      $("#intelligenceModDesc").html(data.intelligenceModifyDes);
      $("#wisdomModDesc").html(data.wisdomModifyDes);
      $("#charismaModDesc").html(data.charismaModifyDes);
      
      $("#saveBreathAttack").html(data.breathAttack);
      $("#savePoisonDeath").html(data.poisonDeath);
      $("#savePetrify").html(data.petrify);
      $("#saveWands").html(data.wandsSave);
      $("#saveSpell").html(data.spellSave);
      
      $("#dieRollMethod").html(data.dieRollMethod);
      
      $("#level").html(data.level);
      $("#exNextLevel").html(data.nextLevelExp);
      
      $("#meleeAc0").html(data.meleeHitAC0);
      $("#meleeAc1").html(data.meleeHitAC1);
      $("#meleeAc2").html(data.meleeHitAC2);
      $("#meleeAc3").html(data.meleeHitAC3);
      $("#meleeAc4").html(data.meleeHitAC4);
      $("#meleeAc5").html(data.meleeHitAC5);
      $("#meleeAc6").html(data.meleeHitAC6);
      $("#meleeAc7").html(data.meleeHitAC7);
      $("#meleeAc8").html(data.meleeHitAC8);
      $("#meleeAc9").html(data.meleeHitAC9);
      
      $("#missileAc0").html(data.missileHitAC0);
      $("#missileAc1").html(data.missileHitAC1);
      $("#missileAc2").html(data.missileHitAC2);
      $("#missileAc3").html(data.missileHitAC3);
      $("#missileAc4").html(data.missileHitAC4);
      $("#missileAc5").html(data.missileHitAC5);
      $("#missileAc6").html(data.missileHitAC6);
      $("#missileAc7").html(data.missileHitAC7);
      $("#missileAc8").html(data.missileHitAC8);
      $("#missileAc9").html(data.missileHitAC9);
      
      $("#baseAc").html(data.acBase);
      $("#hitPoints").html(data.hp);
      $("#primeReq").html(data.primeReqBonus);
      $("#modifiedAc").html(data.acModified);
      
      $("#level1Spell").html(data.spellLevel1);
      $("#level2Spell").html(data.spellLevel2);
      $("#level3Spell").html(data.spellLevel3);
      $("#level4Spell").html(data.spellLevel4);
      $("#level5Spell").html(data.spellLevel5);
      $("#level6Spell").html(data.spellLevel6);
      $("#level7Spell").html(data.spellLevel7);
      $("#level8Spell").html(data.spellLevel8);
      
      $("#wizardNotes").html(data.magicUserAbilities);

	 
  </script>
		
	
    
</body>
</html>