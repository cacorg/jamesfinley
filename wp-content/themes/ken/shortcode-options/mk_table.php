<?php
vc_map(array(
    "name"        => __("Table", "mk_framework"),
    "base"        => "mk_table",
    "category"    => __('General', 'mk_framework'),
    'icon'        => 'icon-mk-table vc_mk_element-icon',
    'description' => __('Adds styles to your data tables.', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "textarea_html",
            "holder"      => "div",
            "heading"     => __("Table HTML content. You can use below sample and create your own data tables.", "mk_framework"),
            "param_name"  => "content",
            "value"       => '<table width="100%">
<thead>
<tr>
<th>Column 1</th>
<th>Column 2</th>
<th>Column 3</th>
<th>Column 4</th>
</tr>
</thead>
<tbody>
<tr>
<td>Item #1</td>
<td>Description</td>
<td>Subtotal:</td>
<td>$3.00</td>
</tr>
<tr>
<td>Item #2</td>
<td>Description</td>
<td>Discount:</td>
<td>$4.00</td>
</tr>
<tr>
<td>Item #3</td>
<td>Description</td>
<td>Shipping:</td>
<td>$7.00</td>
</tr>
<tr>
<td>Item #4</td>
<td>Description</td>
<td>Tax:</td>
<td>$6.00</td>
</tr>
<tr>
<td><strong>All Items</strong></td>
<td><strong>Description</strong></td>
<td><strong>Your Total:</strong></td>
<td><strong>$20.00</strong></td>
</tr>
</tbody>
</table>',
            "description" => __("Please paste your table html code here.", "mk_framework"),
        ),
        $add_device_visibility,
        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "value"       => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "mk_framework"),
        ),
    ),
));