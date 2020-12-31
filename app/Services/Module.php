<?php

namespace App\Services;

class Module{
    private $modules = [];

    function exists( string $module_name ) : bool{
        return in_array( $module_name, array_keys( $this->modules ) );
    }

    function enabled( string $module_name ) : bool{
        $exists = $this->exists( $module_name );

        return $exists;
    }

    function register( array $args ) : bool{
        if( $this->exists( $args['name'] ) ){
            throw new \Exception($args['name'] . ' is already registered');
        }

        $class_name = 'Modules\\' . ucwords( $args['name'] ) . '\\' . ucwords( $args['name'] ) . 'ServiceProvider';
        if( class_exists( $class_name ) ){
            $this->modules[ $args['name'] ] = $args;
            if( isset( $args['admin_links'] ) && !empty( $args['admin_links'] ) ) {
                $this->modules[$args['name']]['route_names'] = $this->findRouteNames($args['admin_links']);
            }
            else{
                $this->modules[$args['name']]['route_names'] = [];
            }
        }
        else{
            throw new \Exception($args['name'] . ' not found');
        }

        return true;
    }

    private function findRouteNames( array $links ) : array
    {
        $route_names = [];
        foreach( $links as $link ){
            if( $link['route'] != '' ){
                $route_names[] = $link['route'];
            }

            if( isset( $link['children'] ) && !empty( $link['children'] ) ){
                $route_names = array_merge(
                    $route_names,
                    $this->findRouteNames( $link['children'] )
                );
            }
        }

        return $route_names;
    }

    function deregister( string $module_name ) : bool{
        if( $this->exists( $module_name ) ){
            unset( $this->modules[ $module_name ] );

            return true;
        }
        else{
            return false;
        }
    }

    function get_registered_modules() : array{
        return $this->modules;
    }

    function get_enabled_modules() : array{
        $registered_modules = $this->get_registered_modules();
        $enabled_modules = $registered_modules;

        return $enabled_modules;
    }
}
