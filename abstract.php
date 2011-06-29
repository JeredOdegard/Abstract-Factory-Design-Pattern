<?php
	// Structure
	abstract class DogManager {
		abstract function getBark();
		abstract function getFart();
	}
	class BernardManager extends DogManager {
		function getBark() {
			return new BernardBark();
		}
		function getFart() {
			return new BernardFart();
		}
	}
	class PoodleManager extends DogManager {
		function getBark() {
			return new PoodleBark();
		}
		function getFart() {
			return new PoodleFart();
		}
	}
	abstract class Bark {
		abstract function activate();
	}
	abstract class Fart {
		abstract function activate();
	}
	class BernardBark extends Bark {
		function activate() {
			print 'ROOOOOOOOOOOOOOOOOOOF';
		}
	}
	class BernardFart extends Fart {
		function activate() {
			print 'THWOMP';
		}
	}
	class PoodleBark extends Bark {
		function activate() {
			print 'roof';
		}
	}
	class PoodleFart extends Fart {
		function activate() {
			print 'psst';
		}
	}
	
	// Runtime Environment
	$Manager = new PoodleManager();
	$Manager->getBark()->activate();
	$Manager->getFart()->activate();
	
	$Manager = new BernardManager();
	$Manager->getBark()->activate();
	$Manager->getFart()->activate();
	
?>