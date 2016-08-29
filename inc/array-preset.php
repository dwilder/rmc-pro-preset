<?php
/**
 * Preset Switch Assigner Example Calculator definition
 *
 * Automatically returns the definition array.
 *
 * @package     RMCP Preset Switch Assigner
 * @copyright   Copyright (c) 2016 David Wilder
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.0
 */
defined( 'ABSPATH' ) || die;

/**
 * Definition for the Switch Assigner Calculator demo
 * @since   1.0.0
 */
return array(
    
    'interface' => array(
        
        'elements' => array(
            
            '0' => array(
                'element' => 'text_input',
                'section' => 'interface',
                'rank' => 0,
                'label' => 'Property Value',
                'placeholder' => '$',
                'help' => null,
                'error_message' => 'Please enter a property value in dollars.',
                'tag' => 'property_value',
                'required' => 1,
                'default' => null,
                'format' => 'currency'
            ),

            '1' => array(
                'element' => 'select_input',
                'section' => 'interface',
                'rank' => 1,
                'label' => 'Municipality',
                'help' => 'Select your borough to determine the correct tax rate.',
                'tag' => 'municipality',
                'options' => array(
                    '0' => array(
                        'option_value' => '0',
                        'option_text' => 'Ahuntsic-Cartierville',
                    ),

                    '1' => array(
                        'option_value' => '1',
                        'option_text' => 'Anjou'
                    ),

                    '2' => array(
                        'option_value' => '2',
                        'option_text' => 'Côte-des-Neiges—Notre-Dame-de-Grâce',
                    ),

                    '3' => array(
                        'option_value' => '3',
                        'option_text' => 'Lachine',
                    ),

                    '4' => array(
                        'option_value' => '4',
                        'option_text' => 'LaSalle',
                    )

                ),

                'default' => 0,
                'format' => 'currency'
            ),

            '2' => array(
                'element' => 'submit_button',
                'section' => 'interface',
                'rank' => 2,
                'value' => 'Calculate'
            ),

            '3' => array(
                'element' => 'results',
                'section' => 'interface',
                'rank' => 3,
                'label' => null,
                'content' => 'Your estimated municipal tax is <b>${municipal_tax}</b> per year.',
                'annual_payment_text' => null,
                'semi_annual_payment_text' => null,
                'quarterly_payment_text' => null,
                'monthly_payment_text' => null,
                'bi_weekly_payment_text' => null,
                'weekly_payment_text' => null,
                'daily_payment_text' => null,
                'term_sw' => null,
                'term_pw' => null,
                'term_sm' => null,
                'term_pm' => null,
                'term_sy' => null,
                'term_py' => null,
                'term_sysw' => null,
                'term_sypw' => null,
                'term_sysm' => null,
                'term_sypm' => null,
                'term_pysw' => null,
                'term_pypw' => null,
                'term_pysm' => null,
                'term_pypm' => null,
                'no_period_text' => null,
                'annual_period_text' => null,
                'semi_annual_period_text' => null,
                'quarterly_period_text' => null,
                'monthly_period_text' => null,
                'bi_weekly_period_text' => null,
                'weekly_period_text' => null,
                'daily_period_text' => null
            ),

        ),

        'settings' => array()

    ),

    'processors' => array(
        
        'elements' => array(
                
            '4' => array(
                'element' => 'switch_assigner',
                'section' => 'processors',
                'rank' => 4,
                'label' => 'Municipal Tax',
                'error_message' => 'Municipality not found. Please select from the list.',
                'tag' => 'municipal_tax',
                'switch_input' => 'municipality',
                'switch_cases' => array(
                    '0' => array(
                        'switch_case' => '0',
                        'switch_assignment' => 'pc_ahuntsic_cartierville_tax',
                    ),

                    '1' => array(
                        'switch_case' => '1',
                        'switch_assignment' => 'pc_anjou_tax',
                    ),

                    '2' => array(
                        'switch_case' => '2',
                        'switch_assignment' => 'pc_cote_des_neiges_notre_dame_de_grace_tax'
                    ),

                    '3' => array(
                        'switch_case' => '3',
                        'switch_assignment' => 'pc_lachine_tax'
                    ),

                    '4' => array(
                        'switch_case' => '4',
                        'switch_assignment' => 'pc_lasalle_tax'
                    ),

                ),

                'on_failure' => 0,
                'default' => null,
                'format' => 'currency',
            )

        ),

        'settings' => array(),

    ),

    'subcalculations' => array(
        
        'elements' => array(
            
            '5' => array(
                'element' => 'cost',
                'section' => 'subcalculations',
                'rank' => 5,
                'label' => 'Ahuntsic-Cartierville Tax',
                'tag' => 'ahuntsic_cartierville_tax',
                'base_cost' => null,
                'base_rate' => 0.6562,
                'rate_basis' => 'property_value',
                'rate_ranges' => array(),
                'range_basis' => 'property_value',
            ),

            '6' => array(
                'element' => 'cost',
                'section' => 'subcalculations',
                'rank' => 6,
                'label' => 'Anjou Tax',
                'tag' => 'anjou_tax',
                'base_cost' => null,
                'base_rate' => 0.6786,
                'rate_basis' => 'property_value',
                'rate_ranges' => array(),
                'range_basis' => 'property_value',
            ),

            '7' => array(
                'element' => 'cost',
                'section' => 'subcalculations',
                'rank' => 7,
                'label' => 'Côte-des-Neiges—Notre-Dame-de-Grâce Tax',
                'tag' => 'cote_des_neiges_notre_dame_de_grace_tax',
                'base_cost' => null,
                'base_rate' => 0.6562,
                'rate_basis' => 'property_value',
                'rate_ranges' => array(),
                'range_basis' => 'property_value'
            ),

            '8' => array(
                'element' => 'cost',
                'section' => 'subcalculations',
                'rank' => 8,
                'label' => 'Lachine Tax',
                'tag' => 'lachine_tax',
                'base_cost' => null,
                'base_rate' => 0.5944,
                'rate_basis' => 'property_value',
                'rate_ranges' => array(),
                'range_basis' => 'property_value',
            ),

            '9' => array(
                'element' => 'cost',
                'section' => 'subcalculations',
                'rank' => 9,
                'label' => 'LaSalle Tax',
                'tag' => 'lasalle_tax',
                'base_cost' => null,
                'base_rate' => 0.5732,
                'rate_basis' => 'property_value',
                'rate_ranges' => array(),
                'range_basis' => 'property_value',
            ),

        ),

        'settings' => array(),
        
    ),

    'calculators' => array(
        
        'elements' => array(
            
            '10' => array(
                'element' => 'payment_calculator',
                'section' => 'calculators',
                'rank' => 10,
                'label' => 'Payment Calculator',
                'tag' => 'pc',
                'property_value' => 'property_value',
                'loan_amount' => 'property_value',
                'payment_period' => 12,
                'compounding_period' => 2,
                'interest_rate' => 5,
                'amortization_period' => 25,
                'subcalculations' => array(
                    0 => array(
                        '0' => 'ahuntsic_cartierville_tax'
                    ),

                    1 => array(
                        '0' => 'anjou_tax'
                    ),

                    2 => array(
                        '0' => 'cote_des_neiges_notre_dame_de_grace_tax'
                    ),

                    3 => array(
                        '0' => 'lachine_tax'
                    ),

                    4 => array(
                        '0' => 'lasalle_tax'
                    )

                )

            )

        ),

        'settings' => array(),

    )

);