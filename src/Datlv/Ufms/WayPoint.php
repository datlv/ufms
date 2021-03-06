<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : src/track.proto
 */


namespace Datlv\Ufms;

/**
 * Protobuf message : ufms.WayPoint
 */
class WayPoint extends \Protobuf\AbstractMessage implements \Protobuf\Extension
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
     * driver optional string = 2
     *
     * @var string
     */
    protected $driver = null;

    /**
     * speed required float = 3
     *
     * @var float
     */
    protected $speed = null;

    /**
     * datetime required int32 = 4
     *
     * @var int
     */
    protected $datetime = null;

    /**
     * x required double = 5
     *
     * @var float
     */
    protected $x = null;

    /**
     * y required double = 6
     *
     * @var float
     */
    protected $y = null;

    /**
     * z optional float = 7
     *
     * @var float
     */
    protected $z = null;

    /**
     * heading optional float = 8
     *
     * @var float
     */
    protected $heading = null;

    /**
     * ignition optional bool = 9
     *
     * @var bool
     */
    protected $ignition = null;

    /**
     * door optional bool = 10
     *
     * @var bool
     */
    protected $door = null;

    /**
     * aircon optional bool = 11
     *
     * @var bool
     */
    protected $aircon = null;

    /**
     * Extension field : msg optional message = 100
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
    public function setDriver($value = null)
    {
        $this->driver = $value;
    }

    /**
     * Check if 'speed' has a value
     *
     * @return bool
     */
    public function hasSpeed()
    {
        return $this->speed !== null;
    }

    /**
     * Get 'speed' value
     *
     * @return float
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set 'speed' value
     *
     * @param float $value
     */
    public function setSpeed($value)
    {
        $this->speed = $value;
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
    public function setDatetime($value)
    {
        $this->datetime = $value;
    }

    /**
     * Check if 'x' has a value
     *
     * @return bool
     */
    public function hasX()
    {
        return $this->x !== null;
    }

    /**
     * Get 'x' value
     *
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set 'x' value
     *
     * @param float $value
     */
    public function setX($value)
    {
        $this->x = $value;
    }

    /**
     * Check if 'y' has a value
     *
     * @return bool
     */
    public function hasY()
    {
        return $this->y !== null;
    }

    /**
     * Get 'y' value
     *
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set 'y' value
     *
     * @param float $value
     */
    public function setY($value)
    {
        $this->y = $value;
    }

    /**
     * Check if 'z' has a value
     *
     * @return bool
     */
    public function hasZ()
    {
        return $this->z !== null;
    }

    /**
     * Get 'z' value
     *
     * @return float
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Set 'z' value
     *
     * @param float $value
     */
    public function setZ($value = null)
    {
        $this->z = $value;
    }

    /**
     * Check if 'heading' has a value
     *
     * @return bool
     */
    public function hasHeading()
    {
        return $this->heading !== null;
    }

    /**
     * Get 'heading' value
     *
     * @return float
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * Set 'heading' value
     *
     * @param float $value
     */
    public function setHeading($value = null)
    {
        $this->heading = $value;
    }

    /**
     * Check if 'ignition' has a value
     *
     * @return bool
     */
    public function hasIgnition()
    {
        return $this->ignition !== null;
    }

    /**
     * Get 'ignition' value
     *
     * @return bool
     */
    public function getIgnition()
    {
        return $this->ignition;
    }

    /**
     * Set 'ignition' value
     *
     * @param bool $value
     */
    public function setIgnition($value = null)
    {
        $this->ignition = $value;
    }

    /**
     * Check if 'door' has a value
     *
     * @return bool
     */
    public function hasDoor()
    {
        return $this->door !== null;
    }

    /**
     * Get 'door' value
     *
     * @return bool
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * Set 'door' value
     *
     * @param bool $value
     */
    public function setDoor($value = null)
    {
        $this->door = $value;
    }

    /**
     * Check if 'aircon' has a value
     *
     * @return bool
     */
    public function hasAircon()
    {
        return $this->aircon !== null;
    }

    /**
     * Get 'aircon' value
     *
     * @return bool
     */
    public function getAircon()
    {
        return $this->aircon;
    }

    /**
     * Set 'aircon' value
     *
     * @param bool $value
     */
    public function setAircon($value = null)
    {
        $this->aircon = $value;
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
            $innerMessage = new \Ufms\WayPoint();

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

            $writer->writeVarint($stream, 802);
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

        return self::$msg = new \Protobuf\Extension\ExtensionField('\\Datlv\\Ufms\\BaseMessage', 'msg', 100, $readCallback, $writeCallback, $sizeCallback, __METHOD__);
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

        if ( ! isset($values['speed'])) {
            throw new \InvalidArgumentException('Field "speed" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['datetime'])) {
            throw new \InvalidArgumentException('Field "datetime" (tag 4) is required but has no value.');
        }

        if ( ! isset($values['x'])) {
            throw new \InvalidArgumentException('Field "x" (tag 5) is required but has no value.');
        }

        if ( ! isset($values['y'])) {
            throw new \InvalidArgumentException('Field "y" (tag 6) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'driver' => null,
            'z' => null,
            'heading' => null,
            'ignition' => null,
            'door' => null,
            'aircon' => null
        ], $values);

        $message->setVehicle($values['vehicle']);
        $message->setDriver($values['driver']);
        $message->setSpeed($values['speed']);
        $message->setDatetime($values['datetime']);
        $message->setX($values['x']);
        $message->setY($values['y']);
        $message->setZ($values['z']);
        $message->setHeading($values['heading']);
        $message->setIgnition($values['ignition']);
        $message->setDoor($values['door']);
        $message->setAircon($values['aircon']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'WayPoint',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'vehicle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'driver',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'speed',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'datetime',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'x',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'y',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'z',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'heading',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'ignition',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'door',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'aircon',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
            'extension' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 100,
                    'name' => 'msg',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'extendee' => '.ufms.BaseMessage',
                    'type_name' => '.ufms.WayPoint'
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
            throw new \UnexpectedValueException('Field "\\Datlv\\Ufms\\WayPoint#vehicle" (tag 1) is required but has no value.');
        }

        if ($this->speed === null) {
            throw new \UnexpectedValueException('Field "\\Datlv\\Ufms\\WayPoint#speed" (tag 3) is required but has no value.');
        }

        if ($this->datetime === null) {
            throw new \UnexpectedValueException('Field "\\Datlv\\Ufms\\WayPoint#datetime" (tag 4) is required but has no value.');
        }

        if ($this->x === null) {
            throw new \UnexpectedValueException('Field "\\Datlv\\Ufms\\WayPoint#x" (tag 5) is required but has no value.');
        }

        if ($this->y === null) {
            throw new \UnexpectedValueException('Field "\\Datlv\\Ufms\\WayPoint#y" (tag 6) is required but has no value.');
        }

        if ($this->vehicle !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->vehicle);
        }

        if ($this->driver !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->driver);
        }

        if ($this->speed !== null) {
            $writer->writeVarint($stream, 29);
            $writer->writeFloat($stream, $this->speed);
        }

        if ($this->datetime !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->datetime);
        }

        if ($this->x !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeDouble($stream, $this->x);
        }

        if ($this->y !== null) {
            $writer->writeVarint($stream, 49);
            $writer->writeDouble($stream, $this->y);
        }

        if ($this->z !== null) {
            $writer->writeVarint($stream, 61);
            $writer->writeFloat($stream, $this->z);
        }

        if ($this->heading !== null) {
            $writer->writeVarint($stream, 69);
            $writer->writeFloat($stream, $this->heading);
        }

        if ($this->ignition !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeBool($stream, $this->ignition);
        }

        if ($this->door !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeBool($stream, $this->door);
        }

        if ($this->aircon !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeBool($stream, $this->aircon);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->driver = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->speed = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->datetime = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->x = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->y = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->z = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->heading = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->ignition = $reader->readBool($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->door = $reader->readBool($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->aircon = $reader->readBool($stream);

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

        if ($this->driver !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->driver);
        }

        if ($this->speed !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->datetime !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->datetime);
        }

        if ($this->x !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->y !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->z !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->heading !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->ignition !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->door !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->aircon !== null) {
            $size += 1;
            $size += 1;
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
        $this->driver = null;
        $this->speed = null;
        $this->datetime = null;
        $this->x = null;
        $this->y = null;
        $this->z = null;
        $this->heading = null;
        $this->ignition = null;
        $this->door = null;
        $this->aircon = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Datlv\Ufms\WayPoint) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->vehicle = ($message->vehicle !== null) ? $message->vehicle : $this->vehicle;
        $this->driver = ($message->driver !== null) ? $message->driver : $this->driver;
        $this->speed = ($message->speed !== null) ? $message->speed : $this->speed;
        $this->datetime = ($message->datetime !== null) ? $message->datetime : $this->datetime;
        $this->x = ($message->x !== null) ? $message->x : $this->x;
        $this->y = ($message->y !== null) ? $message->y : $this->y;
        $this->z = ($message->z !== null) ? $message->z : $this->z;
        $this->heading = ($message->heading !== null) ? $message->heading : $this->heading;
        $this->ignition = ($message->ignition !== null) ? $message->ignition : $this->ignition;
        $this->door = ($message->door !== null) ? $message->door : $this->door;
        $this->aircon = ($message->aircon !== null) ? $message->aircon : $this->aircon;
    }


}

