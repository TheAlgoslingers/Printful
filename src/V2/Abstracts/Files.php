<?php
abstract class Files
{
  /**
   * @var (add) Adds a new File to the library by providing URL of the file.
   * @var (getInfo) Get basic information about the file stored in the file library
   */
  abstract function add();
  abstract function getInfo(mix $id);
}