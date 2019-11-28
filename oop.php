<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style >
	body{

		 width: 300px;
  border: 5px solid green;
  padding: 50px;

  background-image:url(car.jpg);
  background-position:center;
  background-size:cover;
  margin-left: 500px;

	}

</style>

<center><div style="border-style:solid;font-family:serif;font-size: 25px;color: solid black;">

<?php
	
		class Vehicle{
			//declaring member variable here
			var $model;
			var $fueltype;
			var $capacity;
			var $speed;

			// declaring member function here
//declaring sport car
			function setModel($sportcar){
				$this ->model = $sportcar;

			}

			function getModel(){
				echo "Model: ".  $this->model."<br/>";
			}

			function setFueltype($fuel){
				$this ->fueltype= $fuel;
			}
			function getFueltype(){
				echo "Fueltype: ". $this->fueltype."<br/>";
			}
			function setCapacity($cap){
				$this->capacity=$cap;
			}
			function getCapacity(){
				 echo "Capacity: ". $this->capacity."<br/>";
			}
			function setSpeed($sped){
				$this->speed=$sped;
			}
			function getSpeed(){
				 echo "Speed: ". $this->speed."<br/><br/><br/>";
			}

//declarin jeep
		function setModel1($jeep){
				$this ->model = $jeep;

			}

			function getModel1(){
				echo "Model: ".  $this->model."<br/>";
			}

			function setFueltype1($fuel1){
				$this ->fueltype= $fuel1;
			}
			function getFueltype1(){
				echo "Fueltype: ". $this->fueltype."<br/>";
			}
			function setCapacity1($cap1){
				$this->capacity=$cap1;
			}
			function getCapacity1(){
				 echo "Capacity: ". $this->capacity."<br/>";
			}
			function setSpeed1($sped1){
				$this->speed=$sped1;
			}
			function getSpeed1(){
				 echo "Speed: ". $this->speed."<br/>";
			}

		}

		//declaring Model
		$car = new Vehicle();
		$car->setModel("Jaguar");
		$car->getModel();
		//declaring fueltype
		$car = new Vehicle();
		$car->setFueltype("Racing 97");
		$car->getFueltype();
		//declaring capacity
		$Name = new Vehicle();
		$Name->setCapacity("2");
		$Name->getCapacity();
		//declaring Speed
		$Name = new Vehicle();
		$Name->setSpeed("200kl/h");
		$Name->getSpeed();

		//declaring Model
		$jeepny = new Vehicle();
		$jeepny->setModel1("Chariot Jeep");
		$jeepny->getModel1();
		//declaring fueltype
		$jeepny = new Vehicle();
		$jeepny->setFueltype1("Premium 95");
		$jeepny->getFueltype1();
		//declaring capacity
		$Name = new Vehicle();
		$Name->setCapacity1("20");
		$Name->getCapacity1();
		//declaring Speed
		$Name = new Vehicle();
		$Name->setSpeed1("80kl/h");
		$Name->getSpeed1();


 ?>
 </div></center>
 </body>
</html>