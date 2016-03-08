<?php

use Illuminate\Database\Seeder;

class MovesTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
	$move_array = [
	[1, "pound", "normal", "physical", 40, 100, 35, "Inflicts regular damage with no additional effect."],
[2, "karate-chop", "fighting", "physical", 50, 100, 25, "Has an increased chance for a critical hit."],
[3, "double-slap", "normal", "physical", 15, 85, 10, "Hits 2-5 times in one turn."],
[4, "comet-punch", "normal", "physical", 18, 85, 15, "Hits 2-5 times in one turn."],
[5, "mega-punch", "normal", "physical", 80, 85, 20, "Inflicts regular damage with no additional effect."],
[6, "pay-day", "normal", "physical", 40, 100, 20, "Scatters money on the ground worth five times the user's level."],
[7, "fire-punch", "fire", "physical", 75, 100, 15, "Has a chance to burn the target."],
[8, "ice-punch", "ice", "physical", 75, 100, 15, "Has a chance to freeze the target."],
[9, "thunder-punch", "electric", "physical", 75, 100, 15, "Has a chance to paralyze the target."],
[10, "scratch", "normal", "physical", 40, 100, 35, "Inflicts regular damage with no additional effect."],
[11, "vice-grip", "normal", "physical", 55, 100, 30, "Inflicts regular damage with no additional effect."],
[12, "guillotine", "normal", "physical", null, 30, 5, "Causes a one-hit KO."],
[13, "razor-wind", "normal", "special", 80, 100, 10, "Requires a turn to charge before attacking."],
[14, "swords-dance", "normal", "status", null, null, 20, "Raises the user's Attack by two stages."],
[15, "cut", "normal", "physical", 50, 95, 30, "Inflicts regular damage with no additional effect."],
[16, "gust", "flying", "special", 40, 100, 35, "Inflicts regular damage and can hit Pokémon in the air."],
[17, "wing-attack", "flying", "physical", 60, 100, 35, "Inflicts regular damage with no additional effect."],
[18, "whirlwind", "normal", "status", null, null, 20, "Immediately ends wild battles.  Forces trainers to switch Pokémon."],
[19, "fly", "flying", "physical", 90, 95, 15, "User flies high into the air, dodging all attacks, and hits next turn."],
[20, "bind", "normal", "physical", 15, 85, 20, "Prevents the target from fleeing and inflicts damage for 2-5 turns."],
[21, "slam", "normal", "physical", 80, 75, 20, "Inflicts regular damage with no additional effect."],
[22, "vine-whip", "grass", "physical", 45, 100, 25, "Inflicts regular damage with no additional effect."],
[23, "stomp", "normal", "physical", 65, 100, 20, "Has a chance to make the target flinch."],
[24, "double-kick", "fighting", "physical", 30, 100, 30, "Hits twice in one turn."],
[25, "mega-kick", "normal", "physical", 120, 75, 5, "Inflicts regular damage with no additional effect."],
[26, "jump-kick", "fighting", "physical", 100, 95, 10, "If the user misses, it takes half the damage it would have inflicted in recoil."],
[27, "rolling-kick", "fighting", "physical", 60, 85, 15, "Has a chance to make the target flinch."],
[28, "sand-attack", "ground", "status", null, 100, 15, "Lowers the target's accuracy by one stage."],
[29, "headbutt", "normal", "physical", 70, 100, 15, "Has a chance to make the target flinch."],
[30, "horn-attack", "normal", "physical", 65, 100, 25, "Inflicts regular damage with no additional effect."],
[31, "fury-attack", "normal", "physical", 15, 85, 20, "Hits 2-5 times in one turn."],
[32, "horn-drill", "normal", "physical", null, 30, 5, "Causes a one-hit KO."],
[33, "tackle", "normal", "physical", 50, 100, 35, "Inflicts regular damage with no additional effect."],
[34, "body-slam", "normal", "physical", 85, 100, 15, "Has a chance to paralyze the target."],
[35, "wrap", "normal", "physical", 15, 90, 20, "Prevents the target from fleeing and inflicts damage for 2-5 turns."],
[36, "take-down", "normal", "physical", 90, 85, 20, "User receives 1/4 the damage it inflicts in recoil."],
[37, "thrash", "normal", "physical", 120, 100, 10, "Hits every turn for 2-3 turns, then confuses the user."],
[38, "double-edge", "normal", "physical", 120, 100, 15, "User receives 1/3 the damage inflicted in recoil."],
[39, "tail-whip", "normal", "status", null, 100, 30, "Lowers the target's Defense by one stage."],
[40, "poison-sting", "poison", "physical", 15, 100, 35, "Has a chance to poison the target."],
[41, "twineedle", "bug", "physical", 25, 100, 20, "Hits twice in the same turn.  Has a chance to poison the target."],
[42, "pin-missile", "bug", "physical", 25, 95, 20, "Hits 2-5 times in one turn."],
[43, "leer", "normal", "status", null, 100, 30, "Lowers the target's Defense by one stage."],
[44, "bite", "dark", "physical", 60, 100, 25, "Has a chance to make the target flinch."],
[45, "growl", "normal", "status", null, 100, 40, "Lowers the target's Attack by one stage."],
[46, "roar", "normal", "status", null, null, 20, "Immediately ends wild battles.  Forces trainers to switch Pokémon."],
[47, "sing", "normal", "status", null, 55, 15, "Puts the target to sleep."],
[48, "supersonic", "normal", "status", null, 55, 20, "Confuses the target."],
[49, "sonic-boom", "normal", "special", null, 90, 20, "Inflicts 20 points of damage."],
[50, "disable", "normal", "status", null, 100, 20, "Disables the target's last used move for 1-8 turns."],
[51, "acid", "poison", "special", 40, 100, 30, "Has a chance to lower the target's Special Defense by one stage."],
[52, "ember", "fire", "special", 40, 100, 25, "Has a chance to burn the target."],
[53, "flamethrower", "fire", "special", 90, 100, 15, "Has a chance to burn the target."],
[54, "mist", "ice", "status", null, null, 30, "Protects the user's stats from being changed by enemy moves."],
[55, "water-gun", "water", "special", 40, 100, 25, "Inflicts regular damage with no additional effect."],
[56, "hydro-pump", "water", "special", 110, 80, 5, "Inflicts regular damage with no additional effect."],
[57, "surf", "water", "special", 90, 100, 15, "Inflicts regular damage and can hit Dive users."],
[58, "ice-beam", "ice", "special", 90, 100, 10, "Has a chance to freeze the target."],
[59, "blizzard", "ice", "special", 110, 70, 5, "Has a chance to freeze the target."],
[60, "psybeam", "psychic", "special", 65, 100, 20, "Has a chance to confuse the target."],
[61, "bubble-beam", "water", "special", 65, 100, 20, "Has a chance to lower the target's Speed by one stage."],
[62, "aurora-beam", "ice", "special", 65, 100, 20, "Has a chance to lower the target's Attack by one stage."],
[63, "hyper-beam", "normal", "special", 150, 90, 5, "User foregoes its next turn to recharge."],
[64, "peck", "flying", "physical", 35, 100, 35, "Inflicts regular damage with no additional effect."],
[65, "drill-peck", "flying", "physical", 80, 100, 20, "Inflicts regular damage with no additional effect."],
[66, "submission", "fighting", "physical", 80, 80, 20, "User receives 1/4 the damage it inflicts in recoil."],
[67, "low-kick", "fighting", "physical", null, 100, 20, "Inflicts more damage to heavier targets, with a maximum of 120 power."],
[68, "counter", "fighting", "physical", null, 100, 20, "Inflicts twice the damage the user received from the last physical hit it took."],
[69, "seismic-toss", "fighting", "physical", null, 100, 20, "Inflicts damage equal to the user's level."],
[70, "strength", "normal", "physical", 80, 100, 15, "Inflicts regular damage with no additional effect."],
[71, "absorb", "grass", "special", 20, 100, 25, "Drains half the damage inflicted to heal the user."],
[72, "mega-drain", "grass", "special", 40, 100, 15, "Drains half the damage inflicted to heal the user."],
[73, "leech-seed", "grass", "status", null, 90, 10, "Seeds the target, stealing HP from it every turn."],
[74, "growth", "normal", "status", null, null, 20, "Raises the user's Attack and Special Attack by one stage."],
[75, "razor-leaf", "grass", "physical", 55, 95, 25, "Has an increased chance for a critical hit."],
[76, "solar-beam", "grass", "special", 120, 100, 10, "Requires a turn to charge before attacking."],
[77, "poison-powder", "poison", "status", null, 75, 35, "Poisons the target."],
[78, "stun-spore", "grass", "status", null, 75, 30, "Paralyzes the target."],
[79, "sleep-powder", "grass", "status", null, 75, 15, "Puts the target to sleep."],
[80, "petal-dance", "grass", "special", 120, 100, 10, "Hits every turn for 2-3 turns, then confuses the user."],
[81, "string-shot", "bug", "status", null, 95, 40, "Lowers the target's Speed by one stage."],
[82, "dragon-rage", "dragon", "special", null, 100, 10, "Inflicts 40 points of damage."],
[83, "fire-spin", "fire", "special", 35, 85, 15, "Prevents the target from fleeing and inflicts damage for 2-5 turns."],
[84, "thunder-shock", "electric", "special", 40, 100, 30, "Has a chance to paralyze the target."],
[85, "thunderbolt", "electric", "special", 90, 100, 15, "Has a chance to paralyze the target."],
[86, "thunder-wave", "electric", "status", null, 100, 20, "Paralyzes the target."],
[87, "thunder", "electric", "special", 110, 70, 10, "Has a chance to paralyze the target."],
[88, "rock-throw", "rock", "physical", 50, 90, 15, "Inflicts regular damage with no additional effect."],
[89, "earthquake", "ground", "physical", 100, 100, 10, "Inflicts regular damage and can hit Dig users."],
[90, "fissure", "ground", "physical", null, 30, 5, "Causes a one-hit KO."],
[91, "dig", "ground", "physical", 80, 100, 10, "User digs underground, dodging all attacks, and hits next turn."],
[92, "toxic", "poison", "status", null, 90, 10, "Badly poisons the target, inflicting more damage every turn."],
[93, "confusion", "psychic", "special", 50, 100, 25, "Has a chance to confuse the target."],
[94, "psychic", "psychic", "special", 90, 100, 10, "Has a chance to lower the target's Special Defense by one stage."],
[95, "hypnosis", "psychic", "status", null, 60, 20, "Puts the target to sleep."],
[96, "meditate", "psychic", "status", null, null, 40, "Raises the user's Attack by one stage."],
[97, "agility", "psychic", "status", null, null, 30, "Raises the user's Speed by two stages."],
[98, "quick-attack", "normal", "physical", 40, 100, 30, "Inflicts regular damage with no additional effect."],
[99, "rage", "normal", "physical", 20, 100, 20, "If the user is hit after using this move, its Attack rises by one stage."],
[100, "teleport", "psychic", "status", null, null, 20, "Immediately ends wild battles.  No effect otherwise."],
[101, "night-shade", "ghost", "special", null, 100, 15, "Inflicts damage equal to the user's level."],
[102, "mimic", "normal", "status", null, null, 10, "Copies the target's last used move."],
[103, "screech", "normal", "status", null, 85, 40, "Lowers the target's Defense by two stages."],
[104, "double-team", "normal", "status", null, null, 15, "Raises the user's evasion by one stage."],
[105, "recover", "normal", "status", null, null, 10, "Heals the user by half its max HP."],
[106, "harden", "normal", "status", null, null, 30, "Raises the user's Defense by one stage."],
[107, "minimize", "normal", "status", null, null, 10, "Raises the user's evasion by two stages."],
[108, "smokescreen", "normal", "status", null, 100, 20, "Lowers the target's accuracy by one stage."],
[109, "confuse-ray", "ghost", "status", null, 100, 10, "Confuses the target."],
[110, "withdraw", "water", "status", null, null, 40, "Raises the user's Defense by one stage."],
[111, "defense-curl", "normal", "status", null, null, 40, "Raises user's Defense by one stage."],
[112, "barrier", "psychic", "status", null, null, 20, "Raises the user's Defense by two stages."],
[113, "light-screen", "psychic", "status", null, null, 30, "Reduces damage from special attacks by 50% for five turns."],
[114, "haze", "ice", "status", null, null, 30, "Resets all Pokémon's stats, accuracy, and evasion."],
[115, "reflect", "psychic", "status", null, null, 20, "Reduces damage from physical attacks by half."],
[116, "focus-energy", "normal", "status", null, null, 30, "Increases the user's chance to score a critical hit."],
[117, "bide", "normal", "physical", null, null, 10, "User waits for two turns, then hits back for twice the damage it took."],
[118, "metronome", "normal", "status", null, null, 10, "Randomly selects and uses any move in the game."],
[119, "mirror-move", "flying", "status", null, null, 20, "Uses the target's last used move."],
[120, "self-destruct", "normal", "physical", 200, 100, 5, "User faints."],
[121, "egg-bomb", "normal", "physical", 100, 75, 10, "Inflicts regular damage with no additional effect."],
[122, "lick", "ghost", "physical", 30, 100, 30, "Has a chance to paralyze the target."],
[123, "smog", "poison", "special", 30, 70, 20, "Has a chance to poison the target."],
[124, "sludge", "poison", "special", 65, 100, 20, "Has a chance to poison the target."],
[125, "bone-club", "ground", "physical", 65, 85, 20, "Has a chance to make the target flinch."],
[126, "fire-blast", "fire", "special", 110, 85, 5, "Has a chance to burn the target."],
[127, "waterfall", "water", "physical", 80, 100, 15, "Has a chance to make the target flinch."],
[128, "clamp", "water", "physical", 35, 85, 15, "Prevents the target from fleeing and inflicts damage for 2-5 turns."],
[129, "swift", "normal", "special", 60, null, 20, "Never misses."],
[130, "skull-bash", "normal", "physical", 130, 100, 10, "Raises the user's Defense by one stage.  User charges for one turn before attacking."],
[131, "spike-cannon", "normal", "physical", 20, 100, 15, "Hits 2-5 times in one turn."],
[132, "constrict", "normal", "physical", 10, 100, 35, "Has a chance to lower the target's Speed by one stage."],
[133, "amnesia", "psychic", "status", null, null, 20, "Raises the user's Special Defense by two stages."],
[134, "kinesis", "psychic", "status", null, 80, 15, "Lowers the target's accuracy by one stage."],
[135, "soft-boiled", "normal", "status", null, null, 10, "Heals the user by half its max HP."],
[136, "high-jump-kick", "fighting", "physical", 130, 90, 10, "If the user misses, it takes half the damage it would have inflicted in recoil."],
[137, "glare", "normal", "status", null, 100, 30, "Paralyzes the target."],
[138, "dream-eater", "psychic", "special", 100, 100, 15, "Only works on sleeping Pokémon.  Drains half the damage inflicted to heal the user."],
[139, "poison-gas", "poison", "status", null, 90, 40, "Poisons the target."],
[140, "barrage", "normal", "physical", 15, 85, 20, "Hits 2-5 times in one turn."],
[141, "leech-life", "bug", "physical", 20, 100, 15, "Drains half the damage inflicted to heal the user."],
[142, "lovely-kiss", "normal", "status", null, 75, 10, "Puts the target to sleep."],
[143, "sky-attack", "flying", "physical", 140, 90, 5, "User charges for one turn before attacking.  Has a chance to make the target flinch."],
[144, "transform", "normal", "status", null, null, 10, "User becomes a copy of the target until it leaves battle."],
[145, "bubble", "water", "special", 40, 100, 30, "Has a chance to lower the target's Speed by one stage."],
[146, "dizzy-punch", "normal", "physical", 70, 100, 10, "Has a chance to confuse the target."],
[147, "spore", "grass", "status", null, 100, 15, "Puts the target to sleep."],
[148, "flash", "normal", "status", null, 100, 20, "Lowers the target's accuracy by one stage."],
[149, "psywave", "psychic", "special", null, 100, 15, "Inflicts damage between 50% and 150% of the user's level."],
[150, "splash", "normal", "status", null, null, 40, "Does nothing."],
[151, "acid-armor", "poison", "status", null, null, 20, "Raises the user's Defense by two stages."],
[152, "crabhammer", "water", "physical", 100, 90, 10, "Has an increased chance for a critical hit."],
[153, "explosion", "normal", "physical", 250, 100, 5, "User faints."],
[154, "fury-swipes", "normal", "physical", 18, 80, 15, "Hits 2-5 times in one turn."],
[155, "bonemerang", "ground", "physical", 50, 90, 10, "Hits twice in one turn."],
[156, "rest", "psychic", "status", null, null, 10, "User sleeps for two turns, completely healing itself."],
[157, "rock-slide", "rock", "physical", 75, 90, 10, "Has a chance to make the target flinch."],
[158, "hyper-fang", "normal", "physical", 80, 90, 15, "Has a chance to make the target flinch."],
[159, "sharpen", "normal", "status", null, null, 30, "Raises the user's Attack by one stage."],
[160, "conversion", "normal", "status", null, null, 30, "User's type changes to the type of one of its moves at random."],
[161, "tri-attack", "normal", "special", 80, 100, 10, "Has a chance to burn, freeze, or paralyze the target."],
[162, "super-fang", "normal", "physical", null, 90, 10, "Inflicts damage equal to half the target's HP."],
[163, "slash", "normal", "physical", 70, 100, 20, "Has an increased chance for a critical hit."],
[164, "substitute", "normal", "status", null, null, 10, "Transfers 1/4 of the user's max HP into a doll, protecting the user from further damage or status changes until it breaks."]
	];

	foreach ($move_array as list($a, $b, $c, $d, $e, $f, $g, $h))
	{
		DB::insert('insert into moves
			(id, name, type, category, power, accuracy, pp, effect)
			values
			(?, ?, ?, ?, ?, ?, ?, ?)',
			[$a, $b, $c, $d, $e, $f, $g, $h]);
	}
	}}
