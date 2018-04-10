<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : src/track.proto
 */


namespace Datlv\Ufms;

/**
 * Protobuf message : ufms.RegVehicle
 */
class RegVehicle extends \Protobuf\AbstractMessage implements \Protobuf\Extension
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * vehicle required string = 1
     *
     * @var string
     */
    protected $vehicle = null;

    /**
     * vehicleType required enum = 2
     *
     * @var \Ufms\RegVehicle\VehicleType
     */
    protected $vehicleType = null;

    /**
     * driver required string = 3
     *
     * @var string
     */
    protected $driver = null;

    /**
     * company required string = 4
     *
     * @var string
     */
    protected $company = null;

    /**
     * deviceModelNo optional int32 = 5
     *
     * @var int
     */
    protected $deviceModelNo = null;

    /**
     * deviceModel optional string = 6
     *
     * @var string
     */
    protected $deviceModel = null;

    /**
     * deviceId optional string = 7
     *
     * @var string
     */
    protected $deviceId = null;

    /**
     * sim optional string = 8
     *
     * @var string
     */
    protected $sim = null;

    /**
     * datetime optional int32 = 9
     *
     * @var int
     */
    protected $datetime = null;

    /**
     * vin optional string = 10
     *
     * @var string
     */
    protected $vin = null;

    /**
     * capacity optional float = 11
     *
     * @var float
     */
    protected $capacity = null;

    /**
     * Extension field : msg optional message = 400
     *
     * @var \Protobuf\Extension
     */
    protected static $msg = null;

    /**
     * Check if 'vehicle' has a value
     *
     * @return bool
     */
    public function hasVehicle()
    {
        return $this->vehicle !== null;
    }

    /**
     * Get 'vehicle' value
     *
     * @return string
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Set 'vehicle' value
     *
     * @param string $value
     */
    public function setVehicle($value)
    {
        $this->vehicle = $value;
    }

    /**
     * Check if 'vehicleType' has a value
     *
     * @return bool
     */
    public function hasVehicleType()
    {
        return $this->vehicleType !== null;
    }

    /**
     * Get 'vehicleType' value
     *
     * @return \Ufms\RegVehicle\VehicleType
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Set 'vehicleType' value
     *
     * @param \Datlv\Ufms\RegVehicle\VehicleType $value
     */
    public function setVehicleType(\Datlv\Ufms\RegVehicle\VehicleType $value)
    {
        $this->vehicleType = $value;
    }

    /**
     * Check if 'driver' has a value
     *
     * @return bool
     */
    public function hasDriver()
    {
        return $this->driver !== null;
    }

    /**
     * Get 'driver' value
     *
     * @return string
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Set 'driver' value
     *
     * @param string $value
     */
    public function setDriver($value)
    {
        $this->driver = $value;
    }

    /**
     * Check if 'company' has a value
     *
     * @return bool
     */
    public function hasCompany()
    {
        return $this->company !== null;
    }

    /**
     * Get 'company' value
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set 'company' value
     *
     * @param string $value
     */
    public function setCompany($value)
    {
        $this->company = $value;
    }

    /**
     * Check if 'deviceModelNo' has a value
     *
     * @return bool
     */
    public function hasDeviceModelNo()
    {
        return $this->deviceModelNo !== null;
    }

    /**
     * Get 'deviceModelNo' value
     *
     * @return int
     */
    public function getDeviceModelNo()
    {
        return $this->deviceModelNo;
    }

    /**
     * Set 'deviceModelNo' value
     *
     * @param int $value
     */
    public function setDeviceModelNo($value = null)
    {
        $this->deviceModelNo = $value;
    }

    /**
     * Check if 'deviceModel' has a value
     *
     * @return bool
     */
    public function hasDeviceModel()
    {
        return $this->deviceModel !== null;
    }

    /**
     * Get 'deviceModel' value
     *
     * @return string
     */
    public function getDeviceModel()
    {
        return $this->deviceModel;
    }

    /**
     * Set 'deviceModel' value
     *
     * @param string $value
     */
    public function setDeviceModel($value = null)
    {
        $this->deviceModel = $value;
    }

    /**
     * Check if 'deviceId' has a value
     *
     * @return bool
     */
    public function hasDeviceId()
    {
        return $this->deviceId !== null;
    }

    /**
     * Get 'deviceId' value
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set 'deviceId' value
     *
     * @param string $value
     */
    public function setDeviceId($value = null)
    {
        $this->deviceId = $value;
    }

    /**
     * Check if 'sim' has a value
     *
     * @return bool
     */
    public function hasSim()
    {
        return $this->sim !== null;
    }

    /**
     * Get 'sim' value
     *
     * @return string
     */
    public function getSim()
    {
        return $this->sim;
    }

    /**
     * Set 'sim' value
     *
     * @param string $value
     */
    public function setSim($value = null)
    {
        $this->sim = $value;
    }

    /**
     * Check if 'datetime' has a value
     *
     * @return bool
     */
    public function hasDatetime()
    {
        return $this->datetime !== null;
    }

    /**
     * Get 'datetime' value
     *
     * @return int
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set 'datetime' value
     *
     * @param int $value
     */
    public function setDatetime($value = null)
    {
        $this->datetime = $value;
    }

    /**
     * Check if 'vin' has a value
     *
     * @return bool
     */
    public function hasVin()
    {
        return $this->vin !== null;
    }

    /**
     * Get 'vin' value
     *
     * @return string
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * Set 'vin' value
     *
     * @param string $value
     */
    public function setVin($value = null)
    {
        $this->vin = $value;
    }

    /**
     * Check if 'capacity' has a value
     *
     * @return bool
     */
    public function hasCapacity()
    {
        return $this->capacity !== null;
    }

    /**
     * Get 'capacity' value
     *
     * @return float
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set 'capacity' value
     *
     * @param float $value
     */
    public function setCapacity($value = null)
    {
        $this->capacity = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * Extension field : msg
     *
     * @return \Protobuf\Extension\ExtensionField
     */
    public static function msg()
    {
        if (self::$msg !== null) {
            return self::$msg;
        }

        $readCallback = function (\Protobuf\ReadContext $context, $wire) {
            $reader = $context->getReader();
            $length = $context->getLength();
            $stream = $context->getStream();

            \Protobuf\WireFormat::assertWireType($wire, 11);

            $innerSize    = $reader->readVarint($stream);
            $innerMessage = new \Ufms\RegVehicle();

            $value = $innerMessage;

            $context->setLength($innerSize);
            $innerMessage->readFrom($context);
            $context->setLength($length);

            return $value;
        };

        $writeCallback = function (\Protobuf\WriteContext $context, $value) {
            $stream      = $context->getStream();
            $writer      = $context->getWriter();
            $sizeContext = $context->getComputeSizeContext();

            $writer->writeVarint($stream, 3202);
            $writer->writeVarint($stream, $value->serializedSize($sizeContext));
            $value->writeTo($context);
        };

        $sizeCallback = function (\Protobuf\ComputeSizeContext $context, $value) {
            $calculator = $context->getSizeCalculator();
            $size       = 0;

            $innerSize = $value->serializedSize($context);

            $size += 2;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);

            return $size;
        };

        return self::$msg = new \Protobuf\Extension\ExtensionField('\\Datlv\\Ufms\\BaseMessage', 'msg', 400, $readCallback, $writeCallback, $sizeCallback, __METHOD__);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        if ( ! isset($values['vehicle'])) {
            throw new \InvalidArgumentException('Field "vehicle" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['vehicleType'])) {
            throw new \InvalidArgumentException('Field "vehicleType" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['driver'])) {
            throw new \InvalidArgumentException('Field "driver" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['company'])) {
            throw new \InvalidArgumentException('Field "company" (tag 4) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'deviceModelNo' => null,
            'deviceModel' => null,
            'deviceId' => null,
            'sim' => null,
            'datetime' => null,
            'vin' => null,
            'capacity' => null
        ], $values);

        $message->setVehicle($values['vehicle']);
        $message->setVehicleType($values['vehicleType']);
        $message->setDriver($values['driver']);
        $message->setCompany($values['company']);
        $message->setDeviceModelNo($values['deviceModelNo']);
        $message->setDeviceModel($values['deviceModel']);
        $message->setDeviceId($values['deviceId']);
        $message->setSim($values['sim']);
        $message->setDatetime($values['datetime']);
        $message->setVin($values['vin']);
        $message->setCapacity($values['capacity']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'RegVehicle',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'vehicle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'vehicleType',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.ufms.RegVehicle.VehicleType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'driver',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'company',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'deviceModelNo',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'deviceModel',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'deviceId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'sim',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'datetime',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'vin',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'capacity',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
            'extension' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 400,
                    'name' => 'msg',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'extendee' => '.ufms.BaseMessage',
                    'type_name' => '.ufms.RegVehicle'
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->vehicle === null) {
            throw new \UnexpectedValueException('Field "\\Datlv\\Ufms\\RegVehicle#vehicle" (tag 1) is required but has no value.');
        }

        if ($this->vehicleType === null) {
            throw new \UnexpectedValueException('Field "\\Datlv\\Ufms\\RegVehicle#vehicleType" (tag 2) is required but has no value.');
        }

        if ($this->driver === null) {
            throw new \UnexpectedValueException('Field "\\Datlv\\Ufms\\RegVehicle#driver" (tag 3) is required but has no value.');
        }

        if ($this->company === null) {
            throw new \UnexpectedValueException('Field "\\Datlv\\Ufms\\RegVehicle#company" (tag 4) is required but has no value.');
        }

        if ($this->vehicle !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->vehicle);
        }

        if ($this->vehicleType !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->vehicleType->value());
        }

        if ($this->driver !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->driver);
        }

        if ($this->company !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->company);
        }

        if ($this->deviceModelNo !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->deviceModelNo);
        }

        if ($this->deviceModel !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->deviceModel);
        }

        if ($this->deviceId !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->deviceId);
        }

        if ($this->sim !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->sim);
        }

        if ($this->datetime !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->datetime);
        }

        if ($this->vin !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeString($stream, $this->vin);
        }

        if ($this->capacity !== null) {
            $writer->writeVarint($stream, 93);
            $writer->writeFloat($stream, $this->capacity);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->vehicle = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->vehicleType = \Datlv\Ufms\RegVehicle\VehicleType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->driver = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->company = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->deviceModelNo = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->deviceModel = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->deviceId = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->sim = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->datetime = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->vin = $reader->readString($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->capacity = $reader->readFloat($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->vehicle !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->vehicle);
        }

        if ($this->vehicleType !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->vehicleType->value());
        }

        if ($this->driver !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->driver);
        }

        if ($this->company !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->company);
        }

        if ($this->deviceModelNo !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->deviceModelNo);
        }

        if ($this->deviceModel !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->deviceModel);
        }

        if ($this->deviceId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->deviceId);
        }

        if ($this->sim !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->sim);
        }

        if ($this->datetime !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->datetime);
        }

        if ($this->vin !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->vin);
        }

        if ($this->capacity !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->vehicle = null;
        $this->vehicleType = null;
        $this->driver = null;
        $this->company = null;
        $this->deviceModelNo = null;
        $this->deviceModel = null;
        $this->deviceId = null;
        $this->sim = null;
        $this->datetime = null;
        $this->vin = null;
        $this->capacity = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof RegVehicle) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->vehicle = ($message->vehicle !== null) ? $message->vehicle : $this->vehicle;
        $this->vehicleType = ($message->vehicleType !== null) ? $message->vehicleType : $this->vehicleType;
        $this->driver = ($message->driver !== null) ? $message->driver : $this->driver;
        $this->company = ($message->company !== null) ? $message->company : $this->company;
        $this->deviceModelNo = ($message->deviceModelNo !== null) ? $message->deviceModelNo : $this->deviceModelNo;
        $this->deviceModel = ($message->deviceModel !== null) ? $message->deviceModel : $this->deviceModel;
        $this->deviceId = ($message->deviceId !== null) ? $message->deviceId : $this->deviceId;
        $this->sim = ($message->sim !== null) ? $message->sim : $this->sim;
        $this->datetime = ($message->datetime !== null) ? $message->datetime : $this->datetime;
        $this->vin = ($message->vin !== null) ? $message->vin : $this->vin;
        $this->capacity = ($message->capacity !== null) ? $message->capacity : $this->capacity;
    }


}

