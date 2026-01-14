<?php
$title='Fun Project - 001-labels-and-goto';

// (h)onest (p)HP (c)ode (d)oesn't (l)ie
honest_php_code_doesnt_lie: {
  function h($tag)  {echo '<'.$tag.'>';}
  function p($arr)  {echo '<pre>'; print_r($arr); echo '</pre>';}
  function c($ctn)  {echo $ctn; }
  function d($var)  {echo '<pre>'; var_dump($var); echo '</pre>';}
  function l($m=1)  {static $l=1; return $m ? $l++ : $l--; }
}
$demo=[
  'A' => 'an A',
  'B' => 'a B',
  'C' => 'a C',
  'D' => 'a D',
  'E' => 'an E',
];

html_output: {
  h('!DOCTYPE html');
  h('html lang="de"');
    h('head');
      h('title');
        c($title);
      h('/title');
    h('/head');
    h('body');
      h('h'.$l=l()); c($title); h('/h'.$l);
      h('h'.$l=l()); c('LOOP'); h('/h'.$l); l(0);
      h('ul');
      $i=0; hello_world_loop: {
        h('li style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');"');
          c('Hello World');
        h('/li');
      } if (++$i<10) goto hello_world_loop;
      h('/ul');
      h('h'.$l=l()); c('DONE:'); h('/h'.$l); l(0);
      h('p'); 
      c('Done!'); 
      h('/p');
      h('h'.$l=l()); c('DEMO-ARRAY'); h('/h'.$l); l(0);
      h('hr');
      p($demo);
      d($demo);
      h('hr');
      h('h'.$l=l()); c('NESTED'); h('/h'.$l); l(0);
      h('div');
        h('div');
          c('Nested content');
        h('/div');
      h('/div');

    h('/body');
  h('/html');
}
