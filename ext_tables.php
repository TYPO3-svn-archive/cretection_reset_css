<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
t3lib_extMgm::addStaticFile($_EXTKEY,'static/reset_css/', 'Reset CSS');
?>