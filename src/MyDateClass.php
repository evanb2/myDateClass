<?php
	Class MyDateClass
	{
		public $mm;
		public $dd;
		public $yyyy;

		function __construct($mm, $dd, $yyyy)
		{
			$this->mm = $mm;
			$this->dd = $dd;
			$this->yyyy = $yyyy;
		}

		function prettyDate($num)
		{
			if ($num === 0) {
				return date('Y-m-d', mktime(0, 0, 0, $this->mm, $this->dd, $this->yyyy));
			} elseif ($num === 1) {
				return date('m/d/Y', mktime(0, 0, 0, $this->mm, $this->dd, $this->yyyy));
			} elseif ($num === 2) {
				return date('F d, Y', mktime(0, 0, 0, $this->mm, $this->dd, $this->yyyy));
			} elseif ($num === 3){
				return date('\T\h\e jS \d\a\y \o\f \t\h\e \m\o\n\t\h \o\f F, \i\n \t\h\e \y\e\a\r Y',
					   mktime(0, 0, 0, $this->mm, $this->dd, $this->yyyy));
			} else {
				return "Not a valid input";
			}
		}

		static function today()
		{
			return date('Y-m-d');
		}
	}
?>
