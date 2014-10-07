<?php
/**
 * @package     Thumbs
 * @subpackage  tpl_seb_thumbs
 * @copyright   Copyright (C) 2014 Rene Bentes Pinto, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see http://www.gnu.org/licenses/gpl-2.0.html
 */

// No direct access.
defined('_JEXEC') or die('Restricted access!');

// -- Initialize
require_once dirname(__FILE__) . '/config.php';

$cck = CCK_Rendering::getInstance($this->template);
if ($cck->initialize() === false)
	return;

// -- Prepare
$html       =	'';
$items      =	$cck->getItems();
$fieldnames =	$cck->getFields('element', '', false);
$count      =	count($items);

// -- Render
if (!empty($items)) :
	foreach ($items as $key => $item) :
		echo $key;
	endforeach;
endif;

/*
if ( $cck->id_class ) {
?>
<div class="<?php echo trim( $cck->id_class ); ?>"><?php }
if ( !$auto_clean ) { ?>
<ul<?php echo $class; ?>>
<?php }
	if ( $count ) {
		if ( $display_mode == 2 ) {
			foreach ( $items as $item ) {
				$row	=	$item->renderPosition( 'element' );
				if ( $row ) {
					$row	=	'<li>'.$row.'</li>';
				}
				$html	.=	$row;
			}
		} elseif ( $display_mode == 1 ) {
			foreach ( $items as $pk=>$item ) {
				$row	=	$cck->renderItem( $pk );
				if ( $row && !$auto_clean ) {
					$row	=	'<li>'.$row.'</li>';
				}
				$html	.=	$row;
			}
		} else {
			foreach ( $items as $item ) {
				$row	=	'';
				foreach ( $fieldnames as $fieldname ) {
					$content	=	$item->renderField( $fieldname );
					if ( $content != '' ) {
						if ( $item->getMarkup( $fieldname ) != 'none' && ( $multiple || $item->getMarkup_Class( $fieldname ) ) ) {
							$row	.=	'<div class="cck-clrfix'.$item->getMarkup_Class( $fieldname ).'">'.$content.'</div>';
						} else {
							$row	.=	$content;
						}
					}
				}
				if ( $row && !$auto_clean ) {
					$row	=	'<li>'.$row.'</li>';
				}
	            $html	.=	$row;
			}
		}
		echo $html;
	}
if ( !$auto_clean ) {
?>
</ul>
<?php
}
if ( $cck->id_class ) { ?>
</div>
<?php } */?>
<?php
// -- Finalize
$cck->finalize();
?>