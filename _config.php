<?php
// - EDITOR
// - html editor config
$formats = array(
  array(
    'title' => 'Einleitungstext',
    'selector' => 'p',
    'inline' => 'span',
    'classes' => 'text-intro',
    'wrapper' => true,
    'merge_siblings' => false
  ),
  array(
    'title' => 'Zitat',
    'selector' => 'p',
    'inline' => 'span',
    'classes' => 'text-quote',
    'wrapper' => true,
    'merge_siblings' => false
  ),
  array(
    'title' => 'Hinterlegt',
    'selector' => 'p',
    'inline' => 'span',
    'classes' => 'text-background',
    'wrapper' => true,
    'merge_siblings' => false
  ),
  array(
    'title' => 'bei Smartphones verstecken',
    'selector' => 'p',
    'inline' => 'span',
    'classes' => 'text-hidden',
    'wrapper' => true,
    'merge_siblings' => false
  ),
  array(
    'title' => 'Button',
    'selector' => 'a, button',
    'classes' => 'text-btn',
    'wrapper' => false,
  )
);

HtmlEditorConfig::get('cms')
  ->setButtonsForLine(1, array())
  ->setButtonsForLine(2, array())
  ->setButtonsForLine(3, array())
  ->setButtonsForLine(1,
    'undo', 'redo', '|',
    'bold', 'italic', 'underline', 'strikethrough', '|',
    'justifyleft', 'justifycenter', 'justifyright', 'justifyfull', '|',
    'formatselect', '|',
    'bullist', 'numlist', '|', 'outdent', 'indent', '|',
    'sslink', 'unlink', 'anchor', '|', 'code', 'fullscreen'
  )
  ->setOption('theme_advanced_statusbar_location', '')
  // ->setOption('style_formats', $formats)
  ->setOption('theme_advanced_blockformats','h1,h2,h3,h4,p');
  