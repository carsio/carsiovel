<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php $this->get('title') ?></title>
    <?php $this->section('include', true) ?>
  </head>
  <body>
    <?php $this->section('header') ?>
    <h1>Eu sou um layout oloco meu!</h1>
    <?php $this->section('content'); ?>
  </body>
</html>
