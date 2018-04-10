<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : src/track.proto
 */


namespace Datlv\Ufms;

/**
 * Protobuf extension : ufms.Extension
 */
class Extension implements \Protobuf\Extension
{

    /**
     * Register all extensions
     *
     * @param \Protobuf\Extension\ExtensionRegistry
     */
    public static function registerAllExtensions(\Protobuf\Extension\ExtensionRegistry $registry)
    {
        $registry->add(\Datlv\Ufms\RegVehicle::msg());
        $registry->add(\Datlv\Ufms\RegDriver::msg());
        $registry->add(\Datlv\Ufms\RegCompany::msg());
        $registry->add(\Datlv\Ufms\WayPoint::msg());
    }


}

