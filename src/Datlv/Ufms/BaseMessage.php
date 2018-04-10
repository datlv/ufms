<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : src/track.proto
 */


namespace Datlv\Ufms;

/**
 * Protobuf message : ufms.BaseMessage
 */
class BaseMessage extends \Protobuf\AbstractMessage
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
     * msgType required enum = 1
     *
     * @var \Ufms\BaseMessage\MsgType
     */
    protected $msgType = null;

    /**
     * providerId optional string = 2
     *
     * @var string
     */
    protected $providerId = null;

    /**
     * senderId optional string = 3
     *
     * @var string
     */
    protected $senderId = null;

    /**
     * Check if 'msgType' has a value
     *
     * @return bool
     */
    public function hasMsgType()
    {
        return $this->msgType !== null;
    }

    /**
     * Get 'msgType' value
     *
     * @return \Ufms\BaseMessage\MsgType
     */
    public function getMsgType()
    {
        return $this->msgType;
    }

    /**
     * Set 'msgType' value
     *
     * @param \Ufms\BaseMessage\MsgType $value
     */
    public function setMsgType(\Datlv\Ufms\BaseMessage\MsgType $value)
    {
        $this->msgType = $value;
    }

    /**
     * Check if 'providerId' has a value
     *
     * @return bool
     */
    public function hasProviderId()
    {
        return $this->providerId !== null;
    }

    /**
     * Get 'providerId' value
     *
     * @return string
     */
    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * Set 'providerId' value
     *
     * @param string $value
     */
    public function setProviderId($value = null)
    {
        $this->providerId = $value;
    }

    /**
     * Check if 'senderId' has a value
     *
     * @return bool
     */
    public function hasSenderId()
    {
        return $this->senderId !== null;
    }

    /**
     * Get 'senderId' value
     *
     * @return string
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * Set 'senderId' value
     *
     * @param string $value
     */
    public function setSenderId($value = null)
    {
        $this->senderId = $value;
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
        if ( ! isset($values['msgType'])) {
            throw new \InvalidArgumentException('Field "msgType" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'providerId' => null,
            'senderId' => null
        ], $values);

        $message->setMsgType($values['msgType']);
        $message->setProviderId($values['providerId']);
        $message->setSenderId($values['senderId']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'BaseMessage',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'msgType',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.ufms.BaseMessage.MsgType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'providerId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'senderId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
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

        if ($this->msgType === null) {
            throw new \UnexpectedValueException('Field "\\Datlv\Ufms\\BaseMessage#msgType" (tag 1) is required but has no value.');
        }

        if ($this->msgType !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->msgType->value());
        }

        if ($this->providerId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->providerId);
        }

        if ($this->senderId !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->senderId);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->msgType = \Ufms\BaseMessage\MsgType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->providerId = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->senderId = $reader->readString($stream);

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

        if ($this->msgType !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->msgType->value());
        }

        if ($this->providerId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->providerId);
        }

        if ($this->senderId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->senderId);
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
        $this->msgType = null;
        $this->providerId = null;
        $this->senderId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Datlv\Ufms\BaseMessage) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->msgType = ($message->msgType !== null) ? $message->msgType : $this->msgType;
        $this->providerId = ($message->providerId !== null) ? $message->providerId : $this->providerId;
        $this->senderId = ($message->senderId !== null) ? $message->senderId : $this->senderId;
    }


}
