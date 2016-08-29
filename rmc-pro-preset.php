<?php
/**
 * Plugin Name:     Responsive Mortgage Calculator Pro - Preset Example
 * Plugin URI:      http://liddweaver.com/responsive-mortgage-calculator-pro
 * Description:     Example for creating a preset calculator for Responsive Mortgage Calculator Pro
 * Version:         1.0.0
 * Author:          David Wilder
 * Author URI:      http://liddweaver.com
 * Text Domain:     rmcp-preset
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:     languages
 *
 * Copyright (C) 2016 David Wilder
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     RMCP Example Preset
 * @category    Addon
 * @author      David Wilder
 * @version     1.0.0
 */

// Cannot access this file directly. Access via WP.
defined( 'ABSPATH') || die;

class RMCP_Example_Preset
{
    /**
     * Initialize
     *
     * @since   1.0.0
     * @return  void
     */
    public function __construct()
    {
        add_action( 'rmcp_add_presets', array( $this, 'add_preset' ) );    
    }
    
    /**
     * Register the preset
     *
     * @since   1.0.0
     * @return  void
     */
    public function add_preset()
    {
        $id     = 'example_preset';
        $title  = 'Example Preset';
        
        //$path   = plugin_dir_path( __FILE__ ) . 'inc/array-preset.php';
        //rmcp_add_preset( $id, $title, $path );
        rmcp_add_preset( $id, $title, null, array( $this, 'get_preset' ) );
    }
    
    /**
     * Get the preset definition
     *
     * @since   1.0.0
     * @return  array   Calculator settings array
     */
    public function get_preset()
    {
        return $this->read_json_file();
    }
    
    /**
     * Return the settings as a JSON string
     *
     * @since   1.0.0
     * @return  string  JSON string
     */
    private function read_json_file()
    {
        $path       = plugin_dir_path( __FILE__ ) . 'inc/json-preset.json';
        $data       = file_get_contents( $path, true );
        $settings   = json_decode( $data, true );
        
        return $settings;
    }
}

function rmcp_example_preset() {
    return new RMCP_Example_Preset();
}

rmcp_example_preset();