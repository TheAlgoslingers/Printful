<?php
namespace Selistore\PrintfulApi\V2\Abstracts;

abstract class AuthScopes
{
  abstract function scopes(): array;
}