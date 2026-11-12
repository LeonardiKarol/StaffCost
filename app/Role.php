<?php

namespace App;

enum Role: String
{
    case Owner = 'owner';
    case Manager = 'manager';
}
