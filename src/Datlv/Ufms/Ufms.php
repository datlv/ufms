<?php namespace Datlv\Ufms;

/**
 * The Ufms class.
 *
 * @package Datlv\Ufms
 * @author  datlv <datle2011@gmail.com>
 */
class Ufms
{
    public function welcome()
    {
        return 'Welcome to Datlv\Ufms package';
    }
	//3 General Message
	public static function regVehicleWrite($vehicle, $vehicleType, $driver, $company)
	{
		$regVehicle = new RegVehicle();
		//Create Vehicle
		$regVehicle->setVehicle($vehicle);
		$regVehicle->setVehicleType($vehicleType);
		$regVehicle->setDriver($driver);
		$regVehicle->setCompany($company);
		return $regVehicle;
	}
	public static function regDriveWrite($driver)
	{
		$regDriver = new RegDriver();
		//Create Driver
		$regDriver->setDriver($driver);
		return $regDriver;
	}
	public static function regCompanyWrite($company)
	{
		$regCompany = new RegCompany();
		//Create Company
		$regCompany->setCompany($company);

		return $regCompany;
	}
	//3 General Message Extends Base Message
	public static function baseMessageExtendRegVehicle($regVehicle)
	{
		$baseMessage = new \Datlv\Ufms\BaseMessage();
		$baseMessage->setMsgType(\Datlv\Ufms\BaseMessage\MsgType::RegVehicle());
		$baseMessage->extensions()->put($regVehicle::msg(), $regVehicle);
		return $baseMessage;
	}
	public static function baseMessageExtendRegDriver($regDriver)
	{
		$baseMessage = new \Datlv\Ufms\BaseMessage();
		$baseMessage->setMsgType(\Datlv\Ufms\BaseMessage\MsgType::RegDriver());
		$baseMessage->extensions()->put($regDriver::msg(), $regDriver);
		return $baseMessage;
	}
	public static function baseMessageExtendRegCompany($regCompany)
	{
		$baseMessage = new \Datlv\Ufms\BaseMessage();
		$baseMessage->setMsgType(\Datlv\Ufms\BaseMessage\MsgType::RegCompany());
		$baseMessage->extensions()->put($regCompany::msg(), $regCompany);
		return $baseMessage;
	}
	//WayPoint Message
	public static function wayPointWrite($vehicle, $speed, $datetime, $x, $y)
	{
		$wayPoint = new \Datlv\Ufms\WayPoint();
		//Create WayPoint
		$wayPoint->setVehicle($vehicle);
		$wayPoint->setSpeed($speed);
		$wayPoint->setDatetime($datetime);
		$wayPoint->setX($x);
		$wayPoint->setY($y);

		return $wayPoint;
	}
	public static function baseMessageExtendWayPoint($wayPoint)
	{
		$baseMessage = new \Datlv\Ufms\BaseMessage();
		//Create WayPoint
		$baseMessage->setMsgType(\Datlv\Ufms\BaseMessage\MsgType::WayPoint());
		$baseMessage->extensions()->put($wayPoint::msg(), $wayPoint);

		return $baseMessage;
	}
	//Protocol Buffer Byte
	public static function hex_dump($data, $newline="\n")
	{
		static $from = '';
		static $to = '';

		static $width = 16; # number of bytes per line

		static $pad = '.'; # padding for non-visible characters

		if ($from==='')
		{
			for ($i=0; $i<=0xFF; $i++)
			{
				$from .= chr($i);
				$to .= ($i >= 0x20 && $i <= 0x7E) ? chr($i) : $pad;
			}
		}

		$hex = str_split(bin2hex($data), $width*2);
		$chars = str_split(strtr($data, $from, $to), $width);

		$offset = 0;
		foreach ($hex as $i => $line)
		{
			echo sprintf('%6X',$offset).' : '.implode(' ', str_split($line,2)) . ' [' . $chars[$i] . ']' . $newline;
			$offset += $width;
		}
	}
}
